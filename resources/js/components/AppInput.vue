<template>
    <fieldset class="fieldset">
        <legend class="font-mono">{{ label }}</legend>
        <input
            type="text"
            :name
            class="input outline-none border-0 border-b"
            :placeholder
        />
    </fieldset>
</template>

<script setup>
const props = defineProps({
    label: String,
    name: String,
    placeholder: String,
});
</script>
