<script lang="ts" setup>
import Centered from "../components/Centered.vue"</script>

<template>
	<Centered gap>
		<h1>Contrast Dots</h1>
		<p>
			"Contrast Dots" is a watchface for the <a href="http://getpebble.com" target="_blank">Pebble Smartwatch</a>.
			It
			was designed and created by me, Donnie. It displays the time in a unique way using a grid of dots. There are
			two
			sections of dots which have contrasting design. The smaller section black outlined dots on the white
			background
			are for displaying the hour. The white dots on the black background are for the minutes.<br><br>To read the
			time,
			imagine that each section of dots is numbered starting from the top-left corner with increasing numbers
			going
			down. In each section, you'll notice a dots that is shaded differently than all the others. That dot
			indicates the
			time. For example, the first screenshot below gives the time 11:16 am.</p>
		<img alt="Contrast Dots Screenshot 1" class="py-8 mx-auto" src="/pebble-screenshot_2014-07-13_11-16-44.png"
			 title="Pebble Screenshot 1"/><br>
		<img alt="Contrast Dots Screenshot 1" class="py-8 mx-auto" src="/pebble-screenshot_2014-07-13_11-17-18.png"
			 title="Pebble Screenshot 2"/><br>
		<p><br>
			You'll also notice that the "hour" section appears to be multi-shaded. This is a built-in battery meter for
			the
			Pebble. If the Pebble's battery is full, then the hour section is white with black circles. As the battery
			drains,
			the white background is overtaken by a black one. The screenshots both show a battery level of about
			60%.<br><br>
			The watch also emits two short vibrations when the watch connects to bluetooth and one long vibration when
			it
			disconnects.<br><br>
			You can check out my other Pebble watchfaces <a href="/watchfaces.html" title="Watchfaces">here</a>.
		</p>
		<br>
		<p>If you would like to download Contrast Dots for your Pebble, please click
			<a href="https://apps.getpebble.com/applications/53c1ca239e7e05580800003f" title="Download Contrast Dots">here</a>.
			Also, if you have any suggestions, comments, or questions, please do not hesitate to contact me via
			<a href="https://twitter.com/thedadams" title="Twitter">Twitter</a>.
		</p>
	</Centered>
</template>
