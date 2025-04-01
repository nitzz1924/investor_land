{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','Contact')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h1 class="text-anime">Contact us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-details">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Contact Us</h3>
                    <h2 class="text-anime">Contact Details</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="contact-detail-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{asset('websiteAssets/images/icon-address.svg')}}" alt="">
                    </div>

                    <h3>Address</h3>
                    <p>Ajmer, Rajasthan</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-detail-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <img src="{{asset('websiteAssets/images/icon-contactno.svg')}}" alt="">
                    </div>

                    <h3>Phone</h3>
                    <p>(+91) 771-193-0093</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="contact-detail-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="{{asset('websiteAssets/images/icon-email-address.svg')}}" alt="">
                    </div>

                    <h3>Email</h3>
                    <p>investorlandsmedia@gmail.com</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-inquiry-box">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp text-white">Get in Touch</h3>
                    <h2 class="text-anime text-white">Free to Drop Us a Message</h2>
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
                                <input type="text" name="name" class="form-control footerforminput" id="name" placeholder="First Name" required>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="email" class="form-control footerforminput" id="email" placeholder="Last Name" required>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="email" name="phone" class="form-control footerforminput" id="phone" placeholder="Email" required>
                            </div>

                            <div class="form-group col-md-6 mb-4">
                                <input type="text" name="subject" class="form-control footerforminput" id="subject" placeholder="Phone" required>
                            </div>

                            <div class="form-group col-md-12 mb-4">
                                <textarea name="msg" class="form-control footerforminput" id="msg" rows="4" placeholder="Address" required></textarea>
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
<div class="google-location-map">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Google Map</h3>
                    <h2 class="text-anime">How to Reach us?</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Google Map Iframe Start -->
                <div class="google-map-box wow fadeInUp" data-wow-delay="0.5s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1116357.3481785401!2d-95.54669749945178!3d39.389498766353576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sin!4v1707738120250!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
