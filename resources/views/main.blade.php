<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternak Properti</title>

    <!-- CSS -->
    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
    @include('layout.header')
    
    <div class="container-fluid">

        <section class="text-black bg-custom position-relative" id="home"
            style="
                background: url('img/background.png') no-repeat center center/cover;
                height: 125vh;                Full layar */
                display: flex;
                align-items: center;           /* Teks di tengah vertikal */
                position: relative;
            "
        >

            <div class="container py-3 position-relative" style="z-index: 2;">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="display-5 fw-bold">Berhasil Profit 200% dari Berbisnis Properti! <span>Temukan Strategi nya!</span></h1>
                        <p class="fs-6 lh-lg text-muted mb-4">Komunitas properti eksklusif, belajar langsung dari pelaku lapangan yang sudah buktiin sendiri strategi cuan properti — bukan teori doang!</p>

                        <img src="img/line1.png" alt="" class="d-block" style="display:block; width:80%; height:20px;">

                        <a href="" class="btn btn-dark btn-sm rounded-0 mt-4">Learn More</a>
                        <a href="" class="btn btn-dark btn-sm rounded-pill mt-4 ms-3">Our Program</a>
                    </div>

                    <div class="py-3 mt-3">
                            <div class="rounded-hero shadow-sm text-left mx-auto">
                                <h2 class="fw-bold fs-3 fs-md-2 fs-lg-1">100.000+</h2>
                                <p class="fs-6 fs-md-4">Orang Telah Mengikuti Pelatihan Ini</p>

                                <img src="img/ws-2.jpg" class="img-fluid hero-image">
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 mt-5 pt-5">
            <div class="container text-center mb-5">
                <h2 class="fw-bold display-6">Rating Tertinggi di Business & Properti</h2>
            </div>

            <div class="container position-relative">

                <!-- Tombol kiri -->
                <div class="nav-btn slider-prev">
                    <i class="bi bi-chevron-left"></i>
                </div>

                <!-- Tombol kanan -->
                <div class="nav-btn slider-next">
                    <i class="bi bi-chevron-right"></i>
                </div>

                <!-- Swiper -->
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">

                        <!-- CARD 1 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="img/user1.jpg" class="user-img me-3">
                                    <div>
                                        <h6 class="fw-bold m-0">Dave Dabito</h6>
                                        <small class="text-muted">2 years ago</small>
                                    </div>
                                </div>

                                <div class="text-warning mb-3">★★★★★</div>

                                <p class="text-muted">
                                    The Great Sales Formula : The best training for growing your skill and competency.
                                </p>
                            </div>
                        </div>

                        <!-- CARD 2 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="img/user2.jpg" class="user-img me-3">
                                    <div>
                                        <h6 class="fw-bold m-0">Andika Fahrurrozi</h6>
                                        <small class="text-muted">2 years ago</small>
                                    </div>
                                </div>

                                <div class="text-warning mb-3">★★★★★</div>

                                <p class="text-muted">
                                    Workshopnya lebih dari ekspektasi, next ajak tim leader untuk asah skillset dengan Aksoro.
                                </p>
                            </div>
                        </div>

                        <!-- CARD 3 -->
                        <div class="swiper-slide">
                            <div class="testimonial-card p-4">
                                <div class="d-flex align-items-center mb-3">
                                    <img src="img/user3.jpg" class="user-img me-3">
                                    <div>
                                        <h6 class="fw-bold m-0">Armand Ramadhan</h6>
                                        <small class="text-muted">2 years ago</small>
                                    </div>
                                </div>

                                <div class="text-warning mb-3">★★★★★</div>

                                <p class="text-muted">
                                    It was super fun yet the most insightful program I’ve ever joined so far.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>


    </div>

    <!-- JS Bootstrap Wajib untuk Dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: ".slider-next",
            prevEl: ".slider-prev",
        },
    });
</script>
</body>
</html>
