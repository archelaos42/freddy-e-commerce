<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import {computed, onMounted} from "vue";
import getValue from "lodash/_getValue";
import {Inertia} from "@inertiajs/inertia";




defineProps({
    canResetPassword: Boolean,
    status: String,
},);

// const csrf = document.querySelector('meta[name="csrf-token"]').getAttribute('content')
// const myVal = computed(() => csrf.value)


let token = '';
const form = useForm({
    email: '',
    password: '',
    remember: false,
    _token: '',
});

// onMounted(() => {
//     form._token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
// })
// const submit = () => {
//     axios.get('/sanctum/csrf-cookie').then( async () =>{
//         form.transform(data => ({
//             ...data,
//             remember: form.remember ? 'on' : '',
//         })).post(route('login'), {
//             onFinish: () => form.reset('password'),
//         });
//     })
// };


// const submit = () => {
//     form._token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
//     form.transform(data => ({
//         ...data,
//         remember: form.remember ? 'on' : '',
//     })).post(route('login'), {
//         onFinish: () => form.reset('password'),
//     });
// };

function submit () {
    form._token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    form.transform(data => ({
        ...data,
        remember: form.remember ? 'on' : '',
    }))
    Inertia.post('/login',{
        email: form.email,
        password: form.password,
        remember: form.remember,
        _token: form._token
    })
}
</script>

<template>
    <Head title="Log in" />
    <input type="hidden" name="_token">
    <div class="flex justify-center bg-gradient-to-b from-gray-200 pt-2">
        <a href="/login" class="text-sm mt-1 mr-2"><span class="underline">
            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                 width="12" height="12"
                 viewBox="0 0 50 50">
                <path d="M 25 1.0507812 C 24.7825 1.0507812 24.565859 1.1197656 24.380859 1.2597656 L 1.3808594 19.210938 C 0.95085938 19.550938 0.8709375 20.179141 1.2109375 20.619141 C 1.5509375 21.049141 2.1791406 21.129062 2.6191406 20.789062 L 4 19.710938 L 4 46 C 4 46.55 4.45 47 5 47 L 19 47 L 19 29 L 31 29 L 31 47 L 45 47 C 45.55 47 46 46.55 46 46 L 46 19.710938 L 47.380859 20.789062 C 47.570859 20.929063 47.78 21 48 21 C 48.3 21 48.589063 20.869141 48.789062 20.619141 C 49.129063 20.179141 49.049141 19.550938 48.619141 19.210938 L 25.619141 1.2597656 C 25.434141 1.1197656 25.2175 1.0507812 25 1.0507812 z M 35 5 L 35 6.0507812 L 41 10.730469 L 41 5 L 35 5 z"></path>
            </svg>
        </span></a>

        <div class="mr-1 text-gray-400 text-sm">
            >
        </div>

        <a href="/login" class="text-sm "><span class="underline">My account</span></a>
    </div>

    <h1 class="font-ropa text-tra text-3xl text-center mb-14 mt-12">Log into account</h1>


    <div class="flex justify-center mx-72">
        <div class="w-1/2 pr-3">
            <h1 class="font-bold font-ropa text-tra text-base text-transform: uppercase">New user</h1>
            <div class="relative bottom-3">________</div>

            <p>Creating your user account allows for faster and simpler shopping/placing an order, changing your data, as well as reviewing your order status and history. </p>

            <div class="">
                <button class="flex relative -right-3/4 mt-28 font-ropa text-white text-transform: uppercase bg-black pr-1 pt-2 pl-2">

                        <h1>Proceed</h1>

                        <div class="px-1 pb-1">
                            <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                            </svg>
                        </div>

                </button>
            </div>

        </div>
        <div class="w-1/2">
            <h1 class="font-bold font-ropa text-tra text-base text-transform: uppercase">Registered user</h1>
            <div class="relative bottom-3">________</div>
            <form @submit.prevent="submit">
                <div class="flex">

                    <InputLabel class="w-20 mr-24 my-auto" for="email" value="Email" />
                    <TextInput
                        id="email"
                        v-model="form.email"
                        placeholder="E-mail address"
                        type="email"
                        class="mt-1 block w-full h-9 rounded-none"
                        required
                        autofocus
                    />
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div class="flex mt-4">
                    <InputLabel class="w-20 mr-24 my-auto" for="password" value="Password" />
                    <TextInput
                        id="password"
                        v-model="form.password"
                        type="password"
                        placeholder="Password"
                        class="mt-1 block w-full h-9 rounded-none"
                        required
                        autocomplete="current-password"
                    />
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="block mt-4">
                    <label class="flex items-center">
                        <Checkbox v-model:checked="form.remember" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">Remember me</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <Link v-if="canResetPassword" :href="route('password.request')" class="underline text-sm text-gray-600 hover:text-gray-900">
                        Forgot your password?
                    </Link>

<!--                    <button class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">-->
<!--                        Log in-->
<!--                    </button>-->

                    <button class="flex justify-center font-ropa text-white text-transform: uppercase bg-black ml-4 pr-1 mt-2 pt-2 pl-2"
                            :class="{ 'opacity-25': form.processing }" :disabled="form.processing">

                        <h1>Log in</h1>

                        <div class="px-1 pb-1">
                            <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                            </svg>
                        </div>

                    </button>
                </div>
            </form>
        </div>
    </div>
</template>
