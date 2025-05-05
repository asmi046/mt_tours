import { register } from 'swiper/element/bundle';
register();

const any_tours = document.getElementById('any_tours');

if (any_tours) {
    const swiperParams = {
        slidesPerView: 1.5,
        spaceBetween: 48,
        loop: true,
        autoplay: {
            delay: 4500,
        },
        breakpoints: {

          310: {
            slidesPerView: 1.5,
            spaceBetween: 18,
            },
          640: {
            slidesPerView: 2.5,
            spaceBetween: 28,
          },
          1024: {
            slidesPerView: 3,
          },
        },

        navigation: {
            nextEl: '#any_tours_btn_next',
            prevEl: '#any_tours_btn_prev',
        }
      };

      // now we need to assign all parameters to Swiper element
      Object.assign(any_tours, swiperParams);

      // and now initialize it
      any_tours.initialize();
}

