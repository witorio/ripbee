<script setup>
import { Head } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { ref } from "vue";
import { router, usePage } from "@inertiajs/vue3";
import { useWalletStore } from '@/stores/walletStore';

// Initialize the Pinia store
const walletStore = useWalletStore();

// Define the form state
const amount = ref(0);

// Handle form submission
const submitDeposit = () => {
  router.post(
    "/transfer",
    {
      amount: amount.value,
      type: "deposit",
    },
    {
      onSuccess: () => {
        // Clear the form
        amount.value = 0;

        // Increment the global walletKey to trigger WalletWorth re-render
        walletStore.incrementWalletKey();
      },
    }
  );
};
</script>

<template>
  <Head title="Deposit" />
  <AuthenticatedLayout>
    <template #header>
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Deposit</h2>
    </template>

    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
          <h3 class="text-lg font-bold mb-4 text-gray-800 dark:text-gray-200">Add Funds</h3>
          <!-- Success message -->
          <div v-if="usePage().props.success" class="alert alert-success">
            {{ usePage().props.success }}
          </div>

          <!-- Error message -->
          <div v-if="usePage().props.error" class="alert alert-error">
            {{ usePage().props.error }}
          </div>
          <form @submit.prevent="submitDeposit" class="space-y-4">
            <div class="form-control">
              <label for="amount" class="label">
                <span class="label-text dark:label-text text-gray-800 dark:text-gray-200">Amount</span>
              </label>
              <input
                type="number"
                id="amount"
                v-model="amount"
                class="input input-bordered w-full dark:bg-gray-700 dark:text-gray-200"
                placeholder="Enter amount"
                required
              />
            </div>

            <div class="flex justify-end">
              <button type="submit" class="btn btn-primary">
                Deposit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>
