<template>
    <p>Wallet worth: {{ walletWorth }}</p>
  </template>
  
  <script setup lang="ts">
  import { ref, onMounted, watch } from 'vue';
  import { useWalletStore } from '@/stores/walletStore';
  import axios from 'axios';
  
  // Initialize the Pinia store
  const walletStore = useWalletStore();
  const walletWorth = ref(walletStore.worth); // Bind Pinia state to a local ref
  
  // Fetch wallet worth from the API
  const fetchWalletWorth = async () => {
    try {
      const response = await axios.get<{ worth: number }>('/api/wallet-worth');
      walletStore.setWorth(response.data.worth); // Update Pinia store
      walletWorth.value = walletStore.worth; // Sync local state with Pinia
    } catch (error) {
      console.error('Error fetching wallet worth:', error);
    }
  };
  
  // Fetch wallet worth when the component is mounted
  onMounted(() => {
    fetchWalletWorth();
  });
  
  // Watch for changes to walletKey and reload the worth
  watch(() => walletStore.walletKey, fetchWalletWorth);
  </script>
  