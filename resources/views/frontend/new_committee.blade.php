@extends('frontend.layout.master')
@section('title', 'Committees')
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
                                    <h3>চলতি কমিটি</h3>
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
                                            <th scope="col">Committee Name</th>
                                            <th scope="col">Position</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($committees as $committee)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td> <img style="width:50px;"
                                                        src="@if ($committee->image) {{ asset('storage/'.$committee->image) }}@else{{ asset('defaults/avatar/avatar.png') }} @endif"
                                                        alt="">
                                                </td>
                                                <td>{{ $committee->name }}</td>
                                                <td>{{ $committee->designation }}</td>
                                                <td>{{ $committee->phone }}</td>
                                                <td>
                                                    <a class="btn btn-success staffDetails"
                                                        data-name="{{ $committee->name }}"
                                                        data-designation="{{ $committee->designation }}"
                                                        data-gender="{{ $committee->gender }}"
                                                        data-phone="{{ $committee->phone }}"
                                                        data-religion="{{ $committee->religion }}"
                                                        data-address="{{ $committee->address }}"
                                                        data-image="{{ $committee->image }}"><i
                                                            class="fa fa-eye text-white"></i></a>
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

    <!-- Modal -->
    <div class="modal fade" id="showStaffDetails" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Committee Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-md-4 mx-auto bg-light">
                            <div class="profile-img">
                                <img style="width:100%;" id="image" alt="">
                                {{-- <img style="width:100%;" src="{{ asset('defaults/avatar/avatar.png') }}" alt=""> --}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Name: </dd>
                                <dd id="name"></dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Position: </dd>
                                <dd id="designation"></dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Phone: </dd>
                                <dd id="phone"></dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Gender: </dd>
                                <dd id="gender"></dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Religion: </dd>
                                <dd id="religion"></dd>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="d-flex">
                                <dd class="mr-3">Address: </dd>
                                <dd id="address"></dd>
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
        $('.staffDetails').on('click', function() {
            $('#showStaffDetails').modal('show');
            const name = $(this).attr('data-name');
            const designation = $(this).attr('data-designation');
            const gender = $(this).attr('data-gender');
            const religion = $(this).attr('data-religion');
            const phone = $(this).attr('data-phone');
            const address = $(this).attr('data-address');
            const src = $(this).attr('data-image');
            // const default = $(this).attr('data-default');

            $('#image').attr('src', src);

            $('#name').text(name);
            $('#designation').text(designation);
            $('#phone').text(phone);
            $('#gender').text(gender);
            $('#religion').text(religion);
            $('#address').text(address);

        });
    </script>
@endpush
