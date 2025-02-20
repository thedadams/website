<script lang="ts" setup>
const props = defineProps<{
	title?: string
	blurb?: string
	source: string
}>()

const lines = props.blurb?.split("\n")
</script>

<template>
	<div class="flex flex-col sm:flex-row px-6 py-4 mx-auto sm:h-128 sm:py-16">
		<div class="flex justify-end sm:justify-center sm:items-center w-full sm:w-1/2 text-right pr-4">
			<div class="max-w-md flex flex-col mb-8 sm:mt-0">
				<h1 v-if="!!title" class="tracking-wide">{{ title }}</h1>
				<div v-if="!!blurb" class="text-blue-400">
					<p v-for="line in lines">{{ line }}</p>
				</div>
				<slot></slot>
			</div>
		</div>

		<div class="flex items-center justify-center sm:w-2/3">
			<img :src="source" alt="Me!" class="object-contain w-full h-full rounded-md">
		</div>
	</div>
</template>
