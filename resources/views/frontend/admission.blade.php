@extends('frontend.layout.master')
@section('title','Admission form')
@section('content')
<style>
    .cart-collapse {
        text-decoration: none !important;
        color: #000;
    }

    .StripeElement {
        box-sizing: border-box;
        height: 40px;
        width: 100%;
        padding: 10px 12px;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }

    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }

    .StripeElement--invalid {
        border-color: #fa755a;
    }

    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;
    }

    .note {
        text-align: center;
        height: 80px;
        background: -webkit-linear-gradient(left, #04a549, #0a3a19);
        color: #fff;
        font-weight: bold;
        line-height: 80px;
        padding-top: 20px;
    }

    .form-content {
        padding: 5%;
        border: 1px solid #ced4da;
        margin-bottom: 2%;
    }

    .form-control {
        border-radius: 1.5rem;
    }

    label {
        color: #000;
    }

    .btnSubmit {
        border: none;
        border-radius: 1.5rem;
        padding: 1%;
        width: 20%;
        cursor: pointer;
        background: #0062cc;
        color: #fff;
    }

    aks-file-upload {
        width: 310px;
        display: block;
        margin: 0 auto;
        margin-top: 4rem;
    }

    #uploadfile {
        width: 80%;
        margin: 0 auto;
        color: #002c7b;
        line-height: 1.5;
        margin-top: 2rem;
        margin-bottom: 2rem;
    }
</style>
<?php

use App\Models\Studentadmission;

$seat = $setting->admission_quota; 
$studentCount = Studentadmission::count(); 
$vacant = $seat - $studentCount;      
?>

