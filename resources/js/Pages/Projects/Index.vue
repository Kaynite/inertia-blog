<script setup lang="ts">
import MainLayout from '@/Layouts/MainLayout.vue';
import { PaginatedCollection, Project } from '@/types';
import Paginator from '@/Components/Paginator.vue';
import BlogProject from '@/Components/Project.vue';

defineProps<{
    projects: PaginatedCollection<Project>
}>();

defineOptions({
    layout: MainLayout
});
</script>

<template>
    <Head title="Projects" />

    <div class="container mx-auto">
        <div class="py-16 lg:py-20">
            <div>
                <img src="/assets/img/icon-blog.png" alt="icon envelope" />
            </div>

            <h1 class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                Projects
            </h1>

            <div class="pt-3 sm:w-3/4">
                <p class="font-body text-xl font-light text-primary dark:text-white">
                    Articles, tutorials, snippets, rants, and everything else. Subscribe for
                    updates as they happen.
                </p>
            </div>

            <div class="pt-8 lg:pt-12">
                <BlogProject :project="project" v-for="project in projects.data" :key="project.id" />
            </div>

            <div class="flex pt-8 lg:pt-16">
                <Paginator :links="projects.meta.links" />
            </div>
        </div>
    </div>
</template>
