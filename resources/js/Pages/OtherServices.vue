<script setup>
import CleanLayout from "@/Layouts/CleanLayout.vue";
import TopNavigation from "@/Components/Landing/TopNavigation.vue";
import { ref } from "vue";
import PageFooter from "../Components/Landing/PageFooter.vue";

import ContactInformationSection from "@/Components/Landing/ContactInformationSection.vue";

import HeroSection from "@/Components/OtherServices/HeroSection.vue";
import OurServices from "@/Components/OtherServices/OurServices.vue";
import Epilog from "@/Components/OtherServices/Epilog.vue";

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
  <CleanLayout title="Ostale storitve" vertical-aligment="top" @scroll-top="handleScroll">
    <TopNavigation :scroll-top="scrollTop" />

    <HeroSection id="home" />
    <OurServices id="services" />
    <Epilog id="epilog" />
    <ContactInformationSection id="contact" />
    <PageFooter id="footer" />
  </CleanLayout>
</template>
