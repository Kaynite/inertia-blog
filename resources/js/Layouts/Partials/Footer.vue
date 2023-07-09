<script setup lang="ts">
import { Link } from '@inertiajs/vue3';

interface FooterLink {
    to: string,
    icon: string,
}

const links: FooterLink[] = [
    {
        to: "https://github.com/Kaynite",
        icon: "github",
    },
    {
        to: "https://linkedin.com/in/kareemsaber",
        icon: "linkedin",
    }
]
</script>
<template>
    <div class="container mx-auto">
        <div class="flex flex-col items-center justify-between border-t border-grey-lighter py-10 sm:flex-row sm:py-12">
            <div class="mr-auto flex flex-col items-center sm:flex-row">
                <Link :href="route('home')" class="mr-auto sm:mr-6">
                    <img src="/assets/img/logo.svg" alt="logo" />
                </Link>
                <p class="pt-5 font-body font-light text-primary dark:text-white sm:pt-0">
                    &copy;{{ new Date().getFullYear() }} Kareem.
                </p>
            </div>
            <div class="mr-auto flex items-center pt-5 sm:mr-0 sm:pt-0">
                <a :href="link.to" target="_blank" v-for="(link, index) in links" :key="index">
                    <i
                        class="text-4xl text-primary dark:text-white pl-5 hover:text-secondary dark:hover:text-secondary transition-colors bx bxl-github"
                        :class="`bxl-${link.icon}`"
                    />
                </a>
            </div>
        </div>
    </div>
</template>
