<template>
    <div class="flex justify-center mt-6">
        <div class="mr-16">
            <h3 class="font-ropa font-bold  py-2 text-transform: uppercase mt-0 mb-2">Questions</h3>
            <div>
                <ul class="text-sm font-normal">
                    <li class="my-1">Reclamations</li>
                    <li class="my-1">Delivery</li>
                    <li class="my-1">Size table</li>
                    <li class="my-1">Award Points</li>
                    <li class="my-1">FAQ</li>
                    <li class="my-1">Privacy statement</li>
                    <li class="my-1">Terms of business</li>
                </ul>
            </div>
        </div>

        <div class="mr-16 ">
            <h3 class="font-ropa font-bold  py-2 text-transform: uppercase mt-0 mb-2">My account</h3>
            <div>
                <ul class="text-sm font-normal">
                    <li class="my-1">Login / Register</li>
                    <li class="my-1">Forgotten password</li>
                    <li class="my-1">My account</li>
                    <li class="my-1">Order history</li>
                    <li class="my-1">News</li>
                    <li class="my-1">Refunds/Replacements</li>
                    <li class="my-1">Gift certificates</li>
                </ul>
            </div>
        </div>

        <div class="mr-16">
            <h3 class="font-ropa font-bold  py-2 text-transform: uppercase mt-0 mb-2">Store</h3>
            <div>
                <ul class="text-sm font-normal">
                    <li class="my-1">About Freddy Serbia</li>
                    <li class="my-1">Company profile</li>
                    <li class="my-1">Working hours</li>
                    <li class="my-1">Contact</li>
                    <li class="my-1">Why FREDDY</li>
                    <li class="my-1">Become a Freddy influencer</li>
                    <li class="my-1">News</li>
                </ul>
            </div>
        </div>

        <div class="text-sm font-normal">
            <h3 class="font-ropa font-bold text-base py-2 text-transform: uppercase mt-0 mb-2">FREDDY News</h3>
            <div class="mb-6">
                <span>Sign up for news and receive 100 points</span>
            </div>
            <div class="flex justify-between border-b-2 border-gray-600 h-10">
                <div class="my-auto">
                    <input id="first_name" placeholder="Your e-mail address" />
                </div>
                <div class="w-3/12 pl-6">
                    <button class="flex justify-center font-ropa text-transform: uppercase text-white bg-gray-500 pr-1 pt-2 w-full h-full">
                        <div class="my-0.5 mx-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                            </svg>
                        </div>

                        <h1>Sign up</h1>

                    </button>
                </div>
            </div>
            <div class="mt-1">
                <label>
                    <input type="checkbox" name="agree">
                    I have read and agree with the <a href="/">
                    Confidentiality agreement and HTTP cookies
                </a>
                </label>
            </div>
        </div>
    </div>
    <div class="flex justify-center mt-36 mb-8">
        <div class="mr-16">
            <img src="https://freddy.hr/image/cache/catalog/freddy-slo/securessl-184x60.jpg" alt="">
        </div>
        <div class="mr-16">
            <span>Copyright © 2022, Freddy SRBIJA</span>
        </div>
        <div class="flex">
            <img src="https://freddy.hr/image/cache/catalog/freddy-slo/leanpay-payment-77x60.jpg" alt="">
            <img class="mr-2" src="https://freddy.hr/image/cache/catalog/freddy-slo/freddy-paypal-46x53.png" alt="">
            <img class="mr-3" src="https://freddy.hr/image/cache/catalog/freddy-slo/freddy-master-77x60.png" alt="">
            <img class="mr-2" src="https://freddy.hr/image/cache/catalog/freddy-slo/freddy-visa-77x55.png" alt="">
            <img class="mr-2" src="https://freddy.hr/image/cache/catalog/freddy-slo/cos-56x56.png" alt="">
            <img src="https://freddy.hr/image/cache/catalog/freddy-slo/freddy-upn-64x60.png" alt="">
        </div>
    </div>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>

</style>
