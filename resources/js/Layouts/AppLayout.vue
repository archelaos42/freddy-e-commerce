<template>
        <header>
            <!--Upper Navbar-->
            <TopBar />
            <!--Upper Navbar-->
            <Navigation />
        </header>

    <section class="py-6">
        <div class="mx-auto">
            <slot />
        </div>
    </section>

    <Footer />
</template>

<script>
import Navigation from "../Layouts/Navigation.vue";
import TopBar from "../Layouts/TopBar.vue";
import Footer from "../Layouts/Footer.vue";
export default {
    name: "AppLayout",
    components: {TopBar, Navigation, Footer }
}
</script>

<style scoped>

</style>
