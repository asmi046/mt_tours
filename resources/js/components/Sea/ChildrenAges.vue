<template>
    <div class="children-ages">
        <div class="children-ages__inputs">
            <div class="field" v-for="(age, index) in ages" :key="index">
                <label for="c_fio">Возраст ребенка<sup>*</sup></label>
                <div class="child_input_line">
                    <input
                        v-model.number="ages[index]"
                        type="number"
                        min="1"
                        max="18"
                        @input="emitValue"
                    />
                    <svg
                        class="dell_icon"
                        title="Удалить"
                        @click="
                            ages.splice(index, 1);
                            emitValue();
                        "
                    >
                        <use xlink:href="#close_icon"></use>
                    </svg>
                </div>
            </div>
        </div>

        <button type="button" class="button" @click="addAge">
            Добавить ребенка
        </button>
    </div>
</template>

<script setup>
import { ref } from "vue";

const props = defineProps({
    modelValue: {
        type: String,
        default: "",
    },
});

const emit = defineEmits(["update:modelValue"]);

const ages = ref([]);

const addAge = () => {
    ages.value.push(7);
    emitValue();
};

const emitValue = () => {
    const normalized = ages.value
        .map((value) => {
            const num = Number(value);
            if (Number.isNaN(num)) {
                return null;
            }
            return Math.min(18, Math.max(1, num));
        })
        .filter((value) => value !== null);

    emit("update:modelValue", normalized.join(", "));
};
</script>
