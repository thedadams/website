---
layout: default
title: Tags
---

<div class="max-w-4xl mx-auto px-4 py-8">
  <h1 class="text-4xl font-bold mb-8">Tags</h1>

  {% assign all_tags = site.posts | map: 'tags' | join: ',' | split: ',' | uniq | sort %}
  <div class="flex flex-wrap gap-2 mb-12">
    {% for tag in all_tags %}
    {% if tag != "" %}
    <a href="#tag-{{ tag | slugify }}" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full hover:bg-blue-200 capitalize">{{ tag }}</a>
    {% endif %}
    {% endfor %}
  </div>

  {% for tag in all_tags %}
  {% if tag != "" %}
  <div id="tag-{{ tag | slugify }}" class="mt-6">
    <h3 class="text-xl font-bold capitalize mb-3">Posts tagged "{{ tag }}"</h3>
    <ul class="space-y-1 mb-4">
      {% for post in site.posts %}
      {% if post.tags contains tag %}
      <li>
        <span class="text-sm text-gray-600">{{ post.date | date: "%b %d, %Y" }}</span> -
        <a href="{{ post.url }}">{{ post.title }}</a>
      </li>
      {% endif %}
      {% endfor %}
    </ul>
  </div>
  {% endif %}
  {% endfor %}
</div>
