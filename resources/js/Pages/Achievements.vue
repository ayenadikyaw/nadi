<script setup>
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";

const currentSlide = ref(0);
const certificates = [
    {
        title: "Web Development Certificate",
        image: "Profile.jpeg",
        date: "2023"
    },
    {
        title: "JavaScript Advanced",
        image: "Profile.jpeg", 
        date: "2023"
    },
    {
        title: "Vue.js Mastery",
        image: "Profile.jpeg",
        date: "2023"
    }
];

const nextSlide = () => {
    currentSlide.value = (currentSlide.value + 1) % certificates.length;
};

const prevSlide = () => {
    currentSlide.value = currentSlide.value === 0 ? certificates.length - 1 : currentSlide.value - 1;
};
</script>

<template>
    <Head :title="`My Achievements`" />
    <div class="text-white font-primary mt-12">
        <!-- Achievements List -->
        <h1 class="text-2xl font-bold">
            <span class="text-primary">/</span>achievements
        </h1>
        <h3 class="mb-8">My accomplishments and milestones</h3>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
            <div class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors">
                <h3 class="text-xl text-primary mb-2"># Technical Skills</h3>
                <ul class="list-disc list-inside text-gray-300">
                    <li>Full Stack Development</li>
                    <li>Frontend Frameworks (Vue.js, React)</li>
                    <li>Backend Development (Laravel, Node.js)</li>
                    <li>Database Management</li>
                </ul>
            </div>

            <div class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors">
                <h3 class="text-xl text-primary mb-2"># Awards</h3>
                <ul class="list-disc list-inside text-gray-300">
                    <li>Best Developer Award 2023</li>
                    <li>Hackathon Winner</li>
                    <li>Open Source Contributor</li>
                </ul>
            </div>
        </div>

        <!-- Certificates Slideshow -->
        <h1 class="text-2xl font-bold mt-12">
            <span class="text-primary">#</span>certificates
        </h1>
        
        <div class="relative mt-6 border border-gray-500 p-4 rounded-lg">
            <div class="flex items-center justify-between">
                <button @click="prevSlide" class="text-primary hover:text-white px-4 py-2">←</button>
                
                <div class="flex-1 text-center">
                    <img :src="`/images/${certificates[currentSlide].image}`" :alt="certificates[currentSlide].title" 
                         class="mx-auto h-64 object-contain mb-4">
                    <h3 class="text-xl text-primary">{{ certificates[currentSlide].title }}</h3>
                    <p class="text-gray-400">{{ certificates[currentSlide].date }}</p>
                </div>
                
                <button @click="nextSlide" class="text-primary hover:text-white px-4 py-2">→</button>
            </div>
        </div>

        <!-- Project Experience -->
        <h1 class="text-2xl font-bold mt-12">
            <span class="text-primary">#</span>internship-experience
        </h1>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-6">
            <div class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300">
                <img src="../../../public/images/Profile.jpeg" alt="Project 1" class="w-full h-48 object-cover rounded">
                <p class="text-lg text-primary mt-2">E-Commerce Platform</p>
                <p class="text-sm text-gray-400">Led frontend development for a major e-commerce platform</p>
            </div>

            <div class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300">
                <img src="../../../public/images/Profile.jpeg" alt="Project 2" class="w-full h-48 object-cover rounded">
                <p class="text-lg text-primary mt-2">Social Media App</p>
                <p class="text-sm text-gray-400">Developed full-stack social media application</p>
            </div>

            <div class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300">
                <img src="../../../public/images/Profile.jpeg" alt="Project 3" class="w-full h-48 object-cover rounded">
                <p class="text-lg text-primary mt-2">Portfolio Website</p>
                <p class="text-sm text-gray-400">Designed and developed personal portfolio website</p>
            </div>
        </div>
    </div>
</template>
