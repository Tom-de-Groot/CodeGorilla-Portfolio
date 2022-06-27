<script setup lang="ts">
import { Link }from '@inertiajs/inertia-vue3';

function getImageUrl(name: any) {
  return new URL(`/resources/images/${name}`, import.meta.url).href
}

defineProps<{
	categories: any []
}>()
</script>

<template>

    <section 
        class="justify-center sm:space-x-32 md:space-x-22 space-x-0 flex flex-wrap py-10 bg-gray-200  
                sm:gap-y-10 md:gap-y-20 gap-y-10">
        <Link
            v-for="category in categories"
            :href="'/categories/' + category.id">
            <img 
                class="card-img hover:shadow-lg hover:shadow-purple-400 drop-shadow-lg rounded-xl"
                :src="getImageUrl(category.image_source)" />
        </Link>
    </section>
</template>

<style>
    .card-img {
        max-width: 35rem;
        max-height: 25rem;
    }

    @media screen and (max-width: 1181px) {
        .card-img {
            width: 20rem;
            height: 15rem;
        }
    }

</style>