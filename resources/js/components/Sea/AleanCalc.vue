<template>
    <h2>Калькулятор тура</h2>
    <div class="price_format_information text_styles">
        <p>Стоимость тура складывается из следующих компонентов:</p>
        <ul>
            <li>
                Стоимость проживания в отеле для выбранного колличества гостей
            </li>
            <li>
                Стоимость проезда на автобусе: {{ way_price }} руб. / с человека
                в обе стороны.
            </li>
        </ul>
    </div>
    <div class="box alenan_calc_box">
        <div class="line">
            <div class="field">
                <label for="c_fio">Выберите дату заезда<sup>*</sup></label>
                <select v-model="datefromto" @change="onParamsChange">
                    <option v-for="item in schedule" :value="item.start_date">
                        {{ item.start_date }} - {{ item.end_date }}
                    </option>
                </select>
            </div>
            <div class="field">
                <label for="c_fio"
                    >Выберите количество взрослых<sup>*</sup></label
                ><input
                    v-model="adoult_count"
                    @input="onParamsChange"
                    name="name"
                    class=""
                    id="c_fio"
                    min="1"
                    type="number"
                    placeholder="Выберите количество человек"
                />
            </div>
        </div>

        <div class="line">
            <ChildrenAges v-model="childrenAges" />
        </div>
    </div>
    <div class="box alenan_calc_result_box">
        <h3>Результаты:</h3>
        <br />
        <img
            class="preloader_spinner"
            v-show="loading"
            :src="assetUrl + 'img/infinite-spinner.svg'"
            alt="Загрузка..."
        />
        <div
            class="alean_tour_results"
            v-if="toursData && toursData.data?.length > 0"
        >
            <div
                class="alean_tour_results__line"
                v-for="tour in toursData.data"
                :key="tour.id"
            >
                <div class="alean_tour_results__item">
                    <div>
                        <span>Тип номера:</span>
                        <h4>{{ tour.roomTypeName }}</h4>
                    </div>

                    <p>
                        <span>Цена:</span> <br />{{
                            priceCalculation(tour.price)
                        }}
                        руб.
                    </p>
                    <p>
                        <span>Дата заезда:</span> <br />{{
                            formatDate(tour.checkInDate)
                        }}
                    </p>
                    <p>
                        <span>Дата выезда:</span> <br />{{
                            formatDate(tour.checkOutDate)
                        }}
                    </p>
                </div>
                <div class="alean_tour_results__butttons">
                    <a
                        @click.prevent="
                            goToPayNew(
                                priceCalculation(tour.price),
                                tour.roomTypeName,
                                formatDate(tour.checkInDate),
                                formatDate(tour.checkOutDate),
                            )
                        "
                        href="#"
                        class="button"
                        >Забронировать</a
                    >
                </div>
            </div>
        </div>
        <div v-if="toursData && toursData.data?.length === 0">
            <p>К сожалению отель не может принять такое количество гостей.</p>
        </div>
    </div>
</template>
<script setup>
import { ref, watch } from "vue";
import ChildrenAges from "./ChildrenAges.vue";

let props = defineProps({
    schedule: {
        type: Array,
        default: () => [],
    },
    resort: {
        type: String,
        default: () => "",
    },
    hotels: {
        type: String,
        default: () => "",
    },
    hotel_name: {
        type: String,
        default: () => "",
    },
    resort_name: {
        type: String,
        default: () => "",
    },
    way_price: {
        type: String,
        default: () => "",
    },
    priceup: {
        type: Number,
        default: () => 3000,
    },
    hotel_img: {
        type: String,
        default: () => "",
    },
});

let adoult_count = ref(2);
let datefromto = ref(props.schedule?.[0]?.start_date ?? "");
let toursData = ref(null);
let loading = ref(false);
let childrenAges = ref("");
let childrenCount = ref(0);
let sezon_up_pric = ref(parseFloat(props.schedule?.[0]?.up_price ?? 0) || 0);

const assetUrl = window.Laravel?.assetUrl || "/";

watch(childrenAges, () => {
    childrenCount.value = childrenAges.value
        ? childrenAges.value.split(",").length
        : 0;
    onParamsChange();
});

const formatDate = (date) => {
    return new Date(date).toLocaleString("ru-RU");
};

const setSezonUpPric = () => {
    const selectedSchedule = props.schedule.find(
        (item) => item.start_date === datefromto.value,
    );

    sezon_up_pric.value = parseFloat(selectedSchedule?.up_price ?? 0) || 0;
};

const onParamsChange = async () => {
    try {
        setSezonUpPric();
        loading.value = true;
        toursData.value = null;
        const { data } = await axios.get("/get_tour_list", {
            params: {
                resortid: props.resort,
                datefromto: datefromto.value,
                adults: adoult_count.value,
                hotels: props.hotels,
                children: childrenCount.value,
                children_ages: childrenAges.value,
            },
            responseType: "json",
        });
        toursData.value = data;
    } catch (error) {
        console.error(error);
    } finally {
        loading.value = false;
    }
};

const priceCalculation = (aleanPrice) => {
    return (
        parseFloat(aleanPrice) +
        parseFloat(props.priceup) * (adoult_count.value + childrenCount.value) +
        parseFloat(props.way_price) *
            (adoult_count.value + childrenCount.value) +
        parseFloat(sezon_up_pric.value) *
            (adoult_count.value + childrenCount.value)
    );
    // return parseFloat(aleanPrice) + parseFloat(props.priceup);
};

const goToPayNew = async (price, roomTypeName, checkInDate, checkOutDate) => {
    axios
        .get("/pay/create_pay_order", {
            params: {
                img: props.hotel_img,
                client_count: 1,
                start_data: null,
                price: price,
                name:
                    "Тур " +
                    props.hotel_name +
                    ", " +
                    props.resort_name +
                    " - " +
                    roomTypeName +
                    ", " +
                    checkInDate +
                    " - " +
                    checkOutDate +
                    ", Взрослых: " +
                    adoult_count.value +
                    ", Детей: " +
                    childrenCount.value +
                    " Возраст детей: " +
                    childrenAges.value,
                back_link:
                    document.location.origin + document.location.pathname,
                type: "alean_hotel",
            },
        })
        .then((response) => {
            ym(100353854, "reachGoal", "to_pay_page");
            document.location.href = response.data.pay_url;
        })
        .catch((error) => {
            console.error(error);
        });
};

onParamsChange();
</script>
