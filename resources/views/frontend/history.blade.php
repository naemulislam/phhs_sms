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
            <div class="col-md-6 mb-3 mx-auto">
                <div class="history-img common-shadow">
                    <img class="p-3 img-fluid" src="{{ asset('storage')}}/{{$historyInstitute->image}}" alt="">
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
                        <p>{!! $historyInstitute->description !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
