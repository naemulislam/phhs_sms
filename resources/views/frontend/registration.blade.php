@extends('frontend.layout.master')
@section('title','Registration')
@section('content')
<section class="register-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="register-box">
                        <div class="row text-white">
                            <div class="col">
                                <div class="reg-title">
                                    <h1>REGISTRATION RAHIMA AZIZ FOUNDATION</h1>
                                </div>
                            </div>
                        </div>
                        <form action="" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address*</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            aria-describedby="emailHelp" placeholder="Enter email">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Program *</label>
                                        <select name="program" class="form-control">
                                            <Option>Nazirah Program</Option>
                                            <Option>Nazirah Program</Option>
                                            <Option>Nazirah Program</Option>
                                            <Option>Nazirah Program</Option>
                                            <Option>Nazirah Program</Option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tution Fee*</label>
                                        <input type="text" class="form-control" name="Tution"
                                            placeholder="Enter Tution Fee">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Select Year Of Admission *</label>
                                        <select name="program" class="form-control">
                                            <Option>Select Your Year</Option>
                                            <Option>2020-2021</Option>
                                            <Option>2021-2022</Option>
                                            <Option>2022-2023</Option>
                                            <Option>2023-2024</Option>
                                            <Option>2024-2025</Option>

                                        </select>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <label>Number of Children attending AIA</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="one" id="inlineRadio1"
                                            value="option1">
                                        <label class="form-check-label">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="two" value="option2">
                                        <label class="form-check-label">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="three" value="option2">
                                        <label class="form-check-label">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="foure" value="option2">
                                        <label class="form-check-label">4</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="five" value="option2">
                                        <label class="form-check-label">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="six" value="option2">
                                        <label class="form-check-label">6</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address - Street *</label>

                                        <textarea class="form-control" name="address"
                                            placeholder="Enter Address"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">City *</label>
                                        <input type="text" class="form-control" name="city" placeholder="Enter City">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">State *</label>
                                        <input type="text" class="form-control" name="state" placeholder="Enter State">

                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Zip Code *</label>
                                        <input type="text" class="form-control" name="zip" placeholder="Enter zip">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Home Phone *</label>
                                        <input type="text" class="form-control" name="hphone"
                                            placeholder="Enter Home Phone">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mother's Full Name *</label>

                                        <input type="text" class="form-control" name="mname" placeholder="Your Answer">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mother's Email</label>
                                        <input type="email" class="form-control" name="memail"
                                            placeholder="Your Answer">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Mother's Cell Phone</label>
                                        <input type="text" class="form-control" name="mphone" placeholder="Your Answer">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Father's Full Name *</label>

                                        <input type="text" class="form-control" name="fname" placeholder="Your Answer">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Father's Email</label>
                                        <input type="email" class="form-control" name="femail"
                                            placeholder="Your Answer">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Father's Cell Phone</label>
                                        <input type="text" class="form-control" name="fphone" placeholder="Your Answer">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Child #1 (First Name,Last Name, Grade) *</label>

                                        <input type="text" class="form-control" name="child1" placeholder="Your Answer">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Child #2 (First Name,Last Name,Grade)</label>
                                        <input type="email" class="form-control" name="child2"
                                            placeholder="Your Answer">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Child #3 (First Name,Last Name,Grade)</label>
                                        <input type="text" class="form-control" name="child3" placeholder="Your Answer">

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Child #4 (First Name,Last Name,Grade)</label>

                                        <input type="text" class="form-control" name="child4" placeholder="Your Answer">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Child #5 (First Name,Last Name, Grade)</label>
                                        <input type="email" class="form-control" name="child5"
                                            placeholder="Your Answer">

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Child #6 (First Name,Last Name, Grade)</label>
                                        <input type="text" class="form-control" name="child6" placeholder="Your Answer">

                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-6">
                                    <div class="">
                                        <label for="exampleInputEmail1">Transportation (If Required)</label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label">
                                            Pick up address same as above
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label">
                                            Drop off address same as above
                                        </label>
                                    </div>

                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Different Pick Up Address:</label>

                                        <input type="text" class="form-control" name="differntpua"
                                            placeholder="Your Answer">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Different Drop Off Address:</label>

                                        <input type="text" class="form-control" name="differntdoa"
                                            placeholder="Your Answer">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <button type="submit" class="regsub-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection