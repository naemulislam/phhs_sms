@extends('backend.layouts.master')
@section('title', 'Settings')
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">General Settings</h5>
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
                                <h3 class="card-title">Settings</h3>
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <a href="" class="btn btn-primary btn-sm font-weight-bolder">
                                        < Back</a>
                                            <!--end::Button-->
                                </div>
                            </div>
                            <!--begin::Form-->
                            <div class="card-body">
                                <form action="{{ route('settings.update', $setting?->id) }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">School Name English <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter english name"
                                                    name="name_e" value="{{ $setting?->name_e }}">
                                                @error('name_e')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="">School Name Bangla <span
                                                        class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="Enter bangla name"
                                                    name="name_b" value="{{ $setting?->name_b }}">
                                                @error('name_b')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Email <span class="text-danger">*</span></label>
                                                <input type="email" class="form-control" placeholder="Enter primary email"
                                                    name="email" value="{{ $setting?->email }}">
                                                @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Phone <span class="text-danger">*</span></label>
                                                <input type="number" class="form-control" placeholder="Enter primary phone"
                                                    name="phone" value="{{ $setting?->phone }}">
                                                @error('phone')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <label for="">Web Address <span class="text-danger">*</span></label>
                                                <input type="text" class="form-control" placeholder="example.com"
                                                    name="web_address" value="{{ $setting?->web_address }}">
                                                @error('web_address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Total Teachers <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control"
                                                    placeholder="Enter total teachres" name="total_t"
                                                    value="{{ $setting?->total_l }}">
                                                @error('total_t')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Total Students <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control"
                                                    placeholder="Enter total students" name="total_s"
                                                    value="{{ $setting?->total_s }}">
                                                @error('total_s')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Total Class Room <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control"
                                                    placeholder="Enter total class room" name="total_c"
                                                    value="{{ $setting?->total_c }}">
                                                @error('total_c')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <label for="">Total Lab Room <span
                                                        class="text-danger">*</span></label>
                                                <input type="number" class="form-control"
                                                    placeholder="Enter total lab room" name="total_l"
                                                    value="{{ $setting?->total_l }}">
                                                @error('total_l')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>Address <span class="text-danger">*</span></label>
                                                <input type="text" name="address" class="form-control"
                                                    placeholder="Enter present address.."
                                                    value="{{ $setting?->address }}">
                                                @error('address')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <h4>Social Media Link</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label for="">Facebook</label>
                                                <input type="text" class="form-control"
                                                    placeholder="https://example.com" name="facebook"
                                                    value="{{ $setting?->facebook }}">
                                                @error('facebook')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label for="">YouTube</label>
                                                <input type="text" class="form-control"
                                                    placeholder="https://example.com" name="youtube"
                                                    value=" {{ $setting?->youtube }}">
                                                @error('youtube')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label for="">Twitter</label>
                                                <input type="text" class="form-control"
                                                    placeholder="https://example.com" name="twitter"
                                                    value="{{ $setting?->twitter }}">
                                                @error('twitter')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-sm-6 mb-3">
                                            <div class="form-group">
                                                <label for="">Instagram</label>
                                                <input type="text" class="form-control"
                                                    placeholder="https://example.com" name="instagram"
                                                    value="{{ $setting?->instagram }}">
                                                @error('instagram')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Website Logo <span class="text-danger">*</span></label>
                                                <input type="file" name="image" class="form-control"
                                                    onchange="loadFile(event)">
                                                @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-4 mb-3">
                                            <label>Current Image</label>
                                            <img src="{{ $setting->logo->file ?? asset('defaults/noimage/no_img.jpg') }}"
                                                class="previewLogo" id="" />
                                        </div>
                                        <div class="col-md-4">
                                            <label>Preview Image</label>
                                            <img class="previewLogo" id="output" />
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
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endpush
