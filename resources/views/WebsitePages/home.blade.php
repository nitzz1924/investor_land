{{-- // ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','Home')
@section('content')

<div class="hero">
    <div class="hero-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Left Content Start -->
                    <div class="hero-content">
                        <div class="section-title">
                            <h1 class="text-anime">Welcome to Investor Lands</h1>
                        </div>
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <p>Your Partner for Hassle-Free Property Investment</p>
                        </div>
                        <div class="footer-social-links">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-tiktok"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Hero Left Content End -->
                </div>
            </div>
        </div>
    </div>

    <div class="hero-search-form-section">
        <div class="container">
            <!-- Property Search Form Start -->
            <div class="hero-search-form wow fadeInUp" data-wow-delay="1s">
                <div class="search-heading">
                    <h4>Search Property</h4>
                </div>

                <!-- Filter Form Start -->
                <form action="#" method="get">
                    <div class="row justify-content-center">

                        <div class="col-lg-2 col-md-6">
                            <select class="form-control">
                                <option value="">Property Type</option>
                                <option>Apartment</option>
                                <option>Office</option>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <select class="form-control">
                                <option value="">Location</option>
                                <option>Surat</option>
                                <option>Banglore</option>
                            </select>
                        </div>

                        <div class="col-lg-2 col-md-6">
                            <button type="submit" class="btn-default">Search</button>
                        </div>
                    </div>
                </form>
                <!-- Filter Form End -->
            </div>
            <!-- Property Search Form End -->
        </div>
    </div>
</div>


<div class="property-types">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Property Categories</h3>
                    <h2 class="text-anime">Explore Investment Opportunities Diverse Categories</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <!-- Property Slider Start -->
                <div class="property-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="property-type-item">
                                    <div class="icon-box">
                                        <img src="{{asset('websiteAssets/images/icon-property-type-1.svg')}}" alt="">
                                    </div>

                                    <h3>Houses</h3>
                                    <p>22 Properties</p>
                                </div>
                                <!-- Property Item End -->
                            </div>

                            <div class="swiper-slide">
                                <div class="property-type-item">
                                    <div class="icon-box">
                                        <img src="{{asset('websiteAssets/images/icon-property-type-1.svg')}}" alt="">
                                    </div>

                                    <h3>Houses</h3>
                                    <p>22 Properties</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="property-type-item">
                                    <div class="icon-box">
                                        <img src="{{asset('websiteAssets/images/icon-property-type-1.svg')}}" alt="">
                                    </div>

                                    <h3>Houses</h3>
                                    <p>22 Properties</p>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="property-type-item">
                                    <div class="icon-box">
                                        <img src="{{asset('websiteAssets/images/icon-property-type-1.svg')}}" alt="">
                                    </div>

                                    <h3>Houses</h3>
                                    <p>22 Properties</p>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="featured-property">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp text-white">Properties</h3>
                    <h2 class="text-anime text-white">Featured Properties</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Property Slider Start -->
                <div class="property-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Property Item Start -->
                                <div class="property-item">
                                    <!-- Property Item Header Start -->
                                    <div class="property-header">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/property-1.jpg')}}" alt="">
                                        </figure>

                                        <span class="property-label">Rent</span>
                                    </div>
                                    <!-- Property Item Header End -->

                                    <!-- Property Item Body Start -->
                                    <div class="property-body">
                                        <h3>Equestrian Family Home</h3>
                                        <p>New York City, CA, USA</p>

                                        <div class="property-meta">
                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-badroom.svg" alt="">
                                                </div>

                                                <span>6 Bedsroom</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-bathroom.svg" alt="">
                                                </div>

                                                <span>3 Bathrooms</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-area.svg" alt="">
                                                </div>

                                                <span>720 sq ft</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-garage.svg" alt="">
                                                </div>

                                                <span>1 Garages</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Property Item Body End -->

                                    <!-- Property Item Footer Start -->
                                    <div class="property-footer">
                                        <p class="property-price">$150,000</p>
                                        <a href="#" class="btn-default">View Property</a>
                                    </div>
                                    <!-- Property Item Footer Start -->
                                </div>
                                <!-- Property Item End -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Property Item Start -->
                                <div class="property-item">
                                    <!-- Property Item Header Start -->
                                    <div class="property-header">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/property-2.jpg')}}" alt="">
                                        </figure>

                                        <span class="property-label">Sell</span>
                                    </div>
                                    <!-- Property Item Header End -->

                                    <!-- Property Item Body Start -->
                                    <div class="property-body">
                                        <h3>Luxury Family Home</h3>
                                        <p>New York City, CA, USA</p>

                                        <div class="property-meta">
                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-badroom.svg" alt="">
                                                </div>

                                                <span>6 Bedsroom</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-bathroom.svg" alt="">
                                                </div>

                                                <span>3 Bathrooms</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-area.svg" alt="">
                                                </div>

                                                <span>720 sq ft</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-garage.svg" alt="">
                                                </div>

                                                <span>1 Garages</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Property Item Body End -->

                                    <!-- Property Item Footer Start -->
                                    <div class="property-footer">
                                        <p class="property-price">$150,000</p>
                                        <a href="#" class="btn-default">View Property</a>
                                    </div>
                                    <!-- Property Item Footer End -->
                                </div>
                                <!-- Property Item End -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Property Item Start -->
                                <div class="property-item">
                                    <!-- Property Item Header Start -->
                                    <div class="property-header">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/property-3.jpg')}}" alt="">
                                        </figure>

                                        <span class="property-label">Rent</span>
                                    </div>
                                    <!-- Property Item Header End -->

                                    <!-- Property Item Body Start -->
                                    <div class="property-body">
                                        <h3>Equestrian Family Home</h3>
                                        <p>New York City, CA, USA</p>

                                        <div class="property-meta">
                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-badroom.svg" alt="">
                                                </div>

                                                <span>6 Bedsroom</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-bathroom.svg" alt="">
                                                </div>

                                                <span>3 Bathrooms</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-area.svg" alt="">
                                                </div>

                                                <span>720 sq ft</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-garage.svg" alt="">
                                                </div>

                                                <span>1 Garages</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Property Item Body End -->

                                    <!-- Property Item Footer Start -->
                                    <div class="property-footer">
                                        <p class="property-price">$150,000</p>
                                        <a href="#" class="btn-default">View Property</a>
                                    </div>
                                    <!-- Property Item Footer End -->
                                </div>
                                <!-- Property Item End -->
                            </div>

                            <div class="swiper-slide">
                                <!-- Property Item Start -->
                                <div class="property-item">
                                    <!-- Property Item Header Start -->
                                    <div class="property-header">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/property-4.jpg')}}" alt="">
                                        </figure>

                                        <span class="property-label">Rent</span>
                                    </div>
                                    <!-- Property Item Header End -->

                                    <!-- Property Item Body Start -->
                                    <div class="property-body">
                                        <h3>Mountain View Condos</h3>
                                        <p>New York City, CA, USA</p>

                                        <div class="property-meta">
                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-badroom.svg" alt="">
                                                </div>

                                                <span>6 Bedsroom</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-bathroom.svg" alt="">
                                                </div>

                                                <span>3 Bathrooms</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-area.svg" alt="">
                                                </div>

                                                <span>720 sq ft</span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="images/icon-garage.svg" alt="">
                                                </div>

                                                <span>1 Garages</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Property Item Body End -->

                                    <!-- Property Item Footer Start -->
                                    <div class="property-footer">
                                        <p class="property-price">$150,000</p>
                                        <a href="#" class="btn-default">View Property</a>
                                    </div>
                                    <!-- Property Item Footer End -->
                                </div>
                                <!-- Property Item End -->
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                <!-- Property Slider End -->
            </div>
        </div>
    </div>
</div>


<div class="property-by-city">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">Location</h3>
                    <h2 class="text-anime">Properties by Cities</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- Location Item Start -->
                <div class="location-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Location Image Start -->
                    <div class="location-image">
                        <figure>
                            <img src="{{asset('websiteAssets/images/city-1.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Location Image End -->

                    <!-- Location Content Start -->
                    <div class="location-content">
                        <div class="location-header">
                            <h3>Ajmer</h3>
                            <p>22 Properties</p>
                        </div>

                        <div class="location-footer">
                            <a href="#" class="btn-default">See More</a>
                        </div>
                    </div>
                    <!-- Location Content End -->
                </div>
                <!-- Location Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Location Item Start -->
                <div class="location-item wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Location Image Start -->
                    <div class="location-image">
                        <figure>
                            <img src="{{asset('websiteAssets/images/city-2.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Location Image End -->

                    <!-- Location Content Start -->
                    <div class="location-content">
                        <div class="location-header">
                            <h3>Delhi</h3>
                            <p>22 Properties</p>
                        </div>

                        <div class="location-footer">
                            <a href="#" class="btn-default">See More</a>
                        </div>
                    </div>
                    <!-- Location Content End -->
                </div>
                <!-- Location Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Location Item Start -->
                <div class="location-item wow fadeInUp" data-wow-delay="0.75s">
                    <!-- Location Image Start -->
                    <div class="location-image">
                        <figure>
                            <img src="{{asset('websiteAssets/images/city-3.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Location Image End -->

                    <!-- Location Content Start -->
                    <div class="location-content">
                        <div class="location-header">
                            <h3>Mumbai</h3>
                            <p>22 Properties</p>
                        </div>

                        <div class="location-footer">
                            <a href="#" class="btn-default">See More</a>
                        </div>
                    </div>
                    <!-- Location Content End -->
                </div>
                <!-- Location Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- Location Item Start -->
                <div class="location-item wow fadeInUp" data-wow-delay="1s">
                    <!-- Location Image Start -->
                    <div class="location-image">
                        <figure>
                            <img src="{{asset('websiteAssets/images/city-4.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Location Image End -->

                    <!-- Location Content Start -->
                    <div class="location-content">
                        <div class="location-header">
                            <h3>Bengluru</h3>
                            <p>22 Properties</p>
                        </div>

                        <div class="location-footer">
                            <a href="#" class="btn-default">See More</a>
                        </div>
                    </div>
                    <!-- Location Content End -->
                </div>
                <!-- Location Item End -->
            </div>
        </div>
    </div>
</div>

<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-6 p-2">
                        <div class="about-image">
                            <figure class="reveal image-anime">
                                <img src="{{asset('websiteAssets/images/video-img-1.jpg')}}" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="about-image">
                            <figure class="reveal image-anime">
                                <img src="{{asset('websiteAssets/images/video-img-2.jpg')}}" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="about-image">
                            <figure class="reveal image-anime">
                                <img src="{{asset('websiteAssets/images/property-6.jpg')}}" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6 p-2">
                        <div class="about-image">
                            <figure class="reveal image-anime">
                                <img src="{{asset('websiteAssets/images/need-help-bg.jpg')}}" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- About Content Start -->
                <div class="about-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp text-white">Investor Lands</h3>
                        <h2 class="text-anime text-white">Explore Our Projects</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content Body Start -->
                    <div class="about-content-body">
                        <p class="wow fadeInUp text-white" data-wow-delay="0.5s">Investor Lands offers a portfolio of projects designed to maximize returns and build lasting value. Explore now to find the perfect project that aligns with your goals and future vision.</p>

                        <ul>
                            <li class="wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box"><img src="{{asset('websiteAssets/images/icon-about-1.svg')}}" alt=""></div>
                                <span class="text-white">Smart Home Design</span>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="1s">
                                <div class="icon-box"><img src="{{asset('websiteAssets/images/icon-about-2.svg')}}" alt=""></div>
                                <span class="text-white">Beautiful Scene Around</span>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="1.25s">
                                <div class="icon-box"><img src="{{asset('websiteAssets/images/icon-about-3.svg')}}" alt=""></div>
                                <span class="text-white">Exceptional Lifestyle</span>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="1.5s">
                                <div class="icon-box"><img src="{{asset('websiteAssets/images/icon-about-4.svg')}}" alt=""></div>
                                <span class="text-white">Complete 24/7 Security</span>
                            </li>
                        </ul>

                        <a href="#" class="btn-default wow fadeInUp" data-wow-delay="1.75s">View More</a>
                    </div>
                    <!-- About Content Body End -->

                </div>
                <!-- About Content End -->
            </div>
        </div>
    </div>
</div>

<div class="why-choose-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <figure class="reveal image-anime">
                    <img src="{{asset('websiteAssets/images/newservice.jpg')}}" class="img-fluid rounded-4" alt="">
                </figure>
                <!-- Why Choose us Images End -->
            </div>

            <div class="col-lg-6 order-lg-1">
                <div class="why-choose-us-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Investor Lands</h3>
                        <h2 class="text-anime">Our Services</h2>
                    </div>
                    <div class="why-choose-us-body wow fadeInUp" data-wow-delay="0.25s">
                        <p>At Investor Lands, we provide comprehensive services to cater to all your investment and real estate needs. From personalized investment consulting to property acquisition, development, and management, we are your trusted partner in navigating the real estate landscape. </p>
                        <ul>
                            <li>Land Acquisition</li>
                            <li>Investment Consultation</li>
                            <li>Property Management</li>
                            <li>Market Analysis</li>
                        </ul>
                        {{-- <a href="#" class="btn-default">View More</a> --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-lg-3 col-md-6">
                <div class="how-it-work-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{asset('websiteAssets/images/icon-how-1.svg')}}" alt="">
                    </div>

                    <h3>Extensive Expertise</h3>
                    <p>Leverage our extensive expertise to make informed and profitable real estate investment decisions.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="how-it-work-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <img src="{{asset('websiteAssets/images/connected.png')}}" alt="">
                    </div>

                    <h3>Dedicated Team</h3>
                    <p>Partner with our dedicated team committed to delivering exceptional service and personalized solutions.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="how-it-work-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="{{asset('websiteAssets/images/premium.png')}}" alt="">
                    </div>

                    <h3>Premium Quality</h3>
                    <p>Experience premium quality in every project, ensuring excellence and long-term value.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="how-it-work-item wow fadeInUp" data-wow-delay="1s">
                    <div class="icon-box">
                        <img src="{{asset('websiteAssets/images/mobile-payment.png')}}" alt="">
                    </div>

                    <h3>Transparent Trasactions</h3>
                    <p>Ensure peace of mind with our commitment to transparent transactions and integrity.</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="infobar-cta ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="infobar-box">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="cta-content">
                                <h2 class="text-anime">Need Guidance? Talk to Our Experts.</h2>
                                <p class="wow fadeInUp">At Investor Lands, our experienced professionals are here to guide you through every step of your investment journey. Reach out today for personalized advice and insights tailored to your goals.</p>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="cta-button">
                                <a href="tel:+919461257675" class="btn-default btn-border"><i class="fa-solid fa-phone-volume"></i> +91-94612-57675</a>
                                <a href="#" class="btn-default">Contact Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="why-choose-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <figure class="reveal image-anime">
                    <img src="{{asset('websiteAssets/images/aboutus.jpg')}}" class="img-fluid rounded-4" alt="">
                </figure>
                <!-- Why Choose us Images End -->
            </div>

            <div class="col-lg-6 order-lg-1">
                <div class="why-choose-us-content">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">About Us</h3>
                        <h2 class="text-anime">Your Trusted Real Estate Partner</h2>
                    </div>
                    <div class="why-choose-us-body wow fadeInUp" data-wow-delay="0.25s">
                        <p>At Investor Lands, we are passionate about transforming investment opportunities into lasting value. With a strong foundation in real estate expertise, we specialize in offering premium projects that align with our clients' financial goals. Our mission is to simplify the complexities of real estate investment through transparency, integrity, and innovation.</p>
                        <a href="#" class="btn-default">More about Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonials">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp text-white">Testimonials</h3>
                    <h2 class="text-anime text-white">What our Client Says</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- Testimonial Carousel Start -->
                <div class="testimonial-slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-slide">
                                    <div class="testimonial-rating">
                                        <img src="{{asset('websiteAssets/images/icon-rating.svg')}}" alt="">
                                    </div>

                                    <div class="testimonial-content">
                                        <p>Investor Lands made the process of finding the perfect investment seamless. Their team was incredibly professional and guided me every step of the way. I highly recommend their services to anyone looking for reliable real estate solutions!</p>
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h3>- Amit Sharma</h3>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide">
                                <div class="testimonial-slide">
                                    <div class="testimonial-rating">
                                        <img src="{{asset('websiteAssets/images/icon-rating.svg')}}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>I was impressed with the transparency and dedication of the team at Investor Lands. They ensured I was informed about every detail, making me feel confident in my decision. A truly stress-free experience!</p>
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h3>- Neha Verma</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-slide">
                                    <div class="testimonial-rating">
                                        <img src="{{asset('websiteAssets/images/icon-rating.svg')}}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>The expertise and range of projects at Investor Lands are unmatched. They helped me find a property that fit my budget and long-term goals perfectly. I couldn’t be happier with their service!</p>
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h3>- Rohan Mehta</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-slide">
                                    <div class="testimonial-rating">
                                        <img src="{{asset('websiteAssets/images/icon-rating.svg')}}" alt="">
                                    </div>
                                    <div class="testimonial-content">
                                        <p>What stood out to me about Investor Lands was their commitment to quality and transparency. Their team went above and beyond to address all my concerns and helped me secure the best deal. Highly recommended!</p>
                                    </div>
                                    <div class="testimonial-author-info">
                                        <h3>- Priya Iyer</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
