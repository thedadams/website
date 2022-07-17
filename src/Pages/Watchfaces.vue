<script lang="ts" setup>
import Centered from "../components/Centered.vue"</script>

<template>
	<Centered gap>
		<h1>Watchfaces for Pebble </h1>
		<div class="flex flex-col gap-8 my-8 md:gap-16 md:my-16">
			<div class="flex flex-col md:flex-row">
				<a href="/minimal.html" title="Minimal Watchface"><img alt="Minimal Screenshot"
																	   class="mx-auto w-48 md:w-96"
																	   src="/pebble-screenshot_2014-06-14_16-10-09.png"/></a>
				<p class="p-8 place-self-center">
					<a href="/minimal.html" title="Minimal Watchface">Minimal</a> is a simple watchface. It displays the
					time, date, and day of the week. You can choose whether the number in the middle represents the hour
					or
					the minutes; the "hand" will represent the other. Minimal also has a few other customizable options
					such
					as hourly vibrations, bluetooth connection vibrations, battery charging indicator, and battery meter
					in
					the hand.
				</p>
			</div>
			<div class="flex flex-col md:flex-row">
				<a href="/contrastdots.html" title="Contrast Dots Watchface"><img alt="Contrast Dots Screenshot"
																				  class="mx-auto w-48 md:w-64"
																				  src="/pebble-screenshot_2014-07-13_11-16-44.png"/></a>
				<p class="p-8 place-self-center"><a href="/contrastdots.html" title="Contrast Dots Watchface">Contrast
					Dots</a> displays the time in a
					unique way using a grid of dots. There are two sections of dots which have contrasting design: one
					for
					the hour and the other for the minutes. It also has a battery meter built into the hour section.
				</p>
			</div>
			<div class="flex flex-col md:flex-row">
				<a href="/verticaldials.html" title="Vertical Dials Watchface"><img alt="Vertical Dials Screenshot"
																					class="mx-auto w-48 md:w-58"
																					src="/pebble-screenshot_2014-07-18_20-50-49.png"/></a>
				<p class="p-8 place-self-center"><a href="/verticaldials.html" title="Vertical Dials Watchface">Vertical
					Dials</a> uses two dials to give
					time. The triangular indicators point to the current hour and minutes. The center section holds the
					day
					of the week, date, and battery meter.
				</p>
			</div>
		</div>
		<div>
			<p>If you would like more information on any of these, please click the corresponding screenshot. Also, if
				you
				have any suggestions, comments, or questions, please do not hesitate to contact me via
				<a href="https://twitter.com/thedadams" title="Twitter">Twitter</a>.
			</p>
		</div>
	</Centered>
</template>
