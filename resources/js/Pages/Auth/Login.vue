<script setup lang="ts">
import { Head, useForm } from '@inertiajs/vue3';
import MainLayout from '@/Layouts/MainLayout.vue';

defineProps<{
    canResetPassword?: boolean;
    status?: string;
}>();

defineOptions({
    layout: MainLayout
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

const submit = () => {
    form.post(route('login'), {
        onFinish: () => {
            form.reset('password');
        },
    });
};
</script>

<template>
    <Head title="Log in" />

    <div class="container mx-auto mb-10">
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>

        <form @submit.prevent="submit">
            <div>
                <label for="email" class="dark:text-white">Email</label>

                <input id="email" type="email" class="mt-1 block w-full" v-model="form.email" required autofocus
                    autocomplete="email" />

                    <small class="mt-2 text-red">{{ form.errors.email }}</small>
            </div>

            <div class="mt-4">
                <label for="password" class="dark:text-white">Password</label>

                <input id="password" type="password" class="mt-1 block w-full" v-model="form.password" required
                    autocomplete="current-password" />

                <small class="mt-2 text-red">{{ form.errors.password }}</small>
            </div>

            <div class="block mt-4">
                <label class="flex items-center">
                    <input name="remember" v-model="form.remember" type="checkbox" />
                    <span class="ml-2 text-sm text-gray-600 dark:text-white">Remember me</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="ml-4 bg-secondary px-6 py-2 font-body font-semibold text-white hover:bg-green sm:mt-0"
                    :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    Log in
                </button>
            </div>
        </form>
    </div>
</template>
