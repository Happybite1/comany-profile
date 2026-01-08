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
    <link href='https://cdn.boxicons.com/3.0.6/fonts/basic/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    @include('layout.header')

    <div class="container-fluid p-0 m-0">
        <section class="py-5 workshop-section">
            <div class="container">

                <div class="row g-4">

                <!-- CARD 1 -->
                <div class="col-lg-4 col-md-6">
                    <div class="workshop-card h-500">
                    <img src="img/ws-20-21.png" class="img-fluid rounded-top">

                    <div class="p-4">
                        <h5 class="fw-bold">
                        Scale Up Bisnis dengan Sistem & Strategi Business Development yang Actionable
                        </h5>

                        <p class="text-muted small mt-3">
                        Workshop intensif 2 hari bersama coach & praktisi bisnis
                        berpengalaman 20 tahun lebih
                        </p>

                        <!-- LEARN MORE -->
                        <a href="#" class="learn-more d-inline-flex align-items-center mt-2">
                            Learn more
                            <i class="bxr bxs-arrow-in-up-right-stroke-circle bx-rotate-90 bx-flip-horizontal" style="color:#ffc200"></i>
                        </a>
                    </div>
                    </div>
                </div>

                <!-- CARD 2 -->
                <div class="col-lg-4 col-md-6">
                    <div class="workshop-card h-100">
                    <img src="img/workshop2.jpg" class="img-fluid rounded-top">

                    <div class="p-4">
                        <h5 class="fw-bold">
                        Kelas Pencetak Manager yang Ahli Bikin Strategi dan Jago Eksekusi
                        </h5>

                        <p class="text-muted small mt-3">
                        Workshop ini sangat direkomendasikan untuk Manager
                        agar mencapai target sampai akhir tahun
                        </p>

                        <!-- LEARN MORE -->
                        <a href="#" class="learn-more d-inline-flex align-items-center mt-2">
                            Learn more
                            <i class="bxr bxs-arrow-in-up-right-stroke-circle bx-rotate-90 bx-flip-horizontal" style="color:#ffc200"></i>
                        </a>
                    </div>
                    </div>
                </div>

                <!-- CARD 3 -->
                <div class="col-lg-4 col-md-6">
                    <div class="workshop-card h-100">
                    <img src="img/workshop3.jpg" class="img-fluid rounded-top">

                    <div class="p-4">
                        <h5 class="fw-bold">
                        Blueprint CRM untuk Membuat Customer Loyal & Rajin Repeat Order
                        </h5>

                        <p class="text-muted small mt-3">
                        70% studi kasus dan praktik. Premium OFFLINE & ONLINE workshop
                        </p>

                        <!-- LEARN MORE -->
                        <a href="#" class="learn-more d-inline-flex align-items-center mt-2">
                            Learn more
                            <i class="bxr bxs-arrow-in-up-right-stroke-circle bx-rotate-90 bx-flip-horizontal" style="color:#ffc200"></i>
                        </a>
                    </div>
                    </div>
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