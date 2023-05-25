<template>
    <MainLayout>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            <Box v-for="(producto, index) in productos" :key="producto.id">
                <div>
                    <span class="text-gray-400">{{ index + 1 }}</span>
                    <p>
                        {{ producto.nombre }}, {{ producto.descripcion }}, precio: {{ producto.precio_venta }}
                    </p>
                </div>
                
            </Box>
        </div>
    </MainLayout>
</template>

<script setup>

import MainLayout from '../../Layouts/MainLayout.vue';
import Box from '../../Components/UI/Box.vue';
defineProps({
    productos: Array,
})
</script>