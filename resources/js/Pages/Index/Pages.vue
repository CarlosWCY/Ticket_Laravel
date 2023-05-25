<template>
    <MainLayout>
        <div class="m-5">
            <Link href="/cliente" class="btn-secondary">Cliente Page</Link>
        </div>
        <div class="m-5">
            <Link href="/producto_category" class="btn-secondary">Categoria Page</Link>
        </div>
        <div class="m-5">
            <Link href="/venta" class="btn-secondary">Venta Page</Link>
        </div>
        <div class="m-5">
            <Link href="/producto" class="btn-secondary">Producto Page</Link>
        </div>
    </MainLayout>
</template>

<script setup>
import MainLayout from '../../Layouts/MainLayout.vue';
import { Link } from '@inertiajs/vue3'
</script>