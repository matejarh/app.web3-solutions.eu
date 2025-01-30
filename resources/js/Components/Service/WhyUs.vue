<script setup>
import AnimatedLayout from '@/Components/Landing/AnimatedLayout.vue';
import { ClockIcon, CurrencyDollarIcon, HandRaisedIcon, UserGroupIcon } from '@heroicons/vue/24/outline';

const features = [
    {
        icon: ClockIcon,
        text: 'Hitro in zanesljivo – Večino težav rešimo v najkrajšem možnem času.'
    },
    {
        icon: UserGroupIcon,
        text: 'Izkušena ekipa – Naši strokovnjaki imajo dolgoletne izkušnje v IT industriji.'
    },
    {
        icon: CurrencyDollarIcon,
        text: 'Dostopne cene – Kakovostne storitve po ugodnih cenah.'
    },
    {
        icon: HandRaisedIcon,
        text: 'Osebni pristop – Prilagodimo se vašim potrebam in ponudimo najboljše rešitve.'
    }
];
</script>

<template>
    <AnimatedLayout :delay="400">
        <section class="bg-gray-50 dark:bg-gray-800">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Zakaj izbrati nas?</h2>
                </div>
                <div class="space-y-8 sm:grid sm:grid-cols-2 lg:grid-cols-4 sm:gap-12 sm:space-y-0">
                    <div v-for="(feature, index) in features" :key="index" class="flex flex-col items-center">
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <component :is="feature.icon" class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" />
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 text-center">{{ feature.text }}</p>
                    </div>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
