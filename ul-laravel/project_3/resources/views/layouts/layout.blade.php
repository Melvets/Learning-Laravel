<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>ZyGroup | {{ $title }}</title>
    <script defer data-api="/stats/api/event" data-domain="preview.tabler.io" src="template/stats/js/script.js"></script>
    <meta name="msapplication-TileColor" content=""/>
    <meta name="theme-color" content=""/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="HandheldFriendly" content="True"/>
    <meta name="MobileOptimized" content="320"/>
    <link rel="icon" href="/img/Skanida.png" type="image/x-icon"/>
    <link rel="shortcut icon" href="/img/Skanida.png" type="image/x-icon"/>
    <meta name="description" content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!"/>
    <meta name="canonical" content="https://preview.tabler.io/layout-navbar-overlap.html">
    <meta name="twitter:image:src" content="https://preview.tabler.io/static/og.png">
    <meta name="twitter:site" content="@tabler_ui">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI.">
    <meta name="twitter:description" content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!">
    <meta property="og:image" content="https://preview.tabler.io/static/og.png">
    <meta property="og:image:width" content="1280">
    <meta property="og:image:height" content="640">
    <meta property="og:site_name" content="Tabler">
    <meta property="og:type" content="object">
    <meta property="og:title" content="Tabler: Premium and Open Source dashboard template with responsive and high quality UI.">
    <meta property="og:url" content="https://preview.tabler.io/static/og.png">
    <meta property="og:description" content="Tabler comes with tons of well-designed components and features. Start your adventure with Tabler and make your dashboard great again. For free!">
    <!-- CSS files -->
    <link href="/template/dist/css/tabler.min.css?1685973381" rel="stylesheet"/>
    <link href="/template/dist/css/tabler-flags.min.css?1685973381" rel="stylesheet"/>
    <link href="/template/dist/css/tabler-payments.min.css?1685973381" rel="stylesheet"/>
    <link href="/template/dist/css/tabler-vendors.min.css?1685973381" rel="stylesheet"/>
    <link href="/template/dist/css/demo.min.css?1685973381" rel="stylesheet"/>

    <!-- Jquery Fancybox -->
    <script src="/js/fancybox/jquery.js"></script>
    <link rel="stylesheet" href="/js/fancybox/jquery.fancybox.css?v=2.1.0" media="screen">
    <script src="/js/fancybox/jquery.fancybox.pack.js?v=2.1.0"></script>
    <script>
      $(document).ready(function() {
            $('.fancybox').fancybox();
      });
    </script>
  

    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }

      .mem_gambarr {
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }
    </style>

  </head>
  <body >
    <script src="/template/dist/js/demo-theme.min.js?1685973381"></script>

    <div class="page">
      <!-- Navbar -->
      <header class="navbar navbar-expand-md navbar-overlap d-print-none"  data-bs-theme="dark">

      <!-- Alert -->
      <!-- <div class="alert alert-warning alert-important alert-dismissible fade show position-absolute w-50 p-3" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> -->

        <div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href="/perpustakaan" class="text-decoration-none fs-1">
              <img src="/img/Skanida.png" alt="" width="50" class="pe-1">
              <span class="text-primary-emphasis">Zy</span>Group
            </a>
          </h1>
          <div class="navbar-nav flex-row order-md-last">
            <div class="d-none d-md-flex mx-3">
              <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/moon -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
              </a>
              <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip"
		   data-bs-placement="bottom">
                <!-- Download SVG icon from http://tabler-icons.io/i/sun -->
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
              </a>
            </div>

            <div class="nav-item dropdown">
              <a href="#" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                <span class="avatar avatar-sm rounded-circle" style="background-image: url(/template/static/avatars/default.jpg)"></span>
                <div class="d-none d-xl-block ps-2">
                  <div>Admin</div>
                  <div class="text-success mt-1 small text-secondary">Online</div>
                </div>
              </a>

              <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow" data-bs-theme="light">
                <div class="position-relative mb-5 pt-4">
                  <span class="avatar avatar-lg rounded-circle position-absolute top-100 start-50 translate-middle mt-5" style="background-image: url(/template/static/avatars/default.jpg)"></span>
                </div>
                <div class="pt-5">
                  <p class="text-center pt-4">Admin<br> <small class="text-success">Online</small> </p>
                  <div class="dropdown-divider m-3"></div>
                  <div class="d-flex">
                    <a href="#" class="text-reset px-5 pb-3 bd-highlight">Settings</a> |
                    <a href="#" class="text-reset px-5 pb-3 bd-highlight ">Logout</a>
                  </div>
                  </div>
              </div>
            </div>
          </div>

          <!-- ====================================================================== NAVBAR ====================================================================== -->

          <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center justify-content-center">
              <ul class="navbar-nav">

              <!-- Home -->
                <li class="nav-item">
                  <a class="nav-link" href="#" >
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l-2 0l9 -9l9 9l-2 0" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                    </span>
                    <span class="nav-link-title">
                      Home
                    </span>
                  </a>
                </li>

                <!-- Buku -->
                <li class="nav-item active">
                  <a class="nav-link" href="#">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                      <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                    </svg>
                    </span>
                    <span class="nav-link-title text-light">
                      Data Pegawai
                    </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#" >
                  <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-brand-blogger me-2" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M8 21h8a5 5 0 0 0 5 -5v-3a3 3 0 0 0 -3 -3h-1v-2a5 5 0 0 0 -5 -5h-4a5 5 0 0 0 -5 5v8a5 5 0 0 0 5 5z"></path>
                    <path d="M7 7m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h3a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-3a1.5 1.5 0 0 1 -1.5 -1.5z"></path>
                    <path d="M7 14m0 1.5a1.5 1.5 0 0 1 1.5 -1.5h7a1.5 1.5 0 0 1 1.5 1.5v0a1.5 1.5 0 0 1 -1.5 1.5h-7a1.5 1.5 0 0 1 -1.5 -1.5z"></path>
                  </svg>
                    <span class="nav-link-title">
                      Blog
                    </span>
                  </a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" href="#">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-info-square-rounded" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                      <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                      <path d="M12 9h.01"></path>
                      <path d="M11 12h1v4h1"></path>
                      <path d="M12 3c7.2 0 9 1.8 9 9s-1.8 9 -9 9s-9 -1.8 -9 -9s1.8 -9 9 -9z"></path>
                    </svg>
                    </span>
                    <span class="nav-link-title">
                      About
                    </span>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </header>
      <div class="page-wrapper">

