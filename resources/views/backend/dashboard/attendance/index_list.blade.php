@extends('backend.layouts.master')
@section('title', 'Attendance List')
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
                                <h3 class="card-title">Attendance List</h3>

                            </div>
                            <!--begin::Form-->
                            <div class="card-body">
                                <!--begin: Datatable-->
                                <table class="table table-separate table-head-custom table-checkable" id="datatable">
                                    <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Class</th>
                                            <th>Subject</th>
                                            <th>Attendance Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($attendances as $row)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $row->group->name }}</td>
                                                <td>{{ $row->subject->name }}</td>
                                                <td>{{ $row->attendance_date }}</td>
                                                <td>
                                                    <a href="{{ route('attendance.show', [
                                                        'date' => $row->attendance_date,
                                                        'group' => $row->group_id,
                                                        'subject' => $row->subject_id,
                                                    ]) }}"
                                                        class="btn btn-icon btn-info btn-hover-primary btn-xs mx-3"><i
                                                            class="fa fa-eye"></i></a>
                                                    <a id="delete"
                                                        href="{{ route('attendance.delete', [
                                                            'date' => $row->attendance_date,
                                                            'group' => $row->group_id,
                                                            'subject' => $row->subject_id,
                                                        ]) }}"
                                                        class="btn btn-icon btn-danger btn-hover-primary btn-xs mx-3"><i
                                                            class="fa fa-trash"></i></a>

                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                                <!--end: Datatable-->
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

    <script>
        $(document).ready(function() {
            $('#datatable').DataTable();
        });
    </script>

@endsection
@endsection
