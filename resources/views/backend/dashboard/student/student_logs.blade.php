@extends('backend.layouts.master')
@section('title', 'Student Logs')
@section('content')
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Student Info Search</h5>
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
            <div class="container-fluid">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">You can find students information from here..
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('student.info.search') }}" method="GET">
                            @csrf
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label>Class <span class="text-danger">*</span></label>
                                        <select class="form-control" name="group_id" id="">
                                            <option selected disabled>Select a class</option>
                                            @foreach ($groups as $group)
                                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('department')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label> Session year <span class="text-danger">*</span></label>
                                        <select class="form-control" name="session_year" id="year">
                                            <option selected disabled>Select a session year</option>
                                            @foreach ($years as $year)
                                            <option value="{{ $year->session_year }}">{{$year->session_year}}</option>
                                            @endforeach
                                        </select>
                                        @error('year')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <label></label>
                                    <div class="form-group mt-2">
                                        <button class="btn btn-info" type="submit">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!--begin: Datatable-->
                        <table class="table" id="dataTableB4">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Roll</th>
                                    <th>Session Year</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($student_logs as $student)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$student->student->applicant_name}}</td>
                                    <td>{{$student->group->name}}</td>
                                    <td>{{$student->roll}}</td>
                                    <td>{{$student->session_year}}</td>
                                    <td>
                                        <a href="{{ route('student.info.show', $student->id) }}"
                                            class="btn btn-icon btn-success btn-hover-primary btn-xs mx-3"><i
                                                class="fa fa-eye"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!--end: Datatable-->
                    </div>
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
    <!-- Add Modal -->
@endsection
@push('scripts')


@endpush
