document.addEventListener('DOMContentLoaded', function () {
    const swiperEl = document.querySelector('.banner-main-slider');
    if (!swiperEl) {
        return;
    }

    Object.assign(swiperEl, {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            clickable: true,
        },
        navigation: false,
    });

    swiperEl.initialize();
});
