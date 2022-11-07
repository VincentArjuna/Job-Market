<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Welcome" />
    
    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        
        <section class="text-gray-700 bg-gray-100 dark:text-gray-400 dark:bg-gray-900 body-font">
            <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-black dark:text-white">Get to work,
                        <br class="hidden lg:inline-block">Whenever you are ready
                    </h1>
                    <p class="mb-8 leading-relaxed">Look for something to do, with extra rewards and achievements?</p>
                    <div class="flex justify-center">
                        <Link v-if="canRegister" :href="route('register')">
                            <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Get Started</button>
                        </Link>

                        <Link v-if="$page.props.auth.user" :href="route('dashboard')">
                            <button  class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Dashboard</button>
                        </Link>

                        <Link v-else :href="route('dashboard')">
                            <button class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-2 px-6 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">Log In</button>
                        </Link>
                    </div>
                </div>
                <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="https://cdn-res.keymedia.com/cms/images/us/036/0223_637219445004061799.jpg">
                </div>
            </div>
        </section>

    </div>
</template>
