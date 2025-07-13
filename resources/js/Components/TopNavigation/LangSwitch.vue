<script setup>
import { useForm } from "@inertiajs/vue3";
import FlagEnglishIcon from "@/Icons/FlagEnglishIcon.vue";
import FlagSlovenianIcon from "@/Icons/FlagSlovenianIcon.vue";
import NavDropdown from "./NavDropdown.vue";
import DropdownItem from "./DropdownItem.vue";

const form = useForm({ locale: "" });

const switchLanguage = (lang) => {
    form.locale = lang;
    form.post(route("switch.language"), {
        preserveScroll: true,
        preserveState: false,
    });
};

const languages = [
    {
        code: "en",
        name: "English",
        icon: FlagEnglishIcon,
    },
    {
        code: "sl",
        name: "Slovenski",
        icon: FlagSlovenianIcon,
    },
];
</script>

<template>
    <NavDropdown>
        <template #trigger>

                <component
                    :is="languages.find(lang => lang.code === $page.props.translations.locale)?.icon"
                    class="size-6 rounded-full"
                />
        </template>
        <ul>
            <DropdownItem
                v-for="language in languages"
                :key="language.code"
                as="button"
                :active="$page.props.translations.locale === language.code"
                :classes="['flex items-center', $page.props.translations.locale === language.code ? 'text-primary-600 dark:text-primary-400 cursor-disabled' : 'text-gray-900 dark:text-gray-400']"
                @click="switchLanguage(language.code)"
            >
                <template #icon>
                    <component
                        :is="language.icon"
                        class="h-3.5 w-3.5 rounded-full mr-2"
                    />
                </template>
                {{ language.name }}
            </DropdownItem>
        </ul>
    </NavDropdown>
</template>
