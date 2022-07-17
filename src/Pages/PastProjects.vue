<script lang="ts" setup>
import Centered from "../components/Centered.vue"
import Half from "../components/Half.vue"</script>

<template>
	<Centered gap>
		<h1>Past Projects</h1>
		<Half>
			<template v-slot:left>
				<h2 class="text-blue-400">Pebble Watchfaces</h2>
				<p>I am the proud owner of a Kickstarter Edition Pebble Smartwatch. It no longer works and I have
					switched to
					an Apple Watch, but I truly enjoyed my Pebble. To continue my journey of programming, I decided to
					write
					a few watchfaces for my Pebble. You can read more about them
					<a href="/watchfaces.html"
					   title="My Pebble Watchfaces">here</a>. The most popular one was the
					<a href="/minimal.html"
					   title="Minimal Watchface">Minimal</a> watchface.</p>
				<br>
				<p>Pebble has since been purchased by Fitbit. I put all the code for these watchfaces on my
					<a href="https://github.com/thedadams"
					   title="Github account">Github account</a>.</p>
			</template>
			<template v-slot:right>
				<h2 class="text-blue-400">My blog</h2>
				<p>After I built my website (see below), I wanted a place to write about the things I had learned.
					Naturally,
					I wanted to build my own solution rather than use another service. It turned out to be a great way
					to
					learn some PHP. The entire site consists of two HTML5 files with some PHP, Javascript, and plaintext
					files on the webserver. I even wrote a script that generates the RSS feed, adds new tags for the
					files,
					and uploads all the information to the webserver. I wrote about how I <a
						href="/blog.html?post=2013-05May-31"
						title="How I Created This Blog">created</a>
					and <a href="/blog.html?post=2014-12Dec-30"
						   title="Blog 2.0">updated</a> my blog.</p>
			</template>
		</Half>
		<Half>
			<template v-slot:left>
				<h2 class="text-blue-400">This website</h2>
				<p>Every mathematician has their own website to display their research, publications, and teaching
					information.
					The problem that I had was that the URLs for such sites were always complicated. I wanted an easy
					and
					well-branded domain for my site, so I bought thedadams.com and built this website.</p>
				<br>
				<p>Most of what you see here is static, written in HTML5 and CSS3. Very small pieces are dynamic,
					written in
					PHP and Javascript. The site is somewhat "responsive," but there is nothing fancy happening. The
					page
					reads a slightly different CSS file when the screen size is less that 759 pixels wide (I forgot
					where
					I got that number).</p>
				<br>
				<p>The design has been through a few iterations, most recently updated in May 2017.</p>
			</template>
			<template v-slot:right>
				<h2 class="text-blue-400">Consistency Index</h2>
				<p>I have always been into sports, especially baseball. My father is a big baseball fan and definitely
					passed
					that down to me. When I decided to teach myself to program, I waned my first project to involved
					math
					and sports. This lead me to invent the Consistency Index (CI).</p>
				<br>
				<p>There are two versions of CI: one for batting average and one for on-base percentage. The general
					idea is
					that "streaky" hitters will have long durations when they do well followed by long durations of no
					success.
					On the other hand, consistent hitters will have success most of the time with very short periods of
					no
					success. The CI uses this idea to attempt to distinguish between hitters that are consistent and
					inconsistent.</p>
				<br>
				<p>I would like to acknowledge a couple things. First, this is the project I used to teach myself how to
					program.
					Therefore, the code is ugly. I hope to eventually clean it up, but for now you can view the project
					on
					<a href="https://github.com/thedadams/ConsistencyIndex"
					   title="Consistency Index on Github">Github</a>.
					Secondly, as I have learned more about baseball and statistics, I realize that part of the idea is
					flawed.
					For example, there is a weighting, but that weighting is essentially arbitrary. I hope to fix this
					one
					day as well.</p>
				<br>
				<p>I wrote a few blog posts about it, which you can see <a href="/blog.html"
																		   title="Consistency Index blog posts">here</a>.
				</p>
			</template>
		</Half>
	</Centered>
</template>
