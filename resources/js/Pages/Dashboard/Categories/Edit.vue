<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';
import AuthLayout from '@/Layouts/AuthLayout.vue';
import { Category } from '@/types';

const { category } = defineProps<{
    category: Category;
}>();

defineOptions({
    layout: AuthLayout
});

const form = useForm(category);

const submit = () => form.put(route('dashboard.categories.update', category.id));
</script>

<template>
    <Head title="Edit Category" />

    <div class="container mx-auto mb-10">
        <form @submit.prevent="submit">
            <div>
                <label for="name" class="dark:text-white">Name</label>
                <input id="name" type="text" class="mt-1 block w-full" v-model="form.name" />
                <small class="mt-2 text-red">{{ form.errors.name }}</small>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="ml-4 bg-secondary px-6 py-2 font-body font-semibold text-white hover:bg-green sm:mt-0"
                    :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Update
                </button>
            </div>
        </form>
    </div>
</template>
