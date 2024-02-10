@extends('frontend.layout.master')
@section('title', 'All Notice')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>সকল নোটিশ</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Title</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allNotices as $allNotice)
                                            <tr>
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                @php
                                                    $date = \Carbon\Carbon::parse($allNotice->date)->format('d/m/Y');
                                                @endphp
                                                <td>{{ $date }}</td>
                                                <td>{{ $allNotice->title }}</td>
                                                <td>{{ $allNotice->description }}</td>
                                                <td><a href="{{ asset('storage/' . $allNotice->document) }}" download
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
