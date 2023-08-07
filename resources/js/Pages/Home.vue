<template>
<div class="text-center">
    <div class="flex justify-between mb-6">
        <h1 class="text-3xl">{{ lengths }}</h1>


    </div>

    <div>
        <div class="flex items-center mb-4">
            <input v-model="lengthNormal" id="normal" type="checkbox" value="normal" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="normal" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">1</label>
        </div>


        <div class="flex items-center mb-4">
            <input v-model="lengthRegular"  id="regular" type="checkbox" value="regular" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="regular" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">2</label>
        </div>
    </div>

    <div>
        <ul>
            <li v-for="product in products.data" :key="product.id" v-text="product.length">
            </li>
        </ul>
    </div>
</div>
</template>

<script setup>
import {ref, watch, watchEffect} from "vue";
import {Inertia} from "@inertiajs/inertia";
import throttle from "lodash/throttle";

let props = defineProps({
    products: Object,
    filters: Object,
    lengths: Object,

});

let lengthNormal = ref(props.filters.lengthNormal);
let lengthRegular = ref(props.filters.lengthRegular);
let filters = ref(props.filters);
let lengths = ref(props.lengths);


watch([
     lengthRegular, lengthNormal
], ([
    newreg, newnor, data,
          ]) => {
    Inertia.get('/', { lengthRegular: newreg,  lengthNormal: newnor, filters: data,   }, {
        preserveState: true,
    });

});

// watch(filters, throttle(function(value){
//     Inertia.get(window.location, { lengthRegular: value, lengthNormal: value }, {
//         preserveState: true,
//         replace:true
//     });
// } ));
//
// watch(lengthNormal, throttle(function(value){
//     Inertia.get(window.location, { lengthNormal: value }, {
//         preserveState: true,
//         replace:true
//     });
// } ));



</script>

<style scoped>

</style>
