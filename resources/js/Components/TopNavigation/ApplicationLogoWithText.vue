<script setup>
import { Link } from "@inertiajs/vue3";
import { computed } from "vue";

import Logo from "../../../images/logo_z_napisi.svg";
import LogoDark from "../../../images/logo_z_napisi_dark.svg";

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
    <img :src="Logo" class="block dark:hidden mr-3 transition-all ease-in-out duration-300 "
        :class="size === 'small' ? 'h-12 w-auto' : 'h-14 w-auto'" :alt="appName + ' Logo'" />
    <img :src="LogoDark" class="hidden dark:block mr-3 transition-all ease-in-out duration-300 "
        :class="size === 'small' ? 'h-12 w-auto' : 'h-14 w-auto'" :alt="appName + ' Logo'" />

    </Link>
</template>

