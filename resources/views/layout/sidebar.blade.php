<nav class="navbar navbar-dark bg-dark d-md-none">
    <div class="container-fluid">
        <button class="btn btn-dark"
                data-bs-toggle="collapse"
                data-bs-target="#sidebarMenu">
            <i class="bi bi-list"></i>
        </button>
        <span class="navbar-brand ms-2">Admin Panel</span>
    </div>
</nav>

<nav class="col-md-3 col-lg-2 d-md-block bg-dark sidebar collapse" id="sidebarMenu">
    <div class="position-sticky pt-3">

        <h5 class="text-white text-center mb-4 d-none d-md-block">Admin Panel</h5>
        
        <ul class="nav flex-column">

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link text-white active" href="#">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>
            </li>

            <!-- About Us -->
            <li class="nav-item">
                <a class="nav-link text-white d-flex justify-content-between align-items-center"
                   data-bs-toggle="collapse" href="#aboutMenu">
                    <span><i class="bi bi-info-circle me-2"></i> About Us</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <div class="collapse ps-3" id="aboutMenu" data-bs-parent="#sidebarMenu">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Profil Perusahaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Pemateri</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Produk -->
            <li class="nav-item">
                <a class="nav-link text-white d-flex justify-content-between align-items-center"
                   data-bs-toggle="collapse" href="#productMenu">
                    <span><i class="bi bi-box-seam me-2"></i> Produk</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <div class="collapse ps-3" id="productMenu" data-bs-parent="#sidebarMenu">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Workshop</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Seminar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Books & E-course</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Blog -->
            <li class="nav-item">
                <a class="nav-link text-white d-flex justify-content-between align-items-center"
                   data-bs-toggle="collapse" href="#blogMenu">
                    <span><i class="bi bi-journal-text me-2"></i> Blog</span>
                    <i class="bi bi-chevron-down"></i>
                </a>
                <div class="collapse ps-3" id="blogMenu" data-bs-parent="#sidebarMenu">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Artikel</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Kategori</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Users -->
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="bi bi-people me-2"></i> Users
                </a>
            </li>

            <!-- Settings -->
            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="bi bi-gear me-2"></i> Settings
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="#">
                    <i class="bi bi-box-arrow-right me-2"></i> Logout
                </a>
            </li>
        </ul>
    </div>
</nav>