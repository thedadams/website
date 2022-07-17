<script lang="ts" setup>
import Centered from "../components/Centered.vue"</script>

<template>
	<Centered gap>
		<h1>Minimal Watchface</h1>
		<p>Minimal is a watchface for the
			<a href="http://getpebble.com" target="_blank" title="Pebble Smartwatch">Pebble Smartwatch</a>. It was
			designed
			and created by me, Donnie. It displays the time, month, date, and day of the week. The time is displayed in
			a
			rather nontraditional fashion, and you have a choice as to exactly how it is done. By default, the hand
			points
			in the direction of the hour and the large number in the center is the minutes past the hour. For example,
			the
			screenshot first below is displaying the time 4:10 and the second is showing 9:48.<br></p>
		<img alt="Minimal Screenshot 1" class="mx-auto py-8" src="/pebble-screenshot_2014-06-14_16-10-09.png"
			 title="Pebble Screenshot 1"/>
		<img alt="Minimal Screenshot 2" class="mx-auto py-8" src="/pebble-screenshot_2014-09-08_21-49-02.png"
			 title="Pebble Screenshot 2"/>
		<p>I also created a <a href="/blog.html?post=2014-06Jun-18" title="Minimal Blog Post">blog
			post</a> to give an idea of how I came to this design and these features.<br><br>
			You can check out my other Pebble watchfaces <a href="/watchfaces.html" title="Watchfaces">here</a>.
		</p>
		<img alt="Minimal Screenshot 3" class="mx-auto py-8" src="/pebble-screenshot_2014-09-13_14-25-49.png"
			 title="Pebble Screenshot 3"/>
		<p>You can also choose to have the hand point in the direction of the minutes and the number in the center
			represent the hour. The screenshot above is an example of this; it is showing the time 2:25.<br><br>
			You'll notice a few other things in the screenshots. In version 2.3 of Minimal the user can choose to enable
			five different settings. They are:
		</p>
		<ul class="list-disc px-8">
			<li><p>A battery percentage bar built into the hand.</p></li>
			<li><p>When your Pebble is charging, the hour hand can flash. It will stop when your Pebble reaches a full
				charge.</p></li>
			<li><p>Bluetooth connection vibrations to let you know when you bluetooth connection status changes. You'll
				get
				too short vibrations on connection and one long one for a disconnection.</p></li>
			<li><p>A vibration every hour, on the hour. This one is disabled by default.</p></li>
			<li><p>Invert the colors to fit your style. By default the dark background is what you'll see the first time
				you
				load Minimal.</p></li>
			<li><p>As mentioned previously, you can choose whether the number in the middle displays the minutes or
				hour. By
				default, the number in the center represents the minutes.
			</p></li>
		</ul>
	</Centered>
</template>
