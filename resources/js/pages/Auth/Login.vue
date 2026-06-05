<template>
    <AppForm class="flex flex-col gap-6" title="Welcome back.">
        <div>
            <AppInput
                class="text-primary/80"
                label="Email"
                name="email"
                placeholder="john@librium.net"
            />
        </div>

        <div>
            <AppInput
                class="text-primary/80"
                label="Password"
                name="password"
                placeholder="&bull;&bull;&bull;&bull;&bull;&bull;&bull;&bull;"
            />
        </div>

        <div class="font-sans">
            <AppButton title="Sign in" class="w-full btn-primary" />
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
import { Link } from "@inertiajs/vue3";

defineOptions({
    layout: AuthLayout,
});
</script>
