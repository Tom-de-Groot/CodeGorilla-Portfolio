<script setup lang="ts">
 import { Link }from '@inertiajs/inertia-vue3';

defineProps<{
	categories: any []
	brands: any []
}>()
</script>

<template>
    <section class="filter ml-5 mt-5 mr-28">
        <div class="sticky">
            <div class="py-5">
                <h2 class="font-bold text-3xl my-2">Category</h2>
                <hr class="break">
            </div>
            <Link 
                :class="{ 'active': $page.url === '/products' }"
                class="block hover:text-purple-400 text-lg mb-3"
                href="/products"
                preserve-scroll
                >
                All
                <span class="float-right">(17)</span>
            </Link>
            <Link 
                v-for="category in categories"
                :href="'/categories/' + category.id"
                :class="{ 'active': $page.url === '/categories/' + category.id }"
                class="block hover:text-purple-400 my-3 text-lg"
                preserve-scroll
                >
                {{ category.name }}
                <span class="float-right">
                    ({{ category.products.length }})
                </span>
            </Link>
            
            <div class="py-5">
                <h2 class="font-bold text-2xl my-2">Brand</h2>
                <hr class="break">
            </div>
            <Link 
                v-for="brand in brands"
                :href="'/brands/' + brand.id"
                :class="{ 'active': $page.url === '/brands/' + brand.id }"
                class="block hover:text-purple-400 mb-3 text-lg"
                preserve-scroll
                >
                {{ brand.name }}
                <span class="float-right">
                    ({{ brand.products.length }})
                </span>
            </Link>
        </div>
    </section>

</template>

<style>
    .active {
        font-weight: bold;
        color: rgb(172 148 250);
        margin-left: 0.25rem;
        font-size: 1.3rem;
    }
    .break {
        height: 2px;
        width: 100%;
        background-color: black;
    }
    .filter {
        position: relative;
        top: 0;
        min-width: 16vw;
    }
    .sticky {
        position: sticky;
        top: 0;
    }
    @media screen and (min-width: 750px) and (max-width: 1181px) {
        .filter {
            min-width: 22vw;
        }
    }
    @media screen and (min-width: 750px) and (max-width: 821px) {
        .filter {
            min-width: 28vw;
        }
    }
    @media screen and (max-width: 400px) {
        .filter{
            margin-right: 1.25rem;
        }
        
    }
</style>