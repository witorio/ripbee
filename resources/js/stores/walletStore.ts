import { defineStore } from 'pinia';
import { ref } from 'vue';

export const useWalletStore = defineStore('wallet', () => {
  const worth = ref(0); // Wallet worth
  const walletKey = ref(0); // Key for re-rendering the WalletWorth component

  const setWorth = (value: number) => {
    worth.value = value;
  };

  const incrementWalletKey = () => {
    walletKey.value++;
  };

  return {
    worth,
    walletKey,
    setWorth,
    incrementWalletKey,
  };
});
