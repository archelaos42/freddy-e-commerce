<template>
<div class="text-center">
    <button class="flex font-ropa text-white text-transform: uppercase bg-black pr-1 pt-2 pl-2 mr-3">



        <!--                                <h1>Add to Cart</h1>-->
        <Link
            :href="('/cart.store')"
            method="post"
            :data="{
                                            id: 1,
                                            }"
            classes="px-3 py-1 mr-2 rounded text-white text-sm font-bold whitespace-no-wrap bg-blue-600 hover:bg-blue-800"
            as="button"
        ><div class="px-1 pt-1">
            <svg width="25" height="25" clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" fill="currentColor" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m9.474 5.209s-4.501 4.505-6.254 6.259c-.147.146-.22.338-.22.53s.073.384.22.53c1.752 1.754 6.252 6.257 6.252 6.257.145.145.336.217.527.217.191-.001.383-.074.53-.221.293-.293.294-.766.004-1.057l-4.976-4.976h14.692c.414 0 .75-.336.75-.75s-.336-.75-.75-.75h-14.692l4.978-4.979c.289-.289.287-.761-.006-1.054-.147-.147-.339-.221-.53-.221-.191-.001-.38.071-.525.215z" fill-rule="nonzero"/>
            </svg>
        </div>Add to Cart</Link>

    </button>
    <div v-if="$page.props.flash.message" class="message"><span>{{$page.props.flash.message}}</span></div>
    <div v-if="!$page.props.flash.message">nema</div>
<!--    {{ fm }}-->
</div>
</template>

<script setup>
import {Link} from "@inertiajs/inertia-vue3";
import {onMounted, ref, watch} from "vue";
import NavLink from "@/Components/NavLink.vue";
import {Inertia} from "@inertiajs/inertia";
// import {onMounted, computed} from "vue";
// let fff = ref(page.props.flash.message);
// const page = usePage()
// let {fm} = () =>{
//     return page.props.flash.message;
// }
// const flash = computed(() => page.props.flash)

// watch($page.props.flash.message, value => {
//     Inertia.get('users',
//         { search: value },
//         { preserveState: true, replace: true }
//     );
// });
// watch([usePage().props.flash.message], () => {
//     search.value = $page.props.flash.message
// })

// let flash = ref(false)
onMounted(() => {
    // setTimeout(() => {
    //     console.log(page.props.flash.message);
    //
    // }, 3000)

});

</script>

<style scoped>


</style>
