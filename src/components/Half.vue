<script setup lang="ts">
defineProps<{
	centered?: boolean
}>()

</script>

<template>
	<div class="grid grid-cols-1 gap-y-8 my-8 sm:grid-cols-2 sm:gap-x-12">
		<div :class="{'self-center': centered}">
			<slot name="left"></slot>
		</div>
		<div :class="{'self-center': centered}">
			<slot name="right"></slot>
		</div>
	</div>
</template>
