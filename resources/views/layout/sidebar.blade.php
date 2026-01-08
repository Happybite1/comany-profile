<nav class="navbar navbar-dark bg-dark d-md-none">
    <div class="container-fluid">
        <button class="btn btn-dark" data-bs-toggle="collapse" data-bs-target="#sidebarMenu">
            <i class="bi bi-list fs-4"></i>
        </button>
        <span class="navbar-brand ms-2">Admin Panel</span>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse">
            <div class="position-sticky p-3">

                <h5 class="text-white mb-4">ADMIN</h5>

                <ul class="nav flex-column gap-1">

                    <!-- Home -->
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="bi bi-house me-2"></i> Home
                        </a>
                    </li>

                    <!-- About Us -->
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center"
                           data-bs-toggle="collapse"
                           href="#aboutMenu">
                            <span>
                                <i class="bi bi-info-circle me-2"></i> About Us
                            </span>
                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="aboutMenu">
                            <ul class="nav flex-column mt-1">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Tentang Perusahaan
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Produk -->
                    <li class="nav-item">
                        <a class="nav-link d-flex justify-content-between align-items-center"
                           data-bs-toggle="collapse"
                           href="#produkMenu">
                            <span>
                                <i class="bi bi-box-seam me-2"></i> Produk
                            </span>
                            <i class="bi bi-chevron-down small"></i>
                        </a>

                        <div class="collapse ps-4" id="produkMenu">
                            <ul class="nav flex-column mt-1">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Workshop</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Seminar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Books</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">E-Course</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Blog -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-journal-text me-2"></i> Blog
                        </a>
                    </li>

                    <hr class="text-secondary">

                    <!-- Logout -->
                    <li class="nav-item">
                        <a class="nav-link text-danger" href="#">
                            <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </a>
                    </li>

                </ul>

            </div>
        </nav>
