<script setup>
import { ref, onMounted, watch } from 'vue';

const time = ref('');
const date = ref('');
const week = ['SUN', 'MON', 'TUE', 'WED', 'THU', 'FRI', 'SAT'];
const timerID = ref(null);
const sleepTimeValue = ref(0);

const updateTime = () => {
    const cd = new Date();
    time.value = zeroPadding(cd.getHours(), 2) + ':' + zeroPadding(cd.getMinutes(), 2) + ':' + zeroPadding(cd.getSeconds(), 2);
    date.value = zeroPadding(cd.getFullYear(), 4) + '-' + zeroPadding(cd.getMonth()+1, 2) + '-' + zeroPadding(cd.getDate(), 2) + ' ' + week[cd.getDay()];
};

const zeroPadding = (num, digit) => {
    var zero = '';
    for(var i = 0; i < digit; i++) {
        zero += '0';
    }
    return (zero + num).slice(-digit);
};

const calculateSleepTime = () => {
    const now = new Date();
    console.log(now,"now");

    const sleepTime = new Date();
    sleepTime.setHours(22, 0, 0, 0);
    const timeToSleep = sleepTime.getHours() - now.getHours();
    sleepTimeValue.value = timeToSleep;
};


onMounted(() => {
    timerID.value = setInterval(updateTime, 1000);
    updateTime();
    calculateSleepTime();
});

</script>
<template>
    <div id="clock">
    <p class="date">{{ date }}</p>
    <p class="time">{{ time }}</p>
    <p class="text">Local Time</p>
    <p class="text-gray-400 mt-4">
        {{ sleepTimeValue }} Hours Left to Sleep
    </p>
</div>
</template>

<style scoped>

#clock {
    font-family: 'Share Tech Mono', monospace;
    color: #ffffff;
    text-align: center;
    color: #daf6ff;
    text-shadow: 0 0 20px #C778DD,  0 0 20px #C778DD;
    .time {
        letter-spacing: 0.05em;
        font-size: 48px;
        padding: 5px 0; 
    }
    .date {
        letter-spacing: 0.1em;
        font-size: 24px;
    }
    .text {
        letter-spacing: 0.1em;
        font-size: 12px;
        padding: 20px 0 0;
    }
}
</style>