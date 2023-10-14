@extends('frontend.dashboard.dashboard-master')
@section('title','Edit Profile')
@section('dashboard')

<div class="col-md-9">
    <div class="ud-content ajker-shadow"  style="transform: translate(0);">
       <h5 class="ud-content-title">Edit Profile</h5>
        <div class="row">
            <div class="col-md-6">
                <form action="{{route('user.update.profile')}}" method="post">
            @csrf
            <div class="form-group">
                <label>Full Name</label>
                <input name="name" type="text" class="form-control" placeholder="Enter name" value="{{Auth::user()->name}}">
                <div style='color:red; padding: 0 5px;'>{{($errors->has('name'))?($errors->first('name')):''}}</div>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input name="email" type="text" class="form-control" placeholder="Email address" value="{{Auth::user()->email}}">
                <div style='color:red; padding: 0 5px;'>{{($errors->has('email'))?($errors->first('email')):''}}</div>
            </div>
            <div class="form-group">
                <label>Phone Number</label>
                <input name="mobile" type="text" class="form-control" placeholder="Phone number" value="{{Auth::user()->mobile}}">
                <div style='color:red; padding: 0 5px;'>{{($errors->has('mobile'))?($errors->first('mobile')):''}}</div>
            </div>
            <div class="form-group">
                <label>Address</label>
                <input name="address" type="text" class="form-control" placeholder="Address" value="{{Auth::user()->address}}">
                <div style='color:red; padding: 0 5px;'>{{($errors->has('address'))?($errors->first('address')):''}}</div>
            </div>
            <div class="form-group mb-0"><button type="submit" class="btn btn-primary">Update</button></div>
        </form>
            </div>
        </div>
    </div>
</div>

@endsection
