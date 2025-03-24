<script setup>
import { Link } from '@inertiajs/vue3'
import Header from '../../Layouts/Header.vue';
</script>

<template>
    <Header/>
    <section class="">
        <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-sm text-center">
                <h1 class="mb-4 text-7xl tracking-tight font-extrabold lg:text-9xl text-primary-600 dark:text-primary-500">403</h1>
                <p class="mb-4 text-3xl tracking-tight font-bold text-gray-900 md:text-4xl dark:text-gray-300">Forbidden</p>
                <p class="mb-4 text-lg font-light text-gray-500 dark:text-gray-400">User does not have the right roles.</p>
                <Link :href="route('dashboard')">
                    <a href="#" class="inline-flex text-white bg-blue-900 hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center  my-4">Back to Homepage</a>
                </Link>
            </div>   
        </div>
    </section>
</template>