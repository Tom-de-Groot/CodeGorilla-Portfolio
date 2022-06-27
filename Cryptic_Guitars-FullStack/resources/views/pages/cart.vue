<script setup lang="ts">
import { Link }from '@inertiajs/inertia-vue3';
import { computed } from '@vue/reactivity';
import { ComputedRef } from 'vue';

const props = defineProps<{
	versions: {
		php: string
		laravel: string
	}
	cart: any
}>()

let back = function()
{
    window.history.back();
}

const total: ComputedRef<number> = computed((): number => {
	let total = 0;
	for (const index in props.cart) {
 		total += props.cart[index].price * props.cart[index].product_qty ;
 	}
	return total;
});

</script>


<template layout="default">
	<section class="cart-area">
		<table class=" border-separate sm:border-spacing-10 border-spacing-5 py-10 mx-auto sm:text-lg">
			<thead>
				<tr>
					<th class="float-left">Name</th>
					<th class="">Quantity</th>
					<th class="float-left">Price</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<tr v-for="(cartItem, index) in cart">
					<td class="">{{ cartItem.name }}</td>
					<td class="">{{ cartItem.product_qty }}</td>
					<td class="font-bold text-purple-400">&euro;{{ cartItem.price * cartItem.product_qty }}</td>
					<td>
						<Link 
						:href="'/cart/remove/' + index" 
						class="font-bold text-red-600 ml-10"
						preserve-scroll
						>
						X
						</Link>
					</td>
				</tr>
			</tbody>
		</table>
		<div class="flex justify-center">
			<div class="flex mt-auto mb-7">
				<h2 class="font-bold text-xl ">
					Total: 
				</h2>
				<p class="font-bold text-purple-400 text-xl ml-2"
					>&euro;{{ total }}
				</p>
			</div>
		</div>

		<div class="flex">
			<div class="mt-auto mb-8 mx-auto">
				<Link 
					href="#" @click="back"
					class="text-center text-white py-3 px-14 h-5 rounded-3xl bg-purple-400 hover:shadow-lg drop-shadow-md"
				>
				Back
				</Link>
			</div>
			<div class="mt-auto mb-8 mx-auto">
				<Link 
					href="#"
					class="text-center text-white py-3 px-14 h-5 rounded-3xl bg-purple-400 hover:shadow-lg drop-shadow-md"
				>
				Checkout
				</Link>
			</div>
		</div>
	</section>
</template>

<style>
	.cart-area {
		min-height: 55vh;
	}
</style>