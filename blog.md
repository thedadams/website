---
layout: default
title: Blog
---

<div class="max-w-6xl mx-auto px-4 py-8">
  <div class="grid grid-cols-1 md:grid-cols-5 md:gap-16">
    <div class="md:col-span-4">
      <h1 class="text-4xl font-bold mb-8">Recent Posts</h1>
      
      <div class="divide-y divide-orange-400">
        {% assign sorted_posts = site.posts | sort: 'date' | reverse %}
        {% for post in sorted_posts limit:8 %}
        <div class="py-6">
          <h2 class="text-2xl font-bold mb-2">
            <a href="{{ post.url }}" class="btn-link">{{ post.title }}</a>
          </h2>
          <p class="text-xs mb-2">Posted on {{ post.date | date: "%m/%d/%Y" }}</p>
          <div class="prose max-w-none mb-3">
            {{ post.content | strip_html | truncatewords: 50 }}
          </div>
          <a href="{{ post.url }}">Read more...</a>
          <p class="text-xs mt-5">{% if post.updated %}Updated on {{ post.updated }}{% endif %}</p>
        </div>
        {% endfor %}
      </div>
    </div>

    <div class="md:col-span-1">
      <div class="mt-4">
        <h2 class="text-xl font-bold mb-4">Navigation</h2>
        <div class="space-y-4">
          <div>
            <a href="/all-posts.html" class="hover:text-blue-400">All Posts</a>
          </div>
        </div>

        <h2 class="text-xl font-bold mb-4 mt-6">Tags</h2>
        <div class="flex flex-wrap gap-2">
          {% assign all_tags = site.posts | map: 'tags' | join: ',' | split: ',' | uniq | sort %}
          {% for tag in all_tags %}
          {% if tag != "" %}
          <a href="/tags.html#tag-{{ tag | slugify }}" class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full hover:bg-blue-200 capitalize">{{ tag }}</a>
          {% endif %}
          {% endfor %}
        </div>

        <div class="mt-6">
          <a href="https://raw.githubusercontent.com/thedadams/blogposts/main/feed.rss" class="text-sm hover:text-blue-400" title="Subscribe to the Feed">Subscribe via RSS</a>
        </div>
      </div>
    </div>
  </div>
</div>
