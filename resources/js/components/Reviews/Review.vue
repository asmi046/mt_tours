<template>
    <platform-select :list="allPlatforms" v-model="reviewFilter"></platform-select>


    <swiper-container
        slides-per-view="1.2"
        space-between="20"
        ref="swiper"
    >
            <swiper-slide v-for="item in allRevews[reviewFilter]" :key="item.id">
                <review-card :item="item"></review-card>
            </swiper-slide>
    </swiper-container>

    <div class="reviews_btn_wrapper">
        <a @click.prevent="prevSlide" class="arrow_button arrow_pred" href="#">
            <svg class="sprite_icon">
                <use xlink:href="#arrow"></use>
            </svg>
        </a>
        <a @click.prevent="nextSlide" class="arrow_button arrow_next" href="#">
            <svg class="sprite_icon">
                <use xlink:href="#arrow"></use>
            </svg>
        </a>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import PlatformSelect from './PlatformSelect.vue';
import ReviewCard from './ReviewCard.vue';

const swiper = ref()


onMounted(() => {
      swiper.value.breakpoints = {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 4,
            }
        }
})

const prevSlide = () => {
    swiper.value.swiper.slidePrev()
}

const nextSlide = () => {
    swiper.value.swiper.slideNext()
}

let reviewFilter = ref('all')
let allPlatforms = ref([])
let allRevews = ref([])

const getData = () => {
    axios.get('/all_rewiews')
        .then((response) => {
            allPlatforms.value = response.data.platforms;
            allRevews.value = response.data.reviews;
            console.log(response)
        })
        .catch( (error) => {
            console.log(error)
        });
}

getData();

</script>
