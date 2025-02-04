<script setup>
import AnimatedLayout from '@/Components/Landing/AnimatedLayout.vue';
import { CircleStackIcon, CpuChipIcon, ServerStackIcon, ShieldCheckIcon, WrenchScrewdriverIcon } from '@heroicons/vue/24/outline';

const services = [
    {
        icon: ShieldCheckIcon,
        title: 'Prevzem in namestitev Sigen-ce certifikata',
        items: [
            'Zagotovite si varen elektronski podpis.'
        ]
    },
    {
        icon: CpuChipIcon,
        title: 'Prijava in nastavitev e-Davkov',
        items: [
            'Enostavno urejanje davčnih obveznosti.'
        ]
    },
    {
        icon: WrenchScrewdriverIcon,
        title: 'Pomoč pri dostopu do e-Uprave',
        items: [
            'Oddajanje vlog brez čakanja v vrstah.'
        ]
    },
    {
        icon: ServerStackIcon,
        title: 'Aktivacija e-Osebne',
        items: [
            'Priprava za uporabo sodobne osebne izkaznice.'
        ]
    },
    {
        icon: CircleStackIcon,
        title: 'Dostop do portala DoZdravnika',
        items: [
            'Preprosta naročila in vpogled v zdravstvene storitve.'
        ]
    }
];
</script>

<template>
    <AnimatedLayout :delay="300">
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                        Ponudba za hitro in enostavno ureditev digitalnih storitev
                    </h2>
                    <p class="text-gray-500 dark:text-gray-400 sm:text-xl">
                        Potrebujete pomoč pri prevzemu in namestitvi sigen-ce certifikata, dostopu do e-Davkov, e-Uprave, e-Osebne ali urejanju dostopa do DoZdravnika? Prepustite to strokovnjakom!
                    </p>
                </div>

                <div class="space-y-8 sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-12 sm:space-y-0">
                    <div v-for="(service, index) in services" :key="index" class="flex flex-col items-center">
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <component :is="service.icon"
                                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" />
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ service.title }}</h3>
                        <ul class="text-gray-500 dark:text-gray-400 list-disc list-outside ms-4">
                            <li v-for="(item, idx) in service.items" :key="idx">{{ item }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
