@extends('backend.dashboard.profile.profile_master')
@section('title', 'Profile')
@section('profile_content')
<div class="flex-row-fluid ml-lg-8">
    <!--begin::Card-->
    <form class="" action="{{ route('schoolStaff.update', Auth::user()->id) }}" method="POST"
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
                        </div>
                        @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
                        </div>
                        @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">PDS ID</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="pds_id"
                                class="form-control"
                                value="{{ auth::user()->pds_id }}" placeholder="PDS id" readonly/>
                            @error('pds_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">NID</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="nid"
                                class="form-control"
                                value="{{ auth::user()->staff->nid }}" placeholder="NID"/>

                        </div>
                        @error('nid')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Date of Birth</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="date" name="date_of_birth"
                                class="form-control"
                                value="{{ auth::user()->staff->date_of_birth }}" placeholder="Date of Birth"/>
                        </div>
                        @error('date_of_birth')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Religion</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="religion"
                                class="form-control"
                                value="{{ auth::user()->staff->religion }}" placeholder="Religion"/>
                        </div>
                        @error('religion')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Gender</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <select name="gender" class="form-control">
                                <option selected disabled>Select gender</option>
                                <option {{ Auth::user()->staff->gender == 'male' ? 'selected': '' }} value="male">Male</option>
                                <option {{ Auth::user()->staff->gender == 'female' ? 'selected': '' }} value="female">Female</option>
                            </select>
                        </div>
                        @error('gender')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Date of Birth</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="date" name="join_date"
                                class="form-control"
                                value="{{ auth::user()->staff->join_date }}"/>
                        </div>
                        @error('join_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Blood Group</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="blood"
                                class="form-control"
                                value="{{ auth::user()->staff->blood }}"/>
                        </div>
                        @error('blood')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Designation</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="designation"
                                class="form-control"
                                value="{{ auth::user()->staff->designation }}"/>
                        </div>
                        @error('designation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Shift</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="shift"
                                class="form-control"
                                value="{{ auth::user()->staff->shift }}"/>
                        </div>
                        @error('shift')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="row">
                    <label class="col-xl-3"></label>
                    <div class="col-lg-9 col-xl-6">
                        <h5 class="font-weight-bold mt-10 mb-6">Present Address</h5>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Village</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="present_vill"
                                class="form-control"
                                value="{{ auth::user()->userAddress->present_vill }}"
                                placeholder="Enter present village"/>
                        </div>
                        @error('present_vill')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Post</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="present_post"
                                class="form-control"
                                value="{{ auth::user()->userAddress->present_post }}"
                                placeholder="Enter present post"/>
                        </div>
                        @error('present_post')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Upzilla</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="present_upzilla"
                                class="form-control"
                                value="{{ auth::user()->userAddress->present_upzilla }}"
                                placeholder="Enter present upzilla"/>
                        </div>
                        @error('present_upzilla')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">District</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="present_dist"
                                class="form-control"
                                value="{{ auth::user()->userAddress->present_dist }}"
                                placeholder="Enter present district"/>
                        </div>
                        @error('present_dist')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="row">
                    <h4 class="card-title mr-2">Permanent Address</h4>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1"
                            name="same" value="1">
                        <label class="form-check-label" for="exampleCheck1">Same as present
                            address</label>
                    </div>
                </div>
                <div class="row">
                    <label class="col-xl-3"></label>
                    <div class="col-lg-9 col-xl-6">
                        <h5 class="font-weight-bold mt-10 mb-6">Permanent Address</h5>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Village</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="permanent_vill"
                                class="form-control"
                                value="{{ auth::user()->userAddress->permanent_vill }}"
                                placeholder="Enter permanent village"/>
                        </div>
                        @error('permanent_vill')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Post</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="permanent_post"
                                class="form-control"
                                value="{{ auth::user()->userAddress->permanent_post }}"
                                placeholder="Enter permanent post"/>
                        </div>
                        @error('permanent_post')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">Upzilla</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="permanent_upzilla"
                                class="form-control"
                                value="{{ auth::user()->userAddress->permanent_upzilla }}"
                                placeholder="Enter permanent upzilla"/>
                        </div>
                        @error('permanent_upzilla')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-xl-3 col-lg-3 col-form-label">District</label>
                    <div class="col-lg-9 col-xl-6">
                        <div class="input-group input-group-lg input-group-solid">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="la la-at"></i>
                                </span>
                            </div>
                            <input type="text" name="permanent_dist"
                                class="form-control"
                                value="{{ auth::user()->userAddress->permanent_dist }}"
                                placeholder="Enter permanent district"/>
                        </div>
                        @error('permanent_dist')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                    </div>
                </div>
            </div>
            <!--end::Body-->
    </form>
    <!--end::Form-->
</div>
@endsection
