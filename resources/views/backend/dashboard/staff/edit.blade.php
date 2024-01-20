@extends('backend.layouts.master')
@section('title', 'Staff Edit')
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Edit Staff Information</h5>
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
                                <h3 class="card-title">Staff Information</h3>
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <a href="{{ route('staff.index') }}"
                                        class="btn btn-primary btn-sm font-weight-bolder">
                                        < Back</a>
                                            <!--end::Button-->
                                </div>
                            </div>
                            <!--begin::Form-->
                            <div class="card-body">
                                <form action="{{ route('staff.update', $staff->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Staff Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter staff name"
                                                    name="name" value="{{ $staff->user->name }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter email" value="{{ $staff->user->email }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">PDS Id<span class="text-danger">*</span></label>
                                            <div class="form-group mb-3">
                                                <input type="number" class="form-control" placeholder="Enter pds id"
                                                    name="pds_id" value="{{ $staff->user->pds_id }}">
                                            </div>
                                            @error('pds_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="">Shift</label>
                                                <input type="text" class="form-control" name="shift"
                                                    placeholder="Enter shift" value="{{ $staff->shift }}">
                                                @error('shift')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">NID No <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" placeholder="Enter nid no"
                                                    name="nid" value="{{ $staff->nid }}">
                                                @error('nid')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Date Of Birth</label>
                                                <input type="date" class="form-control" name="date_of_birth"
                                                    value="{{ $staff->date_of_birth }}">
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
                                                    name="religion" value="{{ $staff->religion }}">
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
                                                    <option {{ $staff->gender == 'mail' ? 'selected' : '' }} value="mail">
                                                        Mail</option>
                                                    <option {{ $staff->gender == 'femail' ? 'selected' : '' }}
                                                        value="femail">Femail</option>
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
                                                    value="{{ $staff->join_date }}">
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
                                                    placeholder="Enter blood group" value="{{ $staff->blood }}">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Phone <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" name="phone"
                                                    placeholder="Enter phone number" value="{{ $staff->user->phone }}">
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Designation</label>
                                                <input type="tex" class="form-control" name="designation"
                                                    placeholder="Enter designation" value="{{ $staff->designation }}">
                                                @error('designation')
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
                                                    value="{{ $address->present_vill }}" class="form-control">
                                                @error('present_vill')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Post <span class="text-danger">*</span></label>
                                                <input type="text" name="present_post" placeholder="present post"
                                                    value="{{ $address->present_post }}" class="form-control">
                                                @error('present_post')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Upzilla <span class="text-danger">*</span></label>
                                                <input type="text" name="present_upzilla"
                                                    placeholder="present upzilla" value="{{ $address->present_upzilla }}"
                                                    class="form-control">
                                                @error('present_upzilla')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">District <span class="text-danger">*</span></label>
                                                <input type="text" name="present_dist" placeholder="present district"
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
                                                <input type="text" name="permanent_vill"
                                                    placeholder="permanent village"
                                                    value="{{ $address->permanent_vill }}" class="form-control">
                                                @error('permanent_vill')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Post <span class="text-danger">*</span></label>
                                                <input type="text" name="permanent_post" placeholder="permanent post"
                                                    value="{{ $address->permanent_post }}" class="form-control">
                                                @error('permanent_post')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Upzilla <span class="text-danger">*</span></label>
                                                <input type="text" name="permanent_upzilla"
                                                    placeholder="permanent upzilla"
                                                    value="{{ $address->permanent_upzilla }}" class="form-control">
                                                @error('permanent_upzilla')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">District <span class="text-danger">*</span></label>
                                                <input type="text" name="permanent_dist"
                                                    placeholder="permanent district"
                                                    value="{{ $address->permanent_dist }}" class="form-control">
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
                                    </div>
                                    <div class="row mb-4">
                                        <div class="col-md-4 mb-4">
                                            <label>Image</label>
                                            <div class="imageBox">
                                                <img style=""
                                                    src="{{ $staff->user->profile_id ? $staff->user->image->file : asset('defaults/noimage/no_img.jpg') }}"
                                                    alt="" class="small-previewImage">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <label>Preview Image</label>
                                            <div class="imageBox">
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
            } else {
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
