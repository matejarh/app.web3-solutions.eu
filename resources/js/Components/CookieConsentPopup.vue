<script setup>
import { ref, onMounted } from 'vue';

const showConsent = ref(false);

const acceptCookies = () => {
    showConsent.value = false;
    // You can add logic to store the user's consent in local storage or a cookie
    localStorage.setItem('cookieConsent', 'true');
};

// Check if the user has already accepted cookies
if (localStorage.getItem('cookieConsent') !== 'true') {
    onMounted(() => {
        setTimeout(() => {
            showConsent.value = true;
        }, 1000);
    });
}
</script>

<template>
    <transition name="slide-up">
        <div v-if="showConsent" class="fixed bottom-0 left-0 right-0 bg-gray-800 text-white p-4 z-50">
            <div class="container mx-auto flex justify-between items-center">
                <p class="text-sm">
                    Za izboljšanje vaše izkušnje na naši strani uporabljamo piškotke. Z uporabo naše strani se strinjate z uporabo piškotkov.
                </p>
                <button @click="acceptCookies" class="bg-primary-700 hover:bg-primary-800 text-white font-bold py-2 px-4 rounded">
                    Sprejmi
                </button>
            </div>
        </div>
    </transition>
</template>

<style scoped>
.container {
    max-width: 1200px;
    margin: 0 auto;
}

.slide-up-enter-active, .slide-up-leave-active {
    transition: transform 0.5s ease;
}

.slide-up-enter, .slide-up-leave-to {
    transform: translateY(100%);
}
</style>
