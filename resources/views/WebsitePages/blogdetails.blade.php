{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','Blog Details')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h1 class="text-anime">Top Neighborhoods for Families</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-single-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Post Content Start -->
                <div class="post-content">
                    <!-- Post Featured Image Start -->
                    <div class="post-featured-image wow fadeInUp" data-wow-delay="0.25s">
                        <figure class="image-anime">
                            <img src="{{asset('websiteAssets/images/post-5.jpg')}}" alt="">
                        </figure>
                    </div>
                    <!-- Post Featured Image End -->

                    <!-- Post Entry Start -->
                    <div class="post-entry wow fadeInUp" data-wow-delay="0.5s">
                        <p>19 ways gossip movies can find you the love of your life. Will homemade beauty products ever rule the world? Why inspirational quotes are afraid of the truth. How inspirational quotes can make you sick. Why your professional beauty supply never works out the way you plan. 9 facts about inspirational quotes that'll keep you up at night. The 7 worst songs about lifestyle blogs. 8 myths uncovered about inspirational books. The complete beginner's guide to lifestyle blogs. 8 ways inspirational books are completely overrated.</p>

                        <h2>MinorHeading</h2>

                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here'.</p>

                        <blockquote>
                            <p>"Why you'll never succeed at inspirational quotes. Why you shouldn't eat love quote in bed. The 11 biggest lifestyle market blunders."</p>
                        </blockquote>

                        <p>making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>

                        <h2>Where does it come from?</h2>

                        <ul>
                            <li>There are many variations of passages of Lorem Ipsum available.</li>
                            <li>The majority have suffered alteration in some form, by injected humour.</li>
                            <li>Randomised words which don't look even slightly believable.</li>
                            <li>If you are going to use a passage of Lorem Ipsum.</li>
                            <li>You need to be sure there isn't anything embarrassing hidden in the middle of text.</li>
                        </ul>

                        <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
                    </div>
                    <!-- Post Entry End -->

                    <div class="row">
                        <div class="col-lg-8">
                            <!-- Post Tags Start -->
                            <div class="post-tags wow fadeInUp" data-wow-delay="0.25s">
                                Tags :
                                <a href="#">House</a>
                                <a href="#">Office</a>
                                <a href="#">Bungalow</a>
                            </div>
                            <!-- Post Tags End -->
                        </div>

                        <div class="col-lg-4">
                            <!-- Post Sharing Links Start -->
                            <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                            <!-- Post Sharing Links End -->
                        </div>
                    </div>
                </div>
                <!-- Post Content End -->
            </div>

            <div class="col-lg-4">
                <!-- Post Sidebar Start -->
                <div class="post-sidebar">
                    <!-- Search Widget Start -->
                    <div class="search-box-widget wow fadeInUp" data-wow-delay="0.25s">
                        <div class="search-form">
                            <form action="#" method="get">
                                <div class="input-group">
                                    <input class="form-control" type="search" placeholder="search">
                                    <span class="input-group-append">
                                        <button class="btn-default" type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Search Widget End -->

                    <!-- Category Box Start -->
                    <div class="category-box-widget wow fadeInUp" data-wow-delay="0.5s">
                        <h3>Categories</h3>

                        <ul>
                            <li><a href="#">Houses</a></li>
                            <li><a href="#">Apartments</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Townhome</a></li>
                            <li><a href="#">Bungalow</a></li>
                        </ul>
                    </div>
                    <!-- Category Box End -->

                    <!-- Popular Tags Widget Start -->
                    <div class="popular-tags-widget wow fadeInUp" data-wow-delay="1s">
                        <h3>Popular Tags</h3>

                        <div class="tag-clouds">
                            <ul>
                                <li><a href="#">Bungalow</a></li>
                                <li><a href="#">Residential</a></li>
                                <li><a href="#">Commercial</a></li>
                                <li><a href="#">Market</a></li>
                                <li><a href="#">Rental</a></li>
                                <li><a href="#">Agent</a></li>
                                <li><a href="#">Seller</a></li>
                                <li><a href="#">Renovation</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Popular Tags Widget End -->
                </div>
                <!-- Post Sidebar End -->
            </div>
        </div>
    </div>
</div>
@endsection
