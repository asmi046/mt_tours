<template>
    <Teleport to="body">
        <div
            v-show="showModal"
            class="popup_wrapper"
            role="dialog"
            aria-modal="true"
            :aria-labelledby="title ? `${uid}-title` : undefined"
            @click.self="onBackdrop"
        >
            <div class="popup" :class="`popup--${size}`">
                <div
                    v-if="closable"
                    class="popup__close"
                    role="button"
                    tabindex="0"
                    aria-label="Закрыть модальное окно"
                    @click.prevent="close"
                    @keydown.enter.prevent="close"
                    @keydown.space.prevent="close"
                >
                    <svg class="sprite_icon">
                        <use xlink:href="#close_icon"></use>
                    </svg>
                </div>

                <h2 v-if="title" :id="`${uid}-title`" class="modal_h2">{{ title }}</h2>
                <p v-if="subtitle" class="sub_h">{{ subtitle }}</p>

                <slot></slot>

                <div v-if="$slots.footer" class="popup__footer">
                    <slot name="footer"></slot>
                </div>
            </div>
        </div>
    </Teleport>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount, useId } from 'vue';

const props = defineProps({
    id:       { type: String, default: null },
    title:    { type: String, default: '' },
    subtitle: { type: String, default: '' },
    size:     { type: String, default: 'md', validator: v => ['sm','md','lg','xl'].includes(v) },
    closable: { type: Boolean, default: true },
    closeOnBackdrop: { type: Boolean, default: true },
    openHash: { type: String, default: '' },
    hesh:     { type: String, default: '' },
});

const emit = defineEmits(['open', 'close']);

const uid = props.id ?? `modal-${useId()}`;
const showModal = ref(false);
let prevHash = '';
let prevOverflow = '';

const lockScroll = () => {
    prevOverflow = document.body.style.overflow;
    document.body.style.overflow = 'hidden';
};

const unlockScroll = () => {
    document.body.style.overflow = prevOverflow;
};

const open = () => {
    if (showModal.value) return;
    showModal.value = true;
    prevHash = location.hash;
    history.pushState('', document.title, window.location.pathname + window.location.search + (props.openHash ? '#' + props.openHash : ''));
    lockScroll();
    emit('open');
};

const close = () => {
    if (!showModal.value) return;
    showModal.value = false;
    unlockScroll();
    if (prevHash) {
        history.pushState('', document.title, window.location.pathname + window.location.search + prevHash);
    } else if (location.hash) {
        history.pushState('', document.title, window.location.pathname + window.location.search);
    }
    emit('close');
};

const toggle = () => (showModal.value ? close() : open());

const onBackdrop = () => {
    if (props.closeOnBackdrop) close();
};

const onHashChange = () => {
    const target = props.openHash || props.hesh;
    if (!target) return;
    if (location.hash === '#' + target) open();
    else if (showModal.value && prevHash !== '#' + target) close();
};

const onKeydown = (e) => {
    if (e.key === 'Escape' && showModal.value) close();
};

defineExpose({ open, close, toggle });

onMounted(() => {
    window.addEventListener('hashchange', onHashChange);
    window.addEventListener('keydown', onKeydown);
    const target = props.openHash || props.hesh;
    if (target && location.hash === '#' + target) open();
});

onBeforeUnmount(() => {
    window.removeEventListener('hashchange', onHashChange);
    window.removeEventListener('keydown', onKeydown);
    if (showModal.value) unlockScroll();
});
</script>
