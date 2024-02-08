@extends('frontend.layout.master')
@section('title', 'Teachers')
@section('content')
    <style>
        .profile-img {
            border: 2px solid #2fbe04;
            text-align: center;
        }

        .profile-img img {
            width: 100%;
            padding: 4px;

        }
    </style>
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="heading-title">
                                    <h3>শিক্ষকগণ</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">SL</th>
                                            <th scope="col">Picture</th>
                                            <th scope="col">Teacher Name</th>
                                            <th scope="col">Designation</th>
                                            <th scope="col">Shift</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($teachers as $teacher)
                                            {{-- @dd($user->teacher->designation) --}}
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td> <img style="width:50px;"
                                                        src="{{ asset('defaults/avatar/avatar.png') }}" alt="">
                                                </td>
                                                <td>{{ $teacher->user->name }}</td>
                                                <td>{{ $teacher->designation }}</td>
                                                <td>{{ $teacher->shift }}</td>
                                                <td>
                                                    <a class="btn btn-success teacherDetails"
                                                    data-name="{{$teacher->user->name}}"
                                                    data-designation="{{$teacher->designation}}"
                                                    data-shift="{{$teacher->shift}}"
                                                    data-email="{{$teacher->user->email}}"
                                                    data-phone="{{$teacher->user->phone}}"><i class="fa fa-eye"></i></a>
                                                </td>
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="achive-box common-shadow">
                        <span><i class="fa fa-graduation-cap"></i> {{$totalTeachers}}</span>
                        <p>মোট শিক্ষকগণ</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="achive-box common-shadow">
                        <span><i class="fa fa-male"></i> {{$maleTeachers}}</span>
                        <p>মোট শিক্ষক</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="achive-box common-shadow">
                        <span><i class="fa fa-female"></i> {{$femaleTeachers}}</span>
                        <p>মোট শিক্ষিকা</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <!-- Modal -->
     <div class="modal fade" id="showTeacherDetails" tabindex="-1"
        role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Teacher
                        Information</h5>
                    <button type="button" class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-4 mx-auto bg-light">
                            <div class="profile-img">
                                <img style="width:100%;"
                                    src="{{ asset('defaults/avatar/avatar.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <dd class="col-md-3">Name</dd>
                        <b class="col-md-2">:</b>
                        <dd class="col-md-7"></dd>

                        <dd class="col-md-3">Designation</dd>
                        <b class="col-md-2">:</b>
                        <dd class="col-md-7"></dd>

                        <dd class="col-md-3">Shift</dd>
                        <b class="col-md-2">:</b>
                        <dd class="col-md-7"></dd>

                        <dd class="col-md-3">Email</dd>
                        <b class="col-md-2">:</b>
                        <dd class="col-md-7"></dd>

                        <dd class="col-md-3">Phone</dd>
                        <b class="col-md-2">:</b>
                        <dd class="col-md-7"></dd>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('customjs')
<script>
    $('.teacherDetails').on('click',function(){
        $('#showTeacherDetails').modal('show');
        const name = $(this).attr('data-name');
        const designation = $(this).attr('data-designation');
        const shift = $(this).attr('data-shift');
        const email = $(this).attr('data-email');
        const phone = $(this).attr('data-email');
    });
</script>

@endpush
