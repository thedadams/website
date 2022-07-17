<script lang="ts" setup>
const year = new Date().getFullYear()
</script>

<template>
	<div class="mt-8 text-sm grid grid-cols-5 gap-0">
		<div class="self-end col-span-2">
			<a href="/credits.html" title="Credits">Credits</a>
		</div>
		<div class="place-self-center py-0.5">
			<a href="/home.html" title="Home"><img alt="Logo" class="h-8" src="/thedadamsLogo.png"/></a>
		</div>
		<div class="place-self-end col-span-2">
			<p>&copy;2012-{{ year }} Donnie Adams</p>
		</div>
	</div>
</template>
