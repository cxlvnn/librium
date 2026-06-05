<template>
    <AppForm class="flex flex-col gap-6" title="Open a library.">
        <div>
            <AppInput
                class="text-primary/80"
                label="Name"
                name="name"
                placeholder="John"
            />
        </div>

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
                placeholder="At least 8 character"
            />
        </div>

        <div class="font-sans">
            <AppButton title="Sign up" class="w-full btn-primary" />
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
import { Link } from "@inertiajs/vue3";

defineOptions({
    layout: AuthLayout,
});
</script>
