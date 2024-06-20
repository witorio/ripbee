<template>
    <button @click="toggleDarkMode" class="p-2 bg-gray-200 dark:bg-gray-800 rounded-full">
        <span v-if="isDarkMode" class="text-white">🌙</span>
        <span v-else class="text-black">☀️</span>
    </button>
</template>

<script>
export default {
    data() {
        return {
            isDarkMode: false,
        };
    },
    mounted() {
        this.isDarkMode = localStorage.getItem('theme') === 'dark' || (!localStorage.getItem('theme') && window.matchMedia('(prefers-color-scheme: dark)').matches);
        this.applyTheme();
    },
    methods: {
        toggleDarkMode() {
            this.isDarkMode = !this.isDarkMode;
            this.applyTheme();
            localStorage.setItem('theme', this.isDarkMode ? 'dark' : 'light');
        },
        applyTheme() {
            if (this.isDarkMode) {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        },
    },
};
</script>

<style scoped>
button {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
}
</style>
