<nav class="navbar navbar-expand-lg navbar-light bg-custom">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center me-3" href="#">
      <img src="/img/logo.png" alt="" width="100" height="50" class="d-inline-block align-text-top">
    </a>

    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navigasi">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navigasi">    
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a href="{{ route('main') }}" class="nav-link">Home</a></li>
         <li class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            About Us
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="{{ route('about') }}">Siapa Kami</a></li>
            <li><a class="dropdown-item" href="{{ route('speakers') }}">Pemateri</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
          </ul>
        </li>
         <li class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Workshop</a></li>
            <li><a class="dropdown-item" href="#">Seminar</a></li>
            <li><a class="dropdown-item" href="#">Books & Ecourse</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
          </ul>
        </li>
        <li class="nav-item"><a href="#" class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="#" class="nav-link">Sign In</a></li>
      </ul>
    </div>
  </div>
</nav>
