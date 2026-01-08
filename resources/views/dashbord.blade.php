<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin CMS Company Profile</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #4361ee;
            --secondary-color: #3a0ca3;
            --light-color: #f8f9fa;
            --dark-color: #212529;
            --success-color: #4cc9f0;
            --warning-color: #f72585;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f7fb;
            color: var(--dark-color);
            overflow-x: hidden;
        }
        
        /* Sidebar Styles */
        .sidebar {
            background-color: white;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            width: 280px;
            z-index: 1050;
            transition: all 0.3s ease;
            overflow-y: auto;
        }
        
        .sidebar-header {
            padding: 20px 15px;
            border-bottom: 1px solid #eee;
            background-color: #ffb300;
            color: white;
            position: sticky;
            top: 0;
            z-index: 10;
        }
        
        .sidebar-menu {
            padding: 15px 0;
        }
        
        .sidebar-menu .nav-link {
            color: #555;
            padding: 12px 15px;
            border-radius: 0;
            margin-bottom: 3px;
            transition: all 0.2s;
            font-size: 0.95rem;
        }
        
        .sidebar-menu .nav-link:hover,
        .sidebar-menu .nav-link.active {
            background-color: rgba(237, 178, 60, 0.1);
            color: #ffb300;
            border-left: 4px solid #ffb300;
        }
        
        .sidebar-menu .nav-link i {
            width: 22px;
            margin-right: 10px;
            font-size: 1.1rem;
        }
        
        /* Main Content Styles */
        .main-content {
            margin-left: 280px;
            padding: 15px;
            transition: all 0.3s ease;
            min-height: 100vh;
        }
        
        .top-navbar {
            background-color: white;
            border-radius: 10px;
            padding: 12px 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 15px;
            z-index: 1040;
        }
        
        .page-title h2 {
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 3px;
            font-size: 1.5rem;
        }
        
        .page-title p {
            color: #6c757d;
            font-size: 0.85rem;
        }
        
        /* Content Cards */
        .content-card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .content-card .card-header {
            background: transparent;
            border-bottom: 1px solid #eee;
            padding: 0 0 12px 0;
            margin-bottom: 15px;
        }
        
        .content-card .card-title {
            font-weight: 600;
            color: var(--dark-color);
            font-size: 1.2rem;
        }
        
        /* Dashboard Stats */
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 15px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 15px;
            transition: transform 0.3s;
            height: 100%;
        }
        
        .stat-card:hover {
            transform: translateY(-5px);
        }
        
        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            color: white;
            flex-shrink: 0;
        }
        
        .stat-icon.blue {
            background-color: var(--primary-color);
        }
        
        .stat-icon.green {
            background-color: #2ec4b6;
        }
        
        .stat-icon.orange {
            background-color: #ff9f1c;
        }
        
        .stat-icon.pink {
            background-color: var(--warning-color);
        }
        
        /* Tables */
        .table-responsive {
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #eee;
        }
        
        .table {
            margin-bottom: 0;
            font-size: 0.9rem;
        }
        
        .table th {
            background-color: #f8f9fa;
            border-bottom: 2px solid #dee2e6;
            font-weight: 600;
            color: var(--dark-color);
            padding: 12px 10px;
            white-space: nowrap;
        }
        
        .table td {
            padding: 10px;
            vertical-align: middle;
        }
        
        /* Form Styles */
        .form-control, .form-select {
            border-radius: 8px;
            padding: 8px 12px;
            border: 1px solid #ddd;
            font-size: 0.95rem;
        }
        
        .form-control:focus, .form-select:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.25rem rgba(67, 97, 238, 0.25);
        }
        
        .btn {
            font-size: 0.9rem;
            padding: 8px 16px;
        }
        
        .btn-primary {
            background-color: #ff9f1c;
            border-color: #fff;
            border-radius: 8px;
        }
        
        .btn-primary:hover {
            background-color: #000;
            border-color: #fff;
        }
        
        .btn-sm {
            padding: 5px 10px;
            font-size: 0.85rem;
        }
        
        /* Tabs */
        .nav-tabs {
            border-bottom: 1px solid #eee;
            flex-wrap: nowrap;
            overflow-x: auto;
            overflow-y: hidden;
            -webkit-overflow-scrolling: touch;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }
        
        .nav-tabs::-webkit-scrollbar {
            display: none;
        }
        
        .nav-tabs .nav-link {
            color: #6c757d;
            border: none;
            padding: 8px 15px;
            font-weight: 500;
            white-space: nowrap;
            font-size: 0.9rem;
        }
        
        .nav-tabs .nav-link.active {
            color: #ff9f1c;
            border-bottom: 2px solid var(--primary-color);
            background-color: transparent;
        }
        
        /* Toggle Button for Mobile */
        #sidebarToggle {
            display: none;
            background-color: var(--primary-color);
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            align-items: center;
            justify-content: center;
            margin-right: 10px;
            flex-shrink: 0;
        }
        
        /* Overlay for mobile sidebar */
        .sidebar-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1040;
        }
        
        /* Responsive Styles */
        @media (max-width: 1199.98px) {
            .sidebar {
                width: 250px;
            }
            
            .main-content {
                margin-left: 250px;
            }
        }
        
        @media (max-width: 991.98px) {
            .sidebar {
                width: 250px;
                transform: translateX(-100%);
                box-shadow: 5px 0 15px rgba(0, 0, 0, 0.1);
            }
            
            .sidebar.show {
                transform: translateX(0);
            }
            
            .main-content {
                margin-left: 0;
                padding: 10px;
            }
            
            #sidebarToggle {
                display: flex;
            }
            
            .sidebar-overlay.show {
                display: block;
            }
            
            .top-navbar {
                padding: 10px;
                border-radius: 8px;
                margin-bottom: 15px;
                position: relative;
                top: 0;
            }
            
            .page-title h2 {
                font-size: 1.3rem;
            }
            
            .content-card {
                padding: 15px;
            }
        }
        
        @media (max-width: 767.98px) {
            .stat-card {
                padding: 12px;
            }
            
            .stat-icon {
                width: 45px;
                height: 45px;
                font-size: 18px;
            }
            
            .content-card {
                padding: 12px;
                border-radius: 8px;
            }
            
            .table th, .table td {
                padding: 8px 6px;
                font-size: 0.85rem;
            }
            
            .btn {
                padding: 6px 12px;
                font-size: 0.85rem;
            }
            
            .top-navbar > div:first-child {
                display: flex;
                align-items: center;
                width: 100%;
                margin-bottom: 10px;
            }
            
            .top-navbar > div:last-child {
                width: 100%;
                justify-content: space-between;
            }
            
            .page-title {
                flex-grow: 1;
            }
        }
        
        @media (max-width: 575.98px) {
            .sidebar {
                width: 100%;
                max-width: 280px;
            }
            
            .main-content {
                padding: 8px;
            }
            
            .page-title h2 {
                font-size: 1.2rem;
            }
            
            .stat-card h3 {
                font-size: 1.5rem;
            }
            
            .stat-card h5 {
                font-size: 0.9rem;
            }
            
            .stat-icon {
                width: 40px;
                height: 40px;
                font-size: 16px;
            }
            
            .table {
                font-size: 0.8rem;
            }
            
            .table th, .table td {
                padding: 6px 4px;
            }
            
            .form-control, .form-select {
                font-size: 0.9rem;
                padding: 6px 10px;
            }
            
            .nav-tabs .nav-link {
                padding: 6px 10px;
                font-size: 0.85rem;
            }
            
            /* Hide less important columns on very small screens */
            .table th:nth-child(4),
            .table td:nth-child(4),
            .table th:nth-child(5),
            .table td:nth-child(5) {
                display: none;
            }
        }
        
        @media (max-width: 400px) {
            /* Further column hiding for very small screens */
            .table th:nth-child(3),
            .table td:nth-child(3) {
                display: none;
            }
        }
        
        /* Content Sections */
        .content-section {
            display: none;
        }
        
        .content-section.active {
            display: block;
            animation: fadeIn 0.5s;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        /* Footer */
        .footer {
            text-align: center;
            padding: 15px;
            color: #6c757d;
            font-size: 0.85rem;
            border-top: 1px solid #eee;
            margin-top: 20px;
        }
        
        /* Dropdown adjustments for mobile */
        .dropdown-menu {
            font-size: 0.9rem;
        }
        
        /* Improve button spacing on mobile */
        .btn-group-vertical > .btn,
        .d-grid > .btn {
            margin-bottom: 8px;
        }
        
        /* Fix modal for mobile */
        .modal-dialog {
            margin: 10px;
        }
        
        .modal-content {
            border-radius: 10px;
        }
        
        /* Utility classes for responsive text */
        .text-responsive {
            font-size: calc(0.9rem + 0.3vw);
        }
    </style>
</head>
<body>
    <!-- Sidebar Overlay for Mobile -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h3 class="mb-0"><i class="bi bi-building"></i> Ternak Properti</h3>
            <p class="mb-0 mt-2" style="font-size: 0.85rem;">Administrator Dashboard</p>
        </div>
        
        <div class="sidebar-menu">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#" data-section="dashboard">
                        <i class="bi bi-speedometer2"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="home">
                        <i class="bi bi-house-door"></i> Home
                        <span class="badge bg-dark ms-2">2</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="about">
                        <i class="bi bi-info-circle"></i> About Us
                        <span class="badge bg-dark ms-2">2</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="product">
                        <i class="bi bi-box-seam"></i> Product
                        <span class="badge bg-dark ms-2">4</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" data-section="blog">
                        <i class="bi bi-pencil-square"></i> Blog
                        <span class="badge bg-dark ms-2">2</span>
                    </a>
                </li>
                <li class="nav-item mt-4">
                    <a class="nav-link" href="#" data-section="logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
    <!-- Main Content -->
    <div class="main-content" id="mainContent">
        <!-- Top Navbar -->
        <div class="top-navbar">
            <div>
                <button id="sidebarToggle" class="me-2">
                    <i class="bi bi-list"></i>
                </button>
                <div class="page-title">
                    <h2 id="pageTitle" class="text-responsive">Dashboard</h2>
                    <p id="pageSubtitle">Overview & Statistics</p>
                </div>
            </div>
            
            <div class="d-flex align-items-center">
                <div class="dropdown me-2">
                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="notificationsDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-bell"></i>
                        <span class="badge bg-danger ms-1">0</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="notificationsDropdown">
                        <li><a class="dropdown-item" href="#">New blog</a></li>
                        <li><a class="dropdown-item" href="#">Product</a></li>   
                        <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                </div>
                
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <div class="me-2">
                            <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 36px; height: 36px;">
                                <span class="text-white fw-bold">AD</span>
                            </div>
                        </div>
                        <div class="d-none d-md-block">
                            <div class="fw-bold">Admin User</div>
                            <div class="small text-muted">Administrator</div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                        <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i> Profile</a></li>
                        <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i> Settings</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-right me-2"></i> Logout</a></li>
                    </ul>

                    <form id="logout-form" action="/logout" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        
        <!-- Dashboard Content -->
        <div class="content-section active" id="dashboard">
            <div class="row mb-3 g-3">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="text-muted">Total Views</h5>
                                <h3 class="fw-bold">12,458</h3>
                                <p class="text-success mb-0"><i class="bi bi-arrow-up"></i> 12.5% increase</p>
                            </div>
                            <div class="stat-icon blue">
                                <i class="bi bi-eye"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="text-muted">Products</h5>
                                <h3 class="fw-bold">24</h3>
                                <p class="text-success mb-0"><i class="bi bi-arrow-up"></i> 3 new added</p>
                            </div>
                            <div class="stat-icon green">
                                <i class="bi bi-box-seam"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="text-muted">Blog Posts</h5>
                                <h3 class="fw-bold">47</h3>
                                <p class="text-warning mb-0"><i class="bi bi-arrow-right"></i> 2 drafts pending</p>
                            </div>
                            <div class="stat-icon orange">
                                <i class="bi bi-file-text"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row g-3">
                <div class="col-lg-8">
                    <div class="content-card">
                        <div class="card-header">
                            <h5 class="card-title">Recent Activity</h5>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Action</th>
                                        <th>Page</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Admin</td>
                                        <td>Updated product</td>
                                        <td>Workshop Page</td>
                                        <td>10 minutes ago</td>
                                    </tr>
                                    <tr>
                                        <td>Editor</td>
                                        <td>Published blog post</td>
                                        <td>Blog Page</td>
                                        <td>2 hours ago</td>
                                    </tr>
                                    <tr>
                                        <td>Admin</td>
                                        <td>Added new speaker</td>
                                        <td>About Us Page</td>
                                        <td>5 hours ago</td>
                                    </tr>
                                    <tr>
                                        <td>Admin</td>
                                        <td>Updated company info</td>
                                        <td>About Us Page</td>
                                        <td>1 day ago</td>
                                    </tr>
                                    <tr>
                                        <td>Editor</td>
                                        <td>Created new course</td>
                                        <td>E-Course Page</td>
                                        <td>2 days ago</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <div class="content-card">
                        <div class="card-header">
                            <h5 class="card-title">Quick Actions</h5>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary mb-2" data-section="home">
                                <i class="bi bi-house-door me-2"></i> Edit Home Page
                            </button>
                            <button class="btn btn-primary mb-2" data-section="about">
                                <i class="bi bi-info-circle me-2"></i> Update About Us
                            </button>
                            <button class="btn btn-primary mb-2" data-section="product">
                                <i class="bi bi-plus-circle me-2"></i> Add New Product
                            </button>
                            <button class="btn btn-primary mb-2" data-section="blog">
                                <i class="bi bi-pencil me-2"></i> Write New Blog Post
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Home Content -->
        <div class="content-section" id="home">
            <div class="content-card">
                <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <h5 class="card-title mb-2 mb-md-0">Home Page Management</h5>
                    <!-- <button class="btn btn-primary btn-sm">Save Changes</button> -->
                </div>
                
                <form action="/home" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="py-3 content-card">
                        <h1 class="fs-4">informasi dasar home</h1>
                        <div class="mb-3">
                            <label for="homeTitle" class="form-label">Page Title</label>
                            <input type="text" name="hero_title" class="form-control" id="homeTitle" value="" placeholder="Berhasil Profit 200% dari Berbisnis Properti! Temukan Strategi nya!">
                        </div>
                        
                        <div class="mb-3">
                            <label for="homeSubtitle" class="form-label">Page Subtitle</label>
                            <input type="text" name="hero_subtitle" class="form-control" id="homeSubtitle" value="" placeholder="Komunitas properti eksklusif, belajar langsung dari pelaku lapangan yang sudah buktiin sendiri strategi cuan properti — bukan teori doang!">
                        </div>
                        
                        <div class="mb-3">
                            <label for="homeImage" class="form-label">Hero Image</label>
                            <input type="file" name="hero_image" class="form-control" id="homeImage">
                            <div class="mt-2">
                                <small class="text-muted">Current image: homepage-hero.jpg/png/jpeg</small>
                            </div>
                        </div>
                    </div>

                    <div class="py-3 content-card">
                        <h1 class="fs-4">informasi Testimoni home</h1>
                        <div class="mb-3">
                            <label for="homeTitle" class="form-label">Testimoni Nama 1</label>                                                                                                                              
                            <input type="text" name="testimonial_name_1" class="form-control" id="homeTitle" value="" placeholder="Berhasil Profit 200% dari Berbisnis Properti! Temukan Strategi nya!">
                        </div>
                        
                        <div class="mb-3">
                            <label for="homeSubtitle" class="form-label">Deskripsi 1</label>
                            <input type="text" name="testimonial_description_1" class="form-control" id="homeSubtitle" value="" placeholder="Komunitas properti eksklusif, belajar langsung dari pelaku lapangan yang sudah buktiin sendiri strategi cuan properti — bukan teori doang!">
                        </div>

                        <div class="mb-3">
                            <label for="homeTitle" class="form-label">Testimoni Nama 2</label>                                                                                                                                             
                            <input type="text" name="testimonial_name_2" class="form-control" id="homeTitle" value="" placeholder="Berhasil Profit 200% dari Berbisnis Properti! Temukan Strategi nya!">
                        </div>
                        
                        <div class="mb-3">
                            <label for="homeSubtitle" class="form-label">Deskripsi 2</label>
                            <input type="text" name="testimonial_description_2" class="form-control" id="homeSubtitle" value="" placeholder="Komunitas properti eksklusif, belajar langsung dari pelaku lapangan yang sudah buktiin sendiri strategi cuan properti — bukan teori doang!">
                        </div>

                        <div class="mb-3">
                            <label for="homeTitle" class="form-label">Testimoni Nama 3</label>                                                                                                                                                       
                            <input type="text" name="testimonial_name_3" class="form-control" id="homeTitle" value="" placeholder="Berhasil Profit 200% dari Berbisnis Properti! Temukan Strategi nya!">
                        </div>
                        
                        <div class="mb-3">
                            <label for="homeSubtitle" class="form-label">Deskripsi 3</label>
                            <input type="text" name="testimonial_description_3" class="form-control" id="homeSubtitle" value="" placeholder="Komunitas properti eksklusif, belajar langsung dari pelaku lapangan yang sudah buktiin sendiri strategi cuan properti — bukan teori doang!">
                        </div>

                        <div class="mb-3">
                            <label for="homeTitle" class="form-label">Testimoni Nama 4</label>                                                                                                                                       
                            <input type="text" name="testimonial_name_4" class="form-control" id="homeTitle" value="" placeholder="Berhasil Profit 200% dari Berbisnis Properti! Temukan Strategi nya!">
                        </div>
                        
                        <div class="mb-3">
                            <label for="homeSubtitle" class="form-label">Deskripsi</label>
                            <input type="text" name="testimonial_description_4" class="form-control" id="homeSubtitle" value="" placeholder="Komunitas properti eksklusif, belajar langsung dari pelaku lapangan yang sudah buktiin sendiri strategi cuan properti — bukan teori doang!">
                        </div>
                    </div>

                    <div class="py-3 content-card">
                        <h1 class="fs-4">informasi Youtube home</h1>
                            <div class="mb-3">
                                <label for="homeSubtitle" class="form-label">judul youtube</label>
                                <input type="text" name="youtube_title_1" class="form-control" id="homeSubtitle" value="" placeholder="Siap Naik Level? Best Seller Januari–Desember 2025">
                            </div>

                            <div class="mb-3">
                                <label for="homeSubtitle" class="form-label">link youtube</label>
                                <input type="text" name="youtube_link_1" class="form-control" id="homeSubtitle" value="" placeholder="https://www.youtube.com/watch?v=xxxx">
                            </div>

                            <div class="mb-3">
                                <label for="homeSubtitle" class="form-label">judul youtube</label>
                                <input type="text" name="youtube_title_2" class="form-control" id="homeSubtitle" value="" placeholder="Siap Naik Level? Best Seller Januari–Desember 2025">
                            </div>

                            <div class="mb-3">
                                <label for="homeSubtitle" class="form-label">link youtube</label>
                                <input type="text" name="youtube_link_2" class="form-control" id="homeSubtitle" value="" placeholder="https://www.youtube.com/watch?v=xxxx">
                            </div>
                    </div>

                    <div class="py-3 content-card">
                        <h1 class="fs-4">informasi image peserta home</h1>
                            <div class="mb-3">
                                <label for="homeImage" class="form-label">Image peserta</label>
                                <input type="file" name="participant_image_1" class="form-control" id="homeImage">
                                <div class="mt-2">
                                    <small class="text-muted">Current image: homepage-hero.jpg/png/jpeg</small>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="homeImage" class="form-label">Image peserta</label>
                                <input type="file" name="participant_image_2" class="form-control" id="homeImage">
                                <div class="mt-2">
                                    <small class="text-muted">Current image: homepage-hero.jpg/png/jpeg</small>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="homeImage" class="form-label">Image peserta</label>
                                <input type="file" name="participant_image_3" class="form-control" id="homeImage">
                                <div class="mt-2">
                                    <small class="text-muted">Current image: homepage-hero.jpg/png/jpeg</small>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="homeImage" class="form-label">Image peserta</label>
                                <input type="file" name="participant_image_4" class="form-control" id="homeImage">
                                <div class="mt-2">
                                    <small class="text-muted">Current image: homepage-hero.jpg/png/jpeg</small>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="homeImage" class="form-label">Image peserta</label>
                                <input type="file" name="participant_image_5" class="form-control" id="homeImage">
                                <div class="mt-2">
                                    <small class="text-muted">Current image: homepage-hero.jpg/png/jpeg</small>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="homeImage" class="form-label">Image peserta</label>
                                <input type="file" name="participant_image_6" class="form-control" id="homeImage">
                                <div class="mt-2">
                                    <small class="text-muted">Current image: homepage-hero.jpg/png/jpeg</small>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="homeImage" class="form-label">Image peserta</label>
                                <input type="file" name="participant_image_7" class="form-control" id="homeImage">
                                <div class="mt-2">
                                    <small class="text-muted">Current image: homepage-hero.jpg/png/jpeg</small>
                                </div>
                            </div>
                    </div>

                    <div class="py-3 content-card">
                        <h1 class="fs-4">informasi logo home</h1>
                            <div class="mb-3">
                                <label for="homeImage" class="form-label">Image Logo</label>
                                <input type="file" name="logo_image" class="form-control" id="homeImage">
                                <div class="mt-2">
                                    <small class="text-muted">Current image: homepage-hero.jpg/png/jpeg</small>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="homeSubtitle" class="form-label">Nama Logo</label>
                                <input type="text" name="nama_logo" class="form-control" id="homeSubtitle" value="" placeholder="Logo Ternak Properti">
                            </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-primary">Update Home Page</button>
                    </div>
                </form>
            </div>

            <div class="content-card">
                <h5 class="mb-3">Data Home Page</h5>

                <div class="table-responsive">
                    <table class="table table-hover align-middle text-nowrap">
                        <thead class="table-light">
                            <tr>
                                <th>Logo</th>
                                <th>Page Title</th>
                                <th>Page Subtitle</th>
                                <th>Nama Logo</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($home as $home)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $home->hero_title }}</td>
                                <td>{{ $home->youtube_title_1 }}</td>
                                <td>
                                    @if($home->logo_image)
                                        <img src="{{ asset('storage/'.$home->logo_image) }}" width="60">
                                    @endif
                                </td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- About Us Content -->
        <div class="content-section" id="about">
            <div class="content-card">
                <div class="card-header">
                    <h5 class="card-title">About Us Management</h5>
                </div>
                
                <ul class="nav nav-tabs" id="aboutTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="company-tab" data-bs-toggle="tab" data-bs-target="#company" type="button" role="tab">Company Profile</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="speakers-tab" data-bs-toggle="tab" data-bs-target="#speakers" type="button" role="tab">Speakers</button>
                    </li>
                </ul>
                
                <div class="tab-content p-2 p-md-3" id="aboutTabsContent">
                    <div class="tab-pane fade show active" id="company" role="tabpanel">
                        <form action="/company-profile" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="companyName" class="form-label">Company Name</label>
                                <input type="text" name="company_name" class="form-control" id="companyName" value="" placeholder="PT. Solusi Bisnis Indonesia">
                            </div>
                            
                            <div class="mb-3">
                                <label for="companyDescription" class="form-label">Company Description</label>
                                <textarea name="company_description" id="companyDescription" class="form-control" placeholder="Founded in 2008, PT. Solusi Bisnis Indonesia has grown to become a leading provider of business solutions in Southeast Asia. With a team of over 200 experts, we specialize in delivering comprehensive services including workshops, seminars, training materials, and digital learning solutions. Our mission is to empower businesses with knowledge and tools to achieve sustainable growth."></textarea>
                                
                            </div>

                            <div class="mb-3">
                                <label for="companyImage" class="form-label">Company Image</label>
                                <input type="file" name="image_company" class="form-control" id="companyImage" value="" placeholder="URL to company image">
                            </div>

                            <div class="mb-3">
                                <label for="companyImage" class="form-label">image peserta</label>
                                <input type="file" name="image_peserta1" class="form-control" id="Imagepeserta1" value="" placeholder="URL to company image">
                            </div>

                            <div class="mb-3">
                                <label for="companyImage" class="form-label">image peserta</label>
                                <input type="file" name="image_peserta2" class="form-control" id="Imagepeserta2" value="" placeholder="URL to company image">
                            </div>

                            <div class="mb-3">
                                <label for="companyImage" class="form-label">image peserta</label>
                                <input type="file" name="image_peserta3" class="form-control" id="Imagepeserta3" value="" placeholder="URL to company image">
                            </div>

                            <div class="mb-3">
                                <label for="companyImage" class="form-label">image peserta</label>
                                <input type="file" name="image_peserta4" class="form-control" id="Imagepeserta4" value="" placeholder="URL to company image">
                            </div>
                            
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Update Company Profile</button>
                            </div>
                        </form>
                    </div>
                    
                    <div class="tab-pane fade" id="speakers" role="tabpanel">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                            <h6 class="mb-2 mb-md-0">Manage Speakers/Presenters</h6>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addSpeakerModal">
                                <i class="bi bi-plus-lg"></i> Add New Speaker
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <tbody>
                                    @forelse ($speakers as $speaker)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center me-2"
                                                    style="width: 36px; height: 36px;">
                                                    {{ strtoupper(substr($speaker->name, 0, 2)) }}
                                                </div>
                                                <div>
                                                    <div class="fw-bold">{{ $speaker->name }}</div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="d-none d-md-table-cell">
                                            {{ $speaker->position }}
                                        </td>

                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>

                                        <td>
                                            <div class="btn-group btn-group-sm">
                                                <button class="btn btn-outline-primary">
                                                    <i class="bi bi-pencil"></i>
                                                </button>
                                                <button class="btn btn-outline-danger">
                                                    <i class="bi bi-trash"></i>
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted">
                                            Belum ada data speaker
                                        </td>
                                    </tr>
                                    @endforelse
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Product Content -->
        <div class="content-section" id="product">
            <div class="content-card">
                <div class="card-header">
                    <h5 class="card-title">Product Management</h5>
                </div>
                
                <ul class="nav nav-tabs" id="productTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="workshop-tab" data-bs-toggle="tab" data-bs-target="#workshop" type="button" role="tab">Workshop</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="seminar-tab" data-bs-toggle="tab" data-bs-target="#seminar" type="button" role="tab">Seminar</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="book-tab" data-bs-toggle="tab" data-bs-target="#book" type="button" role="tab">Book</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="ecourse-tab" data-bs-toggle="tab" data-bs-target="#ecourse" type="button" role="tab">E-Course</button>
                    </li>
                </ul>
                
                <div class="tab-content p-2 p-md-3" id="productTabsContent">
                    <div class="tab-pane fade show active" id="workshop" role="tabpanel">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                            <h6 class="mb-2 mb-md-0">Workshop Products</h6>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addworshopModal">
                                <i class="bi bi-plus-lg"></i> Add New Workshop
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                             <table class="table table-hover align-middle text-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th>Title</th>
                                        <th class="d-none d-sm-table-cell">Date</th>
                                        <th>Price</th>
                                        <th class="d-none d-md-table-cell">Benefit</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @forelse ($ws as $item)
                                    <tr>
                                        <td class="text-truncate" style="max-width: 220px;">
                                            {{ $item->product_name }}
                                        </td>

                                        <td class="d-none d-sm-table-cell">
                                            {{ $item->tanggal_waktu }}
                                        </td>

                                        <td>
                                            Rp {{ number_format($item->harga_spesial, 0, ',', '.') }}
                                        </td>

                                        <td class="d-none d-md-table-cell">
                                            Rp {{ number_format($item->total_benefit, 0, ',', '.') }}
                                        </td>

                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>

                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('ws.edit', $item->id_ws) }}"
                                                class="btn btn-outline-primary">
                                                    <i class="bi bi-pencil"></i>
                                                </a>

                                                <form action="{{ route('ws.destroy', $item->id_ws) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin hapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">
                                            Data WS belum ada
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="seminar" role="tabpanel">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                            <h6 class="mb-2 mb-md-0">Seminar Products</h6>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#seminarModal">
                                <i class="bi bi-plus-lg"></i> Add New Seminar
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover align-middle text-nowrap">
                                <thead class="table-light">
                                    <tr>
                                        <th>Title</th>
                                        <th class="d-none d-sm-table-cell">Date</th>
                                        <th>Price Per Person</th>
                                        <th class="d-none d-md-table-cell">Price Per Two</th>
                                        <th class="d-none d-md-table-cell">Price Onsite</th>
                                        <th>Status</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                @forelse ($Seminar as $item)
                                    <tr>
                                        <td class="text-truncate" style="max-width: 220px;">
                                            {{ $item->product_name }}
                                        </td>

                                        <td class="d-none d-sm-table-cell">
                                            {{ $item->tanggal_waktu }}
                                        </td>

                                        <td>
                                            Rp {{ number_format($item->harga_per_orang, 0, ',', '.') }}
                                        </td>

                                        <td class="d-none d-md-table-cell">
                                            Rp {{ number_format($item->harga_dua_orang, 0, ',', '.') }}
                                        </td>

                                        <td class="d-none d-md-table-cell">
                                            Rp {{ number_format($item->harga_di_tempat, 0, ',', '.') }}
                                        </td>

                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>

                                        <td class="text-center">
                                            <div class="btn-group btn-group-sm">
                                                <a href="{{ route('Seminar.edit', $item->id_sm) }}"
                                                class="btn btn-outline-primary">
                                                    <i class="bi bi-pencil"></i>
                                                </a>

                                                <form action="{{ route('Seminar.destroy', $item->id_sm) }}"
                                                    method="POST"
                                                    onsubmit="return confirm('Yakin hapus data ini?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-outline-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class="text-center text-muted">
                                            Data seminar belum ada
                                        </td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="book" role="tabpanel">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                            <h6 class="mb-2 mb-md-0">Book Products</h6>
                            <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#bookModal">
                                <i class="bi bi-plus-lg"></i> Add New Book
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th class="d-none d-sm-table-cell">Author</th>
                                        <th>Price</th>
                                        <th class="d-none d-md-table-cell">Stock</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Business Strategy 101</td>
                                        <td class="d-none d-sm-table-cell">Diana Rahayu</td>
                                        <td>Rp 150.000</td>
                                        <td class="d-none d-md-table-cell">245</td>
                                        <td><span class="badge bg-success">In Stock</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button class="btn btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade" id="ecourse" role="tabpanel">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                            <h6 class="mb-2 mb-md-0">E-Course Products</h6>
                            <button class="btn btn-primary btn-sm">
                                <i class="bi bi-plus-lg"></i> Add New E-Course
                            </button>
                        </div>
                        
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th class="d-none d-sm-table-cell">Modules</th>
                                        <th>Price</th>
                                        <th class="d-none d-md-table-cell">Enrolled</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Project Management Certification</td>
                                        <td class="d-none d-sm-table-cell">12</td>
                                        <td>Rp 850.000</td>
                                        <td class="d-none d-md-table-cell">324</td>
                                        <td><span class="badge bg-success">Active</span></td>
                                        <td>
                                            <div class="btn-group btn-group-sm" role="group">
                                                <button class="btn btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                                <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Blog Content -->
        <div class="content-section" id="blog">
            <div class="content-card">
                <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-3">
                    <h5 class="card-title mb-2 mb-md-0">Blog Management</h5>
                    <button class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#addPostModal">
                        <i class="bi bi-plus-lg"></i> Add New Post
                    </button>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th class="d-none d-sm-table-cell">Author</th>
                                <th class="d-none d-md-table-cell">Category</th>
                                <th class="d-none d-lg-table-cell">Date</th>
                                <th class="d-none d-md-table-cell">Views</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>5 Strategies for Business Growth in 2023</td>
                                <td class="d-none d-sm-table-cell">Diana Rahayu</td>
                                <td class="d-none d-md-table-cell">Business</td>
                                <td class="d-none d-lg-table-cell">15 Mar 2023</td>
                                <td class="d-none d-md-table-cell">1,245</td>
                                <td><span class="badge bg-success">Published</span></td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <button class="btn btn-outline-primary"><i class="bi bi-pencil"></i></button>
                                        <button class="btn btn-outline-danger"><i class="bi bi-trash"></i></button>
                                        <button class="btn btn-outline-secondary d-none d-sm-inline-block"><i class="bi bi-eye"></i></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Settings Content -->
        <div class="content-section" id="settings">
            <div class="content-card">
                <div class="card-header">
                    <h5 class="card-title">System Settings</h5>
                </div>
                
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="siteName" class="form-label">Site Name</label>
                            <input type="text" class="form-control" id="siteName" value="Company Profile CMS">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="siteUrl" class="form-label">Site URL</label>
                            <input type="text" class="form-control" id="siteUrl" value="https://companyprofile.com">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="adminEmail" class="form-label">Admin Email</label>
                        <input type="email" class="form-control" id="adminEmail" value="admin@companyprofile.com">
                    </div>
                    
                    <div class="mb-3">
                        <label for="timezone" class="form-label">Timezone</label>
                        <select class="form-select" id="timezone">
                            <option selected>Asia/Jakarta (GMT+7)</option>
                            <option>Asia/Makassar (GMT+8)</option>
                            <option>Asia/Jayapura (GMT+9)</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="maintenanceMode" class="form-label">Maintenance Mode</label>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="maintenanceMode">
                            <label class="form-check-label" for="maintenanceMode">
                                Enable maintenance mode
                            </label>
                        </div>
                        <small class="text-muted">When enabled, the site will be inaccessible to visitors except administrators.</small>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-primary">Save Settings</button>
                    </div>
                </form>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p>© 2023 Company Profile CMS. All rights reserved. | Version 2.1.0</p>
        </div>
    </div>
    
    <!-- Add Speaker Modal -->
    <div class="modal fade" id="addSpeakerModal" tabindex="-1" aria-labelledby="addSpeakerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSpeakerModalLabel">Add New Speaker</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label for="speakerName" class="form-label">Full Name</label>
                            <input type="text" name="name" class="form-control" id="speakerName" placeholder="Name">
                        </div>
                        <div class="mb-3">
                            <label for="speakerPosition" class="form-label">Position</label>
                            <input type="text" name="position" class="form-control" id="speakerPosition" placeholder="Investor">
                        </div>
                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Biography</label>
                            <textarea class="form-control" name="biography" id="speakerBio" rows="3" placeholder="Sejak tahun 2012 fokus properti dan di 2018 mulai dengan teknik NPL & LCA, beliau berhasil menjadi Flipper Properti dan membangun Komunitas Ternak Properti se-Indonesia."></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Image</label>
                            <input type="file" name="image" class="form-control" id="speakerImage">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Speaker</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <div class="modal fade" id="addworshopModal" tabindex="-1" aria-labelledby="addSpeakerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSpeakerModalLabel">Add New Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/ws" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label for="speakerName" class="form-label">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="speakerName" placeholder="Name">
                        </div>

                        <div class="mb-3">
                            <label for="speakerPosition" class="form-label">Subheadline Product</label>
                            <input type="text" name="subheadline_description" class="form-control" id="speakerPosition" placeholder="Investor">
                        </div>

                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Image Product</label>
                            <input type="file" name="image_product" class="form-control" id="speakerImage">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Judul Poin</label>
                            <input type="text" name="judul_poin" class="form-control" id="speakerBio" placeholder="Business Development (BD) seharusnya adalah motor penggerak perusahaan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Subheadline Poin</label>
                            <input type="text" name="subheadline_poin" class="form-control" id="speakerBio" placeholder="Business Development (BD) seharusnya adalah motor penggerak perusahaan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Poin</label>
                            <input type="text" name="poin[1]" class="form-control" id="speakerBio" placeholder="Poin 1">
                            <input type="text" name="poin[2]" class="form-control" id="speakerBio" placeholder="Poin 2">
                            <input type="text" name="poin[3]" class="form-control" id="speakerBio" placeholder="Poin 3">
                            <input type="text" name="poin[4]" class="form-control" id="speakerBio" placeholder="Poin 4">
                            <input type="text" name="poin[5]" class="form-control" id="speakerBio" placeholder="Poin 5">
                            <input type="text" name="poin[6]" class="form-control" id="speakerBio" placeholder="Poin 6">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Judul Poin</label>
                            <input type="text" name="judul_poin2" class="form-control" id="speakerBio" placeholder="Business Development (BD) seharusnya adalah motor penggerak perusahaan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Subheadline Poin</label>
                            <input type="text" name="subheadline_poin2" class="form-control" id="speakerBio" placeholder="Business Development (BD) seharusnya adalah motor penggerak perusahaan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Poin</label>
                            <input type="text" name="poin_2[1]" class="form-control" id="speakerBio" placeholder="Poin 1">
                            <input type="text" name="poin_2[2]" class="form-control" id="speakerBio" placeholder="Poin 2">
                            <input type="text" name="poin_2[3]" class="form-control" id="speakerBio" placeholder="Poin 3">
                            <input type="text" name="poin_2[4]" class="form-control" id="speakerBio" placeholder="Poin 4">
                            <input type="text" name="poin_2[5]" class="form-control" id="speakerBio" placeholder="Poin 5">
                            <input type="text" name="poin_2[6]" class="form-control" id="speakerBio" placeholder="Poin 6">
                        </div>

                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Image lokasi</label>
                            <input type="file" name="image_lokasi" class="form-control" id="speakerImage">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Nama Lokasi</label>
                            <input type="text" name="nama_lokasi" class="form-control" id="speakerBio" placeholder="BSD City, Tangerang Selatan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Image Waktu</label>
                            <input type="file" name="image_waktu" class="form-control" id="speakerImage">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Tanggal Dan Waktu</label>
                            <input type="text" name="tanggal_waktu" class="form-control" id="speakerBio" placeholder="15 April 2023, 09.00 - 17.00 WIB">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi1" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi2" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi2[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi2[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi2[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi3" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi3[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi3[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi3[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi4" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi4[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi4[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi4[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi5" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi5[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi5[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi5[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi6" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi6[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi6[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi6[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Total Benefit</label>
                            <input type="number" name="total_benefit" class="form-control" id="speakerBio" placeholder="500000">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">harga normal</label>
                            <input type="number" name="harga_normal" class="form-control" id="speakerBio" placeholder="500000">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">harga spesial</label>
                            <input type="number" name="harga_spesial" class="form-control" id="speakerBio" placeholder="500000">
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Workshop</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="seminarModal" tabindex="-1" aria-labelledby="addSpeakerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSpeakerModalLabel">Add New Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/sm" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label for="speakerName" class="form-label">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="speakerName" placeholder="Name">
                        </div>

                        <div class="mb-3">
                            <label for="speakerPosition" class="form-label">Subheadline Product</label>
                            <input type="text" name="subheadline_description" class="form-control" id="speakerPosition" placeholder="Investor">
                        </div>

                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Image Product</label>
                            <input type="file" name="image_product" class="form-control" id="speakerImage">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Judul Poin</label>
                            <input type="text" name="judul_poin" class="form-control" id="speakerBio" placeholder="Business Development (BD) seharusnya adalah motor penggerak perusahaan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Subheadline Poin</label>
                            <input type="text" name="subheadline_poin" class="form-control" id="speakerBio" placeholder="Business Development (BD) seharusnya adalah motor penggerak perusahaan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Poin</label>
                            <input type="text" name="poin[1]" class="form-control" id="speakerBio" placeholder="Poin 1">
                            <input type="text" name="poin[2]" class="form-control" id="speakerBio" placeholder="Poin 2">
                            <input type="text" name="poin[3]" class="form-control" id="speakerBio" placeholder="Poin 3">
                            <input type="text" name="poin[4]" class="form-control" id="speakerBio" placeholder="Poin 4">
                            <input type="text" name="poin[5]" class="form-control" id="speakerBio" placeholder="Poin 5">
                            <input type="text" name="poin[6]" class="form-control" id="speakerBio" placeholder="Poin 6">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Judul Poin</label>
                            <input type="text" name="judul_poin2" class="form-control" id="speakerBio" placeholder="Business Development (BD) seharusnya adalah motor penggerak perusahaan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Subheadline Poin</label>
                            <input type="text" name="subheadline_poin2" class="form-control" id="speakerBio" placeholder="Business Development (BD) seharusnya adalah motor penggerak perusahaan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Poin</label>
                            <input type="text" name="poin_2[1]" class="form-control" id="speakerBio" placeholder="Poin 1">
                            <input type="text" name="poin_2[2]" class="form-control" id="speakerBio" placeholder="Poin 2">
                            <input type="text" name="poin_2[3]" class="form-control" id="speakerBio" placeholder="Poin 3">
                            <input type="text" name="poin_2[4]" class="form-control" id="speakerBio" placeholder="Poin 4">
                            <input type="text" name="poin_2[5]" class="form-control" id="speakerBio" placeholder="Poin 5">
                            <input type="text" name="poin_2[6]" class="form-control" id="speakerBio" placeholder="Poin 6">
                        </div>

                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Image lokasi</label>
                            <input type="file" name="image_lokasi" class="form-control" id="speakerImage">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Nama Lokasi</label>
                            <input type="text" name="nama_lokasi" class="form-control" id="speakerBio" placeholder="BSD City, Tangerang Selatan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Image Waktu</label>
                            <input type="file" name="image_waktu" class="form-control" id="speakerImage">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Tanggal Dan Waktu</label>
                            <input type="text" name="tanggal_waktu" class="form-control" id="speakerBio" placeholder="15 April 2023, 09.00 - 17.00 WIB">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi1" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi2" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi2[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi2[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi2[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi3" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi3[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi3[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi3[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi4" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi4[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi4[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi4[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi5" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi5[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi5[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi5[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">judul materi</label>
                            <input type="text" name="judul_materi6" class="form-control" id="speakerBio" placeholder="Deep-dive into Company and Industry Positioning + Practice">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Materi</label>
                            <input type="text" name="poin_materi6[1]" class="form-control" id="speakerBio" placeholder="materi 1">
                            <input type="text" name="poin_materi6[2]" class="form-control" id="speakerBio" placeholder="materi 2">
                            <input type="text" name="poin_materi6[3]" class="form-control" id="speakerBio" placeholder="materi 3">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">penawaran</label>
                            <input type="text" name="penawaran" class="form-control" id="speakerBio" placeholder="30 Pendaftar Pertama mendapatkan Harga Spesial">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">harga per orang</label>
                            <input type="number" name="harga_per_orang" class="form-control" id="speakerBio" placeholder="500000">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">harga dua orang</label>
                            <input type="number" name="harga_dua_orang" class="form-control" id="speakerBio" placeholder="500000">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">harga di tempat</label>
                            <input type="number" name="harga_di_tempat" class="form-control" id="speakerBio" placeholder="500000">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Seminar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="bookModal" tabindex="-1" aria-labelledby="addSpeakerModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addSpeakerModalLabel">Add New Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/book" method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="mb-3">
                            <label for="speakerName" class="form-label">Product Name</label>
                            <input type="text" name="product_name" class="form-control" id="speakerName" placeholder="Name">
                        </div>

                        <div class="mb-3">
                            <label for="speakerPosition" class="form-label">Subheadline Product</label>
                            <input type="text" name="subheadline_description" class="form-control" id="speakerPosition" placeholder="Investor">
                        </div>

                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Image Product</label>
                            <input type="file" name="image_product" class="form-control" id="speakerImage">
                        </div>

                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Link Youtube</label>
                            <input type="text" name="link_youtube" class="form-control" id="speakerImage" placeholder="https://companyprofile.com">
                        </div>

                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Testimoni 1</label>
                            <input type="text" name="testimoni1" class="form-control" id="speakerImage" placeholder="https://companyprofile.com">
                        </div>

                        <div class="mb-3">
                            <label for="speakerImage" class="form-label">Testimoni 2</label>
                            <input type="text" name="testimoni2" class="form-control" id="speakerImage" placeholder="https://companyprofile.com">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">harga coret 1</label>
                            <input type="number" name="harga_coret1" class="form-control" id="speakerBio" placeholder="500000">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">harga coret 2</label>
                            <input type="number" name="harga_coret2" class="form-control" id="speakerBio" placeholder="500000">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Benefit 1</label>
                            <input type="text" name="benefit_1" class="form-control" id="speakerBio" placeholder="Mendapatkan Bonus E-book mengenai materi yang akan dijelaskan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Benefit 2</label>
                            <input type="text" name="benefit_2" class="form-control" id="speakerBio" placeholder="Mendapatkan Bonus E-book mengenai materi yang akan dijelaskan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Harga Utama 1</label>
                            <input type="number" name="harga_utama1" class="form-control" id="speakerBio" placeholder="500000">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Benefit 3</label>
                            <input type="text" name="benefit_3" class="form-control" id="speakerBio" placeholder="Mendapatkan Bonus E-book mengenai materi yang akan dijelaskan">
                        </div>

                        <div class="mb-3">
                            <label for="speakerBio" class="form-label">Benefit 4</label>
                            <input type="text" name="benefit_4" class="form-control" id="speakerBio" placeholder="Mendapatkan Bonus E-book mengenai materi yang akan dijelaskan">
                        </div>

                        <div class="mb-3">
                            <label for="speake  rBio" class="form-label">Harga Utama 2</label>
                            <input type="number" name="harga_utama2" class="form-control" id="speakerBio" placeholder="500000">
                        </div>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Add Book</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap 5 JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Sidebar toggle for mobile
        document.getElementById('sidebarToggle').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
            
            // Prevent body scrolling when sidebar is open
            if (sidebar.classList.contains('show')) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        });
        
        // Close sidebar when clicking overlay
        document.getElementById('sidebarOverlay').addEventListener('click', function() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebarOverlay');
            
            sidebar.classList.remove('show');
            overlay.classList.remove('show');
            document.body.style.overflow = '';
        });
        
        // Navigation between sections
        const navLinks = document.querySelectorAll('.sidebar-menu .nav-link');
        const contentSections = document.querySelectorAll('.content-section');
        const pageTitle = document.getElementById('pageTitle');
        const pageSubtitle = document.getElementById('pageSubtitle');
        
        // Page titles and subtitles for each section
        const pageTitles = {
            'dashboard': 'Dashboard',
            'home': 'Home Page',
            'about': 'About Us',
            'product': 'Product Management',
            'blog': 'Blog Management',
            'settings': 'System Settings'
        };
        
        const pageSubtitles = {
            'dashboard': 'Overview & Statistics',
            'home': 'Manage homepage content and layout',
            'about': 'Edit company profile and speakers',
            'product': 'Manage workshops, seminars, books, and e-courses',
            'blog': 'Create and manage blog posts',
            'settings': 'Configure system settings'
        };
        
        // Function to switch between content sections
        function switchSection(sectionId) {
            // Hide all content sections
            contentSections.forEach(section => {
                section.classList.remove('active');
            });
            
            // Show the selected section
            document.getElementById(sectionId).classList.add('active');
            
            // Update page title and subtitle
            pageTitle.textContent = pageTitles[sectionId];
            pageSubtitle.textContent = pageSubtitles[sectionId];
            
            // Update active nav link
            navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('data-section') === sectionId) {
                    link.classList.add('active');
                }
            });
            
            // Close sidebar on mobile after selection
            if (window.innerWidth < 992) {
                const sidebar = document.getElementById('sidebar');
                const overlay = document.getElementById('sidebarOverlay');
                
                sidebar.classList.remove('show');
                overlay.classList.remove('show');
                document.body.style.overflow = '';
            }
        }
        
        // Add click event to all sidebar links
        navLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const sectionId = this.getAttribute('data-section');
                
                // Don't switch for logout
                if (sectionId === 'logout') {
                    if (confirm('Are you sure you want to logout?')) {
                        alert('Logout successful! (This is a demo)');
                    }
                    return;
                }
                
                switchSection(sectionId);
            });
        });
        
        // Add click event to quick action buttons
        const quickActionButtons = document.querySelectorAll('.content-card button[data-section]');
        quickActionButtons.forEach(button => {
            button.addEventListener('click', function() {
                const sectionId = this.getAttribute('data-section');
                switchSection(sectionId);
            });
        });
        
        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(event) {
            const sidebar = document.getElementById('sidebar');
            const sidebarToggle = document.getElementById('sidebarToggle');
            
            if (window.innerWidth < 992 && 
                !sidebar.contains(event.target) && 
                !sidebarToggle.contains(event.target) && 
                sidebar.classList.contains('show')) {
                sidebar.classList.remove('show');
                document.getElementById('sidebarOverlay').classList.remove('show');
                document.body.style.overflow = '';
            }
        });
        
        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 992) {
                // Ensure sidebar is visible on larger screens
                document.getElementById('sidebar').classList.remove('show');
                document.getElementById('sidebarOverlay').classList.remove('show');
                document.body.style.overflow = '';
            }
        });
        
        // Initialize with dashboard section
        switchSection('dashboard');
        
        // Bootstrap Tab initialization for better mobile experience
        const tabEls = document.querySelectorAll('button[data-bs-toggle="tab"]');
        tabEls.forEach(tabEl => {
            tabEl.addEventListener('shown.bs.tab', function () {
                // Scroll the active tab into view on mobile
                if (window.innerWidth < 768) {
                    this.scrollIntoView({ behavior: 'smooth', block: 'nearest', inline: 'center' });
                }
            });
        });
    </script>
</body>
</html>