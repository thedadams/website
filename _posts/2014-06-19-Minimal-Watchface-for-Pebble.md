---
layout: post
title: "Minimal Watchface for Pebble"
date: 2014-06-19
tags: ["pebble", "tech", "development"]
updated: "04/02/2021"
author: "Donnie"
---

<p>A few months ago I was inspired to make a watchface for the <a href="http://getpebble.com" target="_blank">Pebble Smartwatch</a>.  I wanted to combine an analog design with a digital one to create a very simple, uncluttered watchface.  I have very little design experience and limited programming experience, but I thought that the task could be obtained with a little effort.  After looking over the <a href="https://developer.getpebble.com/2/api-reference/modules.html" target="_blank">Pebble API documentation</a>, I decided to tackle the project.  I have released a few upgrades since originally publishing the face on the Pebble app store; I am particularly proud of the most recent version.</p>
<br>
<p>In an effort to make the design simple, I chose not to adopt the usual marking of the numbers around an analog watch.  I also wanted the watch to be easily readable.  Therefore, a minute hand was immediately out of the question, which left just an hour hand.  The hour hand doesn't move throughout a given hour.  Instead, it jumps to the next position when the hour changes.  This makes reading the hour quick and easy.</p>
<br>
<p>The digital portion of the watch comes in the minutes display.  The minutes are given as large numbers in the center of the watchface.  The hour hand rotates around the minutes.  I believe this design creates a very compact and fashionable watch display.  Once I had both of these laid out, I noticed there was a bit of room at the bottom of the screen that created a little asymmetry.  I decided to fill this space with the month, day, and day of the week.  Here is the outcome:
<br/><br/><center><img style="text-align:center;" src="images/pebble-screenshot_2014-03-25_23-14-47.png" alt="Pebble Screenshot 1"/><br/>
<span style="font-size:.75em;">Hopefully you can tell that the watch is displaying the time 9:15.</span></center>
<br/>
<p>This did not satisfy me completely; I wanted to use more of the capabilities of the Pebble API.  The first thing that came to mind was bluetooth connection vibrations.  As it turns out, this was very simple to implement.  The watch emits two short vibrations when a bluetooth connection is established and one long vibration when it disconnects.  Next, I decided to implement a single short vibration every hour, on the hour.  I don't particularly like this feature, but I know some people will enjoy it.</p>
<br>
<p> Since these features weren't difficult to deploy, I turned to the battery of the Pebble.  My goal was to find a way to display the battery percentage unobtrusively and give the user an easy way to tell when the watch is done charging.  This led me to use the hour hand as a battery meter.  The hour hand will be completely white when the watch's battery has 95% to 100% charge.  As the battery level decreases in increments of 5%, the white will retreat towards the center of the watch.  The hour hand is outlined in white to maintain readability.  The hour hand also blinks while the watch is charging and stops when it is fully charged.  In order to give the user control over these features, I used the Javascript and persistent data capabilities of the Pebble API to allow turning these features, and the vibration features mentioned above, on and off as desired.  Here is an example of the new version:
<br/><br/><center><img style="text-align:center;" src="images/pebble-screenshot_2014-06-15_22-17-23.png" alt="Pebble Screenshot 1"/><br/>
<span style="font-size:.75em;">Notice the battery meter in the hour hand.</span></center>
<br/>
<p>Although the watchface is complete and published to the Pebble app store, it is not available just yet.  Since the watchface uses Javascript, this code must be bundled with the official Pebble app for it to be available to iOS users.  From what I understand, Android does not have this hurdle, and, thus, the watchface is available to Android users now.  If you would like to download Minimal, please click <a href="https://apps.getpebble.com/applications/5331eb4d18cd87063e00033d" target="_blank">here</a>.  Also, I would greatly appreciate that you "love" the watchface on the Pebble app store.  If you have have comments, suggestions, or questions, please do not hesitate to leave a comment below or contact me via <a href="https://alpha.app.net/thedadams">App.net</a> or <a href="https://twitter.com/thedadams">Twitter</a>.  I hope you enjoy Minimal as much as I have.</p>
<br>