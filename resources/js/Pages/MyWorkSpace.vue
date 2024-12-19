<script setup>
import DigitalClock from '../Components/DigitalClock.vue';
import WeatherApp from '../Components/WeatherApp.vue';
import Calendar from '../Components/Calendar.vue';
import MusicPlayer from '../Components/MusicPlayer.vue';
import StickNotes from '../Components/StickNotes.vue';
import TodoList from '../Components/TodoList.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
      <Head :title="`My Space`" />
    <div class="text-white font-primary mt-12 min-h-screen">
        <!-- Blogs List -->
        <h1 class="text-2xl font-bold">
            <span class="text-primary">/</span>my-workspace
        </h1>
        <!-- -->
        <div class="grid grid-cols-1 sm:grid-cols-2 mt-12 gap-6">
       
            <div class="col-span-1 border border-gray-500 rounded-lg p-4 hover:border-primary">
                <DigitalClock />
            </div>
            <div class="col-span-1 border border-gray-500 rounded-lg p-4 hover:border-primary">
                <WeatherApp />
            </div>
        </div>
        <div class="mt-12">
            <div class="relative">
                <div class="absolute -left-4 -top-4 w-8 h-8 border-2 border-primary/30"></div>
                <div class="absolute -right-4 -bottom-4 w-8 h-8 border-2 border-primary/30"></div>
                <div class="absolute -left-2 -top-2 w-4 h-4 bg-primary/20"></div>
                <div class="absolute -right-2 -bottom-2 w-4 h-4 bg-primary/20"></div>
                <div class="absolute -left-1 -top-1 w-2 h-2 rounded-full bg-primary"></div>
                <div class="absolute -right-1 -bottom-1 w-2 h-2 rounded-full bg-primary"></div>
            </div>
        </div>
        <!-- Music Player and Calendar -->
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mt-12 ">
            <div class="col-span-1 border border-gray-500 rounded-lg p-4 hover:border-primary">
               <MusicPlayer />
            </div>
            <div class="col-span-2 border border-gray-500 rounded-lg p-4 hover:border-primary">
                <Calendar />
                <button class="bg-primary text-white px-4 py-2 rounded-lg mt-4 hover:bg-primary/80 float-right">
                    <span class="text-sm"> + Add Event</span>
                </button>
            </div>
        </div>
        <!-- Notes -->
        <div class="mt-12">
            <h1 class="text-2xl font-bold">
                <span class="text-primary">/</span>my-notes ✨
            </h1>
            <StickNotes />
        </div>
        <!-- To Do List -->
        <div class="mt-12">
            <h1 class="text-2xl font-bold mb-6">
                <span class="text-primary">/</span>my-todos
                <span class="animate-pulse inline-block ml-2">⚡</span>
            </h1>
            <TodoList />
        </div>

    </div>
</template>

<style scoped>
:deep(.sx__date-input){
   @apply bg-primary/20;
}
</style>
