<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/images/logo/favicon-32x32.png" type="image/x-icon">

    <!-- Font Awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!-- Owl-carosul css cdn link -->

    <link type="text/css" rel="stylesheet" href="{{ asset('frontend') }}/assets/css/jpreview.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" />
    <link rel="stylesheet" href="{{ asset('defaults/toastr/toastr.min.css') }}">

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
                            <h1>Purbo Hoktullah High School</h1>
                        </div>
                        <div class="headertext-bangla">
                            <h1>পূর্ব হকতুল্লাহ মাধ্যমিক বিদ্যালয়</h1>
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
                        <p>Copyright © <?php echo date('Y'); ?> <a href="#"></a>- All Rights Reserved. Developed by <a
                                href="#">Engr.Naemul Islam</a></p>
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

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap-prettyfile.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jpreview.js"></script>

    <script src="{{ asset('defaults/toastr/toastr.min.js') }}"></script>
    <!-- Owl-carosul js file cdn link -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl-extra-code.js"></script>
    {{-- Lightbox js --}}
    <script src="{{ asset('frontend') }}/assets/js/simple-lightbox.min.js"></script>

    <!-- Toastr -->


    <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"

            switch (type) {
                case 'info':
                    toastr.info("{{ Session::get('message') }}");
                    break;
                case 'success':
                    toastr.success("{{ Session::get('message') }}");
                    break;
                case 'warning':
                    toastr.warning("{{ Session::get('message') }}");
                    break;
                case 'error':
                    toastr.error("{{ Session::get('message') }}");
                    break;
            }
        @endif
    </script>
    @yield('customjs')

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
    {{-- <script>
        const marquees = [...document.querySelectorAll('.marquee')];
        marquees.forEach((marquee) => {
            marquee.innerHTML = marquee.innerHTML + '&nbsp;'.repeat(5);
            marquee.i = 0;
            marquee.step = 3;
            marquee.width = (marquee.clientWidth + 1);
            marquee.style.position = '';
            marquee.innerHTML = `${marquee.innerHTML}&nbsp;`.repeat(1);
            marquee.addEventListener('mouseenter', () => marquee.step = 0, false);
            marquee.addEventListener('mouseleave', () => marquee.step = 3, false);
        });

        setInterval(move, 100);

        function move() {
            marquees
                .forEach((marquee) => {
                    marquee.style.marginLeft = `-${marquee.i}px`;;
                    marquee.i = marquee.i < marquee.width ? marquee.i + marquee.step : 1;
                });
        }
    </script> --}}
    <script>
        $(document).ready(function() {
            let animationInterval;
            let textPosition = 0;
            const speed = 5; // Adjust the speed of the animation

            function moveText() {
                textPosition += speed;
                $('#moving-text').css('left', textPosition);
            }

            $(document).mousedown(function() {
                animationInterval = setInterval(moveText, 10);
            });

            $(document).mouseup(function() {
                clearInterval(animationInterval);
            });
        });
    </script>
</body>

</html>
