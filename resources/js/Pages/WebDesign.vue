<script setup>
import CleanLayout from "@/Layouts/CleanLayout.vue";
import TopNavigation from "@/Components/Landing/TopNavigation.vue";
import { ref } from "vue";
import PageFooter from "../Components/Landing/PageFooter.vue";
import HeroSection from "@/Components/WebDesign/HeroSection.vue";
import WebDesignSection from "@/Components/WebDesign/Partials/WebDesignSection.vue";
import ContactInformationSection from "@/Components/Landing/ContactInformationSection.vue";
import AttractiveWebsites from "@/Components/WebDesign/Partials/AttractiveWebsites.vue";
import SupportAndMaintenance from "@/Components/WebDesign/Partials/SupportAndMaintenance.vue";
import InnovativeApplications from "@/Components/WebDesign/Partials/InnovativeApplications.vue";

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
  <CleanLayout title="Izdelava spletnih strani in aplikacij" vertical-aligment="top" @scroll-top="handleScroll">
    <TopNavigation :scroll-top="scrollTop" />

    <HeroSection id="home" />

   <!--  <WebDesignSection id="web_design" /> -->

    <AttractiveWebsites id="attractive_websites" />

    <InnovativeApplications id="innovative_applications" />

    <SupportAndMaintenance id="support_and_maintenance" />

    <ContactInformationSection id="contact" />

    <PageFooter id="footer" />
  </CleanLayout>
</template>
