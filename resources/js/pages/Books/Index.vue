<template>
    <div
        class="flex items-center py-5 my-5 justify-between border-b border-base-300"
    >
        <div class="text-5xl font-serif">
            <h1>Your shelf</h1>
        </div>

        <div>
            <Link href="/books/create">
                <AppButton class="btn btn-primary" title="+ Add a book" />
            </Link>
        </div>
    </div>

    <div class="flex flex-row items-center justify-between mb-2">
        <div class="flex items-center gap-1">
            <Link
                as="button"
                class="text-sm bg-primary px-4 py-1 text-base-200 font-thin"
                >All</Link
            >
            <Link
                as="button"
                class="text-sm px-4 py-1 font-medium border border-neutral-800 hover:border-primary hover:text-primary"
                >Reading</Link
            >
            <Link
                as="button"
                class="text-sm px-4 py-1 font-medium border border-neutral-800 hover:border-primary hover:text-primary"
                >Read</Link
            >
        </div>

        <div class="flex items-center">
            <div class="relative w-64">
                <IconMagnifier
                    class="pointer-events-none absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-primary/70"
                />
                <input
                    type="search"
                    v-model="search"
                    class="w-full border border-neutral-800 bg-transparent py-2 pl-10 pr-3 font-mono text-sm outline-none focus:border-primary"
                    placeholder="Search title or author"
                />
            </div>
        </div>
    </div>

    <div
        class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 md:gap-10 py-6"
    >
        <BookCard
            v-for="book in books.data"
            source="/images/manhaj-as-salikeen.jpg"
            :title="book.title"
            :author="book.author"
            status="Reading"
        />
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import AppButton from "../../components/AppButton.vue";
import BookCard from "../../components/BookCard.vue";
import IconMagnifier from "../../components/icons/IconMagnifier.vue";

defineProps({
    books: Array,
});
</script>
