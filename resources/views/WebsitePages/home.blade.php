{{-- // ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','Home')
@section('content')
<!-- Hero Section Start -->
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

    <!-- Hero Search Form Start -->
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
    <!-- Hero Search Form End -->
</div>
<!-- Hero Section End -->

<!-- Property Type Section Start -->
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
<!-- Property Type Section End -->

<!-- Featured Property Section Start -->
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
<!-- Featured Property Section End -->
<!-- Property By City Section Start -->
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
                            <h3>Surabaya</h3>
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
                            <h3>Jakarta</h3>
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
                            <h3>Medan</h3>
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
                            <h3>Bandung</h3>
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
<!-- Property By City Section End -->
<!-- About Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 d-flex flex-row">
                <div class="row flex-column">
                    <div class="col-md-6">
                        <div class="about-image">
                            <figure class="reveal image-anime">
                                <img src="{{asset('websiteAssets/images/video-img-1.jpg')}}" height="800px" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-image">
                            <figure class="reveal image-anime">
                                <img src="{{asset('websiteAssets/images/video-img-1.jpg')}}" height="300px" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="row flex-column">

                    <div class="col-md-12">
                        <div class="about-image">
                            <figure class="reveal image-anime">
                                <img src="{{asset('websiteAssets/images/video-img-1.jpg')}}" alt="">
                            </figure>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="about-image">
                            <figure class="reveal image-anime">
                                <img src="{{asset('websiteAssets/images/video-img-1.jpg')}}" alt="">
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
                        <h3 class="wow fadeInUp text-white">About Investor Lands</h3>
                        <h2 class="text-anime text-white">Explore Our Projects</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- About Content Body Start -->
                    <div class="about-content-body">
                        <p class="wow fadeInUp text-white" data-wow-delay="0.5s">Duis pulvinar metus elit, ut aliquam est sollicitudin finibus. Integer lobortis est interdum. Suspendisse nunc est, varius quis fringilla ac, commodo a ante. Praesent non elit cursus, aliquam sapien quis, dictum tortor.</p>

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
<!-- About Section End -->

<!-- How It Work Section Start -->
<div class="how-it-works">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">How it works</h3>
                    <h2 class="text-anime">Find a Perfect Home</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <!-- How it Work Item Start -->
                <div class="how-it-work-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="images/icon-how-1.svg" alt="">
                    </div>

                    <h3>Find Property</h3>
                    <p>Duis pulvinar metus elit, ut aliquam est sollicitudin. est interdum.</p>
                </div>
                <!-- How it Work Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- How it Work Item Start -->
                <div class="how-it-work-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <img src="images/icon-how-2.svg" alt="">
                    </div>

                    <h3>Meet Retailer</h3>
                    <p>Duis pulvinar metus elit, ut aliquam est sollicitudin. est interdum.</p>
                </div>
                <!-- How it Work Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- How it Work Item Start -->
                <div class="how-it-work-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="images/icon-how-3.svg" alt="">
                    </div>

                    <h3>Documents</h3>
                    <p>Duis pulvinar metus elit, ut aliquam est sollicitudin. est interdum.</p>
                </div>
                <!-- How it Work Item End -->
            </div>

            <div class="col-lg-3 col-md-6">
                <!-- How it Work Item Start -->
                <div class="how-it-work-item wow fadeInUp" data-wow-delay="1s">
                    <div class="icon-box">
                        <img src="images/icon-how-4.svg" alt="">
                    </div>

                    <h3>Take the keys</h3>
                    <p>Duis pulvinar metus elit, ut aliquam est sollicitudin. est interdum.</p>
                </div>
                <!-- How it Work Item End -->
            </div>
        </div>
    </div>
</div>
<!-- How It Work Section End -->



<!-- Infobar Section Start -->
<div class="infobar-cta">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Infobar Box Start -->
                <div class="infobar-box">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <!-- Infobar Content Start -->
                            <div class="cta-content">
                                <h2 class="text-anime">Need Help? Talk to Our Expert.</h2>
                                <p class="wow fadeInUp">Duis pulvinar metus elit, ut aliquam est sollicitudin finibus. Integer lobortis est interdum. Suspendisse nunc est, varius quis fringilla ac, commodo a ante.</p>
                            </div>
                            <!-- Infobar Content End -->
                        </div>

                        <div class="col-lg-5">
                            <!-- CTA Button Start -->
                            <div class="cta-button">
                                <a href="#" class="btn-default btn-border"><i class="fa-solid fa-phone-volume"></i> +123 456 789</a>
                                <a href="#" class="btn-default">Contact Now</a>
                            </div>
                            <!-- CTA Button End -->
                        </div>
                    </div>
                </div>
                <!-- Infobar Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Infobar Section End -->

<!-- Latest Posts Section Start -->
<div class="latest-posts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">News & Blog</h3>
                    <h2 class="text-anime">Read Our Latest News</h2>
                </div>
                <!-- Section Title End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Post Featured Image Start -->
                    <div class="post-featured-image">
                        <figure>
                            <a href="#"><img src="{{asset('websiteAssets/images/post-1.jpg')}}" alt=""></a>
                        </figure>

                        <div class="post-read-more">
                            <a href="#" class="btn-default">Read More</a>
                        </div>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Body Start -->
                    <div class="post-body">
                        <div class="post-category">
                            <ul>
                                <li><a href="#">Apartments</a></li>
                            </ul>
                        </div>

                        <h3><a href="#">Our Latest Development Projects by More Efficie.</a></h3>
                    </div>
                    <!-- Post Body End -->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-lg-4">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Post Featured Image Start -->
                    <div class="post-featured-image">
                        <figure>
                            <a href="#"><img src="{{asset('websiteAssets/images/post-2.jpg')}}" alt=""></a>
                        </figure>

                        <div class="post-read-more">
                            <a href="#" class="btn-default">Read More</a>
                        </div>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Body Start -->
                    <div class="post-body">
                        <div class="post-category">
                            <ul>
                                <li><a href="#">Office</a></li>
                            </ul>
                        </div>

                        <h3><a href="#">Cultivating Market Leadership from the Inside.</a></h3>
                    </div>
                    <!-- Post Body End -->
                </div>
                <!-- Post Item End -->
            </div>

            <div class="col-lg-4">
                <!-- Post Item Start -->
                <div class="post-item wow fadeInUp" data-wow-delay="0.75s">
                    <!-- Post Featured Image Start -->
                    <div class="post-featured-image">
                        <figure>
                            <a href="#"><img src="{{asset('websiteAssets/images/post-3.jpg')}}" alt=""></a>
                        </figure>

                        <div class="post-read-more">
                            <a href="#" class="btn-default">Read More</a>
                        </div>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Body Start -->
                    <div class="post-body">
                        <div class="post-category">
                            <ul>
                                <li><a href="#">Apartments</a></li>
                            </ul>
                        </div>

                        <h3><a href="#">We Are the Next Generation of the Advertising.</a></h3>
                    </div>
                    <!-- Post Body End -->
                </div>
                <!-- Post Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Latest Posts Section End -->
@endsection
