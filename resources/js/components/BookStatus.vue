<template>
    <span
        class="shrink-0 mt-0.5 px-2 py-0.5 text-[10px] font-mono uppercase tracking-wider border border-primary/30 text-primary"
        :class="{ 'border-accent! text-accent!': status == 'Reading' }"
    >
        {{ status }}
    </span>
</template>

<script setup>
defineProps({
    status: String,
});
</script>
