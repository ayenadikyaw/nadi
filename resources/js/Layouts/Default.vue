<script setup>
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import LeftDesign from "./LeftDesign.vue";
import RightDesign from "./RightDesign.vue";
import Footer from "./Footer.vue";
import Header from "./Header.vue";

</script>

<template>
    <div class="grid grid-cols-12 text-white">
        <!--left -->
        <LeftDesign />
        <!--content-->
        <div class="col-span-10 bg-background bg-opacity-95 font-primary">
            <!--header-->
            <Header />
            <!--content-->
            <div class="container mx-auto">
                <slot />
            </div>
            <!-- Divider -->
            <div class="w-full h-[1px] bg-gray-500 mt-12"></div>

            <!-- Footer -->
            <Footer />
        </div>
        <!--right-->
        <RightDesign />
    </div>
</template>
