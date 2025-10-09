#!/usr/bin/env python3
"""
Convert Tinkla MediaWiki HTML dump to clean Markdown for shadcn
"""

import os
import re
from pathlib import Path
from bs4 import BeautifulSoup
from html import unescape
import urllib.parse

class WikiConverter:
    def __init__(self, input_dir, output_dir):
        self.input_dir = Path(input_dir)
        self.output_dir = Path(output_dir)
        self.output_dir.mkdir(exist_ok=True)

    def html_to_markdown(self, element, base_indent=0):
        """Convert HTML element to markdown recursively"""
        if element is None:
            return ""

        if isinstance(element, str):
            # Clean up text
            text = element.strip()
            # Normalize whitespace but preserve intentional line breaks
            text = re.sub(r' +', ' ', text)
            return text

        tag = element.name
        text = ""

        # Headers
        if tag in ['h1', 'h2', 'h3', 'h4', 'h5', 'h6']:
            level = int(tag[1])
            content = self.get_text_content(element)
            return f"\n{'#' * level} {content}\n\n"

        # Paragraphs
        elif tag == 'p':
            content = self.process_children(element)
            if content.strip():
                return f"{content}\n\n"
            return ""

        # Lists
        elif tag == 'ul':
            items = []
            for li in element.find_all('li', recursive=False):
                content = self.process_children(li).strip()
                items.append(f"- {content}")
            return "\n".join(items) + "\n\n"

        elif tag == 'ol':
            items = []
            for i, li in enumerate(element.find_all('li', recursive=False), 1):
                content = self.process_children(li).strip()
                items.append(f"{i}. {content}")
            return "\n".join(items) + "\n\n"

        # Links
        elif tag == 'a':
            href = element.get('href', '')
            link_text = self.get_text_content(element)

            # Skip empty links
            if not link_text.strip():
                return ""

            # Convert internal wiki links
            if href.startswith('index_php/'):
                # Remove index_php/ and .html extension
                wiki_page = href.replace('index_php/', '').replace('.html', '')
                # URL decode
                wiki_page = urllib.parse.unquote(wiki_page)
                # Convert to markdown-friendly filename
                md_file = wiki_page.replace(' ', '-').replace('/', '-').replace(':', '') + '.md'
                return f"[{link_text}]({md_file})"

            # External links
            elif href.startswith('http'):
                return f"[{link_text}]({href})"

            # Skip other links (anchors, etc.)
            else:
                return link_text

        # Images
        elif tag == 'img':
            src = element.get('src', '')
            alt = element.get('alt', '')

            # Handle wiki images
            if 'images/' in src:
                # Extract just the filename
                img_name = src.split('/')[-1]
                return f"![{alt}](images/{img_name})"

            return f"![{alt}]({src})"

        # Code/Pre
        elif tag == 'pre':
            content = self.get_text_content(element)
            # If it looks like a note/message (short and has "here" or similar), render as text
            if len(content) < 200 and ('here' in content.lower() or 'note' in content.lower()):
                # Check if it contains a link
                if element.find('a'):
                    return self.process_children(element) + "\n\n"
                return f"> {content}\n\n"
            return f"\n```\n{content}\n```\n\n"

        elif tag == 'code':
            content = self.get_text_content(element)
            return f"`{content}`"

        # Emphasis
        elif tag == 'em' or tag == 'i':
            content = self.process_children(element)
            return f"*{content}*"

        elif tag == 'strong' or tag == 'b':
            content = self.process_children(element)
            return f"**{content}**"

        elif tag == 'big':
            # Convert <big> tags to emphasis
            content = self.process_children(element)
            return f"**{content}**"

        # Line breaks
        elif tag == 'br':
            return "\n"

        # Divs - check for special classes
        elif tag == 'div':
            classes = element.get('class', [])

            # Skip TOC (table of contents)
            if 'toc' in classes:
                return ""

            # Handle collapsible sections
            if 'mw-collapsible' in classes:
                content = self.process_children(element)
                return content

            # Default div processing
            content = self.process_children(element)
            return content

        # Tables
        elif tag == 'table':
            return self.convert_table(element)

        # Default: process children
        else:
            return self.process_children(element)

    def process_children(self, element):
        """Process all children of an element"""
        result = []
        for child in element.children:
            converted = self.html_to_markdown(child)
            if converted:
                result.append(converted)
        return "".join(result)

    def get_text_content(self, element):
        """Get plain text content from element"""
        return element.get_text().strip()

    def convert_table(self, table):
        """Convert HTML table to markdown table"""
        rows = []
        for tr in table.find_all('tr'):
            cells = []
            for cell in tr.find_all(['th', 'td']):
                content = self.process_children(cell).strip().replace('\n', ' ')
                cells.append(content)
            if cells:
                rows.append(cells)

        if not rows:
            return ""

        # Create markdown table
        md_table = []
        for i, row in enumerate(rows):
            md_table.append("| " + " | ".join(row) + " |")
            # Add separator after header row
            if i == 0:
                md_table.append("| " + " | ".join(["---"] * len(row)) + " |")

        return "\n".join(md_table) + "\n\n"

    def extract_content(self, html_path):
        """Extract main content from MediaWiki HTML"""
        with open(html_path, 'r', encoding='utf-8') as f:
            soup = BeautifulSoup(f.read(), 'html.parser')

        # Get the page title
        title_elem = soup.find('h1', {'class': 'firstHeading'})
        title = title_elem.get_text().strip() if title_elem else ""

        # Get the main content
        content_div = soup.find('div', {'class': 'mw-parser-output'})

        if not content_div:
            return None, None

        # Remove HTML comments (MediaWiki parser output)
        from bs4 import Comment
        for comment in content_div.find_all(string=lambda text: isinstance(text, Comment)):
            comment.extract()

        return title, content_div

    def convert_file(self, html_file):
        """Convert a single HTML file to markdown"""
        # Skip File_ and Category_ pages
        filename = html_file.stem
        if filename.startswith('File_') or filename.startswith('Category_') or filename.startswith('Special_'):
            return None

        title, content = self.extract_content(html_file)

        if not content:
            print(f"Skipping {html_file.name} - no content found")
            return None

        # Convert HTML to markdown
        markdown_content = self.html_to_markdown(content)

        # Clean up extra whitespace
        markdown_content = re.sub(r'\n{3,}', '\n\n', markdown_content)
        markdown_content = markdown_content.strip()

        # Remove MediaWiki parser cache artifacts
        markdown_content = re.sub(r'NewPP limit report.*?timestamp \d+.*?\d+', '', markdown_content, flags=re.DOTALL)
        markdown_content = re.sub(r'Transclusion expansion time report.*?-total.*?timestamp \d+.*?\d+', '', markdown_content, flags=re.DOTALL)
        markdown_content = re.sub(r'Cached time:.*?\n', '', markdown_content)
        markdown_content = re.sub(r'Cache expiry:.*?\n', '', markdown_content)
        markdown_content = re.sub(r'CPU time usage:.*?\n', '', markdown_content)
        markdown_content = re.sub(r'Saved in parser cache.*?\n', '', markdown_content)

        # Clean up extra whitespace again after removals
        markdown_content = re.sub(r'\n{3,}', '\n\n', markdown_content)
        # Clean up multiple spaces
        markdown_content = re.sub(r'  +', ' ', markdown_content)
        markdown_content = markdown_content.strip()

        # Create final markdown with title
        if title:
            final_markdown = f"# {title}\n\n{markdown_content}"
        else:
            final_markdown = markdown_content

        # Create output filename
        output_name = filename.replace(' ', '-').replace('/', '-').replace(':', '') + '.md'
        output_path = self.output_dir / output_name

        # Write markdown file
        with open(output_path, 'w', encoding='utf-8') as f:
            f.write(final_markdown)

        print(f"Converted: {html_file.name} -> {output_name}")
        return output_name

    def convert_all(self):
        """Convert all HTML files in the input directory"""
        html_files = list(self.input_dir.glob('*.html'))

        print(f"Found {len(html_files)} HTML files")

        converted = []
        skipped = []

        for html_file in sorted(html_files):
            result = self.convert_file(html_file)
            if result:
                converted.append(result)
            else:
                skipped.append(html_file.name)

        print(f"\nConversion complete!")
        print(f"Converted: {len(converted)} files")
        print(f"Skipped: {len(skipped)} files")

        return converted

def main():
    input_dir = "tinkla-wiki/index_php"
    output_dir = "wiki-markdown"

    converter = WikiConverter(input_dir, output_dir)
    converted_files = converter.convert_all()

    print(f"\nMarkdown files created in: {output_dir}/")

if __name__ == "__main__":
    main()
