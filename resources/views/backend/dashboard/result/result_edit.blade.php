@extends('backend.layouts.master')
@section('title', 'Edit Result')
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Edit Student Result</h5>
                    </div>
                    <!--end::Page Heading-->
                </div>
                <!--end::Info-->
            </div>
        </div>
        <!--end::Subheader-->
        @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Card-->
                <div class="card card-custom">
                    <div class="card-header flex-wrap py-5">
                        <div class="card-title">
                            <h3 class="card-label">Edit a result for class wise..
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('submission.result.update') }}" method="post">
                            @csrf
                            @method('put')
                            <!--begin: Datatable-->
                            <table class="table" id="">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th>imag</th>
                                        <th>Name</th>
                                        <th>Roll</th>
                                        <th>Class</th>
                                        <th>Subject</th>
                                        <th>Mark <span class="text-danger">*</span></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($results as $result)
                                    <tr>
                                        <input type="hidden" name="result_id[]" value="{{$result->id}}">

                                        <td class="text-center">{{ $loop->index + 1 }}</td>
                                        <td class="text-center">
                                            <img src=" {{ asset('defaults/noimage/no_img.jpg') }}"
                                                style="width: 50px; height:60px;">
                                        </td>
                                        <td>{{ $result->student->applicant_name }}</td>
                                        <td class="text-center">{{ $result->student->roll }}</td>
                                        <td>{{ $result->group->name }}</td>
                                        <td>{{ $result->subject->name }}</td>
                                        <td><input type="number" name="mark[]" value="{{ $result->mark }}"
                                                class="form-control" placeholder="Enter mark"></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                            <!--end: Datatable-->
                        </form>
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
