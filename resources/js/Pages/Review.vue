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
        <h1 class="font-bold font-ropa pt-10 text-center text-tra text-3xl">Write a review</h1>
    <div class="flex px-20 pt-20">
        <div>
            <div class="mr-6 font-ropa text-base text-left text-gray-500 border-solid flex">
                <div class="pr-4">
                    <Link v-bind:href="'/product/' + product.id">
                        <img src="https://freddy.hr/image/cache/catalog/izdelki/BRITNEYF301_Z106X-/BRITNEYF301_Z106X_2-400x600w.jpg" alt="">
                    </Link>
                </div>
                <div>
                    <div class="text-black text-center text-md mb-3 py-1">Code:WRUPs4RC001ORG_Z64</div>
                    <h1 class="font-medium text-black text-2xl">{{ product.name }}</h1>
                    <div>{{ product.description }}</div>
                    <div class="text-black text-3xl mt-2 mb-2">{{ product.price }}&nbsp;€ </div>

                    <div class="bg-gray-200 text-center text-transform: uppercase text-sm  bg-green-400 bg-[#97C19B] font-ropa text-white mt-3 py-0.5">Eco Friendly</div>
                    <div v-if="$page.props.flash.message" class="mt-12 text-xl text-blue-600 mb-4">
                        {{ $page.props.flash.message }}
                    </div>
                </div>
            </div>
        </div>
        <div class="flex justify-center px-32 ">
            <form @submit.prevent="submit">
                <label class="pr-6" for="grade">Product grade</label>
                <select id="grade" v-model="form.grade" class="mb-6 w-20 ">
                    <option disabled value="">Please select one</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                <textarea rows="12" cols="105" id="contents" v-model="form.contents" />
                <input id="productID" type="hidden" value="page.props.user.id">
                <button class="mt-5 px-2 rounded text-white font-bold whitespace-no-wrap bg-black hover:bg-blue-800" type="submit" :disabled="form.processing">Submit</button>
            </form>

        </div>
    </div>
    </AppLayout>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { reactive } from 'vue'
import { router } from '@inertiajs/inertia-vue3'
import {Inertia} from "@inertiajs/inertia";
import AppLayout from "../Layouts/AppLayout.vue";

const form = reactive({
    user: null,
    grade: null,
    contents: null,
    productID: null,
})

function submit() {
    form.productID = props.product.id
    if (props.user === null){
        form.user = "Guest"
    }else {
        form.user = props.user.name
    }
    Inertia.post('/postreview', form)
    // console.log(form)
}


let props = defineProps({
    product: Object,
    user: Object,


});
</script>
