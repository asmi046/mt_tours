<template>
    <div class="tour_price tour_price_select" >
        <h2 class="pay_header">
            <span>Купить тур</span>
            <div class="icons">


                <i class="mir"></i>
                <i class="sber"></i>
                <i class="t"></i>
            </div>
        </h2>

        <a href="#howpay" class="instruction_lnk">
            <svg class="sprite_icon">
                <use xlink:href="#information"></use>
            </svg>
            <span>Как купить тур?</span>
        </a>
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

        <button @click.prevent="goToPayNew" class="button">Перейти к оплате</button>
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

    const goToPayNew = async () => {
        axios.get('/pay/create_pay_order', {
            params: {
            img: props.img,
            client_count: 1,
            start_data: selected_data.value,
            price: selected_price.value,
            name: props.title+" - "+selected_data.value+" - "+selected_type.value,
            back_link: document.location.origin + document.location.pathname,
            type: 'ekskursionka' // замените на нужный тип
            }
        })
        .then(response => {
            document.location.href = response.data.pay_url;
            console.log(response.data);
        })
        .catch(error => {
            console.error(error);
        });
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
