<template>
    <form @submit.prevent="create">
        <div class="flex  flex-col items-center h-screen">
            <div>
                <h3>CLIENTE</h3>
            </div>
            <div
                class="grid grid-cols-6 gap-4 w-1/2 border border-gray-200 dark:border-gray-800 rounded-md p-4 m-1  shadow-md dark:text-gray-300">
                <div class="col-start-2 col-span-3">
                    <label class="label">Cliente ID</label>
                    <input v-model="form.id_cliente" type="text" class="input">
                    <div v-if="form.errors.id_cliente" class="input-error">{{ form.errors.id_cliente }}</div>
                </div>
                <div class="col-span-1 pt-9">
                    <Link href="/cliente/create" class="btn-primary">+Nuevo</Link>
                </div>
                <div class="col-start-2 col-span-4">
                    <label class="label">Fecha</label>
                    <input v-model="form.fecha" type="text" class="input">
                    <div v-if="form.errors.fecha" class="input-error">{{ form.errors.fecha }}</div>
                </div>
                <div class="col-start-2 col-span-4">
                    <label class="label">Tipo de comprobante</label>
                    <input v-model="form.tipo_comprobante" type="text" class="input">
                    <div v-if="form.errors.tipo_comprobante" class="input-error">{{ form.errors.tipo_comprobante }}</div>
                </div>
                <div class="col-start-2 col-span-4">
                    <label class="label">Número de comprobante</label>
                    <input v-model="form.numero_comprobante" type="text" class="input">
                    <div v-if="form.errors.numero_comprobante" class="input-error">{{ form.errors.numero_comprobante }}</div>
                </div>
            </div>
            <div>
                <h1>PRODUCTOS</h1>
            </div>
            <div
                class="w-1/2 h-96 border border-gray-200 dark:border-gray-800 rounded-md p-4 m-1 shadow-md dark:text-gray-300">
                <p>
                    This is the form 2 table component PRODUCT SECTION
                </p>
            </div>
            <div
                class="grid grid-cols-6 gap-4 w-1/2 border border-gray-200 dark:border-gray-800 rounded-md p-4 m-1  shadow-md dark:text-gray-300">

                <div class="col-start-2 col-span-4">
                    <label class="label">Total</label>
                    <input v-model="form.total" type="text" class="input">
                    <div v-if="form.errors.total" class="input-error">{{ form.errors.total }}</div>
                </div>
                <div class="col-start-2 col-span-4">
                    <label class="label">Impuesto</label>
                    <input v-model="form.impuesto" type="text" class="input">
                    <div v-if="form.errors.impuesto" class="input-error">{{ form.errors.impuesto }}</div>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-3 w-1/2">
                <div class="col-start-3 col-span-1">
                    <button type="submit" class="btn-primary">GENERAR VENTA</button>
                </div>

            </div>
        </div>
    </form>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { useForm } from '@inertiajs/vue3'

const form = useForm({
    id_cliente: null,
    tipo_comprobante: null,
    numero_comprobante: null,
    fecha: null,
    impuesto: null,
    total: null
})

const create = () => form.post(`/venta`)
</script>