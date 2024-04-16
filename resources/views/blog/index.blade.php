@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}l">Home</a></span>
                                <span> / Blog</span>
                            </div>
                            <h2 class="breadcrumb-title">Blog</h2>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="breadcrumb-shape">
                <div class="breadcrumb-shape-1 wow fadeInRight" data-wow-duration="1.8s" data-wow-delay=".4s">
                    <img src="assets/img/breadcrumb/breadcrumb-shape-1.png" alt="">
                </div>
                <div class="breadcrumb-shape-4 wow slideInRight" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/img/breadcrumb/breadcrumb-shape-3.png" alt="">
                </div>
                <div class="breadcrumb-shape-5 wow slideInRight" data-wow-duration="1.4s" data-wow-delay=".3s">
                    <img src="assets/img/breadcrumb/breadcrumb-shape-2.png" alt="">
                </div>
            </div> --}}
        </section>
        <!-- breadcrumb-area-end -->

        <!-- blog-area-start -->
        <section class="blog-area tp-blog-inner pt-120 pb-120">
            <div class="container">
                <div class="row">
                    @foreach ($blog_posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <div class="tp-blog-two mb-30">
                                <div class="tp-blog-two-item">
                                    <div class="tp-blog-two-thumb overlay-anim tp-thumb-common fix">
                                        <div class="tp-thumb-common-overlay wow"></div>
                                        <a href="{{ route('post.show', ['slug' => $post->slug]) }}">
                                            <img src="{{ $post->hero }}" alt="{{ $post->title }}">
                                            <div class="tp-blog-two-thumb-plus">
                                                <i class="fa-regular fa-plus"></i>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="tp-blog-two-content">
                                        <span>{{ $post->created_at->format('F d, Y') }} _ IT Service</span>
                                        <h4 class="tp-blog-two-title">
                                            <a
                                                href="{{ route('post.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
                                        </h4>
                                        <div class="tp-blog-two-btn">
                                            <a href="{{ route('post.show', ['slug' => $post->slug]) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-6">
                        <div class="tp-blog-two mb-30">
                            <div class="tp-blog-two-item">
                                <div class="tp-blog-two-thumb overlay-anim tp-thumb-common fix">
                                    <div class="tp-thumb-common-overlay wow"></div>
                                    <a href="blog-details.html">
                                        <img src="assets/img/blog/inner/inner-blog-1.jpg" alt="">
                                        <div class="tp-blog-two-thumb-plus">
                                            <i class="fa-regular fa-plus"></i>
                                        </div>
                                    </a>
                                </div>
                                <div class="tp-blog-two-content">
                                    <span>March 23, 2023 _ IT Service</span>
                                    <h4 class="tp-blog-two-title">
                                        <a href="blog-details.html">A Simple Social Media Marketing List</a>
                                    </h4>
                                    <div class="tp-blog-two-btn">
                                        <a href="blog-details.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="basic-pagination text-center mt-20">
                            <nav>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="fa-light fa-arrow-left-long"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <span class="current">2</span>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#">...</a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa-light fa-arrow-right-long"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- blog-area-end -->

    </main>
@endsection
