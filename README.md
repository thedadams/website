# thedadams.com

Personal website and blog for Donnie Adams.

## Overview

This site has been migrated from a Vue.js multi-page application to a Jekyll static site for use with GitHub Pages.

## Technology Stack

- **Jekyll 4.4** - Static site generator
- **Tailwind CSS** (via CDN) - Styling
- **GitHub Pages** - Hosting and deployment

## Site Structure

- `_layouts/` - Jekyll layout templates
- `_includes/` - Reusable components (navbar, footer)
- `_posts/` - Blog posts in Markdown format
- `_data/` - Data files (links.json)
- `assets/images/` - Static assets (images, PDFs, etc.)
- `*.md` - Page content files

## Local Development

### Prerequisites

- Ruby 3.1 or higher
- Bundler

### Setup

```bash
# Install dependencies
bundle install

# Build the site
bundle exec jekyll build

# Serve locally with live reload
bundle exec jekyll serve

# View at http://localhost:4000
```

## Deployment

The site automatically deploys to GitHub Pages via the `.github/workflows/jekyll.yml` workflow on pushes to the `main` branch.
