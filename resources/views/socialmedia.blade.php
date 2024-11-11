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
                                <span> / Social Media Marketing</span>
                            </div>
                            <h2 class="breadcrumb-title">Social Media Marketing</h2>
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
                                        <a href="tel:+919106077817">+919106077817</a>
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
                                <img src="assets/img/socialmarketing.jpg" alt="Social Media Marketing">
                            </div>
                            <h4 class="tp-services-details-title mb-20">Social Media Marketing</h4>
                            <p class="text-black">
                                Elevate your brand's visibility and engagement with <span class="text-pink">Devloops' Social
                                    Media Marketing services</span>. We create and execute tailored strategies to boost your
                                presence on platforms like Facebook, Instagram, LinkedIn, and Twitter. Our approach includes
                                content creation, audience engagement, and targeted advertising to connect with your ideal
                                customers.
                                Through data-driven insights and creative campaigns, we help you build a loyal following,
                                increase brand awareness, and drive meaningful interactions with your audience.
                                Partner with Devloops to harness the power of social media and achieve your marketing goals
                                with impactful and measurable results.
                            </p>
                            <div class="tp-about-3-item mb-35">
                                <div class="tp-about-3-item-content">
                                    <h4 class="tp-about-3-item-title">Our Vision</h4>
                                    <p class="text-black">To empower businesses with innovative social media strategies that
                                        foster brand growth, enhance customer relationships, and deliver outstanding
                                        marketing results.</p>
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

        <!-- sercices-area-end -->
        <!-- Offering-area-start -->
        <section id="services-one-page" class="offering-area tp-offer-bg pb-80 pt-120"
            data-background="{{ asset('assets/img/bg/offer-bg-1.jpg') }}"
            style="background-image: url('{{ asset('assets/img/bg/offer-bg-1.jpg') }}');">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="tp-section tp-section-white-two mb-80">
                            <span class="tp-section-sub-title">What We’re Offering</span>
                            <h4 class="tp-section-title">Our Social Media Marketing Services Include</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Service Item 1 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                                    <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Social Media <br/> Strategy</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 2 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Content <br/> Creation</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 3 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
                                    <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778zM8.5.015V7.5h7.485A8 8 0 0 0 8.5.015"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Analytics and <br/> Reporting</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 4 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Ad Campaign <br/> Management</h4>
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
                            <h4 class="tp-section-title">Features Of Our Social Media Marketing</h4>
                        </div>
                    </div>
                </div>
                <div class="row p-5 gx-5">
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column p-4">
                            {{-- <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-graph-up" viewBox="0 0 16 16">
                                    <path
                                        d="M3 14s-1 0-1-1 1-3 4-3 4 2 4 3-1 1-1 1H3zm8-1s-1 0-1-1 1-3 4-3 4 2 4 3-1 1-1 1H11zm1-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-5.5 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v.5h-9v-.5z" />
                                </svg>
                            </div> --}}
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">In-Depth Audience Insights</h4>
                                <p>Understand your audience better with data-driven insights to tailor your social media
                                    strategy.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column p-4">
                            {{-- <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-calendar-event" viewBox="0 0 16 16">
                                    <path
                                        d="M4.5 0a.5.5 0 0 1 .5.5V1h6V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H1a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 3a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1zm0 4a.5.5 0 0 1 .5.5V10h1V8.5a.5.5 0 0 1 1 0V10h7V8.5a.5.5 0 0 1 1 0V10h1V8.5a.5.5 0 0 1 .5-.5z" />
                                </svg>
                            </div> --}}
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Content Scheduling</h4>
                                <p>Manage and schedule posts to ensure consistent and timely updates across all social media
                                    platforms.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column p-4 ">
                            {{-- <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-megaphone" viewBox="0 0 16 16">
                                    <path
                                        d="M8.5 2a1.5 1.5 0 0 0-1.5 1.5V4H5v1H4V4H3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h1v-1h1v1h2V5.5A1.5 1.5 0 0 0 8.5 4H9v1h1V4h1a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H9a1 1 0 0 0-1 1v1h-1V1a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1v1h-1V1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1v1h2V4h1v-.5A1.5 1.5 0 0 0 8.5 2z" />
                                </svg>
                            </div> --}}
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Engagement Strategies</h4>
                                <p>Implement strategies to boost engagement and interactions with your audience.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <style>
            .tp-service-box {
                display: flex;
                flex-direction: column;
                height: 100%;
            }

            .tp-service-box-content {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                padding: 15px;
            }

            .tp-service-box-icon {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-bottom: 15px;
            }

            .tp-service-box-title {
                font-size: 1.25rem;
                margin-bottom: 10px;
            }

            .tp-service-box p {
                flex-grow: 1;
            }
        </style>

        <section class="py-5">
            <div class="container">
                <div class="row align-items-center mb-20 mt-4">
                    <div class="col-lg-12">
                        <div class="tp-project-details-list">
                            <h4 class="Text-black pb-5">Why Choose Our Social Media Marketing Services</h4>
                            <p class="Text-black pb-10">
                                In today's digital landscape, social media is a powerful tool for connecting with your
                                audience and building your brand's presence. At Devloops International, we specialize in
                                crafting dynamic social media strategies that engage your target audience and drive
                                measurable results. Our team uses cutting-edge techniques to enhance your brand's
                                visibility, foster community engagement, and generate leads through effective social media
                                campaigns.

                                We recognize that each business has unique needs, which is why we offer customized solutions
                                tailored to your marketing goals. From creating compelling content and managing ad campaigns
                                to analyzing performance and optimizing strategies, we focus on delivering impactful results
                                that elevate your online presence. Our services also include ongoing support and analytics,
                                ensuring that your social media efforts continuously evolve to meet your business
                                objectives.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Tailored social media strategies for your brand</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Creative content creation to engage your audience</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Targeted ad campaigns to boost brand visibility</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Detailed analytics to track performance and ROI</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Engagement strategies to build community and loyalty</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Regular updates and optimization to keep your strategy
                                                effective</a>
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
                                        <img src="assets/img/social.jpg" alt=""
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
                            <h4 class="tp-section-title">Our Social Media Marketing Recent Works</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Service Item 1 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                                    <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Social Media <br/> Strategy</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 2 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Content <br/> Creation</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 3 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-pie-chart-fill" viewBox="0 0 16 16">
                                    <path d="M15.985 8.5H8.207l-5.5 5.5a8 8 0 0 0 13.277-5.5zM2 13.292A8 8 0 0 1 7.5.015v7.778zM8.5.015V7.5h7.485A8 8 0 0 0 8.5.015"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Analytics and <br/> Reporting</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 4 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-people-fill" viewBox="0 0 16 16">
                                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Ad Campaign <br/> Management</h4>
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
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59065.059526554476!2d73.11919162993578!3d22.294415850603173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc7c9770b9e31%3A0x3fd524df7fb6063!2sDevloops%20Technology!5e0!3m2!1sen!2sin!4v1731152613636!5m2!1sen!2sin"
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
