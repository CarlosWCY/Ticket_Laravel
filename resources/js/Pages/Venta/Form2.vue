<template>
    <MainLayout>
        <Form2Tables :clients="clients"></Form2Tables>
    </MainLayout>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue'
import Form2Tables from '../../Components/Form2Tables.vue';

defineProps({
    clients: {
        type: Array,
        default: ()=>[],
    }
})
</script>