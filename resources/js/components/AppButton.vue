<template>
    <button :class class="btn font-mono">{{ title }}</button>
</template>

<script setup>
const props = defineProps({
    title: String,
    class: String,
});
</script>
