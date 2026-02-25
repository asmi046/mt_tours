<template>
    <div class="box main_calc_box">
        <div class="line main_calc_box_counts">
            <div class="field">
                <label for="adults_count">Количество взрослых</label>
                <input
                    id="adults_count"
                    v-model.number="adultsCount"
                    @input="onParamsChange"
                    type="number"
                    min="1"
                />
            </div>

            <div class="field">
                <label for="children_5_count">Дети до 5 лет</label>
                <input
                    id="children_5_count"
                    v-model.number="childrenUnder5"
                    @input="onParamsChange"
                    type="number"
                    min="0"
                />
            </div>

            <div class="field">
                <label for="children_12_count">Дети до 12 лет</label>
                <input
                    id="children_12_count"
                    v-model.number="childrenUnder12"
                    @input="onParamsChange"
                    type="number"
                    min="0"
                />
            </div>
        </div>

        <div class="line">
            <div class="field">
                <label>Выберите тип номера</label>
                <select v-model="selectedRoomType" @change="onParamsChange">
                    <option value="">-- Выберите тип номера --</option>
                    <option
                        v-for="room in roomTypes"
                        :key="room.id"
                        :value="room.number_type"
                    >
                        {{ room.number_type }}
                    </option>
                </select>
            </div>

            <div class="field">
                <label>Выберите рейс</label>
                <select v-model="selectedFlight" @change="onParamsChange">
                    <option value="">-- Выберите рейс --</option>
                    <option
                        v-for="reis in schedule"
                        :key="reis.id"
                        :value="reis.id"
                    >
                        {{ reis.start_date }} - {{ reis.end_date }}
                    </option>
                </select>
            </div>
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
        <div v-if="tourPrice !== null">
            <p class="way_price_result">Стоимость тура: {{ tourPrice }} руб.</p>
            <br />
            <a @click.prevent="goToPayNew()" href="#" class="button"
                >Забронировать</a
            >
        </div>
        <div v-else>
            <p>
                Пожалуйста, выберите все параметры для расчета стоимости тура.
            </p>
        </div>
    </div>
</template>

<script setup>
import { ref, computed } from "vue";

const props = defineProps({
    roomTypes: {
        type: Array,
        default: () => [],
    },
    schedule: {
        type: Array,
        default: () => [],
    },
    hotelid: {
        type: Number,
        default: 0,
    },
    hotel_name: {
        type: String,
        default: () => "",
    },
    resort_name: {
        type: String,
        default: () => "",
    },
    hotel_img: {
        type: String,
        default: () => "",
    },
});

console.log("Полученные пропсы:", props);

const assetUrl = window.Laravel?.assetUrl || "/";

const selectedRoomType = ref("");
const selectedFlight = ref("");
const adultsCount = ref(2);
const childrenUnder5 = ref(0);
const childrenUnder12 = ref(0);
const tourPrice = ref(null);
const loading = ref(false);

const selectedFlightData = computed(() => {
    return props.schedule.find((f) => f.id === selectedFlight.value);
});

const goToPayNew = async () => {
    axios
        .get("/pay/create_pay_order", {
            params: {
                img: props.hotel_img,
                client_count: 1,
                start_data: null,
                price: tourPrice.value,
                name:
                    "Тур " +
                    props.hotel_name +
                    ", " +
                    props.resort_name +
                    " - " +
                    selectedRoomType.value +
                    ", " +
                    selectedFlightData.value.start_date +
                    " - " +
                    selectedFlightData.value.end_date +
                    ", Взрослых: " +
                    adultsCount.value +
                    ", Детей до 5 лет: " +
                    childrenUnder5.value +
                    ", Детей до 12 лет: " +
                    childrenUnder12.value,
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

const onParamsChange = async () => {
    console.log(
        "Параметры изменены:",
        selectedFlightData.value,
        selectedRoomType.value,
    );

    if (!selectedRoomType.value || !selectedFlightData.value) {
        return;
    }

    try {
        loading.value = true;
        tourPrice.value = null;

        const { data } = await axios.get("/get_tour_price", {
            params: {
                hotelid: props.hotelid,
                numbertype: selectedRoomType.value,
                startdata: selectedFlightData.value?.start_date || "",
                enddata: selectedFlightData.value?.end_date || "",
                adult: adultsCount.value,
                before5: childrenUnder5.value,
                before12: childrenUnder12.value,
            },
        });

        tourPrice.value = data;
    } catch (error) {
        console.error("Ошибка при получении цены тура:", error);
    } finally {
        loading.value = false;
    }
};
</script>
