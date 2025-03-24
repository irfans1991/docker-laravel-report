<script setup>
 import { ref, onMounted, onUnmounted, computed} from "vue";
    import { usePage, useForm, router } from '@inertiajs/vue3';
    import TextArea from "../../components/TextArea.vue";
    import Header from '../../Layouts/Header.vue';
    import ContentHalf from '../../components/ContentHalf.vue';
    import Button from 'primevue/button';
    import { Form } from '@primevue/forms';
    import Toast from 'primevue/toast';
    import { useToast } from "primevue/usetoast";
    import Divider from 'primevue/divider';
    import TextInput from "../../components/TextInput.vue";
    import dayjs from "dayjs"
    import {usePermission} from "../../components/composables/permissions"
    import Avatar from 'primevue/avatar'; 
    import {getInitials} from "../../components/composables/shortName"
    import Select from 'primevue/select';
    import FloatLabel from 'primevue/floatlabel';
    import DatePicker from 'primevue/datepicker';

 
    //permission
    const {hasPermission} = usePermission()

    const page  = usePage(); // Get data from Laravel
    const report = computed(() => page.props.report);

    const toast = useToast();

    // create comment
    const formComment = useForm({
    report_id: computed(() => page.props.report.id || null),
    comment: null,
    })
    // Get Comments
    const pageComment  = usePage(); // Get data from Laravel
    const comment = computed(() => pageComment.props.comment);

const saveComment = () => {
    formComment.post(route('comment.store'),{
        preserveScroll: true,
        onSuccess: () => {
            formComment.reset()
        },
        onError: (errors) => {
            console.log(errors); // Debugging: Check if errors return correctly
        }
    })
    
}

const formReportEdit = useForm({

    title: report.value?.title || "",
    no_document: report.value?.no_document || "",
    deskripsi: report.value?.deskripsi || "",
    department: report.value?.department || "",
    uri: report.value?.uri || "",
    date_report: report.value?.date_report || "",
});

const formatDate = (date) => {
    return dayjs(date).format("DD-MM-YYYY HH:mm:ss");
    }

const dept = ref([
    { name: 'IT', code: 'it' },
    { name: 'QC', code: 'qc' },
    { name: 'GA', code: 'ga' },
]);

// Submit the update request
const updateReport = () => {
    formReportEdit.put(route('report.update', report.value.id), {
        preserveScroll: true,
        onSuccess: () => {
             // formRegister.reset('password', 'password_confirmation')
             toast.add({severity:'success', summary: 'Update report '+ report.value.title + ' Success !', life: 3000});
            formReports.reset()
        },
        onError: (errors) => {
            console.error("Validation errors:", errors);
        }
    });
};

const show = ref(true)

    onMounted(() => {
    show.value = false
    })

    onUnmounted(() => {
    show.value = true
    })

const clearComment = () => {
    formComment.reset()
}

// checked the update request
const checkedReport = () => {
    router.put(route('report.checked', report.value.id), {});
    toast.add({severity:'success', summary: 'Checked report '+ report.value.title + ' Success !', life: 3000});
};

// Submit the update request
const verifiedReport = () => {
    router.put(route('report.verified', report.value.id), {
    });
    toast.add({severity:'success', summary: 'Verivied report '+ report.value.title + ' Success !', life: 3000});
};

</script>

