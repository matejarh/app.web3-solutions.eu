<script setup>
import AnimatedLayout from '@/Components/Landing/AnimatedLayout.vue';
import { DevicePhoneMobileIcon, SparklesIcon, MagnifyingGlassIcon, CodeBracketIcon } from '@heroicons/vue/24/outline';

const features = [
    {
        icon: DevicePhoneMobileIcon,
        text: 'Zasnujemo moderne, funkcionalne in uporabnikom prijazne spletne strani, ki odražajo vašo blagovno znamko.'
    },
    {
        icon: SparklesIcon,
        text: 'Uporabljamo najnovejše tehnologije in trende za zagotavljanje vrhunske uporabniške izkušnje.'
    },
    {
        icon: MagnifyingGlassIcon,
        text: 'Optimiziramo spletne strani za hitrost in SEO, da dosežete boljšo vidnost na iskalnikih.'
    },
    {
        icon: CodeBracketIcon,
        text: 'Zagotavljamo odzivno oblikovanje, ki se prilagaja različnim napravam in zaslonom.'
    }
];
</script>

<template>
    <AnimatedLayout>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="max-w-screen-md mb-8 lg:mb-16 text-center mx-auto">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                        Privlačne spletne strani
                    </h2>
                </div>

                <div class="space-y-8 sm:grid sm:grid-cols-2 lg:grid-cols-4 sm:gap-12 sm:space-y-0">
                    <div v-for="(feature, index) in features" :key="index" class="flex flex-col items-center">
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <component :is="feature.icon"
                                class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" />
                        </div>
                        <p class="text-gray-500 dark:text-gray-400 text-center">
                            {{ feature.text }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
