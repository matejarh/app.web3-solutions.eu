<script setup>
defineProps({
    route: {type: String, default: 'dashboard'},
});
</script>

<template>
    <Link :href="route(route)"
        class="hidden sm:block transition-all ease-in-out duration-300 text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
        :class="{ 'text-xs': scrollTop > 100 }">
        <slot></slot>
    </Link>

</template>
