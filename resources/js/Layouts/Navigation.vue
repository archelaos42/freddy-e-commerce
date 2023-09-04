<template>
    <nav class="flex justify-between h-20 font-ropa text-transform: uppercase">
        <div class="w-2/12">
            <div class="pl-2.5 my-4">
                <a href="/"><img  src="https://freddy.hr/image/cache/catalog/freddy-slo/freddy-authorizeddistributor-613x142.png" alt=""></a>
            </div>
        </div>
        <div class="w-9/12">
            <ul class="flex py-8 ">
<!--                <li class="ml-auto mr-3">-->
<!--                    <NavLink href="/" class="hover:underline" :class="{'font-bold underline': $page.component === 'Users'}"><span class="font-bold text-lg text-black">WR.UP®</span></NavLink>-->
<!--                        <div>-->
<!--                            <NavLink>-->

<!--                            </NavLink>-->
<!--                        </div>-->
<!--                </li>-->
                <li class="ml-auto mr-3"><NavLink href="/collection/2" class="hover:underline" :class="{'font-bold underline': $page.component === 'Users'}"><span class="font-bold text-lg text-black">WR.UP®</span></NavLink></li>
                <li class="mr-3"><NavLink href="/collection/3" class="hover:underline" :class="{'font-bold underline': $page.url === 'product/2'}"><span class="font-bold text-lg text-black">N.O.W®</span></NavLink></li>
                <li class="mr-3"><NavLink href="/collection/1" class=" hover:underline" :class="{'font-bold underline': $page.component === 'Products'}"><span class="font-bold text-lg text-black">Black®</span></NavLink></li>
                <li class="mr-3"><NavLink href="/products" class=" hover:underline" :class="{'font-bold underline': $page.component === 'Products'}"><span class="font-bold text-lg text-black">Popular</span></NavLink></li>
                <li class="mr-3"><NavLink href="/products" class=" hover:underline" :class="{'font-bold underline': $page.component === 'Products'}"><span class="font-bold text-lg text-black">Collections</span></NavLink></li>
                <li class="mr-3"><NavLink href="/products" class=" hover:underline" :class="{'font-bold underline': $page.component === 'Products'}"><span class="font-bold text-lg text-black">Sport and Leisure</span></NavLink></li>
                <li class="mr-auto" v-if="$page.props.user"><NavLink :href="route('account')" method="get" as="button" class="text-black hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 22c-3.123 0-5.914-1.441-7.749-3.69.259-.588.783-.995 1.867-1.246 2.244-.518 4.459-.981 3.393-2.945-3.155-5.82-.899-9.119 2.489-9.119 3.322 0 5.634 3.177 2.489 9.119-1.035 1.952 1.1 2.416 3.393 2.945 1.082.25 1.61.655 1.871 1.241-1.836 2.253-4.628 3.695-7.753 3.695z"/></svg>
                    <span class="font-bold text-lg text-black text-transform: uppercase">My account</span></NavLink></li>
                <li class="" v-if="$page.props.user"><NavLink :href="route('logout')" method="post" as="button" class="text-black hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill=#000000 class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                    </svg>
                    <span class="font-bold text-lg text-black text-transform: uppercase">Log out</span></NavLink></li>
                <template v-else>
                    <li class="mr-auto"><NavLink href="/login" class=" hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill=#000000 class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
                        </svg>
                        <span class="font-bold text-lg text-black ">Log in</span></NavLink>
                    </li>
    <!--                <li><NavLink :href="route('logout')" method="post" as="button" class="text-black hover:underline">Log out</NavLink></li>-->
                </template>
            </ul>
        </div>
        <div class="flex w-1/12 max-h-10 py-8 justify-center">
            <div>
<!--                <button @hover="showSearch">-->
<!--                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"-->
<!--                         width="32" height="32"-->
<!--                         viewBox="0 0 50 50"-->
<!--                         style=" fill:#000000;"><path d="M 21 3 C 11.6 3 4 10.6 4 20 C 4 29.4 11.6 37 21 37 C 24.354553 37 27.47104 36.01984 30.103516 34.347656 L 42.378906 46.621094 L 46.621094 42.378906 L 34.523438 30.279297 C 36.695733 27.423994 38 23.870646 38 20 C 38 10.6 30.4 3 21 3 z M 21 7 C 28.2 7 34 12.8 34 20 C 34 27.2 28.2 33 21 33 C 13.8 33 8 27.2 8 20 C 8 12.8 13.8 7 21 7 z"></path></svg>-->
<!--                </button>-->

