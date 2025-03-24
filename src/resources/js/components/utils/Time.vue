<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue';

const currentDate = ref('');
const currentTime = ref('');

function updateDateTime() {
  const now = new Date();
  currentDate.value = now.toLocaleDateString('id-ID', {
    weekday: 'long',
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  });
  currentTime.value = now.toLocaleTimeString('id-ID', {
    hour: '2-digit',
    minute: '2-digit',
    second: '2-digit'
  });
}

onMounted(() => {
  updateDateTime();
  const timer = setInterval(updateDateTime, 1000);
  onBeforeUnmount(() => {
    clearInterval(timer);
  });
});
</script>

<template>
    <a href="#" class="text-md font-bold text-blue-900 hover:underline mr-2" >{{ currentDate }} - {{ currentTime }}</a>
</template>