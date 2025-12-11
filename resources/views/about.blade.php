<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternak Properti</title>

    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    @include('layout.header')

    <div class="container-fluid p-0 m-0">
        <div class="container-fluid p-0 m-0 text-center">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb align-items-center bg-white py-4 px-5 justify-content-center">
                    <li class="breadcrumb-item">
                        <a href="{{ route('main') }}" class="breadcrumb-link">Home</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <a href="{{ route('about') }}" class="breadcrumb-link">About Us</a>
                    </li>
                </ol>
            </nav>
        </div>
        
        

        <section class="container-fluid">
            <div class="container py-4">
                <!-- Title -->
                <h1 class="fw-bold text-title mb-5">About Us</h1>

                <div class="row align-items-center">

                    <!-- LEFT SIDE -->
                    <div class="col-lg-6 col-md-12 mb-4">
                        <h1 class="fw-bold display-5 title-about">
                            KOMUNITAS <span>TERNAK PROPERTI</span>
                        </h1>

                        <p class="fs-6 text-muted mb-4 text-about">
                            Kami adalah komunitas yang memberikan Seminar dan Workshop di seluruh kota besar
                            di Indonesia mengenai cara memiliki Properti murah dengan cara Tanpa KPR dan bisa dimulai
                            hanya dengan gaji UMR. Selain itu kami juga membantu cara keluar dari permasalahan kredit
                            properti macet.
                        </p>
                    </div>

                    <!-- RIGHT SIDE -->
                    <div class="col-lg-6 col-md-12 text-center">
                        <img src="img/background-about.png" class="img-fluid" alt="About image">
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" style="background: rgb(255, 183, 0);">
            <div class="container text-center mb-5">    
                <h1 class="fw-bold display-6">
                    The Best In Country
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
                                    <h5>Vian Kumara</h5>
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
                <!-- <div class="nav-btn founder-prev"><i class="bi bi-chevron-left"></i></div>
                <div class="nav-btn founder-next"><i class="bi bi-chevron-right"></i></div> -->
                
            </div>
        </section>

        <section class="profile-section py-5">
            <div class="container">
                <h1 class="fw-bold text-center mb-5"><span>CFOU</span></h1>

                <div class="row align-items-center">
                    
                    <!-- FOTO -->
                    <div class="col-lg-4 text-center mb-4 mb-lg-0">
                        <div class="profile-photo-wrapper">
                            <img src="img/dimas-no-bg.png" alt="Dimas Dwi Ananto" class="profile-photo">
                        </div>
                    </div>

                    <!-- DESKRIPSI -->
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-2">Dimas Dwi Ananto</h2>
                        <hr class="mb-4 line">

                        <p class="fs-5 fw-semibold">
                            CEO & Founder Ternak Properti
                        </p>

                        <p class="fs-6 text-muted">
                            Dimas Dwi Ananto adalah CEO Ternak Properti, seorang praktisi lelang dan investor properti 
                            yang dikenal mampu mengajarkan strategi praktis untuk memiliki aset properti dengan cepat, 
                            aman, dan efektif bahkan tanpa modal besar. 
                        </p>

                        <p class="fs-6 text-muted">
                            Sejak tahun 2012 fokus properti dan di 2018 mulai dengan teknik NPL & LCA, 
                            beliau berhasil menjadi Flipper Properti & di tahun 2022 membangun Komunitas Ternak Properti yang saat ini sudah Se-Indonesia
                        </p>
                    </div>

                </div>
            </div>
        </section>

        <section class="superteam-section py-5">
            <div class="container">

                <!-- TITLE -->
                <div class="text-center mb-5">
                    <p class="fw-semibold text-muted">Super Impact</p>
                    <h1 class="fw-bold">From Our Superteam</h1>
                </div>

                <!-- SWIPER -->
                <div class="swiper superteamSwiper">
                    <div class="swiper-wrapper">

                        <!-- FOTO 1 -->
                        <div class="swiper-slide">
                            <div class="position-relative">
                                <div class="team-card">
                                    <img src="img/team.png" class="img-fluid rounded" alt="">
                                </div>
                                <div class="shape shape-semicircle"></div>
                            </div>
                        </div>

                        <!-- FOTO 2 -->
                        <div class="swiper-slide">
                            <div class="position-relative">
                                <div class="team-card">
                                    <img src="img/team2.png" class="img-fluid rounded" alt="">
                                </div>
                                <div class="shape shape-triangle"></div>
                            </div>
                        </div>

                        <!-- FOTO 3 -->
                        <div class="swiper-slide">
                            <div class="position-relative">
                                <div class="team-card">
                                    <img src="img/team3.png" class="img-fluid rounded" alt="">
                                </div>
                                <div class="shape shape-trapezoid"></div>
                            </div>
                        </div>

                        <!-- FOTO 4 -->
                        <div class="swiper-slide">
                            <div class="position-relative">
                                <div class="team-card">
                                    <img src="img/peserta4.jpg" class="img-fluid rounded" alt="">
                                </div>
                                <div class="shape shape-trapezoid"></div>
                            </div>
                        </div>

                    </div>

                    <!-- Optional Pagination -->
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section>

        <section class="py-5 contact-section">
            <div class="container">

                <div class="row g-5 align-items-start">

                    <!-- LEFT INFO -->
                    <div class="col-lg-6">
                        <p class="fw-semibold text-muted">Discuss with our friendly team</p>
                        <h1 class="fw-bold mb-4">Get in touch with us</h1>

                        <p class="mb-3">
                            <i class="bi bi-geo-alt-fill me-2"></i>
                            Jl. Mission Drive No.32, Klp. Dua, Kec. Klp. Dua, Kota Tangerang, Banten
                        </p>

                        <p class="mb-3">
                            <i class="bi bi-clock me-2"></i>
                            Mon to Saturday: 08:30 — 17:30
                        </p>

                        <p class="mb-3">
                            <i class="bi bi-telephone me-2"></i>
                            0821-3153-3535
                        </p>

                        <p class="mb-3">
                            <i class="bi bi-envelope me-2"></i>
                            care@aksoro.co.id
                        </p>
                    </div>

                    <!-- RIGHT FORM -->
                    <div class="col-lg-6">
                        <div class="contact-form p-4 p-md-5 rounded-4">

                            <form action="" method="post">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input type="email" class="form-control">
                                </div>

                                <div class="mb-3">
                                    <label class="form-label">Message</label>
                                    <textarea rows="4" class="form-control"></textarea>
                                </div>

                                <button class="btn btn-dark px-4 mt-2">Submit</button>
                            </form>

                        </div>
                    </div>
                </div>

            </div>

            <!-- MAP -->
            <div class="mt-5">
                <div class="container">
                    <div class="ratio ratio-16x9">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.176869994278!2d106.61011307499055!3d-6.240405493747881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fd007e29cdcb%3A0x23fbf96db76635ff!2sTernak%20Properti%20Office!5e0!3m2!1sid!2sid!4v1765442120842!5m2!1sid!2sid"
                            width="100%" 
                            height="600" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>
</body>
</html>