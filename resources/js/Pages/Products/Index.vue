<template>
    <div>
      <h1>Products</h1>
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
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { usePage } from '@inertiajs/vue3';

const products = usePage().props.products // Access props from Inertia.js

onMounted(() => {
  console.log(`Products loaded`)
})
</script>
