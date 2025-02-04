<script setup>
import { Head } from "@inertiajs/vue3";
import { computed, ref } from "vue";
/* import SideNavigation from './Partials/SideNavigation.vue';
import TopNavigation from './Partials/TopNavigation.vue'; */
import ScrollToTop from "@/Components/ScrollToTop.vue";
import CookieConsentPopup from "@/Components/CookieConsentPopup.vue";

const props = defineProps({
  title: String,
  verticalAligment: {
    default: "center",
    type: String,
  },
});

const emit = defineEmits(["scrollTop"]);

const scrollPosition = ref(0);

const handleScroll = (e) => {
  scrollPosition.value = e.target.scrollTop;
  emit("scrollTop", e.target.scrollTop);
};

const headerClasses = computed(() => {
  return [scrollPosition.value > 100 ? "text-lg" : "text-xl"];
});
</script>

<template>
  <div class="">
    <Head :title="title" />

    <div
      id="page"
      class="relative antialiased bg-white dark:bg-secondary-900 overflow-hidden"
    >
      <main
        @scroll="handleScroll"
        id="main"
        :class="{ 'flex flex-col justify-center': verticalAligment === 'center' }"
        class="h-screen overflow-y-auto scrollbar-thin  scroll-smooth hover:scrollbar-thumb-primary-500 active:scrollbar-thumb-primary-400 scrollbar-thumb-primary-300 dark:scrollbar-thumb-primary-900 scrollbar-track-transparent"
      >
        <slot />
      </main>

      <ScrollToTop :scrollTop="scrollPosition" />
      <CookieConsentPopup />
    </div>
  </div>
</template>
