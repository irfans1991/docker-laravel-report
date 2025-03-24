<script setup>
    import FloatLabel from 'primevue/floatlabel';
    import InputText from 'primevue/inputtext';
    import Message from 'primevue/message';
    import Password from 'primevue/password';
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
})
</script>

<template>
        <FloatLabel variant="on" class="mr-2">
            <Password v-model="model" :feedback="false" fluid class="w-full" id="on_label" />
            <label for="on_label">{{name}} <span class="text-red-500">*</span></label>
            <Message size="small" severity="error" variant="simple">{{message}}</Message>
        </FloatLabel>
</template>