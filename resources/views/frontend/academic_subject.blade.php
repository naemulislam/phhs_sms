@extends('frontend.layout.master')
@section('title', 'Academic Subject')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>একাডেমিক বিষয়</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            @foreach ($groups as $group)
                                <div class="col-lg-4 col-md-4 col-sm-12 mb-3">
                                    <div class="card subject-detles common-shadow">
                                        <div class="class-name m-2">
                                            <h3>{{ $group->name }}</h3>
                                        </div>
                                        {{-- @dd($group->subjects) --}}
                                        <div class="single_class">
                                            @foreach ($group->subjects as $subjectName)
                                                <p>{{$subjectName->name}}</p>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
