<template>
    <div
        class="bg-amber-900 text-zinc-50 py-5 flex flex-col items-center justify-center"
    >
        <div>
            <h1>Count: {{ counter }}</h1>
        </div>
        <div>
            <Button @click="increaseCounter" text="Click me" />
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import Button from "./components/Button.vue";

const counter = ref(0);

const increaseCounter = () => {
    counter.value++;
};
</script>
