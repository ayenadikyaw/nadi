<script setup>
import { ref } from "vue";
import { Link, usePage } from "@inertiajs/vue3";
import { onMounted } from "vue";
onMounted(() => {
    console.log("Dashboard mounted");
    const page = usePage();
    console.log(page.props, "page props in admin dashboard");
    console.log(page.props.layout, "layout in admin dashboard");
});
</script>

<template>
    <!-- Dashboard Content -->
    <main class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Stats Cards -->
            <div
                class="bg-secondary border border-primary/30 rounded-lg p-6 hover:border-primary transition-colors"
            >
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold">Total Projects</h3>
                    <i class="pi pi-code text-primary"></i>
                </div>
                <p class="text-3xl font-bold mt-2">12</p>
            </div>

            <div
                class="bg-secondary border border-primary/30 rounded-lg p-6 hover:border-primary transition-colors"
            >
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold">Pending Todos</h3>
                    <i class="pi pi-paperclip text-primary"></i>
                </div>
                <p class="text-3xl font-bold mt-2">5</p>
            </div>

            <div
                class="bg-secondary border border-primary/30 rounded-lg p-6 hover:border-primary transition-colors"
            >
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold">Blog Posts</h3>
                    <i class="pi pi-file text-primary"></i>
                </div>
                <p class="text-3xl font-bold mt-2">8</p>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="mt-8">
            <h2 class="text-xl font-bold mb-4">
                <span class="text-primary">#</span>Recent Activity
            </h2>
            <div class="bg-secondary border border-primary/30 rounded-lg">
                <div class="p-4 border-b border-primary/30">
                    <div class="flex items-center space-x-3">
                        <i class="pi pi-code text-primary"></i>
                        <div>
                            <p class="font-semibold">New Project Added</p>
                            <p class="text-sm text-gray-400">2 hours ago</p>
                        </div>
                    </div>
                </div>
                <div class="p-4 border-b border-primary/30">
                    <div class="flex items-center space-x-3">
                        <i class="pi pi-check text-primary"></i>
                        <div>
                            <p class="font-semibold">Todo Completed</p>
                            <p class="text-sm text-gray-400">5 hours ago</p>
                        </div>
                    </div>
                </div>
                <div class="p-4">
                    <div class="flex items-center space-x-3">
                        <i class="pi pi-headphones text-primary"></i>
                        <div>
                            <p class="font-semibold">New Music Added</p>
                            <p class="text-sm text-gray-400">1 day ago</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>

<style scoped>
.pi {
    width: 1.25rem;
    text-align: center;
}
</style>
