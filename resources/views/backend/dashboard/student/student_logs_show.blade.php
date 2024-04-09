@extends('backend.layouts.master')
@section('title', 'Student Details')
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Previous Student details</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="javascript:;" class="text-muted">Student</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
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
                            <h3 class="card-label">Student Details
                                <span class="d-block text-muted pt-2 font-size-sm">All details here</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="{{ route('student.info.search') }}" class="btn btn-primary btn-sm font-weight-bolder">
                                < Back</a>
                                    <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-md-3 mx-auto">
                                <div class="imageBox">
                                    <img src="@if (!empty($studentLogs->student->image_id)) {{ asset($studentLogs->student->image->file) }} @else {{ asset('defaults/noimage/no_img.jpg') }} @endif"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <b class="col-sm-3">Student id number </b>
                            <b class="col-sm-9">#{{ $studentLogs->student->user->student_id }}</b>
                            <b class="col-sm-3">Student Name </b>
                            <b class="col-sm-9">{{ $studentLogs->student->applicant_name }}</b>
                            <b class="col-sm-3">Roll No</b>
                            <b class="col-sm-9">{{ $studentLogs->roll ?? 'N/A'}}</b>
                            <b class="col-sm-3">Class</b>
                            <b class="col-sm-9">{{ $studentLogs->group->name }}</b>
                            <b class="col-sm-3">Session Year</b>
                            <b class="col-sm-9">{{ $studentLogs->session_year}}</b>
                            <b class="col-sm-3">Admission Date</b>
                            <b class="col-sm-9">{{ $studentLogs->student->created_at }}</b>
                            <b class="col-sm-3">Phone</b>
                            <b class="col-sm-9">{{ $studentLogs->student->phone ?? 'N/A' }}</b>
                            <b class="col-sm-3">Birth Registration No</b>
                            <b class="col-sm-9">{{ $studentLogs->student->birth_reg_no }}</b>
                            <b class="col-sm-3">Date Of Birth</b>
                            <b class="col-sm-9">{{ $studentLogs->student->date_of_birth }}</b>
                            <b class="col-sm-3">Religion </b>
                            <b class="col-sm-9">{{ $studentLogs->student->religion }}</b>
                            <b class="col-sm-3">Gender</b>
                            <b class="col-sm-9">
                                @if ($studentLogs->student->gender == 'male')
                                    Male
                                @elseif($studentLogs->student->gender == 'female')
                                    Female
                                @else
                                    Others
                                @endif
                            </b>

                            <b class="col-sm-3">Sibling</b>
                            <b class="col-sm-9">{{ $studentLogs->student->sibling ?? 'N/A' }}</b>
                            <b class="col-sm-3">Shift</b>
                            <b class="col-sm-9">{{ $studentLogs->student->shift }}</b>
                            <b class="col-sm-3">Quota (Freedom)</b>
                            <b class="col-sm-9">{{ $studentLogs->student->quota }}</b>
                            <b class="col-sm-3">Old Previous School Name</b>
                            <b class="col-sm-9">{{ $studentLogs->student->old_prev_school ?? 'N/A'}}</b>
                            <b class="col-sm-3">Blood Group</b>
                            <b class="col-sm-9">{{ $studentLogs->student->blood }}</b>
                            <div class="col-sm-12">
                                <h4 class="my-3" style="color: #2fbe04">Guardian Information :</h4>
                            </div>
                            <b class="col-sm-3">Father Name</b>
                            <b class="col-sm-9">{{ $studentLogs->student->father_name ?? 'N/A' }}</b>
                            <b class="col-sm-3">Father Phone</b>
                            <b class="col-sm-9">{{ $studentLogs->student->father_phone ?? 'N/A' }}</b>
                            <b class="col-sm-3">Father NID No</b>
                            <b class="col-sm-9">{{ $studentLogs->student->father_nid ?? 'N/A' }}</b>
                            <b class="col-sm-3">Mother Name</b>
                            <b class="col-sm-9">{{ $studentLogs->student->mother_name ?? 'N/A' }}</b>
                            <b class="col-sm-3">Mother Phone</b>
                            <b class="col-sm-9">{{ $studentLogs->student->mother_phone ?? 'N/A' }}</b>
                            <b class="col-sm-3">Mother NID No</b>
                            <b class="col-sm-9">{{ $studentLogs->student->mother_nid ?? 'N/A' }}</b>
                            <b class="col-sm-3">Absent Guardian</b>
                            <b class="col-sm-9">{{ $studentLogs->student->absent_guardian ?? 'N/A' }}</b>
                            <b class="col-sm-3">Absent Guardian NID No</b>
                            <b class="col-sm-9">{{ $studentLogs->student->absent_guardian_nid ?? 'N/A' }}</b>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="row">
                                    <h4 class="my-2" style="color: #2fbe04">Present Abress :</h4>
                                </div>
                               <div class="row">
                                <b class="col-sm-3">Village</b>
                                <b class="col-sm-9">{{ $address->present_vill ?? 'N/A' }}</b>
                                <b class="col-sm-3">Post</b>
                                <b class="col-sm-9">{{ $address->present_post ?? 'N/A' }}</b>
                                <b class="col-sm-3">Upzilla </b>
                                <b class="col-sm-9">{{ $address->present_upzilla ?? 'N/A' }}</b>
                                <b class="col-sm-3">District</b>
                                <b class="col-sm-9">{{ $address->present_dist ?? 'N/A' }}</b>
                               </div>
                            </div>
                            <div class="col-md-6">
                               <div class="row">
                                <h4 class="my-2" style="color: #2fbe04">Permanent Abress :</h4>
                               </div>
                                <div class="row">
                                <b class="col-sm-3">Village</b>
                                <b class="col-sm-9">{{ $address->permanent_vill ?? 'N/A' }}</b>
                                <b class="col-sm-3">Post</b>
                                <b class="col-sm-9">{{ $address->permanent_post ?? 'N/A' }}</b>
                                <b class="col-sm-3">Upzilla </b>
                                <b class="col-sm-9">{{ $address->permanent_upzilla ?? 'N/A' }}</b>
                                <b class="col-sm-3">District</b>
                                <b class="col-sm-9">{{ $address->permanent_dist ?? 'N/A' }}</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <b class="col-sm-3">Activity Status</b>
                            <b class="col-sm-7">
                                @if ($studentLogs->student->status == 1)
                                    <span class="btn btn-sm btn-primary">Good</span>
                                @else
                                <span class="btn btn-sm btn-danger">Pending</span>
                                @endif
                            </b>
                            <b class="col-sm-3">Account Status</b>
                            <b class="col-sm-7">
                                @if ($studentLogs->student->user->is_active == 1)
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
