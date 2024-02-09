@extends('frontend.layout.master')
@section('title', 'Result')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>ফলাফল</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Year</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Section</th>
                                            <th scope="col">Shift</th>
                                            <th scope="col">Exam type</th>
                                            <th scope="col">Result type</th>
                                            <th scope="col">Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($results as $result)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $result->year }}</td>
                                                <td>{{ $result->group->name }}</td>
                                                <td>{{ $result->section }}</td>
                                                <td>{{ $result->shift }}</td>
                                                <td>{{ $result->exam_type }}</td>
                                                <td>{{ $result->result_type }}</td>
                                                <td><a href="{{ asset('storage/' . $result->document) }}" download
                                                        class="btn btn-primary"><i class="fa fa-download"></i></a></td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
