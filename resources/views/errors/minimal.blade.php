<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- OneUI framework -->
    <link rel="stylesheet" id="css-main" href="{{ asset('css/oneui.min.css') }}">
</head>

<body>
    <!-- Page Container -->
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="hero">
                <div class="hero-inner text-center">
                    <div class="bg-body-extra-light">
                        <div class="content content-full overflow-hidden">
                            <div class="py-4">
                                <!-- Error Header -->
                                <h1 class="display-1 fw-bolder text-city">
                                    @yield('code')
                                </h1>
                                <h2 class="h4 fw-normal text-muted mb-5">
                                    @yield('message')
                                </h2>
                                <!-- END Error Header -->

                                <!-- Search Form -->
                                <form action="#" method="get">
                                    <div class="row justify-content-center mb-4">
                                        <div class="col-sm-6 col-xl-3">
                                            <div class="input-group input-group-lg">
                                                <input class="form-control form-control-alt" type="text"
                                                    placeholder="Search application..">
                                                <button type="submit" class="btn btn-dark">
                                                    <i class="fa fa-search opacity-75"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Search Form -->
                            </div>
                        </div>
                    </div>
                    <div class="content content-full text-muted fs-sm fw-medium">
                        <!-- Error Footer -->
                        <a class="link-fx" href="{{ route('dashboard.index') }}">Go Back to Dashboard</a>
                        <!-- END Error Footer -->
                    </div>
                </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->

    <script src="{{ asset('/js/oneui.app.min.js') }}"></script>
</body>

</html>
