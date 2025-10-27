---
layout: post
title: "ESPN Pre-Draft Rankings"
date: 2017-03-31
tags: ["sports", "fantasy", "programming"]
updated: "04/02/2021"
author: "Donnie"
---

<p>Fantasy sports are a great way to be involved in the sports we love. They give us an excuse to root for players that aren't on our favorite team. They also give us the opportunity for competition and bragging rights.</p>
<br>
<p>I have been involved in an ESPN Fantasy Baseball league for about 13 years now. Unfortunately I won't be available for the draft this year and will need to auto-draft my players. I didn't want to manually rank every player on ESPN's list, but I couldn't find anyway to do it automatically. I think it would be nice if ESPN allowed a user to upload a .csv file to update the rankings all at once. Alas, they don't allow one to do that so I had to come up with something else.</p>
<br>
<p>I keep rankings of all the players for the fantasy leagues in which I participate. Therefore, it was easy for me to output a list of names I could use in a script. After poking around ESPN's page a little bit, I was able to hack the list and update the pre-draft rankings automatically. Since I spent some time with it, I would like to provide that for others to use, too. All you would have to do is replace "myList" with the order you would like to use in your rankings. I would also suggest updating your "Draft Strategy" to limit the number of players drafted for each position. Enjoy!</p>
<br>
<script src="https://gist.github.com/thedadams/f59ed6661178d18b24037a371b352ed2.js"></script>