<script setup>
import Header from '../../Layouts/Header.vue';
import { ref, onMounted, onUnmounted,computed } from 'vue';
import Content from '../../components/Content.vue';
import TextInput from '../../components/TextInput.vue';
import TextArea from '../../components/TextArea.vue';
import Select from 'primevue/select';
import Message from 'primevue/message';
import { Form } from '@primevue/forms';
import { usePage, useForm } from '@inertiajs/vue3';
import { router } from "@inertiajs/vue3";
import Button from 'primevue/button';
import Toast from 'primevue/toast';
import { useToast } from "primevue/usetoast";
import FloatLabel from 'primevue/floatlabel';
import DatePicker from 'primevue/datepicker';

// Get Data Reports
const page  = usePage(); // Get data from Laravel
const doc = computed(() => page.props.doc);
const toast = useToast();
const show = ref(true)

    onMounted(() => {
    show.value = false
    })

    onUnmounted(() => {
    show.value = true
    })


const dept = ref([
        { name: 'IT', code: 'it' },
        { name: 'QC', code: 'qc' },
        { name: 'GA', code: 'ga' },
    ]);

const formReports = useForm({
    title: null,
    no_document: null,
    deskripsi: null,
    department: null,
    uri: null,
    date_report: null
})

const saveReport = () => {
    formReports.post(route('report.store'),{
        onSuccess: (res) => {
            // formRegister.reset('password', 'password_confirmation')
            toast.add({severity:'success', summary: 'Create report Success !', life: 3000});
            formReports.reset()
        },
        onError: (errors) => {
            console.log(errors); // Debugging: Check if errors return correctly
        }
    })
}

const clearInput = () => {
    formReports.title = '';
    formReports.no_document = '';
    formReports.deskripsi = '';
    formReports.department = '';
    formReports.uri = '';
    formReports.date_report = '';
}
</script>

<template>
    <Head title="Create-Report"/>
    <Header/>
    <Toast />

    <div class="card container mx-auto max-w-screen-xl lg:px-6 py-2.5">
        <Message closable>
                <i class="pi pi-info-circle text-blue-900"><span class="text-md pl-2 text-blue-900 font-sans">Informasi</span></i>
                <p class="text-md text-blue-900">Silahkan isi form dibawah ini untuk membuat laporan baru.</p>
                <p class="text-md text-blue-900">Perlu diperhatikan untuk beberapak data yang wajib diisi.</p>
        </Message>
    </div>
    <Content>
        <template #content-title>
            Create Report
        </template>
        <template #content-body>
            <Transition name="slide-fade">
                <div class="flex flex-col justify-center p-2" v-if="!show">
                    <Form @submit="saveReport">
                        <div class="flex gap-2 pl-2 border border-gray-300 bg-gray-200 w-full">
                            <span class="font-bold w-1/3">Deskripsi</span>
                            <span class="font-bold">Input</span>
                        </div>
                        <div class="flex p-2 w-full items-center border border-gray-300">
                            <span class="font-bold w-1/2">Title <span class="text-red-500">*</span></span>
                            <TextInput type="text" v-model="formReports.title" name="Title" placeholderText="Jhon Doe" class="w-full" :message="formReports.errors.title"/>
                        </div>
                        <div class="flex p-2 w-full items-center border border-gray-300">
                            <span class="font-bold w-1/2">No Document <span class="text-red-500">*</span></span>
                            <FloatLabel class="w-full" variant="on">
                                <Select v-model="formReports.no_document" editable :options="doc" optionValue="no_document" optionLabel="no_document" class="w-full" :message="formReports.errors.no_document"/>
                                <label for="over_label">No Document</label>
                            </FloatLabel>
                        </div>
                        <div class="flex p-2 w-full items-center border border-gray-300">
                            <span class="font-bold w-1/2">Report Date <span class="text-red-500">*</span></span>
                            <FloatLabel variant="on" class="w-full">
                                <DatePicker v-model="formReports.date_report" inputId="on_label" showIcon iconDisplay="input" class="w-full"/>
                                <label for="on_label">Report Date</label>
                            </FloatLabel>
                        </div>
                        <div class="flex p-2 w-full items-center border border-gray-300 bg-gray-200">
                            <span class="font-bold w-1/2">Description Document <span class="text-red-500">*</span></span>
                            <TextArea  v-model="formReports.deskripsi" type="text" name="Deskripsi"  class="w-full" :message="formReports.errors.deskripsi" />
                        </div>
                        <div class="flex p-2 w-full items-center border border-gray-300">
                            <span class="font-bold w-1/2">Select Department <span class="text-red-500">*</span></span>
                            <Select :options="dept" v-model="formReports.department" optionLabel="name" optionValue="name" placeholder="Select Department" class="w-full" :message="formReports.errors.department" fluid/>
                        </div>
                        <div class="flex p-2 w-full items-center border border-gray-300 bg-gray-200">
                            <span class="font-bold w-1/2">Uri <span class="text-red-500">*</span></span>
                            <div class="flex flex-col w-full">
                                <TextInput type="text" name="https://example.net/" v-model="formReports.uri" :message="formReports.errors.uri" />
                                <span class="pl-2 text-orange-800 text-xs">Wajib menyetarakan url dalam bentuk docs/pdf/xsls.</span>
                            </div>
                        </div>
                        <div class="flex justify-end gap-2 mt-2">
                            <Button label="submit" severity="success" type="submit"/>
                            <Button label="Clear" severity="clear" @click="clearInput"/>
                        </div>
                    </Form>
                </div>
            </Transition>
        </template>
        
    </Content>
    
</template>