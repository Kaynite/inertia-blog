<script setup lang="ts">
defineProps<{
    links: Array<{ active: boolean, label: string, url: (string | null) }>,
}>();
</script>

<template>
    <template v-for="link in links">
        <Link :href="link.url" v-html="link.label" v-if="link.url"
            class="ml-3 cursor-pointer border-2 px-3 py-1 font-body font-medium" :class="{
                'border-secondary text-secondary': link.active,
                'border-primary text-primary transition-colors hover:border-secondary hover:text-secondary dark:border-green-light dark:text-white dark:hover:border-secondary dark:hover:text-secondary': !link.active,
            }" />
    </template>
</template>
