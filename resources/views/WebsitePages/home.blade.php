{{-- // ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','Home')
@section('content')


<div class="row justify-content-center">
    <div class="col-lg-5">
        @if ($message = Session::get('success'))
        <div class="alert border-0 alert-success text-center" role="alert" id="successAlert">
            <strong>{{ $message }}</strong>
        </div>
        @endif
        @if ($message = Session::get('error'))
        <div class="alert border-0 alert-danger text-center" role="alert" id="dangerAlert">
            <strong>{{ $message }}</strong>
        </div>
        @endif
    </div>
</div>
<div class="hero">
    <div class="hero-section parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Left Content Start -->
                    <div class="hero-content">
                        <div class="section-title">
                            <h1 class="text-anime">Welcome to INVESTOR LANDS</h1>
                        </div>
                        <div class="hero-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <p>Your Partner for Hassle-Free Property Investment</p>
                        </div>
                        <div class="d-flex justify-content-center fixed-buttons">
                            {{-- <div>
                                <!-- WhatsApp Button -->
                                <a href="https://wa.me/917073880500" target="_blank" class="whatsapp-btn">
                                    <i class="fab fa-whatsapp"></i>&nbsp;WhatsApp Us
                                </a>
                            </div>

                            <div>
                                <!-- Call Button -->
                                <a href="tel:+917073880500" class="call-btn">
                                    <i class="fas fa-phone"></i>&nbsp;Call Us
                                </a>
                            </div> --}}
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
        <div class="container d-flex justify-content-center">
            <div class="hero-search-form wow fadeInUp" data-wow-delay="1s">
                <div class="search-heading">
                    <h4>Search Property</h4>
                </div>
                <form id="searchform">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-8">
                            <select name="filtercity" class="form-control">
                                <option value="" selected>Select City</option>
                                @foreach ($uniqueCities as $uc)
                                <option value="{{$uc}}">{{$uc}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-4">
                            <button type="submit" class="btn-default">Search</button>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 col-6">
                            <select name="filtercategory" class="form-control">
                                <option value="" selected>Select Category</option>
                                @foreach ($uniqueCategories as $uq)
                                <option value="{{$uq}}">{{$uq}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-4 col-6">
                            <button type="button" id="priceFilterBtn" class="form-control text-start">Price (INR)</button>
                            <div id="priceFilterDropdown" class="price-filter-dropdown d-none">
                                <div class="d-flex justify-content-between">
                                    <label>Minimum</label>
                                    <label>Maximum</label>
                                </div>
                                <div class="d-flex">
                                    <input type="number" name="filterminprice" id="minPrice" class="form-control me-2" placeholder="0">
                                    <input type="text" name="filtermaxprice" id="maxPrice" class="form-control" placeholder="Any">
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <button type="button" id="resetPriceFilter" class="btn btn-light">Reset</button>
                                    <button type="button" id="applyPriceFilter" class="btn text-white" style="background-color: #726555;">Done</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <button type="button" id="sqftbtn" class="form-control text-start">Sqft</button>
                            <div id="sqftbtnDropdown" class="price-filter-dropdownsqft d-none">
                                <div class="d-flex justify-content-between">
                                    <label>From</label>
                                    <label>To</label>
                                </div>
                                <div class="d-flex">
                                    <input type="text" name="sqftfrom" id="sqftfrom" class="form-control me-2" placeholder="0">
                                    <input type="text" name="sqftto" id="sqftto" class="form-control" placeholder="0">
                                </div>
                                <div class="d-flex justify-content-between mt-2">
                                    <button type="button" id="resetsqftfilter" class="btn btn-light">Reset</button>
                                    <button type="button" id="applysqftfilter" class="btn text-white" style="background-color: #726555;">Done</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="how-it-works bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h1 class="wow fadeInUp">Property Categories</h1>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- @foreach ($categories as $cat)
            <div class="col-lg-3 col-6">
                <div class="how-it-work-itemaboutnew wow fadeInUp mt-4" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{asset('assets/images/Categories/'.$cat->categoryimage)}}" alt="">
        </div>
        <h3>{{$cat->label}}</h3>
    </div>
</div>
@endforeach --}}
<div class="property-type-slider">
    <div class="swiper">
        <div class="swiper-wrapper">
            @foreach ($categories as $cat)
            <div class="swiper-slide">
                <div class="how-it-work-itemaboutnew wow fadeInUp mt-4" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{asset('assets/images/Categories/'.$cat->categoryimage)}}" alt="">
                    </div>
                    <h3>{{$cat->label}}</h3>
                </div>
            </div>
            @endforeach
        </div>

        <div class="swiper-pagination"></div>
    </div>
</div>
</div>
</div>
</div>

