<template>
    <div class="w-full">
        <label
            class="font-mono uppercase text-xs text-base-content/60 tracking-wide block mb-2"
        >
            {{ label }}
        </label>
        <textarea
            v-model="model"
            :type
            :name
            class="w-full py-3 bg-transparent outline-none border-0 border-b border-base-content/20 focus:border-accent transition-colors font-sans placeholder:text-base-content/30"
            :placeholder
            :required
        />
    </div>
</template>

<script setup>
const props = defineProps({
    label: String,
    name: String,
    placeholder: String,
    type: {
        type: String,
        default: "text",
    },
    required: {
        type: Boolean,
        default: false,
    },
});

const model = defineModel();
</script>
