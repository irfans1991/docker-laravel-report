
import { useConfirm } from "primevue/useconfirm";
import { router } from '@inertiajs/vue3';
// import { useToast } from "primevue/usetoast";
// const toast = useToast();

const confirm = useConfirm();

export const Confirm2 = (data) => {
    confirm.require({
        message: `Do you want to delete this ${data.name}?`,
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
            router.delete(`/role/add-role/${data.id}`);
            toast.add({ severity: 'info', summary: 'Confirmed', detail: 'Record deleted successfully', life: 3000 });
        },
        reject: () => {
            // toast.add({ severity: 'error', summary: 'Rejected', detail: 'You have rejected', life: 3000 });
        }
    });
};