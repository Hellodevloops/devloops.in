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
                                <span> / Social Media Management</span>
                            </div>
                            <h2 class="breadcrumb-title">Social Media Management</h2>
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
                                <img src="assets/img/socialmanagement.jpg" alt="Social Media Management">
                            </div>
                            <h4 class="tp-services-details-title mb-20">Social Media Management</h4>
                            <p class="text-black">
                                Maximize your brand's online presence with <span class="text-pink">Devloops' Social Media
                                    Management services</span>. Our team specializes in creating and managing dynamic social
                                media profiles across platforms like Facebook, Instagram, LinkedIn, and Twitter. We offer a
                                comprehensive suite of services including strategy development, content scheduling, and
                                performance analysis.
                                By focusing on audience growth, engagement, and retention, we ensure your social media
                                channels reflect your brand's voice and values. Our data-driven approach helps in crafting
                                strategies that resonate with your audience and drive measurable success.
                                Partner with Devloops to streamline your social media efforts and achieve a consistent and
                                impactful online presence.
                            </p>
                            <div class="tp-about-3-item mb-35">
                                <div class="tp-about-3-item-content">
                                    <h4 class="tp-about-3-item-title">Our Vision</h4>
                                    <p class="text-black">To deliver expert social media management that enhances brand
                                        visibility, fosters community engagement, and drives strategic growth through
                                        effective online interactions.</p>
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
                            <h4 class="tp-section-title">Our Social Media Management Services Include</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Service Item 1 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Social Media Strategy</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 2 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-calendar-date-fill" viewBox="0 0 16 16">
                                    <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4zm5.402 9.746c.625 0 1.184-.484 1.184-1.18 0-.832-.527-1.23-1.16-1.23-.586 0-1.168.387-1.168 1.21 0 .817.543 1.2 1.144 1.2"/>
                                    <path d="M16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2m-6.664-1.21c-1.11 0-1.656-.767-1.703-1.407h.683c.043.37.387.82 1.051.82.844 0 1.301-.848 1.305-2.164h-.027c-.153.414-.637.79-1.383.79-.852 0-1.676-.61-1.676-1.77 0-1.137.871-1.809 1.797-1.809 1.172 0 1.953.734 1.953 2.668 0 1.805-.742 2.871-2 2.871zm-2.89-5.435v5.332H5.77V8.079h-.012c-.29.156-.883.52-1.258.777V8.16a13 13 0 0 1 1.313-.805h.632z"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Content <br/> Scheduling</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 3 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-clipboard-data-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 0A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0zm3 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                                    <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1A2.5 2.5 0 0 1 9.5 5h-3A2.5 2.5 0 0 1 4 2.5zM10 8a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0zm-6 4a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0zm4-3a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Analytics & Reporting</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 4 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-globe-asia-australia" viewBox="0 0 16 16">
                                    <path d="m10.495 6.92 1.278-.619a.483.483 0 0 0 .126-.782c-.252-.244-.682-.139-.932.107-.23.226-.513.373-.816.53l-.102.054c-.338.178-.264.626.1.736a.48.48 0 0 0 .346-.027ZM7.741 9.808V9.78a.413.413 0 1 1 .783.183l-.22.443a.6.6 0 0 1-.12.167l-.193.185a.36.36 0 1 1-.5-.516l.112-.108a.45.45 0 0 0 .138-.326M5.672 12.5l.482.233A.386.386 0 1 0 6.32 12h-.416a.7.7 0 0 1-.419-.139l-.277-.206a.302.302 0 1 0-.298.52z"/>
                                    <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0M1.612 10.867l.756-1.288a1 1 0 0 1 1.545-.225l1.074 1.005a.986.986 0 0 0 1.36-.011l.038-.037a.88.88 0 0 0 .26-.755c-.075-.548.37-1.033.92-1.099.728-.086 1.587-.324 1.728-.957.086-.386-.114-.83-.361-1.2-.207-.312 0-.8.374-.8.123 0 .24-.055.318-.15l.393-.474c.196-.237.491-.368.797-.403.554-.064 1.407-.277 1.583-.973.098-.391-.192-.634-.484-.88-.254-.212-.51-.426-.515-.741a7 7 0 0 1 3.425 7.692 1 1 0 0 0-.087-.063l-.316-.204a1 1 0 0 0-.977-.06l-.169.082a1 1 0 0 1-.741.051l-1.021-.329A1 1 0 0 0 11.205 9h-.165a1 1 0 0 0-.945.674l-.172.499a1 1 0 0 1-.404.514l-.802.518a1 1 0 0 0-.458.84v.455a1 1 0 0 0 1 1h.257a1 1 0 0 1 .542.16l.762.49a1 1 0 0 0 .283.126 7 7 0 0 1-9.49-3.409Z"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Community Engagement</h4>
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
                            <h4 class="tp-section-title">Features Of Our Social Media Management Services</h4>
                        </div>
                    </div>
                </div>
                <div class="row p-5 gx-5">
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column p-4">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-chat-square-text" viewBox="0 0 16 16">
                                    <path
                                        d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-.5.5H15v1.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V4H1.5A.5.5 0 0 1 1 3.5V1H.5A.5.5 0 0 1 0 .5V0h3.5zM1.5 4H14v.5H1.5V4zm12 7H3a.5.5 0 0 1-.5-.5V10H1.5a.5.5 0 0 1-.5-.5V8.5A.5.5 0 0 1 1.5 8h12a.5.5 0 0 1 .5.5V10a.5.5 0 0 1-.5.5zM14 11H3v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-1H1v-1h13v1h-1a.5.5 0 0 1-.5.5z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content">
                                <h4 class="tp-service-box-title">Customer Interaction</h4>
                                <p>Efficiently engage with your customers by responding to inquiries and comments promptly,
                                    enhancing customer satisfaction.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column p-4">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-pie-chart" viewBox="0 0 16 16">
                                    <path
                                        d="M8.5 1.5a7.5 7.5 0 1 1 0 15A7.5 7.5 0 0 1 8.5 1.5zM8 2a6 6 0 0 0-3.534 10.868 5.98 5.98 0 0 0 6.768-6.768A6.002 6.002 0 0 0 8 2zm0 1.5A4.5 4.5 0 0 1 12.5 8H8V3.5z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content">
                                <h4 class="tp-service-box-title">Performance Analytics</h4>
                                <p>Track the performance of your social media posts and campaigns with detailed analytics
                                    and reporting.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column p-4">
                            <div class="tp-service-box-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-calendar-day" viewBox="0 0 16 16">
                                    <path d="M1 0h14v2H1V0zm0 4h14v10H1V4zm1 1v8h12V5H2z" />
                                </svg>
                            </div>
                            <div class="tp-service-box-content">
                                <h4 class="tp-service-box-title">Content Calendar</h4>
                                <p>Plan and schedule your social media posts in advance to ensure consistent and timely
                                    content delivery.</p>
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
                            <h4 class="Text-black pb-5">Why Choose Our Social Media Marketing Services</h4>
                            <p class="Text-black pb-10">
                                In today’s digital landscape, having a robust social media presence is vital for engaging with your audience and building brand loyalty. At Devloops International, we specialize in creating impactful social media marketing strategies that drive results. Our services are designed to amplify your online presence and connect with your target audience through effective and creative social media campaigns.

                                Our approach combines innovative social media strategies with tailored content to ensure your brand stands out. From strategic planning and content creation to campaign management and performance tracking, we provide comprehensive solutions to enhance your social media impact. Our dedicated team offers ongoing support and insightful analytics to continuously optimize your social media presence and achieve your marketing goals.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Customized Social Media Strategies</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Engaging Content Creation</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Targeted Ad Campaigns</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Influencer Partnerships</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Performance Analytics and Reporting</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Community Management</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Strategic Campaign Planning</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">24/7 Support and Optimization</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-thumb w-img">
                                        <img src="assets/img/socialmediamanagement.jpg" alt=""
                                            style="width:540px; height:435px;">
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
                            <h4 class="tp-section-title">Our Recent Social Media Marketing Projects</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-megaphone-fill" viewBox="0 0 16 16">
                                    <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0zm-1 .724c-2.067.95-4.539 1.481-7 1.656v6.237a25 25 0 0 1 1.088.085c2.053.204 4.038.668 5.912 1.56zm-8 7.841V4.934c-.68.027-1.399.043-2.008.053A2.02 2.02 0 0 0 0 7v2c0 1.106.896 1.996 1.994 2.009l.496.008a64 64 0 0 1 1.51.048m1.39 1.081q.428.032.85.078l.253 1.69a1 1 0 0 1-.983 1.187h-.548a1 1 0 0 1-.916-.599l-1.314-2.48a66 66 0 0 1 1.692.064q.491.026.966.06"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white mt-5">Social Media Campaigns</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-badge-ad-fill" viewBox="0 0 16 16">
                                    <path d="M11.35 8.337c0-.699-.42-1.138-1.001-1.138-.584 0-.954.444-.954 1.239v.453c0 .8.374 1.248.972 1.248.588 0 .984-.44.984-1.2zm-5.413.237-.734-2.426H5.15l-.734 2.426h1.52z"/>
                                    <path d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2zm6.209 6.32c0-1.28.694-2.044 1.753-2.044.655 0 1.156.294 1.336.769h.053v-2.36h1.16V11h-1.138v-.747h-.057c-.145.474-.69.804-1.367.804-1.055 0-1.74-.764-1.74-2.043v-.695zm-4.04 1.138L3.7 11H2.5l2.013-5.999H5.9L7.905 11H6.644l-.47-1.542H4.17z"/>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-chat-square-text-fill" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Content<br/> Creation</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-instagram" viewBox="0 0 16 16">
                                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Influencer Collaborations</h4>
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
