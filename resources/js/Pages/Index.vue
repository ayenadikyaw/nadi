<script setup>
import { Head } from "@inertiajs/vue3";
import Intro from "../Components/Intro.vue";
import Quote from "../Components/Quote.vue";
import Projects from "../Components/Projects.vue";
import Skills from "../Components/Skills.vue";
import AboutMe from "../Components/AboutMe.vue";
import Contact from "../Components/Contact.vue";

</script>
<template>
    <Head :title="`Home`" />
    <!--Intro-->
    <Intro />
    <!-- my favorite quote-->
    <Quote />
    <!-- Projects -->
    <Projects />

    <!--Skills-->
    <Skills />

    <!--About Me-->
    <AboutMe />

    <!--Contact-->
    <Contact />
</template>
