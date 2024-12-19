<script setup>
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head :title="`My Projects`" />
    <!-- My Projects -->
    <div class="text-white font-primary mt-12">
        <h1 class="text-2xl font-bold">
            <span class="text-primary">/</span>my-projects
        </h1>
        <h3>List of my projects</h3>

        <h1 class="text-2xl font-bold mt-12">
            <span class="text-primary">#</span>complete-projects
        </h1>
        <!-- Projects cards-->

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <!-- Project 1-->
            <div
                class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300 ease-in-out hover:border-primary"
            >
                <img
                    src="../../../public/images/Profile.jpeg"
                    alt="Project 1"
                    class="w-full h-48 object-cover"
                />
                <div class="border-t-2 border-t-primary border-opacity-50 mt-4"></div>
                <div class="flex gap-4 flex-wrap items-center">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JS</span>
                </div>
                <div class="border-t-2 border-t-primary border-opacity-50"></div>

                <p class="text-lg text-primary mt-2">Project 1</p>
                <p class="text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quos.
                </p>
                <p class="mt-4">
                    <a
                        href="#"
                        class="px-2 py-2 border border-primary hover:bg-primary rounded-lg"
                        >Github <~></a
                    >
                </p>
            </div>
            <!-- Project 2-->
            <div
                class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300 ease-in-out hover:border-primary"
            >
                <img
                    src="../../../public/images/Profile.jpeg"
                    alt="Project 1"
                    class="w-full h-48 object-cover"
                />
                <div class="border-t-2 border-t-primary border-opacity-50 mt-4"></div>
                <div class="flex gap-4 flex-wrap items-center">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JS</span>
                </div>
                <div class="border-t-2 border-t-primary border-opacity-50"></div>

                <p class="text-lg text-primary mt-2">Project 1</p>
                <p class="text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quos.
                </p>
                <p class="mt-4">
                    <a
                        href="#"
                        class="px-2 py-2 border border-primary hover:bg-primary rounded-lg"
                        >Github <~></a
                    >
                </p>
            </div>
            <!-- Project 3-->
            <div
                class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300 ease-in-out hover:border-primary"
            >
                <img
                    src="../../../public/images/Profile.jpeg"
                    alt="Project 1"
                    class="w-full h-48 object-cover"
                />
                <div class="border-t-2 border-t-primary border-opacity-50 mt-4"></div>
                <div class="flex gap-4 flex-wrap items-center">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JS</span>
                </div>
                <div class="border-t-2 border-t-primary border-opacity-50"></div>

                <p class="text-lg text-primary mt-2">Project 1</p>
                <p class="text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quos.
                </p>
                <p class="mt-4">
                    <a
                        href="#"
                        class="px-2 py-2 border border-primary hover:bg-primary rounded-lg"
                        >Github <~></a
                    >
                </p>
            </div>
        </div>

        <!--Small Projects-->
        <h1 class="text-2xl font-bold mt-12">
            <span class="text-primary">#</span>mini-projects
        </h1>
        <!-- Small Projects cards-->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <!-- Project 1-->
            <div
                class="border border-gray-500 hover:scale-105 transition-transform duration-300 ease-in-out"
            >
                <p class="text-lg border border-gray-500 p-2 text-primary">Project 1</p>
                <p class="text-sm text-gray-400 p-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quos.
                </p>
                <div class="p-2 flex gap-4">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JS</span>
                </div>
                <p class="p-2 mb-2">
                    <a
                        href="#"
                        class="px-2 py-2 border border-primary hover:bg-primary"
                        >Github <~></a
                    >
                </p>
            </div>

            <!-- Project 2-->
            <div
                class="border border-gray-500 hover:scale-105 transition-transform duration-300 ease-in-out"
            >
                <p class="text-lg border border-gray-500 p-2 text-primary">Project 1</p>
                <p class="text-sm text-gray-400 p-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quos.
                </p>
                <div class="p-2 flex gap-4">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JS</span>
                </div>
                <p class="p-2 mb-2">
                    <a
                        href="#"
                        class="px-2 py-2 border border-primary hover:bg-primary"
                        >Github <~></a
                    >
                </p>
            </div>

            <!-- Project 3-->
            <div
                class="border border-gray-500 hover:scale-105 transition-transform duration-300 ease-in-out"
            >
                <p class="text-lg border border-gray-500 p-2 text-primary">Project 1</p>
                <p class="text-sm text-gray-400 p-2">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quos.
                </p>
                <div class="p-2 flex gap-4">
                    <span>HTML</span>
                    <span>CSS</span>
                    <span>JS</span>
                </div>
                <p class="p-2 mb-2">
                    <a
                        href="#"
                        class="px-2 py-2 border border-primary hover:bg-primary"
                        >Github <~></a
                    >
                </p>
            </div>
  
  
  
        </div>
    </div>
</template>
