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
            <a href="{{ post.url }}" class="text-blue-400 hover:underline">{{ post.title }}</a>
          </h2>
          <p class="text-xs mb-2">Posted on {{ post.date | date: "%m/%d/%Y" }}</p>
          <div class="prose max-w-none mb-3">
            {{ post.content | strip_html | truncatewords: 50 }}
          </div>
          <a href="{{ post.url }}" class="text-blue-400 hover:underline">Read more...</a>
          <p class="text-xs mt-5">{% if post.updated %}Updated on {{ post.updated }}{% endif %}</p>
        </div>
        {% endfor %}
      </div>
      
      <div class="mt-8">
        <h2 class="text-2xl font-bold mb-4">All Posts</h2>
        <ul class="list-disc list-inside space-y-2">
          {% for post in sorted_posts %}
          <li>
            <span class="text-sm text-gray-600">{{ post.date | date: "%b %d, %Y" }}</span> - 
            <a href="{{ post.url }}" class="text-blue-400 hover:underline">{{ post.title }}</a>
          </li>
          {% endfor %}
        </ul>
      </div>
      
      <div class="mt-12">
        <h2 class="text-2xl font-bold mb-4">Posts by Tag</h2>
        {% assign all_tags = site.posts | map: 'tags' | join: ',' | split: ',' | uniq | sort %}
        <div class="flex flex-wrap gap-2">
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
          <ul class="list-disc list-inside space-y-1 mb-4">
            {% for post in site.posts %}
            {% if post.tags contains tag %}
            <li>
              <span class="text-sm text-gray-600">{{ post.date | date: "%b %d, %Y" }}</span> - 
              <a href="{{ post.url }}" class="text-blue-400 hover:underline">{{ post.title }}</a>
            </li>
            {% endif %}
            {% endfor %}
          </ul>
        </div>
        {% endif %}
        {% endfor %}
      </div>
    </div>
    
    <div class="md:col-span-1">
      <div class="mt-4">
        <h2 class="text-xl font-bold text-blue-400 mb-4">Archive</h2>
        <div class="space-y-4">
          <div>
            <h3 class="font-semibold mb-2">By Year</h3>
            {% assign posts_by_year = site.posts | group_by_exp: "post", "post.date | date: '%Y'" %}
            <ul class="space-y-1">
              {% for year in posts_by_year %}
              <li>
                <a href="#year-{{ year.name }}" class="text-blue-400 hover:underline">{{ year.name }} ({{ year.items | size }})</a>
              </li>
              {% endfor %}
            </ul>
          </div>
          
          <div>
            <a href="https://raw.githubusercontent.com/thedadams/blogposts/main/feed.rss" class="text-sm text-blue-400 hover:underline" title="Subscribe to the Feed">Subscribe via RSS</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Year archives -->
  <div class="mt-12">
    {% for year in posts_by_year %}
    <div id="year-{{ year.name }}" class="mb-12">
      <h2 class="text-3xl font-bold text-blue-400 mb-4">{{ year.name }}</h2>
      {% assign posts_by_month = year.items | group_by_exp: "post", "post.date | date: '%B'" %}
      {% for month in posts_by_month %}
      <div class="mb-6">
        <h3 class="text-xl font-semibold mb-2">{{ month.name }}</h3>
        <hr class="border-orange-400 mb-3">
        <ul class="list-disc list-inside ml-4 space-y-1">
          {% for post in month.items %}
          <li>
            <span class="text-sm text-gray-600">{{ post.date | date: "%d" }}</span> - 
            <a href="{{ post.url }}" class="text-blue-400 hover:underline">{{ post.title }}</a>
          </li>
          {% endfor %}
        </ul>
      </div>
      {% endfor %}
    </div>
    {% endfor %}
  </div>
</div>
