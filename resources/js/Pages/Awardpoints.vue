<template>
    <AppLayout>
        <div class="flex justify-center bg-gradient-to-b from-gray-200 pt-2">
            <a href="/login" class="text-sm mt-1 mr-2"><span class="underline">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="12" height="12"
                             viewBox="0 0 50 50">
                            <path d="M 25 1.0507812 C 24.7825 1.0507812 24.565859 1.1197656 24.380859 1.2597656 L 1.3808594 19.210938 C 0.95085938 19.550938 0.8709375 20.179141 1.2109375 20.619141 C 1.5509375 21.049141 2.1791406 21.129062 2.6191406 20.789062 L 4 19.710938 L 4 46 C 4 46.55 4.45 47 5 47 L 19 47 L 19 29 L 31 29 L 31 47 L 45 47 C 45.55 47 46 46.55 46 46 L 46 19.710938 L 47.380859 20.789062 C 47.570859 20.929063 47.78 21 48 21 C 48.3 21 48.589063 20.869141 48.789062 20.619141 C 49.129063 20.179141 49.049141 19.550938 48.619141 19.210938 L 25.619141 1.2597656 C 25.434141 1.1197656 25.2175 1.0507812 25 1.0507812 z M 35 5 L 35 6.0507812 L 41 10.730469 L 41 5 L 35 5 z"></path>
                        </svg>
                    </span></a>
        </div>
        <h1 class="font-ropa text-tra text-3xl text-center mb-14 mt-12">My award points</h1>
        <div class=" mt-6 mb-16 w-3/4 mx-auto font-ropa">
            <div class=" p-2">The total number of your award points is <span class="text-bold">100</span>.</div>
            <div class="flex border-solid border-gray-200 bg-gray-200 border-1 p-2 uppercase text-sm text-bold"><div class="w-1/3">Date added</div><div class="w-1/3">Description</div><div class="w-1/3 text-right">Points</div></div>
            <div class="flex border-solid border-gray-200 border-1 p-2"><div class="w-1/3">12/11/2022</div><div class="w-1/3">100 points for registration</div><div class="w-1/3 text-right">100</div></div>

        </div>
        <div class="flex justify-center">
        <button class="flex font-ropa text-white text-transform: uppercase bg-black pr-1 pt-2 pl-2 mr-3">

            <div class="px-1 pb-1 justify-center">
                <svg width="25" height="25" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" fill="currentColor" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z" fill-rule="nonzero"/>
                </svg>
            </div>
            <div class="pr-3">
            <Link
                :href="('/account')"
                classes=" rounded text-white text-sm font-bold whitespace-no-wrap bg-blue-600 hover:bg-blue-800"
                as="button"
            >Back</Link></div>

        </button>
        </div>
    </AppLayout>
</template>
<script>
import AppLayout from "../Layouts/AppLayout.vue";
import {Link} from "@inertiajs/inertia-vue3";
export default {
    components: {AppLayout, Link}
}
</script>
