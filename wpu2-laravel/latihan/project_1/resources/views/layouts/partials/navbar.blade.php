<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand fw-bold fs-3" href="/">Dev<span class="text-danger">Blog</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'active' :  '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'active' :  '' }}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "blog") ? 'active' :  '' }}" href="/blog">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "kategori") ? 'active' :  '' }}" href="/kategori">Kategori</a>
          </li>
        </ul>

        
        <ul class="navbar-nav ms-auto">
          {{-- auth = jika sudah login tampilkan dropdown ELSE tampil login --}}
          @auth

            <li class="nav-item">
              <img src="/img/default.jpg" alt="" width="40" class="rounded-circle border border-danger border-2">
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link text-dark fw-bold" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{ auth()->user()->name }}
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i>
                  My Dashboard</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                  <form action="/logout" method="POST">

                    @csrf

                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Logout</button>
                    
                  </form>
                </li>
              </ul>
            </li>
  
          @else

            <li class="nav-item">
              <a class="nav-link {{ ($active === "login") ? 'active' :  '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
            </li>

          @endauth

          {{-- @guest
          <li class="nav-item">
            <a class="nav-link {{ ($active === "login") ? 'active' :  '' }}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
          @else
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          @endguest --}}

        </ul>
        
      </div>
    </div>
</nav>