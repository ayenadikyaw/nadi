<script setup>
import { ref } from "vue";
import { Link } from "@inertiajs/vue3";
import { usePage } from "@inertiajs/vue3";

const page = usePage();
const showDropdown = ref(false);

const isSidebarOpen = ref(true);

const toggleSidebar = () => {
    isSidebarOpen.value = !isSidebarOpen.value;
};

const menuItems = [
    { name: "Dashboard", icon: "chart-pie", route: "admin.dashboard" },
    { name: "Projects", icon: "code", route: "admin.projects" },
    { name: "Todos", icon: "check-circle", route: "admin.todos" },
    { name: "Blogs", icon: "file", route: "admin.blogs.index" },
    { name: "Notes", icon: "ticket", route: "admin.notes" },
    { name: "Music", icon: "headphones", route: "admin.music" },
];
</script>

<template>
    <div class="flex h-screen bg-background bg-opacity-95 text-primary">
        <!-- Sidebar -->
        <div
            :class="[
                'transition-all duration-300 ease-in-out bg-background  border-r border-primary/30 text-primary',
                isSidebarOpen ? 'w-64' : 'w-20',
            ]"
        >
            <!-- Sidebar Header -->
            <div
                class="flex items-center justify-between p-4 border-b border-primary/30"
            >
                <div class="flex items-center space-x-2" v-if="isSidebarOpen">
                    <span class="text-xl font-bold">Admin Panel</span>
                </div>
                <button
                    @click="toggleSidebar"
                    class="p-2 rounded-lg hover:bg-primary/20 transition-colors"
                >
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6"
                        :class="{ 'rotate-180': !isSidebarOpen }"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M11 19l-7-7 7-7m8 14l-7-7 7-7"
                        />
                    </svg>
                </button>
            </div>

            <!-- Sidebar Menu -->
            <nav class="p-4 space-y-2 text-white">
                <Link
                    v-for="item in menuItems"
                    :key="item.name"
                    :href="route(item.route)"
                    class="flex items-center space-x-2 p-2 rounded-lg hover:bg-primary/20 transition-colors"
                    :class="{ 'justify-center': !isSidebarOpen }"
                >
                    <i :class="['pi pi-' + item.icon]" class="text-primary mr-2"></i>
                    <span v-if="isSidebarOpen">{{ item.name }}</span>
                </Link>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-x-hidden overflow-y-auto text-white">
            <!-- Header -->
            <header class="bg-secondary border-b border-primary/30 p-4">
                <div class="flex items-center justify-between">
                    <h1 class="text-2xl font-bold">
                        <span class="text-primary">#</span>Dashboard
                    </h1>
                    <div class="flex items-center space-x-4">
                        <button
                            class="p-2 rounded-lg hover:bg-primary/20 transition-colors"
                        >
                            <i class="pi pi-bell text-primary"></i> 
                        </button>
                        <button
                            @click="showDropdown = !showDropdown"
                            class="p-2 rounded-lg hover:bg-primary/20 transition-colors"
                        >
                            {{ page.props.auth.user.name }} <i class="ml-2 pi pi-user text-primary"></i>
                        </button>
                    </div>
                </div>
            </header>
            <!-- Admin Dropdown -->
            <div
                v-show="showDropdown"
                class="absolute right-4 mt-2 w-48 bg-secondary border border-primary/30 rounded-lg shadow-lg py-1"
            >
                <Link
                    :href="route('logout')"
                    method="post"
                    as="button"
                    class="w-full text-left px-4 py-2 bg-background hover:bg-primary/20 transition-colors"
                >
                    <i class="pi pi-sign-out mr-2"></i>
                    Logout
                </Link>
            </div>
            <slot />
        </div>
    </div>
</template>

<style scoped>
.fas {
    width: 1.25rem;
    text-align: center;
}
</style>
