<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
        <h1><a href="index.html">SobatBisnis</a></h1>
        
        <!-- Uncomment below if you prefer to use an image logo -->
        
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link {{ ($title === 'Home') ? 'active' : '' }}" href="/">Home</a></li>
          <li><a class="nav-link {{ ($title === 'About') ? 'active' : '' }}" href="/about">About</a></li>
          <li><a class="nav-link {{ ($title === 'Edukasi Bisnis') ? 'active' : '' }}" href="/cobaedukasi">Edukasi Bisnis</a></li>
          <li><a class="nav-link {{ ($title === 'Kursus Bisnis') ? 'active' : '' }}" href="/cobakursus">Kursus Bisnis</a></li>
          <li><a class="nav-link {{ ($title === 'Login') ? 'active' : '' }}" href="/login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->