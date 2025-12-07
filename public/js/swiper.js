let swiper;

function initSwiper() {
    const screenWidth = window.innerWidth;

    if (screenWidth >= 768 && !swiper) {
        swiper = new Swiper(".mySwiper", {
            slidesPerView: 2,
            spaceBetween: 20,
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

// Jalankan saat page load & saat resize
window.addEventListener("load", initSwiper);
window.addEventListener("resize", initSwiper);
