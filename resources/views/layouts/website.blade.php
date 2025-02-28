{{-- // ----------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Awaiken">
    <title>@yield('title') | Investor Land</title>

    <!-- All CSS -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('websiteAssets/images/faviconinvestor.jpeg')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Sora:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="{{asset('websiteAssets/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('websiteAssets/css/slicknav.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('websiteAssets/css/swiper-bundle.min.css')}}">
    <link href="{{asset('websiteAssets/css/all.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('websiteAssets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('websiteAssets/css/magnific-popup.css')}}" rel="stylesheet">
    <link href="{{asset('websiteAssets/css/custom.css')}}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
</head>

<body class="tt-magic-cursor">

    <!-- Preloader Start -->
    {{-- <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{asset('websiteAssets/images/loader.svg')}}" alt=""></div>
    </div>
    </div> --}}
    <!-- Preloader End -->

    <!-- Magic Cursor Start -->
    <div id="magic-cursor">
        <div id="ball"></div>
    </div>
    <!-- Magic Cursor End -->

    <!-- Header Start -->
    <header class="main-header">
        <div class="header-sticky">
            <nav class="navbar navbar-expand-lg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-10">
                            <!-- Logo Start -->
                            <a class="navbar-brand" href="/" style="width: 360px;">
                                <img class="" src="{{asset('assets/images/finallogo.png')}}" alt="Logo">
                            </a>
                            <!-- Logo End -->
                        </div>
                        <div class="col-lg-9 col-2">
                            <!-- Main Menu start -->
                            <div class="collapse navbar-collapse main-menu">
                                <ul class="navbar-nav mr-auto" id="menu">
                                    <li class="nav-item"><a class="nav-link" href="{{ route('website.homepage')}}">Home</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('website.aboutpage')}}">About us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('website.propertylistings')}}">Properties</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('website.blogs')}}">Blogs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('website.whytoinvest')}}">Why to Invest ?</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{ route('website.contactpage')}}">Contact us</a></li>
                                    <li class="nav-item dropdown">
                                        @if(Auth::guard('customer')->check())
                                        @if(Auth::guard('customer')->user()->profile_photo_path)
                                        @if(Str::startsWith(Auth::guard('customer')->user()->profile_photo_path, 'https://'))
                                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ Auth::guard('customer')->user()->profile_photo_path ?? asset('assets/images/defaultuser.png') }}" alt="Profile" class="rounded-pill me-2" style="width: 30px; height: 30px; object-fit: cover;">
                                            {{ Auth::guard('customer')->user()->name }}
                                        </a>
                                        @else
                                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ 'assets/images/Users/'. Auth::guard('customer')->user()->profile_photo_path ?? asset('assets/images/defaultuser.png') }}" alt="Profile" class="rounded-pill me-2" style="width: 30px; height: 30px; object-fit: cover;">
                                            {{ Str::limit(Auth::guard('customer')->user()->name,7) }}
                                        </a>
                                        @endif
                                        @else
                                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <img src="{{ asset('assets/images/Users/defaultuser.png') }}" alt="modernize-img" width="40" height="40">
                                        </a>
                                        @endif
                                        <ul class="dropdown-menu" aria-labelledby="userMenu">
                                            <li><a class="dropdown-item" target="_blank" href="{{ route('user.dashboard') }}">My Dashboard</a></li>
                                            <li><a class="dropdown-item" target="_blank" href="{{ route('user.myprofile') }}">My Profile</a></li>
                                            <li>
                                                <form method="GET" action="{{ route('user.logoutuserpanel') }}">
                                                    @csrf
                                                    <button type="submit" class="dropdown-item">Log Out</button>
                                                </form>
                                            </li>
                                        </ul>
                                        @else
                                    <li class="nav-item highlighted-menu">
                                        <a class="nav-link" href="{{ route('website.userlogin') }}">Login</a>
                                    </li>
                                    @endif
                                    </li>
                                </ul>
                            </div>
                            <!-- Main Menu End -->

                            <div class="navbar-toggle"></div>
                        </div>
                    </div>
                </div>
            </nav>

            <div class="responsive-menu"></div>
        </div>
    </header>
    <!-- Header End -->
    <div class="main-content">
        @yield('content')
    </div>
    <!-- Footer Section Start -->
    <footer class="footer">
        <div class="mega-footer">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-4">
                        <div class="footer-contact-info">
                            <h1>Get in Touch</h1>
                            <div class="footer-about-content">
                                <p>Investor Lands is your trusted partner in achieving success. Join us as we redefine the future of real estate investments, one project at a time.</p>
                            </div>
                            <div class="footer-contact-box">
                                <div class="footer-info-box">
                                    <div class="icon-box">
                                        <img src="{{asset('websiteAssets/images/icon-location.svg')}}" alt="">
                                    </div>

                                    <p>123, Lorem Ipsum, Street no, Cityname, Country 123456</p>
                                </div>

                                <div class="footer-info-box">
                                    <div class="icon-box">
                                        <img src="{{asset('websiteAssets/images/icon-phone.svg')}}" alt="">
                                    </div>

                                    <p>+91-94612-57675</p>
                                </div>

                                <div class="footer-info-box">
                                    <div class="icon-box">
                                        <img src="{{asset('websiteAssets/images/icon-email.svg')}}" alt="">
                                    </div>

                                    <p>investorlands.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-appointment">
                            <h1>Appointment</h1>
                            <div class="footer-appointment-content">
                                <div class="contact-form wow fadeInUp" data-wow-delay="0.75s">
                                    <form id="contactForm" action="#" method="POST" data-toggle="validator">
                                        <div class="row">
                                            <div class="form-group col-md-6 mb-4">
                                                <input type="text" name="name" class="form-control footerforminput" id="name" placeholder="First Name" required>
                                            </div>

                                            <div class="form-group col-md-6 mb-4">
                                                <input type="text" name="lastname" class="form-control footerforminput" id="lastname" placeholder="Last Name" required>
                                            </div>

                                            <div class="form-group col-md-6 mb-4">
                                                <input type="email" name="email" class="form-control footerforminput" id="phone" placeholder="Email" required>
                                            </div>

                                            <div class="form-group col-md-6 mb-4">
                                                <input type="text" name="phone" class="form-control footerforminput" id="subject" placeholder="Phone" required>
                                            </div>

                                            <div class="form-group col-md-12 mb-4">
                                                <textarea name="addresss" class="form-control footerforminput" id="msg" rows="4" placeholder="Address" required></textarea>
                                            </div>

                                            <div class="col-md-12 text-center">
                                                <button type="submit" class="btn-default">Submit</button>
                                                <div id="msgSubmit" class="h3 text-left hidden"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-quick-links">
                            <h1>Quick Links</h1>
                            <ul>
                                <li><a href="{{ route('website.homepage')}}">Home</a></li>
                                <li><a href="{{ route('website.aboutpage')}}">About Us</a></li>
                                <li><a href="{{ route('website.propertylistings')}}">Properties</a></li>
                                <li><a href="{{ route('website.blogs')}}">Blogs</a></li>
                                <li><a href="{{ route('website.contactpage')}}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer Copyright Section Start -->
    <div class="footer-copyright-links">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <!-- Footer Copyright Content Start -->
                    <div class="footer-copyright">
                        <p>Copyright © 2025 Investor Lands. All rights reserved.</p>
                    </div>
                    <!-- Footer Copyright Content End -->
                </div>

                <div class="col-md-6">
                    <!-- Footer Policy Links Start -->
                    <div class="footer-policy-links">
                        <ul>
                            <li><a href="#">Privacy & Policy</a></li>
                            <li><a href="#">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="">
        <!-- Call Button -->
        <a href="tel:+917073880500" class="call-btn animate-up-down" style="position: fixed; left: 20px; bottom: 80px; background-color: #726555; color: white; padding: 10px 20px; border-radius: 50px; text-align: center; z-index: 1000;">
            <i class="fas fa-phone"></i>
        </a>
        <!-- WhatsApp Button -->
        <a href="https://wa.me/917073880500" class="whatsapp-btn animate-up-down" style="position: fixed; left: 20px; bottom: 20px; background-color: #25D366; color: white; padding: 10px 20px; border-radius: 50px; text-align: center; z-index: 1000;">
            <i class="fab fa-whatsapp fs-4"></i>
        </a>
    </div>

    <style>
        .animate-up-down {
            animation: upDown 1s infinite alternate;
        }

        @keyframes upDown {
            0% {
                transform: translateY(0);
            }

            100% {
                transform: translateY(-10px);
            }
        }

    </style>


    <!-- ALL JS -->
    <script src="{{asset('websiteAssets/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('websiteAssets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('websiteAssets/js/validator.min.js')}}"></script>
    <script src="{{asset('websiteAssets/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('websiteAssets/js/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('websiteAssets/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('websiteAssets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('websiteAssets/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('websiteAssets/js/SmoothScroll.js')}}"></script>
    <script src="{{asset('websiteAssets/js/parallaxie.js')}}"></script>
    <script src="{{asset('websiteAssets/js/gsap.min.js')}}"></script>
    <script src="{{asset('websiteAssets/js/magiccursor.js')}}"></script>
    <script src="{{asset('websiteAssets/js/splitType.js')}}"></script>
    <script src="{{asset('websiteAssets/js/ScrollTrigger.min.js')}}"></script>
    <script src="{{asset('websiteAssets/js/wow.js')}}"></script>
    <script src="{{asset('websiteAssets/js/function.js')}}"></script>
    <script src="{{asset('websiteAssets/js/toastr-init.js')}}"></script>
    <script src="{{asset('websiteAssets/js/calculator.js')}}"></script>
    <script src="{{asset('websiteAssets/js/apex.line.init.js')}}"></script>
    <script src="{{asset('websiteAssets/js/apexcharts.min.js')}}"></script>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LeyKeMqAAAAAO5XBgLOWNwdGUY0WFnaONWm5N78"></script>
    <script>
        grecaptcha.ready(function() {
            grecaptcha.execute('6LeyKeMqAAAAAO5XBgLOWNwdGUY0WFnaONWm5N78', {
                action: 'submit'
            }).then(function(token) {
                document.getElementById('g-recaptcha-response').value = token;
                document.getElementById('g-recaptcha-responseAgent').value = token;
            });
        });

    </script>
</body>
</body>
</html>
