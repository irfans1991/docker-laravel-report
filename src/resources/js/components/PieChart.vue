<script setup>
import Chart from 'primevue/chart';
import { ref, onMounted, watch, computed } from "vue";
import {defineProps} from "vue";

const props = defineProps({
    ReportsPie: {
        type: Array,
        required: true,
        default: () => [],
    }
})

console.log(props.ReportsPie);

// if you want to react when it changes
const MapData = computed(() => {
  if (!props.ReportsPie) return [];

  const grouped = props.ReportsPie.reduce((acc, item) => {
    if (!acc[item.name]) {
      acc[item.name] = 0;
    }
    acc[item.name] += 1; // kalau mau jumlahkan "count", ganti ke += item.count
    return acc;
  }, {});

  return Object.entries(grouped).map(([name, total]) => ({
    label: name,
    value: total,
  }));
});


onMounted(() => {
    chartOptions.value = setChartOptions();
});

const chartData = ref();
const chartOptions = ref();

// 2️⃣ Use MapData for chart
const setChartData = computed(() => {
  const documentStyle = getComputedStyle(document.body);

  return {
    labels: MapData.value.map((item) => item.label),
    datasets: [
      {
        data: MapData.value.map((item) => item.value),
        backgroundColor: [
          documentStyle.getPropertyValue("--p-cyan-500"),
          documentStyle.getPropertyValue("--p-orange-500"),
          documentStyle.getPropertyValue("--p-gray-500"),
        ],
        hoverBackgroundColor: [
          documentStyle.getPropertyValue("--p-cyan-400"),
          documentStyle.getPropertyValue("--p-orange-400"),
          documentStyle.getPropertyValue("--p-gray-400"),
        ],
      },
    ],
  };
});


const setChartOptions = () => {
    const documentStyle = getComputedStyle(document.documentElement);
    const textColor = documentStyle.getPropertyValue('--p-text-color');

    return {
        plugins: {
            legend: {
                labels: {
                    usePointStyle: true,
                    color: textColor
                }
            }
        }
    };
};
</script>
<template>
    <div class="card flex justify-center">
        <Chart type="pie" :data="setChartData" :options="chartOptions" class="w-full md:w-[30rem]" />
    </div>
</template>