<script setup>
import Time from '../utils/Time.vue'
import { ref, onMounted, onUnmounted } from 'vue'
import { Link, router, usePage} from '@inertiajs/vue3'
import { computed } from 'vue'
import Message from 'primevue/message'

//count Report
const page  = usePage(); // Get data from Laravel
const reports = computed(() => page.props.countReport);
const countVerified = computed(() => page.props.countVerified);
const countPending = computed(() => page.props.countPending);
const countPendingDept = computed(() => page.props.countPendingDept);


const show = ref(true)

onMounted(() => {
 show.value = false
})

onUnmounted(() => {
  show.value = true
})
</script>

<style>

</style>

<template>
    <Transition name="slide-fade">
    <div class="container mx-auto max-w-screen-xl lg:px-6 py-2.5" v-if="!show">
      <div class="card container mx-auto max-w-screen-xl lg:px-6 py-2.5">
        <Message severity="warn" closable>
                <i class="pi pi-info-circle text-blue-900"><span class="text-md pl-2 text-blue-900 font-sans">Informasi</span></i>
                <p class="text-md text-blue-900">Selamat Datang, <span class="font-semibold italic">{{ $page.props.auth.user.firstname }}</span> di Aplikasi E-report PT. Chen Woo Fishery </p>
                <p class="text-md text-blue-900">Anda Memiliki Laporan Pending : {{ countPendingDept }} Laporan, dari Departement {{ $page.props.auth.user.department }} </p>
        </Message>
    </div>
      <div class="flex justify-between">
         <h1 class="text-2xl font-semibold text-gray-200 w-2/12 bg-blue-900 text-center rounded-t-lg ">{{$page.component}}</h1>
         <Time />
      </div>
         <div class="p-4 bg-gray-300 shadow-md rounded-b-lg rounded-r-lg">
            <div class="grid grid-cols-3 gap-4 mb-4 ">
               <div class="flex items-center justify-center h-24 rounded-md bg-gray-100 shadow-md ">
                    <dl>
                        <dt class="w-8 h-8 rounded-full bg-orange-100 dark:bg-gray-500 text-orange-600 dark:text-orange-300 text-sm font-medium flex items-center justify-center mb-1" >{{ reports }}</dt>
                        <dd class="text-orange-600 dark:text-orange-300 text-sm font-medium" >
                            Document
                        </dd>
                    </dl>
                </div>
                <div class="flex items-center justify-center h-24 rounded-md bg-gray-100 shadow-md ">
                   <dl class="flex flex-col items-center justify-center">
                     <dt class="w-8 h-8 rounded-full bg-emerald-400  text-white text-sm font-medium flex items-center justify-center mb-1">{{countVerified}}</dt>
                     <dd class="text-emerald-500 text-sm font-medium">Verified</dd>
                   </dl>
                </div>
                <div class="flex items-center justify-center h-24 rounded-md bg-gray-100 shadow-md ">
                  <dl class="flex flex-col items-center justify-center">
                     <dt class="w-8 h-8 rounded-full bg-amber-400 text-white  text-sm font-medium flex items-center justify-center mb-1">{{countPending}}</dt>
                     <dd class="text-amber-400 text-sm font-medium">Pending</dd>
                  </dl>
                </div>
            </div>
        </div>
    </div>
    </Transition>

    <!-- <button @click="show = !show">Toggle Slide + Fade</button>
  <Transition name="slide-fade">
    <p v-if="show">hello</p>
  </Transition> -->
</template>
