<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>

    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    @include('layout.header')

    <div class="container-fluid p-0 m-0">
        <section class="hero-section text-center mb-5">
            <div class="container position-relative">

                <h1 class="fw-bold hero-title">ahdhhshvdhhsvsvssvh</h1>

                <p class="mt-4 hero-subtitle">ahhahhavv dhjsdvguvbv</p>

                <div class="hero-image mt-5 px-lg-5">
                    <img src="img/ws-20-21.png"
                        class="img-fluid"
                        alt="Workshop">
                </div>
            </div>
        </section>

        <section class="py-5 video-testimoni-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">

                        <div class="video-testimoni-wrapper position-relative rounded overflow-hidden shadow" id="videoTestimoni">

                            <!-- VIDEO -->
                            <div class="ratio ratio-16x9">
                                <iframe
                                    id="videoIframe"
                                    src="https://www.youtube.com/embed/Nv1EbXnWjyo?enablejsapi=1"
                                    title="Video Testimoni"
                                    allowfullscreen>
                                </iframe>
                            </div>

                            <!-- PLAY ICON -->
                            <div class="video-testimoni-overlay d-flex align-items-center justify-content-center">
                                <i class="bi bi-play-circle-fill"></i>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 mt-5 pt-5">
            <div class="container text-center mb-5">
                <h2 class="fw-bold display-6">Buku ini telah terbukti membantu lebih dari 15.000 pembaca untuk memiliki properti tanpa harus mengandalkan KPR.</h2>
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
                                    <img src="img/testimoni1.png" class="user-img me-3">
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
                                    <img src="img/testimoni2.png" class="user-img me-3">
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
                                    <img src="img/testimoni3.png" class="user-img me-3">
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
                                    <img src="img/testimoni4.png" class="user-img me-3">
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

                <!-- Pagination Bullet -->
                <div class="swiper-pagination swip"></div>
            </div>
        </section>

        <section class="py-5 buku-section">
            <div class="container">
                <div class="row align-items-center g-5">

                    <!-- KIRI : DESKRIPSI BUKU -->
                    <div class="col-lg-6">
                        <span class="badge fw-bold bg-dark text-white mb-3 p-3">BUKU Strategi Kaya Ternak Properti</span>

                        <h2 class="fw-bold mb-3">
                            Anda sangat beruntung dapat informasi buku ini
                        </h2>

                        <p class="text-muted mb-4">
                            Jika Anda masih berpikir bahwa Anda pemula, tidak punya banyak pengalaman, dan tidak punya modal besar untuk mewujudkan impian Anda memiliki (bisnis) properti sendiri, 
                            maka Buku “Strategi Kaya Ternak Properti” ini cocok untuk Anda!​
                        </p>

                        <ul class="list-unstyled buku-point">
                            <li>✔ Dapat properti di bawah harga pasar</li>
                            <li>✔ Closing dari rumah lelang & cessie</li>
                            <li>✔ Punya passive income dari properti tanpa KPR</li>
                        </ul>

                        <a href="#" class="btn btn-dark text-white mt-4 px-4 fw-bold">
                            Ambil Bukunya Sekarang!
                        </a>
                    </div>

                    <!-- KANAN : GAMBAR -->
                    <div class="col-lg-6 text-center">
                        <div class="buku-image-wrapper">
                            <img src="img/daftar-isi.png" alt="Daftar Isi Buku" class="img-fluid">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="py-5 tp-testimoni-video-section">
            <div class="container">

                <!-- JUDUL -->
                <div class="text-center mb-5">
                    <h2 class="fw-bold text-dark">
                        Kalau mereka bisa, kamu juga bisa mulai sekarang!
                    </h2>
                    <hr class="mx-auto tp-testimoni-video-line">
                </div>

                <!-- CARD TESTIMONI -->
                <div class="row g-4 justify-content-center">

                    <!-- CARD 1 -->
                    <div class="col-lg-5 col-md-6">
                        <div class="tp-testimoni-video-card h-100">

                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.youtube.com/embed/VIDEO_ID_1"
                                    title="Testimoni Video"
                                    allowfullscreen>
                                </iframe>
                            </div>

                            <div class="p-4 text-center">
                                <h5 class="fw-bold mt-3">
                                    Testimoni Dr. Brilliant Margalin, SpPK
                                </h5>

                                <p class="text-muted mt-3">
                                    Sebagai dokter spesialis patologi klinik, Dr. Brilliant awalnya tidak
                                    memiliki latar belakang properti. Setelah menerapkan ilmu,
                                    ia berhasil memiliki 7 aset hanya dalam satu tahun.
                                </p>
                            </div>

                        </div>
                    </div>

                    <!-- CARD 2 -->
                    <div class="col-lg-5 col-md-6">
                        <div class="tp-testimoni-video-card h-100">

                            <div class="ratio ratio-16x9 rounded overflow-hidden">
                                <iframe
                                    src="https://www.youtube.com/embed/VIDEO_ID_2"
                                    title="Testimoni Video"
                                    allowfullscreen>
                                </iframe>
                            </div>

                            <div class="p-4 text-center">
                                <h5 class="fw-bold mt-3">
                                    Testimoni Osten Panjaitan
                                </h5>

                                <p class="text-muted mt-3">
                                    Berhasil mengakuisisi properti lelang dengan modal Rp4 juta,
                                    dan mendapatkan aset dengan nilai pasar Rp120 juta.
                                </p>
                            </div>

                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="py-5 investasi-section">
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8">

                        <div class="card investasi-card border-0 shadow-lg">
                            <div class="card-body p-4">

                                <p class="fw-bold fs-3 text-white mb-2">
                                    Kira-kira berapa harga yang pantas untuk BUKU tersebut?
                                </p>

                                <p class="harga-utama mb-2">
                                    <s>Rp 497.000</s>
                                </p>

                                <p class="harga-utama mb-3">
                                    <s>Rp 297.000</s>
                                </p>

                                <p class="text-dark fs-3 fw-bold mt-3">
                                    FLASHSALE! Cukup bayar dengan harga Rp  159.000
                                </p>

                                <p class="text-danger fs-4 fw-bold mt-3">
                                    Promo Terbatas Pastikan kamu ambil sekarang!!
                                </p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 bg-light">
            <div class="container">

                <!-- Heading -->
                <div class="text-center mb-5">
                <h2 class="fw-bold">Pilih Paket Terbaik untuk Kamu</h2>
                <p class="text-muted mb-0">Belajar properti dari nol sampai paham strateginya</p>
                </div>

                <!-- Cards -->
                <div class="row g-4 justify-content-center">
                
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-5">
                    <div class="card h-100 shadow-sm border-0 rounded-4">
                    <img src="img/flayer-books.png" class="card-img-top rounded-top-4" alt="Promo Buku">
                    <div class="card-body text-center p-4">
                        <span class="badge bg-danger mb-3">Special Promo</span>
                        <h5 class="fw-bold">Buku Strategi Kaya Ternak Properti</h5>
                        <div class="benefit-box mt-5">
                            <h5 class="fw-bold mb-4">
                                Banyak pembaca buku ini yang awalnya awam properti,
                                tapi sekarang sudah bisa:
                            </h5>

                            <ul class="list-unstyled benefit-list">
                                <li class="d-flex align-items-start">
                                <span class="check-icon me-3">✔</span>
                                <span>
                                    Mendapatkan Bonus E-book mengenai materi yang akan dijelaskan
                                    <strong>Senilai 250.000</strong>
                                </span>
                                </li>

                                <li class="d-flex align-items-start">
                                <span class="check-icon me-3">✔</span>
                                <span>
                                    Akses Grup WA Komunitas Ternak Properti
                                    <strong>Senilai 150.000</strong>
                                </span>
                                </li>
                            </ul>

                            <div class="total-benefit mt-3">
                                Total benefit yang Anda dapatkan
                                <strong>Senilai 400.000</strong>
                            </div>
                        </div>

                        <div class="my-3">
                        <span class="text-decoration-line-through text-muted">
                            Rp297.000
                        </span>
                        <h4 class="fw-bold text-danger mb-0">
                            Rp159.000
                        </h4>
                        </div>

                        <a href="#" class="btn btn-danger w-100 rounded-pill">
                        Checkout Sekarang
                        </a>
                    </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-6 col-lg-5">
                    <div class="card h-100 shadow-sm border-0 rounded-4">
                    <img src="img/bundling.jpg" class="card-img-top rounded-top-4" alt="Bundling">
                    <div class="card-body text-center p-4">
                        <span class="badge bg-warning text-dark mb-3">
                        Paket Bundling
                        </span>
                        <h5 class="fw-bold">Buku + Seminar Zoom Properti</h5>
                        <p class="text-muted small">
                        Belajar teori dari buku dan praktik langsung lewat seminar online.
                        </p>

                        <div class="my-3">
                        <span class="text-decoration-line-through text-muted">
                            Rp529.000
                        </span>
                        <h4 class="fw-bold text-danger mb-0">
                            Rp266.000
                        </h4>
                        </div>

                        <a href="#" class="btn btn-danger w-100 rounded-pill">
                        Checkout Sekarang
                        </a>
                    </div>
                    </div>
                </div>

                </div>

                <!-- Deskripsi Bawah -->
                <div class="text-center mt-5">
                <h4 class="fw-bold mb-3">
                    Mau mulai properti tapi masih bingung harus dari mana?
                </h4>
                <p class="text-muted mb-4">
                    Ribuan orang yang awalnya awam properti, sekarang sudah paham strategi
                    beli, kelola, dan kembangkan aset dengan cara yang aman dan legal.
                </p>

                <a href="#" class="btn btn-lg btn-danger rounded-pill px-5">
                    Ambil Sekarang
                </a>
                </div>

            </div>
            </section>
    </div>

    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>

    <script>
        document.getElementById('videoTestimoni').addEventListener('click', function () {

            // sembunyikan overlay
            this.querySelector('.video-testimoni-overlay').classList.add('hide');

            // autoplay video
            const iframe = document.getElementById('videoIframe');
            iframe.src += "&autoplay=1";
        });
    </script>
</body>
</html>