<template>
    <Head title="Create-Report"/>
    <Header/>
    <Toast />
    <Transition name="slide-fade">
        <ContentHalf v-if="!show">
        
            <template #content-title>
                Comment
            </template>
            <template #content-body-input>
                <div class="flex justify-between p-2">
                    <Form  @submit="saveComment" class="flex flex-col gap-1 w-full " >
                        <div class="flex gap-2">
                            <TextArea  type="text" name="Comment" v-model="formComment.comment" class="w-full" />
                        </div>
                        <div class="flex gap-2 mb-1" >
                            <Button label="submit" severity="info" type="submit"/>
                            <Button label="Clear" severity="clear" @click="clearComment"/>
                        </div>
                    </Form>
                </div>
                <div class="mb-1 p-2">
                    <Divider align="left" >
                        <b>Comments</b>
                    </Divider>
                    <div class="flex items-center gap-2 mb-1" v-for="val in comment" :key="val.id">
                        <div>
                            <Avatar :label="getInitials(val.name)" class=" h-7 sm:h-7" shape="circle" :style="'background-color: #ece9'+getInitials(val.name)+'c; color: #2a1261'"/>
                        </div>
                        <div class="flex flex-col">
                            <span class="font-semibold flex justify-between text-gray-600 text-sm" :style="hasPermission('List Comment') ? 'filter: blur(0px);' : 'filter: blur(3px);'">{{val.name}}<span class="text-[9px] text-gray-600 text-center">{{formatDate(val.created_at)}}</span></span>
                            <span class="bg-gray-300 p-1 text-sm rounded " :style="formReportEdit.department == $page.props.auth.user.department && hasPermission('List Comment') ? 'filter: blur(0px);' : 'filter: blur(3px);'" >{{val.comment}}</span>
                        </div>
                    </div>
                </div>
                
            </template>
            <template #content-data>
                Add Report
            </template>
            <template #content-body-data>
                <Form @submit="updateReport">
                    <div class="flex gap-2 pl-2 border border-gray-300 bg-gray-200 w-full">
                        <span class="font-bold w-1/3">Deskripsi</span>
                        <span class="font-bold">Input</span>
                    </div>
                    <div class="flex p-2 w-full items-center border border-gray-300">
                        <span class="font-bold w-1/2">Title</span>
                        <TextInput type="text" v-model="formReportEdit.title" name="Title" placeholderText="Jhon Doe" class="w-full" disabled="disabled" :message="formReportEdit.errors.title" />
                    </div>
                    <div class="flex p-2 w-full items-center border border-gray-300">
                        <span class="font-bold w-1/2">No Document</span>
                        <TextInput type="text" v-model="formReportEdit.no_document" name="no document" placeholderText="Jhon Doe" class="w-full" :message="formReportEdit.errors.no_document"/>
                    </div>
                    <div class="flex p-2 w-full items-center border border-gray-300">
                        <span class="font-bold w-1/2">Report Date <span class="text-red-500">*</span></span>
                        <FloatLabel variant="on" class="w-full">
                            <DatePicker v-model="formReportEdit.date_report" inputId="on_label" showIcon iconDisplay="input" class="w-full"/>
                            <label for="on_label">Report Date</label>
                        </FloatLabel>
                    </div>
                    <div class="flex p-2 w-full items-center border border-gray-300 bg-gray-200">
                        <span class="font-bold w-1/2">Description Document</span>
                        <TextArea  v-model="formReportEdit.deskripsi" type="text" name="Deskripsi"  class="w-full" :message="formReportEdit.errors.deskripsi" />
                    </div>
                    <div class="flex p-2 w-full items-center border border-gray-300">
                        <span class="font-bold w-1/2">Select Department</span>
                        <Select :options="dept" v-model="formReportEdit.department" optionLabel="name" optionValue="name" placeholder="Select Department" class="w-full" :message="formReportEdit.errors.department" fluid/>
                    </div>
                    <div class="flex p-2 w-full items-center border border-gray-300 bg-gray-200">
                        <span class="font-bold w-1/2">Uri</span>
                        <div class="flex flex-col w-full">
                            <TextInput type="text" name="https://example.net/" v-model="formReportEdit.uri" :message="formReportEdit.errors.uri" />
                            <span class="pl-2 text-orange-800 text-xs">Wajib menyetarakan url dalam bentuk docs/pdf/xsls.</span>
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-2 p-2">
                        <Button label="Checked" severity="warn" @click="checkedReport" :disabled="page.props.report.checked_by !== null" />
                        <Button label="Verified" severity="info" @click="verifiedReport" :disabled="page.props.report.verified_by !== null"/>
                        <Button label="Update" severity="success" type="submit"/>
                        <Button label="Clear" severity="clear" @click="clearInput"/>
                    </div>
                </Form>
            </template>
        </ContentHalf>
    </Transition>
</template>