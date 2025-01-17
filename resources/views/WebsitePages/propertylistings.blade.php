{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','Listings')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h1 class="text-anime">Property Listings</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-property-listing">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="property-listings">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="property-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="{{asset('websiteAssets/images/property-1.jpg')}}" alt="">
                                    </figure>
                                    <span class="property-label">Rent</span>
                                </div>
                                <div class="property-body">
                                    <h3>Cedar Ridge Estates</h3>
                                    <p>New York City, CA, USA</p>
                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-badroom.svg')}}" alt="">
                                            </div>
                                            <span>6 Bedsroom</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-bathroom.svg')}}" alt="">
                                            </div>
                                            <span>3 Bathrooms</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-area.svg')}}" alt="">
                                            </div>
                                            <span>720 sq ft</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-garage.svg')}}" alt="">
                                            </div>
                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="property-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="{{asset('websiteAssets/images/property-2.jpg')}}" alt="">
                                    </figure>
                                    <span class="property-label">Rent</span>
                                </div>
                                <div class="property-body">
                                    <h3>Willow Creek Manor</h3>
                                    <p>New York City, CA, USA</p>
                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-badroom.svg')}}" alt="">
                                            </div>
                                            <span>6 Bedsroom</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-bathroom.svg')}}" alt="">
                                            </div>
                                            <span>3 Bathrooms</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-area.svg')}}" alt="">
                                            </div>
                                            <span>720 sq ft</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-garage.svg')}}" alt="">
                                            </div>
                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="property-item wow fadeInUp" data-wow-delay="0.75s">
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="{{asset('websiteAssets/images/property-3.jpg')}}" alt="">
                                    </figure>
                                    <span class="property-label">Rent</span>
                                </div>
                                <div class="property-body">
                                    <h3>Sunset View Apartments</h3>
                                    <p>New York City, CA, USA</p>
                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-badroom.svg')}}" alt="">
                                            </div>
                                            <span>6 Bedsroom</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-bathroom.svg')}}" alt="">
                                            </div>
                                            <span>3 Bathrooms</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-area.svg')}}" alt="">
                                            </div>
                                            <span>720 sq ft</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-garage.svg')}}" alt="">
                                            </div>
                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="property-item wow fadeInUp" data-wow-delay="1s">
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="{{asset('websiteAssets/images/property-4.jpg')}}" alt="">
                                    </figure>
                                    <span class="property-label">Rent</span>
                                </div>
                                <div class="property-body">
                                    <h3>Riverwalk Residences</h3>
                                    <p>New York City, CA, USA</p>
                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-badroom.svg')}}" alt="">
                                            </div>
                                            <span>6 Bedsroom</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-bathroom.svg')}}" alt="">
                                            </div>
                                            <span>3 Bathrooms</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-area.svg')}}" alt="">
                                            </div>
                                            <span>720 sq ft</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-garage.svg')}}" alt="">
                                            </div>
                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="property-item wow fadeInUp" data-wow-delay="1.25s">
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="{{asset('websiteAssets/images/property-5.jpg')}}" alt="">
                                    </figure>
                                    <span class="property-label">Rent</span>
                                </div>
                                <div class="property-body">
                                    <h3>Mountain View Condos</h3>
                                    <p>New York City, CA, USA</p>
                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-badroom.svg')}}" alt="">
                                            </div>
                                            <span>6 Bedsroom</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-bathroom.svg')}}" alt="">
                                            </div>
                                            <span>3 Bathrooms</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-area.svg')}}" alt="">
                                            </div>
                                            <span>720 sq ft</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-garage.svg')}}" alt="">
                                            </div>
                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="property-item wow fadeInUp" data-wow-delay="1.5s">
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="{{asset('websiteAssets/images/property-6.jpg')}}" alt="">
                                    </figure>
                                    <span class="property-label">Rent</span>
                                </div>
                                <div class="property-body">
                                    <h3>Beachfront Bungalows</h3>
                                    <p>New York City, CA, USA</p>
                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-badroom.svg')}}" alt="">
                                            </div>
                                            <span>6 Bedsroom</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-bathroom.svg')}}" alt="">
                                            </div>
                                            <span>3 Bathrooms</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-area.svg')}}" alt="">
                                            </div>
                                            <span>720 sq ft</span>
                                        </div>
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-garage.svg')}}" alt="">
                                            </div>
                                            <span>1 Garages</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-footer">
                                    <p class="property-price">$150,000</p>
                                    <a href="#" class="btn-default">View Property</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-pagination wow fadeInUp" data-wow-delay="1.5s">
                                <ul class="pagination">
                                    <li><a href="#"><i class="fa-solid fa-arrow-left-long"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa-solid fa-arrow-right-long"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="property-sidebar">
                    <div class="property-category-box wow fadeInUp" data-wow-delay="0.25s">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Houses</a></li>
                            <li><a href="#">Apartments</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Townhome</a></li>
                            <li><a href="#">Bungalow</a></li>
                        </ul>
                    </div>
                    <div class="need-help-box wow fadeInUp" data-wow-delay="0.5s">
                        <div class="need-help-img">
                            <figure>
                                <img src="{{asset('websiteAssets/images/need-help-bg.jpg')}}" alt="">
                            </figure>
                            <div class="need-help-content">
                                <h3>Need Help?<br> Talk to Our Expert.</h3>
                                <a href="#" class="btn-default"><i class="fa-solid fa-phone-volume"></i> +91-94612-57675</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
