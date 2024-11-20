<script setup lang="ts">
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import { Icon } from '@iconify/vue';

const form = useForm({
    username: '',
    name: '',
    last_name: '',
    email: '',
    password: '',
    password_confirmation: '',
});

const submit = () => {
    form.post(route('register'), {
        onFinish: () => {
            form.reset('password', 'password_confirmation');
        },
    });
};
</script>

<template>
    <GuestLayout>

        <Head title="Register" />
        <h3 class="mt-8 text-center text-xl font-semibold md:mt-12 lg:mt-24">Register</h3>
        <h3 class="mt-2 text-center text-sm text-base-content/70">
            Seamless Access, Secure Connection: Your Gateway to a Personalized Experience.
        </h3>
        <div class="mt-6 md:mt-10">
            <!--  Start: Register Form -->
            <form @submit.prevent="submit">
                <div>
                    <div class="grid grid-cols-1 gap-5 md:grid-cols-2">
                        <div class="form-control">
                            <label for="firstName" class="label">
                                <span class="label-text cursor-pointer">First Name</span>
                            </label>
                            <div
                                class="form-control flex flex-row items-center rounded-box border border-base-content/20 ps-3">
                                <Icon icon="lucide:user" height="18" class="text-base-content/80" />
                                <input id="name" type="text"
                                    class="input input-sm w-full transition-all focus:border-transparent focus:outline-0 focus:outline-offset-0"
                                    v-model="form.name" required autofocus autocomplete="name"
                                    placeholder="First Name" />
                                <InputError class="mt-2" :message="form.errors.name" />
                            </div>
                        </div>

                        <div class="form-control">
                            <label for="lastName" class="label">
                                <span class="label-text cursor-pointer">Last Name</span>
                            </label>
                            <div
                                class="form-control flex flex-row items-center rounded-box border border-base-content/20 ps-3">
                                <Icon icon="lucide:user" height="18" class="text-base-content/80" />
                                <input id="last_name" type="text"
                                    class="input input-sm w-full transition-all focus:border-transparent focus:outline-0 focus:outline-offset-0"
                                    v-model="form.last_name" required autofocus autocomplete="last_name"
                                    placeholder="Last Name" />
                                <InputError class="mt-2" :message="form.errors.last_name" />
                            </div>
                        </div>

                    </div>
                    <div class="form-control mt-3">
                        <label for="username" class="label">
                            <span class="label-text cursor-pointer">Username</span>
                        </label>
                        <div
                            class="form-control flex flex-row items-center rounded-box border border-base-content/20 ps-3">
                            <Icon icon="lucide:user-square" height="18" class="text-base-content/80" />
                            <input id="username" type="text"
                                class="input input-sm w-full transition-all focus:border-transparent focus:outline-0 focus:outline-offset-0"
                                v-model="form.username" required autofocus autocomplete="username"
                                placeholder="Username" />
                        </div>
                    </div>

                    <div class="form-control mt-3">
                        <label for="email" class="label">
                            <span class="label-text cursor-pointer">Email Address</span>
                        </label>
                        <div
                            class="form-control flex flex-row items-center rounded-box border border-base-content/20 ps-3">
                            <Icon icon="lucide:mail" height="18" class="text-base-content/80" />
                            <input id="email" type="email"
                                class="input input-sm w-full transition-all focus:border-transparent focus:outline-0 focus:outline-offset-0"
                                v-model="form.email" required autocomplete="email" placeholder="Email Address" />
                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>
                    </div>

                    <div class="form-control mt-3">
                        <label class="label" for="password"><span class="label-text">Password</span></label>
                        <div class="form-control flex flex-row items-center rounded-box border border-base-content/20 pe-3 ps-3"
                            data-component="password-field">
                            <Icon icon="lucide:key-round" height="18" class="text-base-content/80" />
                            <input id="password" type="password"
                                class="input input-sm w-full transition-all focus:border-transparent focus:outline-0 focus:outline-offset-0"
                                v-model="form.password" required autocomplete="new-password" />
                            <button id="toggle_password_field_type" type="button" data-slot-value="hide"
                                data-slot="visibility-toggle" aria-label="Show/Hide password"
                                class="group btn btn-circle btn-ghost btn-xs hover:bg-base-content/10">
                                <Icon icon="lucide:eye" height="16"
                                    class="inline text-base-content/80 group-data-[slot-value=show]:hidden" />
                                <Icon icon="lucide:eye-off" height="16"
                                    class="inline text-base-content/80 group-data-[slot-value=hide]:hidden" />
                            </button>
                        </div>
                    </div>
                    <div class="form-control mt-3">
                        <label class="label" for="password_confirmation"><span class="label-text">Password
                                Confirmation</span></label>
                        <div class="form-control flex flex-row items-center rounded-box border border-base-content/20 pe-3 ps-3"
                            data-component="password-field">
                            <Icon icon="lucide:key-round" height="18" class="text-base-content/80" />
                            <input id="password_confirmation" type="password"
                                class="input input-sm w-full transition-all focus:border-transparent focus:outline-0 focus:outline-offset-0"
                                v-model="form.password_confirmation" required autocomplete="new-password" />
                            <button id="toggle_password_field_type" type="button" data-slot-value="hide"
                                data-slot="visibility-toggle" aria-label="Show/Hide password"
                                class="group btn btn-circle btn-ghost btn-xs hover:bg-base-content/10">
                                <Icon icon="lucide:eye" height="16"
                                    class="inline text-base-content/80 group-data-[slot-value=show]:hidden" />
                                <Icon icon="lucide:eye-off" height="16"
                                    class="inline text-base-content/80 group-data-[slot-value=hide]:hidden" />
                            </button>
                        </div>
                    </div>

                    <div class="mt-4 flex items-center gap-3 md:mt-6">
                        <input id="agreement" class="checkbox-primary checkbox checkbox-xs" type="checkbox"
                            name="agreement" />
                        <label for="agreement">
                            I agree with
                            <span class="cursor-pointer text-primary underline">terms and conditions</span>
                        </label>
                    </div>
                </div>

                <!--  End: Register Form -->

                <div class="mt-4 md:mt-6">

                    <PrimaryButton class="btn btn-primary btn-block gap-2 text-base"
                        :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        <Icon icon="lucide:user-plus" height="16" />
                        Register
                    </PrimaryButton>
                </div>
                <div class="mt-4">
                    <!--  Start: Social Google Register -->

                    <button
                        class="btn btn-outline btn-md btn-block flex items-center gap-3 border-base-content/10 !text-base-content hover:border-transparent hover:bg-base-content/10">
                        <img alt="" loading="lazy" width="200" height="200" class="size-6"
                            src="assets/images/brand-logo/google-mini.svg" />
                        <span class="text-base">Register with Google</span>
                    </button>

                    <!--  End: Social Google Register -->
                </div>
                <p class="mt-4 text-center text-sm text-base-content/80 md:mt-6">
                    I have already to
                    <Link :href="route('login')" class="text-primary hover:underline">Login</Link>
                </p>
            </form>
        </div>
        <!-- <form @submit.prevent="submit">


            <div class="flex items-center justify-end mt-4">
                <Link
                    :href="route('login')"
                    class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                >
                    Already registered?
                </Link>

                <PrimaryButton class="ms-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Register
                </PrimaryButton>
            </div>
        </form> -->
    </GuestLayout>
</template>
