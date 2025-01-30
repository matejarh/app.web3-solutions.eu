<script setup>
import { ref } from 'vue';
import EduCard from '@/Components/Education/EduCard.vue';
import AnimatedLayout from '@/Components/Landing/AnimatedLayout.vue';

defineProps({
    delay: {
        default: 0,
        type: Number,
    },
});

const eduCards = ref([
    {
        category: 'Microsoft Office',
        title: 'Napredni uporabniki<br>Microsoft Word-a',
        content: 'Tečaj je namenjen vsem, ki že poznate osnovne funkcije programa in si želite svoje znanje nadgraditi. Na tečaju boste pridobili znanje, ki vam bo pomagalo učinkoviteje uporabljati <b>Microsoft Word</b>.'
    },
    {
        category: 'Microsoft Office',
        title: 'Excel nadaljevalni tečaj',
        content: 'Excel nadaljevalni tečaj je primeren za vse, ki ste se udeležili Excel osnovnega tečaja oz. tiste, ki že poznate osnovne funkcije Excel-a, si želite svoje znanje nadgraditi in globlje razumeti funkcionalnosti te aplikacije.'
    },
    {
        category: 'Microsoft Office',
        title: 'Excel zahtevni tečaj',
        content: 'Excel zahtevni tečaj je primeren za vse, ki že poznate nadaljevalne funkcije Excela in bi radi svoje znanje nadgradili. V zahtevnem Excel tečaju se boste naučili dela z zelo naprednimi funkcijami in osnovami makrojev.'
    },
    {
        category: 'Microsoft Office',
        title: 'Napredni uporabnik Microsoft PowerPointa',
        content: 'PowerPoint tečaj je primeren za vse, ki želite ustvariti unikatne predstavitve, za nastope v službi ali pred drugim občinstvom.'
    },
    {
        category: 'Microsoft Office',
        title: 'Odlična prezentacija z uporabo PowerPoint-a',
        content: 'Za vse, ki želite ustvariti unikatne predstavitve za nastope v službi ali pred drugim občinstvom.'
    },
    {
        category: 'Microsoft Teams',
        title: 'Microsoft Teams',
        content: 'Tečaj je namenjen vsem, ki si želijo poenostaviti sodelovanje znotraj podjetja s pomočjo različnih komunikacijskih kanalov, ki jih ponuja MS Teams. S pomočjo aplikacije lahko dosežete hitro izmenjavo informacij, nalog, dokumentov in splošne boljše organiziranosti zaposlenih.'
    },
    {
        category: 'AI',
        title: 'Umetna inteligenca - razlaga in uporaba',
        content: 'Ali želite spoznati, kako umetna inteligenca spreminja naš vsakdan? Na delavnici o umetni inteligenci vas bomo popeljali skozi najnovejša orodja, kot so ChatGPT, Microsoft Copilot, writesonic in Google Gemini, ter vam pokazali, kako jih lahko uporabljate za lažjo komunikacijo, reševanje problemov in kreiranje vsebin.'
    },
    {
        category: 'Oblak',
        title: 'Google Drive',
        content: 'Za vse, ki želijo obvladati uporabo Google Drive za delo v oblaku in izkoristiti vse možnosti, ki jih ponuja ta zmogljiva platforma. Udeleženci bodo spoznali, kako učinkovito shranjevati, organizirati in upravljati datoteke, kako uporabljati dokumente, preglednice, predstavitve.'
    },
    {
        category: 'Grafično oblikovanje',
        title: 'Canva: enostavno grafično oblikovanje za vsakogar',
        content: 'S Canvo na preprost način oblikujemo brošure, vizitke in objave za socialne medije.'
    },
    {
        category: 'Komunikacija',
        title: 'Komunikacija in javno nastopanje',
        content: ''
    }
]);
</script>

<template>
    <AnimatedLayout :delay="delay">
        <section class="bg-white dark:bg-gray-900 antialiased">
            <div class="max-w-screen-xl px-4 py-8 mx-auto lg:px-6 sm:py-16 lg:py-24">
                <div class="max-w-2xl mx-auto text-center">
                    <h2 class="text-3xl font-extrabold leading-tight tracking-tight text-gray-900 sm:text-4xl dark:text-white">
                        PISARNIŠKA PRODUKTIVNOST<br>za zaposlene in vodstvo
                    </h2>
                    <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400"></p>
                </div>
                <div class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                    <EduCard v-for="(card, index) in eduCards" :key="index">
                        <template #category>{{ card.category }}</template>
                        <template #title><span v-html="card.title"></span></template>
                        <template #content><span v-html="card.content"></span></template>
                    </EduCard>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
