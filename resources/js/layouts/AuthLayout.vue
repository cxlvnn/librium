<template>
    <div class="flex min-h-screen">
        <div class="flex flex-col justify-between p-10 bg-base-200 flex-1">
            <nav class="text-3xl font-medium font-serif">
                <h1><Link href="/">Librium</Link></h1>
            </nav>

            <div class="flex flex-col gap-2">
                <h2 class="text-2xl text-base-content/80 font-serif">
                    "{{ hadith }}"
                </h2>
                <p class="font-mono text-xs text-base-content/50 uppercase">
                    - {{ reference }}
                </p>
            </div>
        </div>

        <div class="flex items-center justify-center flex-1 w-full">
            <div class="w-full max-w-sm px-6">
                <slot />
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    hadith: String,
    reference: String,
});
</script>
