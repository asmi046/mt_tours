import './bootstrap';
import './sliders';
import './modal';

import './sliders/sea-hotel-galery.js';


import { createApp } from 'vue/dist/vue.esm-bundler';
import ModalWindow from "./components/ModalWindow.vue"
import EmptyModal from "./components/EmptyModal.vue"
import TourPrice from "./components/TourPrice.vue"
import TourPriceSelect from "./components/TourPriceSelect.vue"
import Review from './components/Reviews/Review.vue'
import Tap from "./components/Tap.vue"
import axios from 'axios'
import VueAxios from 'vue-axios'
import { VMaskDirective } from 'v-slim-mask'
import Pay from "./components/Pay/Pay.vue"

import fslightbox from 'fslightbox'

if (document.getElementById("review_app")) {
    const review_app = createApp({
        components: {
            Review,
            ModalWindow,
        },
    })

    review_app.use(VueAxios, axios)
    review_app.mount("#review_app")
}


if (document.getElementById("global_app")) {
    const global_app = createApp({
        components: {
            ModalWindow,
            EmptyModal,
        },
        setup() { }
    })


    global_app.use(VueAxios, axios)
    global_app.directive('mask', VMaskDirective)
    global_app.mount("#global_app");
}

if (document.getElementById("price_app")) {
    const price_app = createApp({
        components: {
            TourPrice,
            TourPriceSelect,
        },
        setup() { }
    })

    price_app.use(VueAxios, axios)
    price_app.directive('mask', VMaskDirective)
    price_app.mount("#price_app");
}

if (document.getElementById("programm_tab")) {
    const programm_tab = createApp({
        components: {
            Tap,
        },
        setup() { }
    })

    programm_tab.use(VueAxios, axios)
    programm_tab.directive('mask', VMaskDirective)
    programm_tab.mount("#programm_tab");
}


if (document.getElementById("pay_app")) {
    const pay_app = createApp({
        components: {
            Pay
        },
        setup() { }
    })

    pay_app.use(VueAxios, axios)
    pay_app.directive('mask', VMaskDirective)
    pay_app.mount("#pay_app");
}



import SideMenu from './menues.js';

let side_menue = new SideMenu('#main_side_menue', '.show_menue_button')

import smoother from "./animation/main.js";

const anchors = document.querySelectorAll('a[href*="#"].yakor')

for (let anchor of anchors) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault()

        main_side_menue.classList.remove('active');
        const blockID = anchor.getAttribute('href').substr(1)

        if (!window.isMobile) {
            smoother.scrollTo("#" + blockID, true)
        } else {
            document.getElementById(blockID).scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            })
        }

    })
}

window.addEventListener('DOMContentLoaded', function () {
    var preloader = document.getElementById('preloader');
    preloader.classList.add('hide');
});

// Резервный таймер на случай долгой загрузки
setTimeout(function () {
    var preloader = document.getElementById('preloader');
    if (preloader && !preloader.classList.contains('hide')) {
        preloader.classList.add('hide');
    }
}, 4000); // 3 секунды максимум
