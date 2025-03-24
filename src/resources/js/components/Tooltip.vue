<script setup>
const props = defineProps({
    name:{
        type: String,
        default: '#'
    },
    href:{
        type: String,
        default: '#'
    }
})
</script>

<template>
    <div class="has-tooltip">
        <span class='tooltip rounded shadow-lg p-1 bg-slate-600 text-white -mt-8'>{{name}}</span>
        <a :href="href">
            <slot name="icon-tables"/>
        </a>
    </div>
</template>