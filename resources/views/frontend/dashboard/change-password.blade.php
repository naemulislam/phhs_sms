@extends('frontend.dashboard.dashboard-master')
@section('title','Change Password')
@section('dashboard')

<div class="col-md-9">
    <div class="ud-content ajker-shadow" style="transform: translate(0)">
       <h5 class="ud-content-title">@if(Auth::user()->password != null) Change Password @else Set Password @endif</h5>
        <div class="row">
                <div class="col-md-6">
                    <form action="{{route('user.update.password')}}" method="post">
                        @csrf
                        
                        @if(Auth::user()->password != null)
                        <div class="form-group">
                            <label>Current Password</label>
                            <input name="current_password" type="password" class="form-control" placeholder="Current password">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('current_password'))?($errors->first('current_password')):''}}</div>
                        </div>
                        @endif
                        <div class="form-group">
                            <label>New Password</label>
                            <input name="new_password" type="password" class="form-control" placeholder="New password">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('new_password'))?($errors->first('new_password')):''}}</div>
                        </div>
                        <div class="form-group">
                            <label>Reenter New Password</label>
                            <input name="password_confirmation" type="password" class="form-control" placeholder="Reenter new password">
                            <div style='color:red; padding: 0 5px;'>{{($errors->has('password_confirmation'))?($errors->first('password_confirmation')):''}}</div>
                        </div>
                        <div class="form-group mb-0"><button type="submit" class="btn btn-primary">Change</button></div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection
