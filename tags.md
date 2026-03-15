---
layout: default
title: Tags
content_class: page-shell
---

# Tags

{% assign all_tags = site.posts | map: 'tags' | join: ',' | split: ',' | uniq | sort %}
{% for tag in all_tags %}{% if tag != "" %}[{{ tag }}](#tag-{{ tag | slugify }}) {% endif %}{% endfor %}
{: class="tag-cloud mb-12"}

{% for tag in all_tags %}
{% if tag != "" %}
### Posts tagged "{{ tag }}"
{: id="tag-{{ tag | slugify }}" class="text-xl font-bold capitalize mb-3 mt-6"}

{% for post in site.posts %}
{% if post.tags contains tag %}
- *{{ post.date | date: "%b %d, %Y" }}* - [{{ post.title }}]({{ post.url }})
{% endif %}
{% endfor %}
{: .post-archive}
{% endif %}
{% endfor %}
