<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="../../../">
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="description" content="Login page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://phss.edu.bd/" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <link rel="stylesheet" href="{{ asset('defaults/toastr/toastr.min.css') }}">
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{ asset('backend') }}/assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('backend') }}/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend') }}/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/logo/favicon-32x32.png" type="image/x-icon">
    <style>
        .btn.btn-primary {
            color: #ffffff;
            background-color: #0cab12;
            border-color: #0cab12;
        }
    </style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body"
    class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
    <!--begin::Main-->
    @yield('content')
    <!--end::Main-->
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="{{ asset('backend') }}/assets/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('backend') }}/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="{{ asset('backend') }}/assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="{{ asset('backend') }}/assets/js/pages/custom/login/login-general.js"></script>
    <!--end::Page Scripts-->
    <!-- Toastr -->
    <script src="{{ asset('defaults/toastr/toastr.min.js') }}"></script>

    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif
    @if (session('error'))
        <script>
            toastr.error("{{ session('error') }}");
        </script>
    @endif

</body>

</html>
