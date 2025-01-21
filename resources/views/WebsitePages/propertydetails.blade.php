@extends('layouts.website')
@section('title','Property Details')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h1 class="text-anime">Equestrian Family Home</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-property-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Property Single Content Start -->
                <div class="property-single-content">
                    <!-- Property Photos Slider Start -->
                    <div class="property-photos-slider wow fadeInUp" data-wow-delay="0.25s">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <!-- Property Photo Slide Start -->
                                <div class="swiper-slide">
                                    <div class="property-photo-item">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/property-1.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Property Photo Slide End -->

                                <!-- Property Photo Slide Start -->
                                <div class="swiper-slide">
                                    <div class="property-photo-item">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/property-2.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Property Photo Slide End -->

                                <!-- Property Photo Slide Start -->
                                <div class="swiper-slide">
                                    <div class="property-photo-item">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/property-3.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Property Photo Slide End -->

                                <!-- Property Photo Slide Start -->
                                <div class="swiper-slide">
                                    <div class="property-photo-item">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/property-4.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Property Photo Slide End -->

                                <!-- Property Photo Slide Start -->
                                <div class="swiper-slide">
                                    <div class="property-photo-item">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/property-5.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Property Photo Slide End -->

                                <!-- Property Photo Slide Start -->
                                <div class="swiper-slide">
                                    <div class="property-photo-item">
                                        <figure class="image-anime">
                                            <img src="{{asset('websiteAssets/images/property-6.jpg')}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                <!-- Property Photo Slide End -->
                            </div>

                            <!-- If we need navigation buttons -->
                            <div class="swiper-arrow-prev"><i class="fa-solid fa-arrow-left"></i></div>
                            <div class="swiper-arrow-next"><i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <!-- Property Photos Slider End -->

                    <!-- Property Overview Start -->
                    <div class="property-overview wow fadeInUp" data-wow-delay="0.5s">
                        <div class="property-single-subtitle">
                            <h3>Overview</h3>
                        </div>

                        <div class="property-overview-box">
                            <!-- Property Overview Item Start -->
                            <div class="property-overview-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-bedrooms.svg')}}" alt="">
                                </div>

                                <div class="property-overview-content">
                                    <h3>Bedrooms</h3>
                                    <p>6</p>
                                </div>
                            </div>
                            <!-- Property Overview Item End -->

                            <!-- Property Overview Item Start -->
                            <div class="property-overview-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-bathrooms.svg')}}" alt="">
                                </div>

                                <div class="property-overview-content">
                                    <h3>Bathrooms</h3>
                                    <p>3</p>
                                </div>
                            </div>
                            <!-- Property Overview Item End -->

                            <!-- Property Overview Item Start -->
                            <div class="property-overview-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-areas.svg')}}" alt="">
                                </div>

                                <div class="property-overview-content">
                                    <h3>Area</h3>
                                    <p>720 sq ft</p>
                                </div>
                            </div>
                            <!-- Property Overview Item End -->

                            <!-- Property Overview Item Start -->
                            <div class="property-overview-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-garages.svg')}}" alt="">
                                </div>

                                <div class="property-overview-content">
                                    <h3>Garages</h3>
                                    <p>2</p>
                                </div>
                            </div>
                            <!-- Property Overview Item End -->

                            <!-- Property Overview Item Start -->
                            <div class="property-overview-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-built-year.svg')}}" alt="">
                                </div>

                                <div class="property-overview-content">
                                    <h3>Year Built</h3>
                                    <p>2024</p>
                                </div>
                            </div>
                            <!-- Property Overview Item End -->

                            <!-- Property Overview Item Start -->
                            <div class="property-overview-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-plot-size.svg')}}" alt="">
                                </div>

                                <div class="property-overview-content">
                                    <h3>Plot Size</h3>
                                    <p>1.963 sq ft</p>
                                </div>
                            </div>
                            <!-- Property Overview Item End -->
                        </div>
                    </div>
                    <!-- Property Overview End -->

                    <!-- About Property Start -->
                    <div class="about-property wow fadeInUp" data-wow-delay="0.75s">
                        <div class="property-single-subtitle">
                            <h3>About This Property</h3>
                        </div>

                        <div class="about-property-content">
                            <p>Proin ut sem eget ante commodo tempor. Nam sollicitudin, massa nec interdum gravida, erat tortor varius est, ut elementum sapien ex aliquam risus. Donec vehicula viverra odio sit amet pharetra. Fusce tristique felis fringilla orci varius, nec placerat est tempus. Integer in nulla at neque rutrum sodales sit amet egestas justo. Aenean lacinia blandit tellus at blandit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>

                            <div class="about-property-cta">
                                <a href="#" class="btn-default btn-border">Contact us</a>
                                <a href="#" class="btn-default"><i class="fa-solid fa-phone-volume"></i> +123 456 789</a>
                            </div>
                        </div>
                    </div>
                    <!-- About Property End -->

                    <!-- Property Amenities Start -->
                    <div class="property-amenities wow fadeInUp" data-wow-delay="1s">
                        <div class="property-single-subtitle">
                            <h3>Features & Amenities</h3>
                        </div>

                        <div class="property-amenities-box">
                            <ul>
                                <li>Club House</li>
                                <li>Barbeque</li>
                                <li>Library</li>
                                <li>Gym</li>
                                <li>Party Lawn</li>
                                <li>Theater</li>
                                <li>Swimming Pool</li>
                                <li>Garden</li>
                                <li>Kids Play Area</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Property Amenities End -->

                    <!-- Property Map Start -->
                    <div class="property-map-location wow fadeInUp" data-wow-delay="1.25s">
                        <div class="property-single-subtitle">
                            <h3>Map Location</h3>
                        </div>

                        <div class="property-map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49359.77289774349!2d77.59174385159328!3d13.045949738664566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1707476041972!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <!-- Property Map End -->

                </div>
                <!-- Property Single Content End -->
            </div>

            <div class="col-lg-4">
                <!-- Property Single Sidebar Start -->
                <div class="porperty-single-sidebar">
                    <!-- Property Information Box Start -->
                    <div class="property-info-box wow fadeInUp" data-wow-delay="0.25s">
                        <h3>Other Details</h3>

                        <div class="property-info-lists">
                            <!-- Property Info item Start-->
                            <div class="property-info-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-property-location.svg')}}" alt="">
                                </div>

                                <p>123, Lorem ipsume Dolor, 3200</p>
                            </div>
                            <!-- Property Info item End-->

                            <!-- Property Info item Start-->
                            <div class="property-info-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-property-phone.svg')}}" alt="">
                                </div>

                                <p>(+0) 123 456 789</p>
                            </div>
                            <!-- Property Info item End-->

                            <!-- Property Info item Start-->
                            <div class="property-info-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-property-price.svg')}}" alt="">
                                </div>

                                <p>$ 150,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="property-inquiry-box wow fadeInUp" data-wow-delay="0.5s">
                        <h3>Send Inquiry</h3>
                        <div class="property-inquiry-form">
                            <form id="" action="{{ route('website.sendenquiry')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-12 mb-3">
                                        <input type="text" name="customername" class="form-control" id="customername" placeholder="Your Name" required>
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required>
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="Email">
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <input type="text" name="city" class="form-control" id="city" placeholder="Your City">
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <input type="text" name="state" class="form-control" id="city" placeholder="Your State">
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <input type="text" name="cityofproperty" class="form-control" id="city" placeholder="Property City">
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <select name="propertytype" class="form-control" data-placeholder="Choose Property Type" tabindex="1">
                                            <option value="">--Choose Property Type--</option>
                                            @foreach ($categories as $row)
                                            <option value="{{ ucfirst(strtolower($row->label)) }}">{{ ucfirst(strtolower($row->label)) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button type="submit" class="btn-default">Send Enquiry</button>
                                        <div id="msgSubmit" class="h3 text-left hidden"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
