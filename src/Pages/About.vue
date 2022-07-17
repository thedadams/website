<script lang="ts" setup>
import Centered from "../components/Centered.vue"
import Half from "../components/Half.vue"</script>

<template>
	<Centered gap>
		<h1>About Donnie</h1>
		<Half centered>
			<template v-slot:left>
				<p>I have a varied background. I have worked as a mathematical researcher, a high school teacher, a
					basketball coach, and a software engineer. The journey to get to this place was a long one.</p>
				<br>
				<p>My formal education is in math; I have a Bachelor's and a Master's degree in math from San Diego
					State
					University.
					I am currently working towards my Doctorate in math at Arizona State University (I hope to finish
					soon). My
					research
					areas include arithmetic and algebraic geometry, number theory, and commutative algebra. These areas
					have
					applications
					to cryptography, communications, machine learning, and theoretical physics. I have a few
					<a href="/research.html"
					   title="Research">publications</a>, and I will likely continue my research regardless of my career
					path.</p>
			</template>
			<template v-slot:right>
				<img alt="Programming picture" src="/coding.jpg">
			</template>
		</Half>
		<hr>
		<Half centered>
			<template v-slot:left>
				<img alt="Math picture" src="/math.jpg">
			</template>
			<template v-slot:right>
				<p>The majority of graduate students in math earn a livable wage by teaching classes for the college
					they are
					attending.
					That is exactly how I got into education. I started teaching math in the first year of my Master's
					program at
					SDSU
					in 2008. In all, I have taught at two four-year universities, two two-year colleges, and one high
					school. I am
					no longer teaching professionally, but I plan to return to it at some point. Impacting young
					people's lives is
					one of the most rewarding experiences I have had.</p>
				<br>
				<p>During my education, I found programming and enjoyed it a lot. So much so, that I changed careers and
					am now
					a Software Engineer at a company in Tempe. I started learning different languages and building
					software in my
					spare time. The best way to learn a new language or technology is to jump in head-first and build
					something. I
					enjoy working in Go, Python, Java, and C++, and I have tried to build something interesting with
					each
					language. You can check out my <a href="/pastprojects.html" title="Past Projects">past projects
						page</a>
					to get more information. I still do some work on the side with my business, and am always interested
					in
					building new things and learning new frameworks. If you have something interesting you would like to
					talk
					about, feel free to <a href="links.html" title="Contact me">contact me</a>.</p>
			</template>
		</Half>
		<hr>
		<Half centered>
			<template v-slot:left>
				<p>While I was teaching at St. Mary's I also had the opportunity to coach basketball. I started as a
					volunteer
					assistant coach for the varsity team. I enjoyed it tremendously, and was given the opportunity to be
					a head
					coach at the lower levels. I has been extremely rewarding to be involved in the young men's growth
					on an off
					of the court. You can ready more about my efforts and coaching philosophy
					<a href="/basketball.html">here</a>.</p>
			</template>
			<template v-slot:right>
				<img alt="Basketball picture" src="/basketball.jpg">
			</template>
		</Half>
	</Centered>
</template>
