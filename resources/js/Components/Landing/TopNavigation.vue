<script setup>
import { ref } from 'vue';
import { HomeIcon } from '@heroicons/vue/24/solid';
import MobileMenu from '@/Components/MobileMenu.vue';
import NavItem from './NavItem.vue';
import ApplicationLogo from '../TopNavigation/ApplicationLogo.vue';
import LangSwitch from '../TopNavigation/LangSwitch.vue';

const props = defineProps({
    scrollTop: {
        default: 0,
        type: Number,
    },
});

const navItems = ref([
    { text: 'Web Development', routeName: 'web-design', hash: '#web_design' },
    { text: 'Education', routeName: 'education', hash: '#education' },
    { text: 'Computer Service', routeName: 'service', hash: '#service' },
    { text: 'Other Services', routeName: 'services', hash: '#services' },
    { text: 'Contact', routeName: 'contact', hash: '#contact' }
]);
</script>

<template>
    <nav class="fixed w-full z-20 top-0 start-0 transition-all ease-in-out duration-300"
        :class="scrollTop > 100 ? 'bg-primary-600 dark:bg-primary-950 bg-opacity-95' : 'bg-transparent'">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <ApplicationLogo :size="scrollTop > 100 ? 'small' : 'default'" />

            <div class="flex items-center md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <LangSwitch class="" />
                <MobileMenu :scroll-top="scrollTop" :nav-items="navItems" />
            </div>

            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 lg:p-0 mt-4 font-medium border rounded-lg lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0">
                    <NavItem as="link" :link="route('index')" :scroll-top="scrollTop">
                        <HomeIcon class="transition-all duration-300 ease-in-out mt-1"
                            :class="scrollTop > 100 ? 'w-3 h-3' : 'w-4 h-4'" />
                    </NavItem>
                    <template v-for="item in navItems" :key="item.routeName">
                        <NavItem v-if="$page.props.currentRoute === 'index'" :link="item.hash" :scroll-top="scrollTop">
                            {{ __(item.text) }}
                        </NavItem>
                        <NavItem v-else as="link" :link="route(item.routeName)" :scroll-top="scrollTop">
                            {{ __(item.text) }}
                        </NavItem>
                    </template>
                </ul>

            </div>
        </div>
    </nav>
</template>
