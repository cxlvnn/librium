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
        class="text-[0.7em] px-4 uppercase font-mono py-1 tracking-widest border border-base-300 hover:border-primary font-thin transition-colors"
    >
        {{ title }}
    </Link>
</template>
