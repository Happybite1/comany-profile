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

            <h1 class="fw-bold text-title">About Us</h1>
        </div>

        <section class="container-fluid py-5">
            <div class="container position-flex py-3">
                <div class="row">
                    <div class="col-sm-8">
                        <h1 class="display-9 fw-bold title-about">KOMUNITAS <span>TERNAK PROPERTI</span></h1>
                        <p class="fs-6 text-muted mb-4 text-about w-75 mr-auto">Kami adalah <a href="comany-profile-production.up.railway.app/about" class="text-link">komunitas</a> yang memberikan <a href="comany-profile-production.up.railway.app/seminar" class="text-link">Seminar</a> dan <a href="comany-profile-production.up.railway.app/workshop" class="text-link">Workshop</a> di seluruh kota besar di <a href="comany-profile-production.up.railway.app/home" class="text-link">Indonesia mengenai cara memiliki Properti murah</a> dengan cara Tanpa KPR dan bisa dimulai hanya dengan gaji UMR Sekalipun. Selain itu kami juga akan <a href="comany-profile-production.up.railway.app/blog" class="text-link">share</a> bagaimana Cara keluar dari permasalahan kredit properti macet</p>
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