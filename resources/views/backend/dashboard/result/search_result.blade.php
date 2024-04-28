@extends('backend.layouts.master')
@section('title', 'Search Result')
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Search Result</h5>
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
                            <h3 class="card-label">Search the result for class wise..
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('submission.result.search.found') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label>Class <span class="text-danger">*</span></label>
                                        <select class="form-control" name="group_id" id="group_id">
                                            <option selected disabled>Select a class</option>
                                            @foreach ($groups as $group)
                                                <option value="{{ $group->id }}">{{ $group->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('group_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3 mb-3">
                                    <div class="form-group">
                                        <label>Exam Year<span class="text-danger">*</span></label>
                                        <select class="form-control" name="year">
                                            <option selected disabled>Select the exam year</option>
                                            @foreach ($years as $year)
                                                <option value="{{ $year->year }}">{{ $year->year }}</option>
                                            @endforeach
                                        </select>
                                        @error('year')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="form-group">
                                        <label>Exam type <span class="text-danger">*</span></label>
                                        <select class="form-control" name="exam_type">
                                            <option selected disabled>Select a exam type</option>
                                            <option value="Half yearly examination">Half Yearly Examination</option>
                                            <option value="Annual examination">Annual Examination</option>
                                            <option value="Class test examination">Class Test Examination</option>
                                        </select>
                                        @error('exam_type')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-2 mb-3">
                                    <div class="form-group">
                                        <label>Roll<span class="text-danger">*</span></label>
                                        <input type="number" name="roll" class="form-control"
                                            placeholder="Enter roll" value="">
                                        @error('roll')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Search</button>
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
@push('scripts')
    <script>
        //GEt all students by department id
        $('#group_id').on('change', function() {
            var group_id = $(this).val();

            $.ajax({
                type: "get",
                url: "{{ url('/school/portal/get/students/list') }}/" + group_id,
                dataType: 'html',
                success: function(res) {
                    // console.log(res);
                    $('#getStudents').html(res);
                }
            });

        });
    </script>
    <script>
        //GEt all subjects by department id
        $('#group_id').on('change', function() {
            var group_id = $(this).val();

            $.ajax({
                type: "get",
                url: "{{ url('/school/portal/get/subjects/list') }}/" + group_id,
                dataType: 'html',
                success: function(res) {
                    // console.log(res);
                    $('#getSubjects').html(res);
                }
            });

        });
    </script>
@endpush
