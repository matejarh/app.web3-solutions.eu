<script setup>
import { ref } from 'vue';
import AnimatedLayout from "@/Components/Landing/AnimatedLayout.vue";
import Logo from "../../../images/logo_z_napisi.svg";
import LogoDark from "../../../images/logo_z_napisi_dark.svg";

const companyInfo = ref({
    name: "WEB3-SOLUTIONS",
    owner: "MATEJ ARH, INFORMACIJSKA TEHNOLOGIJA S.P.",
    address: "KAMNA GORICA 12a, 4246 KAMNA GORICA",
    taxNumber: "55879250",
    trr: "SI56 0400 0028 1812 683"
});
</script>

<template>
    <AnimatedLayout>
        <section class=" py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="text-center">
                <!-- <img :src="Logo" alt="Company Logo" class="mx-auto mb-4 dark:hidden" />
                <img :src="LogoDark" alt="Company Logo Dark" class="mx-auto mb-4 hidden dark:block" /> -->
                <h2 class="text-4xl font-extrabold text-gray-900 dark:text-white mb-4">{{ companyInfo.name }}</h2>
                <p class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">{{ companyInfo.owner }}</p>
                <p class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">{{ companyInfo.address }}</p>
                <p class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">Davčna številka: {{ companyInfo.taxNumber }}</p>
                <p class="text-lg font-medium text-gray-700 dark:text-gray-300 mb-2">TRR: {{ companyInfo.trr }}</p>
            </div>
        </section>
    </AnimatedLayout>
</template>
