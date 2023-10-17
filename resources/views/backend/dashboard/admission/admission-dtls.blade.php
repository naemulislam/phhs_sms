@extends('backend.layouts.dashboard')
@section('title', 'Student Details')
@section('content')
<style>
    .fa-star {
        color: #FFA500;
    }

    .none {
        color: #bfbebe;
    }

    .card {
        margin: 7px 0px;
    }

    .card-header {
        padding: 0rem 0rem;
        margin-bottom: 0;
        background-color: #ffffff;
        border-bottom: 1px solid #EBEDF3;
        color: #000;
    }

    .btn-link {
        font-weight: 600;
        color: #000000;
        text-decoration: none;
        font-size: 16px;
    }
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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Student admission details</h5>
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
                        <h3 class="card-label">Student Admission Details
                            <span class="d-block text-muted pt-2 font-size-sm">All details here</span>
                        </h3>
                    </div>
                    <div class="card-toolbar">
                        <!--begin::Button-->
                        <a href="{{ url(URL::previous()) }}" class="btn btn-primary btn-sm font-weight-bolder">
                            < Back</a>
                                <!--end::Button-->
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                    <b class="col-sm-3">Student BarCode</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            @php
                            $name = $admission->student->name;
                            $email = $admission->student->email;
                            $id_number = $admission->id_number;
                            $class = $admission->class->class_name;
                            $generator = new Picqer\Barcode\BarcodeGeneratorHTML();
                            @endphp

                            {!! $generator->getBarcode('Student Id: '.$id_number, $generator::TYPE_CODE_128) !!}
                            
                        </dd>

                        <b class="col-sm-3">Student id number </b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">#{{ $admission->id_number }}</dd>

                        <b class="col-sm-3">Student Name </b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">{{ @$admission->student->name }}</dd>
                        <b class="col-sm-3">Student Email </b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">{{$admission->student->email}}</dd>

                        <b class="col-sm-3">Admission Date</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">{{ @$admission->admission_date }}</dd>
                        <b class="col-sm-3">Admission No</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">{{ @$admission->admission_no }}</dd>
                        <b class="col-sm-3">Roll No</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">{{ @$admission->roll }}</dd>
                        <b class="col-sm-3">Registration No</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">{{ @$admission->registration_no }}</dd>
                        <b class="col-sm-3">Class</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">{{ @$admission->class->class_name }}</dd>

                        <b class="col-sm-3">Phone</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">{{ @$admission->admi_phone }}</dd>


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
                            @if($admission->gender == 1)
                            Mail
                            @elseif($admission->gender == 2)
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
                            {{ $studentinfo->h_address }}

                        </dd>

                        <b class="col-sm-3">City</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            {{ $studentinfo->city }}

                        </dd>
                        <b class="col-sm-3">State</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            {{ $studentinfo->state }}

                        </dd>
                        <b class="col-sm-3">Zip Code</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            {{ $studentinfo->zip_code }}

                        </dd>
                        <b class="col-sm-3">Father Call</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            {{ $studentinfo->father_call }}

                        </dd>
                        <b class="col-sm-3">Mother Call</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            {{ $studentinfo->mother_call }}

                        </dd>
                        <b class="col-sm-3">Payment type</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            {{ $admission->payment_type }}

                        </dd>
                        <b class="col-sm-3">Payment method</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            {{ $admission->payment_method }}

                        </dd>
                        <b class="col-sm-3">Payment Status</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            @if($admission->payment_status == 1)
                            Paid
                            @else
                            Unpaid
                            @endif
                        </dd>
                        <b class="col-sm-3">Status</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            @if($admission->status == 1)
                            Active
                            @else
                            Panding
                            @endif
                        </dd>
                        <b class="col-sm-3">Student Activity Bellow</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">

                        </dd>
                        <b class="col-sm-3">Education Rating</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            @if (@$activity->edurating == 1)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            @elseif(@$activity->edurating == 2)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>

                            @elseif(@$activity->edurating == 3)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>

                            @elseif(@$activity->edurating == 4)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star none"></i>

                            @elseif(@$activity->edurating == 5)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            @else
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            @endif
                        </dd>
                        <b class="col-sm-3">Bihavior Rating</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            @if (@$activity->biharating == 1)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            @elseif(@$activity->biharating == 2)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>

                            @elseif(@$activity->biharating == 3)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>

                            @elseif(@$activity->biharating == 4)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star none"></i>

                            @elseif(@$activity->biharating == 5)
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>

                            @else
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            <i class="fa fa-star none"></i>
                            @endif
                        </dd>
                        <b class="col-sm-3">Education Comment</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            @if(@$activity->educomment)
                            {{$activity->educomment}}
                            @else
                            Not added yet
                            @endif
                        </dd>
                        <b class="col-sm-3">Bihavior Comment</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            @if(@$activity->bihacomment)
                            {{$activity->bihacomment}}
                            @else
                            Not added yet
                            @endif
                        </dd>
                        
                        <b class="col-sm-3">Student Qr Code</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            @php

                            $name = $admission->student->name;
                            $email = $admission->student->email;
                            $id_number = $admission->id_number;
                            $class = $admission->class->class_name;
                            $varri = QrCode::size(100)->generate('Student Id: '.$id_number.', Student Name: '.$name.', Email: '.$email.', Class: '.$class);
                            @endphp


                            {{$varri}}

                        </dd>
                        <b class="col-sm-3">Student Photo</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">
                            <img style="width:150px ;" src="@if(!empty($admission->admi_photo)){{asset($admission->admi_photo)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="">
                        </dd>
                        <b class="col-sm-3">Guardian Photo</b>
                        <b class="col-sm-1"> : </b>
                        <dd class="col-sm-8">

                            <img style="width:150px ;" src="@if(!empty($admission->guard_pic)){{asset($admission->guard_pic)}} @else {{asset('defaults/noimage/no_img.jpg')}} @endif" alt="">
                        </dd>

                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div id="accordion">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                Birth Cirtificate
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                        <div class="card-body">
                                            @if($admission->b_cirti)
                                            <embed src="{{asset($admission->b_cirti)}}" width="100%" height="400px" />
                                            @else
                                            Not added yet.
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Immunization record
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                        <div class="card-body">
                                            @if($admission->immu_record)
                                            <embed src="{{asset($admission->immu_record)}}" width="100%" height="400px" />
                                            @else
                                            Not added yet.
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Proof of address
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                        <div class="card-body">
                                            @if($admission->proof_address)
                                            <embed src="{{asset($admission->proof_address)}}" width="100%" height="400px" />
                                            @else
                                            Not added yet.
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFour">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Homeschooling registration acceptance letter
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                        <div class="card-body">
                                            @if($admission->mrrcfps)
                                            <embed src="{{asset($admission->mrrcfps)}}" width="100%" height="400px" />
                                            @else
                                            Not added yet.
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingFive">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                physical health report from the doctor
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                        <div class="card-body">
                                            @if($admission->physical_health)
                                            <embed src="{{asset($admission->physical_health)}}" width="100%" height="400px" />
                                            @else
                                            Not added yet.
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingSix">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                Most recent report card from previous school
                                            </button>
                                        </h5>
                                    </div>
                                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                        <div class="card-body">
                                            @if($admission->mrrcfps)
                                            <embed src="{{asset($admission->mrrcfps)}}" width="100%" height="400px" />
                                            @else
                                            Not added yet.
                                            @endif
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
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

@section('customjs')
<script>
    function bigimg() {

    }
</script>
@endsection
@endsection