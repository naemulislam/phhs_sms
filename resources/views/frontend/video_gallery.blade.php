@extends('frontend.layout.master')
@section('title', 'Video Gallery')
@section('content')
<style>
    video{
        width: 100%;
    }
</style>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>ভিডিও গ্যালারি</h3>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 mb-3">
                    <div class="common-shadow p-3">
                    <video src="{{ asset('frontend/assets/images/audio-video/school-video.mp4') }}" controls></video>
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
