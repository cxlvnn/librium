<template>
    <div>Hello {{ user.name }}</div>
</template>

<script setup>
defineProps({
    user: Object,
});
</script>
