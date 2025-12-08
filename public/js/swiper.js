let swiper;

function initSwiper() {
    const screenWidth = window.innerWidth;

    // Aktifkan Swiper hanya jika layar ≥ 768px
    if (screenWidth >= 768 && !swiper) {
        swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 20,
            loop: true, // mengulang tanpa henti

            autoplay: {
                delay: 5000, // 5 detik
                disableOnInteraction: false, // meski tombol di klik, tetap autoplay
            },

            navigation: {
                nextEl: ".slider-next",
                prevEl: ".slider-prev",
            },

            breakpoints: {
                992: { slidesPerView: 3 }
            }
        });
    }

    // Jika kembali ke mobile → matikan swiper
    if (screenWidth < 768 && swiper) {
        swiper.destroy(true, true);
        swiper = undefined;
    }
}

window.addEventListener("load", initSwiper);
window.addEventListener("resize", initSwiper);

var founderSwiper = new Swiper(".founderSwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    loop: true,

    navigation: {
        nextEl: ".founder-next",
        prevEl: ".founder-prev",
    },

    breakpoints: {
        0: { slidesPerView: 1.3, spaceBetween: 10 },
        576: { slidesPerView: 2, spaceBetween: 20 },
        992: { slidesPerView: 3, spaceBetween: 30 }
    }
});
