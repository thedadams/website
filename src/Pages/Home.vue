<script lang="ts" setup>
import Hero from "../components/Hero.vue"
import Centered from "../components/Centered.vue"</script>

<template>
	<Centered>
		<Hero blurb="Software engineer and basketball coach" source="/picture2.jpg" title="Hi, I'm Donnie">
			<div class="mt-6">
				<a class="no-underline px-3 sm:px-6 py-2 sm:py-3 font-semibold text-center text-white bg-orange-400 rounded-md inline hover:text-black"
				   href="/about.html">About
					me</a>
			</div>
		</Hero>
	</Centered>
	<Centered bg-color="gray-800">
		<div class="py-4 sm:py-12 px-4 grid grid-cols-1 gap-y-6 sm:grid-cols-3 sm:gap-x-12 text-white bg-gray-800">
			<div>
				<h2>Software</h2>
				<p>I enjoy building all different kinds of projects from websites to analytic programs to educational
					software. Check out what I am <a href="/projects.html" title="Projects">currently working on</a> or
					my<a href="/pastprojects.html" title="Past Projects">past projects</a>.</p>
			</div>
			<div>
				<h2>Mathematics</h2>
				<p>My formal education is in math where I have <a href="/research.html">published papers</a> in
					peer-reviewed journals. Mathematical research will always be in my life, whether I am researching a
					new problem or building an analytics project for a sport I follow.
				</p>
			</div>
			<div>
				<h2>Coaching</h2>
				<p>Coaching basketball has become a big part of my life. I have experience coaching at the high school
					level: beginners to future D-1 athletes. Checkout my
					<a href="/basketball.html" title="Coaching experience and philosophy">experience and philosophy</a>.
				</p>
			</div>
		</div>
	</Centered>
</template>
