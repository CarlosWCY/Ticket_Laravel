<template>
    <Link href="/">Home Page</Link>&nbsp;
    <Link href="/form2">2 Table Form Page</Link>
    <br>
    <br>
    <slot>

    </slot>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
</script>