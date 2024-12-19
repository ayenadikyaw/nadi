<script setup>
import { Head } from "@inertiajs/vue3";
import { onMounted } from "vue";
import moment from "moment";

const DEFAULT_IMG = '../../../public/images/Profile.jpeg';

const props = defineProps({
    blog: Object
});
</script>

<template>
    <Head :title="props.blog.title" />
    <div class="text-white font-primary mt-12 min-h-screen max-w-5xl mx-auto px-4">
        <!-- Blog Header -->
        <div class="space-y-6 mb-12">
            <div class="flex items-center space-x-4 text-sm">
                <span class="text-primary">{{ props.blog.category }}</span>
                <span class="text-gray-400">•</span>
                <span class="text-gray-400">{{ moment(props.blog.created_at).format('MMMM D, YYYY') }}</span>
            </div>
            
            <h1 class="text-4xl font-bold leading-tight">
                {{ props.blog.title }}
            </h1>
            
            <p class="text-xl text-gray-400">
                {{ props.blog.subtitle }}
            </p>
        </div>

        <!-- Featured Image -->
        <div class="relative h-[400px] w-full mb-12">
            <img 
                :src="props.blog.image || DEFAULT_IMG" 
                :alt="props.blog.title"
                class="w-full h-full object-cover rounded-lg shadow-lg shadow-primary/20"
            >
        </div>

        <!-- Blog Content -->
        <div class="prose prose-lg prose-invert max-w-none">
            <!-- Using v-html for rendered content, assuming content is sanitized on the backend -->
            <div v-html="props.blog.content"></div>
        </div>

        <!-- Blog Footer -->
        <div class="mt-16 pt-8 border-t border-gray-800">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-gray-400">Posted from</p>
                    <p class="text-primary">{{ props.blog.location }}</p>
                </div>
                <div class="flex space-x-4">
                    <!-- Social Share Buttons -->
                    <button class="p-2 rounded-full border border-gray-700 hover:border-primary hover:text-primary transition-colors">
                        <i class="pi pi-twitter text-lg"></i>
                    </button>
                    <button class="p-2 rounded-full border border-gray-700 hover:border-primary hover:text-primary transition-colors">
                        <i class="pi pi-facebook text-lg"></i>
                    </button>
                    <button class="p-2 rounded-full border border-gray-700 hover:border-primary hover:text-primary transition-colors">
                        <i class="pi pi-linkedin text-lg"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Navigation -->
        <div class="mt-12 mb-20">
            <div class="flex justify-between">
                <button class="group flex items-center space-x-2 text-gray-400 hover:text-primary transition-colors">
                    <i class="pi pi-arrow-left"></i>
                    <span>Previous Post</span>
                </button>
                <button class="group flex items-center space-x-2 text-gray-400 hover:text-primary transition-colors">
                    <span>Next Post</span>
                    <i class="pi pi-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>
</template>
