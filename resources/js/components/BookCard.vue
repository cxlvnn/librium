<template>
    <Link :href="`/books/${id}`">
        <div
            class="w-44 lg:w-48 flex flex-col gap-3 hover:[&_img]:border-primary!"
        >
            <div class="w-full aspect-2/3 overflow-hidden shadow-xl">
                <img
                    :src="book.source"
                    :alt="book.alt"
                    class="w-full h-full object-cover border border-base-300 transition-all"
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

                <BookStatus :status />
            </div>
        </div>
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import BookStatus from "./BookStatus.vue";

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
    id: Number,
});
</script>
