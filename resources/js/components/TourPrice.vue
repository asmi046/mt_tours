<template>
    <div class="tour_price">

        <div class="selectors">
            <div class="selector" @click.prevent="selectPrice(index)" :class="{ active: selected == index}" v-for="(item, index) in props.prices" :key="index">
                <div class="radio"></div>
                <div class="info">
                    <div class="price"><strong>{{ item.price }}</strong> ₽</div>
                    <p>{{ item.comment }}</p>
                </div>
            </div>
        </div>
        <button @click.prevent="goToPay" class="button">Купить путевку</button>
    </div>
</template>

<script setup>
import { ref } from 'vue';

    const props = defineProps({
        prices: Array,
        title:String,
        img:String,
    })

    let selected = ref(0);

    const selectPrice = (index) => {
        selected.value = index
    }

    const goToPay = () => {
        ym(100353854,'reachGoal','to_pay_page')
        const payPage = "https://www.mirturizma46.ru/otpravka-dannyx-na-oplatu/"
        const tourType = "?type=ekskursionka"
        const pid = "&pid=33333"
        const price = "&price="
        const message = "&message="
        const picture = "&pic="

        let resultPayURL = payPage+tourType+pid+price+props.prices[selected.value].price+message+props.title+" "+props.prices[selected.value].comment+picture+props.img

        document.location.href = resultPayURL
    }

</script>
