<script setup>
defineProps({
    href: String,
    as: {
        default: 'link',
        type: String,
    },
    type: {
        default: 'button',
        type: String,
    },
    active: {
        default: false,
        type: Boolean,
    },
    classes: {
        default: () => [],
        type: Array,
    },

})

defineEmits(['clicked'])
</script>
<template>
    <li>
        <inertia-link v-if="(as === 'link')" :href="href"
            class="block py-2 px-4 text-sm hover:bg-primary-100 dark:hover:bg-primary-600 dark:text-primary-400 dark:hover:text-white"
            :class="classes">
            <slot />
        </inertia-link>

        <button :type="type" @click="$emit('clicked')"
            class="block w-full py-2 px-4 text-sm hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white"
            :class="classes"
            :disabled="active"
            :aria-current="active ? 'page' : undefined"
            v-if="(as === 'button' || as === 'submit')">
            <slot />
        </button>
    </li>
</template>
