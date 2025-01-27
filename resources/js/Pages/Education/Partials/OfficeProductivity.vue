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
                        PISARNIŠKA PRODUKTIVNOST<br>za zaposlene in vodstvo
                    </h2>
                    <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400">

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

                    <EduCard>
                        <template #category>Microsoft Office</template>
                        <template #title>
                            Excel nadaljevalni tečaj
                        </template>
                        <template #content>
                            Excel nadaljevalni tečaj je primeren za vse, ki ste se udeležili Excel osnovnega tečaja oz. tiste, ki že poznate osnovne funkcije Excel-a, si želite svoje znanje nadgraditi in globlje razumeti funkcionalnosti te aplikacije.
                        </template>
                    </EduCard>

                    <EduCard>
                        <template #category>Microsoft Office</template>
                        <template #title>
                            Excel zahtevni tečaj
                        </template>
                        <template #content>
                            Excel zahtevni tečaj je primeren za vse, ki že poznate nadaljevalne funkcije Excela in bi radi svoje znanje nadgradili. V zahtevnem Excel tečaju se boste naučili dela z zelo naprednimi funkcijami in osnovami makrojev.
                        </template>
                    </EduCard>

                    <EduCard>
                        <template #category>Microsoft Office</template>
                        <template #title>
                            Napredni uporabnik Microsoft PowerPointa
                        </template>
                        <template #content>
                            PowerPoint tečaj je primeren za vse, ki želite ustvariti unikatne predstavitve, za nastope v službi ali pred drugim občinstvom.
                        </template>
                    </EduCard>

                    <EduCard>
                        <template #category>Microsoft Office</template>
                        <template #title>
                            Odlična prezentacija z uporabo PowerPoint-a
                        </template>
                        <template #content>
                            Za vse, ki želite ustvariti unikatne predstavitve za nastope v službi ali pred drugim občinstvom
                        </template>
                    </EduCard>

                    <EduCard>
                        <template #category>Microsoft Teams</template>
                        <template #title>
                            Microsoft Teams
                        </template>
                        <template #content>
                            Tečaj je namenjen vsem, ki si želijo poenostaviti sodelovanje znotraj podjetja s pomočjo različnih komunikacijskih kanalov, ki jih ponuja MS Teams. S pomočjo aplikacije lahko dosežete hitro izmenjavo informacij, nalog, dokumentov in splošne boljše organiziranosti zaposlenih.
                        </template>
                    </EduCard>

                    <EduCard>
                        <template #category>AI</template>
                        <template #title>
                            Umetna inteligenca - razlaga in uporaba
                        </template>
                        <template #content>
                            Ali želite spoznati, kako umetna inteligenca spreminja naš vsakdan? Na delavnici o umetni inteligenci vas bomo popeljali skozi najnovejša orodja, kot so ChatGPT, Microsoft Copilot, writesonic in Google Gemini, ter vam pokazali, kako jih lahko uporabljate za lažjo komunikacijo, reševanje problemov in kreiranje vsebin.
                        </template>
                    </EduCard>

                    <EduCard>
                        <template #category>Oblak</template>
                        <template #title>
                            Google Drive
                        </template>
                        <template #content>
                            Za vse, ki želijo obvladati uporabo Google Drive za delo v oblaku in izkoristiti vse možnosti, ki jih ponuja ta zmogljiva platforma. Udeleženci bodo spoznali, kako učinkovito shranjevati, organizirati in upravljati datoteke, kako uporabljati dokumente, preglednice, predstavitve.
                        </template>
                    </EduCard>

                    <EduCard>
                        <template #category>Grafično oblikovanje</template>
                        <template #title>
                            Canva: enostavno grafično oblikovanje za vsakogar
                        </template>
                        <template #content>
                            S Canvo na preprost način oblikujemo  brošure, vizitke in objave za socialne medije.
                        </template>
                    </EduCard>
                </div>
            </div>

        </section>
    </AnimatedLayout>
</template>
