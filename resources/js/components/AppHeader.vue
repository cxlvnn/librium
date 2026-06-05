<template>
    <div class="border-b border-secondary bg-base-100">
        <div
            class="max-w-5xl mx-auto px-4 py-4 flex items-center justify-between"
        >
            <div class="text-3xl font-serif">
                <h1><Link href="/">Librium</Link></h1>
            </div>

            <div class="flex items-center space-x-6 font-mono text-xs">
                <div>
                    <Link href="/login" class="link-hover">Log in</Link>
                </div>
                <div>
                    <Link href="/register">
                        <AppButton
                            title="Create Account"
                            class="text-xs btn-primary"
                        />
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import AppButton from "./AppButton.vue";
</script>
