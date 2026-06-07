<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

defineProps({
    title: String,
});
</script>

<template>
    <Link
        as="button"
        class="text-sm px-4 py-1 border border-base-300 hover:border-primary font-thin transition-colors"
    >
        {{ title }}
    </Link>
</template>
