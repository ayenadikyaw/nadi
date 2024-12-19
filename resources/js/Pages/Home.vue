<script setup>
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";

const mobileMenuOpen = ref(false);
</script>

<template>
    <Head :title="`Home`" />
    <div class="grid grid-cols-12 text-white">
        <!--media-->
        <div class="col-span-1 bg-background">
            <div class="flex flex-col items-center">
                <div class="w-[1px] h-32 bg-gray-500"></div>
                <div class="flex flex-col gap-4 mt-4">
                    <a href="#" class="hover:text-primary transition-colors">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"
                            />
                        </svg>
                    </a>
                    <a href="#" class="hover:text-primary transition-colors">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"
                            />
                        </svg>
                    </a>
                    <a href="#" class="hover:text-primary transition-colors">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="24"
                            height="24"
                            fill="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"
                            />
                        </svg>
                    </a>
                </div>
                <!-- Dots pattern -->
                <div class="absolute top-3/4 grid grid-cols-6 gap-2 mt-8">
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
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                </div>
                <!-- Square boxes -->
                <div class="absolute top-1/2 left-0 flex flex-col gap-12 mt-8">
                    <div class="left-8 w-10 h-10 border border-gray-500"></div>
                    <div
                        class="absolute -left-4 -top-4 w-8 h-8 border border-gray-500"
                    ></div>
                    <div
                        class="absolute top-8 -left-5 w-10 h-10 border border-gray-500"
                    ></div>
                </div>
            </div>
        </div>
        <!--content-->
        <div class="col-span-10 bg-background bg-opacity-95 font-primary">
            <!--header-->
            <div class="mt-8 flex items-center justify-between text-sm">
                <!--logo-->
                <div class="flex items-center gap-1">
                    <!-- N -->
                    <div class="relative w-6 h-6 border border-primary">
                        <div
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-primary"
                        ></div>
                        <div
                            class="absolute -top-2 -left-2 w-3 h-3 border border-primary"
                        ></div>
                    </div>

                    <!-- D -->
                    <div class="relative w-6 h-6 border border-primary">
                        <div
                            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-4 h-4 border-2 border-primary rounded-r-full"
                        ></div>
                        <div
                            class="absolute -bottom-1 -right-1 w-2 h-2 bg-primary"
                        ></div>
                    </div>
                    <span class="font-bold text-xl">Nadi</span>
                </div>

                <!--nav-->
                <nav class="md:flex hidden items-center gap-8">
                    <a href="#" class="hover:text-primary transition-colors"
                        ><span class="text-primary">#</span>Home</a
                    >
                    <a href="#" class="hover:text-primary transition-colors"
                        ><span class="text-primary">#</span>About</a
                    >
                    <a href="#" class="hover:text-primary transition-colors"
                        ><span class="text-primary">#</span>Contact</a
                    >
                    <a href="#" class="hover:text-primary transition-colors"
                        ><span class="text-primary">#</span>Blog</a
                    >
                    <a href="#" class="hover:text-primary transition-colors"
                        ><span class="text-primary">#</span>Projects</a
                    >
                    <div class="flex items-center gap-2">
                        <select
                            class="bg-background border border-primary text-sm p-1 rounded focus:outline-none hover:text-primary transition-colors cursor-pointer"
                        >
                            <option value="en">EN</option>
                            <option value="es">ES</option>
                            <option value="fr">FR</option>
                        </select>
                    </div>
                </nav>

                <!-- Mobile menu button -->
                <div class="md:hidden flex justify-end">
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
                    class="absolute top-16 right-0 bg-background border-t border-gray-500 py-2"
                >
                    <a
                        href="#"
                        class="block px-4 py-2 hover:text-primary transition-colors"
                    >
                        <span class="text-primary">#</span>Home
                    </a>
                    <a
                        href="#"
                        class="block px-4 py-2 hover:text-primary transition-colors"
                    >
                        <span class="text-primary">#</span>About
                    </a>
                    <a
                        href="#"
                        class="block px-4 py-2 hover:text-primary transition-colors"
                    >
                        <span class="text-primary">#</span>Contact
                    </a>
                    <a
                        href="#"
                        class="block px-4 py-2 hover:text-primary transition-colors"
                    >
                        <span class="text-primary">#</span>Blog
                    </a>
                    <a
                        href="#"
                        class="block px-4 py-2 hover:text-primary transition-colors"
                    >
                        <span class="text-primary">#</span>Projects
                    </a>
                    <div class="px-4 py-2">
                        <select
                            class="bg-background border border-primary text-sm p-1 rounded focus:outline-none hover:text-primary transition-colors cursor-pointer"
                        >
                            <option value="en">EN</option>
                            <option value="es">ES</option>
                            <option value="fr">FR</option>
                        </select>
                    </div>
                </div>
            </div>

            <!--about Me-->
            <div class="mt-12 grid grid-cols-1 sm:grid-cols-2">
                <!--About me content-->
                <div class="flex flex-col gap-4">
                    <p class="text-lg text-primary">
                        <span class="text-white">NADI </span>is a
                        <span class="text-white">Full Stack Developer</span>
                        crafting digital experiences with passion
                    </p>
                    <p class="text-base">
                        Turning complex problems into elegant solutions through
                        clean code and creative design
                    </p>
                    <p class="text-sm text-gray-400">
                        Currently building amazing web applications with
                        Laravel, Vue.js, and cutting-edge technologies
                    </p>
                    <div class="flex gap-4 mt-2">
                        <button
                            class="px-4 py-2 border border-primary text-primary hover:bg-primary hover:text-white transition-colors"
                        >
                            View Projects
                        </button>
                        <button
                            class="px-4 py-2 border border-gray-500 hover:border-primary hover:text-primary transition-colors"
                        >
                            Contact Me
                        </button>
                    </div>
                </div>
                <!--About me image-->
                <div class="relative w-full h-96">
                    <!-- Square patterns -->
                    <div class="absolute top-4 right-4 flex flex-col gap-8">
                        <div class="relative">
                            <div class="w-16 h-16 border border-primary"></div>
                            <div
                                class="absolute -top-3 -left-3 w-8 h-8 border border-primary"
                            ></div>
                        </div>
                    </div>

                    <!-- Dots pattern -->
                    <div
                        class="absolute bottom-8 left-12 grid grid-cols-4 gap-2"
                    >
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

                    <!-- Additional square pattern -->
                    <div class="absolute bottom-12 right-24">
                        <div class="relative">
                            <div class="w-12 h-12 border border-gray-500"></div>
                            <div
                                class="absolute -bottom-4 -right-4 w-8 h-8 border border-gray-500"
                            ></div>
                        </div>
                    </div>

                    <!-- Profile Image -->
                    <img
                        src="../../../public/images/Profile.png"
                        alt="Profile"
                        class="absolute inset-0 w-full h-full object-cover object-center rounded-lg"
                    />
                </div>
                <!--About me text-->
                <div></div>
                <div class="border border-gray-300">
                    <span class="text-primary bg-primary px-2 ml-2 mr-2"></span>
                    <span class="text-xs"
                        >Music, art, and coding aren't just passions—they're my way of life.</span
                    >
                </div>
            </div>
            <!-- my favorite quote-->
            <div class="mt-12 flex items-center justify-center relative">
                <div class="relative border border-gray-500 p-6">
                    <div
                        class="absolute -top-3 -left-3 w-6 h-6 border border-primary animate-spin"
                    ></div>
                    <div
                        class="absolute -bottom-3 -right-3 w-6 h-6 border border-primary bg-primary animate-ping"
                    ></div>
                    <p class="text-lg text-primary">
                        I don't write <span class="text-white">code</span>, I
                        craft <span class="text-white">digital dreams</span>
                    </p>
                </div>
            </div>
            <!-- Projects -->
            <div class="mt-12">
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <p class="text-lg text-primary">
                            # <span class="text-white">MyProjects</span>
                        </p>
                        <div class="h-[1px] w-32 bg-primary"></div>
                    </div>
                    <button
                        class="text-white hover:text-primary transition-colors"
                    >
                        View All
                        <span class="inline-block ml-1 animate-bounce">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                class="transform rotate-45"
                            >
                                <path d="M5 12h14M12 5l7 7-7 7" />
                            </svg>
                        </span>
                    </button>
                </div>
                <!-- Projects cards-->
                <div
                    class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4"
                >
                    <!-- Project 1-->
                    <div class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img
                            src="../../../public/images/Profile.jpeg"
                            alt="Project 1"
                            class="w-full h-48 object-cover"
                        />
                        <p class="text-lg text-primary">Project 1</p>
                        <p class="text-sm text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Quisquam, quos.
                        </p>
                    </div>
                    <!-- Project 2-->
                    <div class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img
                            src="../../../public/images/Profile.jpeg"
                            alt="Project 2"
                            class="w-full h-48 object-cover"
                        />
                        <p class="text-lg text-primary">Project 2</p>
                        <p class="text-sm text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Quisquam, quos.
                        </p>
                    </div>
                    <!-- Project 3-->
                    <div class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300 ease-in-out">
                        <img
                            src="../../../public/images/Profile.jpeg"
                            alt="Project 3"
                            class="w-full h-48 object-cover"
                        />
                        <p class="text-lg text-primary">Project 3</p>
                        <p class="text-sm text-gray-400">
                            Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Quisquam, quos.
                        </p>
                    </div>
                </div>
            </div>

            <!--Skills-->
            <div class="mt-12">
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <p class="text-lg text-primary">
                            # <span class="text-white">Skills</span>
                        </p>
                        <div class="h-[1px] w-32 bg-primary"></div>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mt-8">
                    <!-- Patterns-->
                    <!-- Left side - Patterns -->
                    <div class="relative ml-10">
                        <!-- Overlapping squares pattern -->
                        <div class="relative w-48 h-48">
                            <div
                                class="absolute w-32 h-32 border border-primary rotate-12 animate-[spin_8s_linear_infinite]"
                            ></div>
                            <div
                                class="absolute w-32 h-32 border border-primary -rotate-12 animate-[spin_6s_linear_infinite_reverse]"
                            ></div>
                            <div
                                class="absolute w-24 h-24 border border-primary rotate-45 left-12 top-12 animate-[spin_4s_linear_infinite]"
                            ></div>
                            <div
                                class="absolute w-16 h-16 bg-primary opacity-10 left-16 top-16 animate-pulse"
                            ></div>
                        </div>

                        <!-- Dots grid pattern -->
                        <div
                            class="absolute right-0 top-0 grid grid-cols-4 gap-3"
                        >
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                        </div>

                        <!-- Overlapping squares pattern -->
                        <div class="absolute bottom-0 right-0">
                            <div class="relative w-48 h-48">
                                <div
                                    class="absolute w-32 h-32 border border-primary rotate-12 animate-[spin_8s_linear_infinite]"
                                ></div>
                                <div
                                    class="absolute w-32 h-32 border border-primary -rotate-12 animate-[spin_6s_linear_infinite_reverse]"
                                ></div>
                                <div
                                    class="absolute w-24 h-24 border border-primary rotate-45 left-12 top-12 animate-[spin_4s_linear_infinite]"
                                ></div>
                                <div
                                    class="absolute w-16 h-16 bg-primary opacity-10 left-16 top-16 animate-pulse"
                                ></div>
                            </div>
                        </div>

                        <!-- Dots grid pattern -->
                        <div class="absolute bottom-0 grid grid-cols-4 gap-3">
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-primary"
                            ></div>
                            <div
                                class="w-1.5 h-1.5 rounded-full bg-gray-500"
                            ></div>
                        </div>
                    </div>

                    <!-- Right side - Skills cards -->
                    <div class="grid grid-cols-2 gap-4">
                        <!-- Frontend Skills -->
                        <div
                            class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors"
                        >
                            <p class="text-primary mb-2">Frontend</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >Vue.js</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >React</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >TailwindCSS</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >JavaScript</span
                                >
                            </div>
                        </div>

                        <!-- Backend Skills -->
                        <div
                            class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors"
                        >
                            <p class="text-primary mb-2">Backend</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >Laravel</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >Node.js</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >MySQL</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >PHP</span
                                >
                            </div>
                        </div>

                        <!-- Tools -->
                        <div
                            class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors"
                        >
                            <p class="text-primary mb-2">Tools</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >Git</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >Docker</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >VS Code</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >Figma</span
                                >
                            </div>
                        </div>

                        <!-- Other Skills -->
                        <div
                            class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors"
                        >
                            <p class="text-primary mb-2">Other</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >UI/UX</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >Testing</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >Data Analysis</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >Power BI</span
                                >
                            </div>
                        </div>
                        <!-- Languages -->
                        <div
                            class="border border-gray-500 p-4 rounded-lg hover:border-primary transition-colors"
                        >
                            <p class="text-primary mb-2">Languages</p>
                            <div class="flex flex-wrap gap-2">
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >English (Fluent)</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >Japanese (N3)</span
                                >
                                <span
                                    class="px-2 py-1 text-sm border border-gray-500 rounded"
                                    >Chinese (Basic)</span
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--About Me-->
            <div class="mt-12">
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <p class="text-lg text-primary">
                            # <span class="text-white">About Me</span>
                        </p>
                        <div class="h-[1px] w-32 bg-primary"></div>
                    </div>
                </div>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-4 rounded-lg">
                        <p class="text-white mb-2">
                            Hello I'm Nadi,
                            <span class="text-primary"
                                >a software engineer</span
                            >
                            with a Master’s in Software Engineering and a
                            Bachelor’s in Information Technology.I’m passionate
                            about coding and creating innovative solutions. My
                            experience spans roles as a
                            <span class="text-primary">Radar Engineer</span> at
                            the Department of Meteorology and Hydrology, where I
                            also served as a team leader, and as a
                            <span class="text-primary">Bank Staff</span> early
                            in my career. Currently, I teach ICT and coding to
                            primary students at an international school, with
                            experience in Python programming and web design.
                        </p>
                        <p class="text-white mt-4">
                            I'm a
                            <span class="text-primary">quick learner</span> and
                            always eager to take on new challenges.I’m now
                            focused on transitioning into a
                            <span class="text-primary"
                                >Full Stack Developer</span
                            >
                            role, eager to bring my skills and passion for
                            software development to dynamic teams. Let’s
                            connect!
                        </p>
                    </div>
                    <div>
                        <div class="flex items-center justify-center relative">
                            <img
                                src="../../../public/images/Profile1.jpeg"
                                alt="Profile"
                                class="relative h-96 w-96 object-cover rounded-lg"
                            />
                            <!-- Top left overlapped squares -->
                            <div class="absolute top-0 left-0">
                                <div
                                    class="w-8 h-8 border border-primary"
                                ></div>
                                <div
                                    class="absolute top-4 left-4 w-6 h-6 border border-primary"
                                ></div>
                            </div>
                            <!-- Bottom right overlapped squares -->
                            <div class="absolute bottom-0 right-0">
                                <div
                                    class="w-8 h-8 border border-primary"
                                ></div>
                                <div
                                    class="absolute bottom-4 right-4 w-6 h-6 border border-primary"
                                ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Contact-->
            <div class="mt-12">
                <div class="flex items-center justify-between gap-4">
                    <div class="flex items-center gap-4">
                        <p class="text-lg text-primary">
                            # <span class="text-white">Contact</span>
                        </p>
                        <div class="h-[1px] w-32 bg-primary"></div>
                    </div>
                </div>
                <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-4">
                        <p>
                            I am interested in
                            <span class="primary">freelance </span
                            >opportunities. However, if you have other request
                            or question, do not hesitate to contact me.
                        </p>
                    </div>
                    <div class="ml-20">
                        <div
                            class="flex flex-col gap-4 text-right border border-gray-500 p-4 rounded-lg"
                        >
                            <!-- Email -->
                            <div class="flex items-center gap-4 text-primary">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <rect
                                        x="2"
                                        y="4"
                                        width="20"
                                        height="16"
                                        rx="2"
                                    />
                                    <path
                                        d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"
                                    />
                                </svg>
                                <a
                                    href="mailto:your.email@example.com"
                                    class="text-white hover:text-primary transition-colors"
                                    >ayenadikyaw.tgi@gmail.com</a
                                >
                            </div>

                            <!-- Telegram -->
                            <div
                                class="flex items-center gap-4 text-primary transition-colors"
                            >
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M21.2 5L2.5 12.8l4.7 1.6m13.9-9.4L9.2 16.4l-1.6 4.7"
                                    />
                                    <path d="m7.2 14.4 4.7 1.6" />
                                </svg>
                                <a
                                    href="https://t.me/yourusername"
                                    target="_blank"
                                    class="text-white hover:text-primary transition-colors"
                                    >@Phway777</a
                                >
                            </div>

                            <!-- LinkedIn -->
                            <div class="flex items-center gap-4 text-primary">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                >
                                    <path
                                        d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"
                                    />
                                    <rect x="2" y="9" width="4" height="12" />
                                    <circle cx="4" cy="4" r="2" />
                                </svg>
                                <a
                                    href="https://linkedin.com/in/yourusername"
                                    target="_blank"
                                    class="text-white hover:text-primary transition-colors"
                                    >linkedin.com/in/ayenadikyaw</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Divider -->
            <div class="w-full h-[1px] bg-gray-500 mt-12"></div>

            <!-- Footer -->
            <div class="py-8 text-center">
                <div class="flex justify-between">
                    <div>
                        <!--logo-->
                        <div class="flex items-center gap-1">
                            <!-- N -->
                            <div class="relative w-6 h-6 border border-primary">
                                <div
                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-4 h-4 bg-primary"
                                ></div>
                                <div
                                    class="absolute -top-2 -left-2 w-3 h-3 border border-primary"
                                ></div>
                            </div>

                            <!-- D -->
                            <div class="relative w-6 h-6 border border-primary">
                                <div
                                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-4 h-4 border-2 border-primary rounded-r-full"
                                ></div>
                                <div
                                    class="absolute -bottom-1 -right-1 w-2 h-2 bg-primary"
                                ></div>
                            </div>
                            <span class="font-bold text-xl">Nadi</span>
                        </div>
                        <p>Software Developer</p>
                    </div>

                    <!-- Right side - Social Media -->
                    <div class="flex items-center gap-4">
                        <!-- GitHub -->
                        <a
                            href="https://github.com/yourusername"
                            target="_blank"
                            class="text-gray-400 hover:text-primary transition-colors"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"
                                />
                            </svg>
                        </a>

                        <!-- Facebook -->
                        <a
                            href="https://facebook.com/yourusername"
                            target="_blank"
                            class="text-gray-400 hover:text-primary transition-colors"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"
                                />
                            </svg>
                        </a>

                        <!-- YouTube -->
                        <a
                            href="https://youtube.com/@yourusername"
                            target="_blank"
                            class="text-gray-400 hover:text-primary transition-colors"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                            >
                                <path
                                    d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"
                                />
                                <polygon
                                    points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"
                                />
                            </svg>
                        </a>
                    </div>
                </div>
                <p class="text-sm text-gray-400 mb-2">Inspired by <a href="https://www.figma.com/community/file/1164933568884615740" target="_blank" class="text-primary">Elias's</a> portfolio design</p>
                <p class="text-sm text-gray-400">
                    © 2024 All rights reserved. Crafted with
                    <span class="text-primary">♥</span>
                    by <span class="text-primary">NADI</span>
                </p>
            </div>
        </div>
        <!--right-->
        <div class="col-span-1 bg-background flex flex-col items-center">
            <div class="relative h-full">
                <!-- Square boxes -->
                <div
                    class="absolute top-1/4 -right-5 flex flex-col gap-12 mt-8"
                >
                    <div class="left-8 w-10 h-10 border border-gray-500"></div>
                    <div
                        class="absolute -left-4 -top-4 w-8 h-8 border border-gray-500"
                    ></div>
                    <div
                        class="absolute top-8 -left-5 w-10 h-10 border border-gray-500"
                    ></div>
                </div>

                <!-- Dots pattern -->
                <div class="absolute top-2/3 right-1/3 grid grid-cols-3 gap-3">
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
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                </div>

                <div class="absolute bottom-0 w-[1px] h-32 bg-gray-500"></div>
            </div>
        </div>
    </div>
</template>
