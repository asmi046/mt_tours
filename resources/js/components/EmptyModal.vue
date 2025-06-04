<template>
    <div v-show="showModal" @click.self="closeWin()" class="popup_wrapper">
        <div class="popup">
            <div @click.prevent="closeWin()" class="popup__close" aria-label="Закрыть модальное окно">
                <svg class="sprite_icon">
                    <use xlink:href="#close_icon"></use>
                </svg>
            </div>

            <h2 class="modal_h2">{{title}}</h2>
            <p class="sub_h">{{subtitle}}</p>

            <slot></slot>

        </div>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';

const showModal = ref(true);

const props = defineProps({
    hesh: String,
    title: String,
    subtitle: String
});

const closeWin = () => {
    showModal.value = false;
    history.pushState('', document.title, window.location.pathname + window.location.search);
};

const openWin = () => {
    // console.log(location.hash)
    // console.log(props.hesh)
    if (location.hash == '#' + props.hesh) {
        showModal.value = true;
    }
};

onMounted(() => {
    window.addEventListener('hashchange', openWin);

    if (location.hash === '#' + props.hesh) {
        showModal.value = true;
    }
});

</script>
