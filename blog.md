---
layout: default
title: Blog
content_class: blog-page
---

<section class="blog-main" markdown="1">

# Recent Posts
{% assign sorted_posts = site.posts | sort: 'date' | reverse %}
{% for post in sorted_posts limit:8 %}
- ## [{{ post.title }}]({{ post.url }}){: .btn-link}

  Posted on {{ post.date | date: "%m/%d/%Y" }}
  {: .post-meta}

  {{ post.content | strip_html | truncatewords: 80 }}
  {: .post-excerpt}

  [Read more...]({{ post.url }})

  {% if post.updated %}
  Updated on {{ post.updated }}
  {: .post-meta}
  {% endif %}
{% endfor %}
{: .blog-post-list}

</section>

- ## Navigation

  [All Posts](/all-posts.html)

- ## Tags
  {% assign all_tags = site.posts | map: 'tags' | join: ',' | split: ',' | uniq | sort %}
  {% for tag in all_tags %}{% if tag != "" %}[{{ tag }}](/tags.html#tag-{{ tag | slugify }}) {% endif %}{% endfor %}
  {: .tag-cloud}

- [Subscribe via RSS](https://thedadams.com/feed.xml)
  {: .sidebar-feed}
{: .blog-sidebar}
