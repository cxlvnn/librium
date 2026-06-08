<template>
    <div class="my-5">
        <AppBackButton />
    </div>

    <div class="flex my-8 gap-8">
        <div>
            <BookCover source="/images/manhaj-as-salikeen.jpg" />

            <div class="flex flex-col mt-3">
                <Link
                    class="btn font-mono font-light text-xs uppercase btn-primary mb-2"
                    :href="`/books/edit/${book.id}`"
                    as="button"
                >
                    <IconEdit /> Edit
                </Link>
                <Link
                    class="btn font-mono font-ligt text-xs uppercase bg-transparent border-primary/20 hover:border-red-500 hover:text-red-500"
                    :href="`/books/${book.id}`"
                    method="delete"
                    as="button"
                >
                    <IconDelete /> Delete
                </Link>
            </div>
        </div>

        <div>
            <div class="border-b border-base-300">
                <BookStatus status="Reading" />

                <h1 class="font-medium py-3 text-5xl">{{ book.title }}</h1>

                <p
                    class="font-mono font-thin uppercase text-xs tracking-widest text-primary/50"
                >
                    By {{ book.author }}
                </p>

                <p class="font-sans py-10 text-primary/90">
                    {{ book.description }}
                </p>
            </div>

            <div class="py-6">
                <p class="text-xl pb-2">Notes</p>
                <p class="font-sans text-primary/90">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad,
                    sit?
                </p>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

import BookCover from "../../components/BookCover.vue";
import BookStatus from "../../components/BookStatus.vue";
import IconEdit from "../../components/icons/IconEdit.vue";
import IconDelete from "../../components/icons/IconDelete.vue";
import AppBackButton from "../../components/AppBackButton.vue";

defineProps({
    book: Object,
});
</script>
