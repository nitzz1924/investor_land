{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','Sign Up')
@section('content')
<div class="py-5" style="background-image: url('{{asset('websiteAssets/images/post-3.jpg')}}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="property-single-content">
                    <div class="about-property wow fadeInUp" data-wow-delay="0.75s">
                        <div class="property-single-subtitle text-center">
                            <h3 class="mb-3 loginhead">Join Us and Explore New Opportunities</h3>
                            <p>Enter Details to Register</p>
                        </div>

                        <div class="property-inquiry-box wow fadeInUp" data-wow-delay="0.5s">
                            <div class="property-inquiry-form">
                                <form id="loginForm" action="#" method="POST">
                                    @csrf
                                    <div class="row">
                                        <!-- User Type Radio Buttons -->
                                        <div class="form-group col-md-12 mb-4 text-center">
                                            <label class="form-label me-3">
                                                <input type="radio" name="user_type" value="user" required> User
                                            </label>
                                            <label class="form-label">
                                                <input type="radio" name="user_type" value="agent" required> Agent
                                            </label>
                                        </div>

                                        <!-- Name Field -->
                                        <div class="form-group col-md-12 mb-4">
                                            <input type="text" name="name" class="form-control form-control-lg" id="name" placeholder="Enter your Name" required>
                                        </div>

                                        <!-- Mobile No. Field -->
                                        <div class="form-group col-md-12 mb-4">
                                            <label for="mobile" class="form-label">Mobile No.</label>
                                            <input type="text" name="mobile" class="form-control form-control-lg" id="mobile" placeholder="Enter your Mobile No." required>
                                        </div>

                                        <!-- Email Address Field -->
                                        <div class="form-group col-md-12 mb-4">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Enter your email" required>
                                        </div>

                                        <!-- Register Button -->
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn-default btn-lg w-100">Register</button>
                                        </div>

                                        <!-- Divider -->
                                        <div class="col-md-12 my-3 text-center">
                                            <hr class="text-muted">
                                        </div>

                                        <!-- Google Login Button -->
                                        <div class="col-md-12 text-center">
                                            <a href="#" class="btn btn-outline-primary btn-lg w-100 d-flex align-items-center justify-content-center">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/google-icon.svg" alt="Google Icon" style="width: 20px; height: 20px; margin-right: 10px;">
                                                Login with Google
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Sign Up Link -->
                            <div class="col-md-12 text-center mt-4">
                                <p>I already have an account <a class="text-decoration-underline" href="{{ route('website.userlogin')}}">Sign In</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
