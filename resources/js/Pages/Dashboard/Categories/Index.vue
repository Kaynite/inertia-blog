<script setup lang="ts">
import AuthLayout from '@/Layouts/AuthLayout.vue';
import { PaginatedCollection, Category } from '@/types';
import Paginator from '@/Components/Paginator.vue';

defineOptions({
    layout: AuthLayout
});

defineProps<{
    categories: PaginatedCollection<Category>
}>()
</script>


<template>
    <Head title="Categories" />

    <div class="container mx-auto">
        <div class="flex justify-end mb-4">
            <Link class="bg-secondary text-white rounded-sm px-4 py-2 text-sm" :href="route('dashboard.categories.create')">
            <i class='bx bx-plus'></i>
            Add new category
            </Link>
        </div>
        <table class="table dark:text-white table-auto w-full mb-6">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="category in categories.data" :key="category.id">
                    <td class="pe-3">{{ category.id }}</td>
                    <td class="w-full">{{ category.name }}</td>
                    <td class="text-center text-lg flex justify-center gap-2 py-2">
                        <Link :href="route('dashboard.categories.edit', category.id)"><i class='bx bxs-edit'></i></Link>
                        <Link :href="route('dashboard.categories.destroy', category.id)" method="DELETE">
                        <i class='bx bx-trash'></i>
                        </Link>
                    </td>
                </tr>
            </tbody>
        </table>

        <div class="flex mb-4 justify-center">
            <Paginator :links="categories.meta.links" />
        </div>
    </div>
</template>
