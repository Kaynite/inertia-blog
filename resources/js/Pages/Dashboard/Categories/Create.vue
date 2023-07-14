<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';
import AuthLayout from '@/Layouts/AuthLayout.vue';

defineOptions({
    layout: AuthLayout
});

const form = useForm({
    name: '',
});

const submit = () => form.post(route('dashboard.categories.store'));
</script>

<template>
    <Head title="Create Category" />

    <div class="container mx-auto mb-10">
        <form @submit.prevent="submit">
            <div>
                <label for="title" class="dark:text-white">Name</label>
                <input id="title" type="text" class="mt-1 block w-full" v-model="form.name" />
                <small class="mt-2 text-red">{{ form.errors.name }}</small>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="ml-4 bg-secondary px-6 py-2 font-body font-semibold text-white hover:bg-green sm:mt-0"
                    :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Save
                </button>
            </div>
        </form>
    </div>
</template>
