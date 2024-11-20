<script setup lang="ts">
import Checkbox from '@/Components/Checkbox.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { Icon } from '@iconify/vue';

defineProps<{
    canResetPassword?: boolean;
    status?: string;
}>();

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => {
            form.reset('password');
        },
    });
};
</script>

<template>
    <!-- <GuestLayout>
        <Head title="Log in" />

        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <InputLabel for="email" value="Email" />

                <TextInput
                    id="email"
                    type="email"
                    class="mt-1 block w-full"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="email"
                />

                <InputError class="mt-2" :message="form.errors.email" />
            </div>

            <div class="mt-4">
                <InputLabel for="password" value="Password" />

                <TextInput
                    id="password"
                    type="password"
                    class="mt-1 block w-full"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />

                <InputError class="mt-2" :message="form.errors.password" />
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <Checkbox name="remember" v-model:checked="form.remember" />
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                >
                    Forgot your password?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </PrimaryButton>
            </div>
        </form>
    </GuestLayout> -->

    <GuestLayout>

        <Head title="Login" />
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <h3 class="mt-8 text-center text-xl font-semibold md:mt-12 lg:mt-24">Login</h3>
        <h3 class="mt-2 text-center text-sm text-base-content/70">
            Seamless Access, Secure Connection: Your Gateway to a Personalized Experience.
        </h3>
        <div class="mt-6 md:mt-10">
            <!--  Start: Login Form -->
            <form @submit.prevent="submit">
                <div>
                    <div class="form-control">
                        <label for="email" class="label">
                            <span class="label-text cursor-pointer">Email Address</span>
                        </label>
                        <div
                            class="form-control flex flex-row items-center rounded-box border border-base-content/20 ps-3">
                            <Icon icon="lucide:mail" height="18" class="text-base-content/80" />
                            <input id="email" type="email" placeholder="Email Address" v-model="form.email"
                                class="input input-sm w-full transition-all focus:border-transparent focus:outline-0 focus:outline-offset-0"
                                autofocus autocomplete="email" required />
                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>
                    </div>
                    <div class="form-control mt-3">
                        <label for="password" class="label">
                            <span class="label-text cursor-pointer">Password</span>
                        </label>
                        <div class="form-control flex flex-row items-center rounded-box border border-base-content/20 pe-3 ps-3"
                            data-component="password-field">
                            <Icon icon="lucide:key-round" height="18" class="text-base-content/80" />
                            <input id="password" placeholder="Password"
                                class="input input-sm w-full transition-all focus:border-transparent focus:outline-0 focus:outline-offset-0"
                                type="password" value="password" data-slot="input" name="password"
                                v-model="form.password" required autocomplete="current-password" />
                            <button id="toggle_password_field_type" type="button" data-slot-value="hide"
                                data-slot="visibility-toggle" aria-label="Show/Hide password"
                                class="group btn btn-circle btn-ghost btn-xs hover:bg-base-content/10">
                                <Icon icon="lucide:eye" height="16"
                                    class="inline text-base-content/80 group-data-[slot-value=show]:hidden" />
                                <Icon icon="lucide:eye-off" height="16"
                                    class="inline text-base-content/80 group-data-[slot-value=hide]:hidden" />
                            </button>
                            <InputError class="mt-2" :message="form.errors.password" />
                        </div>
                        <label class="label">
                            <span class="label-text"></span>
                            <a class="label-text text-xs text-base-content/80" href="./auth-forgot-password.html">
                                Forgot Password?
                            </a>
                        </label>
                    </div>
                    <div class="mt-4 flex items-center gap-3 md:mt-6">
                        <Checkbox id="remember" name="remember" class="checkbox-primary checkbox checkbox-xs"
                            v-model:checked="form.remember" />
                        <label for="rememeber">
                            <span>Remember me</span>
                        </label>
                    </div>

                </div>
                <div class="mt-4 md:mt-6">
                    <PrimaryButton class="btn btn-primary btn-block gap-2 text-base"
                        :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        <Icon icon="lucide:log-in" height="16" />
                        Login
                    </PrimaryButton>
                </div>
            </form>

            <!--  End: Login Form -->

            <div class="mt-4">
                <!--  Start: Social Google Login -->

                <button
                    class="btn btn-outline btn-md btn-block flex items-center gap-3 border-base-content/10 !text-base-content hover:border-transparent hover:bg-base-content/10">
                    <img alt="" loading="lazy" width="200" height="200" class="size-6"
                        src="assets/images/brand-logo/google-mini.svg" />
                    <span class="text-base">Login with Google</span>
                </button>

                <!--  End: Social Google Login -->
            </div>
            <p class="mt-4 text-center text-sm text-base-content/80 md:mt-6">
                Haven't an account
                <Link :href="route('register')" class="text-primary hover:underline">Register</Link>
            </p>
        </div>
    </GuestLayout>
</template>
