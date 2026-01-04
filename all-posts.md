---
layout: default
title: All Posts
---

<div class="max-w-4xl mx-auto px-4 py-8">
  <h1 class="text-4xl font-bold mb-8">All Posts</h1>

  {% assign sorted_posts = site.posts | sort: 'date' | reverse %}
  <ul class="space-y-2">
    {% for post in sorted_posts %}
    <li>
      <span class="text-sm text-gray-600">{{ post.date | date: "%b %d, %Y" }}</span> -
      <a href="{{ post.url }}">{{ post.title }}</a>
    </li>
    {% endfor %}
  </ul>
</div>
