<script setup lang="ts">

import CategoryCards from '@/views/components/home/category-cards.vue'
import Banner from '@/views/components/home/banner.vue'
import Brands from '@/views/components/home/brands.vue'

defineProps<{
	versions: {
		php: string
		laravel: string
	}
	categories: []
}>()
</script>

<template layout="default">
	<Banner class="show" />

	<CategoryCards
		:categories="categories"
	/>

	<Brands />
</template>

<style>
	@media screen and (max-width: 767px) {
        .show {
            display: none;
        }
    }
</style>