@if($seat == $studentCount)
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <p>Please Try to another time. Seats are now full.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div class="container register-form">
    <div class="form">
        <div class="note">
            <h3 class="align-self-center">Applying for the admission.</h3>
        </div>
        <div class="row mx-0">
            <div class="col text-center bg-info text-white py-2">
                <h4>{{$vacant}} seats are Available.</h4>
            </div>
        </div>

        <form action="{{route('payment.store')}}" method="POST" id="payment-form" enctype="multipart/form-data">
            @csrf
            <div class="form-content">
                <div class="card mb-3">
                    <div class="card-header">Basic Details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="">Class Group<span class="text-danger">*</span></label>
                                    <select name="class_id" class="form-control" id="adcategory_id">
                                        <option>Select class group</option>
                                        @foreach($classes as $class)
                                        <option value="{{$class->id}}">{{ $class->class_name}}</option>
                                        @endforeach
                                    </select>

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('class_id'))?($errors->first('class_id')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="admi_name" placeholder="Enter your admission Name" value="{{old('admi_name')}}">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('admi_name'))?($errors->first('admi_name')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Phone Number</label>
                                    <input type="number" class="form-control" placeholder="Enter phone number" name="admi_phone" value="{{old('admi_phone')}}" />
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('admi_phone'))?($errors->first('admi_phone')):''}}</div>
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Admission Date<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" placeholder="Enter admission date" name="admission_date" value="{{old('admission_date')}}" />
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('admission_date'))?($errors->first('admission_date')):''}}</div>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Date of Birth<span class="text-danger">*</span></label>
                                    <input type="date" class="form-control" placeholder="Enter your date of birth" name="date_of_birth" value="{{old('date_of_birth')}}" />
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('date_of_birth'))?($errors->first('date_of_birth')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">place of Birth<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter your place of birth" name="place_of_birth" value="{{old('place_of_birth')}}" />
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('place_of_birth'))?($errors->first('place_of_birth')):''}}</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">picture<span class="text-danger">*</span></label><br>

                                    <input type="file" name="admi_photo" value="{{old('admi_photo')}}" class="demo1" data-jpreview-container="#demo-1-container">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('admi_photo'))?($errors->first('admi_photo')):''}}</div>
                                    <div id="demo-1-container" class="jpreview-container"></div>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Home Address<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Enter home address" name="h_address" value="{{old('h_address')}}" />
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('h_address'))?($errors->first('h_address')):''}}</div>
                                </div>

                            </div>


                        </div>
                        <div class="row">

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">City<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="city" placeholder="Enter your city" value="{{old('city')}}">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('city'))?($errors->first('city')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">State<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="state" placeholder="Enter your state" value="{{old('state')}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('state'))?($errors->first('state')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Zip Code<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="zip_code" placeholder="Enter your zip code" value="{{old('zip_code')}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('zip_code'))?($errors->first('zip_code')):''}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">Documents Details</div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Birth Cirtificate<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file" name="b_cirti" value="{{old('b_cirti')}}">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('b_cirti'))?($errors->first('b_cirti')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Immunization record<span class="text-danger">*</span></label>
                                    <input type="file" class="form-control-file" name="immu_record" value="{{old('immu_record')}}">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('immu_record'))?($errors->first('immu_record')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Proof of address<span class="text-danger">*</span></label><br>
                                    <small>proof of address (electricity bill or bank statement or any official letter with the address)</small>
                                    <input type="file" class="form-control-file" name="proof_address" value="{{old('proof_address')}}">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('proof_address'))?($errors->first('proof_address')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Guardians picture<span class="text-danger">*</span></label><br>

                                    <input type="file" name="guard_pic" value="{{old('guard_pic')}}" class="demo2" data-jpreview-container="#demo-2-container">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('guard_pic'))?($errors->first('guard_pic')):''}}</div>
                                    <div id="demo-2-container" class="jpreview-container"></div>

                                </div>


                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">physical health report from the doctor</label>

                                    <input type="file" class="form-control-file" name="physical_health" value="{{old('physical_health')}}">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('physical_health'))?($errors->first('physical_health')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">most recent report card from previous school</label>

                                    <input type="file" class="form-control-file" name="mrrcfps" value="{{old('mrrcfps')}}">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('mrrcfps'))?($errors->first('mrrcfps')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="">Homeschooling registration acceptance letter</label>

                                    <input type="file" class="form-control-file" name="hsral" value="{{old('hsral')}}">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('hsral'))?($errors->first('hsral')):''}}</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">Guardian Details</div>
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Father Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="father_name" placeholder="Enter your father name" value="{{old('father_name')}}">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('father_name'))?($errors->first('father_name')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Father Call<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="father_call" placeholder="Enter your father call" value="{{old('father_call')}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('father_call'))?($errors->first('father_call')):''}}</div>
                                </div>
                            </div>

                        </div>
                        <div class="row">

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Mother Name<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="mother_name" placeholder="Enter your mother name" value="{{old('mother_name')}}">

                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('mother_name'))?($errors->first('mother_name')):''}}</div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Mother Call<span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="mother_call" placeholder="Enter your mother call" value="{{old('mother_call')}}">
                                    <div style='color:red; padding: 0 5px;'>{{($errors->has('mother_call'))?($errors->first('mother_call')):''}}</div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-header">Payment Details</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="subs-body mt-3">
                                    <div class="subs-payment">
                                        <div class="subs-step">
                                            <p class="mb-2">Enter your cart number</p>

                                        </div>

                                        <div class="subs-payment-form">
                                            <div class="form-row">
                                                <label for="card-element">
                                                    Credit or debit card
                                                </label>
                                                <div id="card-element">
                                                    <!-- A Stripe Element will be inserted here. -->
                                                </div>

                                                <!-- Used to display form errors. -->
                                                <div id="card-errors" role="alert"></div>
                                            </div>

                                        </div>

                                    </div>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btnSubmit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endif

@section('customjs')



<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    // Create a Stripe client.
    var stripe = Stripe('pk_test_51KUbT6LEylh30WQ8D6GJ38yeCiUAxpzuTnsVVQHYKTlGLgkwnKUZQ6r1JDnghViWhuKosRw86JQyblDxD5t9OHYL00HXjfO0Ci');
    // Create an instance of Elements.
    var elements = stripe.elements();
    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
        base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
                color: '#aab7c4'
            }
        },
        invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
        }
    };
    // Create an instance of the card Element.
    var card = elements.create('card', {
        style: style
    });
    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');
    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        var displayError = document.getElementById('card-errors');
        if (event.error) {
            displayError.textContent = event.error.message;
        } else {
            displayError.textContent = '';
        }
    });
    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error.
                var errorElement = document.getElementById('card-errors');
                errorElement.textContent = result.error.message;
            } else {
                // Send the token to your server.
                stripeTokenHandler(result.token);
            }
        });
    });
    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('payment-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);
        // Submit the form
        form.submit();
    }
</script>

<script>
    $('input[type="file"]').prettyFile();
    $('.demo1').jPreview();
</script>
<script>
    $('.demo2').jPreview();
</script>



@endsection
@endsection