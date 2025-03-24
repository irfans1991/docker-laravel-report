<script setup>
import Header from '../../Layouts/Header.vue';
import {Link, router, usePage} from '@inertiajs/vue3'
import { ref, onMounted, onUnmounted,watch,computed } from 'vue';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import Time from '../../components/utils/Time.vue';
import Button from 'primevue/button';
import IconField from 'primevue/iconfield';
import InputIcon from 'primevue/inputicon';
import FloatLabel from 'primevue/floatlabel';
import InputText from 'primevue/inputtext';
import Badge from 'primevue/badge';
import Toast from 'primevue/toast';
import { useToast } from "primevue/usetoast";
import Modal from '../../components/Modal.vue';
import ConfirmDelete from '../../components/ConfirmDelete.vue';
import {debounce} from 'lodash';
import ConfirmDialog from 'primevue/confirmdialog';
import { useConfirm } from "primevue/useconfirm";
import {usePermission} from "../../components/composables/permissions"

const {hasPermission} = usePermission()



    const toast = useToast();
    const confirm = useConfirm();

const page  = usePage(); // Get data from Laravel
import dayjs from "dayjs";

const users = computed(() => page.props.users);

// Format date properly
const formatDate = (date) => {
    return dayjs(date).format("DD-MM-YYYY");
};

const show = ref(true)

onMounted(() => {
 show.value = false
})

onUnmounted(() => {
  show.value = true
})

const search = ref('')

watch(
    search,
    debounce((q) => {
        router.get("/users", { search: q }, {
            preserveState: true,  // Keep component state (avoid reload)
            preserveScroll: true, // Keep scroll position
            only: ["users"]       // Only update 'users' data (prevents full-page reload)
        });
    }, 500),
    { deep: true }
);

const confirm2 = (data) => {
    confirm.require({
        message: `Do you want to delete this ${data.firstname}?`,
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
            router.delete(`/users/${data.id}`);
            toast.add({ severity: 'info', summary: 'Confirmed', detail: 'Record deleted successfully', life: 3000 });
        },
    });
};

// Function to fetch user data using `fetch()`
const fetchUser = async (id) => {
    try {
        const response = await fetch(`/users/${id}/edit`);
        if (!response.ok) throw new Error("Failed to fetch user data");
        user.value = await response.json();
    } catch (error) {
        console.error("Error fetching user:", error);
    }
}

</script>

<template>
    <Head title="Users"/>
    <Header/>
    <Toast />
    <ConfirmDialog></ConfirmDialog>
    <!-- start Content about -->
    <Transition name="slide-fade">
            <div class="container mx-auto max-w-screen-xl lg:px-6 py-2.5" v-if="!show">
                <div class="flex justify-between">
                    
                <h1 class="text-2xl font-semibold text-gray-200 w-2/12 bg-blue-900 text-center rounded-t-lg ">Users</h1>
                <Time />
                </div>
                <div class="p-4 bg-gray-300 shadow-md rounded-b-lg rounded-r-lg">
                    <div class="gap-4  ">
                        <div class="card bg-gray-100 rounded">
                                <div class="flex justify-end p-2 gap-2">
                                    <FloatLabel variant="on" class="mr-2">
                                        <IconField>
                                            <InputIcon class="pi pi-search" />
                                            <InputText id="on_label"  autocomplete="off" v-model="search" />
                                        </IconField>
                                        <label for="on_label">Search</label>
                                    </FloatLabel>
                                    <Link :href="route('create-user')">
                                        <Button label="Add User" raised severity="info" class=" bg-blue-900" />
                                    </Link>
                                    <Link :href="route('add-role')" v-if="hasPermission('Create Role')">
                                        <Button label="Add Role" raised severity="secondary" class=" bg-blue-900" />
                                    </Link>
                                </div>
                                <DataTable :value="users.data" paginator :rows="5" :rowsPerPageOptions="[5, 10, 20, 50]" tableStyle="min-width: 50rem">
                                        <Column field="firstname" header="Name" style="width: 15%"></Column>
                                        <Column field="email" header="Email" style="width: 25%"></Column>
                                        <Column field="" header="Date" style="width: 10%">
                                            <template #body="slotProps">
                                                {{ formatDate(slotProps.data.created_at) }}
                                            </template></Column>
                                            <Column field="" header="Status" style="width: 10%">
                                                <template #body="">
                                                    <Badge value="Active" size="large" severity="success" class="text"></Badge>
                                                    <!-- <span v-else class="badge badge-danger">Inactive</span> -->
                                                </template>
                                            </Column>
                                        <Column field="role" header="Role" style="width: 10%"></Column>
                                        <Column field="" header="Action" style="width: 10%">
                                            <template #body="{data}" >
                                                <div class="flex gap-1">
                                                    <Modal :id="data.id" :email="data.email">
                                                    <template #icon-modals>
                                                        <i class="pi pi-file-edit" style="color: gray; font-size: 1.5rem" v-tooltip.top="'Edit'"></i>
                                                    </template>
                                                    </Modal>
                                                    <button @click="confirm2(data)">
                                                        <i class="pi pi-trash" style="color: red; font-size: 1.5rem" v-tooltip.top="'Delete'"></i>
                                                    </button>
                                                </div>
                                            </template>
                                        </Column>
                                    <!-- Show this row when there are no users -->
                                    <template #empty >
                                        <h1 class="text-center">No customers found.</h1>
                                    </template>
                                </DataTable>
                        </div>
                    </div>
                </div>
            </div>
      </Transition>
</template>