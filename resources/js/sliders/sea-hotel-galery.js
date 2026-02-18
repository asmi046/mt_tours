document.addEventListener('DOMContentLoaded', function () {
    const swiperEl = document.querySelector('.sea-hotel-gallery');
    if (!swiperEl) {
        return;
    }

    Object.assign(swiperEl, {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        pagination: {
            clickable: true,
        },
        navigation: true,
    });

    swiperEl.initialize();
});
