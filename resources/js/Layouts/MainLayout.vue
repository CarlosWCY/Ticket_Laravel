<template>
    <Link href="/">Home Page</Link>&nbsp;
    <Link href="/form2">2 Table Form Page</Link>&nbsp;
    <Link href="/cliente">Client Page</Link>&nbsp;
    <Link href="/cliente/create">New Client</Link>
    <br>

    <div v-if="flashSuccess" class="success">
        {{ flashSuccess }}
    </div>
    <br>
    <slot>

    </slot>
</template>

<script setup>
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'

const page = usePage()
const flashSuccess = computed(() => page.props.flash.success)
</script>

<style scoped>
.success {
    background-color: green;
    color: white;
}
</style>