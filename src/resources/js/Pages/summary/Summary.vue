<script setup>
import Header from '../../Layouts/Header.vue';
import { ref, onMounted,computed ,onUnmounted, watch } from 'vue'
import {usePage, router} from '@inertiajs/vue3'
import Content from '../../components/Content.vue';
import Chart from 'primevue/chart';
import DatePicker from 'primevue/datepicker';
import FloatLabel from 'primevue/floatlabel';
import {debounce} from 'lodash';
import { formatDateToMakassar } from '../../components/composables/formatDatePicker';
import PieChart from '../../components/PieChart.vue';


const page  = usePage(); // Get data from Laravel

const reports = computed(() => page.props.reports);

const ReportsPie = (reports)

const month = ref('')

watch(
    month,
    debounce((q) => {
        router.get("/summary", { month: formatDateToMakassar(q) }, {
            preserveState: true,  // Keep component state (avoid reload)
            preserveScroll: true, // Keep scroll position
            only: ["reports"]       // Only update 'users' data (prevents full-page reload)
        });
    }, 500),
    { deep: true }
);


// Map reports hasil search jadi grouped data
const MapData = computed(() => {
  if (!reports.value) return [];

  const grouped = reports.value.reduce((acc, item) => {
    if (!acc[item.department]) {
      acc[item.department] = 0;
    }
    acc[item.department] += 1; // kalau mau jumlahkan "count", ganti ke += item.count
    return acc;
  }, {});

  return Object.entries(grouped).map(([department, total]) => ({
    label: department,
    value: total,
  }));
});




const show = ref(false)

onMounted(() => {
 show.value = false
})

onUnmounted(() => {
  show.value = true
})

// const chartData = ref();
const chartData = computed(() => ({
  labels: MapData.value.map((item) => item.label),
  datasets: [
    {
      label: 'Reports',
      data: MapData.value.map((item) => item.value),
      backgroundColor: [
        'rgba(249, 115, 22, 0.2)',
        'rgba(6, 182, 212, 0.2)',
        'rgba(107, 114, 128, 0.2)',
        'rgba(139, 92, 246, 0.2)',
      ],
      borderColor: [
        'rgb(249, 115, 22)',
        'rgb(6, 182, 212)',
        'rgb(107, 114, 128)',
        'rgb(139, 92, 246)',
      ],
      borderWidth: 1,
    },
  ],
}));
const chartOptions = ref();

const setChartOptions = () => {
    const documentStyle = getComputedStyle(document.documentElement);
    const textColor = documentStyle.getPropertyValue('--p-text-color');
    const textColorSecondary = documentStyle.getPropertyValue('--p-text-muted-color');
    const surfaceBorder = documentStyle.getPropertyValue('--p-content-border-color');

    return {
        plugins: {
            legend: {
                labels: {
                    color: textColor
                }
            }
        },
        scales: {
            x: {
                ticks: {
                    color: textColorSecondary
                },
                grid: {
                    color: surfaceBorder
                }
            },
            y: {
                beginAtZero: true,
                ticks: {
                    color: textColorSecondary
                },
                grid: {
                    color: surfaceBorder
                }
            }
        }
    };
}

</script>

<template>
    <Header/>
    <Head title="Summary"/>
    <!-- start Content Report -->
  <Transition name="slide-fade">
    <div v-if="!show">
    <Content>
        <template #content-title>
            Summary
        </template>
        <template #content-body>
          <div class="card flex justify-end">
            <FloatLabel variant="on"> 
              <DatePicker v-model="month" view="month" dateFormat="mm/yy" class="p-2"  />
              <label for="Month">Month</label>
            </FloatLabel>
          </div>
           <div class="card mb-4">
               <Chart type="bar" :data="chartData" :options="chartOptions" />
          </div>
          <PieChart :ReportsPie="ReportsPie"/>
        </template>
    </Content>
    </div>
    </Transition>
</template>

<style scoped>
.chart-container {
background: #fff;
border: 1px solid #e5e7eb;
border-radius: 1rem;
padding: 1rem;
box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
}
</style>