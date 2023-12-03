<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-uppercase" style="color: gray">
  <span>Data Sewa</span>
</h6>

<li class="nav-item">
    <a class="nav-link {{ Request::is('/') ? 'active-side' : '' }}" href="/" >
      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <i class="fa-solid fa-house fa-lg" style="color: #989aa0;"></i>
      </span>
      <span class="nav-link-title">
        Home
      </span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/mobil*') ? 'active-side' : '' }}" href="/dashboard/mobil">
      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <i class="fa-solid fa-car fa-lg" style="color: #989aa0;"></i>
      </span>
      <span class="nav-link-title">
        Mobil
      </span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/customer*') ? 'active-side' : '' }}" href="/dashboard/customer">
      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <i class="fa-solid fa-user fa-lg" style="color: #989aa0;"></i>
      </span>
      <span class="nav-link-title">
        Customer
      </span>
    </a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Request::is('dashboard/detailsewa*') ? 'active-side' : '' }}" href="/dashboard/detailsewa">
      <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
        <i class="fa-solid fa-clipboard fa-lg" style="color: #989aa0;"></i>
      </span>
      <span class="nav-link-title">
        Detail Sewa
      </span>
    </a>
</li>