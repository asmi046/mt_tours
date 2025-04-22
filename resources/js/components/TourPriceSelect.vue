<template>
    <div class="tour_price tour_price_select" >
        <p class="select_label">Выберите дату:</p>
        <div class="tur_data_wrapper">
            <div
                class="tur_data"
                v-for="(item, index) in price_dates"
                :key="index"
                :class="{ active: selected_data == item, disabled: soldout.has(item) }"
                @click.prevent="selectPrice(item)"
            >
                <span v-show="soldout.has(item)" class="no_place">Нет мест</span>
                {{ item }}
            </div>
        </div>

        <p class="select_label">Выберите тип:</p>
        <div class="tur_data_wrapper tur_type_wrapper">
            <div
                class="tur_data"
                v-for="(item, index) in price_types"
                :key="index"
                :class="{ active: selected_type == item}"
                @click.prevent="selectType(item)"
            >
                {{ item }}
            </div>
        </div>

        <div class="price">
            Цена: <strong>{{ selected_price }}</strong> <span class="v">₽</span>
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
    var price_dates = new Set();
    var soldout = new Set();
    var price_types = ref([]);

    var selected_data = ref("");
    var selected_type = ref("");
    var selected_price = ref("");


    const selectPrice = (item) => {

        if (soldout.has(item)) {
            return
        }

        selected_data.value = item
        getPriceTypes(item)
    }

    const selectType = (item) => {
        selected_type.value = item
        getPrice()
    }

    const goToPay = () => {
        ym(100353854,'reachGoal','to_pay_page')
        const payPage = "https://www.mirturizma46.ru/otpravka-dannyx-na-oplatu/"
        const tourType = "?type=ekskursionka"
        const pid = "&pid=33333"
        const price = "&price="
        const message = "&message="
        const picture = "&pic="

        let resultPayURL = payPage
        +tourType
        +pid
        +price+selected_price.value
        +message
        +props.title+" - "+selected_data.value+" - "+selected_type.value
        +picture+props.img

        document.location.href = resultPayURL
    }

    const getPrice = () => {
        for (let i = 0; i < props.prices.length; i++) {
            if ((props.prices[i].data == selected_data.value) && (props.prices[i].comment == selected_type.value)) {
                selected_price.value = props.prices[i].price
            }
        }
    }

    const getPriceTypes = (item) => {
        price_types.value = []
        for (let i = 0; i < props.prices.length; i++) {
            if (props.prices[i].data == item) {
                price_types.value.push(props.prices[i].comment)
            }
        }
        selected_type.value = Array.from(price_types.value)[0]
        getPrice()
    }

    const get_dates = () => {
        for (let i = 0; i < props.prices.length; i++) {
            price_dates.add(props.prices[i].data)
            if (props.prices[i].soldout == 1) {
                soldout.add(props.prices[i].data)
            }
        }
        selected_data.value = Array.from(price_dates)[0]
        getPriceTypes(selected_data.value)
    }

    get_dates()
</script>
