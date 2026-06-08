<template>
    <div class="w-75 lg:w-79 flex flex-col gap-3">
        <div class="w-full aspect-2/3 overflow-hidden shadow-xl">
            <img
                :src="book.source"
                :alt="book.alt"
                class="w-full h-full object-cover"
            />
        </div>
    </div>
</template>

<script setup>
const book = defineProps({
    source: String,
    alt: {
        type: String,
        default: "",
    },
});
</script>
