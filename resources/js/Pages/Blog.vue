<script setup>
import { Head } from "@inertiajs/vue3";
import { onMounted } from "vue";
import moment from "moment";
import { router } from "@inertiajs/vue3";

const DEFAULT_IMG='../../../public/images/Profile.jpeg';
const props = defineProps({
  blogs: Array
});

const goToBlogDetail = (id) => {
    router.visit(route('BlogDetail', id));
}

onMounted(() => {
    props.blogs.forEach(blog => {
        // Strip HTML tags from content if present
        blog.content = blog.content.replace(/<[^>]*>/g, '').substring(0, 100).concat('...');
    })
})
</script>

<template>
  <Head :title="`Blog`" />
    <div class="text-white font-primary mt-12 min-h-screen">
        <!-- Blogs List -->
        <h1 class="text-2xl font-bold">
            <span class="text-primary">/</span>blogs
        </h1>
        <h3 class="mb-8">Stay Updated with Our Latest Blog Posts</h3>
        <!-- Blogs Cards -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-12 -300 ease-in-out">
            <!--Blog 1-->
            <div v-for="blog in props.blogs" class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors hover:scale-105">
                <h3 class="text-md font-bold text-primary mb-2">{{ blog.title }}</h3>
                <img :src="blog.image?blog.image:DEFAULT_IMG" alt="Blog" class="w-full h-48 object-cover">
                <h3 class="text-white">{{blog.subtitle }}</h3>
                <p class="text-gray-400">{{ blog.content }}</p>
                <div class="flex justify-between mt-4 md:flex-row flex-col">
                   <span class="text-primary text-sm">{{ blog.category}}</span>
                   <span class="text-primary/50 text-sm">{{ moment(blog.created_at).fromNow() }}</span>
                </div>
                <button @click="goToBlogDetail(blog.id)" class="border border-primary py-2 px-2 rounded-md mt-4 hover:bg-primary hover:text-white transition-colors">
                    Read More
                </button>
            </div>

          
        </div>
        
    </div>
</template>
