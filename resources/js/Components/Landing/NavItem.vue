<script setup>
import { Link, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps({
    scrollTop: Number,
    link: String,
    as: {
        type: String,
        default: 'a'
    }
})

const page = usePage()

const activeClasses = computed(() => {
    return page.props.currentRoute === props.link ? 'text-sm text-primary-100' : 'text-primary-900';
})
</script>

<template>
    <li v-if="as === 'link'">
        <Link :href="link" :class="  scrollTop > 100 ?'text-sm text-primary-100': 'text-primary-900'"
            class="transition-all ease-in-out duration-300 block py-2 px-3  dark:text-primary-100 rounded md:hover:bg-transparent md:hover:text-primary-700 md:p-0 md:dark:hover:text-primary-500  dark:shadow-gray-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-primary-700"
            aria-current="page">
            <slot />
        </Link>
    </li>
    <li v-else>
        <a :href="link" :class="  scrollTop > 100 ?'text-sm text-primary-100': 'text-primary-900'"
            class="transition-all ease-in-out duration-300 block py-2 px-3  dark:text-primary-100 rounded md:hover:bg-transparent md:hover:text-primary-700 md:p-0 md:dark:hover:text-primary-500  dark:shadow-gray-800 dark:hover:text-white md:dark:hover:bg-transparent dark:border-primary-700"
            aria-current="page">
            <slot />
        </a>
    </li>
</template>

