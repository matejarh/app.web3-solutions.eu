<script setup>
import AnimatedLayout from "./AnimatedLayout.vue";
import EducationIllustration from "../../../images/education.webp";
import { Link } from "@inertiajs/vue3";
import { ArrowRightIcon } from "@heroicons/vue/24/solid";
</script>

<template>
    <AnimatedLayout>
        <section class="bg-white dark:bg-gray-900">
            <div
                class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                <img class="w-full dark:hidden rounded-lg" :src="EducationIllustration" alt="dashboard image" />
                <img class="w-full hidden dark:block rounded-lg" :src="EducationIllustration" alt="dashboard image" />
                <div class="mt-4 md:mt-0">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                        Izobraževanje
                    </h2>
                    <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                        <span class="font-bold">Delavnice in tečaji:</span><br />
                        Pomagamo vam in vaši ekipi osvojiti nova znanja – od osnov računalništva do
                        naprednega programiranja.
                    </p>
                    <p class="mb-6 font-light text-gray-500 md:text-lg dark:text-gray-400">
                        <span class="font-bold">Spletni tečaji:</span><br />
                        Učite se v svojem tempu z našimi interaktivnimi spletnimi vsebinami.
                    </p>
                    <Link :href="route('education')"
                        class="inline-flex items-center text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900">
                    Več...
                    <ArrowRightIcon class="w-5 h-5 ml-2 -mr-1" />
                    </Link>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
