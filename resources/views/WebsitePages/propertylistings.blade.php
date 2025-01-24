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
                        @foreach ($listings as $list)
                        <div class="col-md-6">
                            <div class="property-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="property-header">
                                    <figure class="image-anime">
                                        <img src="{{asset('assets/images/Listings/'.$list->thumbnail)}}" alt="">
                                    </figure>

                                    <span class="property-label">{{$list->category}}</span>
                                </div>
                                <div class="property-body">
                                    <h3>{{$list->property_name}}</h3>
                                    <p>{{$list->address}}</p>

                                    <div class="property-meta">
                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-badroom.svg')}}" alt="">
                                            </div>
                                            <span>{{$list->bedroom}} Bedsroom</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-bathroom.svg')}}" alt="">
                                            </div>
                                            <span>{{$list->bathroom}} Bathrooms</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-area.svg')}}" alt="">
                                            </div>
                                            <span>{{$list->squarefoot}} sq ft</span>
                                        </div>

                                        <div class="property-amenity-item">
                                            <div class="icon-box">
                                                <img src="{{asset('websiteAssets/images/icon-garage.svg')}}" alt="">
                                            </div>
                                            <span>{{$list->floor}} Floors</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="property-footer">
                                    <span class="badge {{$list->status == 'published' ? 'text-bg-success' : 'text-bg-danger' }}"> {{ ucfirst($list->status) }}</span>
                                    <a href="{{route('website.propertydetails',['id'=> $list->id])}}" class="btn-default">View Property</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="post-pagination wow fadeInUp" data-wow-delay="1.5s">
                                {{ $listings->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="property-sidebar">
                    {{-- <div class="property-category-box wow fadeInUp" data-wow-delay="0.25s">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Houses</a></li>
                            <li><a href="#">Apartments</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Townhome</a></li>
                            <li><a href="#">Bungalow</a></li>
                        </ul>
                    </div> --}}
                    <div class="need-help-box wow fadeInUp" data-wow-delay="0.5s">
                        <div class="need-help-img">
                            <figure>
                                <img src="{{asset('websiteAssets/images/need-help-bg.jpg')}}" alt="">
                            </figure>
                            <div class="need-help-content">
                                <h3>Need Help?<br> Talk to Our Expert.</h3>
                                <a href="tel:919461257675" class="btn-default"><i class="fa-solid fa-phone-volume"></i> +91-94612-57675</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
