<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { Method, PageProps, Progress } from '@inertiajs/core';

defineProps({
    label: {
        type: String,
        required: true,
    },
    to: {
        type: String,
        required: true,
    },
    method: {
        required: false,
    }
})
</script>
<template>
    <li class="group relative mr-6 mb-1">
        <div
            class="absolute left-0 bottom-0 z-20 h-0 w-full opacity-75 transition-all group-hover:h-2 group-hover:bg-yellow">
        </div>
        <Link :href="to" :method="(method as Method)"
            class="relative z-30 block px-2 font-body text-lg font-medium text-primary transition-colors group-hover:text-green dark:text-white dark:group-hover:text-secondary">
        {{ label }}
        </Link>
    </li>
</template>
