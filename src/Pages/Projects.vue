<script lang="ts" setup>
import Centered from "../components/Centered.vue"
import Half from "../components/Half.vue"</script>

<template>
	<Centered gap>
		<h1>Projects</h1>
		<p>My projects fall into four categories: day job, freelance, math, coaching and hobby. I try to limit myself to
			one
			project at a time in each category so I don't get too bogged down. My interests are varied, but I am usually
			working on things related to programming, education, mathematical research, or sports.</p>
		<Half>
			<template v-slot:left>
				<h2 class="text-blue-400">Day Job</h2>
				<p>I am currently a Software Engineer at <a href="https://suse.com" target="_blank"
															title="SUSE">SUSE</a> (via
					their acquisition of <a href="https://rancher.com" target="_blank" title="Rancher">Rancher</a>) in
					their
					Tempe,&nbsp;AZ office. I am really enjoying working in the containerization space, specifically with
					Kubernetes cluster provisioning. This is a hot area to be in with steep professional growth.</p>
			</template>
			<template v-slot:right>
				<h2 class="text-blue-400">Freelance</h2>
				<p>I decided to move my freelance work to an actual business. You can check out
					<a href="https://dadams.solutions" title="dadams solutions">dadams solutions llc</a> to get details.
				</p>
				<br>
				<p>Previously, I built and designed websites for clients. I also extended some functionality and
					improved
					automation for a company which allowed them to grow much more quickly than they previously thought
					possible. </p>
			</template>
		</Half>
		<Half>
			<template v-slot:left>
				<h2 class="text-blue-400">Math</h2>
				<p>While I did discontinue pursuit of a PhD in mathematics, I will continue to read about and research
					mathematical topics. Right now, I am reviewing
					<a href="https://en.wikipedia.org/wiki/Iwasawa_theory" target="_blank">Iwasawa Theory</a> in order
					to
					strengthen my Galois theory, class field theory, and homology theory knowledge. </p>
				<br>
				<p>You can see more information about my previous research
					<a href="/research.html" title="Research">here</a>.</p>
			</template>
			<template v-slot:right>
				<h2 class="text-blue-400">Coaching</h2>
				<p>I enjoy coaching basketball at the high school level. Teaching young men and women the fundamentals
					of the
					game and watching them grow as a team is edifying. Currently, I am the head JV-A boys basketball
					coach at St.
					Mary's Catholic High School in Phoenix, AZ.</p>
				<br>
				<p>I have a page dedicated to my <a href="/basketball.html">coaching experience and philosophy</a>.</p>
			</template>
		</Half>
		<Half>
			<template v-slot:left>
				<h2 class="text-blue-400">Hobby</h2>
				<p>I have several hobby projects in mind at any one time. Currently, I am working on an HTML form email
					backend.
					I am planning to use it for personal use, but may turn into something I can open to others if the
					opportunity
					arises.</p>
				<br>
				<p>You can read about some of my past hobby projects
					<a href="/pastprojects.html" title="Past Hobby Projects">here</a>. </p>
			</template>
		</Half>
	</Centered>
</template>
