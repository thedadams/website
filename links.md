---
layout: default
title: Links
content_class: page-shell links-page
---

# Links

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
