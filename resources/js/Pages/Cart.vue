<template>
    <AppLayout>
    <div class="flex justify-center bg-gradient-to-b from-gray-200 pt-2">
        <div class="text-sm mt-1 mr-2"><span class="underline">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="12" height="12"
                             viewBox="0 0 50 50">
                            <path d="M 25 1.0507812 C 24.7825 1.0507812 24.565859 1.1197656 24.380859 1.2597656 L 1.3808594 19.210938 C 0.95085938 19.550938 0.8709375 20.179141 1.2109375 20.619141 C 1.5509375 21.049141 2.1791406 21.129062 2.6191406 20.789062 L 4 19.710938 L 4 46 C 4 46.55 4.45 47 5 47 L 19 47 L 19 29 L 31 29 L 31 47 L 45 47 C 45.55 47 46 46.55 46 46 L 46 19.710938 L 47.380859 20.789062 C 47.570859 20.929063 47.78 21 48 21 C 48.3 21 48.589063 20.869141 48.789062 20.619141 C 49.129063 20.179141 49.049141 19.550938 48.619141 19.210938 L 25.619141 1.2597656 C 25.434141 1.1197656 25.2175 1.0507812 25 1.0507812 z M 35 5 L 35 6.0507812 L 41 10.730469 L 41 5 L 35 5 z"></path>
                        </svg>
                    </span></div>
        </div>



    <h1 className="font-ropa text-tra text-3xl text-center mb-14 mt-12">Cart</h1>
    <div className="text-center bg-[#dfe7f7] mx-64 text-sm">
        <div className="py-1.5">Should you require any assistance with placing your order, it is available 24/7 at
            info@freddy.rs
        </div>
    </div>

    <div className="mt-5 mx-64 flex">
        <div className="w-3/4 mr-6">
            <div v-for="product in products">
                <div className="bg-[#EEEEEE] flex justify-around text-sm">
                    <h3 className="font-ropa font-bold py-3 text-transform: uppercase mt-0 w-2/12 text-center">Image</h3>
                    <h3 className="font-ropa font-bold py-3 text-transform: uppercase mt-0 w-6/12">Article Name</h3>
                    <h3 className="font-ropa font-bold py-3 text-transform: uppercase mt-0 pl-5 w-3/12">Quantity</h3>
                    <h3 className="font-ropa font-bold py-3 text-transform: uppercase mt-0 w-2/12">Price</h3>
                    <h3 className="font-ropa font-bold py-3 text-transform: uppercase mt-0 w-1/12">Total</h3>
                </div>
                <div className="text-sm flex justify-around border-solid border-1 border-gray-100">
                    <div className="w-2/12 flex justify-center">
                        <img src="https://freddy.hr/image/cache/catalog/izdelki/WRUP1RC006_N0/wrup1rc006_n_0M-53x80.jpg"
                             alt="">
                    </div>
                    <div className="font-ropa w-6/12">
                        <a className="text-black" href="/">{{ product.name }}</a><br>
                        <span>Size: XS</span><br>
                        <span>Award points: 387</span>
                    </div>
                    <div className="font-ropa w-3/12 flex justify-start">
                        <div className="my-auto mx-5">
                            <div class="text-xl">
                                {{ product.qty }}
                            </div>
                        </div>
                        <div className="flex">
                            <Link
                                :href="('/cart.remove')"
                                method="post"
                                preserve-scroll
                                :data="{
                                            id: product.rowId,

                                            }"
                                as="button">
                                <svg class="bg-red-500" clip-rule="evenodd" width="32" height="32" fill="white"
                                     stroke-linejoin="round" stroke-miterlimit="2" viewBox="-3 -3 30 30"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="m12 10.93 5.719-5.72c.146-.146.339-.219.531-.219.404 0 .75.324.75.749 0 .193-.073.385-.219.532l-5.72 5.719 5.719 5.719c.147.147.22.339.22.531 0 .427-.349.75-.75.75-.192 0-.385-.073-.531-.219l-5.719-5.719-5.719 5.719c-.146.146-.339.219-.531.219-.401 0-.75-.323-.75-.75 0-.192.073-.384.22-.531l5.719-5.719-5.72-5.719c-.146-.147-.219-.339-.219-.532 0-.425.346-.749.75-.749.192 0 .385.073.531.219z"/>
                                </svg>
                            </Link>
                        </div>
                    </div>
                    <h3 className="font-ropa font-bold text-base py-2 text-transform: uppercase mt-0 w-2/12">112.89 €</h3>
                    <h3 className="font-ropa font-bold text-base py-2 text-transform: uppercase mt-0 w-1/12">112.89 €</h3>
                </div>
            </div>

        </div>
        <div className="w-4/12">
            <div className="bg-[#EEEEEE] p-4">
                <div className="flex justify-between border-b border-solid border-gray-300 py-2">
                    <h1 className="font-bold font-ropa text-tra text-transform: uppercase text-sm">Use a coupon code to
                        get a discount</h1>

                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                         clip-rule="evenodd">
                        <path
                            d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                    </svg>
                </div>
                <div className="flex justify-between py-2">
                    <h1 className="font-bold font-ropa text-tra text-transform: uppercase text-sm">Use a gift
                        voucher</h1>

                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                         clip-rule="evenodd">
                        <path
                            d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                    </svg>
                </div>

                <div className="flex font-ropa">
                    <div className="w-3/4 font-bold">
                        <div className="bg-white border-b border-solid border-gray-200 py-2 text-right">
                            <span className="mr-12">Total:</span>
                        </div>
                        <div className="bg-white border-b border-solid border-gray-200 py-2 text-right">
                            <span className="mr-12">VAT 20%:</span>
                        </div>
                        <div className="bg-white py-2 text-right">
                            <span className="mr-12">Grand total:</span>
                        </div>
                    </div>
                    <div className="font-ropa">
                        <div className="bg-white border-b border-solid border-gray-200 py-2">
                            <span>{{ total }} €</span>
                        </div>
                        <div className="bg-white border-b border-solid border-gray-200 py-2">
                            <span>{{ vatAmount }} €</span>
                        </div>
                        <div className="bg-white py-2">
                            <span>{{ atTotal }} €</span>
                        </div>
                    </div>
                </div>
            </div>
            <div className="flex justify-between bg-[#EEEEEE] px-5 pb-5 pt-3">
                <Link :href="('/')">
                <button className="flex font-ropa text-white text-transform: uppercase bg-black pr-1 pt-2 pl-2">

                    <div className="px-1 pb-1">
                        <svg width="25" height="25" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
                             fill="currentColor" stroke-miterlimit="2" viewBox="0 0 24 24"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z"
                                fill-rule="nonzero"/>
                        </svg>
                    </div>

                    <h1>Keep shopping</h1>

                </button>
                </Link>
                <button className="flex font-ropa text-white text-transform: uppercase bg-black pr-1 pt-2 pl-2">

