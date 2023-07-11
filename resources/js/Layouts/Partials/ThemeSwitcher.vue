<script setup lang="ts">
import { ref } from 'vue';

const isDarkMode = ref<boolean>(false);

if (
    localStorage.theme === "dark" ||
    (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    localStorage.theme = "dark";
    document.documentElement.classList.add("dark");
    isDarkMode.value = true;
} else {
    localStorage.theme = "light";
    document.documentElement.classList.remove("dark");
    isDarkMode.value = false;
}

const themeSwitch = () => {
    if (localStorage.theme === "dark") {
        localStorage.theme = "light";
        document.documentElement.classList.remove("dark");
        isDarkMode.value = false;
    } else {
        localStorage.theme = "dark";
        document.documentElement.classList.add("dark");
        isDarkMode.value = true;
    }
}
</script>

<template>
    <i class="bx cursor-pointer text-3xl text-primary dark:text-white" @click="themeSwitch()"
        :class="isDarkMode ? 'bxs-sun' : 'bxs-moon'"></i>
</template>
