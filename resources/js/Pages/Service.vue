<script setup>
import CleanLayout from "@/Layouts/CleanLayout.vue";
import TopNavigation from "@/Components/Landing/TopNavigation.vue";
import { ref } from "vue";
import PageFooter from "../Components/Landing/PageFooter.vue";
import HeroSection from "@/Components/Service/HeroSection.vue";
import OurServices from "@/Components/Service/OurServices.vue";
import WhyUs from "@/Components/Service/WhyUs.vue";
import ContactInformationSection from "@/Components/Landing/ContactInformationSection.vue";
import Epilog from "@/Components/Service/Epilog.vue";

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
  <CleanLayout title="Računalniški Servis In Vzdrževanje" vertical-aligment="top" @scroll-top="handleScroll">
    <TopNavigation :scroll-top="scrollTop" />

    <HeroSection id="home" />
    <OurServices id="services" />
    <WhyUs id="whyus" />
    <ContactInformationSection id="contact" />
    <Epilog id="epilog" />
    <PageFooter id="footer" />
  </CleanLayout>
</template>
