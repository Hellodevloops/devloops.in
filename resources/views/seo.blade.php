@extends('layout.app')
@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="./assets/img/deviothero.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                                <span> / SEO </span>
                            </div>
                            <h2 class="breadcrumb-title">SEO</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="breadcrumb-shape">
                                  <div class="breadcrumb-shape-1 wow fadeInRight" data-wow-duration="1.8s" data-wow-delay=".4s">
                                     <img src="assets/img/breadcrumb/breadcrumb-shape-1.png" alt="">
                                  </div>
                                  <div class="breadcrumb-shape-4 wow slideInRight"  data-wow-duration="1.2s" data-wow-delay=".1s">
                                     <img src="assets/img/breadcrumb/breadcrumb-shape-3.png" alt="">
                                  </div>
                                  <div class="breadcrumb-shape-5 wow slideInRight"  data-wow-duration="1.4s" data-wow-delay=".3s">
                                     <img src="assets/img/breadcrumb/breadcrumb-shape-2.png" alt="">
                                  </div>
                               </div> -->
        </section>
        <!-- breadcrumb-area-end -->

        <!-- sercices-area-start -->

        <!-- services-area-start -->
        <section class="services-area pt-115">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tp-services-details-wrap mb-40">
                            <div class="tp-services-details-services mb-50">
                                <h4 class="tp-services-details-services-title">Services</h4>
                                <div class="tp-services-details-services-wrap">
                                    <a href="{{ route('product') }}">Product Development <i
                                            class="fa-light fa-arrow-right"></i></a>
                                    <a href="{{ route('webdev') }}">Web Development <i
                                            class="fa-light fa-arrow-right"></i></a>
                                    <a href="{{ route('iot') }}">IOT <i class="fa-light fa-arrow-right"></i></a>
                                    <a href="{{ route('healthcare') }}">Healthcare <i
                                            class="fa-light fa-arrow-right"></i></a>
                                    <a href="{{ route('seo') }}">SEO <i class="fa-light fa-arrow-right"></i></a>

                                    <a href="{{ route('digital') }}">Digital Marketing <i
                                            class="fa-light fa-arrow-right"></i></a>

                                    <a href="{{ route('socialmedia') }}">Social Media Marketing <i
                                            class="fa-light fa-arrow-right"></i></a>
                                    <a href="{{ route('socialmanagement') }}">Social Media Management <i
                                            class="fa-light fa-arrow-right"></i></a>

                                </div>
                            </div>
                            <div class="tp-services-details-contact">
                                <div class="tp-services-details-contact-bg"
                                    data-background="assets/img/services/details/services-details-bg-1.jpg"></div>
                                <h5 class="tp-services-details-contact-title">Have Any Problem? Please, Contact</h5>
                                <div class="tp-services-details-contact-item d-flex align-items-center mb-25">
                                    <div class="tp-services-details-contact-item-icon">
                                        <i class="fa-light fa-phone"></i>
                                    </div>
                                    <div class="tp-services-details-contact-item-content">
                                        <span>Call Us</span>
                                        <a href="tel: +919106077817"> +919106077817</a>
                                    </div>
                                </div>
                                <div class="tp-services-details-contact-item d-flex align-items-center mb-25">
                                    <div class="tp-services-details-contact-item-icon">
                                        <i class="fa-sharp fa-light fa-envelope"></i>
                                    </div>
                                    <div class="tp-services-details-contact-item-content">
                                        <span>Write to Us</span>
                                        <a href="mailto:hello@devloops.in"><span
                                                class="text-white">hello@devloops.in</span></a>
                                    </div>
                                </div>
                                <div class="tp-services-details-contact-item d-flex align-items-center">
                                    <div class="tp-services-details-contact-item-icon">
                                        <i class="fa-sharp fa-light fa-location-dot"></i>
                                    </div>
                                    <div class="tp-services-details-contact-item-content">
                                        <span>Our Address</span>
                                        <a href="#">L/414, 4th Floor, Park Paradise, beside Billabong School, Vadsar,
                                            Vadodara, Gujarat 390010</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tp-services-details-wrapper ml-30">
                            <div class="tp-services-details-main-thumb mb-30 w-img">
                                <img src="assets/img/seo.jpg" alt="">
                            </div>
                            <h4 class="tp-services-details-title mb-20">Search Engine Optimization (SEO)</h4>
                            <p class="text-black">
                                Unlock the potential of organic search traffic with <span class="text-pink">Devloops' SEO
                                    services</span>. Our
                                specialized team works on optimizing your website through <span class="text-pink">on-page
                                    SEO, off-page strategies,
                                    keyword research, content optimization</span>, and link-building to help your business
                                rank higher in search results.
                                By leveraging cutting-edge SEO techniques, we enable you to improve visibility, attract
                                qualified traffic, and
                                enhance brand credibility. Partner with Devloops to boost your search rankings and achieve
                                long-term sustainable growth
                                through optimized digital strategies.
                            </p>
                            <div class="tp-about-3-item mb-35">
                                <div class="tp-about-3-item-content">
                                    <h4 class="tp-about-3-item-title">Our Vision</h4>
                                    <p class="text-black">To empower businesses by helping them reach the top of search
                                        engine results, increasing visibility,
                                        driving organic traffic, and enhancing customer trust through tailored SEO
                                        solutions.</p>
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
        <!-- services-area-end -->

        <!-- Offering-area-start -->
        <section id="services-one-page" class="offering-area tp-offer-bg pb-80 pt-120"
            data-background="{{ asset('assets/img/bg/offer-bg-1.jpg') }}"
            style="background-image: url('{{ asset('assets/img/bg/offer-bg-1.jpg') }}');">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="tp-section tp-section-white-two mb-80">
                            <span class="tp-section-sub-title">What We’re Offering</span>
                            <h4 class="tp-section-title">Our SEO Services Include</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Service Item 1 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="white"
                                    class="bi bi-search" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.742a6 6 0 1 0-1.415 1.415l3.07 3.071a1 1 0 0 0 1.415-1.415l-3.07-3.07zM12 6a5 5 0 1 1-10 0 5 5 0 0 1 10 0z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Keyword Research</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 2 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                    <path
                                        d="M11 0H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM6 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1H6V1zM4 14a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h7v3a1 1 0 0 0 1 1h3v9a1 1 0 0 1-1 1H4z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">On-Page Optimization</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 3 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-bar-chart" viewBox="0 0 16 16">
                                    <path d="M0 0h16v16H0V0zm1 1v14h14V1H1zm2 3h3v8H3V4zm5 0h3v8H8V4zm5 0h3v8h-3V4z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Performance Tracking</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 4 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="white"
                                    class="bi bi-people" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14s-1 0-1-1 1-3 4-3 4 2 4 3-1 1-1 1H3zm8-1s-1 0-1-1 1-3 4-3 4 2 4 3-1 1-1 1H11zm1-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-5.5 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v.5h-9v-.5z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Link Building</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offering-area-end -->

        <section class="tp-services-details-contact">
            <div class="container pt-50">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="tp-section tp-section-white-two">
                            <h4 class="tp-section-title">Features Of Our SEO Services</h4>
                        </div>
                    </div>
                </div>
                <div class="row p-5 gx-5">
                    <div class="col-md-4 col-sm-6 d-flex ">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column p-4">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-graph-up" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14s-1 0-1-1 1-3 4-3 4 2 4 3-1 1-1 1H3zm8-1s-1 0-1-1 1-3 4-3 4 2 4 3-1 1-1 1H11zm1-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-5.5 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v.5h-9v-.5z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">In-Depth Keyword Research</h4>
                                <p>Identify high-impact keywords to optimize your website and boost its ranking on search
                                    engines.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column p-4">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                    <path
                                        d="M11 0H5a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM6 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v1H6V1zM4 14a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h7v3a1 1 0 0 0 1 1h3v9a1 1 0 0 1-1 1H4z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">On-Page Optimization</h4>
                                <p>Enhance your website's content and structure to make it more search engine-friendly.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column p-4">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-bar-chart" viewBox="0 0 16 16">
                                    <path d="M0 0h16v16H0V0zm1 1v14h14V1H1zm2 3h3v8H3V4zm5 0h3v8H8V4zm5 0h3v8h-3V4z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Performance Tracking</h4>
                                <p>Monitor and analyze your website’s performance to continually refine and improve your SEO
                                    strategy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column p-4">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-people" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14s-1 0-1-1 1-3 4-3 4 2 4 3-1 1-1 1H3zm8-1s-1 0-1-1 1-3 4-3 4 2 4 3-1 1-1 1H11zm1-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-5.5 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v.5h-9v-.5z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Quality Link Building</h4>
                                <p>Acquire high-quality backlinks to enhance your site's authority and search engine
                                    ranking.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container">
                <div class="row align-items-center mb-20 mt-4">
                    <div class="col-lg-12">
                        <div class="tp-project-details-list">
                            <h4 class="Text-black pb-5">Why Choose Our SEO Services</h4>
                            <p class="Text-black pb-10">
                                In the competitive digital landscape, a robust SEO strategy is crucial for enhancing your
                                website's visibility and driving targeted traffic. At Devloops International, we excel in
                                developing comprehensive SEO solutions designed to improve your search engine rankings and
                                attract qualified leads. Our approach combines advanced SEO techniques with personalized
                                strategies to ensure your website stands out in search engine results.

                                We understand that each business has unique goals and challenges, which is why our SEO services
                                are tailored to meet your specific needs. From keyword research and on-page optimization to link
                                building and performance tracking, our team is dedicated to delivering results that elevate your
                                online presence. We also provide ongoing support and detailed analytics to continually refine
                                your SEO strategy and achieve your business objectives.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Comprehensive keyword research and analysis</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">On-page SEO optimization for better search engine rankings</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">High-quality link building to boost your website's authority</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Detailed performance tracking and reporting</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Custom SEO strategies tailored to your business goals</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Ongoing support and strategy optimization</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Transparent and competitive pricing</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-thumb w-img">
                                        <img src="assets/img/seoone.png" alt="" style="width:540px; height:500px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Recent-Work-start -->
        <section id="services-one-page" class="offering-area tp-offer-bg pb-80 pt-120"
            data-background="{{ asset('assets/img/bg/offer-bg-1.jpg') }}"
            style="background-image: url('{{ asset('assets/img/bg/offer-bg-1.jpg') }}');">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="tp-section tp-section-white-two mb-80">
                            <span class="tp-section-sub-title">Some Of Our Work</span>
                            <h4 class="tp-section-title">Our SEO Services Recent Works</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn p-5" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-pip-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm7 6h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Keyword Research</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn p-5" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-pip-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm7 6h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Link <br/> Building</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn p-5" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-pip-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm7 6h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Performance Tracking</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn p-5" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-pip-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm7 6h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">On-Page Optimization</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Recent-Work-end -->


        <!-- contact -->

        <section id="contact-section" class="contact-area pt-115 pb-80">
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
                    <div class="offset-xl-1 col-xl-6 col-lg-6">
                        <div class="tp-section tp-section-two mb-25">
                            <span class="tp-section-sub-title"><i class="flaticon-edit"></i> Get in Touch</span>
                            {{-- <h4 class="tp-section-title">We're Here to Assist You</h4> --}}
                            <div class="tp-section-title-wrapper">
                                <!-- <p>We're committed to providing you with excellent support. Feel free to reach out to us through the contact form below.</p> -->
                            </div>
                        </div>
                        <div class="tp-contact-details-form mb-40">
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
                                            <input type="text" name="firstname" placeholder="First Name"
                                                value="{{ old('firstname') }}">
                                            <span><i class="fa-light fa-user"></i></span>
                                        </div>
                                        @error('firstname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="lastname" placeholder="Last Name"
                                                value="{{ old('lastname') }}">
                                            <span><i class="fa-light fa-user"></i></span>
                                        </div>
                                        @error('lastname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="email" placeholder="Email Address"
                                                value="{{ old('email') }}">
                                            <span><i class="fa-light fa-envelope"></i></span>
                                        </div>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="phone" placeholder="Phone Number"
                                                value="{{ old('phone') }}">
                                            <span><i class="fa-light fa-phone"></i></span>
                                        </div>
                                        @error('phone')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <textarea class="form-control" name="message" placeholder="Message" maxlength="550">{{ old('message') }}</textarea>
                                        </div>
                                        @error('message')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-btn">
                                            <button class="tp-btn">Send a Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- Contact List Section -->
                        <div class="tp-contact-list mt-40">
                            @php
                                $contacts = App\Models\Contact::all();
                            @endphp
                            {{-- <ul class="list-unstyled">
                                @foreach ($contacts as $contact)
                                    <li class="contact-item">
                                        <h5>{{ $contact->firstname }} {{ $contact->lastname }}</h5>
                                        <p>Email: <a href="mailto:{{ $contact->email }}">{{ $contact->email }}</a></p>
                                        <p>Phone: <a href="tel:{{ $contact->phone }}">{{ $contact->phone }}</a></p>
                                        <p>Message: {{ $contact->message }}</p>
                                    </li>
                                @endforeach
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
