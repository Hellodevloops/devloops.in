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
                                    <a href="{{ route('product') }}">Product Development <i
                                            class="fa-light fa-arrow-right"></i></a>
                                    <a href="{{ route('webdev') }}">Web Development <i
                                            class="fa-light fa-arrow-right"></i></a>
                                            <a href="{{ route('iot') }}">IOT <i
                                                class="fa-light fa-arrow-right"></i></a>
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
                                        <a href="mailto:support@devloops.in"><span class="text-white">support@devloops.in</span></a>
                                    </div>

                                </div>
                                <div class="tp-services-details-contact-item d-flex align-items-center">
                                    <div class="tp-services-details-contact-item-icon">
                                        <i class="fa-sharp fa-light fa-location-dot"></i>
                                    </div>
                                    <div class="tp-services-details-contact-item-content">
                                        <span>Our Address</span>
                                        <a href="#">L/414, 4th Floor, Park Paradise, beside Billabong School, Vadsar, Vadodara, Gujarat 390010</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tp-services-details-wrapper ml-30">
                            <div class="tp-services-details-main-thumb mb-30 w-img">
                                <img src="./assets/img/dashboard1.png" alt="">
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
            <div class="row mt-4 m-0 p-0">
               <div class="col-lg-12 ">
                  <div class="tp-project-details-catagory">
                     <span class="tp-section-sub-title">What We’re Offering</span>
                     {{-- <h5 class="tp-project-details-catagory-title pb-10">We Provide Exclusive Service
                         For Your Business</h5> --}}
                   </div>
               </div>
            </div>
            <div class="row align-items-center mb-20 mx-5">
               <div class="col-lg-5 order-lg-1 order-sm -1 mt-4">
                  <div class="tp-project-details-list">
                     <h4 class="Text-black pb-10"> Appointment</h4>
                     <div class="tp-project-details-list-item d-flex">
                        <div class="tp-project-details-list-icon">
                           <i class="fa-thin fa-check"></i>
                        </div>
                        <div class="tagcloud1">

                         <a href="">Enable easy booking and management of appointments.</a>

                      </div>

                     </div>
                     <div class="tp-project-details-list-item d-flex">
                        <div class="tp-project-details-list-icon">
                           <i class="fa-thin fa-check"></i>
                        </div>
                        <div class="tagcloud1">
                         <a href=""> Facilitate seamless communication between patients and providers. </a>
                           </div>

                     </div>
                     <div class="tp-project-details-list-item d-flex  mt-4" style="padding-left: 80px;">
                        <div class="tp-about-btn  mb-10">
                            <a class="tp-btn" href="https://healthcare-landing.devloopx.com/"  target="blank"> Learn More</a>
                        </div>


                     </div>
                  </div>
               </div>
               <div class="col-lg-7 order-lg-2 order-sm-2 mt-4">
                  <div class="tp-project-details-list-thumb w-img zoom-effect">
                     <img src="assets/img/Appointments.png" alt="" class="service-img1">
                  </div>
               </div>
             </div>
         <div class="row align-items-cente mt-4 mx-5">
               <div class="col-lg-7 order-lg-1 order-sm-2 mt-4">
                 <div class="tp-project-details-list-thumb w-img  zoom-effect">
                    <img src="assets/img/patientnew.png" alt=""  class="service-img1">
                 </div>
              </div>
              <div class="col-lg-5 order-lg-2 order-sm-1 mt-4">
                 <div class="tp-project-details-list">
                    <h4 class="Text-black pb-10"> Patient</h4>
                    <div class="tp-project-details-list-item d-flex">
                       <div class="tp-project-details-list-icon">
                          <i class="fa-thin fa-check"></i>
                       </div>
                       <div class="tagcloud1">
                         <a href="">Provide a secure platform for accessing and managing medical records.</a>
                           </div>

                    </div>
                    <div class="tp-project-details-list-item d-flex">
                       <div class="tp-project-details-list-icon">
                          <i class="fa-thin fa-check"></i>
                       </div>
                       <div class="tagcloud1">
                         <a href=""> Simplify the registration process and communication with healthcare professionals.</a>
                           </div>
                    </div>
                    <div class="tp-project-details-list-item d-flex  mt-4" style="padding-left: 80px;">
                        <div class="tp-about-btn  mb-10">
                            <a class="tp-btn" href="https://healthcare-landing.devloopx.com/"   target="blank"> Learn More</a>
                        </div>


                     </div>
                 </div>
              </div>
          </div>
               <div class="row align-items-center mb-20 mt-4 mx-5">
                 <div class="col-lg-5">
                    <div class="tp-project-details-list">
                       <h4 class="Text-black pb-10"> Billing</h4>
                       <div class="tp-project-details-list-item d-flex">
                          <div class="tp-project-details-list-icon">
                             <i class="fa-thin fa-check"></i>
                          </div>
                          <div class="tagcloud1">
                             <a href=""> Streamline billing with automated invoicing and payment tracking.</a>
                               </div>
                       </div>
                       <div class="tp-project-details-list-item d-flex">
                          <div class="tp-project-details-list-icon">
                             <i class="fa-thin fa-check"></i>
                          </div>
                          <div class="tagcloud1">
                             <a href="">Generate detailed reports to track revenue, expenses, and billing trends.  </a>
                               </div>

                       </div>
                    </section>
                    <!-- blog-area-end -->

            </div>
        </section>


        <!-- our team -->

        {{-- sociAL for below team --}}
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
        <!-- team-area-start -->
        {{-- <section class="team-area tp-team-3-border fix pb-60">
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

         </div>

        <!-- review-area-start -->
        <section class="review-area pb-5 mt-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mt-50">
                        <div class="tp-review-thumb pb-4">
                            <img src="{{ asset('assets/img/devtesti1.jpg') }}" alt="">
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
                                            <input type="text" name="firstname" placeholder="First Name" value="{{ old('firstname') }}">
                                            <span><i class="fa-light fa-user"></i></span>
                                        </div>
                                        @error('firstname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="lastname" placeholder="Last Name" value="{{ old('lastname') }}">
                                            <span><i class="fa-light fa-user"></i></span>
                                        </div>
                                        @error('lastname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="email" placeholder="Email Address" value="{{ old('email') }}">
                                            <span><i class="fa-light fa-envelope"></i></span>
                                        </div>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="phone" placeholder="Phone Number" value="{{ old('phone') }}">
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
    {{-- main end --}}
@endsection
