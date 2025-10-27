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

## Content Sources

- **Links**: Statically embedded from [thedadams/links](https://github.com/thedadams/links) repository
- **Blog Posts**: Statically embedded from [thedadams/blogposts](https://github.com/thedadams/blogposts) repository

## Migration Notes

This site was migrated from a Vue.js application to Jekyll. Key migration changes:

- Converted 14 Vue pages to Markdown/HTML
- Converted 31 blog posts to Jekyll format  
- Replaced dynamic data fetching with static data files
- Simplified deployment using GitHub Pages
- Organized all static assets in `assets/images/` directory
