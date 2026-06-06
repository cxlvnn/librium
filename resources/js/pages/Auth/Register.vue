<template>
    <AppForm
        @submit.prevent="sendForm()"
        class="flex flex-col gap-6"
        title="Open a library."
    >
        <div>
            <AppInput
                v-model="form.name"
                class="text-primary/80"
                label="Name"
                name="name"
                placeholder="John"
                required
            />
            <AppError :message="form.errors.name" />
        </div>

        <div>
            <AppInput
                v-model="form.email"
                class="text-primary/80"
                label="Email"
                name="email"
                type="email"
                placeholder="john@librium.net"
                required
            />
            <AppError :message="form.errors.email" />
        </div>

        <div>
            <AppInput
                v-model="form.password"
                class="text-primary/80"
                label="Password"
                name="password"
                type="password"
                placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                required
            />
            <div class="font-sans text-sm text-primary/40 mt-2">
                <ul class="list-disc ml-4 my-1">
                    <li>Should be at least 8 characters</li>
                    <li>Should contain at least 1 number</li>
                    <li>Should contain at least 1 symbol</li>
                </ul>
            </div>
            <AppError :message="form.errors.password" />
        </div>

        <div class="font-sans">
            <AppButton
                :disabled="form.processing"
                title="Sign up"
                class="w-full btn-primary"
            />
        </div>

        <div class="flex justify-center text-xs text-primary/80 font-mono">
            <div>
                <p>
                    Already have one?
                    <Link href="/login" class="link-accent">Sign in</Link>
                </p>
            </div>
        </div>
    </AppForm>
</template>

<script setup>
import AuthLayout from "../../layouts/AuthLayout.vue";
import AppInput from "../../components/AppInput.vue";
import AppForm from "../../components/AppForm.vue";
import AppButton from "../../components/AppButton.vue";
import { Link, useForm } from "@inertiajs/vue3";
import AppError from "../../components/AppError.vue";

defineOptions({
    layout: (h, page) =>
        h(
            AuthLayout,
            {
                hadith: "Whoever takes a path upon which to obtain knowledge, Allah makes the path to Paradise easy for him.",
                reference: "Jami` at-Tirmidhi 2646",
            },
            () => page,
        ),
});

const form = useForm({
    name: "",
    email: "",
    password: "",
});

const sendForm = () => {
    form.post("/register");
};
</script>
