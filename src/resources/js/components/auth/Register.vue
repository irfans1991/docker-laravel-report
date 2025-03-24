<script setup>
import { Link } from '@inertiajs/vue3';
// import { reactive } from 'vue';
import {useForm} from '@inertiajs/vue3'
// import {router} from '@inertiajs/vue3'

import { usePage } from '@inertiajs/vue3';
import { computed } from "vue";

    const page  = usePage(); // Get data from Laravel
    const roles = computed(() => page.props.roles);

import TextInput from '../TextInput.vue';

const formRegister = useForm({
    name: null,
    email: null,
    password: null,
    password_confirmation: null,
    role: null
})

const submit = () => {
    // router.post('/auth/register', formRegister)
    formRegister.post(route('register.store'),{
        onError: () => formRegister.reset('password', 'password_confirmation'),
    })
}

</script>

<template>
    <Head title="Register"/>
    <section class="bg-gray-50 dark:bg-gray-50">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-gray-700">
                <img class="w-8 h-8 mr-2" src="../../../img/logo cwf-01.png" alt="logo">
                E-Report   
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-1xl dark:text-white">
                       Register your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#" @submit.prevent="submit">
                            <TextInput v-model="formRegister.name" type="text" name="Name" placeholderText="Jhon Doe" :message="formRegister.errors.name"/>
                            <TextInput v-model="formRegister.email" type="email" name="Email" placeholderText="Jhon@rocketmail.com" :message="formRegister.errors.email"/>
                            <TextInput v-model="formRegister.password" type="password" name="Password" placeholderText="*********" :message="formRegister.errors.password"/>
                            <TextInput v-model="formRegister.password_confirmation" type="password" name="Password Cnfirm" placeholderText="*********" :message="formRegister.errors.password"/>
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
                            <select id="countries" v-model="formRegister.role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Select a role</option>
                                <option v-for="role in roles" :key="role.id" :value="role.name">
                                    {{ role.name }}
                                </option>
                            </select>
                            <button type="submit" class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800" :disabled="formRegister.processing">Register</button>
                            <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                                Already a user? <Link :href="route('login')" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign In</Link>
                            </p>
                    </form>
                </div>
            </div>
        </div>
      </section>
</template>