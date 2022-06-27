<script setup lang="ts">
import { Link }from '@inertiajs/inertia-vue3';

function getImageUrl(name: any) {
  return new URL(`/resources/images/guitars/${name}`, import.meta.url).href
}

let back = function()
{
    window.history.back();
}

defineProps<{
	versions: {
		php: string
		laravel: string
	}
	product: any
    
}>()
</script>


<template layout="default">

    <section class="flex flex-wrap my-8 justify-center p-5">
        <img 
            class="detail-img mb-5"
            :src="getImageUrl(product.image_source)" 
        />
        <div class="">
            <h2 class="font-bold text-xl">{{ product.name }}</h2>
            <p class="my-3">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque dicta nobis voluptatibus dolor cumque! <br />
                Ullam id necessitatibus corporis atque modi quidem dolorum beatae ipsam repudiandae quis blanditiis, numquam nulla.
            </p>
            <div class="flex">
                <p class="mt-5">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br />
                    Ullam id necessitatibus corporis atque modi quidem dolorum.
                </p>
                <ul class="mt-5 pl-5 mx-auto">
                    <li>
                        Specification1
                    </li>
                    <li class="mt-5">
                        Specification2
                    </li>
                    <li class="mt-5">
                        Specification3
                    </li>
                    <li class="mt-5">
                        Specification4
                    </li>
                </ul>
            </div>
            <div class="flex">
                <p class="text-purple-400 font-bold text-2xl mt-5 ml-2">
                    &euro;{{ product.price }}
                </p>     
            </div>    
        </div> 
    </section>
    <section class="flex">
        <div class="mb-8 mx-auto">
            <Link 
                href="#" @click="back"
                class="text-center text-white py-3 px-14 h-5 rounded-3xl bg-purple-400 hover:shadow-lg drop-shadow-md"
                preserve-scroll
            >
            Back
            </Link>
        </div>
        <div class="float-right mb-8 mx-auto">
            <Link 
                :href="'/cart/add/' + product.id" 
                class="text-center text-white py-3 px-10 h-5 rounded-3xl bg-purple-400 hover:shadow-lg drop-shadow-md"
            >
            Add to Cart
            </Link>
        </div> 
    </section>
</template>

<style>
    .detail-img {
        max-height: 40vh;
    }

</style>