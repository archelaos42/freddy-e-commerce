<template>
    <div class="flex px-20">
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
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';
import { reactive } from 'vue'
import { router } from '@inertiajs/inertia-vue3'
import {Inertia} from "@inertiajs/inertia";

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
