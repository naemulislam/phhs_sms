@extends('backend.layouts.master')
@section('title', 'Result')
@section('content')
    <style>
        .close-icon {
            font-size: 18px;
        }
    </style>
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Result</h5>
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
            <div class="container-fluid">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Class wise Result List
                                <span class="d-block text-muted pt-2 font-size-sm">All result here</span>
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="" data-toggle="modal" data-target="#addmodal"
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
                                </span>New Result</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <!--begin: Datatable-->
                        <table class="table" id="dataTableB4">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Year</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Shift</th>
                                    <th>Exam type</th>
                                    <th>Result type</th>
                                    <th>Document</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($results as $row)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $row->year }}</td>
                                        <td>{{ $row->group->name }}</td>
                                        <td>{{ $row->section ?? 'N/A' }}</td>
                                        <td>{{ $row->shift ?? 'N/A' }}</td>
                                        <td>{{ $row->exam_type ?? 'N/A' }}</td>
                                        <td>{{ $row->result_type ?? 'N/A' }}</td>
                                        <td>
                                            @if ($row->document)
                                                <a class="btn-sm btn-secondary text-danger" target="_blank"
                                                    href="{{ asset('storage/' . $row->document) }}">Document</a>
                                            @else
                                                <span class="btn-sm btn-warning">Blank</span>
                                            @endif
                                        </td>
                                        <td>
                                            @if ($row->is_active == 1)
                                                <a href="#"
                                                    class="btn label label-lg label-light-success label-inline"
                                                    data-toggle="modal" data-target="#row_status_{{ $row->id }}">
                                                    Active</a>
                                            @elseif($row->is_active == 0)
                                                <a href="#" class="btn label label-lg label-light-danger label-inline"
                                                    data-toggle="modal" data-target="#row_status_{{ $row->id }}">
                                                    Inactive</a>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            <a href="#" data-toggle="modal"
                                                data-target="#editmodal_{{ $row->id }}"
                                                class="btn btn-icon btn-info btn-hover-primary btn-xs mx-3"><i
                                                    class="fa fa-edit"></i></a>

                                            <a id="delete" href="{{ route('result.destroy', $row->id) }}"
                                                class="btn btn-icon btn-danger btn-hover-primary btn-xs mx-3">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <!--Row Status -->
                                    <div class="modal fade" id="row_status_{{ $row->id }}" data-backdrop="static"
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
                                                <form action="{{ route('result.status', $row->id) }}" method="post">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="">Status</label>
                                                            <select name="status" class="form-control">
                                                                <option value="1"
                                                                    @if ($row->is_active == true) selected @endif>Active
                                                                </option>
                                                                <option value="0"
                                                                    @if ($row->is_active == false) selected @endif>
                                                                    Inactive</option>
                                                            </select>
                                                            @error('status')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editmodal_{{ $row->id }}" data-backdrop="static"
                                        tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Edit Result</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <i class="fa fa-close"></i>
                                                    </button>
                                                </div>
                                                <form action="{{ route('result.update', $row->id) }}"
                                                    method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="modal-body">
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Year <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="text" name="year"
                                                                        placeholder="Enter year" class="form-control"
                                                                        value="{{ $row->year }}">
                                                                    @error('year')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label>Class <span class="text-danger">*</span></label>
                                                                    <select class="form-control" name="group_id">
                                                                        <option selected disabled>select a class</option>
                                                                        @foreach ($groups as $group)
                                                                            <option
                                                                                {{ $row->group_id == $group->id ? 'selected' : '' }}
                                                                                value="{{ $group->id }}">
                                                                                {{ $group->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Exam type <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="text" name="exam_type"
                                                                        placeholder="Enter exam type" class="form-control"
                                                                        value="{{ $row->exam_type }}">
                                                                    @error('exam_type')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Result type</label>
                                                                    <input type="text" name="result_type"
                                                                        placeholder="Enter result type" class="form-control"
                                                                        value="{{ $row->result_type }}">
                                                                    @error('result_type')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Section</label>
                                                                    <input type="text" name="section"
                                                                        placeholder="Enter section" class="form-control"
                                                                        value="{{ $row->section }}">
                                                                    @error('section')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="">Shift</label>
                                                                    <input type="text" name="shift"
                                                                        placeholder="Enter shif" class="form-control"
                                                                        value="{{ $row->shift }}">
                                                                    @error('shift')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="">Document</label>
                                                                    <input type="file" name="document"
                                                                        class="form-control">
                                                                    @error('document')
                                                                        <span class="text-danger">{{ $message }}</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Update</button>
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
    <!-- Add Modal -->
    <div class="modal fade" id="addmodal" tabindex="-1" data-backdrop="static" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Result</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="fa fa-close"></i>
                    </button>
                </div>
                <form action="{{ route('result.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Year <span class="text-danger">*</span></label>
                                    <input type="number" name="year" placeholder="Enter year" class="form-control"
                                        value="{{ date('Y') }}">
                                    @error('year')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Class <span class="text-danger">*</span></label>
                                    <select class="form-control" name="group_id">
                                        <option selected disabled>select a class</option>
                                        @foreach ($groups as $group)
                                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('group_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Exam type <span class="text-danger">*</span></label>
                                    <input type="text" name="exam_type" placeholder="Enter exam type"
                                        class="form-control" value="{{ old('slybus_type') }}">
                                    @error('exam_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Result type </label>
                                    <input type="text" name="result_type" placeholder="Enter result type"
                                        class="form-control" value="{{ old('slybus_type') }}">
                                    @error('result_type')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Section</label>
                                    <input type="text" name="section" placeholder="Enter section"
                                        class="form-control" value="{{ old('section') }}">
                                    @error('section')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Shift</label>
                                    <input type="text" name="shift" placeholder="Enter shif" class="form-control"
                                        value="{{ old('shift') }}">
                                    @error('shift')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Document <span class="text-danger">*</span></label>
                                    <input type="file" name="document" class="form-control"
                                        accept="png,jpg,jpeg,pdf">
                                    @error('document')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    @if ($errors->all())
        <script>
            toastr.error("Something want wrong");
        </script>
    @endif
@endpush
