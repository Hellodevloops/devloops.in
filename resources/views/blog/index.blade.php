@extends('layout.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<style>
    .page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color:#ff0080 !important;
    border-color:#ff0080 !important;
    height: 35px;
    width: 40px;
    text-align: center !important;
}
</style>
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
                                        <span>{{ $post->created_at->format('F d, Y') }}</span>
                                        <h4 class="tp-blog-two-title">
                                            <a href="{{ route('post.show', ['slug' => $post->slug]) }}" class="truncate-title">{{ $post->title }}</a>
                                        </h4>
                                        <div class="tp-blog-two-btn">
                                            <a href="{{ route('post.show', ['slug' => $post->slug]) }}">Read More</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <style>
                        .truncate-title {
                            display: -webkit-box;
                            -webkit-line-clamp: 2;
                            -webkit-box-orient: vertical;
                            overflow: hidden;
                            text-overflow: ellipsis;
                        }

                    </style>
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
                 <!-- Pagination start -->
                 <style>
                    .page-item:not(:first-child) .page-link {
    margin-left: calc(var(--bs-border-width)* -1);
}

.page-item.active .page-link {
    z-index: 3;
    color: #fff;
    background-color: #ff0080;
    border-color: #ff0080;
}
.page-link {
    position: relative;
    display: block;
    padding: .5rem .75rem;
    margin-left: -1px;
    line-height: 1.25;
    color: #ff0080;
    background-color: #fff;
    border: 1px solid #dee2e6;
}
                 </style>
    <div class="row gy-3 align-items-center" style="margin-left:41%; margin-top:50px;">
        <div class="col col-md-4 col-6 order-md-3 order-2">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-end">
                    {{-- Previous Page Link --}}
                    {{-- @if ($blog_posts->onFirstPage())
                        <li class="page-item" aria-disabled="true" aria-label="@lang('pagination.previous')">
                            <span class="page-link" aria-hidden="true" style="width: 40px; height:35px; padding-top:10px;">
                                <i class="bi-chevron-double-left small"></i>
                            </span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $blog_posts->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                                <i class="bi-chevron-double-left small"  style="width: 40px; height:35px; padding-top:10px;"></i>
                            </a>
                        </li>
                    @endif --}}

                    {{-- Page Numbers --}}
                    @for ($i = 1; $i <= $blog_posts->lastPage(); $i++)
                        <li class="page-item {{ $i === $blog_posts->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $blog_posts->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor

                    {{-- Next Page Link --}}
                    {{-- @if ($blog_posts->hasMorePages())
                        <li class="page-item">
                            <a class="page-link"  style="width: 40px; height:35px; padding-top:10px;" href="{{ $blog_posts->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                                <i class="bi-chevron-double-right small" ></i>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled" aria-disabled="true"  style="width: 40px; height:35px; " aria-label="@lang('pagination.next')">
                            <span class="page-link" aria-hidden="true">
                                <i class="bi-chevron-double-right small"></i>
                            </span>
                        </li>
                    @endif --}}
                </ul>
            </nav>
        </div>
    </div>
    <!-- Pagination ends -->
            </div>
        </section>
        <!-- blog-area-end -->

    </main>
@endsection
