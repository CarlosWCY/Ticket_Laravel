<template>
    <MainLayout></MainLayout>
    <div v-for="(cliente, index) in clientes" :key="cliente.id">
        <p>{{ index + 1 }}
            <Link :href="`/cliente/${cliente.id}`">{{ cliente.nombre }}</Link>
        </p>

    </div>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue';
defineProps({
    clientes: Array,
})
</script>