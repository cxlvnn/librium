<template>
    <button
        :class="
            type === 'primary'
                ? 'bg-neutral-800 text-zinc-100 border-neutral-500 hover:bg-neutral-900 active:bg-neutral-900/90'
                : ''
        "
        class="py-2 px-4 rounded border hover:cursor-pointer transition-colors"
    >
        {{ text }}
    </button>
</template>

<script setup>
const props = defineProps({
    text: String,
    type: {
        type: String,
        default: "primary",
    },
});
</script>
