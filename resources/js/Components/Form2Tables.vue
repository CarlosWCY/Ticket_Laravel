<template>
    This is the form2 component and a cliente: {{ cliente.dni }}
</template>

<script setup>

defineProps({
    cliente: Object,
})
</script>