<script setup>
import { ref } from 'vue';
import { usePage } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

const props = defineProps({
    scrollTop: {
        default: 0,
        type: Number,
    },
});

const page = usePage();

const links = ref([
    { text: 'Spletni razvoj', href: page.props.currentRoute === 'index' ? '#web_design' : route('web-design') },
    { text: 'Izobraževanje', href: page.props.currentRoute === 'index' ? '#education' : route('education') },
    { text: 'Računalniški Servis', href: page.props.currentRoute === 'index' ? '#service' : route('service') },
    { text: 'Kontakt', href: page.props.currentRoute === 'index' ? '#contact' : route('contact') }
]);
</script>

<template>
    <Dropdown>
        <template #trigger>
            <button type="button"
                class="transition-all ease-in-out duration-300 inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                :class="{ 'text-xs': scrollTop > 100 }" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="transition-all ease-in-out duration-300" :class="scrollTop > 100 ? 'w-4 h-4' : 'w-5 h-5'"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
        </template>
        <template #content>
            <DropdownLink v-for="link in links" :key="link.href" :href="link.href" :scroll-top="scrollTop">
                {{ link.text }}
            </DropdownLink>
        </template>
    </Dropdown>
</template>
