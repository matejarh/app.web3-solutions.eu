<script setup>
import AnimatedLayout from '@/Components/Landing/AnimatedLayout.vue';
import { ShieldCheckIcon, WrenchScrewdriverIcon, CpuChipIcon, ServerStackIcon, CircleStackIcon } from '@heroicons/vue/24/outline';

const services = [
    {
        icon: WrenchScrewdriverIcon,
        title: 'Popravilo in servis računalnikov',
        items: [
            'Diagnostika in odprava napak',
            'Zamenjava in nadgradnja strojne opreme',
            'Čiščenje prahu in hlajenja',
            'Reševanje problemov z zagonom sistema'
        ]
    },
    {
        icon: CpuChipIcon,
        title: 'Programska podpora',
        items: [
            'Namestitev in posodobitev operacijskih sistemov (Windows, Linux, macOS)',
            'Odprava virusov, trojancev in zlonamerne programske opreme',
            'Optimizacija delovanja računalnika',
            'Varnostno kopiranje in obnova podatkov'
        ]
    },
    {
        icon: ShieldCheckIcon,
        title: 'Omrežne in internetne rešitve',
        items: [
            'Nastavitev in konfiguracija omrežj (WiFi, LAN)',
            'Reševanje težav z internetno povezavo',
            'Varnostne nastavitve in zaščita omrežj'
        ]
    },
    {
        icon: ServerStackIcon,
        title: 'Vzdrževanje za podjetja',
        items: [
            'Redno preventivno vzdrževanje',
            'Oddaljena podpora in hitri odzivni časi',
            'Svetovanje in optimizacija IT infrastrukture',
            'Nastavitve in vzdrževanje strežnikov'
        ]
    },
    {
        icon: CircleStackIcon,
        title: 'Reševanje podatkov',
        items: [
            'Obnova izbrisanih ali poškodovanih datotek',
            'Reševanje podatkov s pokvarjenih diskov',
            'Prenos podatkov med napravami'
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
                        Naše storitve
                    </h2>
                </div>

                <div class="space-y-8 sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-12 sm:space-y-0">
                    <div v-for="(service, index) in services" :key="index" class="flex flex-col items-center">
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <component :is="service.icon"
                                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" />
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ service.title }}</h3>
                        <ul class="text-gray-500 dark:text-gray-400  list-disc list-outside ms-4">
                            <li v-for="(item, idx) in service.items" :key="idx">{{ item }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
