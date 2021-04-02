#!/usr/local/bin/python3

import sys
import os
import json
from typing import List, Any

POST_ROOT = "Posts/"
RSS_FILE = "feed.rss"
POST_TAGS_FILE = "PostTags.json"
TAG_LINE = "#tags: "


def generate_tags() -> None:
    all_tags = {}
    for directory, _, files in os.walk(POST_ROOT):
        for day in files:
            year = directory.replace(POST_ROOT, "")
            month = year.split("/")[1]
            tag_date = year[:4] + "-" + month + "-" + day
            tags, title = tags_from_file(directory + "/" + day)
            for tag in tags:
                if tag not in all_tags:
                    all_tags[tag] = {}
                if title not in all_tags[tag]:
                    all_tags[tag][title] = tag_date
    f = open(POST_TAGS_FILE, 'w')
    f.write(json.dumps(all_tags))
    f.close()


def tags_from_file(post_file: str) -> (List[str], str):
    f = open(post_file)
    title = f.readline().lower().strip()
    tags = []
    for line in f:
        if TAG_LINE in line:
            tags = line.replace(TAG_LINE, "").split(", ")
    return tags, title


def generate_rss_feed() -> None:
    try:
        f = open(RSS_FILE, 'w')
    except:
        print("Cannot find rss file " + RSS_FILE)
        sys.exit(1)
    f.write('<?xml version="1.0"?>\n')
    f.write('<rss version="2.0" xmlns:atom=http://www.w3.org/2005/Atom">\n\n')
    f.write('<channel>\n\t<title>The Blog of a Math Nerd</title>\n')
    f.write('\t<description>Sports, math, programming</description>\n')
    f.write('\t<atom:link href=https://thedadams.com/feed.rss" rel="self" \
            type="application/rss+xml"/>\n')
    f.write('\t<link>https://thedadams.com/Blog.html</link>\n')
    f.write('\t<copyright>&#169; Donnie Adams</copyright>\n')
    years = os.listdir(POST_ROOT)
    years.sort(reverse=True)
    num = 0
    done = False
    for year in years:
        if os.path.isfile(POST_ROOT + year):
            continue
        months = os.listdir(POST_ROOT + year)
        months.sort(reverse=True)
        for month in months:
            if os.path.isfile(POST_ROOT + year + "/" + month):
                continue
            days = os.listdir(POST_ROOT + year + "/" + month)
            days.sort(reverse=True)
            for d in days:
                if done:
                    break
                if d == ".DS_Store":
                    continue

                file = open(POST_ROOT + year + "/" + month + "/" + d)
                f.write('\n\t<item>\n\n')
                title = file.readline().strip()
                f.write('\t\t<title>' + title + '</title>\n')
                body = ""
                for line in file:
                    if TAG_LINE not in line:
                        line.replace(
                            'href="Post.html?post=',
                            'href="https://thedadams.com/Post.html?post=', -1
                        )
                        body = body + line
                f.write(
                    '\t\t<description><![CDATA[' +
                    body +
                    ']]></description>\n'
                )
                f.write('\t\t<link>https://thedadams.com/Post.html?post=' +
                        year + '-' + month + '-' + d +
                        '</link>\n'
                        )
                f.write(
                    '\t\t<guid isPermaLink="false">\
                    https://thedadams.com/Post.html?post=' +
                    year + '-' + month + '-' + d +
                    '</guid>\n'
                )
                f.write(
                    '\t\t<pubDate>' +
                    month[2:] + ' ' + d + ' ' + year +
                    '</pubDate>\n\n')
                f.write('\t</item>\n\n')
                file.close()
                num += 1

                if num == 25:
                    done = True
            if done:
                break
        if done:
            break
    f.write('</channel>\n\n</rss>')
    f.close()


generate_tags()
generate_rss_feed()
