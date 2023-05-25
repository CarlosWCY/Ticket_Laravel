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
                    <label class="label">ID Categoria</label>
                    <input v-model="form.id_categoria" type="text"
                        class="input">
                    <div v-if="form.errors.id_categoria" class="input-error">{{ form.errors.id_categoria }}</div>
                </div>
                <div class="col-span-6">
                    <label class="label">Código</label>
                    <input v-model="form.codigo" type="text"
                        class="input">
                    <div v-if="form.errors.codigo" class="input-error">{{ form.errors.codigo }}</div>
                </div>
                <div class="col-span-6">
                    <label class="label">Precio de Venta</label>
                    <input v-model="form.precio_venta" type="text"
                        class="input">
                    <div v-if="form.errors.precio_venta" class="input-error">{{ form.errors.precio_venta }}</div>
                </div>
                <div class="col-span-6">
                    <label class="label">Stock</label>
                    <input v-model="form.stock" type="text"
                        class="input">
                    <div v-if="form.errors.stock" class="input-error">{{ form.errors.stock }}</div>
                </div>
                <div class="col-span-6">
                    <label class="label">Estado</label>
                    <input v-model="form.estado" type="text"
                        class="input">
                    <div v-if="form.errors.estado" class="input-error">{{ form.errors.estado }}</div>
                </div>
                
                <div class="col-span-6">
                    <button type="submit"
                        class="btn-primary">Crear Producto</button>
                </div>
            </div>
        </form>
    </MainLayout>
</template>

<script setup>
import { useForm } from '@inertiajs/vue3'
import MainLayout from '../../Layouts/MainLayout.vue';

const form = useForm({
    id_categoria: null,
    codigo: null,
    nombre: null,
    precio_venta: null,
    stock: null,
    descripcion: null,
    estado: null,
})

const create = () => form.post(`/producto`)
</script>
