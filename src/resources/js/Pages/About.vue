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
                            <!-- Contact Section -->
                                <section class="max-w-6xl mx-auto px-6 py-12 grid md:grid-cols-2 gap-10 items-center">
                                <!-- Left: Info -->
                                <div>
                                    <h1 class="text-3xl font-bold mb-4">Contact Us</h1>
                                    <p class="text-gray-600 mb-8">
                                    If you have any questions or want to <span class="font-semibold">get a free estimate</span>
                                    for your error situation, contact us via email or phone call. We will be very happy to help you!
                                    </p>

                                    <div class="space-y-4">
                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-phone text-blue-600"></i>
                                        <span class="text-lg">+62 811 414 750</span>
                                    </div>

                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-envelope text-blue-600"></i>
                                        <span class="text-lg">irfan@chenwoofishery.com</span>
                                    </div>

                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-map-marker-alt text-blue-600"></i>
                                        <span class="text-lg">CWF TECH - PT. CHEN WOO FISHERY MAKASSAR</span>
                                    </div>

                                    <div class="flex items-center space-x-3">
                                        <i class="fas fa-clock text-blue-600"></i>
                                        <span class="text-lg">Monday - Friday: 8:30 am - 4:30 pm</span>
                                    </div>
                                    </div>
                                </div>

                                <!-- Right: Image -->
                                <div class="flex justify-center">
                                    <img 
                                    src="../../img/e-report.png" 
                                    alt="Contact" 
                                    class="rounded-2xl shadow-lg max-w-sm w-full object-cover"
                                    />
                                </div>
                                </section>
                        </div>
                    </template>
                </Content>
            </div>
        </Transition> 
</template>
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

<style scoped>
/* Animasi transisi mirip slide-fade */
.slide-fade-enter-active {
  transition: all 0.5s ease;
}
.slide-fade-leave-active {
  transition: all 0.3s ease;
}
.slide-fade-enter-from,
.slide-fade-leave-to {
  opacity: 0;
  transform: translateY(10px);
}
</style>