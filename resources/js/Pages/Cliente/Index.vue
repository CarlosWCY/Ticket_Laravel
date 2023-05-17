<template>
    <MainLayout>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            <Box v-for="(cliente, index) in clientes" :key="cliente.id">
                <div>
                    <span class="text-gray-400">{{ index + 1 }}</span>
                    <p>
                        <Link :href="`/cliente/${cliente.id}`">
                        {{ cliente.nombre }}
                        <ClienteSpace :cliente="cliente" class="text-gray-500"></ClienteSpace>
                        </Link>
                    </p>
                </div>
                <div>
                    <Link :href="`/cliente/${cliente.id}/edit`">Edit</Link>
                </div>
                <div>
                    <Link :href="`/cliente/${cliente.id}`" method="DELETE" as="button">Delete</Link>
                </div>

            </Box>
        </div>
    </MainLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue';
import Box from '../../Components/UI/Box.vue';
import ClienteSpace from '../../Components/ClienteSpace.vue';
defineProps({
    clientes: Array,
})
</script>