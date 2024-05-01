<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/logo/favicon-32x32.png" type="image/x-icon">

    <!-- Font Awesome cdn link -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/font-awesome.min.css" />
    <!-- Owl-carosul css cdn link -->

    <link type="text/css" rel="stylesheet" href="{{ asset('frontend') }}/assets/css/jpreview.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css" />

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.theme.default.css" />
    <link rel="stylesheet" href="{{ asset('defaults/toastr/toastr.min.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap_v4.min.css">
    {{-- lightbox css --}}
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/simple-lightbox.min.css" />
    <!--Social icon css link-->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/social.css">
    <link rel="stylesheet" href="{{ asset('frontend/dashboard/css/ud-style.css')}}">
    <!-- theme style css -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bangla-font.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/custome.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
    @yield('customcss')

</head>

<body>
    <div class="logo-section py-2">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-3 col-md-3 mb-2">
                    <div class="logoheader">
                        <img src="{{ asset('frontend/assets/images/logo/main-logo.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="bg-green">
                        <div class="headertext">
                            <h1>{{$setting->name_e ?? 'Purbo Hoktullah High School'}}</h1>
                        </div>
                        <div class="headertext-bangla">
                            <h1>{{$setting->name_b ?? 'পূর্ব হকতুল্লাহ মাধ্যমিক বিদ্যালয়'}}</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="logoheader gov-logo">
                        <img src="{{ asset('frontend/assets/images/logo/gov_logo.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Start Header & Navigation Section -->

    @include('frontend.layout.header')
    <!--end mobile menu-->
    <!-- End Header -->
    <!-- End Header & Navigation Section -->


    @yield('content')

    <!-- End Footer Section -->

    <!-- Start  Copyright Section -->
    <section class="copyright-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text text-center">
                        <p>Copyright © <?php echo date('Y'); ?> - All Rights Reserved. Developed by <a
                            target="_blank" href="https://naemulislam.github.io/portfolio/">Engr.Naemul Islam</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Copyright Section -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script> -->

    <script src="{{ asset('frontend') }}/assets/js/bootstrap_v4.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap-prettyfile.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jpreview.js"></script>

    <script src="{{ asset('defaults/toastr/toastr.min.js') }}"></script>
    <!-- Owl-carosul js file cdn link -->
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl-extra-code.js"></script>
    {{-- Lightbox js --}}
    <script src="{{ asset('frontend') }}/assets/js/simple-lightbox.min.js"></script>

    <!-- Toastr -->
    @if (Session::has('success'))
    <script>
        toastr.success("{{ Session::get('success') }}");
    </script>
    @endif
    @if (Session::has('error'))
    <script>
        toastr.error("{{ Session::get('error') }}");
    </script>
    @endif

    @stack('customjs')
    <script>
        $(document).ready(function() {
            /*mobile menu*/
            $('.menu-icon').on('click', function() {
                $('.mobile-menu').toggleClass('mobile-menu-active');
            });
            $('.mm-ci').on('click', function() {
                $('.mobile-menu').toggleClass('mobile-menu-active');
            });


        });
    </script>
    <script>
        $(document).ready(function() {
            // Add minus icon for collapse element which is open by default
            $(".collapse.show").each(function() {
                $(this).prev(".menu-link").find(".fa-minus").addClass("fa-minus").removeClass("fa-plus");
            });

            // Toggle plus minus icon on show hide of collapse element
            $(".collapse").on('show.bs.collapse', function() {
                $(this).prev(".menu-link").find(".fa-plus").removeClass("fa-plus").addClass("fa-minus");
            }).on('hide.bs.collapse', function() {
                $(this).prev(".menu-link").find(".fa-minus").removeClass("fa-minus").addClass("fa-plus");
            });
            /*mobile-menu-click*/
            $('.mmenu-btn').click(function() {
                $(this).toggleClass("menu-link-active");

            });
        });
    </script>
</body>

</html>
