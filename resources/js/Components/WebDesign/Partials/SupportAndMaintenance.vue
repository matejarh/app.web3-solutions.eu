<script setup>
import AnimatedLayout from '@/Components/Landing/AnimatedLayout.vue';
import { ArrowPathIcon, LifebuoyIcon, ShieldCheckIcon } from '@heroicons/vue/24/outline';

const services = [
    {
        icon: LifebuoyIcon,
        text: 'Nudimo stalno podporo in vzdrževanje za zagotavljanje nemotenega delovanja vaših spletnih strani in aplikacij.'
    },
    {
        icon: ArrowPathIcon,
        text: 'Redno posodabljamo in izboljšujemo funkcionalnosti glede na vaše potrebe in povratne informacije.'
    },
    {
        icon: ShieldCheckIcon,
        text: 'Zagotavljamo varnostne posodobitve in varnostne kopije za zaščito vaših podatkov.'
    }
];
</script>

<template>
    <AnimatedLayout>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Podpora in vzdrževanje</h2>
                </div>

                <div class="space-y-8 sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-12 sm:space-y-0">
                    <div v-for="(service, index) in services" :key="index" class="flex flex-col items-center">
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <component :is="service.icon" class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" />
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 text-center">
                            {{ service.text }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
