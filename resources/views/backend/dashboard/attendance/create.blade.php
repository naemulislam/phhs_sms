@extends('backend.layouts.master')
@section('title', 'Create Attendance')
@section('content')
<!--begin::Content-->
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
                    <h5 class="text-dark font-weight-bold my-1 mr-5">Attendance</h5>
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
                            <h3 class="card-title">Crate a Attendance</h3>
                            <div class="card-toolbar">
                                <!--begin::Button-->
                                <a href="{{route('attendance.index') }}" class="btn btn-primary btn-sm font-weight-bolder">
                                    < Back</a>
                                        <!--end::Button-->
                            </div>
                        </div>
                        <!--begin::Form-->
                        <div class="card-body">
                            <form action="{{ route('attendance.store')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Class Group <span class="text-danger">*</span></label>
                                            <select name="group_id" class="form-control js-select-result" id="adclass_id">
                                                <option>Select Class Group</option>
                                                @foreach($groups as $class)
                                                <option value="{{$class->id}}">{{ $class->name}}</option>
                                                @endforeach
                                            </select>
                                            @error('group_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Subject <span class="text-danger">*</span></label>
                                            <select name="subject_id" class="form-control" id="subject_id">
                                                {{-- <option></option> --}}
                                            </select>
                                            @error('group_id')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Date <span class="text-danger">*</span></label>
                                            <input type="date" class="form-control" name="attendance_date" value="<?php echo date('Y-m-d'); ?>">
                                            @error('attendance_date')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="">Time <span class="text-danger">*</span></label>
                                            <input type="time" class="form-control" name="attendance_time">
                                            @error('attendance_time')
                                            <span class="text-danger">{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!--begin: Datatable-->
                                    <table class="table table-separate table-head-custom table-checkable" id="">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Class</th>
                                                <th>Roll</th>
                                                <th>Present</th>
                                                <th>Absent</th>
                                                <th>Late</th>
                                                <th>Sick</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table">
                                            <!-- <span class="switch">
                                                <label>
                                                    <input type="checkbox" name="" value="1"/>
                                                    <span></span>Present
                                                </label>
                                            </span>  -->
                                        </tbody>
                                    </table>
                                    <!--end: Datatable-->
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="submit" value="Submit" class="btn btn-success">
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

<!-- Add code -->
<script>
    $(document).on('change', '#adclass_id', function() {
        var class_id = $(this).val();
        // console.log(class_id);
        $.ajax({
            type: "get",
            url: "{{url('/school/portal/get/subjects')}}/" + class_id,
            dataType: 'html',
            success: function(res) {
                $('#subject_id').html(res);
            }
        });
    })
</script>
<script>
    $(document).on('change', '#adclass_id', function() {
        var class_id = $(this).val();
        // console.log(class_id);
        $.ajax({
            type: "get",
            url: "{{url('/school/portal/get/studentlist')}}/" + class_id,
            dataType: 'html',
            success: function(res) {
                $('#table').html(res);
            }
        });
    })
</script>

<script>
    var $disabledResults = $(".js-select-result");
    $disabledResults.select2();
</script>
@endpush
