@extends('frontend.layout.master')
@section('content')
@php
$request = request();
@endphp

<section class="user-dashboard clearfix py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="ud-sidebar ajker-shadow" style="transform: translate(0);">
                    <div class="ud-account">
                        <h5 class="p-3 mb-0"> My Account</h5>
                    </div>
                    <div class="ud-nav">
                        <a class="{{$request->routeIs('user.dashboard')? 'ud-active': '' }}" href="{{route('user.dashboard')}}"><i class="fa fa-dashboard mr-1"></i> Dashboard</a>

                        <a class="" href=""><i class="fa fa-key mr-1"></i>@if(Auth::user()->password != null) Change Password @else Set Password @endif</a>
                        <a href="{{ route('user.logout') }}"><i class="fa fa-sign-out"></i> Logout</a>
                    </div>
                </div>
            </div>
            @yield('dashboard')
            
        </div>
    </div>
</section>

@endsection
