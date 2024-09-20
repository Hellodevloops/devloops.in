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
                                <span> / Digital Marketing</span>
                            </div>
                            <h2 class="breadcrumb-title">Digital Marketing</h2>
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
                                <img src="assets/img/didgital.jpg" alt="Digital Marketing">
                            </div>
                            <h4 class="tp-services-details-title mb-20">Digital Marketing</h4>
                            <p class="text-black">
                                Maximize your brand’s online presence with <span class="text-pink">Devloops' Digital
                                    Marketing
                                    services</span>. Our team specializes in <span class="text-pink">social media marketing,
                                    pay-per-click (PPC) campaigns, email marketing, and content marketing</span> to engage
                                your audience and drive conversions.
                                By leveraging targeted digital strategies, we help you reach new customers, build brand
                                awareness,
                                and generate more leads for your business.
                                Partner with Devloops to create a strong online presence and achieve your marketing goals
                                through
                                data-driven digital campaigns.
                            </p>
                            <div class="tp-about-3-item mb-35">
                                <div class="tp-about-3-item-content">
                                    <h4 class="tp-about-3-item-title">Our Vision</h4>
                                    <p class="text-black">To help businesses thrive in the digital world by reaching the
                                        right audience
                                        with the right message, enhancing customer engagement, and driving measurable
                                        results through
                                        tailored digital marketing strategies.</p>
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

        <section id="services-one-page" class="offering-area tp-offer-bg pb-80 pt-120"
            data-background="{{ asset('assets/img/bg/offer-bg-1.jpg') }}"
            style="background-image: url('{{ asset('assets/img/bg/offer-bg-1.jpg') }}');">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="tp-section tp-section-white-two mb-80">
                            <span class="tp-section-sub-title">What We’re Offering</span>
                            <h4 class="tp-section-title">Our Digital Marketing Services Include</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Service Item 1 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="white"
                                    class="bi bi-graph-up" viewBox="0 0 16 16">
                                    <path d="M0 0h16v16H0V0zm1 1v14h14V1H1zm2 3h3v8H3V4zm5 0h3v8H8V4zm5 0h3v8h-3V4z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Social Media Management</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 2 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-megaphone" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 9V2.5A1.5 1.5 0 0 0 5 1H2A1 1 0 0 0 1 2v10a1 1 0 0 0 1 1h3a1.5 1.5 0 0 0 1.5-1.5zM5 3v6H2V3h3zm6 3h1v1h-1v-1z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Pay-Per-Click Advertising</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 3 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-chat-dots" viewBox="0 0 16 16">
                                    <path d="M0 0h16v16H0V0zm1 1v14h14V1H1zm2 4h3v3H3V5zm5 0h3v3H8V5zm5 0h3v3h-3V5z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Email Marketing</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 4 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" fill="white"
                                    class="bi bi-graph-down" viewBox="0 0 16 16">
                                    <path d="M0 0h16v16H0V0zm1 1v14h14V1H1zm2 3h3v8H3V4zm5 0h3v8H8V4zm5 0h3v8h-3V4z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Content Marketing</h4>
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
                            <h4 class="tp-section-title">Features Of Our Digital Marketing Services</h4>
                        </div>
                    </div>
                </div>
                <div class="row p-5 gx-5">
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 5h-1V4a1 1 0 0 1 1-1h1v1h1v1H6.5V5zm1.5 0V3h1v2h-1zm4 0h-1V4a1 1 0 0 1 1-1h1v1h1v1h-1v2h-1v-2zm-5 2v6h-1v-6h1zm4 0v6h-1v-6h1zm4 0v6h-1v-6h1z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Social Media Campaigns</h4>
                                <p>Drive engagement and build your brand’s presence on social media platforms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">PPC Advertising</h4>
                                <p>Maximize your ROI with targeted pay-per-click advertising strategies.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path
                                        d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Email Campaigns</h4>
                                <p>Engage your audience with personalized and effective email marketing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                                    <path d="M9 1v4H6V1H5v5h5V1h-1zm-1 1H6v3h2V2zm-4 7.5V11h7v-2.5H4z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Content Marketing</h4>
                                <p>Create valuable content to attract and retain your target audience.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-graph-up" viewBox="0 0 16 16">
                                    <path d="M0 0h16v16H0V0zm1 1v14h14V1H1zm2 3h3v8H3V4zm5 0h3v8H8V4zm5 0h3v8h-3V4z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Analytics and Reporting</h4>
                                <p>Track your performance with comprehensive analytics and detailed reports.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-people" viewBox="0 0 16 16">
                                    <path
                                        d="M12 12v1H4v-1c0-1.104 2.736-2 4-2s4 0.896 4 2zm-4 0a3.5 3.5 0 0 0-3.5-3.5 3.5 3.5 0 0 0-3.5 3.5v1a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1a3.5 3.5 0 0 0-3.5-3.5z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Customer Relationship Management</h4>
                                <p>Enhance customer interactions and improve satisfaction with CRM solutions.</p>
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
                            <h4 class="Text-black pb-5">Why Choose Our Digital Marketing Services</h4>
                            <p class="Text-black pb-10">
                                In the ever-evolving digital world, an effective digital marketing strategy is essential for
                                reaching your target audience and driving growth. At Devloops International, we specialize
                                in crafting tailored digital marketing solutions that enhance your online presence and
                                maximize your ROI. Our approach integrates advanced digital marketing techniques with
                                customized strategies to ensure your brand stands out in the crowded digital space.

                                We recognize that every business is unique, which is why our digital marketing services are
                                designed to address your specific needs. From comprehensive market research and social media
                                marketing to content creation and performance analytics, our team is committed to delivering
                                results that propel your business forward. We also offer ongoing support and detailed
                                reports to continually refine your digital marketing strategy and achieve your business
                                objectives.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">In-depth market research and analysis</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Targeted social media marketing campaigns</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Engaging content creation and management</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Strategic email marketing and automation</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Comprehensive analytics and performance tracking</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Customized strategies to fit your business goals</a>
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
                                        <img src="assets/img/digital-marketing.jpg" alt=""
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
                            <span class="tp-section-sub-title">Some Of Our Work</span>
                            <h4 class="tp-section-title">Our Digital Marketing Recent Works</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <a href="">
                            <div class="tp-offer-item-icon">
                                <img src="assets/img/digital-marketing-strategy.jpg" alt="">
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white mt-5">Digital Marketing Strategy</h4>
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
                                <h4 class="tp-offer-item-title under-line-white">Social Media Marketing</h4>
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
                                <h4 class="tp-offer-item-title under-line-white">Content Creation</h4>
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
                                <h4 class="tp-offer-item-title under-line-white">Email Marketing</h4>
                            </div>
                        </div>
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
