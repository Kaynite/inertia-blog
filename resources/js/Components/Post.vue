<script setup lang="ts">
import { Post } from "@/types/index"

defineProps<{
    post: Post
}>()
</script>

<template>
    <div class="border-b border-grey-lighter pt-10 pb-8">
        <div class="flex items-center">
            <span
                class="mb-4 inline-block rounded-full bg-grey-light px-2 py-1 font-body text-sm text-blue-dark me-2"
                v-for="category in post.categories" :key="category.id"
            >{{ category.name }}</span>
        </div>
        <Link :href="route('posts.show', post.id)"
            class="block font-body text-lg font-semibold text-primary transition-colors hover:text-green dark:text-white dark:hover:text-secondary">
            {{ post.title }}
        </Link>
        <div class="flex items-center pt-4">
            <p class="pr-2 font-body font-light text-primary dark:text-white">
                {{ post.created_at }}
            </p>
            <span class="font-body text-grey dark:text-white">//</span>
            <p class="pl-2 font-body font-light text-primary dark:text-white">
                4 min read
            </p>
        </div>
    </div>
</template>
