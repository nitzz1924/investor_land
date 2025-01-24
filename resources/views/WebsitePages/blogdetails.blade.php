{{------------------------------------------------------🔱🙏HAR HAR MAHADEV🔱🙏---------------------------------------------------- --}}
@extends('layouts.website')
@section('title',$blogdetails->blogname)
@section('content')
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header-box">
                    <h1 class="text-anime">{{$blogdetails->blogname}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-single-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="post-content">
                    <div class="post-featured-image wow fadeInUp" data-wow-delay="0.25s">
                        <figure class="image-anime">
                            <img height="700px" src="{{asset('assets/images/Blogs/'.$blogdetails->blogthumbnail)}}" alt="">
                        </figure>
                    </div>

                    <div class="row align-items-center">
                        <div class="col-lg-8">
                            <div class=" wow fadeInUp" data-wow-delay="0.25s">
                                Posted on :
                                <a class="fw-bold text-black">{{$blogdetails->created_at->format('d/M/Y')}}</a>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <!-- Post Sharing Links Start -->
                            <div class="post-social-sharing wow fadeInUp" data-wow-delay="0.5s">
                                <ul>
                                    <li> <a href="#" data-bs-toggle="tooltip" title="Click to copy" onclick="copyToClipboard(event)"><i class="fa-solid fa-share-nodes"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post-entry wow fadeInUp mt-4" data-wow-delay="0.5s">
                        @php
                        $cleanedContent = preg_replace('/contenteditable="[^"]*"/', '', $blogdetails->blogdescription);
                        @endphp
                        <p> {!! $cleanedContent !!}</p>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="post-sidebar">
                    <div class="category-box-widget wow fadeInUp" data-wow-delay="0.5s">
                        <h3>Categories</h3>

                        <ul>
                            @php
                            $categories = json_decode($blogdetails->blogcategories ?? '[]', true);
                            @endphp

                            @foreach ($categories as $category)
                            <li>{{ $category }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- Category Box End -->
                    <div class="recent-posts-widget wow fadeInUp" data-wow-delay="0.75s">
                        <h3>Recent Blogs</h3>

                        <div class="recent-posts-lists">
                            @foreach ($blogs->take(4) as $latest)
                            <div class="recent-post-item">
                                <div class="post-image">
                                    <img src="{{asset('assets/images/Blogs/'.$latest->blogthumbnail)}}" alt="">
                                </div>

                                <div class="post-info">
                                    <p class="meta"><a href="{{ route('website.blogdetails',['id' => $latest->id])}}">{{ implode(', ', json_decode($latest->blogcategories)) }}</a></p>
                                    <h4><a href="{{ route('website.blogdetails',['id' => $latest->id])}}">{{Str::limit($latest->blogname,15)}}</a></h4>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function copyToClipboard(event) {
        event.preventDefault();

        const currentUrl = window.location.href;
        navigator.clipboard.writeText(currentUrl)
            .then(() => {
                const toastHTML = `
                    <div class="toast position-fixed top-0 end-0 p-1 align-items-center text-bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true" style="z-index: 1050;">
                    <div class="toast-body">
                            URL copied to clipboard
                        </div>
                    </div>
                    `;

                const toastContainer = document.createElement('div');
                toastContainer.innerHTML = toastHTML;
                document.body.appendChild(toastContainer);

                const toastElement = new bootstrap.Toast(toastContainer.querySelector('.toast'));
                toastElement.show();
            })
            .catch(err => {
                console.error("Failed to copy URL: ", err);
            });
    }

</script>
@endsection
