<template>
    <h2 class="font-bold text-2xl">A subscription is required before proceeding</h2>
    <p>
        <JetButton class="mt-4" @click.native="checkout">Checkout</JetButton>
    </p>
</template>

<script>
import JetButton from '../Jetstream/Button.vue';

export default {
    name: "ManageSubscription",
    components: {
        JetButton
    },
    props: [
        'stripeKey', 'checkoutSessionId'
    ],
    methods: {
        checkout() {
            window.Stripe(this.stripeKey).redirectToCheckout({
                sessionId: this.checkoutSessionId
            })
        }
    }
}
</script>

<style scoped>

</style>
