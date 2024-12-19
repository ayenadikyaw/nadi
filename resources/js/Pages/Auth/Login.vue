<script setup>
import { Head, Link, useForm } from '@inertiajs/vue3';

defineProps({
    canResetPassword: Boolean,
    status: String,
});

const form = useForm({
    email: '',
    password: '',
    remember: false,
});

</script>

<template>
    <Head title="Login" />
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-secondary">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-background border border-primary/30 shadow-md overflow-hidden sm:rounded-lg">
            <div class="mb-4 text-center">
                <h1 class="text-2xl font-bold"><span class="text-primary">#</span>Admin Login</h1>
            </div>

            <form @submit.prevent="form.post(route('login'))">
                <div>
                    <label class="block font-medium text-sm" for="email">Email</label>
                    <input id="email" type="email" v-model="form.email" class="mt-1 block w-full bg-background border border-primary/30 focus:border-primary focus:ring focus:ring-primary/20 rounded-md shadow-sm" required autofocus autocomplete="username">
                </div>

                <div class="mt-4">
                    <label class="block font-medium text-sm" for="password">Password</label>
                    <input id="password" type="password" v-model="form.password" class="mt-1 block w-full bg-background border border-primary/30 focus:border-primary focus:ring focus:ring-primary/20 rounded-md shadow-sm" required autocomplete="current-password">
                </div>

                <div class="block mt-4">
                    <label class="flex items-center">
                        <input type="checkbox" v-model="form.remember" class="rounded border-primary/30 text-primary shadow-sm focus:border-primary focus:ring focus:ring-primary/20">
                        <span class="ml-2 text-sm">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm hover:text-primary">
                        Forgot your password?
                    </Link>

                    <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 bg-primary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary/80 focus:bg-primary/80 active:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition ease-in-out duration-150" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                        Log in
                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
