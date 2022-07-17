<script lang="ts" setup>
import type {Link} from "../ts/link"

defineProps<{
	link: Link
}>()

</script>

<template>
	<div class="border rounded-lg py-3 px-5 bg-white">
		<div class="grid">
			<div class="flex flex-row gap-3">
				<a :href="link.url" :title="link.name" class="h-10 w-10 p-1 border-2 rounded-md" target="_blank"><img
					:alt="link.name" :src="link.fileUrl"/></a>
				<h3 class="self-center">{{ link.name }}</h3>
			</div>
			<div class="text-gray-600 mt-2">
				<p>{{ link.description }}</p>
			</div>
		</div>
	</div>
</template>
