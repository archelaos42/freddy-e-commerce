<script setup>
import { Head, Link, useForm } from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';
import Checkbox from '@/Components/Checkbox.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const form = useForm({
    name: '',
    lastname: '',
    email: '',
    phone: '',
    password: '',
    password_confirmation: '',
    terms: false,
});

const submit = () => {
    form.post('/register'), {
        onFinish: () => form.reset('password', 'password_confirmation'),
    };
};
</script>

<template>
    <AppLayout>
    <Head title="Register" />

    <div class="flex justify-center bg-gradient-to-b from-gray-200 pt-2">
        <a href="/login" class="text-sm mt-1 mr-2"><span class="underline">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     width="12" height="12"
                     viewBox="0 0 50 50">
                    <path d="M 25 1.0507812 C 24.7825 1.0507812 24.565859 1.1197656 24.380859 1.2597656 L 1.3808594 19.210938 C 0.95085938 19.550938 0.8709375 20.179141 1.2109375 20.619141 C 1.5509375 21.049141 2.1791406 21.129062 2.6191406 20.789062 L 4 19.710938 L 4 46 C 4 46.55 4.45 47 5 47 L 19 47 L 19 29 L 31 29 L 31 47 L 45 47 C 45.55 47 46 46.55 46 46 L 46 19.710938 L 47.380859 20.789062 C 47.570859 20.929063 47.78 21 48 21 C 48.3 21 48.589063 20.869141 48.789062 20.619141 C 49.129063 20.179141 49.049141 19.550938 48.619141 19.210938 L 25.619141 1.2597656 C 25.434141 1.1197656 25.2175 1.0507812 25 1.0507812 z M 35 5 L 35 6.0507812 L 41 10.730469 L 41 5 L 35 5 z"></path>
                </svg>
            </span></a>
    </div>
    <div class="mx-60">
        <h1 class="font-ropa text-tra text-3xl text-center mb-14 mt-12">Create an account</h1>
        <div class="flex text-sm">

            <p>If you already have an account, please sign in via&nbsp</p><a href="/login">the login page</a>
        </div>
        <h1 class="font-bold font-ropa text-tra text-base text-transform: uppercase mt-6">Your personal data</h1>
        <div class="relative bottom-3">________</div>
            <form @submit.prevent="submit">
                <div class="flex">
                    <div class="flex w-56 my-auto">
                        <InputLabel class="mr-1" for="name" value="Name" />
                        <span class="text-red-600">*</span>
                    </div>
                    <TextInput
                        id="name"
                        v-model="form.name"
                        type="text"
                        class="mt-1 block w-full h-9 rounded-none"
                        required
                        autofocus
                        autocomplete="name"
                    />
                    <InputError class="mt-2" :message="form.errors.name" />
                </div>

                <div  class="mt-4 flex">
                    <div class="flex w-56 my-auto">
                        <InputLabel class="mr-1" for="lastname" value="Lastname" />
                        <span class="text-red-600">*</span>
                    </div>
                    <TextInput
                        id="lastname"
                        v-model="form.lastname"
                        type="text"
                        class="mt-1 block w-full h-9 rounded-none"
                        required
                        autofocus
                        autocomplete="lastname"
                    />
                    <InputError class="mt-2" :message="form.errors.lastname" />
                </div>

                <div class="mt-4 flex">
                    <div class="flex w-56 my-auto">
                        <InputLabel class="mr-1" for="email" value="Email" />
                        <span class="text-red-600">*</span>
                    </div>
                    <TextInput
                        id="email"
                        v-model="form.email"
                        type="email"
                        class="mt-1 block w-full h-9 rounded-none"
                        required
                    />
                    <InputError class="mt-2" :message="form.errors.email" />
                </div>

                <div  class="mt-4 flex">
                    <div class="flex w-56 my-auto">
                        <InputLabel class="mr-1" for="phone" value="Phone" />
                        <span class="text-red-600">*</span>
                    </div>
                    <TextInput
                        id="phone"
                        v-model="form.phone"
                        type="text"
                        class="mt-1 block w-full h-9 rounded-none"
                        required
                        autofocus
                        autocomplete="phone"
                    />
                    <InputError class="mt-2" :message="form.errors.phone" />
                </div>
                <h1 class="font-bold font-ropa text-tra text-base text-transform: uppercase mt-6">Your password</h1>
                <div class="relative bottom-3">________</div>
                <div class="flex">
                    <div class="flex w-56 my-auto">
                        <InputLabel class="mr-1" for="password" value="Password" />
                        <span class="text-red-600">*</span>
                    </div>
                    <TextInput
                        id="password"
                        v-model="form.password"
                        type="password"
                        class="mt-1 block w-full h-9 rounded-none"
                        required
                        autocomplete="new-password"
                    />
                    <InputError class="mt-2" :message="form.errors.password" />
                </div>

                <div class="mt-4 flex">
                    <div class="flex w-56 my-auto">
                        <InputLabel class="mr-1" for="password_confirmation" value="Confirm Password" />
                        <span class="text-red-600">*</span>
                    </div>
                    <TextInput
                        id="password_confirmation"
                        v-model="form.password_confirmation"
                        type="password"
                        class="mt-1 block w-full h-9 rounded-none"
                        required
                        autocomplete="new-password"
                    />
                    <InputError class="mt-2" :message="form.errors.password_confirmation" />
                </div>
                <h1 class="font-bold font-ropa text-tra text-base text-transform: uppercase mt-6">Newsletter</h1>
                <div class="relative bottom-3">________</div>

                <div class="flex w-1/3">
                    <span class="text-sm w-20">Apply</span>
                    <div class="mb-4 mr-3">
                        <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-radio-1" class="ml-2 text-sm font-medium">Yes</label>
                    </div>
                    <div>
                        <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="default-radio-2" class="ml-2 text-sm font-medium">No</label>
                    </div>
                </div>

