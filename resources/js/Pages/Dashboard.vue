<script setup lang="ts">
import AuthLayout from '@/Layouts/AuthLayout.vue';
import { Head } from '@inertiajs/vue3';

defineOptions({
    layout: AuthLayout
});
</script>


<template>
    <Head title="Dashboard" />

    <div class="container mx-auto">
        Dashboard
    </div>
</template>
