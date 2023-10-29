<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block d-flex flex-column flex-shrink-0 p-3 text-light bg-dark">
    <div>

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-uppercase" style="color: gray">
        <span>Author</span>
      </h6>

      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <i class="bi bi-house m-1"></i>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <i class="bi bi-file-earmark-text m-1"></i>
            Posts
          </a>
        </li>
      </ul>

      @can('admin')

      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-uppercase" style="color: gray">
        <span>Administrator</span>
      </h6>

      <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('dashboard/kategori*') ? 'active' : '' }}" href="/dashboard/kategori">
            <i class="bi bi-grid m-1"></i>
            Kategori
          </a>
        </li>
      </ul>

      @endcan

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>


    </div>
</nav>