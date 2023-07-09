<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import NavLink from '@/Components/NavLink.vue';
import MainLayout from "@/Layouts/MainLayout.vue";
import HomePost from '@/Components/Post.vue';
import { Post } from '@/types';

defineOptions({
    layout: MainLayout
});

defineProps<{
    posts: Post[]
}>()

</script>

<template>
    <Head title="Welcome" />

    <div>
        <div class="container mx-auto">
            <div class="border-b border-grey-lighter py-16 lg:py-20">
                <div>
                    <img src="/assets/img/author.png" class="h-16 w-16" alt="author" />
                </div>
                <h1 class="pt-3 font-body text-4xl font-semibold text-primary dark:text-white md:text-5xl lg:text-6xl">
                    Hi, I’m Kareem.
                </h1>
                <p class="pt-3 font-body text-xl font-light text-primary dark:text-white">
                    A software developer from Egypt.
                </p>
                <a href="/"
                    class="mt-12 block bg-secondary px-10 py-4 text-center font-body text-xl font-semibold text-white transition-colors hover:bg-green sm:inline-block sm:text-left sm:text-2xl">
                    Say Hello!
                </a>
            </div>

            <div class="border-b border-grey-lighter py-16 lg:py-20">
                <div class="flex items-center pb-6">
                    <img src="/assets/img/icon-story.png" alt="icon story" />
                    <h3 class="ml-3 font-body text-2xl font-semibold text-primary dark:text-white">
                        My Story
                    </h3>
                </div>
                <div>
                    <p class="font-body font-light text-primary dark:text-white">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Nibh mauris cursus
                        mattis molestie. Et leo duis ut diam. Sit amet tellus cras adipiscing
                        enim eu turpis. Adipiscing at in tellus integer feugiat.
                        <br />
                        <br />
                        Maecenas accumsan lacus vel facilisis. Eget egestas purus viverra
                        accumsan in nisl nisi scelerisque eu. Non tellus orci ac auctor augue
                        mauris augue neque gravida. Auctor augue mauris augue neque gravida in
                        fermentum et sollicitudin. Tempus urna et pharetra pharetra massa massa
                        ultricies mi quis. Amet mauris commodo quis imperdiet massa. Integer
                        vitae justo eget magna fermentum iaculis eu non.
                    </p>
                </div>
            </div>

            <div class="py-16 lg:py-20">
                <div class="flex items-center pb-6">
                    <img src="/assets/img/icon-story.png" alt="icon story" />
                    <h3 class="ml-3 font-body text-2xl font-semibold text-primary dark:text-white">
                        My Story
                    </h3>
                    <a href="/blog"
                        class="flex items-center pl-10 font-body italic text-green transition-colors hover:text-secondary dark:text-green-light dark:hover:text-secondary">
                        All posts
                        <img src="/assets/img/long-arrow-right.png" class="ml-3" alt="arrow right" />
                    </a>
                </div>
                <div class="pt-8">
                    <HomePost :post="post" v-for="post in posts" :key="post.id" />
                </div>
            </div>

            <div class="pb-16 lg:pb-20">
                <div class="flex items-center pb-6">
                    <img src="/assets/img/icon-project.png" alt="icon story" />
                    <h3 class="ml-3 font-body text-2xl font-semibold text-primary dark:text-white">
                        My Projects
                    </h3>
                </div>
                <div>

                    <a href=" / "
                        class="mb-6 flex items-center justify-between border border-grey-lighter px-4 py-4 sm:px-6">
                        <span class="w-9/10 pr-8">
                            <h4 class="font-body text-lg font-semibold text-primary dark:text-white">
                                TailwindCSS
                            </h4>
                            <p class="font-body font-light text-primary dark:text-white">
                                Rapidly build modern websites without ever leaving your HTML.
                            </p>
                        </span>
                        <span class="w-1/10">
                            <img src="/assets/img/chevron-right.png" class="mx-auto" alt="chevron right" />
                        </span>
                    </a>

                    <a href=" / "
                        class="mb-6 flex items-center justify-between border border-grey-lighter px-4 py-4 sm:px-6">
                        <span class="w-9/10 pr-8">
                            <h4 class="font-body text-lg font-semibold text-primary dark:text-white">
                                Maizzle
                            </h4>
                            <p class="font-body font-light text-primary dark:text-white">
                                Framework for Rapid Email Prototyping
                            </p>
                        </span>
                        <span class="w-1/10">
                            <img src="/assets/img/chevron-right.png" class="mx-auto" alt="chevron right" />
                        </span>
                    </a>

                    <a href=" / "
                        class="mb-6 flex items-center justify-between border border-grey-lighter px-4 py-4 sm:px-6">
                        <span class="w-9/10 pr-8">
                            <h4 class="font-body text-lg font-semibold text-primary dark:text-white">
                                Alpine.js
                            </h4>
                            <p class="font-body font-light text-primary dark:text-white">
                                Think of it like Tailwind for JavaScript.
                            </p>
                        </span>
                        <span class="w-1/10">
                            <img src="/assets/img/chevron-right.png" class="mx-auto" alt="chevron right" />
                        </span>
                    </a>

                    <a href=" / "
                        class="mb-6 flex items-center justify-between border border-grey-lighter px-4 py-4 sm:px-6">
                        <span class="w-9/10 pr-8">
                            <h4 class="font-body text-lg font-semibold text-primary dark:text-white">
                                PostCSS
                            </h4>
                            <p class="font-body font-light text-primary dark:text-white">
                                A tool for transforming CSS with JavaScript
                            </p>
                        </span>
                        <span class="w-1/10">
                            <img src="/assets/img/chevron-right.png" class="mx-auto" alt="chevron right" />
                        </span>
                    </a>

                </div>
            </div>
        </div>
    </div>
</template>

