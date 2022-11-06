<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import MainPanel from '@/Components/MainPanel.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Quest" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Quest
            </h2>
        </template>

        <MainPanel>
            Quest
        </MainPanel>
    </AuthenticatedLayout>
</template>