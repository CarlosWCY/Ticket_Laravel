<template>
    <MainLayout>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
            <Box v-for="(categoria, index) in categorias" :key="categoria.id">
                <div>
                    <span class="text-gray-400">{{ index + 1 }}</span>
                    <p>
                        {{ categoria.nombre }}
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
    categorias: Array,
})
</script>