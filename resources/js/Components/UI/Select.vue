<template>
    <div>
        <VueMultiselect v-model="selected" :options="options">
        </VueMultiselect>
    </div>
</template>
  
<script setup>
import VueMultiselect from 'vue-multiselect'
import { ref } from 'vue'
const selected = ref(null)
const options = ref(['carnes', 'of', 'options'])

</script>
  
<style src="../../../../node_modules/vue-multiselect/dist/vue-multiselect.css"></style>