import { defineStore } from 'pinia';
import { ref } from 'vue';

interface WalletStore {
    worth: number;
}

export const useWalletStore = defineStore('wallet', () => {
    const worth = ref<WalletStore['worth']>(0);

    const setWorth = (value: WalletStore['worth']) => {
        worth.value = value;
    };

    return {
        worth,
        setWorth,
    };
});