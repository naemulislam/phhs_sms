@extends('backend.layouts.master')
@section('title', 'Teacher Details')
@section('content')
    <style>

    </style>
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Teacher details</h5>
                        <!--end::Page Title-->
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">

                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Teacher Details
                                <span class="d-block text-muted pt-2 font-size-sm">All details here</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="{{ route('teacher.index') }}" class="btn btn-primary btn-sm font-weight-bolder">
                                < Back</a>
                                    <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-3 mx-auto">
                                <div class="imageBox">
                                    <img src="@if (!empty($teacher->profile_id)) {{ asset($teacher->image->file) }} @else {{ asset('defaults/noimage/no_img.jpg') }} @endif"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">

                            <b class="col-sm-3">Teacher Name :</b>
                            <b class="col-sm-8">{{ $teacher->user->name }}</b>
                            <b class="col-sm-3">Email :</b>
                            <b class="col-sm-8">{{ $teacher->user->email }}</b>
                            <b class="col-sm-3">Phone :</b>
                            <b class="col-sm-8">{{ $teacher->user->phone ?? 'N/A' }}</b>
                            <b class="col-sm-3">Subject :</b>
                            <b class="col-sm-8">{{ $teacher->subject->name}}</b>
                            <b class="col-sm-3">Designation :</b>
                            <b class="col-sm-8">{{ $teacher->designation}}</b>
                            <b class="col-sm-3">PDS ID No :</b>
                            <b class="col-sm-8">{{ $teacher->user->pds_id}}</b>
                            <b class="col-sm-3">NID No :</b>
                            <b class="col-sm-8">{{ $teacher->nid}}</b>
                            <b class="col-sm-3">Date Of Birth :</b>
                            <b class="col-sm-8">{{ $teacher->date_of_birth ?? 'N/A' }}</b>
                            <b class="col-sm-3">Religion :</b>
                            <b class="col-sm-8">{{ $teacher->religion ?? 'N/A'}}</b>
                            <b class="col-sm-3">Gender :</b>
                            <b class="col-sm-8">
                                @if ($teacher->gender == 'mail')
                                    Mail
                                @elseif($teacher->gender == 'femail')
                                    Femail
                                @else
                                    N/A
                                @endif
                            </b>
                            <b class="col-sm-3">Join Date :</b>
                            <b class="col-sm-8">{{ $teacher->join_date ?? 'N/A' }}</b>
                            <b class="col-sm-3">Shift :</b>
                            <b class="col-sm-8">{{ $teacher->shift ?? 'N/A' }}</b>
                            <b class="col-sm-3">Blood Group :</b>
                            <b class="col-sm-8">{{ $teacher->blood ?? 'N/A' }}</b>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-5">
                                <h4 class="my-2" style="color: #2fbe04">Present Abress :</h4>
                               <div class="row">
                                <b class="col-sm-3">Village :</b>
                                <b class="col-sm-8">{{ $address->present_vill ?? 'N/A' }}</b>
                                <b class="col-sm-3">Post :</b>
                                <b class="col-sm-8">{{ $address->present_post ?? 'N/A' }}</b>
                                <b class="col-sm-3">Upzilla :</b>
                                <b class="col-sm-8">{{ $address->present_upzilla ?? 'N/A' }}</b>
                                <b class="col-sm-3">District :</b>
                                <b class="col-sm-8">{{ $address->present_dist ?? 'N/A' }}</b>
                               </div>
                            </div>
                            <div class="col-md-5">
                                <h4 class="my-2" style="color: #2fbe04">Permanent Abress :</h4>
                                <div class="row">
                                <b class="col-sm-3">Village :</b>
                                <b class="col-sm-8">{{ $address->permanent_vill ?? 'N/A' }}</b>
                                <b class="col-sm-3">Post :</b>
                                <b class="col-sm-8">{{ $address->permanent_post ?? 'N/A' }}</b>
                                <b class="col-sm-3">Upzilla :</b>
                                <b class="col-sm-8">{{ $address->permanent_upzilla ?? 'N/A' }}</b>
                                <b class="col-sm-3">District :</b>
                                <b class="col-sm-8">{{ $address->permanent_dist ?? 'N/A' }}</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <b class="col-sm-2">Account Status :</b>
                            <b class="col-sm-7">
                                @if ($teacher->user->is_active == 1)
                                <span class="btn btn-sm btn-success">Active</span>
                                @else
                                <span class="btn btn-sm btn-danger">Inactive</span>
                                @endif
                            </b>
                        </div>
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
@endsection
