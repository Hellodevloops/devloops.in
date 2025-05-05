@extends('layout.app')
@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="./assets/img/deviothero.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                                <span> / CRM</span>
                            </div>
                            <h2 class="breadcrumb-title">CRM</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="breadcrumb-shape">
                <div class="breadcrumb-shape-1 wow fadeInRight" data-wow-duration="1.8s" data-wow-delay=".4s">
                    <img src="assets/img/breadcrumb/breadcrumb-shape-1.png" alt="">
                </div>
                <div class="breadcrumb-shape-4 wow slideInRight" data-wow-duration="1.2s" data-wow-delay=".1s">
                    <img src="assets/img/breadcrumb/breadcrumb-shape-3.png" alt="">
                </div>
                <div class="breadcrumb-shape-5 wow slideInRight" data-wow-duration="1.4s" data-wow-delay=".3s">
                    <img src="assets/img/breadcrumb/breadcrumb-shape-2.png" alt="">
                </div>
            </div> -->
        </section>
        <!-- breadcrumb-area-end -->

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
                                    <a href="{{ route('crm') }}">CRM <i class="fa-light fa-arrow-right"></i></a>
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
                                        <a href="tel: +6358150818"> +6358150818</a>
                                    </div>
                                </div>
                                <div class="tp-services-details-contact-item d-flex align-items-center mb-25">
                                    <div class="tp-services-details-contact-item-icon">
                                        <i class="fa-sharp fa-light fa-envelope"></i>
                                    </div>
                                    <div class="tp-services-details-contact-item-content">
                                        <span>Write to Us</span>
                                        <a href="mailto:support@devloops.in"><span
                                                class="text-white">support@devloops.in</span></a>
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
                                <img src="assets/img/crm.png" alt="CRM">
                            </div>
                            <h4 class="tp-services-details-title mb-20">CRM Solutions</h4>
                            <p class="text-black">
                                Enhance your customer relationships with <span class="text-pink">Devloops' CRM
                                    solutions</span>. Our CRM services are designed to help you manage interactions with
                                current and potential customers, streamline processes, and improve profitability.
                                Our CRM system offers features such as <span class="text-pink">customer data management,
                                    sales tracking, and automated workflows</span> to support your business's needs and
                                growth.
                                Partner with Devloops to optimize your customer management strategies and build lasting
                                relationships through effective CRM solutions.
                            </p>
                            <div class="tp-about-3-item mb-35">
                                <div class="tp-about-3-item-content">
                                    <h4 class="tp-about-3-item-title">Our Vision</h4>
                                    <p class="text-black">To empower businesses with advanced CRM solutions that streamline
                                        customer interactions, enhance operational efficiency, and drive growth through
                                        data-driven insights and personalized customer engagement.</p>
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
                            <h4 class="tp-section-title">Our CRM Services Include</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <!-- Service Item 1 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 5h-1V4a1 1 0 0 1 1-1h1v1h1v1H6.5V5zm1.5 0V3h1v2h-1zm4 0h-1V4a1 1 0 0 1 1-1h1v1h1v1h-1v2h-1v-2zm-5 2v6h-1v-6h1zm4 0v6h-1v-6h1zm4 0v6h-1v-6h1z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Contact <br/> Management</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 2 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-calendar-event" viewBox="0 0 16 16">
                                    <path
                                        d="M6.5 5h-1V4a1 1 0 0 1 1-1h1v1h1v1H6.5V5zm1.5 0V3h1v2h-1zm4 0h-1V4a1 1 0 0 1 1-1h1v1h1v1h-1v2h-1v-2zm-5 2v6h-1v-6h1zm4 0v6h-1v-6h1zm4 0v6h-1v-6h1z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Appointment <br/> Scheduling</h4>
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
                                <h4 class="tp-offer-item-title under-line-white">Customer Interaction <br/> Tracking</h4>
                            </div>
                        </div>
                    </div>

                    <!-- Service Item 4 -->
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s">
                            <div class="tp-offer-item-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-graph-up" viewBox="0 0 16 16">
                                    <path d="M0 0h16v16H0V0zm1 1v14h14V1H1zm2 3h3v8H3V4zm5 0h3v8H8V4zm5 0h3v8h-3V4z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Sales <br /> Tracking</h4>
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
                            <h4 class="tp-section-title">Features Of Our CRM Services</h4>
                        </div>
                    </div>
                </div>
                <div class="row p-5 gx-5">
                    <div class="col-md-4 col-sm-6 d-flex ">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column px-5 py-4">
                            <div class="tp-service-box-icon">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="black"
                            class="bi bi-people" viewBox="0 0 16 16">
                           <path d="M12 12v1H4v-1c0-1.104 2.736-2 4-2s4 0.896 4 2zm-4 0a3.5 3.5 0 0 0-3.5-3.5 3.5 3.5 0 0 0-3.5 3.5v1a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2v-1a3.5 3.5 0 0 0-3.5-3.5z" />
                       </svg> --}}
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Enhanced Customer Interactions</h4>
                                <p>Build stronger relationships with personalized communication and timely follow-ups.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex ">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column  px-5 py-4">
                            <div class="tp-service-box-icon">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                            class="bi bi-calendar" viewBox="0 0 16 16">
                           <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H2z" />
                       </svg> --}}
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Appointment Management</h4>
                                <p>Streamline scheduling and manage appointments efficiently to improve client satisfaction.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 d-flex">
                        <div class="tp-service-box white-bg mb-30 d-flex flex-column  px-5 py-4">
                            <div class="tp-service-box-icon">
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                            class="bi bi-graph" viewBox="0 0 16 16">
                           <path d="M4 1v13H1V1h3zm6 7v7h-3V8h3zm6-1v8h-3V7h3zm-6-6v14h-3V0h3z" />
                       </svg> --}}
                            </div>
                            <div class="tp-service-box-content flex-grow-1">
                                <h4 class="tp-service-box-title">Sales Performance Analysis</h4>
                                <p>Track sales metrics and generate reports to analyze and optimize your sales strategies.
                                </p>
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
                            <h4 class="Text-black pb-5">Why Choose Our CRM Solutions</h4>
                            <p class="Text-black pb-10">
                                In today’s competitive landscape, effective Customer Relationship Management (CRM) is
                                crucial for
                                fostering strong customer relationships and driving business growth. At Devloops
                                International, we
                                specialize in delivering customized CRM solutions that streamline your customer interactions
                                and
                                enhance your overall business efficiency. Our approach combines advanced CRM technology with
                                tailored
                                strategies to ensure your customer relationships are managed effectively and your business
                                objectives
                                are met.

                                We offer a comprehensive CRM system that covers all essential modules to support your
                                business needs:
                            </p>
                            <ul class="Text-black pb-10" type="none">
                                <li><strong>Leads:</strong> Efficiently manage and track potential sales opportunities with
                                    our intuitive lead management system.</li>
                                <li><strong>Activities:</strong> Keep track of all interactions and activities related to
                                    your customers and prospects.</li>
                                <li><strong>Mailing:</strong> Automate and manage email campaigns to engage with your
                                    customers and prospects effectively.</li>
                                <li><strong>Quotes:</strong> Generate and manage quotes for your products and services with
                                    ease.</li>
                                <li><strong>Person & Organization:</strong> Organize and maintain detailed information about
                                    your contacts and their associated organizations.</li>
                                <li><strong>Settings:</strong> Customize CRM settings to fit your business requirements and
                                    preferences.</li>
                                <li><strong>Products:</strong> Manage and track your products and services within the CRM
                                    system.</li>
                                <li><strong>Configurations:</strong> Tailor the CRM to your specific needs with flexible
                                    configuration options.</li>
                            </ul>
                            <p class="Text-black pb-10">
                                From CRM implementation and integration to data analysis and customer engagement strategies,
                                our team
                                is dedicated to providing solutions that help your business thrive. We also offer ongoing
                                support and
                                detailed analytics to continuously refine your CRM strategy and achieve your goals.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Comprehensive CRM system implementation</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Tailored customer engagement strategies</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Advanced data analysis and reporting</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Efficient lead and opportunity management</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Seamless CRM integration with existing tools</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Automated customer follow-ups and notifications</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Customizable CRM dashboards and interfaces</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Ongoing support and CRM optimization</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-thumb w-img">
                                        <img src="assets/img/crm-solution.jpg" alt=""
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
                            <h4 class="tp-section-title">Our Recent CRM Solutions</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                {{-- <img src="assets/img/crm-leads.jpg" alt=""> --}}
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white mt-5">Lead Management</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                {{-- <img src="assets/img/crm-activities.jpg" alt=""> --}}
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Activity Tracking</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                {{-- <img src="assets/img/crm-mailing.jpg" alt=""> --}}
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Mailing Campaigns</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                {{-- <img src="assets/img/crm-quotes.jpg" alt=""> --}}
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Quote Management</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;height:155px;">
                            {{-- <div class="tp-offer-item-icon">
                                <img src="assets/img/crm-person-organization.jpg" alt="">
                            </div> --}}
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Person & <br/>Organization Management</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                {{-- <img src="assets/img/crm-settings.jpg" alt=""> --}}
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Settings & Configurations</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                {{-- <img src="assets/img/crm-products.jpg" alt=""> --}}
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white">Product <br/> Management</h4>
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
