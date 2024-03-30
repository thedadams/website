<script lang="ts" setup>
import NavBar from "./components/NavBar.vue"
import Footer from "./components/Footer.vue"

defineProps<{
	page: string
}>()
</script>

<template>
	<div class="flex flex-col min-h-screen">
		<header>
			<NavBar :page="page"/>
		</header>

		<main class="flex-grow">
			<MainBody/>
		</main>
		<script defer src="https://tinylytics.app/embed/GsAcK6TEuzZ-cVQ_p2Fz.js"></script>
		<footer>
			<Footer/>
		</footer>
	</div>
</template>

<style>
@import './assets/styles.css';
</style>
