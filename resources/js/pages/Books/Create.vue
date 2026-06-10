<template>
    <div class="my-10">
        <h1 class="text-5xl font-serif">Add a book.</h1>
    </div>

    <div class="flex my-8 gap-8">
        <div>
            <BookEmptyCard />

            <div class="mt-3">
                <div
                    class="flex items-center justify-center gap-2 border py-2 hover:cursor-pointer"
                >
                    <IconUpload class="text-white" />
                    <label
                        class="text-sm font-mono uppercase font-thin text-primary hover:cursor-pointer"
                        for="upload-cover"
                        >Upload image</label
                    >
                    <input type="file" id="upload-cover" name="photo" hidden />
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import BookEmptyCard from "../../components/BookEmptyCard.vue";
import IconUpload from "../../components/icons/IconUpload.vue";
</script>
