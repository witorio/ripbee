<template>
    <Head title="Sell" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Sell</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- <div class="p-6 text-gray-900 dark:text-gray-100">You're logged in!</div> -->
                    <div>
                      <h1>Sell</h1>
                      <table>
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>Item Code</th>
                            <th>Category</th>
                            <th>Status</th>
                            <th>Title</th>
                            <th>Shares Left</th>
                            <th>Owners</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr v-for="product in products" :key="product.id">
                            <td>{{ product.id }}</td>
                            <td>{{ product.item_code }}</td>
                            <td>{{ product.category }}</td>
                            <td>{{ product.status }}</td>
                            <td>{{ product.title }}</td>
                            <td>{{ product.shares_left }}</td>
                            <td>{{ JSON.stringify(product.owners) }}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { ref, onMounted } from 'vue'
import { usePage, Head } from '@inertiajs/vue3';

const products = usePage().props.products // Access props from Inertia.js

onMounted(() => {
  console.log(`Products loaded`)
})
</script>