<!--                <div v-show="searchToggle">-->

<!--                </div>-->
            </div>
            <div class="ml-6">
                <Link :href="('/cart')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M20 7h-4v-3c0-2.209-1.791-4-4-4s-4 1.791-4 4v3h-4l-2 17h20l-2-17zm-11-3c0-1.654 1.346-3 3-3s3 1.346 3 3v3h-6v-3zm-4.751 18l1.529-13h2.222v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h6v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h2.222l1.529 13h-15.502z"/></svg>
                    <div v-if="$page.props.count" class="left-5 bottom-8">
                        <div class="position absolute bg-blue-800 rounded-full text-gray-200 grid place-items-center text-xs h-4 w-4">
                            {{ $page.props.count }}
                        </div>
                    </div>
                </Link>
<!--                <a href="/">-->
<!--                    <div>-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path d="M20 7h-4v-3c0-2.209-1.791-4-4-4s-4 1.791-4 4v3h-4l-2 17h20l-2-17zm-11-3c0-1.654 1.346-3 3-3s3 1.346 3 3v3h-6v-3zm-4.751 18l1.529-13h2.222v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h6v1.5c0 .276.224.5.5.5s.5-.224.5-.5v-1.5h2.222l1.529 13h-15.502z"/></svg>-->
<!--                        <div class="position absolute left-5 bottom-8">-->
<!--                            <div class="position absolute bg-blue-800 rounded-full text-gray-200 grid place-items-center text-xs h-4 w-4">-->
<!--                                {{ $page.props.count }}-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </a>-->

            </div>
<!--            <div>-->
<!--                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M15.853 16.56c-1.683 1.517-3.911 2.44-6.353 2.44-5.243 0-9.5-4.257-9.5-9.5s4.257-9.5 9.5-9.5 9.5 4.257 9.5 9.5c0 2.442-.923 4.67-2.44 6.353l7.44 7.44-.707.707-7.44-7.44zm-6.353-15.56c4.691 0 8.5 3.809 8.5 8.5s-3.809 8.5-8.5 8.5-8.5-3.809-8.5-8.5 3.809-8.5 8.5-8.5z"/></svg>-->
<!--            </div>-->
<!--            <div><a href="/">-->
<!--                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd"><path d="M13.5 21c-.276 0-.5-.224-.5-.5s.224-.5.5-.5.5.224.5.5-.224.5-.5.5m0-2c-.828 0-1.5.672-1.5 1.5s.672 1.5 1.5 1.5 1.5-.672 1.5-1.5-.672-1.5-1.5-1.5m-6 2c-.276 0-.5-.224-.5-.5s.224-.5.5-.5.5.224.5.5-.224.5-.5.5m0-2c-.828 0-1.5.672-1.5 1.5s.672 1.5 1.5 1.5 1.5-.672 1.5-1.5-.672-1.5-1.5-1.5m16.5-16h-2.964l-3.642 15h-13.321l-4.073-13.003h19.522l.728-2.997h3.75v1zm-22.581 2.997l3.393 11.003h11.794l2.674-11.003h-17.861z"/></svg>-->
<!--            </a></div>-->
        </div>
    </nav>
    <div class="flex justify-center">
        <div v-if="$page.props.flash.message" class="mt-12 text-xl text-blue-600 mb-4">
            {{ $page.props.flash.message }}
        </div>
    </div>
</template>

<script>
import { Link, useForm } from '@inertiajs/inertia-vue3';
import NavLink from "../Components/NavLink.vue";
import {ref, toRefs, defineProps} from "vue";
export default {
    name: "Navigation.vue",
    components: {NavLink, Link},
    setup() {
        const searchToggle = ref(false);

        const showSearch = () => {
            searchToggle.value = !searchToggle.value;
        };
      return { showSearch, searchToggle}
    },
    props: {
        count: String,
    }
}
// const props = defineProps({ products: Object,});
// const { products } = toRefs(props);
</script>

<style scoped>

</style>
