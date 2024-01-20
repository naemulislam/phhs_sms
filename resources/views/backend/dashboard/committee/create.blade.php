@extends('backend.layouts.master')
@section('title', 'Committee Create')
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Create a New Committee</h5>
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
                                <h3 class="card-title">Committee Information</h3>
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <a href="{{ route('committee.index') }}"
                                        class="btn btn-primary btn-sm font-weight-bolder">
                                        < Back</a>
                                            <!--end::Button-->
                                </div>
                            </div>
                            <!--begin::Form-->
                            <div class="card-body">
                                <form action="{{ route('committee.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Committee Name <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter committee name"
                                                    name="name" value="{{ old('name') }}">
                                                @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter email" value="{{ old('email') }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
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
                                    </div>
                                    <div class="row">
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
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Religion <span
                                                    class="text-danger">*</span></label>
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
                                                <label for="">Join Date <span
                                                    class="text-danger">*</span></label>
                                                <input type="date" class="form-control" name="join_date"
                                                    value="{{ old('join_date') }}">
                                                @error('join_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4 class="card-title">Address Details</h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label for="">Address <span class="text-danger">*</span></label>
                                                <input type="text" name="address" placeholder="Enter committee address"
                                                    value="{{ old('address') }}" class="form-control">
                                                @error('address')
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
