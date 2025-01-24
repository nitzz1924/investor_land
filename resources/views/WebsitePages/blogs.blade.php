{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title','Our Blogs')
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h1 class="text-anime">Our Blogs</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-archive-page">
    <div class="container">
        <div class="row">
            @foreach ($blogs as $blog)
            <div class="col-lg-4">
                <div class="post-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="post-featured-image">
                        <figure>
                            <a href="#"><img src="{{asset('assets/images/Blogs/'.$blog->blogthumbnail)}}" alt="Blog Image"></a>
                        </figure>

                        <div class="post-read-more">
                            <a href="{{ route('website.blogdetails',['id' => $blog->id]) }}" class="btn-default">Read More</a>
                        </div>
                    </div>
                    <div class="post-body">
                        <div class="post-category">
                            <ul>
                                <li><a href="#">{{$blog->blogname}}</a></li>
                            </ul>
                        </div>
                        <h3><a href="#">{{ Str::limit(strip_tags($blog->blogdescription),40)}}</a></h3>
                    </div>
                </div>
            </div>
            @endforeach
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
@endsection
