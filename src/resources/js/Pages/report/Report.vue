<script setup>
import Header from '../../Layouts/Header.vue';
import { ref, onMounted, onUnmounted, watch,computed} from 'vue';
import IconField from 'primevue/iconfield';
import InputIcon from 'primevue/inputicon';
import FloatLabel from 'primevue/floatlabel';
import InputText from 'primevue/inputtext';
import Button from 'primevue/button';
import Time from '../../components/utils/Time.vue';
import DataTable from 'primevue/datatable';
import Column from 'primevue/column';
import Toast from 'primevue/toast';
import { useToast } from "primevue/usetoast";
import {Link, router, usePage} from '@inertiajs/vue3'
import {debounce} from 'lodash';
import dayjs from "dayjs"
import Badge from 'primevue/badge';
import DatePicker from 'primevue/datepicker';
import ConfirmDialog from 'primevue/confirmdialog';
import { useConfirm } from "primevue/useconfirm";
import ModalCert from '../../components/ModalCert.vue';
import ToggleSwitch from 'primevue/toggleswitch';

const confirm = useConfirm();



// Get Data Reports
const page  = usePage(); // Get data from Laravel
const reports = computed(() => page.props.reports);
const formatDate = (date) => {
    return dayjs(date).format("DD-MM-YYYY");
};

//Search
const search = ref('')

watch(
    search,
    debounce((q) => {
        router.get(route('report.index'), { search: q, start_date: dates.value[0], end_date: dates.value[1], verified: checked.value }, {
            preserveState: true,  // Keep component state (avoid reload)
            preserveScroll: true, // Keep scroll position
            only: ["reports"]       // Only update 'users' data (prevents full-page reload)
        });
    }, 500),
    { deep: true }
);


const toast = useToast();

const show = ref(true)

onMounted(() => {
 show.value = false
})

onUnmounted(() => {
  show.value = true
})

// filter
const dates = ref([]);

// Function to fetch filtered data
watch(dates, (newVal) => {
    if (newVal?.[0] && newVal?.[1]) {
        router.get(route('report.index'), {
            start_date: newVal[0],
            end_date: newVal[1],
            verified: checked.value, 
            search: search.value,
        }, { preserveState: true, preserveScroll: true });
    }
});

// delete
const confirm2 = (data) => {
    confirm.require({
        message: `Do you want to delete this ${data.title} ?`,
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
            router.delete(`/report/${data.id}/delete-report`);
            toast.add({ severity: 'info', summary: 'Confirmed', detail: 'Record deleted successfully', life: 3000 });
        },
    });
};

const checked = ref(false);
// Watch for changes and send request
watch(checked, (value) => {
  router.get(route('report.index'), { verified: value, search: search.value, start_date: dates.value[0], end_date: dates.value[1] }, { preserveState: true });
});

</script>

 

<template>
    <Header/>
    <Head title="Report"/>
    <Toast />
    <ConfirmDialog></ConfirmDialog>
    <!-- start Content Report -->
    <Transition name="slide-fade">
        <div class="container mx-auto max-w-screen-xl lg:px-6 py-2.5" v-if="!show">
            <div class="flex justify-between">
            <h1 class="text-2xl font-semibold text-gray-200 w-2/12 bg-blue-900 text-center rounded-t-lg ">Report</h1>
            <Time />
            </div>
            <div class="p-4 bg-gray-300 shadow-md rounded-b-lg rounded-r-lg">
                <div class="gap-4  ">
                    <div class="card bg-gray-100 rounded">
                        <div class="flex justify-end p-2 w-full">
                            <div class="flex justify-center items-center">
                                <ToggleSwitch v-model="checked" class="mr-2"/>
                            </div>
                            <FloatLabel variant="on" class="mr-2">
                                <IconField>
                                    <InputIcon class="pi pi-search" />
                                    <InputText id="on_label"  autocomplete="off" v-model="search" />
                                </IconField>
                                <label for="on_label">Search</label>
                            </FloatLabel>
                            <FloatLabel variant="on" class="mr-2">
                                    <DatePicker v-model="dates" selectionMode="range" :manualInput="false" class="w-64" showIcon iconDisplay="input"/>
                                <label for="on_label">Date</label>
                            </FloatLabel>
                            <Link :href="route('create-report')">
                                <Button label="Add Report" raised severity="info" class=" bg-blue-900" />
                            </Link>
                        </div>

                        <DataTable :value="reports" paginator :rows="5" :rowsPerPageOptions="[5, 10, 20, 50]" tableStyle="min-width: 50rem">
                            <Column field="title" header="Title" style="width: 25%"></Column>
                            <Column field="no_document" header="doc number" style="width: 15%"></Column>
                            <Column field="name" header="Name" style="width: 10%"></Column>
                            <Column field="" header="Date" style="width: 10%">
                                <template #body="slotProps">
                                    {{ formatDate(slotProps.data.date_report) }}
                                </template>
                            </Column>
                            <Column field="" header="Report" style="width: 5%">
                                <template #body="slotProps">
                                    <a :href="slotProps.data.uri" target="_blank">
                                        <i class="pi pi-file" style="font-size: 1.5rem"></i>
                                    </a>
                                </template>
                            </Column>
                            <Column field="department" header="Department" style="width: 10%"></Column>
                            <Column field="" header="status" style="width: 10%">
                                <template #body="slotProps">
                                    <Badge v-if="slotProps.data.verified_by === null" value="Pending" severity="warn"/>
                                    <Badge v-else value="Verified" severity="success"/>
                                </template>
                            </Column>
                            <Column field="" header="Action" style="width: 10%">
                                <template #body="slotProps" >
                                    <div class="flex gap-1">
                                        <Link :href="route('report.edit', slotProps.data.id)">
                                            <i class="pi pi-file-edit" style="color: gray; font-size: 1.5rem" v-tooltip.top="'Detail'"></i>
                                        </Link>
                                        <button @click="confirm2(slotProps.data)">
                                            <i class="pi pi-trash" style="color: red; font-size: 1.5rem" v-tooltip.top="'Delete'"></i>
                                        </button>
                                    </div>
                                </template>
                            </Column>
                            <Column field="" header="Legal" style="width: 25%">
                            <template #body="{data}">
                                <ModalCert :report="data">
                                    <template #cert-modal>
                                        <i class="pi pi-file-pdf" style="color: red; font-size: 1.5rem"></i>
                                    </template>
                                </ModalCert>
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