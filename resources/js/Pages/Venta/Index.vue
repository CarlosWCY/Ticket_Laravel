<template>
    <MainLayout>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            <Box v-for="(venta, index) in ventas" :key="venta.id">
                <div>
                    <span class="text-gray-400">{{ index + 1 }}</span>
                    <p>
                        {{ venta.id }} {{ venta.id_cliente }}
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
    ventas: Array,
})
</script>