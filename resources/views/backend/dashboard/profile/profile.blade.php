@extends('backend.dashboard.profile.profile_master')
@section('title', 'Profile')
@section('profile_content')
<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <form class="" action="{{ route('admin.update', Auth::user()->id) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="card card-custom card-stretch">
            <!--begin::Header-->
            <div class="card-header py-3">
                <div class="card-title align-items-start flex-column">
                    <h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
                    <span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal
                        informaiton</span>
                </div>
                <div class="card-toolbar">
                    <button type="submit" class="btn btn-success mr-2">Save Changes</button>
                    <button type="reset" class="btn btn-secondary">Cancel</button>
                </div>
            </div>
            <!--end::Header-->
            <!--begin::Form-->

            <!--begin::Body-->
            <div class="card-body">
                <div class="row">
                    <label class="col-xl-3"></label>
                    <div class="col-lg-9 col-xl-6">
                        <h5 class="font-weight-bold mb-6">Admin Information</h5>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                    <div class="imageBox mr-3">
                        <img src="@if (!empty(Auth::user()->profile_id)) {{ asset(Auth::user()->image->file) }} @else {{ asset('defaults/noimage/no_img.jpg') }} @endif"
                            alt="">
                    </div>
                    <div class="imageBox">
                        <label>Preview Image</label>
                        <img class="small-previewImage" id="output" />
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Upload Image</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid"
                            type="file" name="image" onchange="loadFile(event)"
                            accept=".png, .jpeg, .jpg" />
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label"> Full Name</label>
                    <div class="col-lg-9 col-xl-6">
                        <input class="form-control form-control-lg form-control-solid"
                            type="text" name="name" value="{{ Auth::user()->name }}" />
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-xl-3"></label>
                    <div class="col-lg-9 col-xl-6">
                        <h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Contact Phone</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-phone"></i>
                                </span>
                            </div>
                            <input type="number" name="phone"
                                class="form-control form-control-lg form-control-solid"
                                value="{{ auth::user()->phone }}" placeholder="Phone" />
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Email Address</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="email" name="email"
                                class="form-control form-control-lg form-control-solid"
                                value="{{ auth::user()->email }}" placeholder="Email" />
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Address</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="address"
                                class="form-control form-control-lg form-control-solid"
                                value="{{ auth::user()->address }}"
                                placeholder="Enter Address" />
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Body-->
    </form>
    <!--end::Form-->
</div>
@endsection
