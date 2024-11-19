<script setup lang="ts">
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps<{
    href: string;
    active?: boolean;
}>();

const classes = computed(() =>
    props.active
        ? 'btn btn-active'
        : 'btn btn-ghost'
);
</script>

<template>
    <Link :href="href">
        <li><a :class="classes">
            <slot />
        </a></li> 
    </Link>
</template>
