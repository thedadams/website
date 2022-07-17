<script lang="ts" setup>
import {ref} from "vue"
import NavBarItem from "./NavBarItem.vue"

defineProps<{
	page: string
}>()

const showMenu = ref(false)
const toggleNav = () => (showMenu.value = !showMenu.value)
</script>

<template>
	<nav :class="{'mb-60': showMenu}"
		 class="h-16 flex justify-between px-8 transition transition-all duration-500 ease-in-out">
		<div class="flex items-center">
			<a href="/home.html">
				<img alt="" class="max-h-12" loading="lazy" src="/thedadamsLogo.png"/>
			</a>
		</div>
		<div
			:class="{'translate-y-16': showMenu, '-translate-y-60': !showMenu}"
			class="flex-col sm:flex-row items-center transition transition-all duration-500 ease-in-out sm:translate-y-6">
			<NavBarItem :current='page === "home"' page="home"/>
			<NavBarItem :current='page === "about"' page="about"/>
			<NavBarItem :current='page === "projects"' page="projects"/>
			<NavBarItem :current='page === "basketball"' page="basketball"/>
			<NavBarItem :current='page === "blog"' page="blog"/>
			<NavBarItem :current='page === "links"' page="links"/>
		</div>
		<div class="flex sm:hidden" @click="toggleNav">
			<button class=" text-gray-400 hover:text-gray-600 focus:outline-none" type="button">
				<svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
					<path d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
						  fill-rule="evenodd"></path>
				</svg>
			</button>
		</div>
	</nav>
</template>
