@extends('backend.layouts.master')
@section('title', 'Student list')
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Student Active List</h5>
                        <!--end::Page Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                            <li class="breadcrumb-item text-muted">
                                <a href="javascript:;" class="text-muted">student admission Active</a>
                            </li>
                        </ul>
                        <!--end::Breadcrumb-->
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
                            <h3 class="card-label">Student Admission Active List
                                <span class="d-block text-muted pt-2 font-size-sm">All student admission active here</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <div class="dropdown mr-2">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    @php
                                        $requestGroupName = \App\Models\Group::where('id', request()->group_id)->first();
                                    @endphp
                                    {{ $requestGroupName->name ?? 'Select Class' }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="{{ route('student.index') }}">All Class</a>
                                    @foreach ($groups as $group)
                                        <a class="dropdown-item"
                                            href="{{ route('student.index', ['group_id' => $group->id]) }}">{{ $group->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <!--begin::Button-->
                            <a href="@if (Auth::user()->role == 'admin') {{ route('student.create') }} @endif"
                                class="btn btn-primary font-weight-bolder">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Flatten.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <circle fill="#000000" cx="9" cy="15" r="6" />
                                            <path
                                                d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                                fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>New Student</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table" id="dataTableB4">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Class</th>
                                    <th>Roll</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <img style="width:70px ;"
                                                src="{{ $row->user->profile_id ? $row->user->image->file : asset('defaults/noimage/no_img.jpg') }}"
                                                alt="">
                                        </td>
                                        <td>{{ $row->applicant_name }}</td>
                                        <td>{{ $row->group->name }}</td>
                                        <td>{{ $row->roll }}</td>
                                        <td>
                                            @if ($row->user->is_active == 1)
                                                <a href="#"
                                                    class="btn label label-lg label-light-success label-inline"
                                                    data-toggle="modal"
                                                    @if (Auth::user()->role == 'admin') data-target="#row_status_{{ $row->id }} " @endif>
                                                    Active</a>
                                            @elseif($row->user->is_active == 0)
                                                <a href="#" class="btn label label-lg label-light-danger label-inline"
                                                    data-toggle="modal"
                                                    @if (Auth::user()->role == 'admin') data-target="#row_status_{{ $row->id }}" @endif>
                                                    Inactive</a>
                                            @endif
                                        </td>

                                        <td class="d-flex">
                                            <a href="{{ route('student.show', $row->id) }}"
                                                class="btn btn-icon btn-success btn-hover-primary btn-xs mx-3"><i
                                                    class="fa fa-eye"></i></a>
                                            @if (Auth::user()->role == 'admin')
                                                <a href="{{ route('student.edit', $row->id) }}"
                                                    class="btn btn-icon btn-success btn-hover-primary btn-xs mx-3"><i
                                                        class="fa fa-edit"></i></a>
                                                <a id="delete" href="{{ route('student.destroy', $row->id) }}"
                                                    class="btn btn-icon btn-danger btn-hover-primary btn-xs mx-3">
                                                    <i class="fa fa-trash"></i></a>
                                            @endif
                                        </td>
                                    </tr>
                                    <!--Row Status -->
                                    <div class="modal fade" data-backdrop="static" id="row_status_{{ $row->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Status</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <i class="fa fa-close"></i>
                                                    </button>
                                                </div>
                                                <form action="{{ route('student.status', $row->id) }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="">Status</label>
                                                            <select name="status" class="form-control">
                                                                <option value="1"
                                                                    @if ($row->user->is_active == 1) selected @endif>Active
                                                                </option>
                                                                <option value="0"
                                                                    @if ($row->user->is_active == 0) selected @endif>
                                                                    Inactive</option>
                                                            </select>

                                                            <div style='color:red; padding: 0 5px;'>
                                                                {{ $errors->has('status') ? $errors->first('status') : '' }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save
                                                            Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
@endsection
