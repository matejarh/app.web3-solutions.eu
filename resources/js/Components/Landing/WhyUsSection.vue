<script setup>
import { UsersIcon, CheckBadgeIcon, AcademicCapIcon } from "@heroicons/vue/24/solid";
import AnimatedLayout from "./AnimatedLayout.vue";

const features = [
    {
        icon: UsersIcon,
        title: "Osebni pristop:",
        description: "Prisluhnemo vašim željam in potrebam ter ponudimo prilagojene rešitve."
    },
    {
        icon: AcademicCapIcon,
        title: "Strokovnost:",
        description: "Naša ekipa strokovnjakov ima bogate izkušnje na področju tehnologije."
    },
    {
        icon: CheckBadgeIcon,
        title: "Zanesljivost:",
        description: "Zavezani smo kakovosti in pravočasni dostavi."
    }
];
</script>

<template>
    <AnimatedLayout>
        <section class="bg-primary-100 dark:bg-primary-900">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="max-w-screen-md mb-8 lg:mb-16 flex flex-col items-center mx-auto">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                        Zakaj izbrati nas?
                    </h2>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">
                        Ponujamo vrsto spletnih rešitev, prilagojenih vašim potrebam. Z našim
                        poglobljenim znanjem na tem razvijajočem se področju vam lahko pomagamo.
                    </p>
                </div>
                <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                    <div v-for="(feature, index) in features" :key="index" class="flex flex-col items-center">
                        <div
                            class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-200 lg:h-12 lg:w-12 dark:bg-primary-800">
                            <component :is="feature.icon" class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" />
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-white">{{ feature.title }}</h3>
                        <p class="text-gray-500 dark:text-gray-400">
                            {{ feature.description }}
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
