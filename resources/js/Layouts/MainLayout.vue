<script setup lang="ts">
import AppFooter from "./Partials/Footer.vue";
import AppLogo from "./Partials/Logo.vue";
import ThemeSwitcher from "./Partials/ThemeSwitcher.vue";
import NavLink from "@/Components/NavLink.vue";
import { ref } from "vue";

const isMobileMenuOpen = ref<boolean>(false);
</script>

<template>
    <div id="main">
        <div class="container mx-auto">
            <div class="flex items-center justify-between py-6 lg:py-10">
                <AppLogo />
                <div class="flex items-center lg:hidden">
                    <ThemeSwitcher class="mr-8" />

                    <svg width="24" height="15" xmlns="http://www.w3.org/2000/svg" @click="isMobileMenuOpen = true"
                        class="fill-current text-primary dark:text-white">
                        <g fill-rule="evenodd">
                            <rect width="24" height="3" rx="1.5" />
                            <rect x="8" y="6" width="16" height="3" rx="1.5" />
                            <rect x="4" y="12" width="20" height="3" rx="1.5" />
                        </g>
                    </svg>
                </div>
                <div class="hidden lg:block">
                    <ul class="flex items-center">
                        <NavLink label="Home" :to="route('home')" />
                        <NavLink label="Blog" :to="route('posts.index')" />
                        <NavLink label="Contact" to="/contact" />
                        <NavLink label="Login" :to="route('dashboard.home')" />
                        <li>
                            <ThemeSwitcher />
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="pointer-events-none fixed inset-0 z-50 flex bg-black bg-opacity-80 opacity-0 transition-opacity lg:hidden"
            :class="isMobileMenuOpen ? 'opacity-100 pointer-events-auto' : ''">
            <div class="ml-auto w-2/3 bg-green p-4 md:w-1/3">
                <i class="bx bx-x absolute top-0 right-0 mt-4 mr-4 text-4xl text-white"
                    @click="isMobileMenuOpen = false"></i>
                <ul class="mt-8 flex flex-col">
                    <li>
                        <Link href="/" class="mb-3 block px-2 font-body text-lg font-medium text-white">Intro</Link>
                    </li>

                    <li>
                        <Link href="/blog" class="mb-3 block px-2 font-body text-lg font-medium text-white">Blog</Link>
                    </li>

                    <li>
                        <Link href="/uses" class="mb-3 block px-2 font-body text-lg font-medium text-white">Uses</Link>
                    </li>

                    <li>
                        <Link href="/contact" class="mb-3 block px-2 font-body text-lg font-medium text-white">Contact
                        </Link>
                    </li>
                </ul>
            </div>
        </div>

        <slot />

        <AppFooter />
    </div>
</template>
