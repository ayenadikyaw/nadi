<script setup>
import { Head } from "@inertiajs/vue3";
</script>

<template>
    <Head :title="`About Me`" />
    <!-- About Me -->
    <div class="text-white font-primary mt-12">
        <h1 class="text-2xl font-bold">
            <span class="text-primary">/</span>about-me
        </h1>
        <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <p class="text-white mt-4">
                    Hello I'm Nadi,
                    <span class="text-primary">a software engineer</span>
                    with a Master’s in Software Engineering and a Bachelor’s in
                    Information Technology.I’m passionate about coding and
                    creating innovative solutions.
                </p>
                <p class="text-white mt-8">
                    My experience spans roles as a
                    <span class="text-primary">Radar Engineer</span> at the
                    Department of Meteorology and Hydrology, where I also served
                    as a team leader, and as a
                    <span class="text-primary">Bank Staff</span> early in my
                    career. Currently, I teach ICT and coding to primary
                    students at an international school, with experience in
                    Python programming and web design.
                </p>
                <p class="text-white mt-4">
                    I'm a
                    <span class="text-primary">quick learner</span> and always
                    eager to take on new challenges.I’m now focused on
                    transitioning into a
                    <span class="text-primary">Full Stack Developer</span>
                    role, eager to bring my skills and passion for software
                    development to dynamic teams. Let’s connect!
                </p>
            </div>
            <div>
                <div class="relative flex justify-center items-center">
                    <img
                        src="../../../public/images/Profile1.jpeg"
                        alt="Profile"
                        class="relative h-96 w-96 object-cover rounded-lg"
                    />

                    <!-- Top left overlapped squares -->
                    <div class="absolute top-0 left-0">
                        <div
                            class="w-16 h-16 border border-gray-500 animate-pulse"
                        ></div>
                        <div
                            class="absolute top-8 left-8 w-12 h-12 border border-gray-500"
                        ></div>
                    </div>
                    <!-- Bottom right overlapped squares -->
                    <div class="absolute bottom-0 right-0">
                        <div
                            class="w-16 h-16 border border-primary animate-pulse"
                        ></div>
                        <div
                            class="absolute bottom-8 right-8 w-12 h-12 border border-primary"
                        ></div>
                    </div>
                    <!-- Dots pattern -->
                    <div class="absolute top-8 right-12 grid grid-cols-4 gap-2">
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                    </div>
                    <!-- Dots pattern -->
                    <div
                        class="absolute bottom-8 left-12 grid grid-cols-4 gap-2"
                    >
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                        <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Skills -->
    <div class="mt-12">
        <h1 class="text-2xl font-bold">
            <span class="text-primary">#</span>my-skills
        </h1>
        <div class="mt-8 flex gap-8 flex-wrap items-center justify-center">
            <!-- Frontend Skills -->
            <div
                class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors"
            >
                <p class="text-primary mb-2">Frontend</p>
                <div class="flex flex-col flex-wrap gap-2">
                    <p class="px-2 py-1 text-sm border border-gray-500 rounded">
                        Vue.js
                    </p>
                    <p class="px-2 py-1 text-sm border border-gray-500 rounded">
                        React
                    </p>
                    <p class="px-2 py-1 text-sm border border-gray-500 rounded">
                        TailwindCSS
                    </p>
                    <p class="px-2 py-1 text-sm border border-gray-500 rounded">
                        JavaScript
                    </p>
                </div>
            </div>

            <!-- Backend Skills -->
            <div
                class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors"
            >
                <p class="text-primary mb-2">Backend</p>
                <div class="flex flex-col flex-wrap gap-2">
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >Laravel</p
                    >
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >Node.js</p
                    >
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >MySQL</p
                    >
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >PHP</p
                    >
                </div>
            </div>

            <!-- Tools -->
            <div
                class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors"
            >
                <p class="text-primary mb-2">Tools</p>
                <div class="flex flex-col flex-wrap gap-2">
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >Git</p
                    >
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >Docker</p
                    >
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >VS Code</p
                    >
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >Figma</p
                    >
                </div>
            </div>

            <!-- Other Skills -->
            <div
                class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors"
            >
                <p class="text-primary mb-2">Other</p>
                <div class="flex flex-col flex-wrap gap-2">
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >UI/UX</p
                    >
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >Testing</p
                    >
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >Data Analysis</p
                    >
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >Power BI</p
                    >
                </div>
            </div>
            <!-- Languages -->
            <div
                class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors"
            >
                <p class="text-primary mb-2">Languages</p>
                <div class="flex flex-col flex-wrap gap-2">
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >English (Fluent)</p
                    >
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >Japanese (N3)</p
                    >
                    <p
                        class="px-2 py-1 text-sm border border-gray-500 rounded"
                        >Chinese (Basic)</p
                    >
                </div>
            </div>
        </div>
    </div>
    <!-- My Fun Facts -->
    <div class="mt-12">
        <h1 class="text-2xl font-bold">
            <span class="text-primary">#</span>my-fun-facts
        </h1>
        <div class="mt-8 flex flex-wrap gap-4">
            <div class="border border-gray-500 p-4 rounded-lg">
                <p class="text-white">
                    I'm a big fan of
                    <span class="text-primary">Mobile Games</span> and I love to
                    play them.
                </p>
            </div>
            <div class="border border-gray-500 p-4 rounded-lg">
                <p class="text-white">
                    I fond of
                    <span class="text-primary">Drawing</span> and I love to draw
                    whenever I have time.
                </p>
            </div>
            <div class="border border-gray-500 p-4 rounded-lg">
                <p class="text-white">
                    I love to listen to
                    <span class="text-primary">Music</span> and I love to play
                    the guitar.
                </p>
            </div>
        </div>
    </div>
</template>
