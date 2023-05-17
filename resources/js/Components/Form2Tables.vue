<template>
    <div class="flex  flex-col items-center h-screen">
        <div>
            <h3>CLIENTE</h3>
        </div>
        <div
            class="grid grid-cols-6 gap-4 w-1/2 border border-gray-200 dark:border-gray-800 rounded-md p-4 m-1  shadow-md dark:text-gray-300">
            <div class="col-start-2 col-span-3">
                <label class="label">Cliente DNI</label>
                <input type="text" class="input">

            </div>
            <div class="col-span-1 pt-9">
                <Link href="/cliente/create" class="btn-primary">+Nuevo</Link>
            </div>
            <div class="col-start-2 col-span-4">
                <label class="label">Fecha</label>
                <input type="text" class="input">
            </div>
            <div class="col-start-2 col-span-4">
                <label class="label">Tipo de comprobante</label>
                <input type="text" class="input">
            </div>
            <div class="col-start-2 col-span-4">
                <label class="label">Número de comprobante</label>
                <input type="text" class="input">
            </div>
        </div>
        <div>
            <h1>PRODUCTOS</h1>
        </div>
        <div class="w-1/2 h-96 border border-gray-200 dark:border-gray-800 rounded-md p-4 m-1 shadow-md dark:text-gray-300">
            <p>
                This is the form 2 table component PRODUCT SECTION
            </p>
        </div>
        <div
            class="grid grid-cols-6 gap-4 w-1/2 border border-gray-200 dark:border-gray-800 rounded-md p-4 m-1  shadow-md dark:text-gray-300">
           
            <div class="col-start-2 col-span-4">
                <label class="label">Total</label>
                <input type="text" class="input">
            </div>
            <div class="col-start-2 col-span-4">
                <label class="label">Impuesto</label>
                <input type="text" class="input">
            </div>
        </div>
        <div class="grid grid-cols-5 gap-3 w-1/2">
            <div class="col-start-3 col-span-1">
                <button type="submit" class="btn-primary">GENERAR VENTA</button>
            </div>
            
        </div>
    </div>
</template>

<script setup>
import Box from './UI/Box.vue';
import { Link } from '@inertiajs/vue3'

defineProps({
    cliente: Object,
})
</script>