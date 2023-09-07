<template>
    <AppLayout>
    <div>
        <div class="flex justify-center bg-gradient-to-b from-gray-200 pt-2">
        <div class="text-sm mt-1 mr-2"><span class="underline">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                             width="12" height="12"
                             viewBox="0 0 50 50">
                            <path d="M 25 1.0507812 C 24.7825 1.0507812 24.565859 1.1197656 24.380859 1.2597656 L 1.3808594 19.210938 C 0.95085938 19.550938 0.8709375 20.179141 1.2109375 20.619141 C 1.5509375 21.049141 2.1791406 21.129062 2.6191406 20.789062 L 4 19.710938 L 4 46 C 4 46.55 4.45 47 5 47 L 19 47 L 19 29 L 31 29 L 31 47 L 45 47 C 45.55 47 46 46.55 46 46 L 46 19.710938 L 47.380859 20.789062 C 47.570859 20.929063 47.78 21 48 21 C 48.3 21 48.589063 20.869141 48.789062 20.619141 C 49.129063 20.179141 49.049141 19.550938 48.619141 19.210938 L 25.619141 1.2597656 C 25.434141 1.1197656 25.2175 1.0507812 25 1.0507812 z M 35 5 L 35 6.0507812 L 41 10.730469 L 41 5 L 35 5 z"></path>
                        </svg>
                    </span></div>
        </div>
        <h1 class="font-ropa text-tra text-3xl text-center mb-14 mt-12">My user account</h1>
        <div class="mx-60">

            <div class="mx-20">
                <h1 class="font-bold font-ropa text-transform: uppercase text-tra text-xl">My user account</h1>
                <div class="relative bottom-3">________</div>
            </div>
            <div class="flex mt-5 mx-20">

                <Link :href="'/user/profile'" class="mr-10">
                    <div class=" border-1 border-gray-300 border-solid h-32 w-60">
                        <div class="pt-4 flex justify-center pb-2">
                            <svg class=" h-16" xmlns="http://www.w3.org/2000/svg" width="42" height="42" viewBox="0 0 24 24"><path d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"/></svg>
                        </div>
                        <div class="flex justify-center">
                            Change your account info
                        </div>
                    </div>
                </Link>


                <Link :href="'/user/profile'" class="mr-10">
                    <div class=" border-1 border-gray-300 border-solid h-32 w-60">
                        <div class="pt-4 flex justify-center pb-2">
                            <svg class="h-16" fill="none" width="42" height="42" viewBox=" 0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m8.9 6c0-1.71 1.39-3.1 3.1-3.1s3.1 1.39 3.1 3.1v2h-4.66l2 2h5.56v5.56l2 2v-7.56c0-1.1-.9-2-2-2h-1v-2c0-2.76-2.24-5-5-5-2.32 0-4.26 1.59-4.82 3.74l1.72 1.72zm-4.49-1.19-1.41 1.41 2.04 2.04c-.62.34-1.04.99-1.04 1.74v10c0 1.1.9 2 2 2h12.78l1 1 1.41-1.41zm1.59 15.19v-10h.78l10 10z" fill="rgb(0,0,0)"/>
                            </svg>
                        </div>
                        <div class="flex justify-center">
                            Change your password
                        </div>
                    </div>
                </Link>


                <Link :href="'/address/' + $page.props.user" class="mr-10">
                    <div class="border-1 border-gray-300 border-solid h-32 w-60">
                        <div class="pt-4 flex justify-center pb-2">
                            <svg class="h-16" width="42" height="42" viewBox=" 0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M22 24h-17c-1.657 0-3-1.343-3-3v-18c0-1.657 1.343-3 3-3h17v24zm-2-4h-14.505c-1.375 0-1.375 2 0 2h14.505v-2zm0-18h-3v9l-2-1.547-2 1.547v-9h-8v16h15v-16z"/></svg>
                        </div>
                        <div class="flex justify-center">
                            Address book
                        </div>
                    </div>
                </Link>

                <Link :href="'/wishlist/' + $page.props.user" class="mr-10">
                    <div class=" border-1 border-gray-300 border-solid h-32 w-60">
                        <div class="pt-4 flex justify-center pb-2">
                            <svg class="h-16" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path d="M19.5 10c-2.483 0-4.5 2.015-4.5 4.5s2.017 4.5 4.5 4.5 4.5-2.015 4.5-4.5-2.017-4.5-4.5-4.5zm2.5 5h-2v2h-1v-2h-2v-1h2v-2h1v2h2v1zm-6.527 4.593c-1.108 1.086-2.275 2.219-3.473 3.407-6.43-6.381-12-11.147-12-15.808 0-6.769 8.852-8.346 12-2.944 3.125-5.362 12-3.848 12 2.944 0 .746-.156 1.496-.423 2.253-1.116-.902-2.534-1.445-4.077-1.445-3.584 0-6.5 2.916-6.5 6.5 0 2.063.97 3.901 2.473 5.093z"/></svg>
                        </div>
                        <div class="flex justify-center">
                            Edit you wish list
                        </div>
                    </div>
                </Link>
            </div>

            <div class="mx-20">
                <h1 class=" mt-8 font-bold font-ropa text-transform: uppercase text-tra text-xl">My user account</h1>
                <div class="relative bottom-3">________</div>
            </div>
            <div class="flex mt-5 mx-20 mb-16">
                <Link :href="'/orderhistory/' + $page.props.user" class="mr-10">
                    <div class=" border-1 border-gray-300 border-solid h-32 w-60">
                        <div class="pt-4 flex justify-center pb-2">
                            <svg class="h-16" width="48" height="48" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M9.484 15.696l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm0-5l-.711-.696-2.552 2.607-1.539-1.452-.698.709 2.25 2.136 3.25-3.304zm10.516 11.304h-8v1h8v-1zm0-5h-8v1h8v-1zm0-5h-8v1h8v-1zm4-5h-24v20h24v-20zm-1 19h-22v-18h22v18z"/></svg>
                        </div>
                        <div class="flex justify-center">
                            Order history
                        </div>
                    </div>
                </Link>

                <Link :href="'/transactionhistory/' + $page.props.user" class="mr-10">
                    <div class=" border-1 border-gray-300 border-solid h-32 w-60">
                        <div class="pt-4 flex justify-center pb-2">
                            <svg class="h-16" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path d="M22 4h-20c-1.104 0-2 .896-2 2v12c0 1.104.896 2 2 2h20c1.104 0 2-.896 2-2v-12c0-1.104-.896-2-2-2zm-16 13h-3v-1h3v1zm5 0h-3v-1h3v1zm.32-4.377c-.383.239-.836.377-1.32.377-1.381 0-2.5-1.119-2.5-2.5s1.119-2.5 2.5-2.5c.484 0 .937.138 1.32.377-.531.552-.857 1.3-.857 2.123 0 .824.326 1.571.857 2.123zm4.68 4.377h-3v-1h3v1zm-2-4c-1.381 0-2.5-1.119-2.5-2.5s1.119-2.5 2.5-2.5 2.5 1.119 2.5 2.5-1.119 2.5-2.5 2.5zm7 4h-3v-1h3v1z"/></svg>
                        </div>
                        <div class="flex justify-center">
                            Transaction history
                        </div>
                    </div>
                </Link>

                <Link :href="'/awardpoints/' + $page.props.user" class="mr-10">
                    <div class=" border-1 border-gray-300 border-solid h-32 w-60">
                        <div class="pt-4 flex justify-center pb-2">
                            <svg class="h-16" xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path d="M12 14c2.205 0 4 1.794 4 4s-1.795 4-4 4c-2.207 0-4-1.794-4-4s1.793-4 4-4zm0-2c-3.314 0-6 2.687-6 6s2.686 6 6 6 6-2.687 6-6-2.686-6-6-6zm1.236 6.452l1.264-1.214-1.736-.239-.764-1.577-.764 1.577-1.736.239 1.264 1.214-.309 1.725 1.545-.826 1.543.827-.307-1.726zm5.01-18.452l-3.051 3h-6.195l-3.293-3h12.539zm.981.339l-6.605 9.692c1.112.086 2.161.397 3.101.893l5.277-7.924-1.773-2.661zm-14.476.035l-1.751 2.626 5.234 7.946c.934-.501 1.979-.818 3.088-.912l-6.571-9.66z"/></svg>
                        </div>
                        <div class="flex justify-center">
                            Award points
                        </div>
                    </div>
                </Link>
            </div>
        </div>
    </div>
    </AppLayout>
</template>

<script>
import {Link} from "@inertiajs/inertia-vue3";
import AppLayout from "../Layouts/AppLayout.vue";

export default {
    components: {Link, AppLayout},
    props: {
        user: Object,
    }
}
</script>
