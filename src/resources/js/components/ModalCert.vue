<script setup>
import { ref } from 'vue';
import Dialog from 'primevue/dialog';
import Divider from 'primevue/divider';
import dayjs from "dayjs"
import QrcodeVue from 'qrcode.vue'

const props = defineProps({
    report : Object,
})


const visible = ref(false);

const formatDate = (date) => {
    return dayjs(date).format("DD-MM-YYYY");
};
</script>

<template>
    <div class="card flex justify-center">
        <button  @click="visible = true" >
            <slot name="cert-modal"/>
        </button>
        <Dialog v-model:visible="visible" modal header="E-report" :style="{ width: '50vw' }" :breakpoints="{ '1199px': '75vw', '575px': '90vw' }">
            <div class="flex flex-col justify-center">
                <h1 class="m-auto font-semibold">
                    BUKTI PEMBUATAN LAPORAN DIGITAL (e-REPORT)
                </h1>
                <h1 class="m-auto font-semibold">
                    PT. CHEN WOO FISHERY
                </h1>
                <Divider />
                <p class="m-auto font-semibold mb-8">No. Document : {{ props.report.no_document }}</p>
                <p class="font-semibold mb-4">Telah menyatakan bahwa dokumen digital dibawah ini :</p>
                <div class="flex gap-2 items-center mb-2">
                    <p class="font-semibold w-1/3">Judul Dokumen </p>
                    <span class="font-semibold w-full ">: {{ props.report.title }}</span>
                </div>
                <div class="flex gap-2 items-center mb-2">
                    <p class="font-semibold w-1/3">Nama </p>
                    <span class="font-semibold w-full ">: {{ props.report.name }}</span>
                </div>
                <div class="flex gap-2 items-center mb-2">
                    <p class="font-semibold w-1/3">Alamat Pabrik </p>
                    <span class="font-semibold w-full ">: Jl. Kima 4 Kav. K-9 Blok B.2, Kawasan
                        Industri Makassar Daya Biringkanaya Kota
                        Makassar Sulawesi Selatan</span>
                </div>
                <div class="flex gap-2 items-center mb-2">
                    <p class="font-semibold w-1/3">Deskripsi </p>
                    <span class="font-semibold w-full ">: {{ props.report.deskripsi }}</span>
                </div>
                <div class="flex gap-2 items-center mb-5">
                    <p class="font-semibold w-1/3">Tanggal Dibuat Laporan </p>
                    <span class="font-semibold w-full ">: {{ formatDate(props.report.date_report) }}</span>
                </div>
                <p class="font-semibold">Telah menyampaikan laporan Digital ini kepada PT Chen
                    Woo Fishery bertanggung jawab secara hukum apabila laporan industri tahap produksi yang
                    disampaikan tidak sesuai dengan kondisi yang sebenarnya.</p>
                
                <p class="font-semibold mt-8">Keaslian isi bukti penyampaian laporan industri tahap produksi ini dapat diperiksa dengan
                    memindai (scan) gambar QR Code berikut :</p>
                <div class="flex mt-20 ">
                    <p class="font-semibold text-center w-1/3">Dibuat Oleh : </p>
                    <span class="font-semibold w-1/3 text-center ">Di periksa oleh :</span>
                    <span class="font-semibold w-1/3  text-center">Diverifikasi Oleh :</span>
                </div>
                <div class="flex mt-5 ">
                    <p class="font-semibold w-1/3"><QrcodeVue class="m-auto" :value="'Dibuat oleh : ' + props.report.name + '\n pada tanggal ' + formatDate(props.report.date_report)" :size="80" level="H" /></p>
                    <p class="font-semibold w-1/3" v-if="props.report.checked_by !== null"><QrcodeVue class="m-auto" :value="'Diperiksa oleh : ' + props.report.checked_by + '\n pada tanggal ' + formatDate(props.report.date_checked)" :size="80" level="H" /></p>
                    <p class="font-semibold w-1/3" v-if="props.report.verified_by !== null"><QrcodeVue class="m-auto" :value="'Disetujui oleh : ' + props.report.verified_by + '\n pada tanggal ' + formatDate(props.report.date_verified)" :size="80" level="H" /></p>
                </div>
            </div>
        </Dialog>
    </div>
</template>