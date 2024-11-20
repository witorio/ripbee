<script setup lang="ts">
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps<{
    href: string;
    active?: boolean;
}>();

const classes = computed(() =>
    props.active
        ? 'hover:bg-base-content/15 active'
        : 'hover:bg-base-content/15'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <div class="flex items-center gap-2">
            <slot />
        </div>
    </Link>



</template>
