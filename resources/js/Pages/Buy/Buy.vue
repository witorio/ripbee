<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { ref, onMounted } from 'vue'
import { usePage, Head } from '@inertiajs/vue3';

const products = usePage().props.products // Access props from Inertia.js

onMounted(() => {
  console.log(`Products loaded`)
})
</script>


<template>
    <Head title="Buy" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Buy</h2>
        </template>
        <!-- Search -->
        <div class="py-12">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-4">
              <div class="flex items-center gap-4">
                <label class="input input-bordered flex items-center gap-2 grow">
                  <input type="text" class="grow" placeholder="Search" />
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 16 16"
                    fill="currentColor"
                    class="h-4 w-4 opacity-70"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </label>
                <input
                  type="text"
                  placeholder="Type here"
                  class="input input-bordered w-full max-w-xs"
                />
                <input
                  type="text"
                  placeholder="Type here"
                  class="input input-bordered w-full max-w-xs"
                />
              </div>
            </div>
          </div>
        </div>
        <!-- Table -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- <div class="p-6 text-gray-900 dark:text-gray-100">You're logged in!</div> -->
                  <div class="overflow-x-auto">
                  <table class="table">
                    <!-- head -->
                    <thead>
                      <tr>
                        <th>Product</th>
                        <th>Price (per %)</th>
                        <th>Trends</th>
                        <th>Favorite</th>
                      </tr>
                    </thead>
                    <tbody>
                      <!-- rows -->
                      <tr v-for="product in products" :key="product.id">
                        <td>{{ product.id }}
                          <div class="flex items-center gap-3">
                            <div class="avatar">
                              <div class="mask mask-squircle h-12 w-12">
                                <img
                                  src="https://img.daisyui.com/images/profile/demo/2@94.webp"
                                  alt="Avatar Tailwind CSS Component" />
                              </div>
                            </div>
                            <div>
                              <div class="font-bold">Foto</div>
                              <div class="text-sm opacity-50">Foto2</div>
                              <span class="badge badge-primary badge-sm">HOT</span>
                            </div>
                          </div>
                        </td>
                        <td>{{ product.item_code }}</td>
                        <td>
                          {{ product.category }}
                          <br />
                          <span class="badge badge-ghost badge-sm">TCG</span>
                        </td>
                        <td>
                          <button class="btn btn-ghost btn-xs">DETAILS</button>
                        </td>
                      </tr>
                    </tbody>
                    <!-- foot -->
                    <tfoot>
                      <tr>
                        <th>Product</th>
                        <th>Price (per %)</th>
                        <th>Trends</th>
                        <th>Favorite</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
                </div>
            </div>
        </div>


    </AuthenticatedLayout>
</template>