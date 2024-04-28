@extends('backend.layouts.master')
@section('title', 'Search Found')
@section('content')
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            margin: 0;
        }


        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #030303;
        }

        th,
        td {
            padding: 8px;
            border: 1px solid #030303;
        }

        .heading-row {
            text-align: center;
            color: #000;
            font-size: 20px;
        }

        /* Responsive table */
        @media screen and (max-width: 600px) {
            table {
                border: 0;
            }

            thead {
                display: none;
            }

            tr {
                border-bottom: 2px solid #ddd;
                display: block;
                margin-bottom: 10px;
            }

            td {
                border-bottom: none;
                display: block;
                text-align: right;
                /* Align text to the right for better readability */
            }

            td:before {
                content: attr(data-label);
                float: left;
                font-weight: bold;
                text-transform: uppercase;
            }
        }

        .sheet-heading-box {
            width: 100%;
            display: flex;
            padding: 15px 12px;
            border: 6px solid #2fbe04;
        }

        .sheet-heading-box>.seet-heading {
            width: 100%;
            text-align: center;
        }

        .print-section {
            background: #fe7070;
            padding: 10px 10px;
        }

        .sheet-heading-box>.seet-heading>h3 {}

        .sheet-heading-box>.seet-heading>h4 {}

        .sheet-heading-box>.seet-heading>h5 {}
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
                        <h5 class="text-dark font-weight-bold my-1 mr-5">Result Found</h5>
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
                            <h3 class="card-label">Mark Sheet for class wise student
                            </h3>
                        </div>
                        <div class="card-toolbar">
                            <!--begin::Button-->
                            <a href="#" id="printButton" class="btn btn-primary font-weight-bolder">
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
                                </span>Print</a>
                            <!--end::Button-->
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="print-section" style="background: #fe7070;
                        padding: 10px 10px;">
                            <div class="sheet-heading-box">
                                <div class="logo">
                                    <img src="{{ asset('assets/default/print-logo.png') }}" alt="">
                                </div>
                                <div class="seet-heading">
                                    <h3>Purbo Hoktullah High School</h3>
                                    <h5>পূর্ব হকতুল্লাহ, বদরপুর, পটুয়াখালী</h5>
                                    <h4>{{ $results->first()->exam_type }}</h4>
                                    <h3>Number sheet - {{ $results->first()->year }}</h3>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td colspan="4" class="heading-row">
                                                {{ $results->first()->student->group->name }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><strong>Roll No:</strong>
                                                {{ $results->first()->student->roll }}</td>
                                            <td colspan="2"><strong>Birth Registration No:</strong>
                                                {{ $results->first()->student->birth_reg_no }}</td>

                                        </tr>
                                        <tr>
                                            <td style="" colspan="2"><strong>Name:</strong>
                                                {{ $results->first()->student->applicant_name }}</td>
                                            <td colspan="2"><strong>Date Of Birth:</strong>
                                                {{ $results->first()->student->date_of_birth }}</td>

                                        </tr>
                                        <tr>
                                            <td colspan="2"><strong>Father's Name:</strong>
                                                {{ $results->first()->student->father_name }}
                                            </td>
                                            <td colspan="2"><strong>Mother's Name:</strong>
                                                {{ $results->first()->student->mother_name }}
                                            </td>
                                        </tr>
                                        <!-- Add more rows as needed -->
                                        <tr>
                                            <th style="width:20%; text-align:center;">SL</th>
                                            <th style="width:45%; text-align:center;">Subject</th>
                                            <th style="width:45%; text-align:center;">Subject Code</th>
                                            <th style="width:30%; text-align:center;">Number obtained</th>
                                        </tr>

                                        @foreach ($results as $result)
                                            <tr style="width: 100%;">
                                                <td style="width:20%; text-align:center;">{{ $loop->index + 1 }}</td>
                                                <td style="width:45%">{{ $result->subject->name }}</td>
                                                <td style="width:45%">{{ $result->subject->code }}</td>
                                                <td style="width:30%; text-align:center;">{{ $result->mark }}</td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <th style=" text-align:right;" colspan="3">Total marks obtained</th>
                                            <th style="width:50%; text-align:center;">{{ $total_marks }}</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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
    <script src="{{ asset('defaults/print/printThis.js') }}"></script>
    <script type="text/javascript">
        $('#printButton').click(function() {
            $('.print-section').printThis({
                // debug: false,
                // importCSS: false,
                // importStyle: false,
                // printContainer: true,
                loadCSS: "{{asset('defaults/print/printThis.css')}}",
                // removeInline: false,
                // printDelay: 0,
                // header: null,
                // formValues: false
            });
        })
    </script>
@endpush
