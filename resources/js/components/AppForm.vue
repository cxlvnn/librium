<template>
    <form>
        <h1 class="text-4xl mb-6 font-serif">{{ title }}</h1>
        <slot></slot>
    </form>
</template>

<script setup>
const props = defineProps({
    title: String,
});
</script>
