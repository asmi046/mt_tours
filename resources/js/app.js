import './bootstrap';


import {createApp} from 'vue/dist/vue.esm-bundler';
import ModalWindow from "./components/ModalWindow.vue"
import TourPrice from "./components/TourPrice.vue"
import TourPriceSelect from "./components/TourPriceSelect.vue"
import Review from './components/Reviews/Review.vue'
import Tap from "./components/Tap.vue"
import axios from 'axios'
import VueAxios from 'vue-axios'
import { VMaskDirective } from 'v-slim-mask'

import('swiper/element/bundle').then(mod => {
    mod.register()
})

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

import { gsap } from "gsap";

import { TextPlugin } from "gsap/TextPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";

const isMobile = window.innerWidth < 768;

gsap.registerPlugin(
    TextPlugin,
    ScrollTrigger,
    ScrollSmoother,
    ScrollToPlugin
);

// ScrollTrigger.normalizeScroll(true)

let smoother = null

if (!isMobile) {
    smoother = ScrollSmoother.create({
        smooth: 2,
        effects: true,
        smoothTouch: 0.1,
        normalizeScroll: true
    });
}


let img_object_from =  {
    opacity:0,
}
let img_object_to = {
    opacity:1,
    duration:.2
}

let tl = gsap.timeline({delay:1})
    // .from('.about', { opacity:0, scale:0})
    // .from('.location_section', { opacity:0, scale:0})

tl.fromTo('header .container',
    {
        opacity:0,
    },
    {
        opacity:1,
        duration:.5
    }
)
.fromTo('.bnr_text',
    {
        opacity:0,
        x:-300
    },
    {
        opacity:1,
        x:0,
        duration:.5
    }
)
.fromTo('.page_top_galery', img_object_from, img_object_to )
.fromTo('.param_blk_1', img_object_from, img_object_to )
.fromTo('.param_blk_2', img_object_from, img_object_to )
.fromTo('.param_blk_3', img_object_from, img_object_to )
.to('.about',
    {
        opacity:1,
        scale: 1,
        duration:.5
    }
)


let tl1 = gsap.timeline({
    delay:2,
    scrollTrigger: {
        trigger: ".about_tours",
        // markers:true,
        start:'top bottom-=10%',
        end: 'bottom 50%',
        scrub:true,
    }
})

tl1.fromTo( ".turists",
    {
        xPercent: 150,
        opacity: 0,
    },
    {
        xPercent: 0,
        opacity: 1,
        duration:1.5,
        ease: "power1.out"
    }
)
.fromTo( ".buss",
    { xPercent: -20, opacity: 0, scaleX: -0.3, scaleY: 0.3 },
    {  xPercent: 0, opacity: 1, scaleX: -1, scaleY: 1, duration:1.5, ease: "power1.out" }
)

gsap.to( ".obl_1",
    {
        delay:1,
        scrollTrigger: {
            trigger: ".all_tour_wrapper",
            start:'top top+=50%',
            end: 'bottom bottom-=20%',
            scrub:true,
        },
        xPercent: 120,
        duration:1.5
    },
)

gsap.to( ".obl_2",
    {
        delay:1.5,
        scrollTrigger: {
            trigger: ".all_tour_wrapper",
            start:'top top+=50%',
            end: 'bottom bottom-=20%',
            scrub:true,
        },
        xPercent: -120,
        duration: 1.5
    },
)


gsap.to( ".obl_3",
    {
        delay:1.5,
        scrollTrigger: {
            trigger: ".all_tour_wrapper",
            start:'top top+=50%',
            end: 'bottom bottom-=20%',
            scrub:true,
            // markers:true,
        },
        xPercent: 120,
        duration: 1.5
    },
)

gsap.set(".big_obl_left", {
    xPercent: -100,
    opacity:0,
})
gsap.to( ".big_obl_left", {
        scrollTrigger: {
            trigger: ".big_obl_section",
            start:'top-=300 top+=50%',
            end: 'top+=350px bottom-=20%',
            scrub:true,
            // markers:true,
        },
        xPercent: 0,
        opacity:1,
        duration: 1.5
    },
)

gsap.set(".big_obl_right", {
    xPercent: 100,
    opacity:0,
})
gsap.to( ".big_obl_right",
    {
        scrollTrigger: {
            trigger: ".big_obl_section",
            start:'top-=300 top+=50%',
            end: 'top+=350px bottom-=20%',
            scrub:true,
        },
        xPercent: 0,
        opacity:1,
        duration: 1.5
    },
)

gsap.set(".big_obl_section .button", {
    opacity:0,
})
gsap.to( ".big_obl_section .button",
    {
        scrollTrigger: {
            trigger: ".big_obl_section",
            start:'top-=300 top+=50%',
            end: 'top+=350px bottom-=20%',
            scrub:true,
        },
        delay:1,
        opacity:1,
        duration: 1.5
    },
)



const locations = Array.from(document.querySelectorAll(".location_wrapper .location"))
locations.forEach((elem) => {
    ScrollTrigger.create({
    trigger: elem,
    // markers:true,
    start:'top bottom',
    animation: gsap.fromTo( elem,
        { opacity:0, scale: 0 },
        { opacity:1, scale: 1, duration:1, ease: "power1.out" }
    ),
})
})

const deys = Array.from(document.querySelectorAll(".programm_wrapper .dey_element"))
deys.forEach((elem) => {
    ScrollTrigger.create({
    trigger: elem,
    // markers:true,
    start:'top bottom',
    animation: gsap.fromTo( elem,
        { opacity:0, scale: 0 },
        { opacity:1, scale: 1, duration:1, ease: "power1.out" }
    ),
})
})


// .to('.location_wrapper', {
//         scrollTrigger:
//          {
//             trigger: '.location_wrapper',
//             markers:true,
//             start:'bottom bottom',
//             // end:'bottom top',
//             // // scrub:true
//         },
//         opacity:1,
//         scale: 1,
//         duration:2
//     }

// )


const items = document.querySelectorAll(".c_blk .c span");

gsap.from(items, {
    delay:2,
    textContent: 0,
    duration: .5,
    snap: { textContent: 1 },
    stagger: 1,
});

const anchors = document.querySelectorAll('a[href*="#"].yakor')

for (let anchor of anchors) {
  anchor.addEventListener('click', function (e) {
    e.preventDefault()

    main_side_menue.classList.remove('active');
    const blockID = anchor.getAttribute('href').substr(1)

    console.log(isMobile)

    if (!isMobile) {
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
