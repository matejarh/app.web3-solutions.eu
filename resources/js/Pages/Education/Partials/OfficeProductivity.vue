<script setup>
import { ref } from 'vue';
import AnimatedLayout from '@/Components/Landing/AnimatedLayout.vue';
import EduCard from '@/Components/Education/EduCard.vue';
import DialogModal from '@/Components/DialogModal.vue';

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
        content: 'Tečaj je namenjen vsem, ki že poznate osnovne funkcije programa in si želite svoje znanje nadgraditi. Na tečaju boste pridobili znanje, ki vam bo pomagalo učinkoviteje uporabljati <b>Microsoft Word</b>.',
        details: `<p class="mb-2 text-justify">Word tečaj je primeren za vse, ki vsakodnevno delate v Wordu, vendar bi radi svoje znanje nadgradili in občutno pohitrili svoje delo.</p>
        <p class="mb-2 text-justify">Tečaj je namenjen vsem, ki že poznate osnovne funkcije programa in si želite svoje znanje nadgraditi. Na tečaju boste pridobili znanje, ki vam bo pomagalo učinkoviteje uporabljati Microsoft Word. Priporočamo ga predvsem:</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
        <li>komercialistom</li>
        <li>poslovnim sekretarjem</li>
        <li>zaposlenim v marketingu</li>
        <li>prodaji</li>
        <li>tistim, ki želite izdelati slikovite publikacije</li>
        </ul>
        <p class="mb-2 text-justify">Skozi interaktivne vaje bomo spoznali napredne funkcije urejevalnika besedil, kot so oblikovanje kompleksnih dokumentov, uporaba slogov, hitro oblikovanje dolgih dokumentov, ustvarjanje predlog, delo v oblaku, vstavljanje in urejanje tabel ter grafičnih elementov. Naučili se bomo tudi, kako upravljamo s kazalom, kako sledimo spremembam in kako lahko avtomatiziramo ponavljajoče se naloge.</p>
        <h2 class="text-lg font-bold mb-2">Vsebina tečaja:</h2>
        <ul class="list-disc list-inside text-left ms-6">
        <li>napredno oblikovanje daljših dokumentov z uporabo slogov</li>
        <li>ustvarjanje predlog</li>
        <li>delo v oblaku in uporaba ChatGPT za Word</li>
        <li>izdelavo tipskih pisem in nalepk iz obstoječe baze podatkov</li>
        <li>izdelavo makrov in s tem avtomatizacijo ponavljajočih se postopkov</li>
        <li>vključevanje slik v besedilo in izdelavo privlačnih publikacij</li>
        </ul>`
    },
    {
        category: 'Microsoft Office',
        title: 'Excel nadaljevalni tečaj',
        content: 'Excel nadaljevalni tečaj je primeren za vse, ki ste se udeležili Excel osnovnega tečaja oz. tiste, ki že poznate osnovne funkcije Excel-a, si želite svoje znanje nadgraditi in globlje razumeti funkcionalnosti te aplikacije.',
        details: `<p class="mb-2 text-justify">Excel nadaljevalni tečaj je primeren za vse, ki ste se udeležili Excel osnovnega tečaja oz. tiste, ki že poznate osnovne funkcije Excel-a, si želite svoje znanje nadgraditi in globlje razumeti funkcionalnosti te aplikacije.</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
        <li>Pegled raznih funkcij: besedilne, datumske, logične, statistične, iskalne.</li>
        <li>Pogojno oblikovanje in povezovanje med celicami, delovnimi listi, delovnimi zvezki itd.</li>
        <li>Tiskanje in urejanje dokumenta pred tiskom.</li>
        <li>Relativno in absolutno sklicevanje.</li>
        <li>Razvrščanje in filtriranje podatkov.</li>
        <li>Osnove vrtilnih tabel – vrtilni grafikoni.</li>
        <li>Uporaba Excela 2016, vendar lahko uporabljate Excel 2013 ali 2010.</li>
        </ul>`
    },
    {
        category: 'Microsoft Office',
        title: 'Excel zahtevni tečaj',
        content: 'Excel zahtevni tečaj je primeren za vse, ki že poznate nadaljevalne funkcije Excela in bi radi svoje znanje nadgradili. V zahtevnem Excel tečaju se boste naučili dela z zelo naprednimi funkcijami in osnovami makrojev.',
        details: `<p class="mb-2 text-justify">Excel zahtevni tečaj je primeren za vse, ki že poznate nadaljevalne funkcije Excela in bi radi svoje znanje nadgradili. V zahtevnem Excel tečaju se boste naučili dela z zelo naprednimi funkcijami in osnovami makrojev.</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
        <li>Najprej si bomo ogledali napredno delo z seznami in bazami podatkov.</li>
        <li>Zamrzovali bomo vrstice in stolpce, razvrščali podatke, filtrirali podatke in ponovili osnove vrtilne tabele.</li>
        <li>S pisanjem formul se bomo sklicevali na druge delovne liste in zvezke in združevali bomo celice.</li>
        <li>Natančneje si bomo pogledali naprednejše funkcije kot so IF, AND, OR in VLOOKUP.</li>
        <li>Gnezdili bomo funkcije in uporabljali INDEX in MATCH.</li>
        </ul>`
    },
    {
        category: 'Microsoft Office',
        title: 'Napredni uporabnik Microsoft PowerPointa',
        content: 'PowerPoint tečaj je primeren za vse, ki želite ustvariti unikatne predstavitve, za nastope v službi ali pred drugim občinstvom.',
        details: `<p class="mb-2 text-justify">PowerPoint tečaj je primeren za vse, ki želite ustvariti unikatne predstavitve, za nastope v službi ali pred drugim občinstvom.</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
        <li>izdelava nove predstavitve, izbira oblike, dodajanje besedila in slik…</li>
        <li>oblikovanja besedila in okvirov z besedili.</li>
        <li>ustvarjanje oblike, tabele in grafikone.</li>
        <li>animacije, spreminjanje in dodajanje prehodov med diapozitivi in priprava diaprojekcije.</li>
        <li>Zagon diaprojekcij z poljubnim diapozitivom</li>
        <li>tiskanje, opombe</li>
        </ul>`
    },
    {
        category: 'Microsoft Office',
        title: 'Odlična prezentacija z uporabo PowerPoint-a',
        content: 'Za vse, ki želite ustvariti unikatne predstavitve za nastope v službi ali pred drugim občinstvom.',
        details: `<p class="mb-2 text-justify">Za vse, ki želite ustvariti unikatne predstavitve za nastope v službi ali pred drugim občinstvom.</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
        <li>Osnove: izdelava nove predstavitve, izbira oblike, dodajanje besedila in slik …</li>
        <li>Oblikovanje besedila in okvirčkov z besedili.</li>
        <li>Ustvarjanje oblik, tabel in grafikonov.</li>
        <li>Animacije, spreminjanje, prehodi med diapozitivi in priprava diaprojekcije.</li>
        <li>Tiskanje, opombe, popravljali napak.</li>
        </ul>
        <p class="mb-2 text-justify">Tečaj je namenjen vsem, ki si želijo izpopolniti svoje veščine ustvarjanja in izvajanja prepričljivih predstavitev.</p>
        <p class="mb-2 text-justify">Na tečaju boste pridobili znanje o načrtovanju privlačnih diapozitivov, izbiri ustreznih barv, pisav in vizualnih elementov za poudarjanje ključnih točk. Naučili se boste tudi kako vključiti grafične in multimedijske vsebine ter animacije, da bi ustvarili dinamično in zanimivo prezentacijo.</p>
        <p class="mb-2 text-justify">Poleg tega boste spoznali učinkovite tehnike za komuniciranje z občinstvom, premagovanje treme in izvedbo prepričljivega govorniškega nastopa.</p>`
    },
    {
        category: 'Microsoft Teams',
        title: 'Microsoft Teams',
        content: 'Tečaj je namenjen vsem, ki si želijo poenostaviti sodelovanje znotraj podjetja s pomočjo različnih komunikacijskih kanalov, ki jih ponuja MS Teams. S pomočjo aplikacije lahko dosežete hitro izmenjavo informacij, nalog, dokumentov in splošne boljše organiziranosti zaposlenih.',
        details: `<p class="mb-2 text-justify">Sodobno orodje za sodelovanje in delo v skupinah, ki prinaša zelo širok nabor funkcionalnosti.</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Hiter začetek.</li>
            <li>Uvod v Microsoft Teams.</li>
            <li>Nastavitev in prilagoditev ekipe.</li>
            <li>Sodelovanje v ekipah in kanalih.</li>
            <li>Delo z objavami in sporočili.</li>
            <li>Nalaganje in iskanje datotek.</li>
            <li>Začetek klepetov in klicev ter upravljanje srečanj.</li>
            <li>Dogodki v živo (priprava, udeležba), upravljanje urnikov.</li>
        </ul>
        <p class="mb-2 text-justify">Tečaj je namenjen vsem, ki si želijo poenostaviti sodelovanje znotraj podjetja s pomočjo različnih komunikacijskih kanalov, ki jih ponuja MS Teams. S pomočjo aplikacije lahko dosežete hitro izmenjavo informacij, nalog, dokumentov in splošne boljše organiziranosti zaposlenih.</p>
        <p class="mb-2 text-justify">Na tečaju bomo obravnavali in v praksi pokazali, kako delujejo določene funkcije:</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>delo v ekipah,</li>
            <li>objave in sporočila,</li>
            <li>nalaganje datotek,</li>
            <li>klepeti in klici,</li>
            <li>srečanja,</li>
            <li>dogodki v živo,</li>
            <li>dodatne aplikacije in orodja,</li>
            <li>urniki,</li>
            <li>mobilna aplikacija MS Teams</li>
        </ul>`
    },
    {
        category: 'AI',
        title: 'Umetna inteligenca - razlaga in uporaba',
        content: 'Ali želite spoznati, kako umetna inteligenca spreminja naš vsakdan? Na delavnici o umetni inteligenci vas bomo popeljali skozi najnovejša orodja, kot so ChatGPT, Microsoft Copilot, writesonic in Google Gemini, ter vam pokazali, kako jih lahko uporabljate za lažjo komunikacijo, reševanje problemov in kreiranje vsebin.',
        details: `<p class="mb-2 text-justify">ChatGPT, Microsoft Copilot, Google Gemini, ipd.</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Uvod v umetno inteligenco</li>
            <li>ChatGPT</li>
            <li>Writesonic</li>
            <li>Microsoft Copilot</li>
            <li>Google Gemini</li>
            <li>Pregled ostalih UI orodij</li>
        </ul>
        <p class="mb-2 text-justify">Ali želite spoznati, kako umetna inteligenca spreminja naš vsakdan? Na delavnici o umetni inteligenci vas bomo popeljali skozi najnovejša orodja, kot so ChatGPT, Microsoft Copilot, writesonic in Google Gemini, ter vam pokazali, kako jih lahko uporabljate za lažjo komunikacijo, reševanje problemov in kreiranje vsebin. Vse več poklicev zahteva razumevanje umetne inteligence, zato je zdaj pravi čas, da osvojite osnove, ne glede na vašo stopnjo digitalnega znanja.</p>
        <p class="mb-2 text-justify">Namen delavnice je podati osnovno razumevanje umetne inteligence in t.i. pogovornih modelov, ki so njena osnova, ter udeležence seznaniti z orodji, kot so ChatGPT, Microsoft Copilot , Writesonic in Google Gemini. Osredotočili se bomo na njihovo uporabo, možnosti prilagoditve za izboljšanje uporabniške izkušnje ter pregled zasebnostnih vprašanj, ki jih prinaša uporaba teh tehnologij.</p>
        <h2 class="text-lg font-bold mb-2">Vsebina delavnice:</h2>
        <ul class="list-disc list-inside text-left ms-6">
            <li>Osnove umetne inteligence in GPT jezikovnih modelov</li>
            <li>Pregled aktualnih UI orodij</li>
        </ul>
        <h3 class="text-md font-bold mb-2">ChatGPT</h3>
        <ul class="list-disc list-inside text-left ms-6">
            <li>Kaj je ChatGPT in njegova področja uporabe</li>
            <li>Praktična uporaba: učinkovito pisanje navodil (promptov) za optimalne odgovore</li>
            <li>Kreiranje slik</li>
            <li>Priprava odgovorov na elektronska sporočila</li>
            <li>Uporaba za matematične naloge in reševanje problemov</li>
            <li>Kreiranje objav za socialna omrežja</li>
            <li>Ustvarjanje drugih uporabnih vsebin</li>
            <li>Avtomatizacija s ChatGPT</li>
        </ul>
        <h3 class="text-md font-bold mb-2">Microsoft Copilot</h3>
        <ul class="list-disc list-inside text-left ms-6">
            <li>Kaj je Microsoft Copilot in njegove aplikacije</li>
            <li>Omejitve ter razlike v primerjavi s ChatGPT</li>
            <li>Praktična uporaba v kontekstu brskanja po internetu ter integracije v aplikacije Microsoft 365 (Word, Excel, PowerPoint, Teams, Outlook)</li>
        </ul>
        <h3 class="text-md font-bold mb-2">Google Gemini</h3>
        <ul class="list-disc list-inside text-left ms-6">
            <li>Kaj je Google Gemini in njegove ključne značilnosti</li>
            <li>Omejitve in področja uporabe</li>
            <li>Praktični prikaz: dodatne funkcionalnosti za brskanje in kreiranje vsebin</li>
            <li>Uporaba plačljivih verzij jezikovnih modelov</li>
        </ul>
        <h3 class="text-md font-bold mb-2">Kdo naj se udeleži?</h3>
        <ul class="list-disc list-inside text-left ms-6">
            <li>Vsi, ki želijo spoznati umetno inteligenco</li>
            <li>Vsi, ki želijo izboljšati delovne naloge v jezikovnih modelih kot npr. ChatGPT, Gemini…</li>
            <li>Vsi, ki želijo napredno spoznati inženiring pozivov v jezikovnih modelih</li>
            <li>Vsi, ki želijo razširiti nivo digitalnih kompetenc</li>
        </ul>`
    },
    {
        category: 'Oblak',
        title: 'Google Drive',
        content: 'Za vse, ki želijo obvladati uporabo Google Drive za delo v oblaku in izkoristiti vse možnosti, ki jih ponuja ta zmogljiva platforma. Udeleženci bodo spoznali, kako učinkovito shranjevati, organizirati in upravljati datoteke, kako uporabljati dokumente, preglednice, predstavitve.',
        details: `<p class="mb-2 text-justify">Delo v oblaku , dokumenti - skupna raba, oblikovanje obrazcev, delo s slikami.</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Ustvarjati, organizirati in deliti mape ter datoteke v Google Drive.</li>
            <li>Uporabljati Google Dokumente za urejanje, skupno rabo in sodelovanje v realnem času.</li>
            <li>Oblikovati in prilagajati obrazce z Google Forms.</li>
            <li>Upravljati, urejati in deliti fotografije z Google Foto.</li>
            <li>Sinhronizirati datoteke in podatke med računalnikom in Google Drive.</li>
        </ul>
        <p class="mb-2 text-justify">Več informacij</p>
        <p class="mb-2 text-justify">Ta tečaj je namenjen vsem, ki želijo obvladati uporabo Google Drive za delo v oblaku in izkoristiti vse možnosti, ki jih ponuja ta zmogljiva platforma. Udeleženci bodo spoznali, kako učinkovito shranjevati, organizirati in upravljati datoteke, kako uporabljati dokumente, preglednice, predstavitve.</p>`
    },
    {
        category: 'Grafično oblikovanje',
        title: 'Canva: enostavno grafično oblikovanje za vsakogar',
        content: 'S Canvo na preprost način oblikujemo brošure, vizitke in objave za socialne medije.',
        details: `<p class="mb-2 text-justify">S Canvo na preprost način oblikujemo brošure, vizitke in objave za socialne medije.</p>
        <ul class="list-disc list-inside mb-4 text-left ms-6">
            <li>Kaj je Canva in kako ustvarimo račun?</li>
            <li>Začetek prvega projekta.</li>
            <li>Spreminjanje osnovnih elementov in delo z grafiko.</li>
            <li>Delo z besedilnimi elementi ter nalaganje lastne grafike.</li>
            <li>Razumevanje različnih postavitev.</li>
            <li>Prenos projektov.</li>
            <li>Delite svoje projekte preko socialnih medijev.</li>
        </ul>
        <p class="mb-2 text-justify">Več informacij</p>
        <p class="mb-2 text-justify">Canva je spletno orodje, ki uporabnikom omogoča, da izbirate med več sto profesionalno oblikovanimi predlogami ali pa si sami ustvarite lastne projekte od začetka do konca. S Canvo lahko preprosto oblikujete predstavitve, plakate, infografike, objave za družabna omrežja, vizitke in še veliko več. Primerna je tako za domačo uporabo kot tudi za podjetja, ki dnevno potrebujejo nove in lepo oblikovane vizualne materiale.</p>
        <p class="mb-2 text-justify">Na tečaju si bomo najprej ustvarili Canva račun in se spoznali z navigacijo spletnega orodja. Preizkusili se bomo pri oblikovanju našega prvega Canva projekta ter spoznali, kako preprosto je dodajanje in urejanje besedil ter grafike. Naučili se bomo, kako naložiti slike in druge grafične elemente s spleta ali domačega računalnika ter kako končane projekte prenesti na svoj računalnik ali pa jih deliti na družabnih omrežjih.</p>`
    },


]);

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
                    <p class="mt-4 text-base font-normal text-gray-500 sm:text-xl dark:text-gray-400"></p>
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
