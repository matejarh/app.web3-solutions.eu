<script setup>
import { Head, Link } from "@inertiajs/vue3";
import CleanLayout from "@/Layouts/CleanLayout.vue";
import HeroSection from "@/Components/Landing/HeroSection.vue";
import TopNavigation from "@/Components/Landing/TopNavigation.vue";
import { ref } from "vue";
import PageFooter from "../Components/Landing/PageFooter.vue";
import ComputerRepairSection from "@/Components/Landing/ComputerRepairSection.vue";
import FeaturesSection from "@/Components/Landing/FeaturesSection.vue";
import LogosSection from "@/Components/Landing/LogosSection.vue";
import CtaSection from "@/Components/Landing/CtaSection.vue";
import WebDesignSection from "@/Components/Landing/WebDesignSection.vue";
import EducationSection from "@/Components/Landing/EducationSection.vue";
import EpilogSection from "@/Components/Landing/EpilogSection.vue";
import WhyUsSection from "@/Components/Landing/WhyUsSection.vue";
import ContactInformationSection from "@/Components/Landing/ContactInformationSection.vue";
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
  <CleanLayout title="Dobrodošli" vertical-aligment="top" @scroll-top="handleScroll">
    <TopNavigation :scroll-top="scrollTop" />

    <HeroSection id="home" />
    <WebDesignSection id="web_design" />
    <EducationSection id="education" />
    <ComputerRepairSection id="service" />
    <!-- <CtaSection id="cta" /> -->
    <WhyUsSection id="whyus" />
    <EpilogSection id="epilog" />
    <ContactInformationSection id="contact" />

    <PageFooter id="footer" />
  </CleanLayout>
</template>
