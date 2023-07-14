<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';
import AuthLayout from '@/Layouts/AuthLayout.vue';
import { Post } from '@/types';

defineOptions({
    layout: AuthLayout
});

const form = useForm({
    title: '',
    body: '',
    is_published: false,
});

const submit = () => form.post(route('dashboard.posts.store'));
</script>

<template>
    <Head title="Edit Post" />

    <div class="container mx-auto mb-10">
        <form @submit.prevent="submit">
            <div>
                <label for="title" class="dark:text-white">Title</label>
                <input id="title" type="text" class="mt-1 block w-full" v-model="form.title" />
                <small class="mt-2 text-red">{{ form.errors.title }}</small>
            </div>

            <div class="mt-4">
                <label for="body" class="dark:text-white">Body</label>
                <textarea id="body" class="mt-1 block w-full" cols="30" rows="10" v-model="form.body" required></textarea>
                <small class="mt-2 text-red">{{ form.errors.body }}</small>
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <input name="remember" v-model="form.is_published" type="checkbox" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-white">Is Published</span>
                </label>
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
