@extends('backend.students.layout.master')
@yield('title')
@section('content')

    @php
        $routeName = \Request::route()->getName();
    @endphp
    <style>
        .w-250px {
    width: 350px !important;
}

    </style>

    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-2">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
                    <!--end::Page Title-->
                    <!--begin::Actions-->
                    <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
                    <a target="_balnk" href="{{ route('home')}}" class="btn btn-light-warning font-weight-bolder btn-sm">Website</a>
                    <!--end::Actions-->
                </div>
            </div>
        </div>
        <!--end::Subheader-->
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class="container">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <!--begin::Profile Personal Information-->
                    <div class="d-flex flex-row">
                        <!--begin::Aside-->
                        <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                            <!--begin::Profile Card-->
                            <div class="card card-custom card-stretch">
                                <!--begin::Body-->
                                <div class="card-body pt-4">
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center">
                                        <div
                                            class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                            <div class="symbol-label"
                                                style="background-image:url(@if (Auth::user()->profile_id) {{ asset(Auth::user()->image->file) }} @else {{ asset('defaults/avatar/avatar.png') }} @endif)">
                                            </div>
                                            <i class="symbol-badge bg-success"></i>
                                        </div>
                                        <div>
                                            <a href="#"
                                                class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">{{ Auth::user()->name }}</a>
                                                <div class="text-muted">Student</div>
                                        </div>
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Contact-->
                                    <div class="py-9">
                                        <div class="d-flex mb-2">
                                            <span class="font-weight-bold mr-2">Application Name:</span>
                                            <span class="text-muted">{{ Auth::user()->student->applicant_name }}</span>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <span class="font-weight-bold mr-2">Student Id:</span>
                                            <span class="text-muted">{{ Auth::user()->student_id }}</span>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <span class="font-weight-bold mr-2">Class:</span>
                                            <span class="text-muted">{{ Auth::user()->student->group->name }}</span>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <span class="font-weight-bold mr-2">Roll:</span>
                                            <span class="text-muted">{{ Auth::user()->student->roll }}</span>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <span class="font-weight-bold mr-2">Phone:</span>
                                            <span class="text-muted">
                                                @if (Auth::user()->student->phone)
                                                {{ Auth::user()->student->phone }}
                                                @else
                                                N/A
                                                @endif
                                            </span>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <span class="font-weight-bold mr-2">Email:</span>
                                            <span class="text-muted">
                                                @if (Auth::user()->email)
                                                {{ Auth::user()->email }}
                                                @else
                                                N/A
                                                @endif
                                            </span>
                                        </div>
                                        <div class="d-flex mb-2">
                                            <span class="font-weight-bold mr-2">Gender:</span>
                                            <span class="text-muted">
                                                @if(Auth::user()->student->gender == 'male')
                                                Male
                                                @elseif(Auth::user()->student->gender == 'female')
                                                Female
                                                @endif
                                            </span>
                                        </div>
                                    </div>
                                    <!--end::Contact-->
                                    <!--begin::Nav-->
                                    <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                                        <div class="navi-item mb-2">
                                            <a href="{{ route('student.profile') }}"
                                                class="navi-link py-4 @if ($routeName == 'student.profile') active @endif">
                                                <span class="navi-icon mr-2">
                                                    <span class="svg-icon">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                <path
                                                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                <path
                                                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                                    fill="#000000" fill-rule="nonzero" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <span class="navi-text font-size-lg">Personal Information</span>
                                            </a>
                                        </div>
                                        <div class="navi-item mb-2">
                                            <a href="{{ route('student.edit.password') }}"
                                                class="navi-link py-4 @if ($routeName == 'student.edit.password') active @endif">
                                                <span class="navi-icon mr-2">
                                                    <span class="svg-icon">
                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none"
                                                                fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path
                                                                    d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                                <path
                                                                    d="M12,11 C10.8954305,11 10,10.1045695 10,9 C10,7.8954305 10.8954305,7 12,7 C13.1045695,7 14,7.8954305 14,9 C14,10.1045695 13.1045695,11 12,11 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                                <path
                                                                    d="M7.00036205,16.4995035 C7.21569918,13.5165724 9.36772908,12 11.9907452,12 C14.6506758,12 16.8360465,13.4332455 16.9988413,16.5 C17.0053266,16.6221713 16.9988413,17 16.5815,17 C14.5228466,17 11.463736,17 7.4041679,17 C7.26484009,17 6.98863236,16.6619875 7.00036205,16.4995035 Z"
                                                                    fill="#000000" opacity="0.3" />
                                                            </g>
                                                        </svg>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <span class="navi-text font-size-lg">Change Password</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!--end::Nav-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Profile Card-->
                        </div>
                        <!--end::Aside-->
                        <!--begin::Content-->
                        <div class="flex-row-fluid ml-lg-6">
                            <form class="" action="{{ route('student.profile.update', Auth::user()->id) }}"
                                method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card card-custom card-stretch">
                                    <!--begin::Header-->
                                    <div class="card-header py-3">
                                        <div class="card-title align-items-start flex-column">
                                            <h3 class="card-label font-weight-bolder text-dark">Personal Information
                                            </h3>
                                            <span class="text-muted font-weight-bold font-size-sm mt-1">Update your
                                                personal
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
                                            <div class="col-lg-4">
                                                <div class="imageBox mr-3">
                                                    <label></label>
                                                    <img src="@if (!empty(Auth::user()->profile_id)) {{ asset(Auth::user()->image->file) }} @else {{ asset('defaults/noimage/no_img.jpg') }} @endif"
                                                        alt="">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="imageBox">
                                                    <label>Preview Image</label>
                                                    <img class="small-previewImage" id="output" />
                                                </div>
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
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Class</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="group_id" class="form-control"
                                                        value="{{ auth::user()->student->group->name }}" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Roll</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="roll" class="form-control"
                                                        value="{{ auth::user()->student->roll }}" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Student ID</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="student_id" class="form-control"
                                                        value="{{ auth::user()->student_id }}" readonly />
                                                </div>
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
                                                    <input type="date" name="date_of_birth" class="form-control"
                                                        value="{{ auth::user()->student->date_of_birth }}"
                                                        placeholder="Date of Birth" readonly/>
                                                </div>
                                                @error('date_of_birth')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Birth Registration No</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="birth_reg_no" class="form-control"
                                                        value="{{ auth::user()->student->birth_reg_no }}" readonly />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Admission Date</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="date" name="admission_date" class="form-control"
                                                        value="{{ auth::user()->student->admission_date }}"
                                                        placeholder="Date of Birth" readonly/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Quota (Freedom)</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="quota" class="form-control"
                                                        value="{{ auth::user()->student->quota }}" readonly />
                                                </div>
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
                                            <label class="col-xl-3 col-lg-3 col-form-label">Religion</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="religion" class="form-control"
                                                        value="{{ auth::user()->student->religion }}"
                                                        placeholder="Religion" />
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
                                                        <option
                                                            {{ Auth::user()->student->gender == 'male' ? 'selected' : '' }}
                                                            value="male">Male</option>
                                                        <option
                                                            {{ Auth::user()->student->gender == 'female' ? 'selected' : '' }}
                                                            value="female">Female</option>
                                                    </select>
                                                </div>
                                                @error('gender')
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
                                                    <input type="text" name="blood" class="form-control"
                                                        value="{{ auth::user()->student->blood }}" />
                                                </div>
                                                @error('blood')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Sibling</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="la la-at"></i>
                                                        </span>
                                                    </div>
                                                    <input type="text" name="sibling" class="form-control"
                                                        value="{{ auth::user()->student->sibling }}" />
                                                </div>
                                                @error('sibling')
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
                                                    <input type="text" name="sibling" class="form-control"
                                                        value="{{ auth::user()->student->shift }}" />
                                                </div>
                                                @error('sibling')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Previous school name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                <div class="input-group input-group-lg input-group-solid">
                                                    <input type="text" name="old_prev_school" class="form-control"
                                                        value="{{ auth::user()->student->old_prev_school }}" />
                                                </div>
                                                @error('old_prev_school')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-xl-3"></label>
                                            <div class="col-lg-9 col-xl-6">
                                                <h5 class="font-weight-bold mt-10 mb-6">Guardian Information</h5>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Father Name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                    <input type="text" name="father_name" class="form-control"
                                                        value="{{ auth::user()->student->father_name }}" placeholder="Enter father name"/>
                                                @error('father_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Father Phone</label>
                                            <div class="col-lg-9 col-xl-6">
                                                    <input type="text" name="father_phone" class="form-control"
                                                        value="{{ auth::user()->student->father_phone }}" placeholder="Enter father phone"/>
                                                @error('father_phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Father NID</label>
                                            <div class="col-lg-9 col-xl-6">
                                                    <input type="text" name="father_nid" class="form-control"
                                                        value="{{ auth::user()->student->father_nid }}" placeholder="Enter father nid"/>
                                                @error('father_nid')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Mother Name</label>
                                            <div class="col-lg-9 col-xl-6">
                                                    <input type="text" name="mother_name" class="form-control"
                                                        value="{{ auth::user()->student->mother_name }}" placeholder="Enter mother name"/>
                                                @error('mother_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Mother Phone</label>
                                            <div class="col-lg-9 col-xl-6">
                                                    <input type="text" name="mother_phone" class="form-control"
                                                        value="{{ auth::user()->student->mother_phone }}" placeholder="Enter mother phone"/>
                                                @error('mother_phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-lg-3 col-form-label">Mother NID</label>
                                            <div class="col-lg-9 col-xl-6">
                                                    <input type="text" name="mother_nid" class="form-control"
                                                        value="{{ auth::user()->student->mother_nid }}" placeholder="Enter mother nid"/>
                                                @error('mother_nid')
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
                                                    <input type="text" name="present_vill" class="form-control"
                                                        value="{{ auth::user()->userAddress->present_vill }}"
                                                        placeholder="Enter present village" />
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
                                                    <input type="text" name="present_post" class="form-control"
                                                        value="{{ auth::user()->userAddress->present_post }}"
                                                        placeholder="Enter present post" />
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
                                                    <input type="text" name="present_upzilla" class="form-control"
                                                        value="{{ auth::user()->userAddress->present_upzilla }}"
                                                        placeholder="Enter present upzilla" />
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
                                                    <input type="text" name="present_dist" class="form-control"
                                                        value="{{ auth::user()->userAddress->present_dist }}"
                                                        placeholder="Enter present district" />
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
                                                    <input type="text" name="permanent_vill" class="form-control"
                                                        value="{{ auth::user()->userAddress->permanent_vill }}"
                                                        placeholder="Enter permanent village" />
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
                                                    <input type="text" name="permanent_post" class="form-control"
                                                        value="{{ auth::user()->userAddress->permanent_post }}"
                                                        placeholder="Enter permanent post" />
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
                                                    <input type="text" name="permanent_upzilla" class="form-control"
                                                        value="{{ auth::user()->userAddress->permanent_upzilla }}"
                                                        placeholder="Enter permanent upzilla" />
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
                                                    <input type="text" name="permanent_dist" class="form-control"
                                                        value="{{ auth::user()->userAddress->permanent_dist }}"
                                                        placeholder="Enter permanent district" />
                                                </div>
                                                @error('permanent_dist')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Body-->
                            </form>
                        </div>
                        {{-- @yield('profile_content') --}}
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Profile Personal Information-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
@endsection
@push('scripts')
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endpush
