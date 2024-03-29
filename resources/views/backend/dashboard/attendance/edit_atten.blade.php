@extends('backend.layouts.master')
@section('title', 'Attendance Sheet')
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
                                <h3 class="card-title">Attendance Sheet</h3>
                                <div class="card-toolbar">
                                    <!--begin::Button-->
                                    <a href="{{ route('attendance.index') }}"
                                        class="btn btn-primary btn-sm font-weight-bolder">
                                        < Back</a>
                                            <!--end::Button-->
                                </div>
                            </div>

                            <!--begin::Form-->
                            <form action="{{ route('attendance.update') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <!--begin: Datatable-->
                                    <table class="table table-separate table-head-custom table-checkable" id="datatable">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Roll</th>
                                                <th>Class</th>
                                                <th>Present</th>
                                                <th>Absent</th>
                                                <th>Late</th>
                                                <th>Sick</th>
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($attendance as $row)
                                            <input type="hidden" name="total_students" value="{{count($attendance)}}">
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $row->student->applicant_name }}</td>
                                                    <td>{{ $row->student->roll }}</td>
                                                    <td>{{ $row->group->name }}</td>
                                                    <td>
                                                        <span class="switch">
                                                            <label>
                                                                <input @if ($row->attendence_status == 1) checked @endif
                                                                    type="checkbox" name="attendance[{{ $row->id }}]"
                                                                    value="1" />
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="switch">
                                                            <label>
                                                                <input @if ($row->attendence_status == 0) checked @endif
                                                                    type="checkbox" name="attendance[{{ $row->id }}]"
                                                                    value="0" />
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="switch">
                                                            <label>
                                                                <input @if ($row->attendence_status == 2) checked @endif
                                                                    type="checkbox" name="attendance[{{ $row->id }}]"
                                                                    value="2" />
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    <td>
                                                        <span class="switch">
                                                            <label>
                                                                <input @if ($row->attendence_status == 3) checked @endif
                                                                    type="checkbox" name="attendance[{{ $row->id }}]"
                                                                    value="3" />
                                                                <span></span>
                                                            </label>
                                                        </span>
                                                    </td>
                                                    <td>{{ $row->attendance_date }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <button class="btn btn-primary" type="submit">Update</button>
                                    <!--end: Datatable-->
                                </div>

                            </form>
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
