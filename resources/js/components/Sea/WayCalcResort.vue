<template>
    <h2>Купить билет</h2>
    <div class="box way_calc_box">
        <div class="field">
            <label for="c_fio">Выберите город<sup>*</sup></label>
            <select v-model="city" disabled>
                <option :value="city">{{ city }}</option>
            </select>
        </div>

        <div class="field">
            <label>Выберите вид проезда<sup>*</sup></label>
            <select v-model="wayType" @change="wayTypeSelect" disabled>
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
                    {{ item.up_price ? "*" : "" }}
                </option>
            </select>
        </div>
    </div>

    <div class="box alenan_calc_result_box">
        <h3>Стоимость проезда:</h3>
        <br />

        <p class="way_price_result" v-if="canShowPrice">
            {{ selectedPrice + (dopPrice || 0) }} руб.
        </p>
        <p class="way_price_result_dop" v-if="dopPrice">
            <sup>*</sup> Cтоимость с учётом высокого сезона
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
import { computed, ref, watch } from "vue";

const props = defineProps({
    cityName: {
        type: String,
        default: "",
    },
    prices: {
        type: Object,
        default: () => ({}),
    },
    schedule: {
        type: Array,
        default: () => [],
    },
});

const city = ref("");

const wayType = ref("two_way");
const schedule = ref([]);
const selectedScheduleId = ref("");

const assetUrl = window.Laravel?.assetUrl || "/";

const pricesData = computed(() => {
    return props.prices && typeof props.prices === "object" ? props.prices : {};
});

const dopPrice = computed(() => {
    if (!schedule.value) return null;
    return (
        schedule.value.find(
            (p) => String(p.id) === String(selectedScheduleId.value),
        )?.up_price ?? null
    );
});

const oneWayDisabled = computed(() => {
    const oneWay = pricesData.value?.one_way;
    return oneWay === null || oneWay === undefined || oneWay === "";
});

const selectedPrice = computed(() => {
    const price = pricesData.value;
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

const applyProps = () => {
    city.value = props.cityName ?? "";

    schedule.value = normalizeSchedule(props.schedule);
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
                price: selectedPrice.value + (dopPrice.value || 0),
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
            ym(29416892, "reachGoal", "to_pay_page");
            document.location.href = response.data.pay_url;
        })
        .catch((error) => {
            console.error(error);
        });
};

watch(() => [props.cityName, props.prices, props.schedule], applyProps, {
    immediate: true,
    deep: true,
});
</script>
