<template>
    <MainLayout></MainLayout>
    <form @submit.prevent="create">
        <div>
            <div>
                <label>Nombre</label>
                <input v-model="form.nombre" type="text">
            </div>
            <div>
                <label>Apellido Paterno</label>
                <input v-model="form.apellido_paterno" type="text">
            </div>
            <div>
                <label>Apellido Materno</label>
                <input v-model="form.apellido_materno" type="text">
            </div>
            <div>
                <label>DNI</label>
                <input v-model="form.dni" type="text">
            </div>
            <div>
                <label>Dirección</label>
                <input v-model="form.direccion" type="text">
            </div>
            <div>
                <label>Número de celular</label>
                <input v-model="form.numero_celular" type="text">
            </div>
            <div>
                <button type="submit">Crear</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { reactive } from 'vue'
import { useForm } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue';

const form = useForm({
    nombre: null,
    apellido_paterno: null,
    apellido_materno: null,
    dni: null,
    direccion: null,
    numero_celular: null
})

const create = () => form.post('/cliente')
</script>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px;
}
</style>