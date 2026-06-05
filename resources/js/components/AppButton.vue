<template>
    <button :class class="btn">{{ title }}</button>
</template>

<script setup>
const props = defineProps({
    title: String,
    class: String,
});
</script>
