<script setup lang="ts">
import { Post } from "@/types/index"
import { Link } from "@inertiajs/vue3";

defineProps<{
    post: Post
}>()
</script>

<template>

    <div class="border-b border-grey-lighter pb-8">
        <span class="mb-4 inline-block rounded-full bg-green-light px-2 py-1 font-body text-sm text-green">category</span>
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
