<script setup lang="ts">
import MainLayout from '@/Layouts/MainLayout.vue';
import { Post } from '@/types';
import { Head, Link } from '@inertiajs/vue3';
import BlogPost from '@/Components/Post.vue';

defineProps<{
    posts: {
        data: Post[]
        meta: {
            links: Array<{ active: boolean, label: string, url: (string | null) }>,
        }
    }
}>();

defineOptions({
    layout: MainLayout
});
</script>

<template>
    <Head title="Blog" />

    <div class="container mx-auto">
        <div class="py-16 lg:py-20">
            <div>
                <img src="/assets/img/icon-blog.png" alt="icon envelope" />
            </div>

            <h1 class="pt-5 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                Blog
            </h1>

            <div class="pt-3 sm:w-3/4">
                <p class="font-body text-xl font-light text-primary dark:text-white">
                    Articles, tutorials, snippets, rants, and everything else. Subscribe for
                    updates as they happen.
                </p>
            </div>

            <form class="flex flex-col py-12 sm:flex-row">
                <input type="email" id="subscribe" placeholder="Drop that email here…"
                    class="w-full border border-primary bg-grey-lightest px-5 py-4 font-body font-light text-primary placeholder-primary transition-colors focus:border-secondary focus:outline-none focus:ring-2 focus:ring-secondary dark:border-secondary sm:w-1/2" />
                <button type="submit"
                    class="mt-5 bg-secondary px-10 py-4 font-body text-xl font-semibold text-white hover:bg-green sm:mt-0 md:text-2xl">
                    Subscribe
                </button>
            </form>

            <div class="pt-8 lg:pt-12">
                <BlogPost :post="post" v-for="post in posts.data" :key="post.id" />
            </div>

            <div class="flex pt-8 lg:pt-16">
                <template v-for="link in posts.meta.links">
                    <Link :href="link.url" v-html="link.label" v-if="link.url"
                        class="ml-3 cursor-pointer border-2 px-3 py-1 font-body font-medium" :class="{
                            'border-secondary text-secondary': link.active,
                            'border-primary text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary': !link.active,
                        }"
                    />
                </template>
            </div>
        </div>
    </div>
</template>
