---
layout: post
title: "Create Your Own Dynamic DNS Updater"
date: 2016-01-15
tags: ["how-to", "cloudflare"]
updated: "04/02/2021"
author: "Donnie"
---
When DynDNS shutdown their free tiers, I, like many people, was left looking for an alternative. I tried [No-IP](https://noip.com), but their automatic updater never worked for me. Therefore, I was left to manually update my dynamic IP every 30 days like some type of animal. I was already using [CloudFlare](https://cloudflare.com) for caching, simple threat identification, and basic analytics (I don't want to use Google), so I decided to make my own dynamic DNS updater using CloudFlare, Python, and launchd. Before I layout the steps, I will say that [dynDNS Remote Access](https://dyn.com/remote-access/) is $40 per year at the time of this writing. This is definitely affordable, but a domain name is cheaper and more versatile. Feel free to follow these steps to setup your own solution. In order to complete this setup, you need a domain name, a CloudFlare account, and a Mac with python3 installed.

First we will setup CloudFlare. You will need to point your domain to CloudFlare's name servers. If you haven't done this yet, you can follow [these steps](https://support.cloudflare.com/hc/en-us/articles/205195708-Step-3-Change-your-domain-name-servers-to-CloudFlare). It might take a couple hours for the DNS to propagate, but CloudFlare will email you when the name servers are updated. Once your domain is pointing to CloudFlare, you need to setup a new [subdomain A record](https://support.cloudflare.com/hc/en-us/articles/200169096-How-do-I-add-A-records-). You can call the new A record whatever you like, but it should be easy to remember. For example, I use the subdomain "office." Simply enter 1.2.3.4 in the IP field; this will be updated by your computer.

The last thing you need from CloudFlare is your API key. You can find it by following [these steps](https://support.cloudflare.com/hc/en-us/articles/200167836-Where-do-I-find-my-CloudFlare-API-key-). You should protect this key like a password.

Now we go to the computer. The first thing we need to do here is create the Python script used to automatically update your IP address. You can copy and paste the script [here](/assets/images/CFDNSUpdater.py). Please make sure to replace the pieces in all caps with your information: `EMAIL-ADDRESS`, `YOUR-API-KEY`, `YOURDOMAIN.COM`, and `SUBDOMAIN`. Next, download [this file](/assets/images/com.USERNAME.cfdns.plist), open it in a text editor and replace the pieces in all caps: `USERNAME` and `/COMPLETE/PATH/TO/PYTHON/SCRIPT/`. Once this file is edited, save it as `com.USERNAME.cfdns.plist` in your Downloads folder, again replacing `USERNAME` with your username on your computer.

Next, open a Terminal window and type the following commands:

```
chmod +x /COMPLETE/PATH/TO/PYTHON/SCRIPT
mv ~/Downloads/com.USERNAME.cfdns.plist ~/Library/LaunchAgents/com.USERNAME.cfdns.plist
launchctl load ~/Library/LaunchAgents/com.USERNAME.cfdns.plist
```

That's it! Every hour, your computer will run the Python script, check to see if your IP address has been changed, and update CloudFlare's settings, if necessary. If you have any issues or questions, please do not hesitate to contact me via Twitter or ADN.
