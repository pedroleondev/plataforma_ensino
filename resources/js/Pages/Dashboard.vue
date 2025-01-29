<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

defineProps({
    adminName: String,
});
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Painel Administrativo" />

        <div class="p-6 bg-white shadow-md rounded-lg">
            <h1 class="text-2xl font-bold text-gray-900">Painel Administrativo</h1>
            <p class="mt-2 text-gray-600">Bem-vindo, {{ adminName }}!</p>

            <div class="mt-6 space-y-4">
                <a href="/professores" class="block px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-700">
                    Gerenciar Professores
                </a>
                <a href="/disciplinas" class="block px-4 py-2 bg-green-500 text-white rounded hover:bg-green-700">
                    Gerenciar Disciplinas
                </a>
                <a href="/matriculas" class="block px-4 py-2 bg-red-500 text-white rounded hover:bg-red-700">
                    Gerenciar Matrículas
                </a>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
