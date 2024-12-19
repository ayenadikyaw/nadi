<script setup>

import { createCalendar, createViewMonthGrid } from '@schedule-x/calendar'
import '@schedule-x/theme-default/dist/index.css'
import { ref,onMounted } from 'vue';

const events = ref([
    {
        id: 1,
        title: 'Meeting',
        start: '2024-12-25 10:05',
        end: '2024-12-25 10:35',
    },
    {
        id: 2,
        title: 'Meeting',
        start: '2024-11-26 10:05',
        end: '2024-11-26 10:35',
    },
]);

const calendar = createCalendar({
  views: [createViewMonthGrid()],
  events: events.value,
})
 
onMounted(() => {
    calendar.render(document.getElementById('calendar'))
    calendar.setTheme('dark');
})
</script>

<template>
    <div id="calendar"></div>
</template>