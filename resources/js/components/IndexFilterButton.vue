<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

defineProps({
    title: String,
    href: String,
});
</script>

<template>
    <Link
        :href
        class="text-sm px-4 py-1 border border-base-300 hover:border-primary font-thin transition-colors"
    >
        {{ title }}
    </Link>
</template>
