@extends('backend.layouts.dashboard')
@section('title', 'Student Details')
@section('content')
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Student admission request details</h5>
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
                            <h3 class="card-label">Student Admission Request Details
                                <span class="d-block text-muted pt-2 font-size-sm">All details here</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="{{ url(URL::previous()) }}"
                                class="btn btn-primary btn-sm font-weight-bolder">
                                < Back</a>
                                    <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">

                        @php
                        $stuadmission = \App\Models\Studentadmission::where('student_id',$data->id)->first();
                        $studentinfo = \App\Models\StudentInfo::where('student_id',$data->id)->first();
                        @endphp

                            <b class="col-sm-3">Student id number </b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">#{{ $stuadmission->id_number }}</dd>

                            <b class="col-sm-3">Student Name </b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">{{ @$data->name }}</dd>
                            <b class="col-sm-3">Student Email </b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">{{$data->email}}</dd>
                            
                            <b class="col-sm-3">Admission Date</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">{{ @$stuadmission->admission_date }}</dd>
                            <b class="col-sm-3">Class Group</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">{{ @$stuadmission->class->class_name }}</dd>
                            
                            <b class="col-sm-3">Phone</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">{{ @$stuadmission->admi_phone }}</dd>

                            
                            <b class="col-sm-3">Date of birth</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">{{ @$studentinfo->date_of_birth }}</dd>
                            <b class="col-sm-3">Place of birth</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                                {{ @$studentinfo->place_of_birth }}
                                
                            </dd>
                            <b class="col-sm-3">Gender</b>
                            <b class="col-sm-1">:</b>
                            <dd class="col-sm-8">
                                @if($data->gender == 1)
                                Mail
                                @elseif($data->gender == 2)
                                Femail
                                @else
                               Not added yet.
                                @endif
                            </dd>
                            
                            <b class="col-sm-3">Father Name</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">{{ @$studentinfo->father_name }}</dd>
                            
                            <b class="col-sm-3">Mother Name</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">{{ @$studentinfo->mother_name }}</dd>
                            
                            
                            <b class="col-sm-3">Home Address</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                                {{ @$studentinfo->address }}
                               
                            </dd>
                            
                            <b class="col-sm-3">City</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                                {{ @$studentinfo->city }}
                                
                            </dd>
                            <b class="col-sm-3">State</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                                {{ @$studentinfo->state }}
                               
                            </dd>
                            <b class="col-sm-3">Zip Code</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                                {{ @$studentinfo->zip_code }}
                               
                            </dd>
                            <b class="col-sm-3">Father Call</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                                {{ @$studentinfo->father_call }}
                                
                            </dd>
                            <b class="col-sm-3">Mother Call</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                                {{ @$studentinfo->mother_call }}
                                
                            </dd>
                            <b class="col-sm-3">Payment type</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                                {{ $stuadmission->payment_type }}
                                
                            </dd>
                            <b class="col-sm-3">Payment method</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                                {{ $stuadmission->payment_method }}
                                
                            </dd>
                            <b class="col-sm-3">Payment Status</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                                @if($stuadmission->payment_status == 1)
                                Paid
                                @else
                               Paid by handcash
                                @endif
                            </dd>
                            <b class="col-sm-3">Status</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                                @if($stuadmission->status == 1)
                                Active
                                @else
                               Panding
                                @endif
                            </dd>
                            <b class="col-sm-3">Student Photo</b>
                            <b class="col-sm-1"> : </b>
                            <dd class="col-sm-8">
                            <img style="width:150px ;" src="@if(!empty($stuadmission->admi_photo)){{asset($stuadmission->admi_photo)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="">
                            </dd>
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
