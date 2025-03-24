<script setup>
import Header from '../Layouts/Header.vue';
import Content from "../components/Content.vue";
import { ref, onMounted, onUnmounted } from 'vue';
import { GoogleMap, Marker } from 'vue3-google-map'
    defineProps({
        name: String,
        age: Number
    })

    const show = ref(true)

onMounted(() => {
show.value = false
})

onUnmounted(() => {
show.value = true
})

const center = { lat: 40.689247, lng: -74.044502 }
</script>


<template>
    <Head title="About" />
    <Header/>
    <Transition name="slide-fade">
        <div v-if="!show">
            <Content>
                <template #content-title>
                    Contact
                </template>
                <template #content-body>
                    <div>
                        <h1>Contact</h1>
                        <GoogleMap
                        api-key="YOUR_GOOGLE_MAPS_API_KEY"
                        style="width: 100%; height: 500px"
                        :center="center"
                        :zoom="15"
                        >
                          <Marker :options="{ position: center }" />
                        </GoogleMap>
                    </div>
                </template>
            </Content>
        </div>
    </Transition>
    <!-- start Content about -->

    <!-- <div class="container mx-auto max-w-screen-xl lg:px-6 py-2.5">
        <div class="flex justify-between">
           <h1 class="text-2xl font-semibold text-gray-200 w-2/12 bg-blue-900 text-center rounded-t-lg ">{{$page.component}}</h1>
           <Time />
        </div>
           <div class="p-4 bg-gray-300 shadow-md rounded-b-lg rounded-r-lg">
              <div class="gap-4 mb-4 ">
                    <div class="p-4  rounded-lg bg-gray-100">
                        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-slate-700">Regain <mark class="px-2 text-white bg-blue-600 rounded-sm dark:bg-blue-500">control</mark> over your days</h1>
                        <p class="text-lg font-normal text-gray-500 lg:text-xl dark:text-gray-400" preserve-scroll>Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
                </div>
              </div>
          </div>
      </div> -->
    <!-- <div>
        <h1>
            This About Page - {{ name }}
        </h1> -->
        <!-- if age nothing -->
        
        <!-- <h1 >
            {{ name }} - {{ age }} years old
        </h1>
    </div> -->
</template>