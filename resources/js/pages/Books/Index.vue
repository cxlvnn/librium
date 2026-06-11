<template>
    <div
        class="flex items-center py-5 my-5 justify-between border-b border-base-300"
    >
        <div class="">
            <h1 class="text-5xl font-serif">Your shelf</h1>
            <p class="text-xs text-primary/50 font-mono mt-2 uppercase">
                20 books &middot; 10 in progress
            </p>
        </div>

        <div>
            <Link
                href="/books/create"
                class="btn btn-primary font-mono"
                as="button"
                >+ Add a book</Link
            >
        </div>
    </div>

    <div class="flex flex-row items-center justify-between mb-2">
        <div class="flex items-center gap-1">
            <IndexFilterButton class="border-primary" title="All" />
            <IndexFilterButton title="Reading" />
            <IndexFilterButton title="Read" />
        </div>

        <div class="flex items-center">
            <div class="relative w-64">
                <IconMagnifier
                    class="pointer-events-none absolute left-3 top-1/2 h-5 w-5 -translate-y-1/2 text-primary/70"
                />
                <input
                    type="search"
                    class="w-full border border-base-300 transition-colors bg-transparent py-2 pl-10 pr-3 font-mono text-sm outline-none focus:border-primary"
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
            :id="book.id"
            source="/images/manhaj-as-salikeen.jpg"
            :title="book.title"
            :author="book.author"
            status="Reading"
        />
    </div>

    <div class="flex gap-1 justify-center my-6">
        <AppPaginator :links="books.links" />
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import BookCard from "../../components/BookCard.vue";
import IconMagnifier from "../../components/icons/IconMagnifier.vue";
import IndexFilterButton from "../../components/IndexFilterButton.vue";
import AppPaginator from "../../components/AppPaginator.vue";

defineProps({
    books: Object,
});
</script>
