<template>
    <AppLayout>
<!--Carousel directly beneath the navigation-->
    <Carousel />
<!--Tags underneath the carousel-->
    <div class="flex justify-start mx-6 mt-3">
        <div class="flex w-1/4">
            <div class=" mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path d="M20.431 9.548c-.95-2.602-.411-3.427.589-4.478l.85-.893c-4.761-4.065-3.786-3.222-4.854-4.177-.539.557-1.193 1.428-2.42 1.428-1.26 0-2.08-.921-2.584-1.38-.557.492-1.385 1.38-2.608 1.38-1.242 0-1.92-.913-2.402-1.411l-4.871 4.16.85.893c.999 1.051 1.538 1.876.589 4.478-.843 2.309-1.57 3.991-1.57 5.817 0 3.266 2.071 5.67 5.682 6.597 2.596.666 2.989.951 4.318 2.038 1.329-1.087 1.722-1.372 4.318-2.038 3.612-.927 5.682-3.332 5.682-6.597 0-1.826-.727-3.507-1.569-5.817zm-5.832 6.452l-2.599-1.367-2.599 1.367.494-2.895-2.102-2.049 2.906-.422 1.301-2.634 1.3 2.634 2.906.422-2.104 2.049.497 2.895z"/></svg>            </div>
            <div class="">
                <h3 class="font-ropa font-bold text-transform: uppercase">Secure Shopping</h3>
                <div class="text-sm mt-1">Your shoping security is our number one concern</div>
            </div>
        </div>
        <div class="flex w-1/4 justify-start">
            <div class="mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd"><path d="M12.666 22.908l-2.787-5.379-1.634.8c-1.773.86-5.383-6.191-3.649-7.12l1.648-.812-2.764-5.397-1.667.823c-5.702 2.972 3.351 20.569 9.183 17.903.096-.043 1.664-.815 1.67-.818zm4.902-2.603l1.041 1.71c-1.019.674-2.147 1.197-3.351 1.537l-.934-1.824c1.175-.28 2.27-.768 3.244-1.423zm2.922-3.022l1.882.752c-.678 1.162-1.546 2.199-2.56 3.071l-1.057-1.736c.668-.612 1.253-1.315 1.735-2.087zm.699-1.336c.522-1.211.811-2.546.811-3.947 0-5.519-4.481-10-10-10-2.497 0-4.781.917-6.534 2.432l-.933-1.824c2.05-1.632 4.645-2.608 7.467-2.608 6.623 0 12 5.377 12 12 0 1.664-.34 3.249-.953 4.69l-1.858-.743zm-3.511-.947h-1.438v-1.55h-2.88v-.989l2.46-3.96h1.858v3.81h.78v1.139h-.78v1.55zm-5.07 0h-4.608v-.919l.84-.76c1.42-1.27 2.11-2 2.13-2.761 0-.53-.32-.95-1.07-.95-.56 0-1.05.28-1.39.54l-.43-1.089c.49-.37 1.25-.67 2.13-.67 1.469 0 2.278.859 2.278 2.039 0 1.091-.789 1.961-1.728 2.801l-.6.5v.02h2.448v1.249zm3.632-2.689v-1.44c0-.391.02-.791.05-1.211h-.04c-.21.42-.38.8-.6 1.211l-.87 1.42v.02h1.46z"/></svg>            </div>
            <div class="mr-2">
                <h3 class="font-ropa font-bold text-transform: uppercase">Support</h3>
                <div class="text-sm mt-1">info@freddy.hr</div>
            </div>
        </div>
        <div class="flex w-1/4 justify-start">
            <div class=" mr-2">
                <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill-rule="evenodd" clip-rule="evenodd"><path d="M5 11v1h8v-7h-10v-1c0-.552.448-1 1-1h10c.552 0 1 .448 1 1v2h4.667c1.117 0 1.6.576 1.936 1.107.594.94 1.536 2.432 2.109 3.378.188.312.288.67.288 1.035v4.48c0 1.089-.743 2-2 2h-1c0 1.656-1.344 3-3 3s-3-1.344-3-3h-4c0 1.656-1.344 3-3 3s-3-1.344-3-3h-1c-.552 0-1-.448-1-1v-6h-2v-2h7v2h-3zm3 5.8c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm10 0c.662 0 1.2.538 1.2 1.2 0 .662-.538 1.2-1.2 1.2-.662 0-1.2-.538-1.2-1.2 0-.662.538-1.2 1.2-1.2zm-3-2.8h-10v2h.765c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h5.53c.549-.614 1.347-1 2.235-1 .888 0 1.686.386 2.235 1h1.765v-4.575l-1.711-2.929c-.179-.307-.508-.496-.863-.496h-4.426v6zm1-5v3h5l-1.427-2.496c-.178-.312-.509-.504-.868-.504h-2.705zm-16-3h8v2h-8v-2z"/></svg>            </div>
            <div class="">
                <h3 class="font-ropa font-bold text-transform: uppercase">Free delivery</h3>
                <div class="text-sm mt-1">Upwards of 100 EUR.</div>
            </div>
        </div>
        <div class="flex w-1/4 justify-start">
            <div class=" mr-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24"><path d="M12 10c-3.865 0-7 3.134-7 7s3.135 7 7 7 7-3.134 7-7-3.135-7-7-7zm0 12c-2.762 0-5-2.239-5-5s2.238-5 5-5 5 2.239 5 5-2.238 5-5 5zm1.484-4.315l1.516-1.457-2.083-.287-.917-1.892-.917 1.892-2.083.287 1.516 1.457-.369 2.07 1.853-.992 1.854.992-.37-2.07zm-.839-9.652l5.355-8.033 3 2-4.723 7.083c-1.093-.593-2.326-.957-3.632-1.05zm-4.922 1.05l-4.723-7.083 3-2 5.355 8.033c-1.306.093-2.539.457-3.632 1.05z"/></svg>            </div>
            <div class="">
                <h3 class="font-ropa font-bold text-transform: uppercase">Guarantee</h3>
                <div class="text-sm mt-1">Product returns available for 14 days.</div>
            </div>
        </div>
    </div>
