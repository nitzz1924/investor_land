{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','Why To Invest')
@section('content')
<div class="hero hero-video">
    <div class="hero-section">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <video autoplay muted loop id="myVideo">
                <source src="{{asset('assets/images/demovidoe.mp4')}}" type="video/mp4"></video>
            <!-- Selfhosted Video End -->
        </div>
        <!-- Video End -->

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="hero-content">
                        <div class="section-title">
                            <h1 class="text-anime">Invest Today in Your Dream Home</h1>
                        </div>
                        <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.75s">
                            <a href="#" class="btn-default">View Property</a>
                            <a href="#" class="btn-default btn-border">Contact Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
