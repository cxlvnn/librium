<template>
    <div class="my-10">
        <h1 class="text-5xl font-serif">Add a book.</h1>
    </div>

    <Form action="/books" method="POST" enctype="multipart/form-data" class="flex gap-8 items-start">
        <div class="w-75 lg:w-79 shrink-0">
            <p
                class="font-mono uppercase text-xs text-base-content/60 tracking-wide block mb-2"
            >
                Cover
            </p>
            <label for="upload-cover" class="block cursor-pointer group">
                <div
                    class="w-full aspect-2/3 overflow-hidden shadow-xl flex items-center justify-center transition-all duration-200"
                    :class="coverPreview
                        ? 'border border-base-300'
                        : 'border-2 border-dashed border-base-300 hover:border-accent'"
                >
                    <img
                        v-if="coverPreview"
                        :src="coverPreview"
                        class="w-full h-full object-cover"
                    />

                    <div
                        v-else
                        class="flex flex-col items-center gap-3 text-base-content/40 group-hover:text-accent transition-colors duration-200"
                    >
                        <span class="inline-flex items-center justify-center size-12">
                            <IconUpload />
                        </span>
                        <span class="font-mono text-xs uppercase tracking-wider">
                            Upload cover
                        </span>
                    </div>
                </div>
            </label>

            <input
                type="file"
                id="upload-cover"
                name="photo"
                hidden
                accept="image/*"
                @change="onCoverChange"
            />
        </div>

        <div class="flex-1 space-y-10">
            <AppInput label="Title" name="title" placeholder="Atomic habits" />
            <AppInput label="Author" name="author" placeholder="John Doe" />

            <div class="flex gap-5 items-end">
                <div class="w-122 shrink-0">
                    <AppInput
                        label="Year"
                        name="published_year"
                        placeholder="1998"
                    />
                </div>
                <label class="flex-1">
                    <span
                        class="font-mono uppercase text-xs text-base-content/60 tracking-wide block mb-2"
                        >Status</span
                    >
                    <select
                        name="status"
                        class="w-full py-3 bg-transparent outline-none border-0 border-b border-base-content/20 focus:border-accent transition-colors font-sans appearance-none cursor-pointer"
                    >
                        <option>Reading</option>
                        <option>Read</option>
                    </select>
                </label>
            </div>

            <AppTextarea label="Description" name="description" />

            <div class="space-x-3">
                <button
                    class="btn btn-primary text-xs font-mono uppercase tracking-widest font-light"
                    type="submit"
                >
                    Add to shelf
                </button>

                <Link
                    class="btn bg-transparent border border-primary/20 hover:border-primary text-xs font-mono uppercase tracking-widest font-light"
                    as="button"
                    href="/books"
                >
                    Cancel
                </Link>
            </div>
        </div>
    </Form>
</template>

<script setup>
import { ref } from "vue";
import { Form, Link } from "@inertiajs/vue3";

import IconUpload from "../../components/icons/IconUpload.vue";
import AppInput from "../../components/AppInput.vue";
import AppTextarea from "../../components/AppTextarea.vue";

const coverPreview = ref(null);

const onCoverChange = (event) => {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = (e) => {
            coverPreview.value = e.target.result;
        };
        reader.readAsDataURL(file);
    }
};
</script>
