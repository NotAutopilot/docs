#!/usr/bin/env python3
"""
Fix corrupted images by copying valid versions from tinkla-wiki source
"""

import os
import shutil
import subprocess
from pathlib import Path

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

def find_source_image(image_name, wiki_dir):
    """
    Find a valid version of an image in the wiki source directory
    Returns: (path, is_thumbnail) or (None, False) if not found
    """
    wiki_path = Path(wiki_dir)

    # Search for the image in the wiki directory structure
    # MediaWiki stores images in subdirectories like images/8/8c/filename.jpg
    for root, dirs, files in os.walk(wiki_path / 'images'):
        for file in files:
            if file.lower() == image_name.lower():
                full_path = os.path.join(root, file)
                if is_valid_image(full_path):
                    is_thumb = '/thumb/' in str(full_path)
                    return (full_path, is_thumb)

    # If not found, try to find a thumbnail version
    for root, dirs, files in os.walk(wiki_path / 'images' / 'thumb'):
        for file in files:
            if file.lower() == image_name.lower() or file.lower().startswith(image_name.lower().replace('.', '-')):
                full_path = os.path.join(root, file)
                if is_valid_image(full_path):
                    return (full_path, True)

    return (None, False)

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
            import re
            matches = re.findall(r'!\[.*?\]\(images/(.*?)\)', content)
            image_refs.update(matches)

    print(f"Found {len(image_refs)} unique image references in markdown files")

    # Process each image
    copied = 0
    from_thumb = 0
    not_found = []
    already_valid = 0

    for img_name in sorted(image_refs):
        dest_path = docs_images_dir / img_name

        # Check if the destination already has a valid image
        if is_valid_image(dest_path):
            print(f"✓ {img_name} - already valid")
            already_valid += 1
            continue

        # Find source image
        source_path, is_thumb = find_source_image(img_name, wiki_dir)

        if source_path:
            # Copy the image
            shutil.copy2(source_path, dest_path)
            if is_thumb:
                print(f"📸 {img_name} - copied from thumbnail")
                from_thumb += 1
            else:
                print(f"✓ {img_name} - copied from source")
            copied += 1
        else:
            print(f"✗ {img_name} - NOT FOUND")
            not_found.append(img_name)

    print(f"\n=== Summary ===")
    print(f"Already valid: {already_valid}")
    print(f"Copied from source: {copied - from_thumb}")
    print(f"Copied from thumbnails: {from_thumb}")
    print(f"Not found: {len(not_found)}")

    if not_found:
        print(f"\nMissing images:")
        for img in not_found:
            print(f"  - {img}")

if __name__ == "__main__":
    main()
