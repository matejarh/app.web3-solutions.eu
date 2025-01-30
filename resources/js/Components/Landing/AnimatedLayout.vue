<script setup>
import { onMounted, ref, Transition } from "vue";

const props = defineProps({
  animationType: {
    default: "animate__animated animate__bounceInUp",
    type: String,
  },
  delay: {
    default: 0,
    type: Number,
  },
});

const target = ref();
const animate = ref(false);

const observer = new IntersectionObserver(
  ([entry]) => {
    const { isIntersecting } = entry;
    if (isIntersecting) {
        setTimeout(() => {
            animate.value = isIntersecting;
        }, props.delay);
      // animate.value = isIntersecting;
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
    <Transition :enter-active-class="animationType">
      <div v-show="animate">
        <slot />
      </div>
    </Transition>
  </div>
</template>
