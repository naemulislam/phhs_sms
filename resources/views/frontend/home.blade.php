@extends('frontend.layout.master')
@section('title', 'Home')
@section('content')
<style>
   #moving-text {
            position: absolute;
            top: 50%;
            left: 0;
            white-space: nowrap;
        }
</style>
    <!-- Start slider section -->
    <section class="slider-section mb-5">
        <div class="container">
            <div class="row slider-bg">
                <div class="col-12">
                    <div class="slider">
                        <div class="owl-carousel owl-theme mainslider">
                            @foreach ($sliders as $slider)
                            <div class="item">
                                <div class="main-slider-box">
                                    <img src="{{asset('storage')}}/{{$slider->image}}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End slider section -->
    {{-- Update New Section --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="updateNews-box"><h5>News</h5></div>
                    <div class="updateNews-title">
                        <a href="#"><marquee onmouseover="this.stop();" onmouseout="this.start();">{{$headingNotic->title ?? 'Notice not added yet'}}</marquee></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Update New Section --}}

    <!-- Start About Section -->
    <section class="my-4">
        <div class="container">
            <div class="row common-shadow py-4">
                <div class="col-md-6">
                    <div class="about-image">
                        <img src="{{$computerLab?->image ? asset('storage/'.$computerLab?->image) : asset('defaults/noimage/no_img.jpg') }}" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-section">
                        <div class="heading-title">
                            <h3 class="">সমৃদ্ধ কম্পিউটার ল্যাবের বর্ণনা</h3>
                        </div>

                        <p class="mb-3 simple-text">{!! $computerLab?->description !!}</p>
                        <div>
                            <a href="#" class="btn-custom btn-sm">More..</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Text & image Section -->
    {{-- Start nofice board section --}}
    <section class="py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-7 mb-3">
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>প্রধান শিক্ষক  মহোদয়ের বাণী</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <div class="h-img">
                                    <img src="{{ asset('defaults/avatar/avatar.png') }}" alt="">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="">
                                    <p class="simple-text">১৯৯৫ খ্রিস্টাব্দের কোন এক মাহেন্দ্রক্ষণে দক্ষিণ বঙ্গের প্রয়াত শিক্ষাবিদ মৌকরন
                                        বি,এল,পি ডিগ্রি কলেজের অধ্যক্ষ প্রফেসর
                                        আব্দুল মালেক আখন্দ সাহেবের দিক নির্দেশনায় বদরপুর ইউনিয়নের সাবেক চেয়ারম্যান ও
                                        প্রতিষ্ঠাতা সভাপতি মরহুম আলহাজ্ব
                                        মোঃ জয়নাল আবেদীন তালুকদার সাহেবের উদ্যোগে প্রতিষ্ঠাকালীন প্রধান শিক্ষক মরহুম
                                        মোসাম্মাৎ রাশিদা বেগমের ঐকান্তিক
                                        প্রচেষ্টায় জ্ঞানী, গুনী ও দানশীল ব্যক্তিদের সহযোগিতায় এলাকার গরীব, দুঃখী, মেহনতী
                                        মানুষের শিক্ষাবিস্তারের উদ্দেশ্যে পূর্ব
                                        হকতুল্লাহ গ্রামে প্রতিষ্ঠিত হয় পূর্ব হকতুল্লাহ মাধ্যমিক বিদ্যালয়টি।.....</p>
                                </div>
                                <a href="{{ route('principleInfo')}}" class="btn-notice float-right">আরো পড়ুন..</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3 class="underline">আমাদের সুন্দর ক্যাম্পাস</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            @if($instituteCampases)
                            <div class="campus-owl owl-carousel owl-theme">
                                @foreach ($instituteCampases as $campas )
                                <div class="item">
                                    <img src="{{ asset('storage') }}/{{$campas->image}}" alt="">
                                </div>
                                @endforeach
                            </div>
                            @else
                            <h4>ক্যাম্পাস পিকচার এখনো যোগ করা হয়নি..।</h4>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-5 mb-3">
                    <div class="common-shadow p-3 mb-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>নোটিসবোর্ড</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="notice-board py-3">
                                    @foreach ($notices as $notice)
                                    <div class="notice">
                                        <h3>{{$notice->title}}</h3>
                                        <p class="simple-text">{{$notice->description}}</p>
                                        <a href="{{ route('all.notice')}}" class="btn-notice">আরো পড়ুন..</a>
                                    </div>
                                    @endforeach

                                    <div class="">
                                        <a href="{{route('all.notice')}}" class="btn-notice float-right">সকল নোটিশ <i
                                                class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>জাতীয় সংগীত</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="notice-board py-3">
                                    <div class="notice">
                                        <audio src="{{asset('frontend/assets/images/audio-video/bd_national_anthem.mp3')}}" controls></audio>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- end nofice board section --}}
    {{-- achivement section --}}
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3 mb-3">
                    <div class="achive-box common-shadow">
                        <span><i class="fa fa-graduation-cap"></i> {{$setting?->total_s ?? '0'}}</span>
                        <p>মোট শিক্ষার্থী</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="achive-box common-shadow">
                        <span><i class="fa fa-male"></i> {{$setting?->total_t ?? '0'}}</span>
                        <p>মোট শিক্ষক</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="achive-box common-shadow">
                        <span><i class="fa fa-users"></i> {{$setting?->total_c ?? '0'}}</span>
                        <p>মোট ক্লাস রুম</p>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="achive-box common-shadow">
                        <span><i class="fa fa-flask"></i> {{$setting?->total_l ?? '0'}}</span>
                        <p>মোট ল্যাব</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end achivement section --}}

    <!--Start news Section-->
    <section class="my-4">
        <div class="container">
            <div class="row mb-3">
                <div class="col">
                    <div class="heading-title">
                        <h3>সংবাদ এবং ঘটনাবলী</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($instituteNews as $news)
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <div class="card card-detles common-shadow">
                        <div class="news-img">
                            <img src="{{$news->image->file}}" alt="">
                        </div>
                        <div class="card-body card-text">
                            <div class="news-title">
                                <h3>{{$news->title}}</h3>
                                <hr>
                                <span><i class="fa fa-calendar" aria-hidden="true"></i> {{$news->date}}</span>
                                <p class="simple-text">{!! $news->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!--End Latest News Section-->
    <!--Start Achivement news Section-->
    <section class="my-4">
        <div class="container">
            <div class="row mb-3">
                <div class="col">
                    <div class="heading-title">
                        <h3>আমাদের অর্জন</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($instituteAchivements as $achivement)
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                    <div class="card card-detles common-shadow">
                        <div class="news-img">
                            <img src="{{$achivement->image->file}}" alt="">
                        </div>
                        <div class="card-body card-text">
                            <div class="news-title">
                                <h3>{{$achivement->title}}</h3>
                                <hr>
                                <span><i class="fa fa-calendar" aria-hidden="true"></i> {{$achivement->date}}</span>
                                <p class="simple-text">{!! $achivement->description !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!--End Achivement news Section-->
    {{-- Social Link section --}}
    <section>
        <div class="container">
            <div class="row mb-3">
                <div class="col-md-7 mx-auto">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 mb-3 mx-auto">
                    <div class="card social-detles common-shadow">
                        <div class="heading-title m-2">
                            <h3>Social Link</h3>
                        </div>
                        <a href="@if($setting?->facebook) {{$setting?->facebook}} @endif" target="_blank">
                            <div class="link-box">
                                <img src="{{ asset('frontend/assets/images/social/facebook.png')}}" alt=""><span>Facebook</span>
                            </div>
                        </a>
                        <a href="@if($setting?->youtube) {{$setting?->youtube}} @endif" target="_blank">
                            <div class="link-box">
                                <img src="{{ asset('frontend/assets/images/social/youtube.png')}}" alt=""><span>Youtube</span>
                            </div>
                        </a>
                        <a href="@if($setting?->twitter) {{$setting?->twitter}} @endif" target="_blank">
                            <div class="link-box">
                                <img src="{{ asset('frontend/assets/images/social/twitter.png')}}" alt=""><span>Twitter</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
