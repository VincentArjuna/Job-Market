<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import MainPanel from "@/Components/MainPanel.vue";
import CompleteTable from "@/Components/CompleteTable.vue";
import { Head } from "@inertiajs/inertia-vue3";

defineProps({
    quests: Object,
});
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
            <CompleteTable>
                <template #header>
                    <th scope="col" class="py-3 pl-4">
                        <div class="flex items-center h-5">
                            <input
                                id="checkbox-all"
                                type="checkbox"
                                class="text-blue-600 border-gray-200 rounded focus:ring-blue-500"
                            />
                            <label for="checkbox" class="sr-only">
                                Checkbox
                            </label>
                        </div>
                    </th>
                    <th
                        scope="col"
                        class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase"
                    >
                        Title
                    </th>
                    <th
                        scope="col"
                        class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase"
                    >
                        Description
                    </th>
                    <th
                        scope="col"
                        class="px-6 py-3 text-xs font-bold text-left text-gray-500 uppercase"
                    >
                        Currency
                    </th>
                    <th
                        scope="col"
                        class="px-6 py-3 text-xs font-bold text-right text-gray-500 uppercase"
                    >
                        Value
                    </th>
                </template>
                <template #body>
                    <tr v-for="quest in quests">
                        <td class="py-3 pl-4">
                            <div class="flex items-center h-5">
                                <input
                                    type="checkbox"
                                    class="text-blue-600 border-gray-200 rounded focus:ring-blue-500"
                                />
                                <label for="checkbox" class="sr-only">
                                    Checkbox
                                </label>
                            </div>
                        </td>
                        <td
                            class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap"
                        >
                            {{ quest.title }}
                        </td>
                        <td
                            class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap"
                        >
                            {{ quest.description }}
                        </td>
                        <td
                            class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap"
                        >
                            {{ quest.currency }}
                        </td>
                        <td
                            class="px-6 py-4 text-sm text-gray-800 whitespace-nowrap"
                        >
                            {{ quest.value }}
                        </td>
                    </tr>
                </template>
            </CompleteTable>
        </MainPanel>
    </AuthenticatedLayout>
</template>
