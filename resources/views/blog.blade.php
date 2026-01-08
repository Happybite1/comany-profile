<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Ternak Properti</title>

    <link rel="stylesheet" href="dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    @include('layout.header')

    <div class="container-fluid p-0 m-0">
        <section class="container py-5">
            <!-- HEADER -->
            <div class="row align-items-center mb-4">
                <!-- JUDUL -->
                <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                    <h2 class="fw-bold mb-0">Ternak Properti Blog</h2>
                </div>

                <!-- SEARCH -->
                <div class="col-12 col-lg-6">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Kata kunci pencarian artikel">
                        <button class="btn btn-outline-secondary">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- TAB MENU -->
            <ul class="nav nav-tabs-mobile mb-4">
                <li class="nav-item">
                    <a class="nav-link active fw-bold border-bottom border-3 border-warning text-muted" href="#">
                        ALL
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-muted" href="#">PROPERTI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-muted" href="#">PERTANAHAN</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-muted" href="#">PAJAK</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-bold text-muted" href="#">LAINNYA</a>
                </li>
            </ul>

            <!-- CONTENT -->
            <div class="row g-4">
                <!-- KIRI : SLIDER / ARTIKEL UTAMA -->
                <div class="col-lg-8">
                    <div id="blogCarousel" class="carousel slide">
                        <div class="carousel-inner rounded overflow-hidden">
                            <div class="carousel-item active">
                                <div class="position-relative">
                                    <img src="img/berita.jpg" class="d-block w-100" alt="">
                                    <div class="carousel-caption caption text-start">
                                        <small>18 Desember 2025</small>
                                        <h3 class="fw-bold">
                                            Cicilan Rumah Subsidi Paling Mahal Rp 2,5 Juta Per Bulan
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <img src="img/berita.jpg" class="d-block w-100" alt="">
                            </div>
                        </div>

                        <!-- CONTROL -->
                        <button class="carousel-control-prev control" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </button>
                        <button class="carousel-control-next control" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </button>
                    </div>
                </div>

                <!-- KANAN : TERPOPULER -->
                <div class="col-lg-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h5 class="fw-bold">Terpopuler</h5>
                        <a href="#" class="text-decoration-none text-primary fw-semibold">LIHAT SEMUA</a>
                    </div>

                    <!-- ITEM -->
                    <div class="d-flex mb-3 popular-item">
                        <div class="popular-thumb me-3">
                            <img src="img/berita.jpg" alt="">
                        </div>
                        <div>
                            <small class="text-muted">18 Desember 2025</small>
                            <p class="fw-semibold mb-0">
                                Cicilan Rumah Subsidi Paling Mahal Rp 2,5 Juta Per Bulan
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-3 popular-item">
                        <div class="popular-thumb me-3">
                            <img src="img/berita.jpg" alt="">
                        </div>
                        <div>
                            <small class="text-muted">18 Desember 2025</small>
                            <p class="fw-semibold mb-0">
                                Cicilan Rumah Subsidi Paling Mahal Rp 2,5 Juta Per Bulan
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-3 popular-item">
                        <div class="popular-thumb me-3">
                            <img src="img/berita.jpg" alt="">
                        </div>
                        <div>
                            <small class="text-muted">18 Desember 2025</small>
                            <p class="fw-semibold mb-0">
                                Cicilan Rumah Subsidi Paling Mahal Rp 2,5 Juta Per Bulan
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-3 popular-item">
                        <div class="popular-thumb me-3">
                            <img src="img/berita.jpg" alt="">
                        </div>
                        <div>
                            <small class="text-muted">18 Desember 2025</small>
                            <p class="fw-semibold mb-0">
                                Cicilan Rumah Subsidi Paling Mahal Rp 2,5 Juta Per Bulan
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-3 popular-item">
                        <div class="popular-thumb me-3">
                            <img src="img/berita.jpg" alt="">
                        </div>
                        <div>
                            <small class="text-muted">18 Desember 2025</small>
                            <p class="fw-semibold mb-0">
                                Cicilan Rumah Subsidi Paling Mahal Rp 2,5 Juta Per Bulan
                            </p>
                        </div>
                    </div>

                    <div class="d-flex mb-3 popular-item">
                        <div class="popular-thumb me-3">
                            <img src="img/berita.jpg" alt="">
                        </div>
                        <div>
                            <small class="text-muted">18 Desember 2025</small>
                            <p class="fw-semibold mb-0">
                                Cicilan Rumah Subsidi Paling Mahal Rp 2,5 Juta Per Bulan
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container pt-1 pb-5">
            <h4 class="fw-bold mb-3">Topik Menarik</h4>

            <div class="d-flex flex-wrap gap-3">
                <a href="#" class="topic-pill">PROPERTY</a>
                <a href="#" class="topic-pill">PERTANAHAN</a>
                <a href="#" class="topic-pill">PAJAK</a>
                <a href="#" class="topic-pill">INSTAGRAM</a>
                <a href="#" class="topic-pill">YOUTUBE</a>
                <a href="#" class="topic-pill">TIKTOK</a>
                <a href="#" class="topic-pill">LINKEDIN</a>
            </div>
        </section>

        <section class="container py-5">

            <!-- GRID ARTIKEL -->
            <div class="row g-4">

                <!-- CARD -->
                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <!-- CARD -->
                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <!-- CARD -->
                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                
                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            Cara Mengubah Jaringan 4G ke 5G di HP
                        </h5>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            tttttttttttttttttt
                        </h5>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 article-item">
                    <div class="blog-card h-100">
                        <img src="img/berita.jpg" class="img-fluid rounded mb-3" alt="">
                        <small class="text-muted d-block mb-1">17 December 2025</small>
                        <h5 class="fw-bold">
                            tttttttttttttttttt
                        </h5>
                    </div>
                </div>
            </div>

            <!-- PAGINATION -->
            <nav class="mt-5 d-flex justify-content-center">
                <ul class="pagination pagination-lg" id="pagination">
                    <li class="page-item">
                        <button class="page-link text-dark" id="prevBtn">‹</button>
                    </li>

                    <!-- ANGKA AUTO -->

                    <li class="page-item">
                        <button class="page-link text-dark" id="nextBtn">›</button>
                    </li>
                </ul>
            </nav>
        </section>
    </div>
    @include('layout.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/swiper.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const itemsPerPage = 6;
            const articles = document.querySelectorAll(".article-item");
            const pagination = document.getElementById("pagination");
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");

            const totalPages = Math.ceil(articles.length / itemsPerPage);
            let currentPage = 1;
            const maxVisible = 5;

            function showPage(page) {
                articles.forEach((item, index) => {
                    item.style.display = "none";
                    if (
                        index >= (page - 1) * itemsPerPage &&
                        index < page * itemsPerPage
                    ) {
                        item.style.display = "block";
                    }
                });

                prevBtn.disabled = page === 1;
                nextBtn.disabled = page === totalPages;

                renderPagination();
            }

            function renderPagination() {
                document.querySelectorAll(".page-number, .dots").forEach(e => e.remove());

                let start = Math.max(1, currentPage - 2);
                let end = Math.min(totalPages, start + maxVisible - 1);

                if (end - start < maxVisible - 1) {
                    start = Math.max(1, end - maxVisible + 1);
                }

                if (start > 1) {
                    addDots();
                }

                for (let i = start; i <= end; i++) {
                    addPageNumber(i);
                }

                if (end < totalPages) {
                    addDots();
                }
            }

            function addPageNumber(page) {
                const li = document.createElement("li");
                li.className = "page-item page-number" + (page === currentPage ? " active" : "");

                const btn = document.createElement("button");
                btn.className = "page-link text-dark";
                btn.textContent = page;

                btn.addEventListener("click", () => {
                    currentPage = page;
                    showPage(currentPage);
                });

                li.appendChild(btn);
                pagination.insertBefore(li, nextBtn.parentElement);
            }

            function addDots() {
                const li = document.createElement("li");
                li.className = "page-item dots disabled";
                li.innerHTML = `<span class="page-link">...</span>`;
                pagination.insertBefore(li, nextBtn.parentElement);
            }

            prevBtn.addEventListener("click", () => {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            nextBtn.addEventListener("click", () => {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            showPage(currentPage);
        });
        </script>

</body>
</html>