@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="{{ asset('assets/img/devabouthero.jpg') }}"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                                <span> / About</span>
                            </div>
                            <h2 class="breadcrumb-title">About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="breadcrumb-shape">
                  <div class="breadcrumb-shape-1 wow fadeInRight" data-wow-duration="1.8s" data-wow-delay=".4s">
                     <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-1.png') }}" alt="">
                  </div>
                  <div class="breadcrumb-shape-4 wow slideInRight"  data-wow-duration="1.2s" data-wow-delay=".1s">
                     <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-3.png') }}" alt="">
                  </div>
                  <div class="breadcrumb-shape-5 wow slideInRight"  data-wow-duration="1.4s" data-wow-delay=".3s">
                     <img src="{{ asset('assets/img/breadcrumb/breadcrumb-shape-2.png') }}" alt="">
                  </div>
               </div> -->
        </section>
        <!-- breadcrumb-area-end -->

        <!-- video-area-start -->
        <section class="video-area tp-benifits-inner pt-120">
            <div class="container">
                <div class="row">
                    <div class="col-xxl-7 col-xl-6 col-lg-6 order-2 order-lg-1">
                        <div class="tp-benifits-5-thumb">
                            <div class="tp-benifits-5-thumb-1">
                                <img src="{{ asset('assets/img/about/five/about-5-thumb-1.jpg') }}" alt="">
                            </div>
                            <div class="tp-benifits-5-thumb-2 overlay-anim">
                                <div class="tp-thumb-common-overlay wow"
                                    style="visibility: visible; animation-name: tpoverlay;"></div>
                                <img src="{{ asset('assets/img/about/five/about-5-thumb-2.jpg') }}" alt="">
                            </div>
                            <!-- <div class="tp-benifits-5-wrap">
                               <div class="tp-benifits-5-contact">
                                  <div class="tp-benifits-5-contact-icon">
                                     <i class="fa-solid fa-phone-flip"></i>
                                  </div>
                                  <div class="tp-benifits-5-contact-content">
                                     <span>Call Anytime</span>
                                     <a href="tel:0123456789">+99 (786) 8765</a>
                                  </div>
                               </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-6 col-lg-6 order-1 order-lg-2 ">
                        <div class="tp-video-two-wrapper p-relative  pb-100 fadeInLeft" data-wow-duration="1s"
                            data-wow-delay=".6s">
                            <div class="tp-section  tp-section-3 ">
                                <span class="tp-section-sub-title">About Us</span>
                                <h4 class="tp-section-title">Why Choose Devloops International</h4>
                                <div class="postbox-text">

                                    <ul>
                                        <li class="text-black">
                                            <span style="color: #ff0080;"> Expertise</span>: Our team brings years of
                                            experience and expertise to the table, ensuring top-notch solutions tailored to
                                            your unique needs.
                                        </li>
                                        <li class="text-black">
                                            <span style="color: #ff0080;"> Cutting-Edge Solutions</span>: We stay at the
                                            forefront of technological advancements, offering innovative solutions that
                                            drive real results.
                                        </li>

                                        <li class="text-black">
                                            <span style="color: #ff0080;"> Global Reach</span>: With a diverse team and a
                                            global network of partners, we have the reach and resources to tackle projects
                                            of any size or scope.
                                        </li>

                                    </ul>
                                </div>

                            </div>
                            <!-- <div class="tp-video-two-list mb-50">
                               <ul>
                                  <li><span><i class="fa-regular fa-circle-check"></i></span>Perspiciatis omnis natus error</li>
                                  <li><span><i class="fa-regular fa-circle-check"></i></span>Donec gravida imperdie</li>
                               </ul>
                            </div> -->
                            <div class="tp-about-details d-flex align-items-center flex-wrap">
                                <div class="tp-about-btn mr-30 mb-10">
                                    <a class="tp-btn" href="{{ route('contact') }}">Contact Us</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-area-end -->

        <!-- feature-area-start -->
        <section class="feature-area pb-90 p-relative feature-inner-bg"
            data-background="{{ asset('assets/img/feature/inner/feature-inner-bg-1.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-feature-item mb-30 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="tp-feature-icon">
                                <i class="flaticon-solution-1"></i>
                            </div>
                            <div class="tp-feature-content">
                                <h4 class="tp-feature-content-title">Custom Software<br> Solution</h4>
                                <p class="text-black tp-feature-content">Tailored solutions for optimized efficiency.</p>
                            </div>
                            <div class="tp-feature-shape-two">
                                <img src="{{ asset('assets/img/feature/one/feature-shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-feature-item mb-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="tp-feature-icon">
                                <i class="flaticon-search-engine"></i>
                            </div>
                            <div class="tp-feature-content">
                                <h4 class="tp-feature-content-title">Business Growth <br> Planning</h4>
                                <p class="text-black tp-feature-content">Empowering businesses with innovative tech
                                    solutions.</p>
                            </div>
                            <div class="tp-feature-shape-two">
                                <img src="{{ asset('assets/img/feature/one/feature-shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-feature-item mb-30 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".4s">
                            <div class="tp-feature-icon">
                                <i class="flaticon-speed"></i>
                            </div>
                            <div class="tp-feature-content">
                                <h4 class="tp-feature-content-title">Search Engine <br> Optimization</h4>
                                <p class="text-black tp-feature-content">Ensuring resilience and fortified security
                                    measures.</p>
                            </div>
                            <div class="tp-feature-shape-two">
                                <img src="{{ asset('assets/img/feature/one/feature-shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tp-feature-shape">
                <div class="tp-feature-shape-one w-img">
                    <img src="{{ asset('assets/img/feature/one/features-bg.png') }}" alt="">
                </div>
            </div>
        </section>
        <!-- feature-area-end -->


        <!-- management-area-start -->
        <section class="management-area tp-management-position pb-10">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-xl-6 col-lg-6">
                        <div class="tp-management-thumb-wrap p-relative">
                            <div class="tp-management-thumb overlay-anim tp-thumb-common fix w-img mb-60 wow fadeInUp"
                                data-wow-duration="1s" data-wow-delay=".4s">
                                <div class="tp-thumb-common-overlay wow"></div>
                                <img src="{{ asset('assets/img/thumbs/management-thumb-1.jpg') }}" alt="">
                            </div>
                            <div class="tp-management-shape-1">
                                <img src="{{ asset('assets/img/shape/management-shape-1.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 offset-xl-1 col-lg-6">
                        <div class="tp-management-wrap pb-60 wow fadeInRight" data-wow-duration="1s"
                            data-wow-delay=".4s">
                            <div class="tp-section tp-section-3 mb-40">
                                <span class="tp-section-sub-title">Our Benefits</span>
                                <h4 class="tp-section-title">Streamlined processes for faster development.</h4>
                                <!-- <div class="tp-section-title-wrapper">
                                 <span>Lorem ipsum is simply free text dolor sit am adipi we help  you ensure everyone.</span>
                              </div> -->
                            </div>
                            <div class="tp-management-list">
                                <div class="tp-management-item d-flex">
                                    <div class="tp-management-item-icon">
                                        <i class="flaticon-data-protection"></i>
                                    </div>
                                    <div class="tp-management-item-content">
                                        <h5 class="tp-management-item-title">Enhanced Collaboration</h5>
                                        <p class="text-black">Facilitates seamless collaboration among teams, fostering
                                            innovation and productivity.</p>
                                    </div>
                                </div>
                                <div class="tp-management-item d-flex">
                                    <div class="tp-management-item-icon">
                                        <i class="flaticon-optimization"></i>
                                    </div>
                                    <div class="tp-management-item-content">
                                        <h5 class="tp-management-item-title">Continuous Improvement</h5>
                                        <p class="text-black">Leading to constant refinement and improved product quality.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- management-area-end -->

        <!-- team-area-start -->
        {{-- <section class="team-area tp-team-3-border fix pb-10">
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

                                    @php
                                    use App\Models\Team;
                                    $team = Team::all();
                                @endphp
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
                                                    <h5 class="tp-team-3-title"><a
                                                            href="{{ route('about') }}">{{ $team->name }}</a>
                                                    </h5>
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
        </section> --}}
        <!-- team-area-end -->

        <!-- cta-area-star -->
        <section class="cta-area tp-cta-three-bg" style="background-color: #ff0080;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-1 col-lg-2">
                        <div class="tp-cta-three-icon wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <i class="flaticon-solution"></i>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6">
                        <div class="tp-cta-three-content wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <h4 class="tp-cta-three-title">Devloops Always Ready To Solve Your Problem</h4>
                        </div>
                    </div>
                    <div class="offset-xl-4 col-xl-3 col-lg-4">
                        <div class="tp-cta-three-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                            <a href="{{ route('contact') }}" class="tp-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta-area-end -->

    </main>
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
