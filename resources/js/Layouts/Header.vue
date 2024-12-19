<script setup>
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";

const mobileMenuOpen = ref(false);
</script>

<template>
     <div class="mt-8 flex items-center justify-between text-sm">
                <!--logo-->
                <div class="">
                    <div class="flex items-center gap-4">
                        <div class="relative">
                            <img src="../../../public/images/logo.gif" alt="logo" class="w-12 h-12 rounded-lg shadow-lg hover:scale-110 transition-transform">
                            <div class="absolute -right-2 -top-2 w-3 h-3 bg-primary/30 rounded-full animate-ping ease-in-out duration-300"></div>
                        </div>
                        <div class="flex items-center">
                            <span class="font-bold text-2xl hover:scale-110 transition-transform hover:-rotate-6">N</span>
                            <span class="text-primary font-bold text-2xl hover:scale-110 transition-transform hover:rotate-6 ml-1">A</span>
                            <span class="text-primary font-bold text-2xl hover:scale-110 transition-transform hover:-rotate-6 ml-1">D</span>
                            <span class="text-primary font-bold text-2xl hover:scale-110 transition-transform hover:rotate-6 ml-1">I</span>
                        </div>
                    </div>
                </div>

                <!--nav-->
                <nav class="lg:flex hidden items-center gap-8">
                    <Link :href="route('Index')" class="hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'Index'}"
                        ><span class="text-primary">#</span>Home</Link
                    >
                    <Link
                        :href="route('About')"
                        class="hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'About'}"
                        ><span class="text-primary">#</span>About</Link
                    >
                    <Link
                        :href="route('Projects')"
                        class="hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'Projects'}"
                        ><span class="text-primary">#</span>Projects</Link
                    >
                    <Link
                        :href="route('Achievements')"
                        class="hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'Achievements'}"
                        ><span class="text-primary">#</span>Achievements</Link
                    >
                    <Link
                        :href="route('Blog')"
                        class="hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'Blog'}"
                        ><span class="text-primary">#</span>Blog</Link
                    >
                    <Link
                        :href="route('MyWorkSpace')"
                        class="hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'MyWorkSpace'}"
                        ><span class="text-primary">#</span>My Work Space</Link
                    >
                 
                 
<!--                   
                    <div class="flex items-center gap-2">
                        <select
                            class="bg-background border border-primary text-sm p-1 rounded focus:outline-none hover:text-primary transition-colors cursor-pointer"
                        >
                            <option value="en">EN</option>
                            <option value="es">ES</option>
                            <option value="fr">FR</option>
                        </select>
                    </div> -->
                </nav>

                <!-- Mobile menu button -->
                <div class="lg:hidden flex justify-end">
                    <button
                        @click="mobileMenuOpen = !mobileMenuOpen"
                        class="text-gray-500 hover:text-primary transition-colors z-auto"
                    >
                        <!-- Hamburger icon when menu closed -->
                        <svg
                            v-if="!mobileMenuOpen"
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"
                            />
                        </svg>
                        <!-- X icon when menu open -->
                        <svg
                            v-else
                            class="h-6 w-6"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                    </button>
                </div>
                <!-- Mobile menu -->
                <div
                    v-show="mobileMenuOpen"
                    class="absolute top-16 right-0 bg-background border-t border-gray-500 py-2 z-10"
                >
                    <a
                        :href="route('Index')"
                        class="block px-4 py-2 hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'Index'}"
                    >
                        <span class="text-primary">#</span>Home
                    </a>
                    <a
                        :href="route('About')"
                        class="block px-4 py-2 hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'About'}"
                    >
                        <span class="text-primary">#</span>About
                    </a>
                    <a
                        :href="route('Projects')"
                        class="block px-4 py-2 hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'Projects'}"
                    >
                        <span class="text-primary">#</span>Projects
                    </a>
                    <a
                        :href="route('Achievements')"
                        class="block px-4 py-2 hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'Achievements'}"
                    >
                        <span class="text-primary">#</span>Achievements
                    </a>
                    <a
                        :href="route('Blog')"
                        class="block px-4 py-2 hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'Blog'}"
                    >
                        <span class="text-primary">#</span>Blogs
                    </a>
                    <a
                        :href="route('MyWorkSpace')"
                        class="block px-4 py-2 hover:text-primary transition-colors" :class="{'text-primary': $page.component === 'MyWorkSpace'}"
                    >
                        <span class="text-primary">#</span>My Work Space
                    </a>
                    <!-- <div class="px-4 py-2">
                        <select
                            class="bg-background border border-primary text-sm p-1 rounded focus:outline-none hover:text-primary transition-colors cursor-pointer"
                        >
                            <option value="en">EN</option>
                            <option value="es">ES</option>
                            <option value="fr">FR</option>
                        </select>
                    </div> -->
                </div>
            </div>
</template>