#!/usr/bin/env python3
"""
Copy valid images from tinkla-wiki to docs/images
Uses thumbnails when originals are corrupted
"""

import os
import shutil
import subprocess
from pathlib import Path
import re

def is_valid_image(filepath):
    """Check if an image file is valid using the 'file' command"""
    if not os.path.exists(filepath):
        return False

    result = subprocess.run(['file', str(filepath)], capture_output=True, text=True)
    output = result.stdout.lower()

    # Check for valid image signatures
    if 'jpeg image data' in output or 'png image data' in output or 'gif image data' in output:
        return True
    return False

def find_best_image(image_name, wiki_dir):
    """
    Find the best available version of an image
    Priority: valid full-size > largest valid thumbnail
    Returns: path or None
    """
    wiki_path = Path(wiki_dir) / 'images'

    # Remove extension to match MediaWiki naming
    name_no_ext = os.path.splitext(image_name)[0]
    ext = os.path.splitext(image_name)[1].lower()

    # MediaWiki converts .jpg to _jpg in directory names
    mw_ext = ext.replace('.', '_')

    candidates = []

    # Search through all directories in images/
    for root, dirs, files in os.walk(wiki_path):
        # Look for thumbnail directories that match our filename
        # Format: images/thumb/X/XX/Filename_ext/NNNpx-Filename.ext
        if name_no_ext in root:
            for file in files:
                if name_no_ext in file and file.endswith(ext):
                    full_path = os.path.join(root, file)
                    if is_valid_image(full_path):
                        # Extract size from filename like "450px-AP1_Harness-1.jpg"
                        size_match = re.match(r'(\d+)px-', file)
                        size = int(size_match.group(1)) if size_match else 0
                        candidates.append((full_path, size, 'thumb' in root))

        # Also check for direct files in hash directories
        for file in files:
            if file.lower() == image_name.lower():
                full_path = os.path.join(root, file)
                if is_valid_image(full_path):
                    # Full size images get priority (size = 999999)
                    candidates.append((full_path, 999999, False))

    if not candidates:
        return None

    # Sort by size (largest first), prefer non-thumbnails
    candidates.sort(key=lambda x: x[1], reverse=True)
    return candidates[0][0]

def main():
    wiki_dir = Path('/Users/jackbrandt/projects/openpilot/NAP-wiki/tinkla-wiki')
    docs_images_dir = Path('/Users/jackbrandt/projects/openpilot/NAP-wiki/docs/images')

    # Ensure docs/images directory exists
    docs_images_dir.mkdir(parents=True, exist_ok=True)

    # Get all image references from markdown files
    docs_dir = Path('/Users/jackbrandt/projects/openpilot/NAP-wiki/docs')
    image_refs = set()

    for md_file in docs_dir.glob('*.md'):
        with open(md_file, 'r', encoding='utf-8') as f:
            content = f.read()
            # Find all image references like ![alt](images/filename.jpg)
            matches = re.findall(r'!\[.*?\]\(images/(.*?)\)', content)
            image_refs.update(matches)

    print(f"Found {len(image_refs)} unique image references in markdown files\n")

    # Process each image
    copied = 0
    not_found = []

    for img_name in sorted(image_refs):
        dest_path = docs_images_dir / img_name

        # Find best available version
        source_path = find_best_image(img_name, wiki_dir)

        if source_path:
            # Copy the image
            shutil.copy2(source_path, dest_path)

            # Check size to determine if it's a thumbnail
            size_match = re.search(r'(\d+)px-', source_path)
            if size_match:
                size = size_match.group(1)
                print(f"✓ {img_name} - copied {size}px thumbnail")
            else:
                print(f"✓ {img_name} - copied full size")
            copied += 1
        else:
            print(f"✗ {img_name} - NOT FOUND (no valid version)")
            not_found.append(img_name)

    print(f"\n=== Summary ===")
    print(f"Copied: {copied}")
    print(f"Not found: {len(not_found)}")

    if not_found:
        print(f"\nMissing images (no valid version found):")
        for img in not_found:
            print(f"  - {img}")

if __name__ == "__main__":
    main()
