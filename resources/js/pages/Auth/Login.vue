<template>
    <AppForm
        @submit.prevent="sendForm"
        class="flex flex-col gap-6"
        title="Welcome back."
    >
        <div>
            <AppInput
                v-model="form.email"
                class="text-primary/80"
                label="Email"
                type="email"
                name="email"
                placeholder="john@librium.net"
                required
            />
        </div>

        <div>
            <AppInput
                v-model="form.password"
                class="text-primary/80"
                label="Password"
                type="password"
                name="password"
                placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
                required
            />
            <AppError :message="form.errors.email" />
        </div>

        <div class="font-sans">
            <AppButton
                :disabled="form.processing"
                title="Sign in"
                class="w-full btn-primary"
            />
        </div>

        <div class="flex justify-between text-xs text-primary/80 font-mono">
            <div>
                <Link class="link-hover">Forgot password?</Link>
            </div>

            <div>
                <Link class="link-hover" href="/register">Create account</Link>
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
                hadith: "If Allah wants to do good to a person, He makes him comprehend the religion.",
                reference: "Sahih al-Bukhari 71",
            },
            () => page,
        ),
});

const form = useForm({
    email: "",
    password: "",
});

const sendForm = () => {
    form.post("/login");
};
</script>
