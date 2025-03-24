<script setup>
    import { ref, onMounted, onUnmounted} from "vue";
    import { usePage, useForm } from '@inertiajs/vue3';
    import { computed } from "vue";
    import TextInput from '../../components/TextInput.vue';// import { reactive } from 'vue';
    import Header from '../../Layouts/Header.vue';
    import ContentHalf from '../../components/ContentHalf.vue';
    import Button from 'primevue/button';
    import { Form } from '@primevue/forms';
    import TableShort from "../../components/table/TableShort.vue";
    const page  = usePage(); // Get data from Laravel
    const roles = computed(() => page.props.roles);
    import Column from 'primevue/column';
    import Toast from 'primevue/toast';
    import { useToast } from "primevue/usetoast";
    import { useConfirm } from "primevue/useconfirm";
    import { router } from "@inertiajs/vue3";
    import ConfirmDialog from 'primevue/confirmdialog';
    import DialogInput from '../../components/DialogInput.vue';
    
    const confirm = useConfirm();
    const toast = useToast();
    const successMsg = computed(() => page.props.flash?.success ?? null);

    // const permissions = computed(() => page.props.permission);

    const formRole = useForm({
        name: null
    })

const saveRole = () =>{
        formRole.post(route('add-role.store'),{
        onSuccess: (res) => {
            // formRegister.reset('password', 'password_confirmation')
            toast.add({severity:'success', summary: 'Create Role Success !', detail:successMsg, life: 3000});
            formRole.reset()
        },
        onError: (errors) => {
            console.log(errors); // Debugging: Check if errors return correctly
        }
    });
}

    const show = ref(true)

    onMounted(() => {
    show.value = false
    })

    onUnmounted(() => {
    show.value = true
    })

const permissions = computed(() => page.props.permission ?? []); // Ensure it's an array
const selectedPermissions = ref();

const clearInput = () => {
  formRole.name = '';
};
const confirm2 = (data) => {
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
    });
};

</script>

<template>
    
    <Head title="Add-Role"/>
    <Header/>
    <ConfirmDialog></ConfirmDialog>
    <Toast />
    <Transition name="slide-fade">
        <ContentHalf v-if="!show">
            <template #content-title>
                Add Role
            </template>
            <template #content-body-input>
                <div class="flex justify-between p-2">
                    <Form  @submit="saveRole" class="flex flex-col gap-1 w-full sm:w-full" >
                        <span class="font-bold mb-2 block text-gray-500">Form Role</span>
                        <div class="flex gap-2 mb-3">
                            <TextInput v-model="formRole.name" type="text" name="Role Name" :message="formRole.errors.name" class="w-full" />
                        </div>
                        <div class="flex gap-2 mb-3">
                            <Button label="submit" severity="info" type="submit"/>
                            <Button label="Clear" severity="clear" @click="clearInput"/>
                        </div>
                    </Form>
                </div>
            </template>
            <template #content-data>
                Table Role
            </template>
            <template #content-body-data>
                <TableShort :roles="roles">
                    <template #table-body-data2 >
                                <Column field="name" header="Role"></Column>
                                <Column field="" header="permissions"></Column>
                                <Column header="Action">
                                    <template #body="{data}">
                                        <div class="flex gap-2">
                                            <DialogInput :id="data.id" :dataPermissions="permissions" :name="data.name">
                                                <template #dialog-input >
                                                    <i class="pi pi-file-edit" style="color: gray; font-size: 1.5rem" v-tooltip.top="'Edit'"></i>
                                                </template>
                                            </DialogInput>
                                            <button @click="confirm2(data)">
                                                    <i class="pi pi-trash" style="color: red; font-size: 1.5rem" v-tooltip.top="'Delete'"></i>
                                            </button>
                                        </div>
                                    </template>
                                </Column>
                        </template>
                    </TableShort>
            </template>
        </ContentHalf>
    </Transition>
</template>