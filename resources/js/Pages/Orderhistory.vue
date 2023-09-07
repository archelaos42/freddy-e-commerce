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

    <h1 class="font-ropa text-tra text-3xl text-center mb-14 mt-12">Order history</h1>
<!--    <div class="text-center bg-[#dfe7f7] mx-64 text-sm">-->
<!--        <div class="py-1.5">Should you require any assistance with placing your order, it is available 24/7 at info@freddy.rs</div>-->
<!--    </div>-->

    <div class="mt-5 mx-64 flex">
        <div class="w-3/4 mr-6">
            <div class="flex">
                <h3 class="font-ropa font-bold py-3 text-transform: uppercase mt-0 w-2/12 text-center">Order no 2957483</h3>
                <h3 class="font-ropa font-bold py-3 ml-auto text-transform: uppercase mt-0 w-2/12 text-center">Placed on 24.5.2020</h3>
            </div>
            <div class="bg-[#EEEEEE] flex justify-around text-sm">
                <h3 class="font-ropa font-bold py-3 text-transform: uppercase mt-0 w-2/12 text-center">Image</h3>
                <h3 class="font-ropa font-bold py-3 text-transform: uppercase mt-0 w-6/12">Article Name</h3>
                <h3 class="font-ropa font-bold py-3 text-transform: uppercase mt-0 pl-5 w-3/12">Quantity</h3>
                <h3 class="font-ropa font-bold py-3 text-transform: uppercase mt-0 w-2/12">Price</h3>
                <h3 class="font-ropa font-bold py-3 text-transform: uppercase mt-0 w-1/12">Total</h3>
            </div>
            <div class="text-sm flex justify-around border-solid border-1 border-gray-100">
                <div class="w-2/12 flex justify-center">
                    <img src="https://freddy.hr/image/cache/catalog/izdelki/WRUP1RC001_N/wrup1rc001org_n_-_02-53x80.jpg" alt="">
                </div>
                <div class="font-ropa w-6/12">
                    <a class="text-black" href="/">WR.UP® SKINNY EKO KOŽNE HLAČE U NORMALNOM STRUKU</a><br>
                    <span>Size: XS</span><br>
                    <span>Award points: 387</span>
                </div>
                <div class="font-ropa w-3/12 flex justify-start">
                    <h3 class="font-ropa font-bold text-base py-2 pl-10 text-transform: uppercase mt-0 w-2/12">2</h3>
                </div>
                <h3 class="font-ropa font-bold text-base py-2 text-transform: uppercase mt-0 w-2/12">112.89 €</h3>
                <h3 class="font-ropa font-bold text-base py-2 text-transform: uppercase mt-0 w-1/12"></h3>
            </div>
            <div class="text-sm flex justify-around border-solid border-1 border-gray-100">
                <div class="w-2/12 flex justify-center">
                    <img src="https://freddy.hr/image/cache/catalog/izdelki/WRUP1HC002ORG_J4B/WRUP1HC002ORG_J4B_-_03m-53x80.jpg" alt="">
                </div>
                <div class="font-ropa w-6/12">
                    <a class="text-black" href="/">WR.UP® SKINNY EKO KOŽNE HLAČE U NORMALNOM STRUKU</a><br>
                    <span>Size: XS</span><br>
                    <span>Award points: 387</span>
                </div>
                <div class="font-ropa w-3/12 flex justify-start">
                    <h3 class="font-ropa font-bold text-base py-2 pl-10 text-transform: uppercase mt-0 w-2/12">2</h3>
                </div>
                <h3 class="font-ropa font-bold text-base py-2 text-transform: uppercase mt-0 w-2/12">112.89 €</h3>
                <h3 class="font-ropa font-bold text-base py-2 text-transform: uppercase mt-0 w-1/12">224 €</h3>
            </div>
        </div>


        <div class="w-4/12">
            <div class="bg-[#EEEEEE] p-4">

                <div class="flex justify-between py-2">
                    <h1 class="font-bold font-ropa text-tra text-transform: uppercase text-sm">All orders info</h1>

                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/></svg>
                </div>

                <div class="flex font-ropa">
                    <div class="w-3/4 font-bold">
                        <div class="bg-white border-b border-solid border-gray-200 py-2 text-right">
                            <span class="mr-12">Total no of orders:</span>
                        </div>
                        <div class="bg-white border-b border-solid border-gray-200 py-2 text-right">
                            <span class="mr-12">Total amount spent:</span>
                        </div>
                        <div class="bg-white py-2 text-right">
                            <span class="mr-12">Total award points gained:</span>
                        </div>
                    </div>
                    <div class="font-ropa">
                        <div class="bg-white border-b border-solid border-gray-200 py-2">
                            <span>1</span>
                        </div>
                        <div class="bg-white border-b border-solid border-gray-200 py-2">
                            <span>224.36 €</span>
                        </div>
                        <div class="bg-white py-2">
                            <span>312</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="flex justify-between bg-[#EEEEEE] px-5 pb-5 pt-3">
                <Link :href="'/account'">
                    <button class="flex font-ropa text-white text-transform: uppercase bg-black pr-1 pt-2 pl-2">

                        <h1>Back</h1>

                        <div class="px-1 pb-1">
                            <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                            </svg>
                        </div>

                    </button>
                </Link>
            </div>
        </div>


    </div>
    <Tags />
    </AppLayout>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import AppLayout from "../Layouts/AppLayout.vue";
export default {
    name: "Orderhistory.vue",
    components: {Link, AppLayout}

}
</script>
