@extends('front.master')

@section('body')
	<div class="container">
        <section class="form-elegant" style="margin: 111px 119px;">
        <div class="card">

            <h4 class="text-center" style="margin-top: 18px;">
                <strong>Sign up</strong>
            </h4>

            <!--Card content-->
            <div class="card-body">

                <!-- Form -->
                    {{Form::open(['route'=>'newCustomer','method'=>'post','class'=>'text-center'])}}

                    <div class="form-row">
                        <div class="col">
                            <!-- First name -->
                            <div class="md-form">
                                <input type="text" id="materialRegisterFormFirstName" class="form-control" name="fname">
                                <label for="materialRegisterFormFirstName">First name</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- First name -->
                            <div class="md-form">
                                <input type="text" id="materialRegisterFormFirstName" class="form-control" name="lname">
                                <label for="materialRegisterFormFirstName">Last Name</label>
                            </div>
                        </div>
                    </div>

                    <!-- E-mail -->
                    <div class="md-form mt-0">
                        <input type="email" id="materialRegisterFormEmail" class="form-control" name="email">
                        <span class="text-danger">{{$errors->has('email') ? $errors->first('email') : ' '}}</span>
                        <label for="materialRegisterFormEmail">E-mail</label>
                    </div>

                    <!-- Password -->
                    <div class="md-form">
                        <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name="password">
                        <span class="text-danger">{{$errors->has('password') ? $errors->first('password') : ' '}}</span>
                        <label for="materialRegisterFormPassword">Password</label>
                        <small id="materialRegisterFormPasswordHelpBlock" class="form-text text-muted mb-4">
                            At least 8 characters and 1 digit
                        </small>
                    </div>

                    <!-- Phone number -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="phone">
                        <label for="materialRegisterFormPhone">Phone number</label>
                        <small id="materialRegisterFormPhoneHelpBlock" class="form-text text-muted mb-4">
                            Optional - for two step authentication
                        </small>
                    </div>

                    <!-- Newsletter -->
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="materialRegisterFormNewsletter">
                        <label class="form-check-label" for="materialRegisterFormNewsletter">Subscribe to our newsletter</label>
                    </div>

                    <!-- Sign up button -->
                    
                    <button type="submit" class="btn btn-danger btn-block my-4 btn-rounded waves-effect z-depth-0">Sign up</button>
                    
                    <hr>

                    <!-- Terms of service -->
                    <p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="" target="_blank">terms of service</a>

                {{Form::close()}}
                <!-- Form -->

            </div>

        </div>

    </section>

    </div>
@endsection