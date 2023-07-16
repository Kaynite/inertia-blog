<script setup lang="ts">
import { Project } from "@/types";
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps<{
    project: Project
}>()

defineOptions({
    layout: MainLayout,
})
</script>

<template>
    <Head :title="project.name" />

    <div class="container mx-auto">
        <div class="pt-16 lg:pt-20">
            <div class="border-b border-grey-lighter pb-8 sm:pb-12">
                <h2
                    class="block font-body text-3xl font-semibold leading-tight text-primary dark:text-white sm:text-4xl md:text-5xl">
                    {{ project.name }}
                </h2>
                <div class="flex items-center pt-5 sm:pt-8">
                    <p class="pr-2 font-body font-light text-primary dark:text-white">
                        {{ project.created_at }}
                    </p>
                </div>
            </div>
            <div class="prose max-w-none border-b border-grey-lighter py-8 dark:prose-dark sm:py-12">
                {{ project.body }}
            </div>

            <div class="flex items-center py-10">
                <span class="pr-5 font-body font-medium text-primary dark:text-white">Share</span>
                <a href="/">
                    <i
                        class="bx bxl-facebook text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i></a>
                <a href="/">
                    <i
                        class="bx bxl-twitter pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i>
                </a>
                <a href="/">
                    <i
                        class="bx bxl-linkedin pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i></a>
                <a href="/">
                    <i
                        class="bx bxl-reddit pl-2 text-2xl text-primary transition-colors hover:text-secondary dark:text-white dark:hover:text-secondary"></i></a>
            </div>
        </div>
    </div>
</template>
