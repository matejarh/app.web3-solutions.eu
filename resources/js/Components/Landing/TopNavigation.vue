<script setup>
import { watch } from "vue";
import ApplicationLogo from "../TopNavigation/ApplicationLogo.vue";
import NavItem from "./NavItem.vue";
import LangSwitch from "../TopNavigation/LangSwitch.vue";
import MobileMenu from "../MobileMenu.vue";
import { HomeIcon } from "@heroicons/vue/24/solid";

const props = defineProps({
    scrollTop: Number,
});

watch(
    () => props.scrollTop,
    () => {
        // console.log(props.scrollTop)
    }
);
</script>

<template>
    <nav class="fixed w-full z-20 top-0 start-0 transition-all ease-in-out duration-300"
        :class="scrollTop > 100 ? 'bg-primary-950 bg-opacity-95' : 'bg-transparent'">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <ApplicationLogo :size="scrollTop > 100 ? 'small' : 'default'" />

            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">

                <!-- <Link
                    :href="route('dashboard')"
                    class="hidden sm:block transition-all ease-in-out duration-300 text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                    :class="{ 'text-xs': scrollTop > 100 }"
                    >Get started
                    </Link> -->
                <!-- <ThemeSwitch /> -->

                <LangSwitch />

                <MobileMenu :scroll-top="scrollTop" />



            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0">
                    <NavItem as="link" :link="route('index')" :scroll-top="scrollTop">
                        <HomeIcon class="transition-all duration-300 ease-in-out mt-1"
                            :class="scrollTop > 100 ? 'w-3 h-3' : 'w-4 h-4'" />
                    </NavItem>

                    <NavItem v-if="$page.props.currentRoute == 'index'" link="#web_design" :scroll-top="scrollTop">
                        Izdelava spletnih strani</NavItem>
                    <NavItem v-else as="link" :link="route('web-design')" :scroll-top="scrollTop">Izdelava spletnih
                        strani</NavItem>

                    <NavItem v-if="$page.props.currentRoute == 'index'" link="#education" :scroll-top="scrollTop">
                        Izobraževanje</NavItem>
                    <NavItem v-else as="link" :link="route('education')" :scroll-top="scrollTop">Izobraževanje</NavItem>


                    <NavItem v-if="$page.props.currentRoute == 'index'" link="#service" :scroll-top="scrollTop">Servis
                    </NavItem>
                    <NavItem v-else as="link" :link="route('service')" :scroll-top="scrollTop">Servis</NavItem>

                    <NavItem v-if="$page.props.currentRoute == 'index'" link="#contact" :scroll-top="scrollTop">Kontakt
                    </NavItem>
                    <NavItem v-else as="link" :link="route('contact')" :scroll-top="scrollTop">Kontakt</NavItem>
                </ul>
            </div>


        </div>
    </nav>
</template>
