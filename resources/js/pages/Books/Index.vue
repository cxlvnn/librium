<template>
    <div
        class="flex items-center py-5 my-5 justify-between border-b border-base-300">
        <div class="text-5xl font-serif">
            <h1>Your shelf</h1>
        </div>

        <div>
            <Link href="/books/create">
                <AppButton class="btn btn-primary" title="+ Add a book" />
            </Link>
        </div>
    </div>

    <div
        class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 md:gap-10 py-6">
        <BookCard
            source="/images/manhaj-as-salikeen.jpg"
            title="Manhaj as-Salikeen"
            author="Shaykh Nasir As Sa'di"
            status="Reading"
        />
        <BookCard
            source="/images/sahih-al-bukhari.jpg"
            title="Sahih al-Bukhari"
            author="Imam Muhammad ibn Ismail al-Bukhari"
            status="Completed"
        />
        <BookCard
            source="/images/manhaj-as-salikeen.jpg"
            title="Manhaj as-Salikeen"
            author="Shaykh Nasir As Sa'di"
            status="Reading"
        />
        <BookCard
            source="/images/sahih-al-bukhari.jpg"
            title="Sahih al-Bukhari"
            author="Imam Muhammad ibn Ismail al-Bukhari"
            status="Completed"
        />
        <BookCard
            source="/images/three-fundamental-principles.jpg"
            title="The Three Fundamental Principles"
            author="Shaykh Muhammad ibn Abdul Wahhab"
            status="To Read"
        />
        <BookCard
            source="/images/manhaj-as-salikeen.jpg"
            title="Manhaj as-Salikeen"
            author="Shaykh Nasir As Sa'di"
            status="Reading"
        />
        <BookCard
            source="/images/sahih-al-bukhari.jpg"
            title="Sahih al-Bukhari"
            author="Imam Muhammad ibn Ismail al-Bukhari"
            status="Completed"
        />
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import AppButton from "../../components/AppButton.vue";
import BookCard from "../../components/BookCard.vue";

// In real usage this comes from Inertia props
// defineProps({
//     books: Array,
// });
</script>
