<template>
    <div class="min-h-screen flex flex-col">
        <Header />

        <main class="flex-1 w-full">
            <div class="max-w-5xl mx-auto px-4 py-8">
                <slot />
            </div>
        </main>
        <Footer />
    </div>
</template>

<script setup>
import Footer from "./components/Footer.vue";
import Header from "./components/Header.vue";
</script>
