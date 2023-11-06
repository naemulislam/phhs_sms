@extends('frontend.layout.master')
@section('title', 'Contact')
@section('content')
    <style>
        .contact-heading {
            text-align: center;
            margin-top: 100px;

        }

        .contact-heading a {
            text-decoration: none;
            color: #fff;
        }

        .contact-heading .fa {
            margin-left: 5px;
            font-size: 16px;
        }

        .contact-heading span {
            color: #fff;
        }

        .contact-heading h2 {
            color: #fff;
            font-size: 50px;
        }

        /*Start contact-section*/
        .container-conact {
            max-width: 930px;
            margin: 0 auto;
        }

        .contact-section {
            background: #F4F6FF;
            padding: 100px 0;
        }

        .form-section {
            background: #fff;
            padding: 60px 40px;
        }

        .address h4,
        .email h4,
        .phone h4 {
            font-size: 16px;
            font-weight: bold;
        }

        .address p {
            margin-bottom: 0px;
            color: gray;
        }

        .email {}

        .email a,
        .phone a {
            color: #05d1d2;
            text-decoration: none;
        }

        /*map Section*/
        #map {
            width: 100%;
            height: 400px;
        }
    </style>
    <!--End Header Section-->
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>যোগাযোগের তথ্য</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td class="info-right">বিদ্যালয়ের নাম :</td>
                                            <td class="info-left">পূর্ব হকতুল্লাহ মাধ্যমিক বিদ্যালয়</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">গ্রাম/বাড়ী ও সড়কের বিবরণ :</td>
                                            <td class="info-left">পূর্ব হকতুল্লাহ</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">ওয়ার্ড নম্বর :</td>
                                            <td class="info-left">৪ নং</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">ইউনিয়ন/পৌরসভা/সিটি কর্পোরেশন :</td>
                                            <td class="info-left">বদরপুর ইউনিয়ন</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">পোস্ট অফিস :</td>
                                            <td class="info-left">খলীসাখালি</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">পোস্ট কোড :</td>
                                            <td class="info-left">৮৬০০</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">পুলিশ স্টেশন :</td>
                                            <td class="info-left">পটুয়াখালী</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">উপজেলা :	</td>
                                            <td class="info-left">পটুয়াখালী</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">জেলা :</td>
                                            <td class="info-left">পটুয়াখালী</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">বিভাগ   :</td>
                                            <td class="info-left">বরিশাল</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">টেলিফোন :</td>
                                            <td class="info-left">০১৭২৪৭৬৯৯৫৪</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">E-Mail :</td>
                                            <td class="info-left">phhs@gmail.com</td>
                                        </tr>
                                        <tr>
                                            <td class="info-right">Website :</td>
                                            <td class="info-left">phhs.edu.bd</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Start Contact Section-->
    <section class="my-4">
        <div class="container">
            <div class="form-section common-shadow">
                <div class="row">
                    <div class="col">
                        <h2>Let's get in touch</h2>
                        <p>We're open for any suggestion or just to have a chat</p>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-lg-4">
                        <div class="address">
                            <h4>ADDRESS:</h4>
                            <p>purbo hoktullah, patuakhali sadar, patuakhali</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="email">
                            <h4>Email:</h4>
                            <a target="_blank" href="mailto:phhs@gmail.com">
                                <span>phhs@gmail.com</span>
                            </a>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="phone">
                            <h4>Phone:</h4>
                            <a href="tel://০১৭২৪৭৬৯৯৫৪">
                                <span>০১৭২৪৭৬৯৯৫৪</span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="form">
                    <form action="{{ route('contact.store')}}" method="POST">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-4 mb-3">
                                <input type="text" name="name" class="form-control" placeholder="Enter your name">
                                @error('name')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="email" name="email" class="form-control" placeholder="Enter your email">
                                @error('email')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <input type="text" name="subject" class="form-control" placeholder="Enter subject">
                                @error('subject')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" class="form-control" placeholder="Write your message here.." style="height: 200px;"></textarea>
                                @error('message')
                                <span class="text-danger">{{ $message}}</span>
                                @enderror

                            </div>

                        </div>
                        <button class="btn btn-success mt-4" type="submit">Send Message</button>
                    </form>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <div class="wrapper">
                            <a href="" target="_blank">
                                <div class="button">
                                    <div class="icon">
                                        <i class="fa fa-facebook-f"></i>
                                    </div>
                                    <span>Facebook</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="button">
                                    <div class="icon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <span>Twitter</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="button">
                                    <div class="icon">
                                        <i class="fa fa-instagram"></i>
                                    </div>
                                    <span>Instagram</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="button">
                                    <div class="icon">
                                        <i class="fa fa-linkedin"></i>
                                    </div>
                                    <span>Linkedin</span>
                                </div>
                            </a>
                            <a href="#">
                                <div class="button">
                                    <div class="icon">
                                        <i class="fa fa-youtube"></i>
                                    </div>
                                    <span>YouTube</span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map-section">
                <div id="map"></div>
            </div>
        </div>
    </section>
    <!--end Contact Section-->
@endsection
@section('customjs')
    <script>
        function initMap() {
            // var myLatLng = {lat: 22.3038945, lng: 70.80215989999999};
            var myLatLng = {
                lat: 23.7805733,
                lng: 90.279192
            };

            var map = new google.maps.Map(document.getElementById('map'), {
                center: myLatLng,
                zoom: 13
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Hello World!',
                draggable: true
            });

            google.maps.event.addListener(marker, 'dragend', function(marker) {
                var latLng = marker.latLng;
                document.getElementById('lat-span').innerHTML = latLng.lat();
                document.getElementById('lon-span').innerHTML = latLng.lng();
            });
        }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&callback=initMap" async defer></script>
@endsection
