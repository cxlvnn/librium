<template>
    <div class="w-36 lg:w-44 aspect-[2/3] rounded overflow-hidden shadow-2xl">
        <img :src="img.source" :alt="img.alt" class="w-full h-full object-cover" />
    </div>
</template>

<script setup>
const img = defineProps({
    source: String,
    alt: {
        type: String,
        default: "Book cover",
    },
});
</script>
