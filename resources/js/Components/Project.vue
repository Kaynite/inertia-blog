<script setup lang="ts">
import { Project } from '@/types';

defineProps<{
    project: Project
}>();
</script>

<template>
    <Link :href="route('projects.show', project.id)" class="mb-6 flex items-center justify-between border border-grey-lighter px-4 py-4 sm:px-6">
        <span class="w-9/10 pr-8">
            <h4 class="font-body text-lg font-semibold text-primary dark:text-white">
                {{ project.name }}
            </h4>
            <p class="font-body font-light text-primary dark:text-white">
                {{ project.brief }}
            </p>
        </span>
        <span class="w-1/10">
            <img src="/assets/img/chevron-right.png" class="mx-auto" alt="chevron right" />
        </span>
    </Link>
</template>
