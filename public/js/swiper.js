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
            pagination: {
                el: ".swiper-pagination.swip",
                clickable: true,
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
    spaceBetween: 30,
    
    breakpoints: {
        0: { slidesPerView: 1.2 },
        576: { slidesPerView: 2 },
        768: { slidesPerView: 2.3 },
        900: { slidesPerView: 2.6 },
        992: { slidesPerView: 3 }
    }
});

var superteamSwiper = new Swiper(".superteamSwiper", {
    loop: true,
    spaceBetween: 25,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
    },

    breakpoints: {
        0: { slidesPerView: 1.2 },
        576: { slidesPerView: 1.6 },
        768: { slidesPerView: 2 },
        992: { slidesPerView: 3 }
    },

    pagination: {
        el: ".superteamSwiper .swiper-pagination",
        clickable: true,
    }
});
