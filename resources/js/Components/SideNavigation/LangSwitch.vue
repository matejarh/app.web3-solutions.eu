<script setup>
import BottomDropdown from "./BottomDropdown.vue";
import BottomDropdownItem from "./BottomDropdownItem.vue";
import FlagEnglishIcon from "@/Icons/FlagEnglishIcon.vue";
import FlagSlovenianIcon from "@/Icons/FlagSlovenianIcon.vue";
import { useForm } from "@inertiajs/vue3";

defineProps({ language: String });

const form = useForm({ language: "" });

const switchLanguage = (lang) => {
  form.language = lang;
  form.post(route("switch.language"), {
    preserveState: true,
  });
};
</script>

<template>
  <BottomDropdown>
    <template #trigger>
      <FlagEnglishIcon
        class="h-5 w-5 rounded-full mt-0.5"
        v-if="$page.props.language === 'en'"
      />
      <FlagSlovenianIcon
        class="h-5 w-5 rounded-full mt-0.5"
        v-if="$page.props.language === 'sl'"
      />
    </template>

    <BottomDropdownItem as="button" @click="switchLanguage('en')">
      <template #icon>
        <FlagEnglishIcon class="h-3.5 w-3.5 rounded-full mr-2" />
      </template>
      English (US)
    </BottomDropdownItem>
    <BottomDropdownItem as="button" @click="switchLanguage('sl')">
      <template #icon>
        <FlagSlovenianIcon class="h-3.5 w-3.5 rounded-full mr-2" />
      </template>
      Slovenski
    </BottomDropdownItem>
  </BottomDropdown>
</template>
