---
layout: default
title: Links
---

<div class="max-w-6xl mx-auto px-4 py-8">
  <h1 class="text-4xl font-bold text-center mb-8">Links</h1>
  
  <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
    {% for link in site.data.links %}
    <div class="border border-gray-300 rounded-lg p-4 hover:shadow-lg transition-shadow">
      <div class="flex items-center mb-3">
        <img src="{{ link.fileUrl }}" alt="{{ link.name }}" class="w-12 h-12 mr-3 object-contain">
        <h3 class="font-bold text-lg">{{ link.name }}</h3>
      </div>
      <p class="text-sm text-gray-600 mb-3">{{ link.description }}</p>
      <a href="{{ link.url }}" class="text-blue-400 hover:underline text-sm" target="_blank" rel="noopener noreferrer">Visit →</a>
    </div>
    {% endfor %}
  </div>
</div>
