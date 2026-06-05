<template>
    <div class="flex min-h-screen">
        <div class="flex flex-col justify-between p-10 bg-base-200 flex-1">
            <nav class="text-2xl font-medium font-serif">
                <h1><Link href="/">Librium</Link></h1>
            </nav>

            <div class="flex flex-col gap-2">
                <h2 class="text-base-content/80 font-serif">
                    "If Allah wants to do good to a person, He makes him
                    comprehend the religion."
                </h2>
                <p class="font-mono text-xs text-base-content/50 uppercase">
                    - Sahih al-Bukhari 71
                </p>
            </div>
        </div>

        <div class="flex items-center justify-center flex-1 w-full">
            <div class="flex w-fit justify-center">
                <slot />
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
