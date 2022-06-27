<script setup lang="ts">
import { Link }from '@inertiajs/inertia-vue3';

</script>

<template>
    <section class="flex flex-wrap footernav text-white">
        <div class="pt-5 pl-10">
            <h2 class="font-bold text-3xl pb-6">Contact</h2>
            <p class="font-bold text-purple-400">Address</p>
            <p>placeholderstreet 5</p>
            <p>1234 AB Groningen</p>
            <p>The Netherlands</p>
        </div>
        <div class="contact pt-20 mx-10">
            <h2 class="font-bold text-purple-400">
                Email
            </h2>
            <p>
                placeholder@gmail.com
            </p>
            <h2 class="font-bold text-purple-400">
                Phone
            </h2>
            <p>
                123456789
            </p>
        </div>
        <div class="contact ml-10 pb-10">
            <h2 class="font-bold text-3xl pt-5 pb-5">Customer Service</h2>
            <Link class="hover:text-purple-400 block"
                href="">
                About Us
            </Link>
            <Link class="hover:text-purple-400 block"
                href="">
                Repairs
            </Link>
            <Link class="hover:text-purple-400 block" 
                href="">
                Terms of Service
            </Link>
            <Link class="hover:text-purple-400 block"
                href="">
                Privacy Policy
            </Link>
        </div>
        
    </section>

</template>

<style>
    .footernav {
        background: url(@/images/footer-bg.png);
        background-size: cover;
        width: 100%;
    }

    @media screen and (max-width: 534px) {
        .contact {
            padding-top: 2.5rem;
        }
    }
</style>