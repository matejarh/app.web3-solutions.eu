<script setup>
import AnimatedLayout from './AnimatedLayout.vue';

</script>

<template>
    <AnimatedLayout>
        <section class="">
            <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">
                    Kontaktirajte nas</h2>
                <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Imate
                    vprašanja? Pišite nam in odgovorili vam bomo v najkrajšem možnem času.</p>
                <div class="space-y-8">
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                        <a href="mailto:info@web3-solutions.eu" class="text-gray-900 dark:text-gray-300"
                            target="_blank">info@web3-solutions.eu</a>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Telefon</label>
                        <p class="text-gray-900 dark:text-gray-300">+386 70 481 181</p>
                    </div>
                    <div>
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Naslov</label>
                        <p class="text-gray-900 dark:text-gray-300">Web3 Solutions, Kamna Gorica 61, 4246 Kamna Gorica,
                            Slovenija</p>
                    </div>
                </div>
            </div>
        </section>
    </AnimatedLayout>
</template>
