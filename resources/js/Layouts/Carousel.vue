<template>

        <div>
                <img
                    v-if="slide === 1"
                    src="https://freddy.hr/image/cache/catalog/naslovnica/naslovnice%20hr/DesktHR-1480x526.jpg"
                    class="block w-full"
                    alt="..."
                />
                <img
                    v-if="slide === 2"
                    src="https://freddy.hr/image/cache/catalog/naslovnica/naslovnice%20hr/Desktop_HR_1480x526-1480x526.jpg"
                    class="block w-full"
                    alt="..."
                />
                <img
                    v-if="slide === 3"
                    src="https://freddy.hr/image/cache/catalog/naslovnica/Desktop_black_popusti-1480x526.png"
                    class="block w-full"
                    alt="..."
                />
        </div>
</template>

<script setup>
import {onMounted, ref, watch} from "vue";

let slide = ref(0)

onMounted(() => {
    slide.value = 1

})

watch(
    () => slide.value,
    () => {
        setTimeout(() => {
            if (slide.value < 3) {
                slide.value++;
            } else {
                slide.value = 1
            }

        }, 5000)
    }
)


</script>

<style scoped>

</style>
