<script setup>
import CleanLayout from "@/Layouts/CleanLayout.vue";
import TopNavigation from "@/Components/Landing/TopNavigation.vue";
import { ref } from "vue";
import PageFooter from "../Components/Landing/PageFooter.vue";
import HeroSection from "@/Components/Education/HeroSection.vue";
import OfficeProductivity from "./Education/Partials/OfficeProductivity.vue";
import Comunication from "./Education/Partials/Comunication.vue";

import InternetSafety from "./Education/Partials/InternetSafety.vue";
import ContactEducationSection from "@/Components/Landing/ContactEducationSection.vue";

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
  <CleanLayout :title="__('Education')" vertical-aligment="top" @scroll-top="handleScroll">
    <TopNavigation :scroll-top="scrollTop" />

    <HeroSection id="home" />

    <OfficeProductivity :delay="700" id="office_productivity" />
    <Comunication :delay="1300" id="comunication" />
    <InternetSafety :delay="1900" id="internet_safety" />
    <ContactEducationSection id="contact" />
    <PageFooter id="footer" />
  </CleanLayout>
</template>
