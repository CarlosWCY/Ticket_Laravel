<template>
    <MainLayout></MainLayout>
    <form @submit.prevent="update">
        <div>
            <div>
                <label>Nombre</label>
                <input v-model="form.nombre" type="text">
                <div v-if="form.errors.nombre">{{ form.errors.nombre }}</div>
            </div>
            <div>
                <label>Apellido Paterno</label>
                <input v-model="form.apellido_paterno" type="text">
                <div v-if="form.errors.apellido_paterno">{{ form.errors.apellido_paterno }}</div>
            </div>
            <div>
                <label>Apellido Materno</label>
                <input v-model="form.apellido_materno" type="text">
                <div v-if="form.errors.apellido_materno">{{ form.errors.apellido_materno }}</div>
            </div>
            <div>
                <label>DNI</label>
                <input v-model="form.dni" type="text">
                <div v-if="form.errors.dni">{{ form.errors.dni }}</div>
            </div>
            <div>
                <label>Dirección</label>
                <input v-model="form.direccion" type="text">
                <div v-if="form.errors.direccion">{{ form.errors.direccion }}</div>
            </div>
            <div>
                <label>Número de celular</label>
                <input v-model="form.numero_celular" type="text">
                <div v-if="form.errors.numero_celular">{{ form.errors.numero_celular }}</div>
            </div>
            <div>
                <button type="submit">Edit</button>
            </div>
        </div>
    </form>
</template>

<script setup>
import { reactive } from 'vue'
import { useForm } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue';
const props = defineProps({
    cliente: Object,
})
const form = useForm({
    nombre: props.cliente.nombre,
    apellido_paterno: props.cliente.apellido_paterno,
    apellido_materno: props.cliente.apellido_materno,
    dni: props.cliente.dni,
    direccion: props.cliente.direccion,
    numero_celular: props.cliente.numero_celular
})

const update = () => form.put(`/cliente/${props.cliente.id}`)
</script>

<style scoped>
label {
    margin-right: 2em;
}

div {
    padding: 2px;
}
</style>