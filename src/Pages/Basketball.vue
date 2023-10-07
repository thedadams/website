<script lang="ts" setup>
import Centered from "../components/Centered.vue"
import Hero from "../components/Hero.vue"</script>

<template>
	<Centered>
		<Hero blurb='"Not only is there more to life than basketball, there is a lot more to basketball than basketball."
    - Phil Jackson' source="/BasketballTeam.jpg" title="Coaching">
		</Hero>
		<p class="px-16 pb-12">I have been proud to coach high school boys basketball since the 2017-18 season. I have
			experience as a Varsity assistant and head coach at the JV and Freshman levels. I enjoy coaching because it
			allows me to continue teaching after leaving the classroom. Basketball &mdash; and sports in general &mdash;
			is a great way for young people to learn skills that will benefit them throughout their lives and prepare
			them for any career they choose. They leverage team work, discipline, hard work, and determination to learn
			the game of basketball, have fun, and compete at the highest level achievable.</p>
	</Centered>
	<Centered bg-color="gray-800">
		<h2 class="max-w-fit mx-auto text-orange-400 py-4">Coaching Philosophy</h2>
		<hr>
		<div class="py-4 sm:py-12 px-4 grid grid-cols-1 gap-y-6 sm:grid-cols-3 sm:gap-x-12 text-white bg-gray-800">
			<div>
				<h2>Defense First</h2>
				<p>This isn't about the "defense wins championships" catchphrase. Defense is about effort, discipline,
					anticipation, and communication. Players can learn a ton about the game and contribute to team
					success without feeling like they don't shoot or dribble the ball well.</p>
			</div>
			<div>
				<h2>Rebound</h2>
				<p>Second chances are devastating to a defense. A team works hard to contest a shot only to give up an
					offensive rebound and have to do everything again. Therefore, in order to decrease the chances of
					that (or increase the chance of a rebound on offense), everybody must box-out and rebound the
					basketball. If the defense secures the ball, then...</p>
			</div>
			<div>
				<h2>Push the Pace</h2>
				<p>Good defense turns into good offense. In order to take advantage of a strong and persistent defense,
					the offensive must push the ball up the floor and look to attack. This isn't a "7 seconds or less"
					offense, but is a guide of where players should look first. If nothing materializes, then setup the
					offense.</p>
			</div>
		</div>
	</Centered>
</template>
