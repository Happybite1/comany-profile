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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    @include('layout.header')
    
    <div class="container-fluid">
    <section class="text-black position-relative home-hero" id="home">


            <div class="container py-3 position-relative" style="z-index: 2;">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="display-9 fw-bold">Berhasil Profit 200% dari Berbisnis Properti! <span>Temukan Strategi nya!</span></h1>
                        <p class="fs-6 lh-lg text-muted mb-4">Komunitas properti eksklusif, belajar langsung dari pelaku lapangan yang sudah buktiin sendiri strategi cuan properti — bukan teori doang!</p>

                        <img src="img/line1.png" alt="" class="d-block" style="display:block; width:80%; height:20px;">

                        <a href="" class="btn btn-dark btn-sm rounded-0 mt-4">Learn More</a>
                        <a href="" class="btn btn-dark btn-sm rounded-pill mt-4 ms-3">Our Program</a>
                    </div>

                    <div class="py-3 mt-3">
                            <div class="card rounded-hero shadow-sm text-left mx-auto p-3 p-md-4">
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
                        <!-- CARD 4 -->
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

        <section class="py-5" style="background: #f7f4e8;">
            <div class="container text-center mb-5">
                <h1 class="fw-bold display-5">
                    Kami Mengumpulkan Orang-Orang Hebat Untuk Membuka <br>
                    Pada Anda <span class="highlight">Cara Main di Level Berikutnya!</span>
                </h1>
            </div>

            <div class="container position-relative">

                <!-- Swiper -->
                <div class="swiper founderSwiper">
                    <div class="swiper-wrapper">

                        <!-- Slide 1 -->
                        <div class="swiper-slide">
                            <div class="expert-card">
                                <img src="img/159.png" class="expert-img" alt="">
                                <div class="expert-overlay"></div>
                                <div class="expert-text">
                                    <h5>VIAN KUMARA</h5>
                                    <p>Marketing Performance in Property Selama 12 Tahun</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="swiper-slide">
                            <div class="expert-card">
                                <img src="img/160.png" class="expert-img" alt="">
                                <div class="expert-overlay"></div>
                                <div class="expert-text">
                                    <h5>Dimas Dwi Ananto</h5>
                                    <p>Praktisi Lelang Properti No.1 di Indonesia.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="swiper-slide">
                            <div class="expert-card">
                                <img src="img/161.png" class="expert-img" alt="">
                                <div class="expert-overlay"></div>
                                <div class="expert-text">
                                    <h5>Theo Ariandyen</h5>
                                    <p>CO-FOUNDER & COO Beresin Pajak Praktisi Perpajakan Selama 15 Tahun</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="swiper-slide">
                            <div class="expert-card">
                                <img src="img/162.png" class="expert-img" alt="">
                                <div class="expert-overlay"></div>
                                <div class="expert-text">
                                    <h5>Stephanus P H A S</h5>
                                    <p>Founder My Profit Solution Praktisi Saham Bisnis Selama 15 Tahun</p>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 5 -->
                        <div class="swiper-slide">
                            <div class="expert-card">
                                <img src="img/163.png" class="expert-img" alt="">
                                <div class="expert-overlay"></div>
                                <div class="expert-text">
                                    <h5>Rhesa Yogaswara</h5>
                                    <p>Senior Associate - LBP Enterprises (Investment & Diversified Company)</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>

                <!-- Arrow Navigation -->
                <div class="nav-btn founder-prev"><i class="bi bi-chevron-left"></i></div>
                <div class="nav-btn founder-next"><i class="bi bi-chevron-right"></i></div>

            </div>
        </section>


    </div>

    <!-- JS Bootstrap Wajib untuk Dropdown -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>
</body>
</html>