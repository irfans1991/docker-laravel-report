<script setup>
import {Link} from '@inertiajs/vue3';
import TextInput from '../TextInput.vue';
import { useForm } from '@inertiajs/vue3';
import { onMounted } from 'vue';
const formLogin = useForm({
    email: null,
    password: null,
    remember: null
})

const submit = () => {
    formLogin.post(route('auth.login'),{
        onError : () => formLogin.reset('password,email')
    })
}

onMounted(() => {
  document.body.style.background = "url('../../../img/bg-login.jpg') no-repeat center center fixed";
  document.body.style.backgroundSize = "cover";
});
// year now
const year = new Date().getFullYear();

</script>

const 

<template>
    <Head title="Sign in"/>
    <section class="bg-gray-50">
        <div class="flex flex-col items-center justify-center px-6 py-4 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center text-2xl font-semibold text-gray-900 dark:text-gray-700 mb-4">
                <img class="w-32" src="../../../img/e-report.png" alt="logo">
            </a>
            <div class="relative items-start w-full justify-start sm:max-w-md ">
                <!-- <div class=" text-2xl font-semibold text-yellow-500 text-center w-2/12 bg-yellow-500 rounded-t-lg ml-[10%] shadow-xl">Users</div> -->
                <div class=" text-2xl font-semibold text-white text-center w-2/6 bg-blue-900 rounded-t-lg shadow-3xl ">E-report</div>
                <!-- <div class="absolute top-0 text-2xl font-semibold text-green-700 text-center w-1/3 bg-green-700 rounded-t-lg ml-[40%]">Users</div> -->
            </div>
            <div class="w-full bg-blue-950 rounded-b-lg shadow-md md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-300 md:text-1xl">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-5" action="#" @submit.prevent="submit">
                            <TextInput name="Email" type="email" placeholderText="Jon@mail.com" v-model="formLogin.email" :message="formLogin.errors.email"/>
                            <TextInput name="Password" type="password" placeholderText="********" v-model="formLogin.password" :message="formLogin.errors.password"/>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                  <input id="remember" aria-describedby="remember" type="checkbox" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800" v-model="formLogin.remember"  >
                                </div>
                                <div class="ml-3 text-sm">
                                  <label for="remember" class="text-gray-300">Remember me</label>
                                </div>
                            </div>
                            <!-- <a href="#" class="text-sm font-medium text-gray-300 ">Forgot password?</a> -->
                        </div>
                            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-primary-800" :disabled="formLogin.processing">Sign in</button>
                            <div class="flex justify-center">
                                <h1 class="text-white font-sans text-[12px]">Copyright © {{ year }} <span class="text-yellow-500">IT Support cwf</span></h1>
                            </div>
                            <!-- <p class="text-sm font-light text-gray-400 ">
                                Don’t have an account yet? <Link :href="route('register')" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign up</Link>
                            </p> -->
                    </form>
                </div>
            </div>
        </div>
      </section>
</template>


<!-- <style scoped>
:deep(body) {
  background: url('../../../img/bg-login.jpg') no-repeat center center fixed;
  background-size: cover;
}
</style> -->