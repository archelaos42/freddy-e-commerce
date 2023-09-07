<template>
    <AppLayout>
    <div>
    <div class="text-sm mt-1 mr-2"><span class="underline">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="12" height="12"
                             viewBox="0 0 50 50">
                            <path d="M 25 1.0507812 C 24.7825 1.0507812 24.565859 1.1197656 24.380859 1.2597656 L 1.3808594 19.210938 C 0.95085938 19.550938 0.8709375 20.179141 1.2109375 20.619141 C 1.5509375 21.049141 2.1791406 21.129062 2.6191406 20.789062 L 4 19.710938 L 4 46 C 4 46.55 4.45 47 5 47 L 19 47 L 19 29 L 31 29 L 31 47 L 45 47 C 45.55 47 46 46.55 46 46 L 46 19.710938 L 47.380859 20.789062 C 47.570859 20.929063 47.78 21 48 21 C 48.3 21 48.589063 20.869141 48.789062 20.619141 C 49.129063 20.179141 49.049141 19.550938 48.619141 19.210938 L 25.619141 1.2597656 C 25.434141 1.1197656 25.2175 1.0507812 25 1.0507812 z M 35 5 L 35 6.0507812 L 41 10.730469 L 41 5 L 35 5 z"></path>
                        </svg>
                    </span></div>
        </div>
    <h1 class="pt-10 text-center text-3xl mb-12">Reviews for {{ product.name }}</h1>


    <div class="" v-for="review in reviews">
        <div class="bg-gray-200 mx-56 border-black border-solid border-1 p-6 mb-12 font-ropa">
            <div class="flex my-8 text-2xl border-gray-500 border-bottom">
                <div class="mx-60">User grade is {{ review.grade }}</div>
                <div class="mx-60">Review by {{ review.user_name }}</div>
            </div>
            <div class="text-xl text-center pt-3">{{ review.content }} {{ review.content }}</div>
        </div>
    </div>
    </AppLayout>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/inertia-vue3';
import AppLayout from "../Layouts/AppLayout.vue";
import 'tw-elements';

let props = defineProps({
    reviews: Object,
    product: Object,

});



</script>
