<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    href:String,
})
</script>

<template>
    <li>
        <Link :href="href"
            class="flex items-center p-2 pl-11 w-full text-base font-medium text-gray-900 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"><slot /></Link>
    </li>
</template>
