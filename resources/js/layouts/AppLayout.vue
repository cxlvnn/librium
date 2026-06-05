<template>
    <Header />
    <div class="max-w-5xl mx-auto">
        <slot></slot>
    </div>
    <Footer />
</template>

<script setup>
import Footer from "../components/AppFooter.vue";
import Header from "../components/AppHeader.vue";
</script>
