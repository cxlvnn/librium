<template>
    <div>
        <Button text="Click me" />
        <h1>{{ data.name }}</h1>
    </div>
</template>

<script setup>
import Button from "../components/Button.vue";

defineProps({
    data: Object,
});
</script>
