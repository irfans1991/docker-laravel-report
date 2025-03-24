<script setup>
import Time from '../components/utils/Time.vue';

</script>

<template>
    <div class="container mx-auto max-w-screen-xl lg:px-6 py-2.5">
        <div class="flex flex-row gap-4 mb-4">
            <div class="basis-1/3">
                <div class="flex justify-between">
                    <h1 class="text-2xl font-semibold text-gray-200 w-2/5 bg-blue-900 text-center rounded-t-lg">
                        <slot name="content-title"/>
                    </h1>
                </div>
                <div class="p-4 bg-gray-300 shadow-md rounded-b-lg rounded-r-lg">
                    <div class="gap-4  ">
                        <div class="card bg-gray-100 rounded">
                           <slot name="content-body-input"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basis-2/3">
                <div class="flex justify-between">
                    <h1 class="text-2xl font-semibold text-gray-100 w-2/12 bg-yellow-500 text-center rounded-t-lg ">
                        <slot name="content-data"/>
                    </h1>
                    <Time />
                </div>
                <div class="p-4 bg-gray-300 shadow-md rounded-b-lg rounded-r-lg">
                    <div class="gap-4  ">
                        <div class="card bg-gray-100 rounded">
                           <slot name="content-body-data"/>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</template>