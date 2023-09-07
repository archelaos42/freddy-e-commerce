<template>
        <div class="flex">
            <div class="m-3 w-1/2">
                <a href=""><img class="w-full" src="https://freddy.hr/image/cache/catalog/bannerji/usnje-650x440h.jpg" alt=""></a>
            </div>
            <div class="m-3 w-1/2">
                <a href=""><img class="w-full" src="https://freddy.hr/image/cache/catalog/bannerji/wrup_naslovnica-650x440h.png" alt=""></a>
            </div>
        </div>

        <div class="flex">
            <div class="m-3 w-1/4">
                <a href=""><img class="w-full" src="https://freddy.hr/image/cache/catalog/bannerji/nowee-650x440h.png" alt=""></a>
            </div>
            <div class="m-3 w-1/4">
                <a href=""><img class="w-full" src="https://freddy.hr/image/cache/catalog/bannerji/sport123-650x440h.png" alt=""></a>
            </div>
            <div class="m-3 w-1/4">
                <a href=""><img class="w-full" src="https://freddy.hr/image/cache/catalog/bannerji/outlet_trgovina-650x440h.jpg" alt=""></a>
            </div>
            <div class="m-3 w-1/4">
                <a href=""><img class="w-full" src="https://freddy.hr/image/cache/catalog/bannerji/KevinMarkPass_Freddie_Mar2021_321a-650x440w.jpg" alt=""></a>
            </div>
        </div>
        <div class="flex justify-center mt-8">
            <div class="flex mr-28">
                <div class="">
                    <img class="h-32 mt-1 mr-6" src="https://freddy.hr/image/cache/catalog/bannerji/landing/popuptocke-249x248.jpg" alt="">
                </div>
                <div class="my-auto">
                    <h1 class="font-ropa text-tra text-2xl text-transform: uppercase h-5">Claim your 100 points</h1>
                    <div class="relative bottom-3 text-5xl bottom-6 h-9">__</div>
                    <div>Sign up to receive e-mails with news and Freddy promotional offers.</div>
                </div>
            </div>

            <form class="" @submit.prevent="submit">
                    <div class="flex">
                        <div class="">
                            <input id="email" v-model="form.email" placeholder="Your e-mail address" />
                        </div>
                        <div class="w-3/12 pl-6">
                            <button type="submit" :disabled="form.processing" class=" pb-3 pr-2 flex justify-center font-ropa text-transform: uppercase text-white bg-gray-500 pr-1 pt-2 p-1">
                                <div class="mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope mt-1" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                    </svg>
                                </div>

                                <h1 class="pt-1">Sign up</h1>

                            </button>
                        </div>
                    </div>
                    <label class="mt-2">
                        <input type="checkbox" id="terms" v-model="form.terms" name="agree">
                        I have read and agree with the <Link :href="('/terms')">
                        Confidentiality agreement and HTTP cookies
                    </Link>
                    </label>
                </form>
        </div>
</template>

<script>
import {Link, useForm,} from "@inertiajs/inertia-vue3";
import {reactive} from "vue";
import {Inertia} from "@inertiajs/inertia";
export default {
    name: "HomeImages",
    components: { Link},
}
    
const form = reactive({
    email: null,
    terms: null,
})

function submit() {
    console.log(form)
    Inertia.post('/mailinglist', form)
    // console.log(form)
}
</script>

<style scoped>

</style>
