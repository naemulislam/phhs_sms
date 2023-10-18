@extends('backend.layouts.dashboard')
@section('title', 'Edit Admission')
@section('content')
<!--begin::Content-->
<style>
    .card{
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

<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Mobile Toggle-->
                <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none" id="kt_subheader_mobile_toggle">
                    <span></span>
                </button>
                <!--end::Mobile Toggle-->
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Edit Admission</h5>
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
            <div class="row">
                <div class="col-md-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">Student Admission Edit</h3>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <a href="{{route('admin.admission.index') }}" class="btn btn-primary btn-sm font-weight-bolder">
                                    < Back</a>
                                        <!--end::Button-->
                            </div>
                        </div>
                        <!--begin::Form-->
                        <div class="card-body">
                            <form action="{{ route('admin.admission.update',$admission->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <input type="hidden" name="studentinfo_id" value="{{$studentinfo->id}}">

                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Admission No<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter subject name" name="admission_no" value="{{$admission->admission_no}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('admission_no') ? $errors->first('admission_no') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Roll No<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="roll" placeholder="Roll number" value="{{$admission->roll}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('roll') ? $errors->first('roll') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Registration No<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="registration_no" placeholder="Registration number" value="{{$admission->registration_no}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('registration_no') ? $errors->first('registration_no') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Identity Number<span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" name="id_number" value="{{ $admission->id_number}}" placeholder="Enter student id number">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('id_number') ? $errors->first('id_number') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Admission Date<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="admission_date" value="{{ $admission->admission_date}}" placeholder="Enter Admission Date">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('admission_date') ? $errors->first('admission_date') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" class="form-control" name="admi_name" placeholder="Enter admission name" value="{{$admission->admi_name}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('admi_name') ? $errors->first('admi_name') : '' }}
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Date of Birth<span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="date_of_birth" value="{{$studentinfo->date_of_birth}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('date_of_birth') ? $errors->first('date_of_birth') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Place of Birth</label>
                                            <input type="text" class="form-control" name="place_of_birth" placeholder="Place of Birth" value="{{$studentinfo->place_of_birth}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('place_of_birth') ? $errors->first('place_of_birth') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Admission Phone Number</label>

                                            <input type="text" class="form-control" name="admi_phone" placeholder="Enter phone" value="{{$admission->admi_phone}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('admi_phone') ? $errors->first('admi_phone') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Student Type<span class="text-danger">*</span></label>
                                            <select class="form-control" name="student_type">
                                                <option @if($studentinfo->student_type == 0) selected @endif value="0">New Student</option>


                                                <option @if($studentinfo->student_type == 0) selected @endif value="1">Return Student</option>


                                            </select>

                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('student_type') ? $errors->first('student_type') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Bloog Group</label>
                                            <input type="text" class="form-control" name="blood" placeholder="Blood group" value="{{$studentinfo->blood}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('blood') ? $errors->first('blood') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Class Group<span class="text-danger">*</span></label>
                                            <select name="class_id" class="form-control" id="">
                                                <option>Select class group</option>
                                                @foreach($class_group as $group)
                                                <option @if($admission->class_id == $group->id) selected @endif value="{{$group->id}}">{{ $group->class_name}}</option>
                                                @endforeach
                                            </select>

                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('class_id'))?($errors->first('class_id')):''}}</div>
                                        </div>
                                    </div>

                                </div>



                                <div class="row">
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">Home Address</label>
                                            <input type="text" name="h_address" placeholder="Home addrss" class="form-control" value="{{$studentinfo->address}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('h_address') ? $errors->first('h_address') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">City</label>
                                            <input type="text" name="city" class="form-control" value="{{$studentinfo->city}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('city') ? $errors->first('city') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">State</label>
                                            <input type="text" name="state" placeholder="State" class="form-control" value="{{$studentinfo->state}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('state'))?($errors->first('state')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Zip Code</label>
                                            <input type="text" name="zip_code" placeholder="Zip code" class="form-control" value="{{$studentinfo->zip_code}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('zip_code'))?($errors->first('zip_code')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Father Name</label>
                                            <input type="text" name="father_name" placeholder="Father name" class="form-control" value="{{$studentinfo->father_name}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('father_name') ? $errors->first('father_name') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Father Call</label>
                                            <input type="text" name="father_call" placeholder="Father call" class="form-control" value="{{$studentinfo->father_call}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('father_call') ? $errors->first('father_call') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Father Email</label>
                                            <input type="email" name="father_email" placeholder="Father email" class="form-control" value="{{$studentinfo->father_email}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('father_email'))?($errors->first('father_email')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Mother Name</label>
                                            <input type="text" name="mother_name" placeholder="Mother name" class="form-control" value="{{$studentinfo->mother_name}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('mother_name') ? $errors->first('mother_name') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Mother Call</label>
                                            <input type="text" name="mother_call" placeholder="Mother call" class="form-control" value="{{$studentinfo->mother_call}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('mother_call') ? $errors->first('mother_call') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="">Mother Email</label>
                                            <input type="email" name="mother_email" placeholder="Mother email" class="form-control" value="{{$studentinfo->mother_email}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('mother_email'))?($errors->first('mother_email')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h4 class="card-title">Documents Details</h4>

                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Birth Cirtificate<span class="text-danger">*</span></label>
                                            <input type="file" class="form-control-file" name="b_cirti" value="{{old('b_cirti')}}">

                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('b_cirti'))?($errors->first('b_cirti')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Immunization record<span class="text-danger">*</span></label>
                                            <input type="file" class="form-control-file" name="immu_record" value="{{old('immu_record')}}">

                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('immu_record'))?($errors->first('immu_record')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Proof of address<span class="text-danger">*</span></label><br>
                                            <small>Proof of address (electricity bill or bank statement or any official letter with the address)</small>
                                            <input type="file" class="form-control-file" name="proof_address" value="{{old('proof_address')}}">

                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('proof_address'))?($errors->first('proof_address')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Homeschooling registration acceptance letter</label>

                                            <input type="file" class="form-control-file" name="hsral" value="{{old('hsral')}}">

                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('hsral'))?($errors->first('hsral')):''}}</div>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Physical health report from the doctor</label>

                                            <input type="file" class="form-control-file" name="physical_health" value="{{old('physical_health')}}">

                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('physical_health'))?($errors->first('physical_health')):''}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="">Most recent report card from previous school</label>

                                            <input type="file" class="form-control-file" name="mrrcfps" value="{{old('mrrcfps')}}">

                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('mrrcfps'))?($errors->first('mrrcfps')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h4 class="card-title">Emergency Contact(Optional)</h4>

                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Name</label>
                                            <input type="text" name="e_name" placeholder="Emergency name" class="form-control" value="{{$studentinfo->e_name}}">
                                            <div style='color:red; padding: 0 5px;'>
                                                {{ $errors->has('e_name') ? $errors->first('e_name') : '' }}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">Phone</label>
                                            <input type="number" name="e_call" placeholder="Phone" class="form-control" value="{{$studentinfo->e_call}}">
                                            <div style='color:red; padding: 0 5px;'>{{($errors->has('e_call'))?($errors->first('e_call')):''}}</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="d-block">Student Picture</label>
                                    <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url({{asset('backend')}}/assets/media/users/blank.png)">
                                        <div class="image-input-wrapper" style="background-image: url({{asset($admission->admi_photo)}})"></div>
                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" name="image" />
                                            <input type="hidden" name="profile_avatar_remove" />
                                        </label>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                    </div>
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('image'))?($errors->first('image')):''}}</div>
                                </div>
                                <div class="form-group">
                                    <label for="" class="d-block">Guardians picture</label>
                                    <div class="image-input image-input-outline" id="kt_profile_avatar" style="background-image: url({{asset('backend')}}/assets/media/users/blank.png)">
                                        <div class="image-input-wrapper" style="background-image: url({{asset($admission->guard_pic)}})"></div>
                                        <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                                            <i class="fa fa-pen icon-sm text-muted"></i>
                                            <input type="file" name="guard_pic" />
                                            <input type="hidden" name="profile_avatar_remove" />
                                        </label>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                        <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="Remove avatar">
                                            <i class="ki ki-bold-close icon-xs text-muted"></i>
                                        </span>
                                    </div>
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('guard_pic'))?($errors->first('guard_pic')):''}}</div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="submit" value="Submit" class="btn btn-success">
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                        <!--end::Form-->
                    </div>
                    <!--end::Card-->
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

@section('customjs')


<!-- Edit code -->
<script>
    $(function() {
        $(document).on('change', '#category_id', function() {
            var category_id = $(this).val();
            $.ajax({
                type: "Get",
                url: "{{url('/admin/dashboard/get/class')}}/" + category_id,
                dataType: "json",
                success: function(data) {
                    var html = '<option value="">Select Class</option>';
                    $.each(data, function(key, val) {
                        html += '<option value="' + val.id + '">' + val.class_name + '</option>';
                    });
                    $('#class_id').html(html);
                },

            });
        });
    });
</script>
<script>
    $(function() {
        $(document).on('change', '#class_id', function() {
            var class_id = $(this).val();
            $.ajax({
                type: "Get",
                url: "{{url('/admin/dashboard/get/section')}}/" + class_id,
                dataType: "json",
                success: function(data) {
                    var html = '<option value="">Select Class</option>';
                    $.each(data, function(key, val) {
                        html += '<option value="' + val.id + '">' + val.name + '</option>';
                    });
                    $('#section_id').html(html);
                },

            });
        });
    });
</script>


@endsection
@endsection