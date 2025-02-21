{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','Login')
@section('content')
<div class="py-5" style="background-image: url('{{asset('websiteAssets/images/post-3.jpg')}}'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="property-single-content">
                    <div class="about-property wow" data-wow-delay="0.75s">
                        <div class="property-single-subtitle text-center">
                            <h3 class="mb-3 loginhead">Your Trusted Partner in Real Estate</h3>
                            <p>Enter your email address and we'll send you an email with instructions to reset your password.</p>
                        </div>
                        <div class="property-inquiry-box wow" data-wow-delay="0.5s">
                            <div class="property-inquiry-form">
                                <form id="" action="{{ route('email.sendMail') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <!-- Email Field -->
                                        <div class="form-group col-md-12 mb-4">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" name="email" class="form-control form-control-lg" id="email" placeholder="Enter your email" required>
                                        </div>
                                         <div class="col-md-12 text-center">
                                            <button type="submit" class="btn-default btn-lg w-100">Reset Password</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Sign Up Link -->
                            <div class="col-md-12 text-center mt-4">
                                <p>New here? <a class="text-decoration-underline" href="{{ route('website.registration')}}">Sign Up</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
