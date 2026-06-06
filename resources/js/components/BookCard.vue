<template>
    <div class="w-44 lg:w-48 flex flex-col gap-3">
        <div class="w-full aspect-2/3 overflow-hidden shadow-xl">
            <img
                :src="book.source"
                :alt="book.alt"
                class="w-full h-full object-cover"
            />
        </div>

        <div class="flex items-start gap-2 min-w-0">
            <div class="flex-1 min-w-0 flex flex-col gap-0.5">
                <h3
                    class="font-serif text-lg leading-tight text-primary line-clamp-1"
                    :title="book.title"
                >
                    {{ book.title }}
                </h3>

                <p
                    class="font-sans text-xs uppercase tracking-wide text-base-content/50 truncate"
                    :title="book.author"
                >
                    {{ book.author }}
                </p>
            </div>

            <span
                v-if="book.status"
                class="shrink-0 mt-0.5 px-2 py-0.5 text-[10px] font-mono uppercase tracking-wider border border-accent text-accent"
            >
                {{ book.status }}
            </span>
        </div>
    </div>
</template>

<script setup>
const book = defineProps({
    source: String,
    alt: {
        type: String,
        default: "Book cover",
    },
    title: {
        type: String,
        default: "Untitled",
    },
    author: {
        type: String,
        default: "Unknown Author",
    },
    status: {
        type: String,
        default: "",
    },
});
</script>
