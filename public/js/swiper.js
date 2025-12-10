let swiper;

function initSwiper() {
    // Jika Swiper belum dibuat, baru buat
    if (!swiper) {
        swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,         // mobile 1 card
            spaceBetween: 15,
            loop: false,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".slider-next",
                prevEl: ".slider-prev",
            },
            breakpoints: {
                768: { slidesPerView: 2 },
                992: { slidesPerView: 3 }
            }
        });
    }
}

window.addEventListener("load", initSwiper);
// HAPUS event resize, tidak dibutuhkan
// window.addEventListener("resize", initSwiper);

var founderSwiper = new Swiper(".founderSwiper", {
    loop: true,
    spaceBetween: 20,

    breakpoints: {
        0: { slidesPerView: 1.2 },
        576: { slidesPerView: 2 },
        768: { slidesPerView: 2.3 },
        900: { slidesPerView: 2.6 },
        992: { slidesPerView: 3 }
    }
});
