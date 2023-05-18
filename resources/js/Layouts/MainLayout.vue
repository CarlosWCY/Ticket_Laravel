<template>
    <header class="border-b border-gray-200 dark:border-gray-700 dark:bg-gray-800 bg-white w-full">
        <div class="container mx-auto">
            <nav class="p-4 flex items-center justify-between">
                <div class="text-xl text-blue-800 dark:text-blue-400 font-bold text-center">
                    <Link href="/">Home Page</Link>
                </div>
                <div class="text-lg font-medium">
                    <Link href="/venta">2 Table Form Page</Link>
                </div>
                <div class="text-lg font-medium">
                    <Link href="/cliente">Client Page</Link>
                </div>
                <div>
                    <Link href="/cliente/create"
                        class="btn-primary">+ New
                    Client</Link>
                </div>
            </nav>
        </div>
    </header>
    <main class="container mx-auto">
        <div v-if="flashSuccess"
            class="mb-4 border rounded-md shadow-sm border-green-300 dark:border-green-600 bg-green-50 dark:bg-green-900 p-2">
            {{ flashSuccess }}
        </div>
        <br>
        <slot>Default</slot>
    </main>
</template>

<script setup>
import { computed } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'

const page = usePage()
const flashSuccess = computed(() => page.props.flash.success)
</script>
