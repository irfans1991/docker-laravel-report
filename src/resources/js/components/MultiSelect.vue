<script setup>
import MultiSelect from 'primevue/multiselect';
import { ref } from 'vue';

const model = defineModel({
    type: null,
    required: true
})

const props = defineProps({
    permission: Array
})

const permissions = ref(props.permission);
</script>

<template>
    <div class="card flex justify-center">
            <MultiSelect v-model="model" :options="permissions" optionLabel="name" display="chip" filter placeholder="Select Permission"
            :maxSelectedLabels="3" class="w-full md:w-64" />
    </div>
</template>