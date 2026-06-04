<template>
    <div class="border-b border-secondary bg-base-100">
        <div
            class="max-w-5xl mx-auto px-4 py-4 flex items-center justify-between"
        >
            <div class="text-2xl">
                <h1><Link href="/">Librium</Link></h1>
            </div>

            <div class="flex items-center gap-4 font-mono text-zinc-200">
                <div>
                    <Link href="/login" class="link link-hover">Log in</Link>
                </div>
                <div>
                    <button class="btn btn-primary">Create Account</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
