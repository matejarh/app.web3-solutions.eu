<script setup>
import { ArrowRightIcon } from '@heroicons/vue/24/solid';
import { ref } from 'vue';

const showDetails = ref(false);
</script>

<template>
    <div class="flex flex-col  shadow-sm p-6 bg-white dark:bg-gray-800 dark:text-gray-300 rounded-lg">
        <div class="flex-grow space-y-4 mb-4">
            <span
                class="bg-gray-100 text-gray-900 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                <slot name="category">Category</slot>
            </span>
            <h3 class="text-2xl font-bold leading-tight text-gray-900 dark:text-white">
                <slot name="title">Title</slot>
            </h3>
            <p class="text-lg font-normal text-gray-500 dark:text-gray-400">
                <slot name="content">Content</slot>
            </p>

        </div>


        <div class="mt-auto">
            <button @click="showDetails = !showDetails"
                class="text-white bg-primary-700 justify-center hover:bg-primary-800 inline-flex items-center focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800"
                role="button">
                Poglej podrobnosti
                <ArrowRightIcon class="w-5 h-5 ml-2 -mr-1" />
            </button>
        </div>

    </div>
</template>
