<script setup>
import Textarea from 'primevue/textarea';
import FloatLabel from 'primevue/floatlabel';
import Message from 'primevue/message';

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
    <FloatLabel variant="on">
        <Textarea id="over_label" v-model="model" rows="5" cols="30" class="w-full" />
        <label for="on_label">{{name}}</label>
        <Message size="small" severity="error" variant="simple">{{message}}</Message>
    </FloatLabel>
</template>