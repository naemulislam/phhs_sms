@extends('frontend.layout.master')
@section('title', 'Home')
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
                                    <h3>{{$group->name}} এর সমস্ত শিক্ষার্থী</h3>
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
                                            <th scope="col">Name</th>
                                            <th scope="col">Roll</th>
                                            <th scope="col">Class</th>
                                            <th scope="col">Shift</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($students as $student)
                                        <tr>
                                            <th scope="row">{{$loop->iteration}}</th>
                                            <td> <img style="width:50px;" src="@if($student->user->profile_id)
                                                {{$student->user->image->file}} @else
                                                {{ asset('defaults/avatar/avatar.png') }} @endif"
                                                    alt=""></td>
                                            <td>{{$student->applicant_name}}</td>
                                            <td>{{$student->roll}}</td>
                                            <td>{{$student->group->name}}</td>
                                            <td>{{$student->shift}}</td>
                                            <td><button class="btn btn-success studentDetails"
                                                data-name="{{$student->applicant_name}}"
                                                data-roll="{{$student->roll}}"
                                                data-groupName="{{$student->group->name}}"
                                                data-shift="{{$student->shift}}"
                                                data-studentId="{{$student->user->student_id}}"
                                                data-email="{{$student->user->email}}"
                                                data-phone="{{$student->user->phone}}"
                                                ><i class="fa fa-eye"></i></button></td>
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
                        <span><i class="fa fa-graduation-cap"></i> {{$totalStudents}}</span>
                        <p>মোট শিক্ষার্থী</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="achive-box common-shadow">
                        <span><i class="fa fa-male"></i> {{$maleStudents}}</span>
                        <p>মোট ছাত্র</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="achive-box common-shadow">
                        <span><i class="fa fa-female"></i> {{$femaleStudents}}</span>
                        <p>মোট ছাত্রি</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="showDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Student Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-4 mx-auto bg-light">
                            <div class="profile-img">
                                <img style="" src="{{ asset('defaults/avatar/avatar.png') }}" alt="">
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Name : </dd>
                                <dd id="name"></dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Class : </dd>
                                <dd id="class"></dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Roll : </dd>
                                <dd id="roll"></dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Shift : </dd>
                                <dd id="shift"></dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Student id : </dd>
                                <dd id="student_id"></dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Email : </dd>
                                <dd id="email"></dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Phone : </dd>
                                <dd id="phone"></dd>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
@endsection
@push('customjs')
<script>
    $('.studentDetails').on('click', function(){
        $('#showDetails').modal('show');

        const name = $(this).attr('data-name');
        const groupName = $(this).attr('data-groupName');
        const roll = $(this).attr('data-roll');
        const shift = $(this).attr('data-shift');
        const studentId = $(this).attr('data-studentId');
        const email = $(this).attr('data-email');
        const phone = $(this).attr('data-phone');
        console.log(name);

        $('#name').text(name);
        $('#class').text(groupName);
        $('#roll').text(roll);
        $('#shift').text(shift);
        $('#student_id').text(studentId);
        $('#email').text(email);
        $('#phone').text(phone);
    });
</script>

@endpush
