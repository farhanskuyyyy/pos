<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="POS">
    <meta property="og:site_name" content="POS">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('media/favicons/favicon-192x192.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png')}}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('css/oneui.min.css')}}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    {{-- <link rel="stylesheet" id="css-theme" href="{{ asset('css/themes/amethyst.min.css') }}"> --}}
    <!-- END Stylesheets -->
    @yield('css')
  </head>

  <body>
    <div id="page-container">

      <!-- Main Container -->
      <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('{{ asset('media/photos/photo28@2x.jpg')}}');">
            <div class="row g-0 bg-primary-dark-op">
              <!-- Meta Info Section -->
              <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                  <div class="w-100">
                    <a class="link-fx fw-semibold fs-2 text-white" href="{{ route('home') }}">
                      Point<span class="fw-bold text-primary"> Of </span>Sales
                    </a>
                    <p class="text-white-75 me-xl-8 mt-2">
                      Welcome to your amazing app. Feel free to login and start managing your projects and clients.
                    </p>
                  </div>
                </div>
                <div class="p-4 p-xl-5 d-xl-flex justify-content-between align-items-center fs-sm">
                  <p class="fw-medium text-white-50 mb-0">
                    <strong>Point Of Sales</strong> &copy; <span data-toggle="year-copy"></span>
                  </p>
                </div>
              </div>
              <!-- END Meta Info Section -->

              <!-- Main Section -->
              <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
                <div class="p-3 w-100 d-lg-none text-center">
                  <a class="link-fx fw-semibold fs-3 text-dark" href="{{ route('home') }}">
                    One<span class="fw-normal">UI</span>
                  </a>
                </div>
                <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
                  <div class="w-100">
                    <!-- Content Form-->
                    @yield('content')
                    <!-- END Content Form -->
                  </div>
                </div>
                <div class="px-4 py-3 w-100 d-lg-none d-flex flex-column flex-sm-row justify-content-between fs-sm text-center text-sm-start">
                  <p class="fw-medium text-black-50 py-2 mb-0">
                    <strong>Point Of Sales</strong> &copy; <span data-toggle="year-copy"></span>
                  </p>
                </div>
              </div>
              <!-- END Main Section -->
            </div>
        </div>
        <!-- END Page Content -->
      </main>
      <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <script src="{{ asset('js/oneui.app.min.js')}}"></script>

    <!-- jQuery (required for jQuery Validation plugin) -->
    <script src="{{ asset('js/lib/jquery.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('js/pages/op_auth_signin.min.js')}}"></script>
    @yield('js')
  </body>
</html>
