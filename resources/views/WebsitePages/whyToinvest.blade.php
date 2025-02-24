{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','Why To Invest')
@section('content')
<div class="hero hero-video">
    <div class="hero-section">
        <div class="hero-bg-video">
            <video autoplay muted loop id="myVideo">
                <source src="{{asset('assets/images/Investsettings/'.$investdata->bannervideo)}}" type="video/mp4"></video>
        </div>

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <div class="section-title">
                            <h1 class="text-anime">Invest Today in Your Dream Home</h1>
                        </div>
                        <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="{{ route('website.contactpage')}}" class="btn-default btn-border">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-6">
            <div class="about-property wow" data-wow-delay="0.75s">
                <div class="property-single-subtitle">
                    <h3>See the Future of Real Estate – Watch, Learn & Invest!" 🎥🏡</h3>
                </div>
                <div class="row">
                    @foreach (json_decode($investdata->videostoshare) as $videopart)
                    <div class="col-md-6">
                        <div class="item rounded-4 overflow-hidden mt-3">
                            <video controls class="img-fluid">
                                <source src="{{ asset($videopart) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="about-property wow " data-wow-delay="0.75s">
                <div class="property-single-subtitle">
                    <h3>Picture Your Investment – Explore Prime Properties!" 📸🏡</h3>
                </div>
                <div class="row">
                    @foreach (json_decode($investdata->imagestoshare) as $images)
                    <div class="col-md-6">
                        <div class="item rounded-4 overflow-hidden mt-3">
                            <img class="img-fluid" src="{{ asset($images) }}" class="img-fluid" alt="Property Image">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="about-property wow" data-wow-delay="0.75s">
                <div class="property-single-subtitle">
                    <h3>Unlock the Secrets to Profitable Property Investments!" 🔑🏘</h3>
                </div>
                <div class="about-property-content">
                    <p>{{$investdata->description}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
