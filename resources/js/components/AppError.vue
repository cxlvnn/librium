<template>
    <div v-if="message" class="text-red-500 font-mono text-sm mt-2">
        {{ message }}
    </div>
</template>

<script setup>
const props = defineProps({
    message: String,
});
</script>
