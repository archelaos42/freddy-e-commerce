<template>
<!--Carousel directly beneath the navigation-->
    <Carousel />
<!--Tags underneath the carousel-->
    <Tags />
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
</template>

<script setup>

import Carousel from "../Layouts/Carousel.vue";
import Tags from "../Layouts/Tags.vue";
import Homeimages from "../Layouts/HomeImages.vue";
import Topsellers from "../Layouts/Topsellers.vue";



</script>

<style scoped>

</style>
