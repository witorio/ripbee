<script setup lang="ts">
import GuestLayout from '@/Layouts/GuestLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm, Link } from '@inertiajs/vue3';
import { Icon } from '@iconify/vue';

defineProps<{
    status?: string;
}>();

const form = useForm({
    email: '',
});

const submit = () => {
    form.post(route('password.email'));
};
</script>

<template>
    <GuestLayout>

        <Head title="Forgot Password" />

        <h3 class="mt-8 text-center text-xl font-semibold md:mt-12 lg:mt-24">Forgot Password</h3>
        <h3 class="mt-2 text-center text-sm text-base-content/70">
            Seamless Access, Secure Connection: Your Gateway to a Personalized Experience.
        </h3>
        <div class="mt-6 md:mt-10">
            <!--  Start: Forgot Password Form -->
            <form @submit.prevent="submit">
                <div>
                    <div class="form-control">
                        <label for="email" class="label">
                            <span class="label-text cursor-pointer">Email Address</span>
                        </label>
                        <div
                            class="form-control flex flex-row items-center rounded-box border border-base-content/20 ps-3">
                            <iconify-icon icon="lucide:mail" height="18" class="text-base-content/80"></iconify-icon>

                            <input id="email" placeholder="Email Address"
                                class="input input-sm w-full transition-all focus:border-transparent focus:outline-0 focus:outline-offset-0"
                                name="email" v-model="form.email" required autofocus autocomplete="email"
                                type="email" />
                            <InputError class="mt-2" :message="form.errors.email" />
                        </div>
                    </div>
                    <!-- <div class="mt-4 flex items-center gap-3 md:mt-6">
                        <input id="agreement" class="checkbox-primary checkbox checkbox-xs" type="checkbox"
                            name="agreement" />
                        <label for="agreement">
                            I agree with
                            <span class="cursor-pointer text-primary underline">terms and conditions</span>
                        </label>
                    </div> -->
                </div>

                <!--  End: Forgot Password Form -->

                <div class="mt-4 md:mt-6">
                    <PrimaryButton class="btn btn-primary btn-block gap-2 text-base"
                        :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        <Icon icon="lucide:mail-plus" height="16" />
                        Send a reset link
                    </PrimaryButton>
                </div>
            </form>
            <p class="mt-4 text-center text-sm text-base-content/80 md:mt-6">
                I have already to
                <Link :href="route('login')" class="text-primary hover:underline">Login</Link>
            </p>
        </div>
    </GuestLayout>
</template>
