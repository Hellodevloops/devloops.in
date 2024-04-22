@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">

            <div class="breadcrumb-bg" data-background="{{ $post->hero }}"></div>

            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                                <span> / Blog Details</span>
                            </div>
                            <h2 class="breadcrumb-title">{{ $post->title }}</h2>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="breadcrumb-shape">
                <div class="breadcrumb-shape-1 wow fadeInRight" data-wow-duration="1.8s" data-wow-delay=".4s">
                    <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
                </div>
                <div class="breadcrumb-shape-4 wow slideInRight" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-3.png') }}" alt="">
                </div>
                <div class="breadcrumb-shape-5 wow slideInRight" data-wow-duration="1.4s" data-wow-delay=".3s">
                    <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
                </div>
            </div> --}}
        </section>
        <!-- breadcrumb-area-end -->

        <!-- postbox area start -->
        <section class="postbox__area pt-145 pb-105">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 col-xl-8 col-lg-7">
                        <div class="postbox-main-wrapper mb-35 pr-30">
                            <div class="postbox-meta-wrapper">
                                <article class="postbox-item format-image mb-50 transition-3">
                                    <div class="postbox-thumb w-img">
                                        <a href="blog-details.html">
                                            <img src="{{ $post->hero }}" alt="">
                                        </a>
                                    </div>
                                    <div class="postbox-content">
                                        <div class="postbox-meta">
                                            <span><a href="#"><i
                                                        class="fa-light fa-user"></i>{{ $post->author_name->name }}</a></span>
                                            {{-- <span><i class="fa-thin fa-tag"></i>Solution</span>
                                   <span><a href="#"><i class="fa-light fa-comments"></i>02 Comments </a></span> --}}
                                        </div>
                                        {{-- <h3 class="postbox-title"> Let’s understand different types data</h3> --}}
                                        <div class="postbox-text">
                                            <p>{!! $post->body !!}</p>
                                            {{-- <p>Suspendisse ultricies vestibulum vehicula. Proin laoreet porttitor lacus. Duis auctor vel ex eu elementum. Fusce eu volutpat felis. Proin sed eros tincidunt, sagittis sapien eu, porta diam. Aenean finibus scelerisque nulla non facilisis. Fusce vel orci sed quam gravid</p> --}}
                                            {{-- <div class="postbox-thumb-sm mb-30">
                                      <div class="row">
                                         <div class="col-lg-6 col-md-6">
                                            <div class="postbox-thumb-sm-item">
                                               <img src="assets/img/blog/postbox-thumb-1.jpg" alt="">
                                            </div>
                                         </div>
                                         <div class="col-lg-6 col-md-6">
                                            <div class="postbox-thumb-sm-item">
                                               <img src="assets/img/blog/postbox-thumb-2.jpg" alt="">
                                            </div>
                                         </div>
                                      </div>
                                   </div> --}}
                                            {{-- <h3 class="postbox-title">Our Personal Approach</h3>
                                   <p>Aliquam condimentum, massa vel mollis volutpat, erat sem pharetra quam, ac mattis arcu elit non massa. Nam mollis nunc velit, vel varius arcu fringilla tristique. Cras elit nunc, sagittis eu bibendum eu, ultrices placerat sem. Praesent vitae metus auctor.</p>
                                   <div class="postbox-blockquote">
                                      <blockquote>
                                         <div class="postbox-blockquote-thumb">
                                            <img src="assets/img/blog/blockquote.png" alt="">
                                         </div>
                                         <div class="postbox-blockquote-content">
                                            <h4>And the day came when the risk to remain tight in a bud was more painful than the risk.</h4>
                                            <span>- MR Tanvir</span>
                                         </div>
                                      </blockquote>
                                   </div>
                                   <p>Supported substance consolidates parts of web based promoting and substance showcasing. It includes making substance, for example, a blog entry or video and paying for its consideration on a site that routinely distributes comparative substance. A piece of supported substance will seem to be like the remainder of the substance on the site yet will <span>incorporate some sign</span> that it’s supported. With execution showcasing, you would pay a pre-decided aps on your supported article navigates to your site from the article.</p> --}}
                                        </div>
                                    </div>
                                </article>
                            </div>
                            {{-- <div class="postbox-meta-wrapper">
                          <div class="postbox-share mb-70">
                             <div class="row">
                                <div class="col-xl-6 col-lg-6">
                                   <div class="tagcloud tagcloud-sm mb-30">
                                      <span>Tag:</span>
                                      <a href="#">Technology</a>
                                      <a href="#">IT</a>
                                   </div>
                                </div>
                                <div class="col-xl-6 col-lg-6">
                                   <div class="postbox-social text-lg-end mb-20">
                                      <span>Share:</span>
                                      <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                      <a class="social-fb" href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                      <a class="social-pin" href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                                      <a class="social-link" href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="postbox-details-author d-sm-flex align-items-center mb-50">
                             <div class="postbox-details-author-thumb">
                                <a href="#">
                                   <img src="assets/img/blog/postbox-user-1.png" alt="">
                                </a>
                             </div>
                             <div class="postbox-details-author-content">
                                <h5 class="postbox-details-author-title">
                                   <a href="#">Harry Newman</a>
                                </h5>
                                <p>Supported substance consolidates parts of web promoting and substance showcasing. It includes making</p>
                                <div class="postbox-details-author-social">
                                   <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                   <a href="#"><i class="fa-brands fa-twitter"></i></a>
                                   <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                   <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div class="postbox-comment mb-50">
                          <h4 class="postbox-comment-title">
                             Comments (3)
                          </h4>
                          <ul>
                             <li>
                                <div class="postbox-comment-box">
                                   <div class="postbox-comment-avater">
                                      <img src="assets/img/blog/blog-details-avatar-1.png" alt="">
                                   </div>
                                   <div class="postbox-comment-content">
                                      <div class="postbox-comment-author">
                                         <p class="postbox-comment-name">Mithcel Adnan</p>
                                      </div>
                                      <p>Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien vel nunc molestie pulvinar at vitae quam. Aliquam lobortis nisi vitae congue consectetur. Aliquam  non metus</p>
                                      <div class="postbox-comment-reply">
                                         <a href="#"><span><img src="assets/img/blog/arrow-left.svg" alt="arrow">Reply</span></a>
                                      </div>
                                   </div>
                                </div>
                                <ul class="children">
                                   <li>
                                      <div class="postbox-comment-box">
                                         <div class="postbox-comment-avater">
                                            <img src="assets/img/blog/blog-details-avatar-2.png" alt="">
                                         </div>
                                         <div class="postbox-comment-content">
                                            <div class="postbox-comment-author">
                                               <p class="postbox-comment-name">Liza Olivarez</p>
                                            </div>
                                            <p>Curabitur luctus nisl in justo maximus egestas. Curabitur sit amet sapien vel nunc molestie pulvinar at vitae quam. Aliquam lobortis nisi congue consectetur</p>
                                            <div class="postbox-comment-reply">
                                               <a href="#"><span><img src="assets/img/blog/arrow-left.svg" alt="arrow">Reply</span></a>
                                            </div>
                                         </div>
                                      </div>
                                   </li>
                                </ul>
                             </li>
                          </ul>
                       </div>
                       <div class="postbox-reviw-wrapper">
                          <div class="postbox-review-content">
                             <h4 class="postbox-review-title">Leave A Reply</h4>
                          </div>
                          <div class="postbox-review-form">
                             <form action="#">
                                <div class="row">
                                   <div class="col-lg-6">
                                      <div class="postbox-review-form-input mb-30">
                                         <input type="text" placeholder="Your Name">
                                      </div>
                                   </div>
                                   <div class="col-lg-6">
                                      <div class="postbox-review-form-input mb-30">
                                         <input type="email" placeholder="Email Address">
                                      </div>
                                   </div>
                                   <div class="col-lg-12">
                                      <div class="postbox-review-form-input mb-30">
                                         <textarea name="message" placeholder="Write Your Comment"></textarea>
                                      </div>
                                   </div>
                                   <div class="col-lg-12">
                                      <div class="postbox-review-submit-btn mb-30">
                                         <div class="form-inner-check d-flex">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault01">
                                            <label class="form-check-label" for="flexCheckDefault01">Save my name, email, and website in this browser for the next time I comment.</label>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-12">
                                      <div class="form-inner-btn">
                                         <button class="tp-btn">Post Your Comment</button>
                                      </div>
                                   </div>
                                </div>
                             </form>
                          </div>
                       </div> --}}
                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-4 col-lg-5">
                        <div class="sidebar-wrapper">
                            {{-- <div class="sidebar-widget mb-30">
                          <div class="sidebar-widget-content">
                             <div class="sidebar-search">
                                <form action="#">
                                   <div class="sidebar-search-input">
                                      <input type="text" placeholder="Search here">
                                   </div>
                                   <div class="sidebar-search-btn">
                                      <button type="submit"><i class="far fa-search"></i></button>
                                   </div>
                                </form>
                             </div>
                          </div>
                       </div> --}}
                            <div class="sidebar-widget sidebar-widget-2 mb-30">
                                <h3 class="sidebar-widget-title">Our Latest Post</h3>
                                <div class="sidebar-widget-content">
                                    <div class="sidebar-post rc-post">
                                        @foreach ($recentposts as $recentpost)
                                        <div class="rc-post mb-20 d-flex align-items-center">
                                            {{-- @foreach ($recentposts as $recentpost) --}}
                                            <div class="rc-post-thumb">
                                                <a href="{{ route('post.show', ['slug' => $post->slug]) }}"><img src="{{asset($recentpost->hero) }}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rc-post-content">
                                                <div class="rc-meta">
                                                    <span><i class="fa-light fa-comments"></i> {{ $recentpost->author_name->name }}</span>
                                                </div>
                                                <h3 class="rc-post-title">
                                                    <a href="{{ route('post.show', ['slug' => $post->slug]) }}">{{ $recentpost->title ?? 'Title Not Found' }}</a>
                                                </h3>
                                            </div>
                                        </div>
                                        @endforeach
                                        {{-- <div class="rc-post mb-20 d-flex align-items-center">
                                            <div class="rc-post-thumb">
                                                <a href="blog-details.html"><img src="{{ asset('assets/img/blog/sidebar/blog-sm-2.jpg')}}"
                                                        alt=""></a>
                                            </div>
                                            <div class="rc-post-content">
                                                <div class="rc-meta">
                                                    <span><i class="fa-light fa-comments"></i> 2 Comments</span>
                                                </div>
                                                <h3 class="rc-post-title">
                                                    <a href="blog-details.html">Does My Website Need Any Blog?</a>
                                                </h3>
                                            </div>
                                        </div> --}}

                                    </div>
                                </div>
                            </div>
                            {{-- <div class="sidebar-widget sidebar-widget-2 mb-30">
                          <h3 class="sidebar-widget-title">Categories</h3>
                          <div class="sidebar-widget-Catagory">
                             <a href="blog-details.html">Cloud Solution <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                             <a href="blog-details.html">Artificial Inteligence <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                             <a href="blog-details.html">Cyber Data <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                             <a href="blog-details.html">IT Service <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                             <a href="blog-details.html">Business <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                             <a href="blog-details.html">Web Development <i class="fa-sharp fa-regular fa-arrow-right"></i></a>
                          </div>
                       </div>
                       <div class="sidebar-widget sidebar-widget-2 mb-30">
                          <h3 class="sidebar-widget-title">Our Tag</h3>
                          <div class="sidebar-widget-content">
                             <div class="tagcloud">
                                <a href="blog-details.html">Consulting</a>
                                <a href="blog-details.html">Web</a>
                                <a href="blog-details.html">Technology</a>
                                <a href="blog-details.html">Development</a>
                                <a href="blog-details.html">Cyber</a>
                                <a href="blog-details.html">Digital</a>
                                <a href="blog-details.html">Video</a>
                             </div>
                          </div>
                       </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- postbox area end -->

    </main>
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
