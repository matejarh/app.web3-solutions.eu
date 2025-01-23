<script setup>
defineProps({
    toastProps: Object,
    closeToast: Function,
})
</script>

<template>
<div>
    <p>I am a vue component</p>
    <p>Position: {{ toastProps?.position }}</p>
    <button
      @click="($event) => { closeToast && closeToast($event) }"
    >
      Click me to close toast
    </button>
  </div>
</template>