<!-- ============================================================================================================================================ -->
        @yield('container')
<!-- ============================================================================================================================================ -->

        {{-- <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center">
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    &copy; 2023 ZyGroup. All rights reserved. Design by
                    <a href="https://www.instagram.com/mel_elaaa/" class="link-secondary text-primary" target="_blank">@Camela Devs</a>.
                  </li>
                  <li class="list-inline-item">
                      v1.0.0-beta
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div> --}}

<!-- ============================================================================================================================================ -->
    
    <!-- Libs JS -->
    <script src="/template/dist/libs/apexcharts/dist/apexcharts.min.js?1685973381" defer></script>
    <script src="/template/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1685973381" defer></script>
    <script src="/template/dist/libs/jsvectormap/dist/maps/world.js?1685973381" defer></script>
    <script src="/template/dist/libs/jsvectormap/dist/maps/world-merc.js?1685973381" defer></script>
    <!-- Tabler Core -->
    <script src="/template/dist/js/tabler.min.js?1685973381" defer></script>
    <script src="/template/dist/js/demo.min.js?1685973381" defer></script>
    <!-- Icons -->
    <script src="https://kit.fontawesome.com/9c45ff2d1a.js" crossorigin="anonymous"></script>
    <!-- <script src="js/code.jquery.com_jquery-3.7.0.min.js"></script> -->
    <script src="js/script.js"></script>

    <script>
      function confirmAlert() {
        
        Swal.fire({
                title: 'Apakah Anda yakin?',
                text: 'Ini akan dihapus permanen!',
                showCancelButton: true,
                confirmButtonText: 'Yes',
                denyButtonText: 'No',
                icon: 'warning',
                customClass: {
                    actions: 'my-actions',
                    cancelButton: 'order-1 right-gap',
                    confirmButton: 'order-2',
                }
                }).then((result) => {
                if (result.isConfirmed) {
                    // Swal.fire('Saved!', '', 'success')
                    // location.href = "/perpustakaan/" + data;

                } else {
                    // Swal.fire('Changes are not saved', '', 'info')
                    // location.href = "/perpustakaan"
                }
                })

        };
    </script>
  </body>
</html>