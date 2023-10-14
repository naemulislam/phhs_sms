@extends('frontend.layout.master')
@section('title', 'Image Gallery')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>ফটো গ্যালারি</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div class="gallery">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                            <a href="{{ asset('frontend/assets/images/gallery/g-1.jpg') }}" class="big">
                                                <img src="{{ asset('frontend/assets/images/gallery/g-1.jpg') }}"
                                                    alt="" title="" />
                                            </a>
                                        </div>


                                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                            <a href="{{ asset('frontend/assets/images/gallery/g-2.jpg') }}">
                                                <img src="{{ asset('frontend/assets/images/gallery/g-2.jpg') }}"
                                                    alt="" title="" />
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                            <a href="{{ asset('frontend/assets/images/gallery/g-3.jpg') }}">
                                                <img src="{{ asset('frontend/assets/images/gallery/g-3.jpg') }}"
                                                    alt="" title="" />
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                            <a href="{{ asset('frontend/assets/images/gallery/g-4.jpg') }}">
                                                <img src="{{ asset('frontend/assets/images/gallery/g-4.jpg') }}"
                                                    alt="" title="" />
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                            <a href="{{ asset('frontend/assets/images/gallery/g-5.jpg') }}">
                                                <img src="{{ asset('frontend/assets/images/gallery/g-5.jpg') }}"
                                                    alt="" title="" />
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                            <a href="{{ asset('frontend/assets/images/gallery/g-6.jpg') }}">
                                                <img src="{{ asset('frontend/assets/images/gallery/g-6.jpg') }}"
                                                    alt="" title="" />
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                            <a href="{{ asset('frontend/assets/images/gallery/g-7.jpg') }}">
                                                <img src="{{ asset('frontend/assets/images/gallery/g-7.jpg') }}"
                                                    alt="" title="" />
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                            <a href="{{ asset('frontend/assets/images/gallery/g-8.jpg') }}">
                                                <img src="{{ asset('frontend/assets/images/gallery/g-8.jpg') }}"
                                                    alt="" title="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('customjs')
    <script>
        (function() {
            var $gallery = new SimpleLightbox('.gallery a', {});
        })();
    </script>
@endsection
