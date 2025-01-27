<script setup>
import EduCard from '@/Components/Education/EduCard.vue';
import AnimatedLayout from '@/Components/Landing/AnimatedLayout.vue';

defineProps({
    delay: {
        default: 0,
        type: Number,
    },
});
</script>

<template>
    <AnimatedLayout :delay="delay">
        <section class="bg-white dark:bg-gray-900 antialiased">
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
                <div class="max-w-2xl mx-auto text-center">
                    <h2
                        class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        Komunikacija
                    </h2>
                    <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">
                        Komunikacija in javno nastopanje
                    </p>
                </div>
                <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                    <EduCard>
                        <template #category>Microsoft Office</template>
                        <template #title>
                            Napredni uporabniki<br>Microsoft Word-a
                        </template>
                        <template #content>
                            Tečaj je namenjen vsem, ki že poznate osnovne funkcije programa in si želite svoje znanje nadgraditi. Na tečaju boste pridobili znanje, ki vam bo pomagalo učinkoviteje uporabljati <b>Microsoft Word</b>.<!-- <br>Priporočamo ga predvsem: komercialistom, poslovnim sekretarjem, zaposlenim v marketingu, prodaji in tistim, ki želite izdelati slikovite publikacije. -->
                        </template>
                    </EduCard>
                </div>
            </div>

        </section>
    </AnimatedLayout>
</template>
