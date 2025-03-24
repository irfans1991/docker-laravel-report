<script setup>

import { ref } from 'vue';
    const model = defineModel({
        type: null,
        required: true
    })

    defineProps({
        name:{
            type: String,
            required: true
        }
    })
const selected = ref('')
const roles = [
    {value: 'admin', name: 'Admin'},
    {value: 'user', name: 'User'},
    {value: 'moderator', name: 'Moderator'},
]
</script>

<template>
    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{name}}</label>
        <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            <!-- <option :options="roles" selected>Choose a country</option> -->
            <option value="admin">Admin</option>
            <option value="moderator">Moderator</option>
            <option value="user">User</option>
        </select>
</template>