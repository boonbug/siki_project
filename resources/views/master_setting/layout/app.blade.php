<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Siki admin is super flexible, powerful, clean &amp; modern responsive bootstrap admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Siki admin template, best javascript admin, dashboard template, bootstrap admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <title>@yield('title')</title>
    <!-- Favicon icon-->
    <link rel="icon" href="{{ asset('assets/images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.png') }}" type="image/x-icon">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <!-- Font awesome icon css -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/@fortawesome/fontawesome-free/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/@fortawesome/fontawesome-free/css/brands.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/@fortawesome/fontawesome-free/css/solid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vendors/@fortawesome/fontawesome-free/css/regular.css') }}">
    <!-- Ico Icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/@icon/icofont/icofont.css') }}">
    <!-- Flag Icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/flag-icon.css') }}">
    <!-- Themify Icon css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/themify-icons/themify-icons/css/themify.css') }}">
    <!-- Animation css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/animate.css/animate.css') }}">
    <!-- Whether Icon css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/weather-icons/css/weather-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <!-- App css-->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link id="color" rel="stylesheet" href="{{ asset('assets/css/color-1.css') }}" media="screen">

    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

</head>

<body>


    <main class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page header start -->
        @yield('admin_header')
        <!-- Page header end-->

        <div class="page-body-wrapper">
            @yield('master_sidebar')
            <div class="page-body">

                @yield('master_contant')
            </div>
            @yield('admin_footer')
        </div>
    </main>
    <!-- jquery-->
    <script src="{{ asset('assets/js/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- bootstrap js-->
    <script src="{{ asset('assets/js/vendors/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <!-- Sidebar js-->
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ asset('assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ asset('assets/js/scrollbar/custom.js') }}"></script>
    <!-- scrollable-->
    <!-- customizer-->
    <script src="{{ asset('assets/js/theme-customizer/customizer.js') }}"></script>
    <!-- custom script -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- Popover js-->
    <script src="{{ asset('assets/js/popover-custom.js') }}"></script>
        <!-- Sweetalert js-->
    <script src="{{ asset('assets/js/sweetalert/sweetalert2.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert/sweetalert-custom.js') }}"></script>
</body>

</html>
