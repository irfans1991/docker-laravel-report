<script setup>
    import FloatLabel from 'primevue/floatlabel';
    import InputText from 'primevue/inputtext';
    import Message from 'primevue/message';
    
    import {usePermission} from "../components/composables/permissions"

    //permission
    const {hasPermission} = usePermission()
const model = defineModel({
    type: null,
    required: true
})


defineProps({
    placeholderText:{
        type: String,
        default: ''
    },
    name:{
        type: String,
        required: true
    },
    type:{
        type: String,
        default: 'text'
    },
    message: String,
    disabled: String,
})
</script>

<template>
        <!-- <label for="name" class="block mb-2 text-sm font-medium text-gray-400 ">{{name}}</label>
        <input  :type="type" v-model="model" name="name" id="name" class="bg-gray-50 border border-gray-700 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5  dark:placeholder-gray-400  " :class="{'!ring-red-500 !border-red-500':message}" :placeholder="placeholderText">
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium" v-if="message">{{message}}</span></p> -->
        <FloatLabel variant="on" class="mr-2">
            <InputText id="on_label" v-model="model" autocomplete="off" :type="type"  size="medium"  class="w-full"/>
            <label for="on_label">{{name}}</label>
            <Message size="small" severity="error" variant="simple">{{message}}</Message>
        </FloatLabel>
</template>