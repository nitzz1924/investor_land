{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','About')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h1 class="text-anime">About Us</h1>
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
                        <p>At Investor Lands, we are passionate about transforming investment opportunities into lasting value. With a strong foundation in real estate expertise, we specialize in offering premium projects that align with our clients' financial goals.</p>
                        <p><strong>Our mission</strong> is to simplify the complexities of real estate investment through transparency, integrity, and innovation.</p>
                        <a href="#" class="btn-default">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="how-it-worksabout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp text-white">How it works</h3>
                    <h2 class="text-anime text-white">Find a Perfect Home</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="how-it-work-itemabout wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{asset('websiteAssets/images/icon-how-1.svg')}}" alt="">
                    </div>

                    <h3>Extensive Expertise</h3>
                    <p>Leverage our extensive expertise to make informed and profitable real estate investment decisions.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="how-it-work-itemabout wow fadeInUp" data-wow-delay="0.5s">
                    <div class="icon-box">
                        <img src="{{asset('websiteAssets/images/icon-how-2.svg')}}" alt="">
                    </div>

                    <h3>Dedicated Team</h3>
                    <p>Partner with our dedicated team committed to delivering exceptional service and personalized solutions.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="how-it-work-itemabout wow fadeInUp" data-wow-delay="0.75s">
                    <div class="icon-box">
                        <img src="{{asset('websiteAssets/images/icon-how-3.svg')}}" alt="">
                    </div>

                    <h3>Premium Quality</h3>
                    <p>Experience premium quality in every project, ensuring excellence and long-term value.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="how-it-work-itemabout wow fadeInUp" data-wow-delay="1s">
                    <div class="icon-box">
                        <img src="{{asset('websiteAssets/images/icon-how-4.svg')}}" alt="">
                    </div>

                    <h3>Transparent Deals</h3>
                    <p>Ensure peace of mind with our commitment to transparent transactions and integrity.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="photo-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Gallery</h3>
                    <h2 class="text-anime">Our Photo Gallery</h2>
                </div>
            </div>
        </div>

        <div class="row project-gallery-items">
            <div class="col-lg-3 col-6">
                <div class="gallery-item wow fadeInUp" data-wow-delay="0.25s">
                    <a href="{{asset('websiteAssets/images/post-1.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{asset('websiteAssets/images/post-1.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="gallery-item wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{asset('websiteAssets/images/post-2.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{asset('websiteAssets/images/post-2.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="gallery-item wow fadeInUp" data-wow-delay="0.75s">
                    <a href="{{asset('websiteAssets/images/post-3.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{asset('websiteAssets/images/post-3.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="gallery-item wow fadeInUp" data-wow-delay="1s">
                    <a href="{{asset('websiteAssets/images/post-4.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{asset('websiteAssets/images/post-4.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="gallery-item wow fadeInUp" data-wow-delay="1.25s">
                    <a href="{{asset('websiteAssets/images/post-5.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{asset('websiteAssets/images/post-5.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="gallery-item wow fadeInUp" data-wow-delay="1.5s">
                    <a href="{{asset('websiteAssets/images/post-6.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{asset('websiteAssets/images/post-6.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="gallery-item wow fadeInUp" data-wow-delay="1.75s">
                    <a href="{{asset('websiteAssets/images/post-7.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{asset('websiteAssets/images/post-7.jpg')}}" alt="">
                        </figure>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-6">
                <div class="gallery-item wow fadeInUp" data-wow-delay="2s">
                    <a href="{{asset('websiteAssets/images/post-8.jpg')}}">
                        <figure class="image-anime">
                            <img src="{{asset('websiteAssets/images/post-8.jpg')}}" alt="">
                        </figure>
                    </a>
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
<div class="our-agents">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp">Our Agents</h3>
                    <h2 class="text-anime">Real Estate Agents</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="agent-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="agent-header">
                        <div class="agent-image">
                            <figure class="image-anime">
                                <img src="{{asset('websiteAssets/images/agent-1.jpg')}}" alt="">
                            </figure>
                        </div>
                        <div class="agent-social-links">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="agent-body">
                        <h3>Michael Brown</h3>
                        <p>( Residential )</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="agent-item wow fadeInUp" data-wow-delay="0.5s">
                    <div class="agent-header">
                        <div class="agent-image">
                            <figure class="image-anime">
                                <img src="{{asset('websiteAssets/images/agent-2.jpg')}}" alt="">
                            </figure>
                        </div>
                        <div class="agent-social-links">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="agent-body">
                        <h3>Emily Johnson</h3>
                        <p>( Apartment )</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="agent-item wow fadeInUp" data-wow-delay="0.75s">
                    <div class="agent-header">
                        <div class="agent-image">
                            <figure class="image-anime">
                                <img src="{{asset('websiteAssets/images/agent-3.jpg')}}" alt="">
                            </figure>
                        </div>
                        <div class="agent-social-links">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="agent-body">
                        <h3>David Wilson</h3>
                        <p>( Residential )</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="agent-item wow fadeInUp" data-wow-delay="1s">
                    <div class="agent-header">
                        <div class="agent-image">
                            <figure class="image-anime">
                                <img src="{{asset('websiteAssets/images/agent-4.jpg')}}" alt="">
                            </figure>
                        </div>
                        <div class="agent-social-links">
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="agent-body">
                        <h3>Jessica Anderson</h3>
                        <p>( Offices )</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
