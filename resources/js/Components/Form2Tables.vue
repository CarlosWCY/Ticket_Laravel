<template>
    <form @submit.prevent="create">
        <div class="flex  flex-col items-center h-screen">
            <div>
                <h3>CLIENTE</h3>
            </div>
            <div
                class="grid grid-cols-6 gap-4 w-1/2 border border-gray-200 dark:border-gray-800 rounded-md p-4 m-1  shadow-md dark:text-gray-300">
                <div class="col-start-2 col-span-3">
                    <label class="label">Cliente ID</label>
                    <input v-model="form.id_cliente" @click="isModalOpen = true" type="text" class="input">

                    <div class="shadow-xl" v-if="isModalOpen">
                        <div class="bg-white rounded-md " ref="modal">
                            <div class="p-1">
                                <VueMultiselect v-model="form.id_cliente" :options="clients" placeholder="Buscar Cliente" label="nombre" track-by="" id="id" @search-change="onSearchClientsChange" @input="onSelectedClient">
                                </VueMultiselect>
                            </div>
                            <div class="p-4">

                            </div>

                            <div class="">
                                <p @click="addClientOpen = true"
                                    class="bg-white text-blue-600 rounded-b border-2 border-t-gray-400 p-2">+ Nuevo Cliente
                                </p>
                                <div class="absolute w-full bg-black bg-opacity-30 h-screen top-0 left-0 flex justify-center px-8"
                                    v-if="addClientOpen">
                                    <div class="p-4 bg-gray-700 self-start mt-32 max-w-screen-md rounded-md"
                                        ref="modalClient">
                                        <AddClient></AddClient>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                    <div v-if="form.errors.id_cliente" class="input-error">{{ form.errors.id_cliente }}</div>
                </div>
                <div class="col-start-2 col-span-4">
                    <label class="label">Fecha</label>
                    <input v-model="form.fecha" type="text" class="input">
                    <div v-if="form.errors.fecha" class="input-error">{{ form.errors.fecha }}</div>
                </div>
                <div class="col-start-2 col-span-4">
                    <label class="label">Tipo de comprobante</label>
                    <input v-model="form.tipo_comprobante" type="text" class="input">
                    <div v-if="form.errors.tipo_comprobante" class="input-error">{{ form.errors.tipo_comprobante }}</div>
                </div>
                <div class="col-start-2 col-span-4">
                    <label class="label">Número de comprobante</label>
                    <input v-model="form.numero_comprobante" type="text" class="input">
                    <div v-if="form.errors.numero_comprobante" class="input-error">{{ form.errors.numero_comprobante }}
                    </div>
                </div>
            </div>
            <div>
                <h1>PRODUCTOS</h1>
            </div>
            <div
                class="w-1/2 h-96 border border-gray-200 dark:border-gray-800 rounded-md p-4 m-1 shadow-md dark:text-gray-300">
                <p>
                    This is the form 2 table component PRODUCT SECTION
                </p>
            </div>
            <div
                class="grid grid-cols-6 gap-4 w-1/2 border border-gray-200 dark:border-gray-800 rounded-md p-4 m-1  shadow-md dark:text-gray-300">

                <div class="col-start-2 col-span-4">
                    <label class="label">Total</label>
                    <input v-model="form.total" type="text" class="input">
                    <div v-if="form.errors.total" class="input-error">{{ form.errors.total }}</div>
                </div>
                <div class="col-start-2 col-span-4">
                    <label class="label">Impuesto</label>
                    <input v-model="form.impuesto" type="text" class="input">
                    <div v-if="form.errors.impuesto" class="input-error">{{ form.errors.impuesto }}</div>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-3 w-1/2">
                <div class="col-start-3 col-span-1">
                    <button type="submit" class="btn-primary">GENERAR VENTA</button>
                </div>

            </div>
        </div>
    </form>
</template>

<script setup>
import AddClient from '../Components/AddClient.vue'
import { useForm } from '@inertiajs/vue3'
import { ref } from 'vue'
import { onClickOutside } from '@vueuse/core'
import Select from '../Components/UI/Select.vue'
import VueMultiselect from 'vue-multiselect'

const selected = ref(null)
const options = ref(['1', '2', '3'])
defineProps({
    clients: {
        type: Array,
        default: ()=>[],
    }
})

function onSearchClientsChange(){
    console.log('onSearchClientsChange')
}
function onSelectedClient(){
    console.log('onSelectClient')
}

const isModalOpen = ref(false)
const modal = ref(null)

const addClientOpen = ref(false)
const modalClient = ref(null)

onClickOutside(modal, () => (isModalOpen.value = false))
onClickOutside(modalClient, () => (addClientOpen.value = false))

const form = useForm({
    id_cliente: null,
    tipo_comprobante: null,
    numero_comprobante: null,
    fecha: null,
    impuesto: null,
    total: null
})

const create = () => form.post(`/venta`)
</script>

