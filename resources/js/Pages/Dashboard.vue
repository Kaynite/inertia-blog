<script setup lang="ts">
import AuthLayout from '@/Layouts/AuthLayout.vue';
import { PaginatedCollection, Post } from '@/types';
import Paginator from '@/Components/Paginator.vue';

defineOptions({
    layout: AuthLayout
});

defineProps<{
    posts: PaginatedCollection<Post>
}>()
</script>


<template>
    <Head title="Dashboard" />

    <div class="container mx-auto">
        <div class="flex mb-4">
            <Link class="bg-secondary text-white rounded-sm px-4 py-2 text-sm" :href="route('dashboard.posts.create')">
                <i class='bx bx-plus'></i>
                Add new Post
            </Link>
        </div>
        <table class="table dark:text-white table-auto w-full mb-6">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="post in posts.data" :key="post.id">
                    <td class="pe-3">{{ post.id }}</td>
                    <td>{{ post.title }}</td>
                    <td class="py-2 text-center">
                        <span
                            class="bg-green text-xs px-2 py-1 rounded text-white"
                            :class="{
                                'bg-green': post.is_published,
                                'bg-red': ! post.is_published
                            }"
                        >{{ post.is_published ? 'Published' : 'Hidden' }}</span>
                    </td>
                    <td class="text-center text-lg flex justify-center gap-2 py-2">
                        <Link :href="route('dashboard.posts.edit', post.id)"><i class='bx bxs-edit'></i></Link>
                        <Link :href="route('dashboard.posts.destroy', post.id)" method="DELETE">
                        <i class='bx bx-trash'></i>
                        </Link>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="flex mb-4 justify-center">
            <Paginator :links="posts.meta.links" />
        </div>
    </div>
</template>
