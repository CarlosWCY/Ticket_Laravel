<template>
    <MainLayout>

    </MainLayout>
    <Form2Tables :cliente="cliente"></Form2Tables>
</template>

<script setup>
import Form2Tables from '../../Components/Form2Tables.vue';
import MainLayout from '../../Layouts/MainLayout.vue';

defineProps({
    cliente: Object,
})
</script>