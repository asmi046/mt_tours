import { gsap } from "gsap";

import { TextPlugin } from "gsap/TextPlugin";
import { ScrollTrigger } from "gsap/ScrollTrigger";
import { ScrollToPlugin } from "gsap/ScrollToPlugin";



gsap.registerPlugin(
    TextPlugin,
    ScrollTrigger,
    ScrollSmoother,
    ScrollToPlugin
);

// ScrollTrigger.normalizeScroll(true)

let smoother = null

if (!window.isMobile) {
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

if (document.getElementById('banner_video_main_page')) {

    tl.fromTo('header .container',
        {opacity:0,},
        {opacity:1, duration:.5}
    )
    .fromTo('.bnr_text',
        {
            opacity:0,  x:-300
        },
        {
            opacity:1, x:0, duration:.5
        }
    )
    .fromTo('.cat_banner_buttons', img_object_from, img_object_to )

}

if (document.getElementById('banner_video_category')) {

    tl.fromTo('header .container',
        {opacity:0,},
        {opacity:1, duration:.5}
    )
    .fromTo('.bnr_text',
        {
            opacity:0,  x:-300
        },
        {
            opacity:1, x:0, duration:.5
        }
    )
    .fromTo('.page_top_galery', img_object_from, img_object_to )
    .fromTo('.param_blk_1', img_object_from, img_object_to )
    .fromTo('.param_blk_2', img_object_from, img_object_to )
    .fromTo('.param_blk_3', img_object_from, img_object_to )

}




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

/*
This helper function makes a group of elements animate along the x-axis in a seamless, responsive loop.

Features:
 - Uses xPercent so that even if the widths change (like if the window gets resized), it should still work in most cases.
 - When each item animates to the left or right enough, it will loop back to the other side
 - Optionally pass in a config object with values like "speed" (default: 1, which travels at roughly 100 pixels per second), paused (boolean),  repeat, reversed, and paddingRight.
 - The returned timeline will have the following methods added to it:
   - next() - animates to the next element using a timeline.tweenTo() which it returns. You can pass in a vars object to control duration, easing, etc.
   - previous() - animates to the previous element using a timeline.tweenTo() which it returns. You can pass in a vars object to control duration, easing, etc.
   - toIndex() - pass in a zero-based index value of the element that it should animate to, and optionally pass in a vars object to control duration, easing, etc. Always goes in the shortest direction
   - current() - returns the current index (if an animation is in-progress, it reflects the final index)
   - times - an Array of the times on the timeline where each element hits the "starting" spot. There's also a label added accordingly, so "label1" is when the 2nd element reaches the start.
 */
   function horizontalLoop(items, config) {
    items = gsap.utils.toArray(items);
    config = config || {};
    let tl = gsap.timeline({repeat: config.repeat, paused: config.paused, defaults: {ease: "none"}, onReverseComplete: () => tl.totalTime(tl.rawTime() + tl.duration() * 100)}),
      length = items.length,
      startX = items[0].offsetLeft,
      times = [],
      widths = [],
      xPercents = [],
      curIndex = 0,
      pixelsPerSecond = (config.speed || 1) * 100,
      snap = config.snap === false ? v => v : gsap.utils.snap(config.snap || 1), // some browsers shift by a pixel to accommodate flex layouts, so for example if width is 20% the first element's width might be 242px, and the next 243px, alternating back and forth. So we snap to 5 percentage points to make things look more natural
      totalWidth, curX, distanceToStart, distanceToLoop, item, i;
    gsap.set(items, { // convert "x" to "xPercent" to make things responsive, and populate the widths/xPercents Arrays to make lookups faster.
      xPercent: (i, el) => {
        let w = widths[i] = parseFloat(gsap.getProperty(el, "width", "px"));
        xPercents[i] = snap(parseFloat(gsap.getProperty(el, "x", "px")) / w * 100 + gsap.getProperty(el, "xPercent"));
        return xPercents[i];
      }
    });
    gsap.set(items, {x: 0});
    totalWidth = items[length-1].offsetLeft + xPercents[length-1] / 100 * widths[length-1] - startX + items[length-1].offsetWidth * gsap.getProperty(items[length-1], "scaleX") + (parseFloat(config.paddingRight) || 0);
    for (i = 0; i < length; i++) {
      item = items[i];
      curX = xPercents[i] / 100 * widths[i];
      distanceToStart = item.offsetLeft + curX - startX;
      distanceToLoop = distanceToStart + widths[i] * gsap.getProperty(item, "scaleX");
      tl.to(item, {xPercent: snap((curX - distanceToLoop) / widths[i] * 100), duration: distanceToLoop / pixelsPerSecond}, 0)
        .fromTo(item, {xPercent: snap((curX - distanceToLoop + totalWidth) / widths[i] * 100)}, {xPercent: xPercents[i], duration: (curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond, immediateRender: false}, distanceToLoop / pixelsPerSecond)
        .add("label" + i, distanceToStart / pixelsPerSecond);
      times[i] = distanceToStart / pixelsPerSecond;
    }
    function toIndex(index, vars) {
      vars = vars || {};
      (Math.abs(index - curIndex) > length / 2) && (index += index > curIndex ? -length : length); // always go in the shortest direction
      let newIndex = gsap.utils.wrap(0, length, index),
        time = times[newIndex];
      if (time > tl.time() !== index > curIndex) { // if we're wrapping the timeline's playhead, make the proper adjustments
        vars.modifiers = {time: gsap.utils.wrap(0, tl.duration())};
        time += tl.duration() * (index > curIndex ? 1 : -1);
      }
      curIndex = newIndex;
      vars.overwrite = true;
      return tl.tweenTo(time, vars);
    }
    tl.next = vars => toIndex(curIndex+1, vars);
    tl.previous = vars => toIndex(curIndex-1, vars);
    tl.current = () => curIndex;
    tl.toIndex = (index, vars) => toIndex(index, vars);
    tl.times = times;
    tl.progress(1, true).progress(0, true); // pre-render for performance
    if (config.reversed) {
      tl.vars.onReverseComplete();
      tl.reverse();
    }
    return tl;
}

// const scrollingText = gsap.utils.toArray('.marque .str');

// const tl11 = horizontalLoop(scrollingText, {
//   repeat: -1,
//   paddingRight: 30,
// });


export default smoother;

