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
                    <h3 class="text-anime text-white">{{$propertydetails->nearbylocation}}</h3>
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
                    <div class="property-overview wow " data-wow-delay="0.5s">
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
                    <div class="about-property wow " data-wow-delay="0.75s">
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


                    @if(!empty($propertydetails->masterplandoc))
                    <div class="property-amenities wow" data-wow-delay="1s">
                        <div class="property-single-subtitle">
                            <h3>Master Plans</h3>
                        </div>

                        <div class="property-amenities-box">
                            @php
                            $fileExtension = pathinfo($propertydetails->masterplandoc, PATHINFO_EXTENSION);
                            @endphp

                            @if(in_array(strtolower($fileExtension), ['jpg', 'jpeg']))
                                <img src="{{ asset('assets/images/Listings/' . $propertydetails->masterplandoc) }}" alt="Master Plan" style="max-width: 100%; height: auto;">
                                <div class="d-flex justify-content-center mt-3">
                                    <a href="{{ asset('assets/images/Listings/' . $propertydetails->masterplandoc) }}" download class="btn-default">Download</a>
                                </div>
                            @elseif(strtolower($fileExtension) == 'pdf')
                                <iframe src="{{ asset('assets/images/Listings/' . $propertydetails->masterplandoc) }}" width="100%" height="600px"></iframe>
                            @else
                                <p>Unsupported file format</p>
                            @endif
                        </div>
                    </div>
                    @endif



                    @if (!empty($propertydetails->videos))
                    <div class="property-map-location wow " data-wow-delay="1.25s">
                        <div class="property-single-subtitle">
                            <h3>Tour this Property</h3>
                        </div>
                        <div class="row">
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
                        </div>
                    </div>
                    @endif

                    @if(!empty($propertydetails->amenties))
                    <div class="property-amenities wow " data-wow-delay="1s">
                        <div class="property-single-subtitle">
                            <h3>Features & Amenities</h3>
                        </div>

                        <div class="property-amenities-box">
                            <ul>
                                @foreach (json_decode($propertydetails->amenties) as $amenti)
                                <li>{{$amenti}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    @endif

                    <div class="property-map-location wow" data-wow-delay="1.25s">
                        <div class="property-single-subtitle">
                            <h3>Mortgage Calculator</h3>
                            <div class="calculator mt-3">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <label for="totalPrice">Total Price (INR):</label>
                                            <input type="number" id="totalPrice" value="146784424" />
                                            <input type="range" id="totalPriceRange" min="10000000" max="500000000" value="146784424" step="100000" />
                                        </div>
                                        <div class="input-group">
                                            <label for="loanPeriod">Loan Period (Years):</label>
                                            <input type="number" id="loanPeriod" value="25" />
                                            <input type="range" id="loanPeriodRange" min="1" max="30" value="25" step="1" />
                                        </div>
                                        <div class="input-group">
                                            <label for="downPayment">Down Payment (INR):</label>
                                            <input type="number" id="downPayment" value="29356885" />
                                            <input type="range" id="downPaymentRange" min="0" max="146784424" value="29356885" step="100000" />
                                        </div>
                                        <div class="input-group">
                                            <label for="interestRate">Interest Rate (%):</label>
                                            <input type="number" id="interestRate" value="4.74" />
                                            <input type="range" id="interestRateRange" min="1" max="20" value="4.74" step="0.01" />
                                        </div>
                                        {{-- <button class="btn-default" onclick="calculateMortgage()">Calculate</button> --}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="result">
                                            <h2>INR <span id="monthlyPayment">668,792</span> per month</h2>
                                            <p>
                                                TOTAL LOAN AMOUNT: INR
                                                <span id="totalLoanAmount">200,639,866</span>
                                            </p>
                                        </div>
                                        <div class="chart-container">
                                            <canvas id="paymentChart"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="property-amenities wow " data-wow-delay="1s">
                        <div class="property-single-subtitle">
                            <h3>Price Trend</h3>
                        </div>
                        <div class="property-amenities-box">
                            <div id="chart-line-basic" class="mx-n3"></div>
                        </div>
                    </div>
                    <div class="property-map-location wow" data-wow-delay="1.25s">
                        <div class="property-single-subtitle">
                            <h3>Map Location</h3>
                        </div>

                        <div class="property-map-iframe">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d49359.77289774349!2d77.59174385159328!3d13.045949738664566!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae1670c9b44e6d%3A0xf8dfc3e8517e4fe0!2sBengaluru%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1707476041972!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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


                    <div class="recent-posts-widget wow fadeInUp" data-wow-delay="0.75s">
                        <h3>Related Properties</h3>
                        <div class="recent-posts-lists">
                            @foreach ($listings->take(4) as $latest)
                            <div class="recent-post-item">
                                <div class="post-image">
                                <a target="_blank" href="{{ route('website.propertydetails',['id' => $latest->id])}}">
                                    <img src="{{asset('assets/images/Listings/'.$latest->thumbnail)}}" alt="">
                                </a>
                                </div>

                                <div class="post-info">
                                    <p class="meta"><a target="_blank" href="{{ route('website.propertydetails',['id' => $latest->id])}}">{{ $latest->category }}</a></p>
                                    <h4><a href="{{ route('website.propertydetails',['id' => $latest->id])}}">{{Str::limit($latest->property_name,15)}}</a></h4>
                                </div>
                            </div>
                            @endforeach
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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    setTimeout(function() {
        $('#successAlert').fadeOut('slow');
    }, 3000);

    setTimeout(function() {
        $('#dangerAlert').fadeOut('slow');
    }, 3000);

</script>
@endsection
