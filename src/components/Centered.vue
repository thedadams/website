<script lang="ts" setup>
import {computed} from "vue"

const props = defineProps<{
	bgColor?: string
	gap?: boolean
}>()

const computedBg = computed(() => {
	return "bg-" + props.bgColor
})
</script>

<template>
	<div :class="{'mt-12': gap, [computedBg]: !!bgColor}">
		<div class="px-4 7xl:px-0 max-w-7xl mx-auto">
			<slot/>
		</div>
	</div>
</template>
