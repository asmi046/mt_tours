<template>
    <div class="tour_price">
        <div class="selectors">
            <div
                class="selector"
                @click.prevent="selectPrice(index)"
                :class="{ active: selected == index }"
                v-for="(item, index) in props.prices"
                :key="index"
            >
                <div class="radio"></div>
                <div class="info">
                    <div class="price">
                        <strong>{{ item.price }}</strong> ₽
                    </div>
                    <p>{{ item.comment }}</p>
                </div>
            </div>
        </div>
        <button @click.prevent="goToPayNew" class="button">
            Купить путевку
        </button>
    </div>
</template>

<script setup>
import { ref } from "vue";

const props = defineProps({
    prices: Array,
    title: String,
    img: String,
});

let selected = ref(0);

const selectPrice = (index) => {
    selected.value = index;
};

const goToPay = () => {
    const payPage = "https://www.mirturizma46.ru/otpravka-dannyx-na-oplatu/";
    const tourType = "?type=ekskursionka";
    const pid = "&pid=33333";
    const price = "&price=";
    const message = "&message=";
    const picture = "&pic=";

    let resultPayURL =
        payPage +
        tourType +
        pid +
        price +
        props.prices[selected.value].price +
        message +
        props.title +
        " " +
        props.prices[selected.value].comment +
        picture +
        props.img;

    document.location.href = resultPayURL;
};

const goToPayNew = async () => {
    axios
        .get("/pay/create_pay_order", {
            params: {
                img: props.img,
                client_count: 1,
                start_data: props.prices[selected.value].start_data, // если есть
                price: props.prices[selected.value].price,
                name:
                    props.title +
                    " " +
                    (props.prices[selected.value].comment ?? ""),
                back_link:
                    document.location.origin + document.location.pathname,
                type: "ekskursionka", // замените на нужный тип
            },
        })
        .then((response) => {
            ym(29416892, "reachGoal", "to_pay_page");
            document.location.href = response.data.pay_url;
        })
        .catch((error) => {
            console.error(error);
        });
};
</script>
