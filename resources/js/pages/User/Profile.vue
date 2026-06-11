<template>
    <div>
        <h1>Hello {{ user.name }}</h1>
    </div>
</template>

<script setup>
defineProps({
    user: Object,
});
</script>
