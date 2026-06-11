<template>
    <div
        class="flex flex-col lg:flex-row items-center font-serif gap-12 lg:gap-20"
    >
        <div
            class="flex flex-col text-center lg:text-left py-12 lg:py-20 justify-center gap-8 flex-1"
        >
            <div class="text-5xl lg:text-6xl leading-tight">
                <h1>Your personal <span class="text-accent">library</span></h1>
            </div>

            <div
                class="text-lg max-w-md mx-auto font-sans text-base-content/70 lg:mx-0"
            >
                <p>
                    Librium is a website where you can store your favorite books
                    and basically keep an eye on them. <br />
                    It is meant to be totally yours, helping you organize your
                    books
                    <span class="italic font-bold text-primary">in style.</span>
                </p>
            </div>

            <div class="font-mono">
                <button class="btn btn-primary">
                    <Link href="/register">Create your own library</Link>
                </button>
            </div>
        </div>

        <div class="flex items-center justify-center h-80 lg:h-96">
            <LandingBookCover
                source="/images/manhaj-as-salikeen.jpg"
                class="-rotate-6 -mr-14 translate-y-4 lg:-mr-18 lg:translate-y-6 shadow-2xl"
            />
            <LandingBookCover
                source="/images/sahih-al-bukhari.jpg"
                class="z-10 shadow-2xl"
            />
            <LandingBookCover
                source="/images/three-fundamental-principles.jpg"
                class="rotate-6 -ml-14 translate-y-4 lg:-ml-18 lg:translate-y-6 shadow-2xl"
            />
        </div>
    </div>
</template>

<script setup>
defineOptions({ layout: AppGuestLayout });

import { Link } from "@inertiajs/vue3";
import LandingBookCover from "../components/LandingBookCover.vue";
import AppGuestLayout from "../layouts/AppGuestLayout.vue";
</script>
