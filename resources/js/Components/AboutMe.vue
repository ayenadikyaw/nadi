<template>
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
                    <span class="text-primary">a software engineer</span>
                    with a Master’s in Software Engineering and a Bachelor’s in
                    Information Technology.I’m passionate about coding and
                    creating innovative solutions. 
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
                <div class="flex items-center justify-center relative">
                    <img
                        src="../../../public/images/Profile1.jpeg"
                        alt="Profile"
                        class="relative h-96 w-96 object-cover rounded-lg"
                    />
                    <!-- Top left overlapped squares -->
                    <div class="absolute top-0 left-0">
                        <div class="w-8 h-8 border border-primary"></div>
                        <div
                            class="absolute top-4 left-4 w-6 h-6 border border-primary"
                        ></div>
                    </div>
                    <!-- Bottom right overlapped squares -->
                    <div class="absolute bottom-0 right-0">
                        <div class="w-8 h-8 border border-primary"></div>
                        <div
                            class="absolute bottom-4 right-4 w-6 h-6 border border-primary"
                        ></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