<!--                    <h1>Checkout</h1>-->
                    <Link
                        :href="('/checkout')"
                        method="post"
                        classes="px-3 py-2 mr-2 rounded text-white text-sm font-bold whitespace-no-wrap bg-blue-600 hover:bg-blue-800"
                        as="button"
                    >Checkout</Link>
                    <div className="px-1 pb-1">
                        <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                             clip-rule="evenodd">
                            <path
                                d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                        </svg>
                    </div>

                </button>
            </div>
        </div>
    </div>
    <Tags/>
    <div className="bg-[#EEEEEE] text-center">
        <div className=" flex justify-center pb-1.5">
            <h1 className="font-bold font-ropa text-tra text-transform: uppercase text-sm pt-9 mx-64 h-16">
                <div className="border-solid border-b-2 pb-3 w-32">Related Products</div>
            </h1>
        </div>
        <div className="flex mx-64 mt-8 font-ropa text-base text-left text-gray-500 pb-16">
            <div className="mr-6">
                <a href="/">
                    <img
                        src="https://freddy.hr/image/cache/catalog/izdelki/CITYWALKLXCM_NV1/citywalklxcm_nv1_-_02M-400x600w.jpg"
                        alt="">
                </a>
                <h1>SPORT SHOES WITH MILITARY PRINT</h1>
                <div className="text-black text-xl">79,54 €</div>
            </div>
            <div className="mr-6">
                <a href="/">
                    <img src="https://freddy.hr/image/cache/catalog/izdelki/WRUP4RC006/usnje-400x600w.jpeg" alt="">
                </a>
                <h1>NOW® 7/8 SUPERSKINNY ECO LEATHER BLACK PANTS</h1>
                <div className="text-black text-xl">89,55 €</div>
            </div>
            <div className="mr-6">
                <a href="/">
                    <img src="https://freddy.hr/image/cache/catalog/izdelki/WRUP4HC006/nCF704dQ-400x600w.jpeg" alt="">
                </a>
                <h1>WR.UP® 7/8 SUPERSKINNY ECO LEATHER BLACK PANTS</h1>
                <div className="text-black text-xl">191,22 €</div>
            </div>
            <div className="mr-6">
                <a href="/">
                    <img src="https://freddy.hr/image/cache/catalog/izdelki/S2WTWS1/rn%20pulover-400x600w.jpeg" alt="">
                </a>
                <h1 className="">BLACK® LIGHT BLACK SWEATER WITH METAL NETS</h1>
                <div className="text-black text-xl">111,87 €</div>
            </div>
        </div>
    </div>
    </AppLayout>
</template>

<script setup>
import { Link, useForm } from '@inertiajs/inertia-vue3';
import AppLayout from "../Layouts/AppLayout.vue";

let props = defineProps({
    products: Object,
    total: Number,
    atTotal: Number,
    vatAmount: Number,
});

// export default {
//     name: "Cart.vue"
// }
</script>

<style scoped>

</style>
