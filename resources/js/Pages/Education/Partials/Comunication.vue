<script setup>
import EduCard from '@/Components/Education/EduCard.vue';
import AnimatedLayout from '@/Components/Landing/AnimatedLayout.vue';
import { ref } from 'vue';

defineProps({
    delay: {
        default: 0,
        type: Number,
    },
});

const eduCards = ref([
    {
        category: 'Komunikacija',
        title: 'Komunikacija in javno nastopanje',
        content: 'Komunikacija - načini komunikacije, govorica telesa, verbalno, neverbalno. Javno nastopanje – kako se pripraviti, tehnike sproščanja, kako se spopasti s težavami.',
        details: `<p class="mb-2 text-justify">Komunikacija - načini komunikacije, govorica telesa, verbalno, neverbalno. Javno nastopanje – kako se pripraviti, tehnike sproščanja, kako se spopasti s težavami.</p>
        <p class="mb-2 text-justify">Več informacij</p>
        <p class="mb-2 text-justify">Ciljna skupina so vsi, ki si želijo izboljšati in pridobiti uporabna znanja in veščine in orodje za kakovostno komunikacijo in javno nastopanje. Direktorji podjetij, managerji, odvetniki, učitelji, samostojni podjetniki, komercialisti vsi, ki se pri svojem delu srečujejo s komunikacijo in javnim nastopanjem. Premagali boste ovire, ki vam pri delu onemogočajo, da ste osebno in poslovno uspešni. Naučili se boste samozavestnega nastopanja, predstavitve, javnega nastopanja in učinkovite komunikacije. Naučili se boste tremo izkoristiti kot orodje za doseganje svojih ciljev. Spoznali boste učinkovite metode za reševanje svojih težav pri komuniciranju. Izboljšali se bodo vsi vaši odnosi, tako poslovni kot osebni, ker je komunikacija osnova vseh odnosov. S tem boste pridobili tudi zaupanje vase, boljšo samopodobo, večjo samozavest, lažje boste izražali in uveljavljali svoja stališča, sprejemali odločitve in prepoznali svoje skrite talente pri reševanju svojih osebnih in poslovnih izzivov.</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>dihalna tehnika za javni nastop.</li>
            <li>Psihična priprava na nastop (mentalne in sprostitvene tehnike in obvladovanje treme).</li>
            <li>Govorna tehnika, priprava na govor, jasnost izražanja.</li>
            <li>Katerih stvari ne smemo početi med javnim nastopanjem.</li>
            <li>Kaj izražajo posamezne geste v osebni komunikaciji pri javnem nastopanju.</li>
            <li>Pomen prvega vtisa v komunikaciji.</li>
            <li>Artikulacija govora.</li>
            <li>Samozavesten nastop.</li>
        </ul>
        <p class="mb-2 text-justify">Več informacij</p>
        <p class="mb-2 text-justify">Tečaj je namenjen vsem, ki si želijo pridobiti uporabna znanja, veščine in orodja za kakovostno komunikacijo in javno nastopanje - to so direktorji podjetij, managerji, odvetniki, učitelji, samostojni podjetniki, komercialisti in vsi ostali, ki se pri svojem delu srečujete s komunikacijo in javnim nastopanjem.</p>
        <h2 class="text-lg font-bold mb-2">Kaj bodo udeleženci z udeležbo na tečaju pridobili?</h2>
        <ul class="list-disc list-inside text-left ms-6">
            <li>Premagali boste ovire, ki vam pri delu onemogočajo, da ste osebno in poslovno uspešni.</li>
            <li>Naučili se boste samozavestnega nastopanja, predstavitev, javnega nastopanja in učinkovite komunikacije.</li>
            <li>Naučili se boste tremo izkoristiti kot orodje za doseganje svojih ciljev.</li>
            <li>Spoznali boste učinkovite metode za reševanje svojih težav pri komuniciranju.</li>
            <li>Izboljšali se bodo vsi vaši odnosi, tako poslovni kot osebni, ker je komunikacija osnova vseh odnosov.</li>
            <li>S tem boste pridobili tudi zaupanje vase, boljšo samopodobo, večjo samozavest, lažje boste izražali in uveljavljali svoja stališča, sprejemali odločitve in prepoznali svoje skrite talente pri reševanju svojih osebnih in poslovnih izzivov.</li>
        </ul>`
    },
    {
        category: 'Komunikacija',
        title: 'Učinkovita komunikacija s težavnimi sogovorniki',
        content: 'Komunikacija je nekaj, čemur se ne moremo izogniti. Včasih je lažja, včasih težja. Od česa je to odvisno – od sogovornika, nas ali situacije?',
        details: `<p class="mb-2 text-justify">Komunikacija je nekaj, čemur se ne moremo izogniti. Včasih je lažja, včasih težja. Od česa je to odvisno – od sogovornika, nas ali situacije?</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Asertivna, agresivna in pasivna komunikacija.</li>
            <li>Zlata pravila komunikacije.</li>
            <li>Težavni, posebni, zahtevni ali samo drugačni sogovorniki?</li>
            <li>Sem tudi jaz kdaj zahteven sogovornik?</li>
            <li>Kako se sporazumevati, da se izognemo konfliktu?</li>
            <li>Kako lahko svoje komunikacijske veščine še izboljšam?</li>
            <li>Kako se sporazumevati s težavnimi sogovorniki v osebnem življenju?</li>
            <li>Kako se sporazumevati s težavnimi sogovorniki v poslovnem življenju?</li>
        </ul>
        <p class="mb-2 text-justify">Več informacij</p>
        <p class="mb-2 text-justify">Komunikacija je nekaj, čemur se ne moremo izogniti. Včasih je lažja, včasih težja. Od česa je to odvisno – od sogovornika, od nas, od situacije? Se lahko težavnim sogovornikom izognem in kako učinkovito komunicirati z njimi, v primeru, da se jim ne morem? Na ta in še številna druga vprašanje bomo odgovorili na webinarju in vam predstavili tudi praktične načine za učinkovito sporazumevanje s težavnimi sogovorniki v osebnem in poslovnem življenju.</p>
        <p class="mb-2 text-justify">Izvedeli boste, katera so zlata pravila komunikacije, ki nam pomagajo učinkovito komunicirati tudi s težavnimi sogovorniki, zakaj nekoga vidimo kot težavnega oz. ali smo v očeh drugih tudi mi morda kdaj težaven sogovornik. Pridobili boste tudi praktične nasvete za izboljšanje svojih komunikacijskih veščin.</p>`
    },
])
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

                    </p>
                </div>
                <div
                    class="grid grid-cols-1 mt-12 text-center sm:mt-16 gap-x-20 gap-y-12 sm:grid-cols-2 lg:grid-cols-3">
                    <EduCard v-for="(card, index) in eduCards" :key="index" :selected-details="card.details"
                        :selected-title="card.title">
                        <template #category>{{ card.category }}</template>
                        <template #title><span v-html="card.title"></span></template>
                        <template #content><span v-html="card.content"></span></template>

                        <button @click="openModal(card.details)" class="text-primary-600 hover:underline">
                            Več podrobnosti
                        </button>

                    </EduCard>
                </div>
            </div>

        </section>
    </AnimatedLayout>
</template>
