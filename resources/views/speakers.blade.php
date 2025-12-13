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

    <di class="container-fluid p-0 m-0">
        <section class="container py-5">
            <div class="row">

                <!-- KIRI : Judul -->
                <div class="col-lg-3 mb-4">
                <h2 class="fw-bold">Pemateri</h2>
                </div>

                <!-- KANAN : LIST PEMATERI -->
                <div class="col-lg-9">

                <!-- ITEM PEMATERI -->
                <div class="row mb-5 align-items-start">
                    <div class="col-md-5">
                    <div class="position-relative komisaris-card">
                        <img src="img/160.png" class="img-fluid rounded-3" alt="">
                        <div class="overlay text-center text-white">
                        <h6 class="fw-bold mb-1">Dimas Dwi Ananto</h6>
                        <i class="bi bi-linkedin fs-5"></i>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-7">
                    <h3 class="fw-bold mb-1">Dimas Dwi Ananto</h3>
                    <p class="fw-semibold text-warning">CEO & Founder Ternak Properti</p>
                    <p class="text-muted small" style="line-height:1.7">
                        Sejak tahun 2012 fokus properti dan di 2018 mulai dengan teknik NPL & LCA, 
                        beliau berhasil menjadi Flipper Properti dan membangun Komunitas Ternak Properti se-Indonesia.
                    </p>
                    </div>
                </div>

                <!-- ITEM PEMATERI 2 -->
                <div class="row mb-5 align-items-start">
                    <div class="col-md-5">
                        <div class="position-relative komisaris-card shadow-sm">
                            <img src="img/159.png" class="img-fluid rounded-3">
                            <div class="overlay text-center text-white">
                            <h6 class="fw-bold mb-1">Vian Kumara</h6>
                            <i class="bi bi-linkedin fs-5"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7"> 
                    <h3 class="fw-bold mb-1">Vian Kumara</h3>
                    <p class="fw-semibold text-warning">Property Investor</p>
                    <p class="text-muted small">
                        Berpengalaman sejak 2012 di dunia digital marketing, telah membantu 100+ bisnis properti meningkatkan penjualan mereka lewat digital yang terbukti efektif.
                        Spesialisasinya di Meta Ads, funnel WhatsApp yang closing-oriented, dan landing page dengan konversi tinggi.
                    </p>
                    </div>
                </div>

                <!-- ITEM PEMATERI 3 -->
                  <div class="row mb-5 align-items-start">
                    <div class="col-md-5">
                        <div class="position-relative komisaris-card shadow-sm">
                            <img src="img/161.png" class="img-fluid rounded-3">
                            <div class="overlay text-center text-white">
                            <h6 class="fw-bold mb-1">Theo Ariandyen</h6>
                            <i class="bi bi-linkedin fs-5"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7"> 
                    <h3 class="fw-bold mb-1">Theo Ariandyen</h3>
                    <p class="fw-semibold text-warning">Property Investor</p>
                    <p class="text-muted small">
                        Deskripsi singkat pemateri kedua.
                    </p>
                    </div>
                </div>

                <!-- ITEM PEMATERI 4 -->
                  <div class="row mb-5 align-items-start">
                    <div class="col-md-5">
                        <div class="position-relative komisaris-card shadow-sm">
                            <img src="img/162.png" class="img-fluid rounded-3">
                            <div class="overlay text-center text-white">
                            <h6 class="fw-bold mb-1">Stephanus P H A S</h6>
                            <i class="bi bi-linkedin fs-5"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7"> 
                    <h3 class="fw-bold mb-1">Stephanus P H A S</h3>
                    <p class="fw-semibold text-warning">Property Investor</p>
                    <p class="text-muted small">
                        Deskripsi singkat pemateri kedua.
                    </p>
                    </div>
                </div>

                <!-- ITEM PEMATERI 5 -->
                  <div class="row mb-5 align-items-start">
                    <div class="col-md-5">
                        <div class="position-relative komisaris-card shadow-sm">
                            <img src="img/163.png" class="img-fluid rounded-3">
                            <div class="overlay text-center text-white">
                            <h6 class="fw-bold mb-1">Rhesa Yogaswara</h6>
                            <i class="bi bi-linkedin fs-5"></i>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-7"> 
                    <h3 class="fw-bold mb-1">Rhesa Yogaswara</h3>
                    <p class="fw-semibold text-warning">Property Investor</p>
                    <p class="text-muted small">
                        Rhesa, praktisi keuangan dengan pengalaman 20 tahun. Akan bongkar strategi menyusun proposal yang potensi menggaet investor &
                        kamu juga akan belajar gimana skema IPO bisa dicapai oleh developer skala kecil-menengah.
                    </p>
                    </div>
                </div>

                </div>
            </div>
        </section>
    </di>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>
</body>
</html>