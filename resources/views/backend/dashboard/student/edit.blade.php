@extends('backend.layouts.master')
@section('title', 'Student Edit')
@section('content')
    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Subheader-->
        <div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
            <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                <!--begin::Info-->
                <div class="d-flex align-items-center flex-wrap mr-1">
                    <!--begin::Mobile Toggle-->
                    <button class="burger-icon burger-icon-left mr-4 d-inline-block d-lg-none"
                        id="kt_subheader_mobile_toggle">
                        <span></span>
                    </button>
                    <!--end::Mobile Toggle-->
                    <!--begin::Page Heading-->
                    <div class="d-flex align-items-baseline flex-wrap mr-5">
                        <!--begin::Page Title-->
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Student Admission Edit</h5>
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
                                <h3 class="card-title">Student Information</h3>
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <a href="{{ route('student.index') }}"
                                        class="btn btn-primary btn-sm font-weight-bolder">
                                        < Back</a>
                                            <!--end::Button-->
                                </div>
                            </div>
                            <!--begin::Form-->
                            <div class="card-body">
                                <form action="{{ route('student.update',$student->id) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Student Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter student name"
                                                    name="name" value="{{ $student->applicant_name }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Roll No <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="roll"
                                                    placeholder="Enter roll number" value="{{ $student->roll }}">
                                                @error('roll')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Class Group <span class="text-danger">*</span></label>
                                                <select name="group_id" class="form-control">
                                                    <option selected disabled>Select class</option>
                                                    @foreach ($groups as $group)
                                                        <option {{ $student->group_id == $group->id? 'selected':''}} value="{{ $group->id }}">{{ $group->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('group_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Student Id<span class="text-danger">*</span></label>
                                            <div class="input-group mb-3">
                                                <input type="number" class="form-control"
                                                    placeholder="Enter student unique id" aria-label="Recipient's username" name="student_id" value="{{ $student->user->student_id }}"
                                                    id="studentId">
                                                <div class="input-group-append">
                                                    <a class="btn btn-primary" id="generate">Generate</a>
                                                </div>
                                            </div>
                                            @error('student_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Birth Registration No <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control"
                                                    placeholder="Enter birth registration no" name="birth_reg_no"
                                                    value="{{ $student->birth_reg_no }}">
                                                @error('birth_reg_no')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Date Of Birth <span
                                                        class="text-danger">*</span></label>
                                                <input type="date" class="form-control" name="date_of_birth"
                                                    value="{{ $student->date_of_birth }}">
                                                @error('date_of_birth')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Religion <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter student name"
                                                    name="religion" value="{{ $student->religion }}">
                                                @error('religion')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Gender <span class="text-danger">*</span></label>
                                                <select class="form-control" name="gender">
                                                    <option selected disabled>select gender</option>
                                                    <option {{$student->gender == 'mail'? 'selected':''}} value="mail">Mail</option>
                                                    <option {{$student->gender == 'femail'? 'selected':''}} value="femail">Femail</option>
                                                    <option {{$student->gender == 'others'? 'selected':''}} value="others">others</option>
                                                </select>
                                                @error('gender')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Sibling</label>
                                                <input type="text" class="form-control" name="sibling"
                                                    placeholder="Enter sibling" value="{{ $student->sibling }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Shift <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" name="shift"
                                                    placeholder="Enter shift" value="{{ $student->shift }}">
                                                @error('shift')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Quota (Freedom)</label>
                                                <select class="form-control" name="quota">
                                                    <option {{ $student->quota == 'yes'? 'selected':''}} value="yes">Yes</option>
                                                    <option {{ $student->quota == 'no'? 'selected':''}} value="no">No</option>
                                                </select>
                                                @error('quota')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="">Old Previous School Name</label>
                                                <input type="text" class="form-control" name="old_prev_school"
                                                    placeholder="Enter old school" value="{{ $student->old_prev_school }}">
                                                    @error('old_prev_school')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Student Type <span
                                                        class="text-danger">*</span></label>
                                                <select class="form-control" name="type">
                                                    <option {{ $student->type == 0? 'selected': ''}} value="0">New Student</option>
                                                    <option {{ $student->type == 1? 'selected': ''}} value="1">Return Student</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Blood Group</label>
                                                <input type="text" class="form-control" name="blood"
                                                    placeholder="Enter blood group" value="{{ $student->blood }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Phone</label>
                                                <input type="number" class="form-control" name="phone"
                                                    placeholder="Enter phone number" value="{{ $student->phone }}">
                                                    @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4 class="card-title">Guardian Information</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Father Name</label>
                                                <input type="text" name="father_name" placeholder="Father name"
                                                    value="{{ $student->father_name }}" class="form-control">
                                                    @error('father_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Father Phone</label>
                                                <input type="number" name="father_phone" placeholder="Father phone"
                                                    value="{{ $student->father_phone }}" class="form-control">
                                                    @error('father_phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Father NID No</label>
                                                <input type="text" name="father_nid" placeholder="Father NID"
                                                    value="{{ $student->father_nid }}" class="form-control">
                                                    @error('father_nid')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Mother Name</label>
                                                <input type="text" name="mother_name" placeholder="Mother name"
                                                    value="{{ $student->mother_name }}" class="form-control">
                                                    @error('mother_name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Mother Phone</label>
                                                <input type="text" name="mother_phone" placeholder="Mother call"
                                                    value="{{ $student->mother_phone }}" class="form-control">
                                                    @error('mother_phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Mother NID No</label>
                                                <input type="text" name="mother_nid" placeholder="Mother NID"
                                                    value="{{ $student->mother_nid }}" class="form-control">
                                                    @error('mother_nid')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4 class="card-title">Present Address</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Village <span class="text-danger">*</span></label>
                                                <input type="text" name="present_vill" placeholder="Mother name"
                                                    value="{{ $address->present_vill }}" class="form-control">
                                                @error('present_vill')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Post <span class="text-danger">*</span></label>
                                                <input type="text" name="present_post" placeholder="Mother call"
                                                    value="{{ $address->present_post }}" class="form-control">
                                                @error('present_post')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Upzilla <span class="text-danger">*</span></label>
                                                <input type="text" name="present_upzilla" placeholder="Upzilla"
                                                    value="{{ $address->present_upzilla }}" class="form-control">
                                                @error('present_upzilla')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">District <span class="text-danger">*</span></label>
                                                <input type="text" name="present_dist" placeholder="Mother NID"
                                                    value="{{ $address->present_dist }}" class="form-control">
                                                @error('present_dist')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
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
                                    <div class="row" id="permanentAddress">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Village <span class="text-danger">*</span></label>
                                                <input type="text" name="permanent_vill" placeholder="Mother name"
                                                    value="{{ $address->permanent_vill }}" class="form-control">
                                                @error('permanent_vill')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Post <span class="text-danger">*</span></label>
                                                <input type="text" name="permanent_post" placeholder="Mother call"
                                                    value="{{ $address->permanent_post }}" class="form-control">
                                                @error('permanent_post')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Upzilla <span class="text-danger">*</span></label>
                                                <input type="text" name="permanent_upzilla" placeholder="Upzilla"
                                                    value="{{ $address->permanent_upzilla }}" class="form-control">
                                                @error('permanent_upzilla')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">District <span class="text-danger">*</span></label>
                                                <input type="text" name="permanent_dist" placeholder="Mother NID"
                                                    value="{{ $address->permanent_dist }}" class="form-control">
                                                @error('permanent_dist')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <input type="hidden" value="{{ $address->id }}" name="address_id">

                                    </div>

                                    <div class="row">
                                        <h4 class="card-title">Absent Guardian (Optional)</h4>

                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">Name</label>
                                                <input type="text" name="absent_guardian" placeholder="Emergency name"
                                                    value="{{ $student->absent_guardian }}" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">NID No</label>
                                                <input type="number" name="absent_guardian_nid"
                                                    placeholder="Enter NID No" value="{{ $student->absent_guardian_nid }}"
                                                    class="form-control">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Image</label>
                                                <input type="file" name="image" class="form-control"
                                                    onchange="loadFile(event)">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4">
                                            <label>Image</label>
                                            <img style="width:100%;"
                                                src="{{$student->image_id? $student->image->file: asset('defaults/noimage/no_img.jpg')}}" alt="" class="small-previewImage">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="">
                                                <label>Preview Image</label>
                                                <img class="small-previewImage" id="output" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
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
@endsection
@push('scripts')
    <script>
        $("input[name='same']").on("change", function() {
            if ($(this).is(":checked")) {
                $("#permanentAddress").hide(300);
            }else{
                $("#permanentAddress").show(300);
            }

        });
    </script>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
    <script>
        $(document).on('click', '#generate', function() {
            $.ajax({
                type: 'GET',
                datatype: "json",
                url: "{{ route('id.generate') }}",
                success: function(res) {
                    $('#studentId').val(res.id);
                }
            });
        });
    </script>
@endpush
