<template>
    <div class="mt-12">
        <div class="flex items-center justify-between gap-4">
            <div class="flex items-center gap-4">
                <p class="text-lg text-primary">
                    # <span class="text-white">MyProjects</span>
                </p>
                <div class="h-[1px] w-32 bg-primary"></div>
            </div>
            <button class="text-white hover:text-primary transition-colors">
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
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 mt-4">
            <!-- Project 1-->
            <div
                class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300 ease-in-out"
            >
                <img
                    src="../../../public/images/Profile.jpeg"
                    alt="Project 1"
                    class="w-full h-48 object-cover"
                />
                <p class="text-lg text-primary">Project 1</p>
                <p class="text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quos.
                </p>
            </div>
            <!-- Project 2-->
            <div
                class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300 ease-in-out"
            >
                <img
                    src="../../../public/images/Profile.jpeg"
                    alt="Project 2"
                    class="w-full h-48 object-cover"
                />
                <p class="text-lg text-primary">Project 2</p>
                <p class="text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quos.
                </p>
            </div>
            <!-- Project 3-->
            <div
                class="border border-gray-500 p-4 rounded-lg hover:scale-105 transition-transform duration-300 ease-in-out"
            >
                <img
                    src="../../../public/images/Profile.jpeg"
                    alt="Project 3"
                    class="w-full h-48 object-cover"
                />
                <p class="text-lg text-primary">Project 3</p>
                <p class="text-sm text-gray-400">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Quisquam, quos.
                </p>
            </div>
        </div>
    </div>
</template>
