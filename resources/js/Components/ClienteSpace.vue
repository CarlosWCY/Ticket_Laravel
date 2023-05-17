<template>
    <div>
        <span class="font-bold">{{ cliente.apellido_paterno }}</span> c_ap <span class="text-gray-400">|</span> <span
            class="font-bold">{{ cliente.apellido_materno
            }}</span> c_am
    </div>
</template>

<script setup>

defineProps({
    cliente: Object,
})
</script>