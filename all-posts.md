---
layout: default
title: All Posts
content_class: page-shell
---

# All Posts

{% assign sorted_posts = site.posts | sort: 'date' | reverse %}
{% for post in sorted_posts %}
- *{{ post.date | date: "%b %d, %Y" }}* - [{{ post.title }}]({{ post.url }})
{% endfor %}
{: .post-archive}
