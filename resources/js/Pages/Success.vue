<template>
    <div class="bg-gray-200 py-5">
        <h1 class=" text-center text-4xl mt-16 mb-12">Your payment has been successfully made!</h1>
        <p class="text-center text-xl mb-12">Your item(s) will be dispatched within 2 business days, and you will recieve an order confirmation as well as a receipt on your e-mail.</p>
        <h1 class="text-center text-2xl">Thank you for choosing Freddy.</h1>
        <div class="flex flex-col items-center mt-12">
            <button class="px-4 flex font-ropa text-white text-transform: uppercase bg-black pr-1 pt-2 pl-2 mr-3">

                <div class="py-1 pb-2">
                    <svg width="25" height="25" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" fill="currentColor" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z" fill-rule="nonzero"/>
                    </svg>
                </div>

                <!--                                <h1>Add to Cart</h1>-->
                <Link
                    :href="('/')"
                    classes=" rounded text-white text-sm font-bold whitespace-no-wrap bg-blue-600 hover:bg-blue-800"
                    as="button"
                >Keep shopping</Link>

            </button>
        </div>
    </div>
<!--    <p>{{ customer.name }}</p>-->
</template>

<script>
import { Link, useForm } from '@inertiajs/inertia-vue3';
export default {
    name: "Success",
    props: {
        customer: Object,
    },
    components: {
        Link
    },
}
</script>

<style scoped>

</style>
