<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

defineProps<{
    href: string;
}>();
</script>

<template>
    <Link :href="href">
        <li><a>
            <slot />
        </a></li> 
    </Link>
</template>
