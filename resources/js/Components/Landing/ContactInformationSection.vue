<script setup>
import { AtSymbolIcon, DevicePhoneMobileIcon, MapPinIcon } from '@heroicons/vue/24/solid';
import AnimatedLayout from './AnimatedLayout.vue';

const contactInfo = [
    {
        icon: AtSymbolIcon,
        title: 'Email',
        content: 'info@web3-solutions.eu',
        link: 'mailto:info@web3-solutions.eu'
    },
    {
        icon: DevicePhoneMobileIcon,
        title: 'Telefon',
        content: '+386 70 481 181',
        link: 'tel:+38670481181'
    },
    {
        icon: MapPinIcon,
        title: 'Naslov',
        content: 'Web3 Solutions, Kamna Gorica 61, 4246 Kamna Gorica, Slovenija',
        link: null
    }
];
</script>

<template>
    <AnimatedLayout>
        <section class="bg-white dark:bg-gray-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="max-w-screen-md mb-8 lg:mb-16 flex flex-col items-center mx-auto">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Kontaktirajte nas</h2>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">Pišite nam in odgovorili vam bomo v najkrajšem možnem času.</p>
                </div>
                <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                    <div v-for="(info, index) in contactInfo" :key="index" class="flex flex-col items-center">
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <component :is="info.icon" class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" />
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ info.title }}</h3>
                        <p class="text-gray-500 dark:text-gray-400">
                            <a v-if="info.link" :href="info.link" class="hover:underline">{{ info.content }}</a>
                            <span v-else>{{ info.content }}</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
