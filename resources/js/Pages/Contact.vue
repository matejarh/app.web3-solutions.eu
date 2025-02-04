<script setup>
import CleanLayout from "@/Layouts/CleanLayout.vue";
import TopNavigation from "@/Components/Landing/TopNavigation.vue";
import { ref } from "vue";
import PageFooter from "../Components/Landing/PageFooter.vue";
import HeroSection from "@/Components/Contact/HeroSection.vue";
import ContactInformationSection from "@/Components/Landing/ContactInformationSection.vue";
import AboutUs from "@/Components/Contact/AboutUs.vue";


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
  <CleanLayout title="Kontakt" vertical-aligment="top" @scroll-top="handleScroll">
    <TopNavigation :scroll-top="scrollTop" />

    <HeroSection id="home" />
    <!-- <OurServices id="services" />
    <WhyUs id="whyus" /> -->
    <ContactInformationSection id="contact" />
    <AboutUs id="aboutus" />
    <!-- <Epilog id="epilog" /> -->
    <PageFooter id="footer" />
  </CleanLayout>
</template>
