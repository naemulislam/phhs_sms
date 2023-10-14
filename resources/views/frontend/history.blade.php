@extends('frontend.layout.master')
@section('title', 'History')
@section('content')
<style>
    .history-img img{
        width:100%;
    }
</style>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-7 mb-3 mx-auto">
                <div class="history-img common-shadow">
                    <img class="p-3 img-fluid" src="{{ asset('frontend/assets/images/others/history.jpeg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
            <div class="col-md-12 mb-3">
                <div class="history-box common-shadow">
                    <div class="heading-title">
                        <h3 class="">প্রতিষ্ঠানের ইতিহাস</h3>
                    </div>
                    <div class="history-text p-3">
                        <p>বাংলাদেশের দক্ষিণাঞ্চলে অবস্থিত পটুয়াখালী জেলাটি বঙ্গোপসাগরের উপকূল বিস্তৃত সাগর পাড়ের একটি অন্যতম পুরনো শহর। যে শহরটির আদুরে নাম ‘সাগরকন্যা’। অতীতে সাগরের জলোচ্ছ্বাসে এখানে চলেছে ভাঙ্গা-গড়ার খেলা। অসংখ্য নদ-নদী, খাল-বিল, দ্বীপ ও অরণ্যভূমির মধ্যে একদিন গড়ে উঠেছিল এই পটুয়াখালী শহর। </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
