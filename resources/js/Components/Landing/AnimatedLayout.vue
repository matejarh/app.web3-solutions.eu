<script setup>
import { onMounted, ref } from "vue";

defineProps({
  animationType: {
    default: "fade",
    type: String,
  },
});

const target = ref();
const animate = ref(false);

const observer = new IntersectionObserver(
  ([entry]) => {
    const { isIntersecting } = entry;
    if (isIntersecting) {
      animate.value = isIntersecting;
    }
  },
  {
    threshold: 0.8,
  }
);

onMounted(() => {
  observer.observe(target.value);
});
</script>

<template>
  <div ref="target" class="min-h-[20vh]">
    <Transition enter-active-class="animate__animated animate__bounceInUp">
      <div v-show="animate">
        <slot />
      </div>
    </Transition>
  </div>
</template>
