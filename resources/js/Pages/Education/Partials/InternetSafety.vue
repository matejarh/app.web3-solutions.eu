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
        category: 'Varnost na spletu',
        title: 'Uporaba varnih gesel in upravljalnikov gesel',
        content: 'Komunikacija - načini komunikacije, govorica telesa, verbalno, neverbalno. Javno nastopanje – kako se pripraviti, tehnike sproščanja, kako se spopasti s težavami.',
        details: `<p class="mb-2 text-justify">Na tem kratkem predavanju boste spoznali pomen varnih gesel, kako jih enostavno ustvariti in učinkovito upravljati z upravljalniki gesel.</p>
        <h2 class="mb-2 text-lg font-semibold">Zakaj so varna gesla pomembna?</h2>
        <p class="mb-2 text-justify">Šibka gesla so glavni vzrok za vdore v spletne račune. Hekerji uporabljajo metode, kot so napadi z grobo silo in phishing, zato je nujno uporabljati močna gesla.</p>
        <h2 class="mb-2 text-lg font-semibold">Kako ustvariti varno geslo?</h2>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
        <li>Dolgo vsaj 12-16 znakov</li>
        <li>Kombinacija velikih in malih črk, številk in posebnih znakov</li>
        <li>Naključno generirano in unikatno za vsak račun</li>
        <li>Enostavno shranjevanje v upravljalniku gesel</li>
        </ul>
        <h2 class="mb-2 text-lg font-semibold">Upravljanje gesel</h2>
        <p class="mb-2 text-justify">Upravljalniki gesel omogočajo varno shranjevanje in samodejno izpolnjevanje prijavnih obrazcev.</p>
        <h3 class="mb-2 text-md font-semibold">Priporočeni upravljalniki gesel:</h3>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
        <li>Vgrajeni (Brave, Chrome, Edge, Firefox)</li>
        <li>Napredni (Proton Pass, Bitwarden, 1Password, LastPass)</li>
        </ul>
        <h2 class="mb-2 text-lg font-semibold">Kaj storiti, če geslo pozabite?</h2>
        <p class="mb-2 text-justify">Uporabite možnost "Pozabljeno geslo" in zagotovite, da imate vedno dostop do varnostnega e-poštnega naslova za obnovitev.</p>
        <h2 class="mb-2 text-lg font-semibold">Zaključek in priporočila</h2>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
        <li>Uporabljajte dolga, naključno generirana gesla</li>
        <li>Ne uporabljajte istega gesla za več računov</li>
        <li>Uporabljajte upravljalnik gesel</li>
        <li>Vključite dvofaktorsko avtentikacijo (2FA)</li>
        <li>Preverjajte izpostavljenost gesel s storitvami, kot je Have I Been Pwned</li>
        </ul>`
    },
    {
        category: 'Varnost na spletu',
        title: 'Osnove kibernetske varnosti in zasebnosti',
        content: 'Kibernetska varnost zajema ukrepe za zaščito računalniških sistemov in podatkov pred grožnjami, kot so virusi, zlonamerna programska oprema in phishing napadi. Pomembni ukrepi vključujejo uporabo protivirusne programske opreme, požarnih zidov in šifriranja podatkov.',
        details: `<h2 class="mb-2 text-lg font-semibold">Kaj je kibernetska varnost?</h2>
        <p class="mb-2 text-justify">Kibernetska varnost zajema ukrepe za zaščito računalniških sistemov in podatkov pred grožnjami, kot so virusi, zlonamerna programska oprema in phishing napadi. Pomembni ukrepi vključujejo uporabo protivirusne programske opreme, požarnih zidov in šifriranja podatkov.</p>
        <h2 class="mb-2 text-lg font-semibold">Ključne kibernetske grožnje</h2>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Zlonamerna programska oprema (malware): Virusi, črvi, izsiljevalska programska oprema.</li>
            <li>Phishing: Prevare za krajo gesel in osebnih podatkov.</li>
            <li>Vdor v podatke: Kraja osebnih in finančnih podatkov podjetij in posameznikov.</li>
            <li>Družbeni inženiring: Manipulacija ljudi za razkritje občutljivih informacij.</li>
        </ul>
        <h2 class="mb-2 text-lg font-semibold">Kako zaščititi svoje podatke?</h2>
        <h3 class="mb-2 text-md font-semibold">Močna gesla in preverjanje pristnosti</h3>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Uporabljajte dolga in edinstvena gesla.</li>
            <li>Aktivirajte večfaktorsko avtentikacijo (MFA).</li>
            <li>Uporabite upravljalnik gesel.</li>
        </ul>
        <h3 class="mb-2 text-md font-semibold">Posodabljanje programske opreme</h3>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Redno posodabljajte operacijske sisteme in aplikacije.</li>
            <li>Omogočite samodejne posodobitve.</li>
        </ul>
        <h3 class="mb-2 text-md font-semibold">Uporaba protivirusne zaščite</h3>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Namestite zanesljivo protivirusno programsko opremo.</li>
            <li>Redno izvajajte skeniranje sistema.</li>
        </ul>
        <h3 class="mb-2 text-md font-semibold">Šifriranje in varnostne kopije</h3>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Uporabljajte VPN in šifriranje za varno komunikacijo.</li>
            <li>Redno izdelujte varnostne kopije podatkov.</li>
        </ul>
        <h2 class="mb-2 text-lg font-semibold">Najboljše prakse zasebnosti</h2>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Nastavitve zasebnosti na družbenih omrežjih – omejite deljenje osebnih podatkov.</li>
            <li>Varno brskanje – izogibajte se prijavam v občutljive račune na javnih omrežjih.</li>
            <li>Zmanjšanje digitalne sledi – bodite previdni pri objavah in preverite, katere podatke spletna mesta zbirajo o vas.</li>
        </ul>
        <h2 class="mb-2 text-lg font-semibold">Prihodnji trendi v kibernetski varnosti</h2>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Umetna inteligenca za zaznavanje groženj.</li>
            <li>Kvantno računalništvo in novi šifrirni algoritmi.</li>
            <li>Varnost IoT naprav, saj so pogosto tarče napadov.</li>
            <li>Blockchain za izboljšanje zasebnosti in varnosti podatkov.</li>
        </ul>`
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
                        Spletna varnost
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
