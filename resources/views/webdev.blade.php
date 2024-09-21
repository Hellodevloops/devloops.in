@extends('layout.app')
@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="/assets/img/healthcarenew1.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                                <span> / web</span>
                            </div>
                            <h2 class="breadcrumb-title">Web Development</h2>
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

        <section class="project-details-area pt-40 pb-120">
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

                    <div class="col-lg-8 order-lg-2 order-sm-2 mb-20 ">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="tp-project-details-thumb w-img mb-30">
                                    <img src="assets/img/webnew1.jpg" alt="" height="600px" width="700px">
                                </div>
                            </div>
                        </div>

                        <div class="tp-project-details-catagory-content mb-40 mt-20">
                            <h4 class="tp-project-details-catagory-title mb-20">Web Development</h4>
                            <p class="text-black">In addition to safeguarding user data, web development plays a pivotal
                                role in
                                establishing vital interfaces for customers and pivotal control points for businesses. Our
                                dedicated team of web application developers is committed to crafting and delivering web
                                solutions that not only enhance operational efficiency but also expedite decision-making
                                processes and confer a competitive edge. By harnessing the power of web development, we
                                empower
                                businesses to seamlessly interact with their customers, optimize workflows , and stay ahead
                                in
                                today's dynamic market landscape.</p>
                        </div>


                    </div>
                </div>

                <div class="row mt-4">
                    <div class="col-lg-12">
                        <div class="tp-project-details-catagory">
                            <span class="tp-section-sub-title">What We’re Offering</span>

                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-20">
                    <div class="col-lg-7 order-lg-1 order-sm -1 mb-20">
                        <div class="tp-project-details-list">
                            <h4 class="Text-black pb-10"> E-Commerce Website</h4>
                            <div class="tp-project-details-list-item d-flex">
                                <div class="tp-project-details-list-icon">
                                    <i class="fa-thin fa-check"></i>
                                </div>

                                <div class="tp-project-details-list-content ">
                                    <div class="tagcloud1">

                                        <a href="">E-commerce websites include features for creating and managing
                                            product catalogs. </a>

                                    </div>

                                </div>
                            </div>
                            <div class="tp-project-details-list-item d-flex">
                                <div class="tp-project-details-list-icon">
                                    <i class="fa-thin fa-check"></i>
                                </div>

                                <div class="tagcloud1">

                                    <a href="">They have a shopping cart system that allows users to add products to
                                        their cart etc and proceed to checkout. </a>

                                </div>
                            </div>
                            <div class="tp-project-details-list-item d-flex">
                                <div class="tp-project-details-list-icon">
                                    <i class="fa-thin fa-check"></i>
                                </div>
                                <div class="tagcloud1">

                                    <a href="">E-commerce platforms employ order management systems for order
                                        tracking,invoicing and handling refunds/returns.</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-2 order-sm-2 mb-20 ">
                        <div class="tp-project-details-list-thumb w-img">
                            <img src="assets/img/service/webecom.jpg" alt="" class="service-img1">
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-20 ">
                    <div class="col-lg-5 order-lg-1 order-sm-2 mt-4 mb-20">
                        <div class="tp-project-details-list-thumb w-img">
                            <img src="assets/img/webmultipageblog1.jpg" alt="" class="service-img1">
                        </div>
                    </div>
                    <div class="col-lg-7 order-lg-2 order-sm-1 mt-4 mb-20">
                        <div class="tp-project-details-list">
                            <h4 class="Text-black pb-10"> Multi-page Website</h4>
                            <div class="tp-project-details-list-item d-flex">
                                <div class="tp-project-details-list-icon">
                                    <i class="fa-thin fa-check"></i>
                                </div>
                                <div class="tagcloud1">

                                    <a href="">They use navigation menus, breadcrumbs, and internal links for easy
                                        navigation between pages. </a>

                                </div>

                            </div>
                            <div class="tp-project-details-list-item d-flex">
                                <div class="tp-project-details-list-icon">
                                    <i class="fa-thin fa-check"></i>
                                </div>
                                <div class="tagcloud1">

                                    <a href="">Each page on a multi-page website serves a specific purpose or
                                        topic.</a>

                                </div>

                            </div>
                            <div class="tp-project-details-list-item d-flex">
                                <div class="tp-project-details-list-icon">
                                    <i class="fa-thin fa-check"></i>
                                </div>
                                <div class="tagcloud1">
                                    <a href=""> Sites are optimized for (SEO) by structuring content hierarchically,
                                        using meta tags, and optimizing page load speed. </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row align-items-center mb-20 mt-4">
                    <div class="col-lg-7">
                        <div class="tp-project-details-list">
                            <h4 class="Text-black pb-10"> Dynamic Website</h4>
                            <div class="tp-project-details-list-item d-flex">
                                <div class="tp-project-details-list-icon">
                                    <i class="fa-thin fa-check"></i>
                                </div>
                                <div class="tagcloud1">
                                    <a href="">Dynamic websites use real-time database content to generate web pages
                                        based on user input or system data.</a>
                                </div>

                            </div>
                            <div class="tp-project-details-list-item d-flex">
                                <div class="tp-project-details-list-icon">
                                    <i class="fa-thin fa-check"></i>
                                </div>
                                <div class="tagcloud1">
                                    <a href="">They support user input forms, comments, user registration, and login
                                        systems.</a>
                                </div>
                            </div>
                            <div class="tp-project-details-list-item d-flex">
                                <div class="tp-project-details-list-icon">
                                    <i class="fa-thin fa-check"></i>
                                </div>
                                <div class="tagcloud1">
                                    <a href="">This integration supports content updates, database management, user
                                        management for better performance.</a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="tp-project-details-list-thumb w-img">
                            <img src="assets/img/dynamic2.jpg" alt="" style="width:440px; height:300px;">
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- Offering-area-start -->
        <section id="services-one-page" class="offering-area tp-offer-bg pb-80 pt-120"
            data-background="{{ asset('assets/img/bg/offer-bg-1.jpg') }}"
            style="background-image: url('{{ asset('assets/img/bg/offer-bg-1.jpg') }}');">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="tp-section tp-section-white-two mb-80">
                            <span class="tp-section-sub-title">What We’re Offering</span>
                            <h4 class="tp-section-title">Our Website Development Services Include</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Service Item 1 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-layout-text-sidebar" viewBox="0 0 16 16">
                                    <path
                                        d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2zm0 1h12a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm2 1a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1H4z" />
                                    <path
                                        d="M3.5 3h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zm0 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1zm0 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1zm0 2h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1z" />
                                    <path d="M3 13.5v-2h5v2a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Website Architecture</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 2 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-code-slash" viewBox="0 0 16 16">
                                    <path
                                        d="M6.854 4.646a.5.5 0 1 0-.708-.708l-3 3a.5.5 0 0 0 0 .708l3 3a.5.5 0 0 0 .708-.708L4.207 7l2.647-2.354zM9.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L11.793 7 9.146 4.354a.5.5 0 0 1 0-.708z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Front-End Development</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 3 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-server" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm3 1.5a.5.5 0 1 0 0 1 .5.5 0 1 0 0-1zM0 10a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-1zm3 1.5a.5.5 0 1 0 0 1 .5.5 0 1 0 0-1z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Back-End Development</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 4 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-tools" viewBox="0 0 16 16">
                                    <path
                                        d="M1 0a1 1 0 0 0 0 2 1 1 0 0 0 1 1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1h1v1" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Maintenance and Support</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 5 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-file-code" viewBox="0 0 16 16">
                                    <path
                                        d="M14 4.5V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h7.5v3a1.5 1.5 0 0 0 1.5 1.5h3zm-2.5-.5h2.5V2h-5V1.5A.5.5 0 0 0 9.5 1H3a.5.5 0 0 0-.5.5v12a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V4.5z" />
                                    <path
                                        d="M7.854 5.146a.5.5 0 1 1-.708.708L5.5 4.207 3.854 5.854a.5.5 0 1 1-.708-.708L4.793 3.5 3.146 1.854a.5.5 0 1 1 .708-.708L5.5 2.793 7.146 1.146a.5.5 0 1 1 .708.708L6.207 3.5l1.647 1.646z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Custom Web Development</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 6 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-person-workspace" viewBox="0 0 16 16">
                                    <path
                                        d="M6 1a2 2 0 1 1 4 0v1h1.5a1.5 1.5 0 0 1 0 3H4.5a1.5 1.5 0 0 1 0-3H6V1zm4 0v1H6V1a1 1 0 1 1 2 0zm-3 3h4a1.5 1.5 0 0 0 1.5-1.5v-1h-7v1A1.5 1.5 0 0 0 7 4z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">eCommerce Development</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 7 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="white"
                                    class="bi bi-globe" viewBox="0 0 16 16">
                                    <path
                                        d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zM3.05 3.05a6.974 6.974 0 0 1 5.64-2.05v3a6.978 6.978 0 0 1-5.64 1.96A7.973 7.973 0 0 0 3.05 3.05zM7.04 4.16a7.021 7.021 0 0 0-5.96-.16c1.77 1.78 3.84 2.85 5.96 2.84V4.16zm.02 3.6a5.986 5.986 0 0 0 5.63 0A6.978 6.978 0 0 1 7.06 7.76zM9.94 10.54a6.978 6.978 0 0 1 2.62 2.67c-.15-.01-.31-.03-.47-.05a7.02 7.02 0 0 0-2.1-2.61z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">SEO Optimization</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 8 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-bar-chart" viewBox="0 0 16 16">
                                    <path
                                        d="M1 13.5v-12a.5.5 0 0 1 1 0v12a.5.5 0 0 1-1 0zM5 6v7a.5.5 0 0 1-1 0V6a.5.5 0 0 1 1 0zm5-2v9a.5.5 0 0 1-1 0V4a.5.5 0 0 1 1 0zm5 4v5a.5.5 0 0 1-1 0v-5a.5.5 0 0 1 1 0z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Analytics and Tracking</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Offering-area-end -->


        <section class="tp-services-details-contact ">

            <div class="container   pt-50">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="tp-section tp-section-white-two ">
                            <h4 class="tp-section-title">Features Of Our Web Development</h4>
                        </div>
                    </div>
                </div>
                <div class="row p-5 gx-5">
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-sharp fa-solid fa-browser"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Web Compatibility</h4>
                                <p class="text-white">The web development we do is compatible with any web
                                    browser, device, and platform. We create responsive web applications, websites, and
                                    software that are user-friendly. These features improve your rank on search engines.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-solid fa-square-list"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Usable Forms</h4>
                                <p class="text-white">Forms are the most appropriate way for users to interact with the
                                    site. We add forms that are easy to fill out for customers and get useful information to
                                    build your client base. Thus, you can make further contact with interested users.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-regular fa-loader"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Fast Loading Speed</h4>
                                <p class="text-white">We develop websites and applications that enable the feature of fast
                                    loading times that engage more users. Our codes are bug-free and light to give a fast
                                    loading speed online at any browser.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-brands fa-blogger-b"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Blog Integration</h4>
                                <p class="text-white">We integrate a blog that can help your customers learn about your
                                    services and products. They also help in the search engine optimization of websites or
                                    apps.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-sharp fa-solid fa-mobile-button"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Easy Navigation</h4>
                                <p class="text-white">Almost 94% of users think that good navigation is a key feature of
                                    the website. We build a website with an easy-to-use navigation feature that improves the
                                    user experience and usability of the site.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-sharp-duotone fa-solid fa-boxes-stacked"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Product and Content Visuality</h4>
                                <p class="text-white">Our web developers and programmers build websites that improve the
                                    visibility of products and their data, which boosts the sale of products or services. On
                                    the other hand, it helps to generate more revenue. </p>
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
                            <h4 class="Text-black pb-5"> Why Choose Our Web Development Services</h4>
                            <p class="Text-black pb-10">
                                In today’s digital world, your website is often the first interaction potential customers
                                have with your brand. At Devloops International, we specialize in creating custom,
                                high-performance websites that not only look stunning but also provide an intuitive user
                                experience. Our team leverages the latest technologies to build websites that are fast,
                                secure, and fully responsive, ensuring your business stands out from the competition.

                                We understand that every business has unique needs, which is why we offer personalized
                                solutions tailored to your goals. From SEO optimization to seamless mobile functionality, we
                                focus on delivering measurable results that drive traffic, boost engagement, and enhance
                                your online presence. Our services also include ongoing support and maintenance, so you can
                                be confident that your website will continue to perform at its best.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Custom solutions tailored to your brand</a>
                                        </div>

                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Cutting-edge technologies for performance and security</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Fully responsive designs for all devices</a>
                                        </div>

                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">SEO optimization to improve search rankings</a>
                                        </div>

                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Fast loading times for enhanced user experience</a>
                                        </div>

                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Comprehensive support and maintenance</a>
                                        </div>

                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Affordable and transparent pricing</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-thumb w-img">
                                        <img src="assets/img/webmultipageblog1.jpg" alt=""
                                            style="width:540px; height:400px;">
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
                            <span class="tp-section-sub-title">Some Of Our's Work</span>
                            <h4 class="tp-section-title">Our Website Development Recent Works</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <a href="">
                            <div class="tp-offer-item-icon">
                                <img src="assets/img/TTS-RESUME-BUILDER.png" alt="">
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white mt-5">TTS resume</h4>
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-pip-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm7 6h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Front-End Development</h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-pip-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm7 6h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Back-End Development</h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-pip-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2zm7 6h5a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-3a.5.5 0 0 1 .5-.5" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Maintenance and Support</h4>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                {{-- <img src="{{ asset('assets/img/proddev1flaticon.png') }}" alt="prod"> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-cpu-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z" />
                                    <path
                                        d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">UX and UI Design</h4>

                            </div>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s"
                            style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-browser-edge" viewBox="0 0 16 16">
                                    <path
                                        d="M9.482 9.341c-.069.062-.17.153-.17.309 0 .162.107.325.3.456.877.613 2.521.54 2.592.538h.002c.667 0 1.32-.18 1.894-.519A3.84 3.84 0 0 0 16 6.819c.018-1.316-.44-2.218-.666-2.664l-.04-.08C13.963 1.487 11.106 0 8 0A8 8 0 0 0 .473 5.29C1.488 4.048 3.183 3.262 5 3.262c2.83 0 5.01 1.885 5.01 4.797h-.004v.002c0 .338-.168.832-.487 1.244l.006-.006z" />
                                    <path
                                        d="M.01 7.753a8.14 8.14 0 0 0 .753 3.641 8 8 0 0 0 6.495 4.564 5 5 0 0 1-.785-.377h-.01l-.12-.075a5.5 5.5 0 0 1-1.56-1.463A5.543 5.543 0 0 1 6.81 5.8l.01-.004.025-.012c.208-.098.62-.292 1.167-.285q.194.001.384.033a4 4 0 0 0-.993-.698l-.01-.005C6.348 4.282 5.199 4.263 5 4.263c-2.44 0-4.824 1.634-4.99 3.49m10.263 7.912q.133-.04.265-.084-.153.047-.307.086z" />
                                    <path
                                        d="M10.228 15.667a5 5 0 0 0 .303-.086l.082-.025a8.02 8.02 0 0 0 4.162-3.3.25.25 0 0 0-.331-.35q-.322.168-.663.294a6.4 6.4 0 0 1-2.243.4c-2.957 0-5.532-2.031-5.532-4.644q.003-.203.046-.399a4.54 4.54 0 0 0-.46 5.898l.003.005c.315.441.707.821 1.158 1.121h.003l.144.09c.877.55 1.721 1.078 3.328.996" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">SEO Consideration</h4>

                            </div>

                        </div>
                    </div>

        </section>
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
