<script setup>
import AnimatedLayout from "./AnimatedLayout.vue";
import WebDesignIllustration from "../../../images/web_design.webp";
import { ArrowRightIcon } from "@heroicons/vue/24/solid";
</script>

<template>
    <AnimatedLayout>
        <section class=" py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
            <div class="grid gap-16 items-center lg:grid-cols-2">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">
                        Izdelava spletnih strani in aplikacij
                    </h2>
                    <div class="mb-4">
                        <p class="font-bold">Privlačne spletne strani:</p>
                        <ul class="mb-6 list-disc list-outside ms-6">
                            <li>
                                Zasnujemo moderne, funkcionalne in uporabnikom prijazne spletne strani, ki
                                odražajo vašo blagovno znamko.
                            </li>
                        </ul>
                        <p class="font-bold">Inovativne aplikacije:</p>
                        <ul class="mb-6 list-disc list-outside ms-6">
                            <li>
                                Od ideje do izvedbe - razvijamo aplikacije, ki navdušujejo z uporabniško
                                izkušnjo in zmogljivostjo.
                            </li>
                        </ul>

                        <inertia-link :href="route('web-design')"
                            class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-primary-700 rounded-lg hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                            Več...
                            <ArrowRightIcon class="w-5 h-5 ml-2 -mr-1" />

                        </inertia-link>
                    </div>
                </div>
                <div>
                    <img :src="WebDesignIllustration" alt="Web Design Illustration" class="w-full h-auto rounded-lg">
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
