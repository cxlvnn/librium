<template>
    <div class="h-screen flex flex-col">
        <Header />

        <main class="flex-1 w-full">
            <div class="max-w-5xl mx-auto px-4">
                <slot></slot>
            </div>
        </main>

        <Footer />
    </div>
</template>

<script setup>
import Footer from "../components/AppFooter.vue";
import Header from "../components/AppGuestHeader.vue";
</script>
