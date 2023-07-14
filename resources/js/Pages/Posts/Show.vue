<script setup lang="ts">
import { Post } from "@/types";
import MainLayout from "@/Layouts/MainLayout.vue";
import { Head } from "@inertiajs/vue3";

defineProps<{
    post: Post
}>()


defineOptions({
    layout: MainLayout,
})
</script>

<template>
    <Head :title="post.title" />

    <div class="container mx-auto">
        <div class="pt-16 lg:pt-20">
            <div class="border-b border-grey-lighter pb-8 sm:pb-12">
                <div class="flex items-center">
                    <span
                        class="mb-5 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green sm:mb-8 me-2"
                        v-for="category in post.categories"
                        :key="category.id"
                    >{{ category.name }}</span>
                </div>
                <h2
                    class="block font-body text-3xl font-semibold leading-tight text-primary dark:text-white sm:text-4xl md:text-5xl">
                    {{ post.title }}
                </h2>
                <div class="flex items-center pt-5 sm:pt-8">
                    <p class="pr-2 font-body font-light text-primary dark:text-white">
                        {{ post.created_at }}
                    </p>
                    <span class="vdark:text-white font-body text-grey">//</span>
                    <p class="pl-2 font-body font-light text-primary dark:text-white">
                        {{ post.reading_time }} min read
                    </p>
                </div>
            </div>
            <div class="prose prose max-w-none border-b border-grey-lighter py-8 dark:prose-dark sm:py-12">
                {{ post.body }}
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
