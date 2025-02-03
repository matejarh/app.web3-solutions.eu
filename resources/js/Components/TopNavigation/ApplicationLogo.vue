<script setup>
import { Link } from "@inertiajs/vue3";
import { computed } from "vue";
import Logo from "../../../images/logo.svg";

const props = defineProps({
  size: {
    default: "default",
    type: String,
  },
});

const appName = import.meta.env.VITE_APP_NAME;

const appNameSplit = computed(() => {
  return appName.split(" ");
});
</script>

<template>
  <Link :href="route('index')" class="flex items-center justify-between mr-4">
    <img
      :src="Logo"
      class="mr-3 transition-all ease-in-out duration-300 "
      :class="size === 'small' ? 'h-6 w-6' : 'h-8 w-8'"
      :alt="appName + ' Logo'"
    />
    <span
      class="self-center text-2xl font-semibold whitespace-nowrap dark:text-primary-100 transition-all ease-in-out duration-300"
      :class="size === 'small' ? 'text-lg text-primary-100' : 'text-primary-800'"
      ><span class="font-bold uppercase">{{ appNameSplit[0] }}</span>
      <span class="italic">{{ appNameSplit[1] }}</span></span
    >
  </Link>
</template>
