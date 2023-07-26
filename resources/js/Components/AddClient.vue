<template>

        <form @submit.prevent="create">
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-2">
                    <label class="label">Nombre</label>
                    <input v-model="form.nombre" type="text"
                        class="input">
                    <div v-if="form.errors.nombre" class="input-error">{{ form.errors.nombre }}</div>
                </div>
                <div class="col-span-2">
                    <label class="label">Apellido Paterno</label>
                    <input v-model="form.apellido_paterno" type="text"
                        class="input">
                    <div v-if="form.errors.apellido_paterno" class="input-error">{{ form.errors.apellido_paterno }}</div>
                </div>
                <div class="col-span-2">
                    <label class="label">Apellido Materno</label>
                    <input v-model="form.apellido_materno" type="text"
                        class="input">
                    <div v-if="form.errors.apellido_materno" class="input-error">{{ form.errors.apellido_materno }}</div>
                </div>
                <div class="col-span-6">
                    <label class="label">DNI</label>
                    <input v-model="form.dni" type="text"
                        class="input">
                    <div v-if="form.errors.dni" class="input-error">{{ form.errors.dni }}</div>
                </div>
                <div class="col-span-6">
                    <label class="label">Dirección</label>
                    <input v-model="form.direccion" type="text"
                        class="input">
                    <div v-if="form.errors.direccion" class="input-error">{{ form.errors.direccion }}</div>
                </div>
                <div class="col-span-6">
                    <label class="label">Número de celular</label>
                    <input v-model="form.numero_celular" type="text"
                        class="input">
                    <div v-if="form.errors.numero_celular" class="input-error">{{ form.errors.numero_celular }}</div>
                </div>
                <div class="col-span-6">
                    <button type="submit"
                        class="btn-primary">Crear Nuevo Cliente</button>
                    
                </div>
            </div>
        </form>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'



const form = useForm({
    nombre: null,
    apellido_paterno: null,
    apellido_materno: null,
    dni: null,
    direccion: null,
    numero_celular: null
})

const create = () => form.post(`/cliente`)
</script>
