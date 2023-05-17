<template>
    <MainLayout>
        Info of the client: {{ cliente.nombre }}
        DNI: {{ cliente.dni }}
    </MainLayout>
</template>

<script setup>
import MainLayout from '../../Layouts/MainLayout.vue';

defineProps({
    cliente: Object,
})
</script>