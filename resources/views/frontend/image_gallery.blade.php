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
                                        @foreach ($galleries as $gallery)
                                            <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                                                <a href="{{ asset('storage/'.$gallery->image) }}"
                                                    class="big">
                                                    <img src="{{ asset('storage/'.$gallery->image) }}"
                                                        alt="" title="" />
                                                </a>
                                            </div>
                                        @endforeach
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
@push('customjs')
    <script>
        (function() {
            var $gallery = new SimpleLightbox('.gallery a', {});
        })();
    </script>
@endpush
