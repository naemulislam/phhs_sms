@extends('backend.layouts.master')
@section('title', 'Teacher Create')
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Create a New Teacher</h5>
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
                                <h3 class="card-title">Teacher Information</h3>
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <a href="{{ route('teacher.index') }}"
                                        class="btn btn-primary btn-sm font-weight-bolder">
                                        < Back</a>
                                            <!--end::Button-->
                                </div>
                            </div>
                            <!--begin::Form-->
                            <div class="card-body">
                                <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Teacher Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter teacher name"
                                                    name="name" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Subject <span class="text-danger">*</span></label>
                                                <select name="subject_id" class="form-control">
                                                    <option selected disabled>Select subject</option>
                                                    @foreach($subjects as $subject)
                                                        <option value="{{ $subject->id }}">{{ $subject->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('subject_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">PDS Id<span class="text-danger">*</span></label>
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control"
                                                placeholder="Enter pds id" name="pds_id" value="{{ old('pds_id') }}">
                                            </div>
                                            @error('pds_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">NID No <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control"
                                                    placeholder="Enter nid no" name="nid"
                                                    value="{{ old('nid') }}">
                                                @error('nid')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Date Of Birth</label>
                                                <input type="date" class="form-control" name="date_of_birth"
                                                    value="{{ old('date_of_birth') }}">
                                                @error('date_of_birth')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Religion</label>
                                                <input type="text" class="form-control" placeholder="Enter religion"
                                                    name="religion" value="{{ old('religion') }}">
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
                                                    <option value="mail">Mail</option>
                                                    <option value="femail">Femail</option>
                                                </select>
                                                @error('gender')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Join Date</label>
                                                <input type="date" class="form-control" name="join_date"
                                                    value="{{ old('join_date') }}">
                                                @error('join_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Blood Group</label>
                                                <input type="text" class="form-control" name="blood"
                                                    placeholder="Enter blood group" value="{{ old('blood') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Phone <span
                                                    class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="phone"
                                                    placeholder="Enter phone number" value="{{ old('phone') }}">
                                                    @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Designation <span
                                                    class="text-danger">*</span></label>
                                                <input type="tex" class="form-control" name="designation"
                                                    placeholder="Enter designation" value="{{ old('designation') }}">
                                                    @error('designation')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Shift</label>
                                                <input type="text" class="form-control" name="shift"
                                                    placeholder="Enter shift" value="{{ old('shift') }}">
                                                @error('shift')
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
                                                <input type="text" name="present_vill" placeholder="present village"
                                                    value="{{ old('present_vill') }}" class="form-control">
                                                @error('present_vill')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Post <span class="text-danger">*</span></label>
                                                <input type="text" name="present_post" placeholder="present post"
                                                    value="{{ old('present_post') }}" class="form-control">
                                                @error('present_post')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Upzilla <span class="text-danger">*</span></label>
                                                <input type="text" name="present_upzilla" placeholder="present upzilla"
                                                    value="{{ old('present_upzilla') }}" class="form-control">
                                                @error('present_upzilla')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">District <span class="text-danger">*</span></label>
                                                <input type="text" name="present_dist" placeholder="present district"
                                                    value="{{ old('present_dist') }}" class="form-control">
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
                                                <input type="text" name="permanent_vill" placeholder="permanent village"
                                                    value="{{ old('permanent_vill') }}" class="form-control">
                                                @error('permanent_vill')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Post <span class="text-danger">*</span></label>
                                                <input type="text" name="permanent_post" placeholder="permanent post"
                                                    value="{{ old('permanent_post') }}" class="form-control">
                                                @error('permanent_post')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Upzilla <span class="text-danger">*</span></label>
                                                <input type="text" name="permanent_upzilla" placeholder="permanent upzilla"
                                                    value="{{ old('permanent_upzilla') }}" class="form-control">
                                                @error('permanent_upzilla')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">District <span class="text-danger">*</span></label>
                                                <input type="text" name="permanent_dist" placeholder="permanent district"
                                                    value="{{ old('permanent_dist') }}" class="form-control">
                                                @error('permanent_dist')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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
                                        <div class="imageBox">
                                            <label>Preview Image</label>
                                            <img class="small-previewImage" id="output" />
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
@endpush
