<script lang="ts" setup>
import Centered from "../components/Centered.vue"
import ContactCard from "../components/ContactCard.vue"
import {reactive} from "vue"
import {Links} from "../ts/link"

const links = reactive(new Links("https://raw.githubusercontent.com/thedadams/links/main/links.json"))
links.get()
</script>

<template>
	<Centered gap>
		<h1>Links</h1>
		<div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
			<ContactCard v-for="link in links.getLinks()" :link="link"/>
		</div>
	</Centered>
</template>