<!--                <h1 class="font-bold font-ropa text-tra text-base text-transform: uppercase mt-6">Security verification (CAPTCHA)</h1>-->
<!--                <div class="relative bottom-3">________</div>-->
<!--                <div class="flex">-->
<!--                    <span class="text-sm w-52 my-auto w-52">Please check the verification box to the right</span>-->


<!--                </div>-->

<!--                <div v-if="$page.props.jetstream.hasTermsAndPrivacyPolicyFeature" class="mt-4">-->
<!--                    <InputLabel for="terms">-->
<!--                        <div class="flex items-center">-->
<!--                            <Checkbox id="terms" v-model:checked="form.terms" name="terms" required />-->

<!--                            <div class="ml-2">-->
<!--                                I agree to the <a target="_blank" :href="route('terms.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Terms of Service</a> and <a target="_blank" :href="route('policy.show')" class="underline text-sm text-gray-600 hover:text-gray-900">Privacy Policy</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <InputError class="mt-2" :message="form.errors.terms" />-->
<!--                    </InputLabel>-->
<!--                </div>-->

                <div class="flex items-center justify-end mt-4">
                    <Link :href="('/login')" class="underline text-sm text-gray-600 hover:text-gray-900">
                        Already registered?
                    </Link>

                    <button class="flex font-ropa ml-4 text-white text-transform: uppercase bg-black pr-1 pt-2 pl-2"
                            :class="{ 'opacity-25': form.processing }" :disabled="form.processing">

                        <h1>Proceed</h1>

                        <div class="px-1 pb-1">
                            <svg width="25" height="25" xmlns="http://www.w3.org/2000/svg" fill="currentColor" clip-rule="evenodd"><path d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z"/>
                            </svg>
                        </div>

                    </button>
                </div>
            </form>
    </div>
    </AppLayout>
</template>
<script>
import AppLayout from "../../Layouts/AppLayout.vue";

export default {
name: "Register.vue",
components: {AppLayout}
}
</script>
