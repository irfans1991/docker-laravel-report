<script setup>
import { useConfirm } from "primevue/useconfirm";
import { useToast } from "primevue/usetoast";
import ConfirmDialog from 'primevue/confirmdialog';
import { router } from '@inertiajs/vue3';
import {defineProps} from "vue";

const confirm = useConfirm();
const toast = useToast();

const props = defineProps({
    id: Number, // Accept ID as a prop
    routes: String
});

const confirm2 = () => {
    confirm.require({
        message: 'Do you want to delete this data?',
        header: 'Delete Confirmation',
        icon: 'pi pi-info-circle',
        rejectLabel: 'Cancel',
        rejectProps: {
            label: 'Cancel',
            severity: 'secondary',
            outlined: true
        },
        acceptProps: {
            label: 'Delete',
            severity: 'danger'
        },
        accept: () => {
            router.delete(`/${props.routes}/${props.id}`);
            toast.add({ severity: 'info', summary: 'Confirmed', detail: 'Record deleted successfully', life: 3000 });
        },
        reject: () => {
            // toast.add({ severity: 'error', summary: 'Rejected', detail: 'You have rejected', life: 3000 });
        }
    });
};


</script>

<template>
    <Toast />
    <ConfirmDialog></ConfirmDialog>
        <button @click="confirm2()">
            <slot name="icon-delete"/>
        </button>
</template> 