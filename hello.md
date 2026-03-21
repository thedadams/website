---
layout: default
title: Hello
content_class: page-shell links-page
---

# Hello

Here are some ways you can contact me. Use your favorite!

Updated on March 21st, 2026.
{: .updated-note}

{% for link in site.data.links %}
- <img
    src="{{ link.fileUrl }}"
    alt="{{ link.name }}"
    class="{% if link.name == 'GitHub' or link.name == 'Instagram' or link.name == 'Public Key' or link.name == 'Email' %}link-icon-light-on-dark{% endif %}"
  />

  ### {{ link.name }}

  {{ link.description }}

  [Visit ->]({{ link.url }}){: target="_blank" rel="noopener noreferrer"}
{% endfor %}
