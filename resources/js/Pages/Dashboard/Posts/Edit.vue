<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';
import AuthLayout from '@/Layouts/AuthLayout.vue';
import { Category, Post } from '@/types';

const { post } = defineProps<{
    post: Post;
    categories: Category[]
}>();

defineOptions({
    layout: AuthLayout
});

const category_ids: (number[] | undefined) = post.categories?.map((c) => c.id)

const form = useForm(post);

const submit = () => form.put(route('dashboard.posts.update', post.id));
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
                <label for="categories" class="dark:text-white">Categories</label>
                <select v-model="category_ids" id="categories" class="mt-1 block w-full" multiple>
                    <option v-for="category in categories" :value="category.id">{{ category.name }}</option>
                </select>
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
                    Update
                </button>
            </div>
        </form>
    </div>
</template>
