<template>
    <h2>Калькулятор тура</h2>
    <div class="box alenan_calc_box">
        <div class="field">
            <label for="c_fio">Выберите дату заезда<sup>*</sup></label>
            <select v-model="datefromto" @change="onParamsChange">
                <option v-for="item in schedule" :value="item.start_date">
                    {{ item.start_date }} - {{ item.end_date }}
                </option>
            </select>
        </div>
        <div class="field">
            <label for="c_fio">Выберите количество человек<sup>*</sup></label
            ><input
                v-model="adoult_count"
                @input="onParamsChange"
                name="name"
                class=""
                id="c_fio"
                type="number"
                placeholder="Выберите количество человек"
            />
        </div>
    </div>
    <div class="box alenan_calc_result_box">
        <h3>Результаты:</h3>
        <br />
        <img
            class="preloader_spinner"
            v-if="loading"
            :src="assetUrl + 'img/infinite-spinner.svg'"
            alt="Загрузка..."
        />
        <div class="alean_tour_results" v-else-if="toursData && !length">
            <div
                class="alean_tour_results__item"
                v-for="tour in toursData.data"
                :key="tour.id"
            >
                <div>
                    <span>Тип номера:</span>
                    <h4>{{ tour.roomTypeName }}</h4>
                </div>

                <p>
                    <span>Цена:</span> <br />{{
                        parseFloat(tour.price) + parseFloat(props.priceup)
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
        </div>
        <div v-else>
            <p>Выберите параметры тура для отображения результатов.</p>
        </div>
    </div>
</template>
<script setup>
import { ref } from "vue";

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
    priceup: {
        type: Number,
        default: () => 3000,
    },
});

let adoult_count = ref(2);
let datefromto = ref(props.schedule?.[0]?.start_date ?? "");
let toursData = ref(null);
let loading = ref(true);

const assetUrl = window.Laravel?.assetUrl || "/";

const formatDate = (date) => {
    return new Date(date).toLocaleString("ru-RU");
};

const onParamsChange = async () => {
    try {
        loading.value = true;
        toursData.value = null;
        const { data } = await axios.get("/get_tour_list", {
            params: {
                resortid: props.resort,
                datefromto: datefromto.value,
                adults: adoult_count.value,
                hotels: props.hotels,
            },
            responseType: "json",
        });
        toursData.value = data;
        console.log(toursData.value);
    } catch (error) {
        console.error(error);
    } finally {
        loading.value = false;
    }
};

onParamsChange();
</script>
