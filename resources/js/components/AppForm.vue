<template>
    <form>
        <h1 class="text-5xl mb-6">{{ title }}</h1>
        <slot></slot>
    </form>
</template>

<script setup>
const props = defineProps({
    title: String,
});
</script>
