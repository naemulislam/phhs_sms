@extends('frontend.layout.master')
@section('title', 'Home')
@section('content')
    <section class="my-5">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="heading-title">
                        <h3>পরিসংখ্যান শীট</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 annual-result-section">
        <div class="container">
            <div class="row py-5 self-end">
                <div class="col-lg-10 mx-auto">
                    
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-class6-tab" data-toggle="tab" href="#nav-class6"
                                    role="tab" aria-controls="nav-class6" aria-selected="true">Class-6</a>

                                <a class="nav-item nav-link" id="nav-class7-tab" data-toggle="tab" href="#nav-class7"
                                    role="tab" aria-controls="nav-class7" aria-selected="false">Class-7</a>

                                <a class="nav-item nav-link" id="nav-class8-tab" data-toggle="tab" href="#nav-class8"
                                    role="tab" aria-controls="nav-class8" aria-selected="false">Class-8</a>

                                <a class="nav-item nav-link" id="nav-class9-tab" data-toggle="tab" href="#nav-class9"
                                    role="tab" aria-controls="nav-class9" aria-selected="false">Class-9</a>

                                <a class="nav-item nav-link" id="nav-class10-tab" data-toggle="tab" href="#nav-class10"
                                    role="tab" aria-controls="nav-class10" aria-selected="false">Class-10</a>
                            </div>
                        </nav>
                        <div class="result-box">
                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-class6" role="tabpanel"
                                aria-labelledby="nav-class6-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="result-table">
                                            <table class="table table-bordered text-white">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Yesr</th>
                                                        <th scope="col">No. of Examinees</th>
                                                        <th scope="col">Attend Examinees</th>
                                                        <th scope="col">A+</th>
                                                        <th scope="col">A</th>
                                                        <th scope="col">A-</th>
                                                        <th scope="col">B-D</th>
                                                        <th scope="col">Fail</th>
                                                        <th scope="col">Total Pass</th>
                                                        <th scope="col">% Of Pass</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">2023</th>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-class7" role="tabpanel" aria-labelledby="nav-class7-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="result-table">
                                            <table class="table table-bordered text-white">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Yesr</th>
                                                        <th scope="col">No. of Examinees</th>
                                                        <th scope="col">Attend Examinees</th>
                                                        <th scope="col">A+</th>
                                                        <th scope="col">A</th>
                                                        <th scope="col">A-</th>
                                                        <th scope="col">B-D</th>
                                                        <th scope="col">Fail</th>
                                                        <th scope="col">Total Pass</th>
                                                        <th scope="col">% Of Pass</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">2023</th>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-class8" role="tabpanel" aria-labelledby="nav-class8-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="result-table">
                                            <table class="table table-bordered text-white">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Yesr</th>
                                                        <th scope="col">No. of Examinees</th>
                                                        <th scope="col">Attend Examinees</th>
                                                        <th scope="col">A+</th>
                                                        <th scope="col">A</th>
                                                        <th scope="col">A-</th>
                                                        <th scope="col">B-D</th>
                                                        <th scope="col">Fail</th>
                                                        <th scope="col">Total Pass</th>
                                                        <th scope="col">% Of Pass</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">2023</th>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-class9" role="tabpanel" aria-labelledby="nav-class9-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="result-table">
                                            <table class="table table-bordered text-white">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Yesr</th>
                                                        <th scope="col">No. of Examinees</th>
                                                        <th scope="col">Attend Examinees</th>
                                                        <th scope="col">A+</th>
                                                        <th scope="col">A</th>
                                                        <th scope="col">A-</th>
                                                        <th scope="col">B-D</th>
                                                        <th scope="col">Fail</th>
                                                        <th scope="col">Total Pass</th>
                                                        <th scope="col">% Of Pass</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">2023</th>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-class10" role="tabpanel" aria-labelledby="nav-class10-tab">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="result-table">
                                            <table class="table table-bordered text-white">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Yesr</th>
                                                        <th scope="col">No. of Examinees</th>
                                                        <th scope="col">Attend Examinees</th>
                                                        <th scope="col">A+</th>
                                                        <th scope="col">A</th>
                                                        <th scope="col">A-</th>
                                                        <th scope="col">B-D</th>
                                                        <th scope="col">Fail</th>
                                                        <th scope="col">Total Pass</th>
                                                        <th scope="col">% Of Pass</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">2023</th>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
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
