<!-- <script setup>
import {Link} from '@inertiajs/vue3';
</script>


<template>

    <div>
        <header class="bg-indigo-500 text-white">
            <nav class="flex  p-4 max-w-screen-lg max-auto">
                <h1>{{  }}</h1>
                <div class="flex space-x-6 items-center justify-between">
                    <Link href="/">Home</Link>
                    <Link href="/about">About</Link>
                    <Link href="/about">About</Link>
                    <Link href="/about">About</Link>
                    <Link href="/about">About</Link>
                </div>
            </nav>
        </header>

        <main class="p-4">
            <slot />
        </main>
    </div>
</template> -->

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';
import { Link } from "@inertiajs/vue3"
import {usePermission} from "../components/composables/permissions"
const {hasRole} = usePermission()

const currentDate = ref('');
const currentTime = ref('');

function updateDateTime() {
  const now = new Date();
  currentDate.value = now.toLocaleDateString('id-ID', {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  });
  currentTime.value = now.toLocaleTimeString('id-ID', {
    hour: '2-digit',
    minute: '2-digit',
    second: '2-digit'
  });
}

onMounted(() => {
  updateDateTime();
  const timer = setInterval(updateDateTime, 1000);
  onBeforeUnmount(() => {
    clearInterval(timer);
  });
});
</script>

<template>
    <header>
        <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 shadow-md">
            <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl ">
                <a href="#" class="flex items-center">
                    <img src="../../img/logo cwf-01.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo" />
                    <span class="self-center text-gray-700 text-xl font-semibold sm:text-2xl whitespace-nowrap">E-Report</span>
                </a>
                <div class="flex items-center lg:order-2">
                    <a href="tel:5541251234" class="text-md  text-gray-700 md:font-bold mr-2">Hello, {{ $page.props.auth.user.name }}</a>
                    <!-- <a href="#" class="text-sm  text-blue-600 dark:text-blue-500 hover:underline mr-2" >{{ currentDate }} - {{ currentTime }}</a> -->
                    <Link :href="route('auth.logout')" method="post" as="button" type="button" class="text-white bg-blue-900 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 focus:outline-none">Logout</Link>
                    <!-- <button data-collapse-toggle="mobile-menu-2" type="button" class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu-2" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    </button> -->
                </div>
                <div class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1" id="mobile-menu-2">
                    <ul class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-2 lg:mt-0">
                        <li>
                            <Link :href="route('dashboard')" class="block py-2 pr-2 pl-3 text-white rounded " aria-current="page" :class="{'bg-gray-400 text-gray-900': $page.component === 'Home'}">Home</Link>
                        </li>
                        <li v-if="hasRole('admin')">
                            <Link :href="route('dashboard')" class="block py-2 pr-2 pl-3 text-white rounded " aria-current="page" :class="{'bg-gray-400 text-gray-900': $page.component === 'Home'}">Admin</Link>
                        </li>
                        <li>
                            <a href="#" class="block py-2 pr-2 pl-3 text-gray-500 border-b border-gray-100 hover:bg-gray-50  lg:border-0 lg:hover:text-gray-900 ">About</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
</template>