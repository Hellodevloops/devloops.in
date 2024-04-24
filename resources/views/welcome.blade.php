@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main>

        <!-- slider-area-start -->
        <section class="slider-area tp-slider-wrap">
            <div class="swiper-container tp-slider-active">
                <div class="swiper-wrapper">
                    {{-- <div class="swiper-slide">
                        <div class="tp-slider-wrapper">
                            <!-- <div class="tp-slider-bg" data-background="assets/img/slider/slider-3-thumb-1.jpg"></div> -->
                            <div class="tp-slider-bg" data-background="./assets/img/devnandahero2.jpg"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tp-slider-content">
                                            <span class="tp-slider-sub-title">Unleash Your Innovation with Bespoke Solutions
                                            </span>
                                            <h2 class="tp-slider-title"><span>Inno</span>vating <br> Tech Solution</h2>
                                            <div class="tp-slider-btn">
                                                <a class="tp-btn" href="about.html">Discover More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tp-slider-shape-1">
                                        <img src="assets/img/slider/slider-shape-1.png" alt="">
                                    </div>
                                    <div class="tp-slider-shape-2">
                                        <img src="assets/img/slider/slider-shape-2.png" alt="">
                                    </div>
                                    <div class="tp-slider-shape-3">
                                        <img src="assets/img/slider/slider-shape-3.png" alt="">
                                    </div> -->
                            <!-- <div class="tp-slider-shape-4">
                                        <img src="assets/img/slider/slider-shape-4.png" alt="">
                                    </div> -->
                        </div>
                    </div> --}}
                    @foreach ($banner as $banner)
                        <div class="swiper-slide">
                            <div class="tp-slider-wrapper">
                                <div class="tp-slider-bg" data-background="{{ $banner->hero }}"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="tp-slider-content">
                                                <span class="tp-slider-sub-title">{{ $banner->title }}</span>
                                                <h6 class="tp-slider-title">{{ $banner->heading }}</h6>
                                                <div class="tp-slider-btn">
                                                    <a class="tp-btn"
                                                        href="{{ route('about') }}">{{ $banner->buttontitle }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="tp-slider-shape-1">
                                                  <img src="assets/img/slider/slider-shape-1.png" alt="">
                                               </div>
                                               <div class="tp-slider-shape-2">
                                                  <img src="assets/img/slider/slider-shape-2.png" alt="">
                                               </div>
                                               <div class="tp-slider-shape-3">
                                                  <img src="assets/img/slider/slider-shape-3.png" alt="">
                                               </div> -->
                                <!-- <div class="tp-slider-shape-4">
                                                  <img src="assets/img/slider/slider-shape-4.png" alt="">
                                               </div> -->
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="tp-slider-dot"></div>
        </section>
        <!-- slider-area-end -->

        <!-- about-area-start -->
        <section class="about-area pt-115 tp-about-3 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="tp-about-3-wrap">
                            <div class="tp-about-3-thumb-1 tp-thumb-common fix mb-30 wow fadeInRight" data-wow-duration="1s"
                                data-wow-delay=".5s"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">
                                <div class="tp-thumb-common-overlay wow"
                                    style="visibility: visible; animation-name: tpoverlay;"></div>
                                <img src="{{ asset('assets/img/about/three/about-3-thumb-1.jpg') }}" alt="">
                            </div>
                            <div class="tp-about-3-thumb-2 wow fadeInLeft tp-thumb-common fix" data-wow-duration="1s"
                                data-wow-delay=".5s"
                                style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInLeft;">
                                <div class="tp-thumb-common-overlay wow"
                                    style="visibility: visible; animation-name: tpoverlay;"></div>
                                <img src="{{ asset('assets/img/about/three/about-3-thumb-2.jpg') }}" alt="">
                            </div>

                            <div class="tp-about-3-project">
                                <span>Project Completed</span>
                                <h3 class="tp-about-3-project-title">200+</h3>
                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-6">
                        <div class="tp-about-3-wrapper mb-50 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".5s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInRight;">
                            <div class="tp-section tp-section-3 mb-50">
                                <span class="tp-section-sub-title">Welcome to Devloops </span>
                                <h4 class="tp-section-title">Where innovation knows no bounds and creativity thrives!

                                </h4>
                                <div class="tp-section-title-wrapper">

                                    <p class="text-black"><span class="text-pink">At Devloops International</span> we're
                                        more than just a company; we're a passionate community of tech enthusiasts,
                                        creators, and problem solvers dedicated to pushing the boundaries of what's
                                        possible. With a relentless drive for innovation, we're on a mission to
                                        revolutionize the digital landscape and shape the future of technology worldwide.
                                    </p>
                                </div>
                            </div>
                            <div class="tp-about-3-item mb-35">
                                <div class="tp-about-3-item-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="#ff0080"
                                        class="bi bi-person-fill-up" viewBox="0 0 16 16">
                                        <path
                                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.854 1.5 1.5a.5.5 0 0 1-.708.708L13 11.707V14.5a.5.5 0 0 1-1 0v-2.793l-.646.647a.5.5 0 0 1-.708-.708l1.5-1.5a.5.5 0 0 1 .708 0M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0">
                                        </path>
                                        <path
                                            d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4">
                                        </path>
                                    </svg>
                                </div>
                                <div class="tp-about-3-item-content">
                                    <h4 class="tp-about-3-item-title">Who We Are</h4>
                                    <p class="text-black">Devloops International is a dynamic technology solutions provider
                                        specializing in cutting-edge software development, AI solutions, and digital
                                        transformation services. </p>
                                </div>
                            </div>
                            <div class="tp-about-3-item mb-35">

                                <div class="tp-about-3-item-content">
                                    <h4 class="tp-about-3-item-title">Our Vision</h4>
                                    <p class="text-black">Our vision is simple yet ambitious: to empower businesses and
                                        individuals to thrive in the digital age. </p>
                                </div>
                                <div class="tp-about-3-item-icon">
                                    <i class="flaticon-solution"></i>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Offering-area-start -->
        <section id="services-one-page" class="offering-area tp-offer-bg pb-80 pt-120"
            data-background="{{ asset('assets/img/bg/offer-bg-1.jpg') }}"
            style="background-image: url('{{ asset('assets/img/bg/offer-bg-1.jpg') }}');">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="tp-section tp-section-white-two mb-80">
                            <span class="tp-section-sub-title">What We’re Offering</span>
                            <h4 class="tp-section-title">We Provide Exclusive Service <br> For Your Business</h4>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5">
                             <div class="tp-section-title-wrapper mb-80">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. quis nostrud exercitation ullamco laboris</p>
                             </div>
                          </div> -->
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                {{-- <img src="{{ asset('assets/img/proddev1flaticon.png') }}" alt="prod"> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-cpu-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z"/>
                                    <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a
                                        href="{{ route('product') }}">Product Development</a></h4>
                                <p class="text-white"> Engineering innovative software solutions tailored to your needs.</p>
                            </div>
                            <div class="tp-offer-item-btn">
                                <a href="{{ route('product') }}">Read More <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s"
                            style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-browser-edge" viewBox="0 0 16 16">
                                    <path d="M9.482 9.341c-.069.062-.17.153-.17.309 0 .162.107.325.3.456.877.613 2.521.54 2.592.538h.002c.667 0 1.32-.18 1.894-.519A3.84 3.84 0 0 0 16 6.819c.018-1.316-.44-2.218-.666-2.664l-.04-.08C13.963 1.487 11.106 0 8 0A8 8 0 0 0 .473 5.29C1.488 4.048 3.183 3.262 5 3.262c2.83 0 5.01 1.885 5.01 4.797h-.004v.002c0 .338-.168.832-.487 1.244l.006-.006z"/>
                                    <path d="M.01 7.753a8.14 8.14 0 0 0 .753 3.641 8 8 0 0 0 6.495 4.564 5 5 0 0 1-.785-.377h-.01l-.12-.075a5.5 5.5 0 0 1-1.56-1.463A5.543 5.543 0 0 1 6.81 5.8l.01-.004.025-.012c.208-.098.62-.292 1.167-.285q.194.001.384.033a4 4 0 0 0-.993-.698l-.01-.005C6.348 4.282 5.199 4.263 5 4.263c-2.44 0-4.824 1.634-4.99 3.49m10.263 7.912q.133-.04.265-.084-.153.047-.307.086z"/>
                                    <path d="M10.228 15.667a5 5 0 0 0 .303-.086l.082-.025a8.02 8.02 0 0 0 4.162-3.3.25.25 0 0 0-.331-.35q-.322.168-.663.294a6.4 6.4 0 0 1-2.243.4c-2.957 0-5.532-2.031-5.532-4.644q.003-.203.046-.399a4.54 4.54 0 0 0-.46 5.898l.003.005c.315.441.707.821 1.158 1.121h.003l.144.09c.877.55 1.721 1.078 3.328.996"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a href="{{ route('webdev') }}">Web
                                        Development</a></h4>
                                <p class="text-white">Designing captivating websites with intuitive interfaces and robust functionality.</p>
                            </div>
                            <div class="tp-offer-item-btn">
                                <a href="{{ route('webdev') }}">Read More <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s"
                            style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-ethernet" viewBox="0 0 16 16">
                                    <path d="M14 13.5v-7a.5.5 0 0 0-.5-.5H12V4.5a.5.5 0 0 0-.5-.5h-1v-.5A.5.5 0 0 0 10 3H6a.5.5 0 0 0-.5.5V4h-1a.5.5 0 0 0-.5.5V6H2.5a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 .5-.5M3.75 11h.5a.25.25 0 0 1 .25.25v1.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-1.5a.25.25 0 0 1 .25-.25m2 0h.5a.25.25 0 0 1 .25.25v1.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-1.5a.25.25 0 0 1 .25-.25m1.75.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v1.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25zM9.75 11h.5a.25.25 0 0 1 .25.25v1.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-1.5a.25.25 0 0 1 .25-.25m1.75.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v1.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25z"/>
                                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM1 2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1z"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a href="{{ route('iot') }}">Internet
                                        Of Things</a></h4>
                                <p class="text-white">Building interconnected solutions that leverage the power of the Internet of Things.</p>
                            </div>
                            <div class="tp-offer-item-btn">
                                <a href="{{ route('iot') }}">Read More <i class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-pip-fill" viewBox="0 0 16 16">
                                    <path d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm7 6h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a
                                        href="{{ route('healthcare') }}">Healthcare</a></h4>
                                <p class="text-white"> Developing secure and scalable software solutions tailored to the unique demands.</p>
                            </div>
                            <div class="tp-offer-item-btn">
                                <a href="{{ route('healthcare') }}">Read More <i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offering-area-end -->

        <!-- cta-area-start -->
        <section class="cta-area tp-cta-two pt-120 pb-120">
            <div class="tp-cta-two-bg" data-background="assets/img/bg/cta-2-bg.jpg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="tp-cta-two-wrapper text-center">
                            <div class=" wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                                <i class="flaticon-technology"></i>
                            </div>
                            <h4 class="tp-cta-two-title wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">IT
                                Solutions & Services <br> at your Fingertips</h4>
                            <div class="tp-cta-two-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s">
                                <a class="tp-btn" href="{{ route('contact') }}">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-area-end -->

        <!-- our clients -->


        <!-- brand-area-start -->
        <section class="client mt-40 mb-30">
            <div class="container">
                <div
                    class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-pointer-events">

                    <div class="swiper-wrapper" id="swiper-wrapper-af9a2b0a26fb64d5" aria-live="off"
                        style="transform: translate3d(-265px, 0px, 0px); transition-duration: 0ms;">
                        @foreach ($batch as $batch)

                        <div class="swiper-slide swiper-slide-prev" role="group" aria-label="1 / 5"
                            style="width: 215px; margin-right: 50px;">
                            <div class="client__box">
                                <img src="{{ $batch->hero }}" class="client__image">
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="swiper-slide swiper-slide-active" role="group" aria-label="2 / 5"
                            style="width: 215px; margin-right: 50px;">
                            <div class="client__box">
                                <img src="assets/img/vriaum2logo.png" class="client__image">
                            </div>
                        </div>
                        <div class="swiper-slide swiper-slide-next" role="group" aria-label="3 / 5"
                            style="width: 215px; margin-right: 50px;">
                            <div class="client__box">
                                <img src="assets/img/vriaumlogo.png" class="client__image">
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="4 / 5"
                            style="width: 215px; margin-right: 50px;">
                            <div class="client__box">
                                <img src="assets/img/socialageslogo1.png" class="client__image">
                            </div>
                        </div>
                        <div class="swiper-slide" role="group" aria-label="5 / 5"
                            style="width: 215px; margin-right: 50px;">
                            <div class="client__box">
                                <img src="assets/img/vriaum2logo.png" class="client__image">
                            </div>
                        </div> --}}
                    </div>

                    <!-- If we need pagination -->
                    <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                            class="swiper-pagination-bullet" tabindex="0" role="button"
                            aria-label="Go to slide 1"></span><span
                            class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0"
                            role="button" aria-label="Go to slide 2"></span></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"
                        aria-controls="swiper-wrapper-af9a2b0a26fb64d5" aria-disabled="false"></div>
                    <div class="swiper-button-next swiper-button-disabled" tabindex="-1" role="button"
                        aria-label="Next slide" aria-controls="swiper-wrapper-af9a2b0a26fb64d5" aria-disabled="true">
                    </div>

                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </section>
        <!-- brand-area-end -->


        <!-- review-area-start -->
        <section class="review-area pt-5 pb-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="tp-review-thumb pb-4">
                            <img src="assets/img/thumbs/review-thumb-1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tp-review-wrap ml-lg-5 pb-4">
                            <div class="tp-section tp-section-3 mb-4">
                                <span class="tp-section-sub-title">Our Client Reviews</span>
                                <h4 class="tp-section-title">What Our Clients Are Saying About Devloops</h4>
                            </div>
                            <div class="tp-review-wrapper pb-4">
                                <div class="swiper-container swiper tp-review-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tp-review-item">
                                                <div class="tp-review-content">
                                                    <p>Working at Devloops has been an enriching experience. The company
                                                        fosters a culture of innovation and collaboration, allowing us to
                                                        push boundaries in software development.</p>
                                                </div>
                                                <div class="tp-review-avatar">
                                                    <h4 class="tp-review-avatar-title">Rajesh Sharma</h4>
                                                    <span>Senior Developer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-item">
                                                <div class="tp-review-content">
                                                    <p>Devloops sets the bar high when it comes to project management. As a
                                                        PM, I appreciate the seamless communication channels and support
                                                        provided, ensuring timely deliveries and client satisfaction.</p>
                                                </div>
                                                <div class="tp-review-avatar">
                                                    <h4 class="tp-review-avatar-title">Neha Patel</h4>
                                                    <span> Project Manager</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-item">
                                                <div class="tp-review-content">
                                                    <p>Being a part of Devloops' team has elevated my technical skills
                                                        significantly. The challenging projects and access to cutting-edge
                                                        technologies have honed my abilities and broadened my horizon in the
                                                        software domain.</p>
                                                </div>
                                                <div class="tp-review-avatar">
                                                    <h4 class="tp-review-avatar-title">Amit Kumar</h4>
                                                    <span>Software Engineer</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-item">
                                                <div class="tp-review-content">
                                                    <p>At Devloops, quality is not just a checkbox; it's a commitment. As a
                                                        QA analyst, I've witnessed the dedication to delivering flawless
                                                        software solutions, backed by robust testing methodologies and
                                                        attention to detail.</p>
                                                </div>
                                                <div class="tp-review-avatar">
                                                    <h4 class="tp-review-avatar-title">Priya Singh</h4>
                                                    <span>Quality Assurance Analyst</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-item">
                                                <div class="tp-review-content">
                                                    <p>Devloops understands the pulse of the market like no other. As a
                                                        business analyst, I've had the opportunity to analyze market trends
                                                        and translate them into actionable insights, contributing to the
                                                        company's strategic growth trajectory. </p>
                                                </div>
                                                <div class="tp-review-avatar">
                                                    <h4 class="tp-review-avatar-title">Sanjay Mehta</h4>
                                                    <span>Business Analyst</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tp-review-thumb-wrapper">
                                <div class="swiper-container swiper tp-review-avatar-active">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="tp-review-avatar-thumb">
                                                <img src="{{ asset('assets/img/team/avatar/rating-avatar-1.png') }}"
                                                    alt="testi-avata">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-avatar-thumb">
                                                <img src="{{ asset('assets/img/team/avatar/rating-avatar-2.png') }}"
                                                    alt="testi-avata">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-avatar-thumb">
                                                <img src="{{ asset('assets/img/team/avatar/rating-avatar-3.png') }}"
                                                    alt="testi-avata">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-avatar-thumb">
                                                <img src="{{ asset('assets/img/team/avatar/rating-avatar-4.png') }}"
                                                    alt="testi-avata">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-avatar-thumb">
                                                <img src="{{ asset('assets/img/team/avatar/rating-avatar-5.png') }}"
                                                    alt="testi-avata">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- review-area-end -->

        <!-- counter-area-start -->
        <section class="counter-area tp-counter-3-bg" data-background="assets/img/counter/counter-3-bg-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-counter-3-item text-center pb-50">
                            <div class="tp-counter-3-item-icon">
                                <div class="tp-counter-3-item-icon-border">
                                    <i class="flaticon-project-management"></i>
                                </div>
                            </div>
                            <div class="tp-counter-3-item-content">
                                <h3 class="tp-counter-3-item-count">
                                    <span data-purecounter-duration="1" data-purecounter-end="200"
                                        class="purecounter">200</span>
                                </h3>
                                <p>Project Completed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-counter-3-item text-center pb-50">
                            <div class="tp-counter-3-item-icon">
                                <div class="tp-counter-3-item-icon-border">
                                    <i class="flaticon-consultant"></i>
                                </div>
                            </div>
                            <div class="tp-counter-3-item-content">
                                <h3 class="tp-counter-3-item-count">
                                    <span data-purecounter-duration="1" data-purecounter-end="20"
                                        class="purecounter">20</span>
                                </h3>
                                <p>IT Specialist</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-counter-3-item text-center pb-50">
                            <div class="tp-counter-3-item-icon">
                                <div class="tp-counter-3-item-icon-border">
                                    <i class="flaticon-healthcare"></i>
                                </div>
                            </div>
                            <div class="tp-counter-3-item-content">
                                <h3 class="tp-counter-3-item-count">
                                    <span data-purecounter-duration="1" data-purecounter-end="500"
                                        class="purecounter">500</span>
                                </h3>
                                <p>Happy Clients </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="tp-counter-3-item text-center pb-50">
                            <div class="tp-counter-3-item-icon">
                                <div class="tp-counter-3-item-icon-border">
                                    <i class="flaticon-solution-1"></i>
                                </div>
                            </div>
                            <div class="tp-counter-3-item-content">
                                <h3 class="tp-counter-3-item-count">
                                    <span data-purecounter-duration="1" data-purecounter-end="256"
                                        class="purecounter">256</span>
                                </h3>
                                <p>Smart Solution </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- counter-area-end -->


        <!-- solution-area-start -->
        <section class="solution-area tp-solution-wrapper">
            <div class="container">
                <div class="row align-items-end">
                    <div class="offset-lg-6 col-lg-6">
                        <div class="tp-solution-wrap ml-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="tp-section tp-section-3 mb-50">
                                <span class="tp-section-sub-title">Technology Solution</span>
                                <h4 class="tp-section-title">For Your Specific Industry We Have Smart Idea</h4>
                                <div class="tp-section-title-wrapper">
                                    <p class="text-black"> By staying abreast of the latest advancements in the tech
                                        landscape, Devloops ensures that their offerings are always at the forefront of
                                        industry standards, empowering businesses to thrive in the digital age.</p>
                                </div>
                            </div>
                            <div class="tp-solution-info mb-50">
                                <ul>
                                    <li>
                                        <div class="tp-solution-info-item d-flex align-items-center">
                                            <div class="tp-solution-info-icon">
                                                <i class="flaticon-technical-support"></i>
                                            </div>
                                            <div class="tp-solution-info-content">
                                                <h4 class="tp-solution-info-title">Client-Centric <br> Approach</h4>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tp-solution-info-item d-flex align-items-center">
                                            <div class="tp-solution-info-icon">
                                                <i class="flaticon-optimization"></i>
                                            </div>
                                            <div class="tp-solution-info-content">
                                                <h4 class="tp-solution-info-title">Innovation <br> Hub</h4>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="tp-solution-list">
                                <ul>
                                    <li class="text-pink"> <b>Devloops prioritizes client satisfaction above all else</b>.
                                    </li>
                                    <!-- <li>
                                                        Devloops fosters innovation, turning ideas into practical solutions.</li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-solution-bg" data-background="assets/img/bg/solution-bg-1.jpg"> </div>
            <div class="tp-solution-shape-1">
                <img src="assets/img/shape/solution-shape-1.png" alt="">
            </div>
        </section>
        <!-- solution-area-end -->

        <!-- team-area-start -->
        <section class="team-area tp-team-3-border fix pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-team-3-wrapper">
                            <div class="tp-section tp-section-3 mb-50 wow fadeInUp" data-wow-duration="1s"
                                data-wow-delay=".4s">
                                <span class="tp-section-sub-title">Meet With Our Specialist</span>
                                <h4 class="tp-section-title">Team that Builds Ideas Driven <br> by the Future</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-team-3-wrap">
                            <div class="swiper-container tp-team-3-active">
                                <div class="swiper-wrapper">
                                    {{-- <div class="swiper-slide">
                                        <div class="tp-team-3-item mb-40">
                                            <div class="tp-team-3-thumb">
                                                <div class="tp-team-3-thumb-wrap tp-thumb-common fix">
                                                    <div class="tp-thumb-common-overlay wow"></div>
                                                    <!-- <a href="#" class="team-member" data-toggle="modal" data-target="#teamModal" data-name="Riya Vaidya" data-role="BackEnd developer"></a> -->
                                                    <img src="assets/img/riya1n-removebg-preview.png" alt=""
                                                        style="background-color: whitesmoke;">
                                                </div>
                                                <div class="tp-team-3-thumb-social">
                                                    <a href="#"><span><i
                                                                class="fa-brands fa-facebook-f"></i></span></a>
                                                    <a href="#"><span><i
                                                                class="fa-brands fa-instagram"></i></span></a>
                                                    <a href="#"><span><i
                                                                class="fa-brands fa-twitter"></i></span></a>
                                                    <a href="#"><span><i
                                                                class="fa-brands fa-linkedin-in"></i></span></a>
                                                </div>
                                            </div>
                                            <div class="tp-team-3-content">
                                                <h5 class="tp-team-3-title"><a href="team-details.html">Riya Vaidya</a>
                                                </h5>
                                                <span>BackEnd developer</span>
                                            </div>
                                        </div>
                                    </div> --}}
                                    @foreach ($team as $team)
                                        <div class="swiper-slide">
                                            <div class="tp-team-3-item mb-40">
                                                <div class="tp-team-3-thumb">
                                                    <div class="tp-team-3-thumb-wrap tp-thumb-common fix">
                                                        <div class="tp-thumb-common-overlay wow"></div>
                                                        <img src="{{ $team->img }}" alt=""
                                                            style="background-color: whitesmoke;">
                                                    </div>
                                                    <div class="tp-team-3-thumb-social">
                                                        <a href="#"><span><i
                                                                    class="fa-brands fa-instagram"></i></span></a>
                                                        <a href="#"><span><i
                                                                    class="fa-brands fa-linkedin-in"></i></span></a>
                                                    </div>
                                                </div>
                                                <div class="tp-team-3-content">
                                                    <h3 class="tp-team-3-title"><a
                                                            href="team-details.html">{{ $team->name }}</a>
                                                    </h3>
                                                    <span>{{ $team->position }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- team-area-end -->

        <!-- blog-area-start -->
        <section id="blog-one-page" class="blog-area pb-40 pt-60">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-blog-3-wrapper">
                            <div class="tp-section tp-section-two text-center mb-50">
                                <span class="tp-section-sub-title">Our Latest Update</span>
                                <h4 class="tp-section-title">Check Our Inside Story </h4>
                            </div>
                        </div>
                    </div>
                </div>
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
                </div>
            </div>
        </section>
        <!-- blog-area-end -->
 <!-- contact-area-start -->

 <section class="contact-area pt-115 pb-80 ">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 mt-10">
                <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                    marginwidth="0"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.7245431381434!2d73.14561787344553!3d22.32625507966792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8ee3e155555%3A0x1386022b1d132240!2sDevloops%20International!5e0!3m2!1sen!2sus!4v1701242127098!5m2!1sen!2sus"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

            <div class="offset-xl-1 col-xl-6 col-lg-6 ">
                <div class="tp-section tp-section-two mb-25">
                    <span class="tp-section-sub-title"><i class="flaticon-edit"></i> Let’s Talk With Us</span>
                    {{-- <h4 class="tp-section-title">Grow Your Business With Our Expertise</h4> --}}
                    <div class="tp-section-title-wrapper">
                        <!-- <p>System is a term used to refer to an organized collection symbols and processes that may be used to operate on such symbols.</p>
                          -->
                    </div>
                </div>
                <div class="tp-contact-details-form mb-40">
                    {{-- @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if (session('succus'))
                        <div class="alert alert-succuss">
                            {{ session('succuss') }}
                        </div>
                    @endif --}}

                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-contact-details-form-input mb-20">
                                    <input type="text" name="firstname" placeholder="First Name">
                                    <span><i class="fa-light fa-user"></i></span>

                                </div>
                                @error('firstname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="tp-contact-details-form-input mb-20">
                                    <input type="text" name="lastname" placeholder="Last Name">
                                    <span><i class="fa-light fa-user"></i></span>
                                </div>
                                @error('lastname')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="tp-contact-details-form-input mb-20">
                                    <input type="text" name="email" placeholder="Email Address">
                                    <span><i class="fa-light fa-envelope"></i></span>
                                </div>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="tp-contact-details-form-input mb-20">
                                    <input type="text" name="phone" placeholder="Phone Number">
                                    <span><i class="fa-light fa-phone"></i></span>
                                </div>
                                @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-12">
                                <div class="tp-contact-details-form-input mb-20">
                                    <textarea class="form-control" name="description" placeholder="Description" maxlength="100"></textarea>
                                </div>
                                @error('description')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- <div class="col-lg-12">
                                  <div class="tp-contact-details-form-input mb-20">
                                     <input type="text" placeholder="Company Name">
                                     <span><i class="fa-light fa-user"></i></span>
                                  </div>
                               </div>
                               <div class="col-lg-12">
                                  <div class="tp-contact-details-form-input mb-20">

                                     <span><i class="fa-sharp fa-light fa-circle-info"></i></span>
                                     <input type="text" placeholder="Your Subject">
                                  </div>
                               </div>
                               <div class="col-lg-12">
                                  <div class="tp-contact-details-form-input mb-20">
                                     <textarea name="Message" placeholder="Write Your Message"></textarea>
                                     <span><i class="fa-light fa-pen"></i></span>
                                  </div>
                               </div> -->
                            <div class="col-lg-12">
                                <div class="tp-contact-details-form-btn">
                                    <button class="tp-btn">Send a Message</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact-area-end -->
    </main>
@endsection
