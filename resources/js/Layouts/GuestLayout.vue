<script setup lang="ts">
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import { Link } from '@inertiajs/vue3';
import Footer from '@/Components/Footer.vue';
import { Icon } from '@iconify/vue';
import DarkModeToggle from '@/Components/DarkModeToggle.vue';

const createPasswordField = (component) => {
    const input = component.querySelector("[data-slot=input]")

    const visibilityToggle = component.querySelector("[data-slot=visibility-toggle]")
    if (input && visibilityToggle) {
        visibilityToggle.addEventListener("click", () => {
            const show = visibilityToggle.getAttribute("data-slot-value") === "show"
            visibilityToggle.setAttribute("data-slot-value", show ? "hide" : "show")
            input.setAttribute("type", show ? "password" : "text")
        })
    }
}

const initPasswordField = () => {
    document.querySelectorAll("[data-component=password-field]").forEach(createPasswordField)
}

document.addEventListener("DOMContentLoaded", function () {
    initPasswordField()
})

</script>

<template>
    <body>
        <div class="grid min-h-screen grid-cols-12 overflow-auto">
            <div
                class="relative hidden bg-[#FFE9D1] dark:bg-[#14181c] lg:col-span-7 lg:block xl:col-span-8 2xl:col-span-9">
                <!--  Start: Login Side Image Panel -->

                <div class="absolute inset-0 flex items-center justify-center">
                    <img alt="Auth Image" loading="lazy" width="1000" height="667" class="object-cover"
                        src="assets/images/auth/auth-hero.png" />
                </div>
                <div class="animate-bounce-2 absolute bottom-[15%] right-[20%]">
                    <div aria-label="Card" class="card card-bordered w-64 bg-base-100/80 backdrop-blur-lg">
                        <div class="card-body p-6">
                            <div class="flex flex-col items-center justify-center">
                                <img alt="" loading="lazy" width="460" height="460"
                                    class="mask mask-squircle size-11 bg-base-content/10 p-0.5"
                                    src="assets/images/landing/testimonial-pouya-avatar.png" />
                                <div class="mt-2 flex items-center justify-center gap-0.5">
                                    <Icon icon="lucide:star" height="12" inline class="text-orange-400 " />

                                    <Icon icon="lucide:star" height="12" class="text-orange-400" />

                                    <Icon icon="lucide:star" height="12" class="text-orange-400" />

                                    <Icon icon="lucide:star" height="12" class="text-orange-400" />

                                    <Icon icon="lucide:star" height="12" class="text-orange-400" />
                                </div>
                                <p class="mt-2 text-sm font-medium">Pouya Saadeghi</p>
                                <p class="text-xs text-base-content/70">Creator of daisyUI</p>
                            </div>
                            <p class="text-center text-sm text-base-content/90">
                                This is the ultimate admin dashboard for any React project
                            </p>
                        </div>
                    </div>
                </div>

                <!--  End: Login Side Image Panel -->
            </div>
            <div class="col-span-12 lg:col-span-5 xl:col-span-4 2xl:col-span-3">
                <div class="flex flex-col items-stretch p-6 md:p-8 lg:p-16">
                    <div class="flex items-center justify-between">
                        <!--  Start: Logo -->

                        <div class="inline">
                            <ApplicationLogo height="80" />
                        </div>

                        <!--  End: Logo -->

                        <!--  Start: Theme Toggle -->

                        <button aria-label="Theme toggle" data-action="theme-toggle"
                            class="btn btn-circle btn-ghost border border-base-content/10 text-base-content/70 hover:bg-base-content/10">
                            <DarkModeToggle />
                        </button>

                        <!--  End: Theme Toggle -->
                    </div>
                    <slot />
                </div>
            </div>
        </div>

    </body>

    <!-- NEXUS END -->
</template>
