<script setup>
import { ChartBarIcon, GlobeAltIcon, LightBulbIcon } from "@heroicons/vue/24/solid";
import AnimatedLayout from "./AnimatedLayout.vue";

const visionItems = [
    {
        icon: LightBulbIcon,
        text: "Verjamemo v moč tehnologije, ki poenostavlja življenja in odpira nove priložnosti."
    },
    {
        icon: GlobeAltIcon,
        text: "Naš cilj je ustvarjati rešitve, ki spodbujajo rast, povezovanje in uspeh."
    },
    {
        icon: ChartBarIcon,
        text: "S tehnologijo omogočamo napredek in inovacije za boljšo prihodnost."
    }
];
</script>

<template>
    <AnimatedLayout>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 lg:py-16 mx-auto max-w-screen-xl px-4">
                <h2 class="mb-8 lg:mb-16 text-3xl font-extrabold tracking-tight leading-tight text-center text-gray-900 dark:text-white md:text-4xl">
                    Naša vizija
                </h2>
                <div class="grid grid-cols-1 gap-8 text-gray-500 sm:gap-12 md:grid-cols-3 lg:grid-cols-3 dark:text-gray-400">
                    <div v-for="(item, index) in visionItems" :key="index" class="flex flex-col items-center">
                        <component :is="item.icon" class="w-12 h-12 text-primary-500 mb-4" />
                        <p class="w-full text-center text-lg">{{ item.text }}</p>
                    </div>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
