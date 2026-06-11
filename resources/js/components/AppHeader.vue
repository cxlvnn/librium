<template>
    <div class="border-b border-secondary bg-base-100">
        <div
            class="max-w-5xl mx-auto px-4 py-2 flex items-center justify-between"
        >
            <div class="text-3xl font-serif">
                <h1><Link href="/books">Librium</Link></h1>
            </div>

            <div
                class="flex items-center text-primary/60 [&_a]:hover:text-primary [&_a]:transition-colors uppercase space-x-6 font-mono font-light tracking-widest text-xs"
            >
                <div>
                    <Link
                        href="/books"
                        :class="{ 'text-primary': $page.url == '/books' }"
                        >Library</Link
                    >
                </div>
                <div>
                    <Link
                        :class="{ 'text-primary': $page.url == '/user' }"
                        href="/user"
                        >Profile</Link
                    >
                </div>
                <div>
                    <Link
                        :class="{
                            'text-primary': $page.url == '/user/settings',
                        }"
                        href="/user/settings"
                        >Settings</Link
                    >
                </div>
                <div>
                    <Link
                        method="delete"
                        class="uppercase hover:cursor-pointer hover:text-primary transition-colors"
                        href="/logout"
                        >Logout</Link
                    >
                </div>
            </div>
        </div>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
</script>