<div class="featured-property">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp text-white">Properties</h3>
                    <h2 class="text-anime text-white">Featured Properties</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="property-slider" id="featuredpropslider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            @foreach ($listings as $list)
                            <div class="swiper-slide">
                                <div class="property-item">
                                    <div class="property-header">
                                        <a href="{{route('website.propertydetails',['id'=> $list->id])}}">
                                        <figure class="image-anime">
                                            <img src="{{asset('assets/images/Listings/'.$list->thumbnail)}}" alt="">
                                        </figure>
                                        </a>
                                        <span class="property-label">{{$list->category}}</span>
                                    </div>
                                    <div class="property-body">
                                        <a href="{{route('website.propertydetails',['id'=> $list->id])}}"> <h3>{{$list->property_name}}</h3></a>
                                        <p>{{$list->address}}</p>

                                        <div class="property-meta">
                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="{{asset('websiteAssets/images/icon-badroom.svg')}}" alt="">
                                                </div>
                                                <span>{{$list->bedroom}} <span class="hideshowproperty">Bedsroom</span></span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="{{asset('websiteAssets/images/icon-bathroom.svg')}}" alt="">
                                                </div>
                                                <span>{{$list->bathroom}} <span class="hideshowproperty">Bathrooms</span></span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="{{asset('websiteAssets/images/icon-area.svg')}}" alt="">
                                                </div>
                                                <span>{{$list->squarefoot}} <span class="hideshowproperty">sq ft</span></span>
                                            </div>

                                            <div class="property-amenity-item">
                                                <div class="icon-box">
                                                    <img src="{{asset('websiteAssets/images/icon-garage.svg')}}" alt="">
                                                </div>
                                                <span>{{$list->floor}} <span class="hideshowproperty">Floors</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="property-footer">
                                        <span class="badge {{$list->status == 'published' ? 'text-bg-success' : 'text-bg-danger' }}"> {{ ucfirst($list->status) }}
                                        </span>
                                        <a href="{{route('website.propertydetails',['id'=> $list->id])}}" class="btn-default">View Property
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="about-content">
                    <div class="section-title">
                        <h2 class="text-anime text-black text-center">Explore Our Projects</h2>
                    </div>
                    <div class="about-content-body">
                        {{-- <p class="wow fadeInUp text-black text-center" data-wow-delay="0.5s">Investor Lands offers a portfolio of projects designed to maximize returns and build lasting value. Explore now to find the perfect project that aligns with your goals and future vision.</p> --}}
                        {{-- <div class="row">
                            <div class="col-lg-3 col-6 wow fadeInUp" data-wow-delay="0.75s">
                                <div class="icon-box"><img src="{{asset('websiteAssets/images/icon-about-1.svg')}}" alt=""></div>
                    <span class="text-black">Smart Home Design</span>
                </div>
                <div class="col-lg-3 col-6 wow fadeInUp" data-wow-delay="1s">
                    <div class="icon-box"><img src="{{asset('websiteAssets/images/icon-about-2.svg')}}" alt=""></div>
                    <span class="text-black">Beautiful Scene Around</span>
                </div>
                <div class="col-lg-3 col-6 wow fadeInUp" data-wow-delay="1.25s">
                    <div class="icon-box"><img src="{{asset('websiteAssets/images/icon-about-3.svg')}}" alt=""></div>
                    <span class="text-black">Exceptional Lifestyle</span>
                </div>
                <div class="col-lg-3 col-6 wow fadeInUp" data-wow-delay="1.5s">
                    <div class="icon-box"><img src="{{asset('websiteAssets/images/icon-about-4.svg')}}" alt=""></div>
                    <span class="text-black">Complete 24/7 Security</span>
                </div>
            </div> --}}
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="property-type-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/post-1.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/video-img-1.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/property-6.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/post-1.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/post-1.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/post-1.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/post-1.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/post-1.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/post-1.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/post-1.jpg')}}" alt="">
                                        </figure>
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
</div>
</div>
</div>
</div>
<div class="latest-posts">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Our Blogs</h3>
                    <h2 class="text-anime">Read Our Latest Blogs</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4 col-6">
                <div class="post-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="post-featured-image">
                        <figure>
                            <a href="#"><img src="{{asset('assets/images/Blogs/'.$blog->blogthumbnail)}}" alt="Blog Image"></a>
                        </figure>

                        <div class="post-read-more">
                            <a href="{{ route('website.blogdetails',['id' => $blog->id]) }}" class="btn-default">Read More</a>
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="post-category">
                            <ul>
                                <li><a href="#">{{$blog->blogname}}</a></li>
                            </ul>
                        </div>
                        <h3><a href="#">{{ Str::limit(strip_tags($blog->blogdescription),40)}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="property-by-city">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Location</h3>
                    <h2 class="text-anime">Properties by Location</h2>
                </div>
            </div>
        </div>

        <div class="row">
            @foreach ($listingsbycitys as $row)
            <div class="col-lg-3 col-6">
                <div class="location-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="location-image">
                        <figure>
                            <img src="{{asset('assets/images/Categories/'.$row->categoryimage)}}" alt="">
                        </figure>
                    </div>
                    <div class="location-content">
                        <div class="location-header">
                            <h3>{{$row->label}}</h3>
                            <p>{{ $row->property_count }} Properties</p>
                        </div>
                        {{-- <div class="location-footer">
                            <a href="#" class="btn-default">See More</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            @endforeach
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

        <div class="row mt-5 expertisesection">
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

                    <h3>Transparent Deals</h3>
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

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    setTimeout(function() {
        $('#successAlert').fadeOut('slow');
    }, 3000);

    setTimeout(function() {
        $('#dangerAlert').fadeOut('slow');
    }, 3000);

</script>
<!-- Property Filter -->
<script>
    document.getElementById("priceFilterBtn").addEventListener("click", function() {
        let dropdown = document.getElementById("priceFilterDropdown");
        dropdown.classList.toggle("d-none");
    });

    // Close when clicking outside
    document.addEventListener("click", function(event) {
        let dropdown = document.getElementById("priceFilterDropdown");
        let button = document.getElementById("priceFilterBtn");

        if (!button.contains(event.target) && !dropdown.contains(event.target)) {
            dropdown.classList.add("d-none");
        }
    });


    document.getElementById("sqftbtn").addEventListener("click", function() {
        let sqftbtndropdown = document.getElementById("sqftbtnDropdown");
        sqftbtndropdown.classList.toggle("d-none");
    });

    // Close when clicking outside
    document.addEventListener("click", function(event) {
        let sqftbtndropdown = document.getElementById("sqftbtnDropdown");
        let button = document.getElementById("sqftbtn");

        if (!button.contains(event.target) && !sqftbtndropdown.contains(event.target)) {
            sqftbtndropdown.classList.add("d-none");
        }
    });



    // Apply filter for Square Feet
    document.getElementById("applysqftfilter").addEventListener("click", function() {
        let sqftfrom = document.getElementById("sqftto").value;
        let sqftto = document.getElementById("sqftfrom").value || "Any";

        document.getElementById("sqftbtn").textContent = `Sqft: ${sqftfrom} - ${sqftto} m`;
        document.getElementById("sqftbtnDropdown").classList.add("d-none");
    });

    // Reset filter for Square Feet
    document.getElementById("resetsqftfilter").addEventListener("click", function() {
        document.getElementById("sqftto").value = "";
        document.getElementById("sqftfrom").value = "";
        document.getElementById("sqftbtn").textContent = "Sqft";
    });



    // Apply filter
    document.getElementById("applyPriceFilter").addEventListener("click", function() {
        let minPrice = document.getElementById("minPrice").value;
        let maxPrice = document.getElementById("maxPrice").value || "Any";

        document.getElementById("priceFilterBtn").textContent = `Price: ${minPrice} - ${maxPrice} INR`;
        document.getElementById("priceFilterDropdown").classList.add("d-none");
    });

    // Reset filter
    document.getElementById("resetPriceFilter").addEventListener("click", function() {
        document.getElementById("minPrice").value = "";
        document.getElementById("maxPrice").value = "";
        document.getElementById("priceFilterBtn").textContent = "Price (INR)";
    });


    // Search Form AJAX Request
    jQuery('#searchform').submit(function(e) {
        e.preventDefault();
        var formdata = new FormData(document.getElementById('searchform')); //getting form data

        for (var pair of formdata.entries()) {
            console.log(pair[0] + ': ' + pair[1]);
        }

        var filtercity = formdata.get('filtercity');
        var filtercategory = formdata.get('filtercategory');
        var minPrice = formdata.get('filterminprice');
        var maxPrice = formdata.get('filtermaxprice');
        var sqftfrom = formdata.get('sqftfrom');
        var sqftto = formdata.get('sqftto');

        if (!minPrice && !maxPrice && !filtercity && !filtercategory && !sqftfrom && !sqftto) {
            Toastify({
                text: "Please select at least one to filter Listings."
                , duration: 3000
                , className: "info"
                , style: {
                    background: "#726555"
                , }
                , position: "center"
            , }).showToast();
            return false;
        }

        $.ajax({
            url: "{{ route('website.filterlistings') }}"
            , type: "POST"
            , data: formdata
            , headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            , processData: false
            , contentType: false
            , success: function(response) {
                window.location.href = response.redirect_url;
                console.log(response);
            }
            , error: function(xhr, status, error) {
                // Handle error response
                console.error(xhr.responseText);
            }
        });
    });

</script>
@endsection
