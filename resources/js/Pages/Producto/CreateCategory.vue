<template>
    <MainLayout>
        <form @submit.prevent="create">
            <div class="grid grid-cols-6 gap-4">
                <div class="col-span-2">
                    <label class="label">Nombre</label>
                    <input v-model="form.nombre" type="text"
                        class="input">
                    <div v-if="form.errors.nombre" class="input-error">{{ form.errors.nombre }}</div>
                </div>
                
                <div class="col-span-6">
                    <label class="label">Descripción</label>
                    <input v-model="form.descripcion" type="text"
                        class="input">
                    <div v-if="form.errors.descripcion" class="input-error">{{ form.errors.descripcion }}</div>
                </div>
                <div class="col-span-6">
                    <label class="label">Estado</label>
                    <input v-model="form.estado" type="text"
                        class="input">
                    <div v-if="form.errors.estado" class="input-error">{{ form.errors.estado }}</div>
                </div>
                
                <div class="col-span-6">
                    <button type="submit"
                        class="btn-primary">Crear Categoria</button>
                </div>
            </div>
        </form>
    </MainLayout>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue';

const form = useForm({
    nombre: null,
    descripcion: null,
    estado: null,
})

const create = () => form.post(`/producto_category`)
</script>

