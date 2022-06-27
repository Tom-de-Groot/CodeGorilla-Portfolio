<script setup lang="ts">
import { Link }from '@inertiajs/inertia-vue3';

function getImageUrl(name: any) {
  return new URL(`/resources/images/guitars/${name}`, import.meta.url).href
}

defineProps<{
	products: any []
}>()


</script>



<template>
	<section class="flex flex-wrap my-10 gap-10">
		<Link 
			v-for="product in products"
			:href="'/products/' + product.id"
			class="w-80 hover:shadow hover:shadow-purple-400 p-2 text-center rounded-xl"
			>
			<div>
				<img 
					class="item mx-auto" 
					:src="getImageUrl(product.image_source)"
				/>
			</div>
			<h2 class="px-2">{{ product.name }}</h2>
			<p class="font-bold text-purple-400">
				&euro;{{ product.price }}
			</p>
		</Link>
	</section>
</template>

<style>
	.item {
        height: 40vh;
	}
</style>