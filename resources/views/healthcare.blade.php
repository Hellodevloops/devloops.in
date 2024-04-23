@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="./assets/img/devhealthcarehero.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                                <span> / Healthcare</span>
                            </div>
                            <h2 class="breadcrumb-title">Healthcare</h2>
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
        <section class="services-area pt-115 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="tp-services-details-wrap mb-40">
                            <div class="tp-services-details-services mb-50">
                                <h4 class="tp-services-details-services-title">Services</h4>
                                <div class="tp-services-details-services-wrap">
                                    <a href="{{ route('product') }}">Product Development<i class="fa-light fa-arrow-right"></i></a>
                                    <a href="{{ route('webdev') }}">Web Development <i class="fa-light fa-arrow-right"></i></a>
                                    <a href="{{ route('iot') }}">Internet of Things <i class="fa-light fa-arrow-right"></i></a>
                                    <a href="{{ route('healthcare') }}">Healthcare<i class="fa-light fa-arrow-right"></i></a>
                                    <!-- <a href="#">Data Visualization <i class="fa-light fa-arrow-right"></i></a>
                                         <a href="#">Security System <i class="fa-light fa-arrow-right"></i></a> -->
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
                                        <a href="mailto:hello@devloops.in"><span class="text-white">hello@devloops.in</span></a>
                                    </div>

                                </div>
                                <div class="tp-services-details-contact-item d-flex align-items-center">
                                    <div class="tp-services-details-contact-item-icon">
                                        <i class="fa-sharp fa-light fa-location-dot"></i>
                                    </div>
                                    <div class="tp-services-details-contact-item-content">
                                        <span>Our Address</span>
                                        <a href="#">GF-2 Dhanlaxmi Complex, Subhanpura, Vadodara, Gujarat, India –
                                            390023</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tp-services-details-wrapper ml-30">
                            <div class="tp-services-details-main-thumb mb-30 w-img">
                                <img src="./assets/img/devdashnew.jpg" alt="">
                            </div>
                            <h4 class="tp-services-details-title mb-20">Storefront Flexibility</h4>
                            <p class="text-black">Devloops' healthcare product offers unparalleled storefront flexibility,
                                tailored to meet the unique needs of medical facilities and practitioners. Our solution
                                provides a dynamic platform where healthcare providers can customize their storefronts
                                effortlessly, ensuring seamless integration of their brand identity and services. With
                                intuitive tools and versatile features, users can easily modify layouts, update content, and
                                personalize the shopping experience for patients. Whether it's showcasing products,
                                scheduling appointments, or offering informational resources, our platform empowers
                                healthcare professionals to create engaging storefronts that foster trust, promote
                                accessibility, and enhance patient satisfaction.
                            </p>
                            <div class="tp-services-details-faq">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="tp-services-details-faq-item d-flex align-items-center mb-50">
                                            <div class="tp-services-details-faq-item-icon">
                                                <i class="flaticon-medal"></i>
                                            </div>
                                            <div class="tp-services-details-faq-item-content">
                                                <h4 class="tp-services-details-faq-title">Customizable Modules</h4>
                                                <!-- <span>We always try to give best services</span> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="tp-services-details-faq-item d-flex align-items-center mb-50">
                                            <div class="tp-services-details-faq-item-icon">
                                                <i class="flaticon-medal"></i>
                                            </div>
                                            <div class="tp-services-details-faq-item-content">
                                                <h4 class="tp-services-details-faq-title">Integration Capabilities</h4>
                                                <!-- <span>We always try to give best services</span> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tp-services-details-faq">
                                      <div class="row">
                                         <div class="col-lg-6">
                                            <div class="tp-services-details-faq-item d-flex align-items-center mb-50">
                                               <div class="tp-services-details-faq-item-icon">
                                                  <i class="flaticon-medal"></i>
                                               </div>
                                               <div class="tp-services-details-faq-item-content">
                                                  <h4 class="tp-services-details-faq-title">Why IT Solution?</h4>
                                                  <span>We always try to give best services</span>
                                               </div>
                                            </div>
                                         </div>
                                         <div class="col-lg-6">
                                            <div class="tp-services-details-faq-item d-flex align-items-center mb-50">
                                               <div class="tp-services-details-faq-item-icon">
                                                  <i class="flaticon-medal"></i>
                                               </div>
                                               <div class="tp-services-details-faq-item-content">
                                                  <h4 class="tp-services-details-faq-title">Best Solution</h4>
                                                  <span>We always try to give best services</span>
                                               </div>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <h4 class="tp-services-details-title">Web Development</h4>
                                   <p>
                                      Lorem ipsum is simply free text used by copytyping refreshing. Neque porro est qui dolorem ipsum quia quaed inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Aelltes port lacus quis enim var sed efficitur turpis gilla sed sit amet finibus eros. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the ndustry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                                   </p> -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sercices-area-end -->

        {{-- <section class="pricing-area tp-price-blue  tp-price-wrap ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="tp-blog-3-wrapper">
                            <div class="tp-section tp-section-two text-center mb-65">
                                <span class="tp-section-sub-title">Our pricing plans</span>
                                <h4 class="tp-section-title">Choose Your Optimal <br> Pricing Plans </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-price mb-40 wow fadeInRight" data-wow-duration="1s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInRight;">
                            <div class="tp-price-thumb">
                                <img src="assets/img/pricing/pricing-thumb-1.jpg" alt="">
                            </div>
                            <div class="tp-price-icon mb-20">
                                <i class="flaticon-airplane"></i>
                            </div>
                            <div class="tp-price-badge mb-20">
                                <span>Basic Plan</span>
                            </div>
                            <div class="tp-price-heading mb-40">
                                <div class="tp-price-content">
                                    <h4 class="tp-price-value">$49<span>/monthly</span></h4>
                                </div>
                            </div>
                            <div class="tp-price-features mb-45">
                                <ul>
                                    <li>24/7 System monitoring</li>
                                    <li class="tp-price-inactive">Security managment</li>
                                    <li class="tp-price-inactive">Unlimited Download</li>
                                    <li>Remote support</li>
                                </ul>
                            </div>
                            <div class="tp-price-btn">
                                <a href="{{ route('contact') }}">Start Free Trial</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-price active mb-40 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInUp;">
                            <div class="tp-price-thumb">
                                <img src="assets/img/pricing/pricing-thumb-2.jpg" alt="">
                            </div>
                            <div class="tp-price-icon mb-20">
                                <i class="flaticon-rocket"></i>
                            </div>
                            <div class="tp-price-badge mb-20">
                                <span>Standard Plan</span>
                            </div>
                            <div class="tp-price-heading mb-40">
                                <div class="tp-price-content">
                                    <h4 class="tp-price-value">$59<span>/monthly</span></h4>
                                </div>
                            </div>
                            <div class="tp-price-features mb-45">
                                <ul>
                                    <li>24/7 System monitoring</li>
                                    <li class="tp-price-inactive">Security managment</li>
                                    <li>Unlimited Download</li>
                                    <li class="tp-price-inactive">Remote support</li>
                                </ul>
                            </div>
                            <div class="tp-price-btn">
                                <a href="{{ route('contact') }}">Start Free Trial</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="tp-price mb-40 wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 1s; animation-delay: 0.6s; animation-name: fadeInLeft;">
                            <div class="tp-price-thumb">
                                <img src="assets/img/pricing/pricing-thumb-3.jpg" alt="">
                            </div>
                            <div class="tp-price-icon mb-20">
                                <i class="flaticon-speed"></i>
                            </div>
                            <div class="tp-price-badge mb-20">
                                <span>Premium plan</span>
                            </div>
                            <div class="tp-price-heading mb-40">
                                <div class="tp-price-content">
                                    <h4 class="tp-price-value">$89<span>/monthly</span></h4>
                                </div>
                            </div>
                            <div class="tp-price-features mb-45">
                                <ul>
                                    <li>24/7 System monitoring</li>
                                    <li>Security managment</li>
                                    <li>Unlimited Download</li>
                                    <li>Remote support</li>
                                </ul>
                            </div>
                            <div class="tp-price-btn">
                                <a href="{{ route('contact') }}">Start Free Trial</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="tp-price-shape-1">
                         <img src="assets/img/shape/line-5-shape-2.png" alt="">
                      </div> -->
        </section> --}}


        <section id="project-one-page" class="project-area tp-project-width mb-80 pl-15 pr-15 fix">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="tp-section text-center mb-50">
                            <span class="tp-section-sub-title">Recently completed work</span>
                            <h4 class="tp-section-title">Check Our latest projects </h4>
                        </div>
                    </div>
                </div>

                <section class="shop-area ">
                    <div class="container">
                       <div class="row">

                          <div class="col-xl-12 col-lg-12">
                             <div class="row">
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                   <div class="tp-product-item mb-40">
                                      <div class="tp-product-thumb">
                                         <img src="assets/img/patientnew.png" alt="" style="height: 340px; width:100%;">
                                         {{-- <div class="tp-product-thumb-cart">
                                            <a href="cart.html" class="tp-btn">Add to Cart</a>
                                         </div> --}}
                                      </div>

                                   </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-sm-6">
                                   <div class="tp-product-item mb-40">
                                      <div class="tp-product-thumb">
                                         <img src="assets/img/patientnew.png" alt="" style="height: 340px; width:100%;">
                                         {{-- <div class="tp-product-thumb-cart">
                                            <a href="cart.html" class="tp-btn">Add to Cart</a>
                                         </div> --}}
                                      </div>

                                   </div>
                                </div>



                             </div>

                          </div>
                       </div>
                    </div>
                 </section>
            </div>
        </section>


        <!-- our team -->
        <section class="project-area fix p-relative pt-110 pb-80">
            <div class="tp-project-2-bg" data-background="assets/img/bg/project-2-bg-1.jpg"
                style="background-image: url(&quot;assets/img/bg/project-2-bg-1.jpg&quot;);"></div>
            <div class="container">

                </div>
                <div class="row align-items-end">
                    <div class="col-lg-12">
                        <div class="tp-project-2-wrapper">
                            <div class="swiper-container tp-project-2-slider-active">
                                <div class="swiper-wrapper align-items-end">
                                    <!-- Slide 1 -->
                                    <div class="swiper-slide">
                                        <div class="tp-project-2 p-relative ">
                                            <div class="tp-project-2-thumb">
                                                <img src="{{ asset('assets/img/Appointment.png') }}" alt="">
                                            </div>
                                            <div class="tp-project-2-info d-flex justify-content-between align-items-center">
                                                <div class="tp-project-2-content">
                                                    <span>1</span>
                                                    <h4 class="tp-project-2-title"><a href="project-details.html">Smart Vision</a>
                                                    </h4>
                                                </div>
                                                <div class="tp-project-2-icon">
                                                    <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide 2 -->
                                    <div class="swiper-slide">
                                        <div class="tp-project-2 p-relative ">
                                            <div class="tp-project-2-thumb">
                                                <img src="{{ asset('assets/img/Billingsnew.png') }}" alt="">
                                            </div>
                                            <div class="tp-project-2-info d-flex justify-content-between align-items-center">
                                                <div class="tp-project-2-content">
                                                    <span>2</span>
                                                    <h4 class="tp-project-2-title"><a href="project-details.html">Digital
                                                            Solution</a></h4>
                                                </div>
                                                <div class="tp-project-2-icon">
                                                    <a href="project-details.html"><i class="fa-regular fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slide 4 -->
                                    <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2"
                                        role="group" aria-label="6 / 9" style="width: 677px; margin-right: 30px;">
                                        <div class="tp-project-2 p-relative ">
                                            <div class="tp-project-2-thumb">
                                                <img src="http://127.0.0.1:8000/assets/img/patientnew.png" alt="">
                                            </div>
                                            <div class="tp-project-2-info d-flex justify-content-between align-items-center">
                                                <div class="tp-project-2-content">
                                                    <span>4</span>
                                                    <h4 class="tp-project-2-title"><a href="project-details.html">Growth
                                                            Planning</a></h4>
                                                </div>
                                                <div class="tp-project-2-icon">
                                                    <a href="project-details.html"><i
                                                            class="fa-regular fa-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add more slides with modified image tags as needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- review-area-start -->
        <section class="review-area pt-5 pb-5 mb-55">
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
                                                    <p>Working at DevLoops has been an enriching experience. The company
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
                                                    <p>DevLoops sets the bar high when it comes to project management. As a
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
                                                    <p>Being a part of DevLoops' team has elevated my technical skills
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
                                                    <p>At DevLoops, quality is not just a checkbox; it's a commitment. As a
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
                                                    <p>DevLoops understands the pulse of the market like no other. As a
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
                                                <img src="assets/img/team/avatar/rating-avatar-1.png" alt="testi-avata">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-avatar-thumb">
                                                <img src="assets/img/team/avatar/rating-avatar-2.png" alt="testi-avata">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-avatar-thumb">
                                                <img src="assets/img/team/avatar/rating-avatar-3.png" alt="testi-avata">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-avatar-thumb">
                                                <img src="assets/img/team/avatar/rating-avatar-4.png" alt="testi-avata">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="tp-review-avatar-thumb">
                                                <img src="assets/img/team/avatar/rating-avatar-5.png" alt="testi-avata">
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

        <!-- contact form -->
        <section class="contact-area pt-115 pb-80 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <img src="{{ asset('assets/img/devcontact.jpg') }}" alt="Description of the image" width="100%" height="auto">
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
    </main>
    {{-- main end --}}
@endsection
