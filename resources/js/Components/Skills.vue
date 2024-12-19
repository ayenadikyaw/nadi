<template>
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
                <div class="absolute right-0 top-0 grid grid-cols-4 gap-3">
                    <div
                        class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                    ></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div
                        class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                    ></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div
                        class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                    ></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div
                        class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                    ></div>
                    <div
                        class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                    ></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div
                        class="w-1.5 h-1.5 rounded-full bg-primary animate-pulse"
                    ></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
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
                    <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div
                        class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"
                    ></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                    <div
                        class="w-1.5 h-1.5 rounded-full bg-primary animate-ping"
                    ></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-primary"></div>
                    <div class="w-1.5 h-1.5 rounded-full bg-gray-500"></div>
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
</template>