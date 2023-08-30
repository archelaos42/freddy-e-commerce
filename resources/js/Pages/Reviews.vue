<template>
    <h1 class="text-center text-3xl mb-12">Reviews for {{ product.name }}</h1>


    <div class="" v-for="review in reviews">
        <div class="bg-gray-200 mx-56 border-black border-solid border-1 p-6 mb-12 font-ropa">
            <div class="flex my-8 text-2xl border-gray-500 border-bottom">
                <div class="mx-60">User grade is {{ review.grade }}</div>
                <div class="mx-60">Review by {{ review.user_name }}</div>
            </div>
            <div class="text-xl text-center pt-3">{{ review.content }} {{ review.content }}</div>
        </div>
    </div>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/inertia-vue3';
import 'tw-elements';

let props = defineProps({
    reviews: Object,
    product: Object,

});



</script>
