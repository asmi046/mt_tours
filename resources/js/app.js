import './bootstrap';
import './sliders';


import {createApp} from 'vue/dist/vue.esm-bundler';
import ModalWindow from "./components/ModalWindow.vue"
import TourPrice from "./components/TourPrice.vue"
import TourPriceSelect from "./components/TourPriceSelect.vue"
import Review from './components/Reviews/Review.vue'
import Tap from "./components/Tap.vue"
import axios from 'axios'
import VueAxios from 'vue-axios'
import { VMaskDirective } from 'v-slim-mask'


import fslightbox from 'fslightbox'

const review_app = createApp({
    components:{
        Review,
        ModalWindow,
    },
})

review_app.use(VueAxios, axios)
review_app.mount("#review_app")

const global_app = createApp({
    components:{
        ModalWindow,
    },
    setup() {}
})


global_app.use(VueAxios, axios)
global_app.directive('mask', VMaskDirective)
global_app.mount("#global_app");


const price_app = createApp({
    components:{
        TourPrice,
        TourPriceSelect,
    },
    setup() {}
})

price_app.use(VueAxios, axios)
price_app.directive('mask', VMaskDirective)
price_app.mount("#price_app");

const programm_tab = createApp({
    components:{
        Tap,
    },
    setup() {}
})

programm_tab.use(VueAxios, axios)
programm_tab.directive('mask', VMaskDirective)
programm_tab.mount("#programm_tab");


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
        smoother.scrollTo("#"+blockID, true)
    } else {
        document.getElementById(blockID).scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        })
    }

  })
}

window.addEventListener('load', function () {
    var preloader = document.getElementById('preloader');
    preloader.classList.add('hide');
});
