<script setup>
import CleanLayout from "@/Layouts/CleanLayout.vue";
import TopNavigation from "@/Components/Landing/TopNavigation.vue";
import { ref } from "vue";
import PageFooter from "../Components/Landing/PageFooter.vue";
import HeroSection from "@/Components/Service/HeroSection.vue";

defineProps({
  canLogin: {
    type: Boolean,
  },
  canRegister: {
    type: Boolean,
  },
});
const scrollTop = ref(0);

const handleScroll = (n) => {
  scrollTop.value = n;
};
</script>

<template>
  <CleanLayout title="Servis računalniške opreme" vertical-aligment="top" @scroll-top="handleScroll">
    <TopNavigation :scroll-top="scrollTop" />

    <HeroSection id="home" />


    <PageFooter id="footer" />
  </CleanLayout>
</template>
