<template>
     <div class="mt-12 grid grid-cols-1 sm:grid-cols-2">
        <!--About me content-->
        <div class="flex flex-col gap-4">
            <p class="text-lg text-primary">
                <span class="text-white">NADI </span>is a
                <span class="text-white">Full Stack Developer</span>
                crafting digital experiences with passion
            </p>
            <p class="text-base">
                Turning complex problems into elegant solutions through clean
                code and creative design
            </p>
            <p class="text-sm text-gray-400">
                Currently building amazing web applications with Laravel,
                Vue.js, and cutting-edge technologies
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
            <div class="absolute bottom-8 left-12 grid grid-cols-4 gap-2">
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
                >Music, art, and coding aren't just passions—they're my way of
                life.</span
            >
        </div>
    </div>
</template>