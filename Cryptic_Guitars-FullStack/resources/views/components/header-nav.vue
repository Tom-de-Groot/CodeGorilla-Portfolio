<script setup lang="ts">
import { Link }from '@inertiajs/inertia-vue3';

</script>

<template>
    <section class="header">
        <nav class="flex justify-between text-xl">
            <div class="flex">
                <img class="m-auto"
                    src="@/images/login_icon.png" />
                <Link class="m-auto hover:text-purple-400" href="">Login</Link>
            </div>
            <div class="flex sm:space-x-28 space-x-10 my-auto">
                <Link class="hover:text-purple-400" href="/products">Products</Link>
                <Link class="header-cart hover:text-purple-400" href="/cart">Cart</Link>
            </div>
            <div class="flex search mr-3">
                <img class="py-1 mr-5" src="@/images/search-icon.png" />
                <input class="my-auto outline-none border-2 focus:border-purple-400 border-black rounded-full w-3/4"
                    type="text" placeholder="Search..">
            </div>
        </nav>
        <div class="flex">
            <Link href="/">
                <img class="mt-6 pb-2 ml-12" src="@/images/home-logo.png" />
            </Link>
        </div>



    </section>
</template>

<style>
    .header{
        background: url(@/images/header-bg.png);
        background-size: cover;
    }
    nav {

        background-color: white;
        opacity: 0.85;
        width: 100%;
        min-height: 12vh;
        border-bottom: 1px solid black;
        z-index: 900;
    }

    @media screen and (max-width: 820px) {
        .search {
            display: none;
        }
        .header-cart {
            padding-right: 2.5rem;
        }
    }
    @media screen and (min-width: 0px) and (max-width: 1280px) {

    }


</style>