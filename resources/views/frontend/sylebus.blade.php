@extends('frontend.layout.master')
@section('title', 'Sylebus')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>পাঠ্যক্রম</h3>
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
                                            <th scope="col">Slybus type</th>
                                            <th scope="col">Sylebus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($slybuses as $slybuse)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $slybuse->year }}</td>
                                                <td>{{ $slybuse->group->name }}</td>
                                                <td>{{ $slybuse->section }}</td>
                                                <td>{{ $slybuse->shift }}</td>
                                                <td>{{ $slybuse->slybus_type }}</td>
                                                <td><a href="{{ asset('storage/' . $slybuse->document) }}" download
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
