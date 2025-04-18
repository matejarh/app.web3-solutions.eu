<script setup>
import { ref } from 'vue';
import { usePage } from '@inertiajs/vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import Hamburger from './Hamburger.vue';

const props = defineProps({
    scrollTop: {
        default: 0,
        type: Number,
    },
    navItems: {
        type: Array,
        required: true,
    },
});

const isOpened = ref(false);
const handleIsOpened = (value) => {
    isOpened.value = value;
};

const page = usePage();

const links = ref(props.navItems.map(item => ({
    text: item.text,
    href: page.props.currentRoute === 'index' ? item.hash : route(item.routeName)
})));
</script>

<template>
    <Dropdown @is-opened="handleIsOpened" class="block lg:hidden" :is-open="isOpened" align="right" width="48">
        <template #trigger>
            <Hamburger :is-open="isOpened" @toggle="" :scroll-top="scrollTop" />
        </template>

        <template #content>
            <DropdownLink v-for="link in links" :key="link.href" :href="link.href" :scroll-top="scrollTop">
                {{ link.text }}
            </DropdownLink>
        </template>
    </Dropdown>
</template>
