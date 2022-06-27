<script setup lang="ts">

import ProductItems from '@/views/components/category/product-items.vue'
import CategoryFilter from '@/views/components/category/category-filter.vue';


defineProps<{
	versions: {
		php: string
		laravel: string
	}
	categories: []
	brands: []
	products: []
}>()
</script>

<template layout="default">
	<div class="flex display">
		<CategoryFilter
			class="display" 
			:categories="categories"
			:brands="brands"
		/>

		<ProductItems 
			class="display"
			:products="products"
		/>

	</div>
</template>

<style>

	@media screen and (max-width: 534px) {
		.display {
			display: block;
		}
	}
</style>