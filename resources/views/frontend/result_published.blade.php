@extends('frontend.layout.master')
@section('title', 'Result Published')
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
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-3">
                    <div class="common-shadow p-3">
                        <div class="row">
                            <div class="col">
                                <div class="header-btn-section d-flex justify-content-between mb-3">
                                    <a href="#" class="text-left btn btn-primary">Back</a>
                                    <a href="#" class="text-right btn btn-success">Print</a>
                                </div>
                                <div class="heading-title">
                                    <h3>ব্যক্তিগত ফলাফল</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
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
                                                        <th style="width:50%; text-align:center;">{{ $totalMarks }}</th>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
