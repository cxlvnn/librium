<template>
    <Link
        href="/books"
        class="font-mono font-thin uppercase text-xs tracking-widest text-primary/50"
    >
        <div class="flex gap-2"><IconArrowLeft /> {{ title }}</div>
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import IconArrowLeft from "./icons/IconArrowLeft.vue";

defineProps({
    title: {
        type: String,
        default: "All books",
    },
});
</script>
