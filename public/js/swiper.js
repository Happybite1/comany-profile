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
