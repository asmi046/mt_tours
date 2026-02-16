<template>
    <h2>Купить билет</h2>
    <div class="box way_calc_box">
        <div class="field">
            <label for="c_fio">Выберите город<sup>*</sup></label>
            <select v-model="city" @change="citySelect">
                <option v-for="item in props.prices" :value="item.city">
                    {{ item.city }}
                </option>
            </select>
        </div>

        <div class="field">
            <label>Выберите вид проезда<sup>*</sup></label>
            <select v-model="wayType" @change="wayTypeSelect">
                <option value="two_way">Туда и обратно</option>
                <option value="one_way" :disabled="oneWayDisabled">
                    В одну сторону
                </option>
            </select>
        </div>

        <div class="field">
            <label>Выберите рейс<sup>*</sup></label>
            <select v-model="selectedScheduleId" :disabled="!schedule.length">
                <option value="">Выберите рейс</option>
                <option
                    v-for="item in schedule"
                    :key="item.id"
                    :value="item.id"
                >
                    {{ item.start_date }} - {{ item.end_date }}
                </option>
            </select>
        </div>
    </div>

    <div class="box alenan_calc_result_box">
        <h3>Стоимость проезда:</h3>
        <br />

        <p class="way_price_result" v-if="canShowPrice">
            {{ selectedPrice }} руб.
        </p>

        <button
            class="button"
            type="button"
            @click="goToPayNew"
            :disabled="!canPay"
        >
            Перейти к оплате
        </button>
    </div>
</template>
<script setup>
import { computed, onMounted, ref } from "vue";

let props = defineProps({
    prices: {
        type: Array,
        default: () => [],
    },
});

let city = ref("");

let wayType = ref("two_way");
let schedule = ref([]);
let selectedScheduleId = ref("");

const assetUrl = window.Laravel?.assetUrl || "/";

const selectedCityPrice = computed(() => {
    return props.prices.find((p) => p.city === city.value) ?? null;
});

const oneWayDisabled = computed(() => {
    const oneWay = selectedCityPrice.value?.one_way;
    return oneWay === null || oneWay === undefined || oneWay === "";
});

const selectedPrice = computed(() => {
    const price = selectedCityPrice.value;
    if (!price) return "";
    return wayType.value === "one_way" ? price.one_way : price.two_way;
});

const canShowPrice = computed(() => {
    return !!selectedScheduleId.value;
});

const canPay = computed(() => {
    return !!selectedSchedule.value;
});

const selectedSchedule = computed(() => {
    const id = selectedScheduleId.value;
    if (!id) return null;
    return schedule.value.find((s) => String(s?.id) === String(id)) ?? null;
});

const selectedScheduleText = computed(() => {
    if (!selectedSchedule.value) return "";
    return (
        selectedSchedule.value.start_date +
        " - " +
        selectedSchedule.value.end_date
    );
});

const normalizeSchedule = (raw) => {
    const asArray = Array.isArray(raw) ? raw : raw ? [raw] : [];
    return [...asArray].sort(
        (a, b) => (a?.sort_order ?? 0) - (b?.sort_order ?? 0),
    );
};

const citySelect = async () => {
    schedule.value = normalizeSchedule(selectedCityPrice.value?.bus_schedules);
    selectedScheduleId.value = "";

    if (oneWayDisabled.value && wayType.value === "one_way") {
        wayType.value = "two_way";
    }
};

const wayTypeSelect = async () => {
    if (oneWayDisabled.value && wayType.value === "one_way") {
        wayType.value = "two_way";
    }
};

const goToPayNew = async () => {
    axios
        .get("/pay/create_pay_order", {
            params: {
                img: assetUrl + "img/buss_pay.webp",
                client_count: 1,
                start_data: null,
                price: selectedPrice.value,
                name:
                    "Проезд на автобусе до города " +
                    city.value +
                    " - " +
                    (wayType.value === "one_way"
                        ? "в одну сторону"
                        : "в обе стороны") +
                    ", рейс: " +
                    selectedScheduleText.value,
                back_link:
                    document.location.origin + document.location.pathname,
                type: "proezd",
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

city.value = props.prices?.[0]?.city ?? "";
citySelect();
</script>
