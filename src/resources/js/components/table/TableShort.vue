<script setup>
import DataTable from 'primevue/datatable';
defineProps({
    roles: Array
})
</script>
<template>
    <div class="card">
        <DataTable :value="roles" tableStyle="min-width: 50rem">
           <slot name="table-body-data2"/>
        </DataTable>
    </div>
</template>