{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title', $propertyName.' | Details',)
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h1 class="text-anime">{{$propertyName}}</h1>
                    <p class="text-anime text-white">{{$propertydetails->category}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-property-single">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="property-single-content">
                    <div class="property-photos-slider wow fadeInUp" data-wow-delay="0.25s">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @if ($propertydetails->gallery)
                                @foreach (json_decode($propertydetails->gallery) as $img)
                                <div class="swiper-slide">
                                    <div class="property-photo-item">
                                        <figure class="image-anime">
                                            <img class="" height="600px" src="{{asset($img)}}" alt="">
                                        </figure>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                            <div class="swiper-arrow-prev"><i class="fa-solid fa-arrow-left"></i></div>
                            <div class="swiper-arrow-next"><i class="fa-solid fa-arrow-right"></i></div>
                        </div>
                    </div>
                    <div class="property-overview wow fadeInUp" data-wow-delay="0.5s">
                        <div class="property-single-subtitle">
                            <h3>Overview</h3>
                        </div>

                        <div class="property-overview-box">
                            <div class="property-overview-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-bedrooms.svg')}}" alt="">
                                </div>

                                <div class="property-overview-content">
                                    <h3>Bedrooms</h3>
                                    <p>{{$propertydetails->bedroom}}</p>
                                </div>
                            </div>
                            <div class="property-overview-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-bathrooms.svg')}}" alt="">
                                </div>

                                <div class="property-overview-content">
                                    <h3>Bathrooms</h3>
                                    <p>{{$propertydetails->bathroom}}</p>
                                </div>
                            </div>
                            <div class="property-overview-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-areas.svg')}}" alt="">
                                </div>

                                <div class="property-overview-content">
                                    <h3>Area</h3>
                                    <p>{{$propertydetails->squarefoot}} sq ft</p>
                                </div>
                            </div>
                            <div class="property-overview-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-garages.svg')}}" alt="">
                                </div>

                                <div class="property-overview-content">
                                    <h3>Floors</h3>
                                    <p>{{$propertydetails->floor}}</p>
                                </div>
                            </div>
                            <div class="property-overview-item">
                                <div class="icon-box">
                                    <img src="{{asset('websiteAssets/images/icon-built-year.svg')}}" alt="">
                                </div>

                                <div class="property-overview-content">
                                    <h3>Year Built</h3>
                                    <p>{{$propertydetails->created_at->format('Y')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-property wow fadeInUp" data-wow-delay="0.75s">
                        <div class="property-single-subtitle">
                            <h3>About This Property</h3>
                        </div>

                        <div class="about-property-content">
                            <p>{{$propertydetails->discription}}</p>

                            <div class="about-property-cta">
                                <a href="{{ route('website.contactpage')}}" class="btn-default btn-border">Contact us</a>
                                <a href="tel:919461257675" class="btn-default"><i class="fa-solid fa-phone-volume"></i> +91-94612-57675</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="property-map-location wow fadeInUp" data-wow-delay="1.25s">
                        <div class="property-single-subtitle">
                            <h3>Tour this Property</h3>
                        </div>
                        <div class="row">
                            @if ($propertydetails->videos)
                            @foreach (json_decode($propertydetails->videos) as $videopart)
                            <div class="col-md-6">
                                <div class="item rounded-4 overflow-hidden">
                                    <video controls class="img-fluid">
                                        <source src="{{ asset($videopart) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <p class="text-center text-muted">No Videos Found</p>
                            @endif
                        </div>
                    </div>
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
                </div>
            </div>

            <div class="col-lg-4">
                <!-- Property Single Sidebar Start -->
                <div class="porperty-single-sidebar">
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
                    <div class="property-info-box wow fadeInUp" data-wow-delay="0.25s">
                        <h3>Other Details</h3>

                        <div class="property-info-lists">
                            <!-- Property Info item Start-->
                            <div class="property-info-item">
                                <div class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                        <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10" />
                                        <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                    </svg>
                                </div>

                                <p>123, Lorem ipsume Dolor, 3200</p>
                            </div>
                            <!-- Property Info item End-->

                            <!-- Property Info item Start-->
                            <div class="property-info-item">
                                <div class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                                        <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z" />
                                    </svg>
                                </div>

                                <p>+91-94612-57675</p>
                            </div>
                            <!-- Property Info item End-->

                            <!-- Property Info item Start-->
                            <div class="property-info-item">
                                <div class="icon-box">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z" />
                                    </svg>
                                </div>

                                <p>investorlands.com</p>
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
                                        <input type="text" value="{{ Auth::guard('customer')->check() ? Auth::guard('customer')->user()->name : '' }}" name="customername" class="form-control" id="customername" placeholder="Your Name" required>
                                    </div>

                                    <input type="hidden" name="propertyid" value="{{$propertydetails->id}}">
                                    <input type="hidden" name="userid" value="{{ Auth::guard('customer')->check() ? Auth::guard('customer')->user()->id : '' }}">

                                    <div class="form-group col-md-12 mb-3">
                                        <input type="text" value="{{ Auth::guard('customer')->check() ? Auth::guard('customer')->user()->mobile : '' }}" name="phone" class="form-control" id="phone" placeholder="Phone" required>
                                    </div>

                                    <div class="form-group col-md-12 mb-3">
                                        <input type="email" value="{{ Auth::guard('customer')->check() ? Auth::guard('customer')->user()->email : '' }}" name="email" class="form-control" id="email" placeholder="Email">
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
<script>
    setTimeout(function() {
        $('#successAlert').fadeOut('slow');
    }, 3000);

    setTimeout(function() {
        $('#dangerAlert').fadeOut('slow');
    }, 3000);

</script>
@endsection
