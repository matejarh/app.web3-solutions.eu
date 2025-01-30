<script setup>
import AnimatedLayout from "./AnimatedLayout.vue";
import ServiceIllustration from "../../../images/computer_repair.webp";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <AnimatedLayout>
        <section class="">
            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                        Računalniški Servis in Vzdrževanje
                    </h2>
                    <p class="mb-4">
                        <span class="font-bold">Hitra diagnostika in popravila:</span> <br />Vaše
                        naprave spravimo nazaj v optimalno stanje. Vzdrževanje: Redno skrbimo, da vaša
                        oprema deluje brezhibno.
                    </p>
                    <Link :href="route('service')"
                        class="inline-flex items-center justify-center mb-6 px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                        Več...
                        <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </Link>
                </div>
                <div class="grid grid-cols-1 gap-4 ">
                    <img class="w-full rounded-lg" :src="ServiceIllustration" alt="office content 1" />
                    <!-- <img class="mt-4 w-full lg:mt-10 rounded-lg"
                        src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/office-long-1.png"
                        alt="office content 2"> -->
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
