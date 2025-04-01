{{-- ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title', 'Delete Account')
@section('content')
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header-box ">
                        <h1 class="text-anime">Delete My Account</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="contact-inquiry-box mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h3 class="wow fadeInUp text-white">Get in Touch</h3>
                        <h2 class="text-anime text-white">Fill this form to request for account deletion</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="contact-form wow fadeInUp" data-wow-delay="0.75s">
                        <form id="contactForm" action="#" method="POST" data-toggle="validator">
                            @csrf
                            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-responseAgent">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="name" class="form-control footerforminput" id="name"
                                        placeholder="First Name" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="email" class="form-control footerforminput" id="email"
                                        placeholder="Last Name" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name="phone" class="form-control footerforminput" id="phone"
                                        placeholder="Email" required>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="subject" class="form-control footerforminput" id="subject"
                                        placeholder="Phone" required>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <textarea name="msg" class="form-control footerforminput" id="msg" rows="4" placeholder="Address"
                                        required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn-default">Submit Now</button>
                                    <div id="msgSubmit" class="h3 text-left hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