<!--The images underneath the tags, as well as the award points subscription tag-->
    <Homeimages />

    <Topsellers />

    <div class="flex justify-center">
        <a href=""><button class="flex relative mt-8 h-14 font-ropa text-white text-xl text-transform: uppercase bg-black pr-1 pl-2">

            <h1 class="my-auto">What is WR.UP?®</h1>

            <div class="px-1 my-auto">
                <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                </svg>
            </div>

        </button></a>
    </div>

    <div class="mt-8">
        <iframe class="mx-auto" width="1500" height="750"
                src="https://www.youtube.com/embed/2JsPJTex3gQ">
        </iframe>
    </div>

    <div class="flex mt-12">
        <img class="w-1/5 ml-8" src="https://freddy.hr/image/cache/catalog/bannerji/freddy-slovenija12-1080x1080.jpg" alt="">
        <img class="w-1/5 ml-8" src="https://freddy.hr/image/cache/catalog/bannerji/freddy-sloveni%20ja25-1000x1000w.jpg" alt="">
        <img class="w-1/5 ml-8" src="https://freddy.hr/image/cache/catalog/bannerji/freddy-sloveni%20ja29-1000x1000.jpg" alt="">
        <img class="w-1/5 ml-8" src="https://freddy.hr/image/cache/catalog/bannerji/freddy-sloveni%20ja32-1000x1000w.jpg" alt="">
        <img class="w-1/5 ml-8" src="https://freddy.hr/image/cache/catalog/bannerji/freddy-sloveni%20ja40-1000x1000.jpg" alt="">
    </div>
    </AppLayout>
</template>

<script setup>

import { Link, useForm } from '@inertiajs/inertia-vue3';
import Carousel from "../Layouts/Carousel.vue";
import Tags from "../Layouts/Tags.vue";
import Homeimages from "../Layouts/HomeImages.vue";
import Topsellers from "../Layouts/Topsellers.vue";
import AppLayout from "../Layouts/AppLayout.vue";



</script>

<style scoped>

</style>
