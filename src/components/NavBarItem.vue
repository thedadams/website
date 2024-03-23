<script lang="ts" setup>
const props = defineProps<{
	page: string
	current: boolean
}>()

const capPage = props.page.charAt(0).toUpperCase() + props.page.slice(1)
</script>

<template>
	<a :class="{ 'text-orange-400': current}"
	   :href="page + '.html'"
	   class="no-underline rounded-md hover:bg-gray-800 hover:text-white px-3 md:px-6 py-2 md:py-3 block sm:inline text-center text-xl">{{
			capPage
		}}</a>
</template>
