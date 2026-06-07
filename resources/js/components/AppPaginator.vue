<script setup lang="ts">
import { Link } from "@inertiajs/vue3";

defineProps({
    links: Object,
});
</script>

<template>
    <template v-for="link in links">
        <Link
            v-if="link.url"
            :href="link.url"
            :class="{
                'bg-primary hover:border-primary/80! text-base-100!':
                    link.active,
            }"
            class="border font-bold border-primary px-4 hover:border-accent/90 text-primary"
        >
            <span v-html="link.label" />
        </Link>
        <span
            class="cursor-default border px-4 text-neutral-500"
            v-else
            v-html="link.label"
        />
    </template>
</template>
