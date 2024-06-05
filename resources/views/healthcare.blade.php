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

        <div class="container mt-50 mb-55">
            <div class="row">
               <div class="col-lg-12">
                 <div class="tp-project-details-catagory-content mb-40">
                     <h4 class="tp-project-details-catagory-title mb-20">Storefront Flexibility</h4>
                     <p class="text-black">Devloops' healthcare product offers unparalleled storefront flexibility, tailored to meet the unique needs of medical facilities and practitioners. Our solution provides a dynamic platform where healthcare providers can customize their storefronts effortlessly, ensuring seamless integration of their brand identity and services. With intuitive tools and versatile features, users can easily modify layouts, update content, and personalize the shopping experience for patients. Whether it's showcasing products, scheduling appointments, or offering informational resources, our platform empowers healthcare professionals to create engaging storefronts that foster trust, promote accessibility, and enhance patient satisfaction.</p>
                  </div>

               </div>
            </div>
            <style>
                @keyframes float2 {
                    0% {
                        transform: translateY(0);
                    }
                    50% {
                        transform: translateY(-10px);
                    }
                    100% {
                        transform: translateY(0);
                    }
                }
            </style>

            <div class="row">
                <div class="col-lg-12">
                    <div class="tp-project-details-thumb w-img mb-30" style="animation: float2 3s ease-in-out infinite;">
                        <img src="assets/img/customdashhealthhero3.png" alt="">
                    </div>
                </div>
            </div>
            <div class="row mt-4">
               <div class="col-lg-12">
                  <div class="tp-project-details-catagory">
                     <span class="tp-section-sub-title">What We’re Offering</span>
                     {{-- <h5 class="tp-project-details-catagory-title pb-10">We Provide Exclusive Service
                         For Your Business</h5> --}}
                   </div>
               </div>
            </div>
            <div class="row align-items-center mb-20">
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
                            <a class="tp-btn" href="https://healthcare-landing.devloops.host/"> Learn More</a>
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
         <div class="row align-items-cente mt-4">
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
                            <a class="tp-btn" href="https://healthcare-landing.devloops.host/"> Learn More</a>
                        </div>


                     </div>
                 </div>
              </div>
          </div>
               <div class="row align-items-center mb-20 mt-4">
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
                       <div class="tp-project-details-list-item d-flex  mt-4" style="padding-left: 80px;">
                        <div class="tp-about-btn  mb-10">
                            <a class="tp-btn" href="https://healthcare-landing.devloops.host/"> Learn More</a>
                        </div>


                     </div>
                    </div>
                 </div>
                 <style>
                    /* CSS */
.zoom-effect {
    overflow: hidden;
    position: relative;
    transition: transform 0.3s ease;
}

.zoom-effect:hover img {
    transform: scale(1.0);
}

.zoom-effect::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    border: 2px solid black;
    z-index: 1;
    transition: border-color 0.3s ease;
}

.zoom-effect:hover::before {
    border-color: transparent;
}

                 </style>
                 <div class="col-lg-7 mt-4">
                    <div class="tp-project-details-list-thumb w-img zoom-effect">
                        <img src="assets/img/Billingsnew.jpg" alt="" class="service-img1">
                    </div>
                </div>

               </div>

         </div>

        <!-- review-area-start -->
        <section class="review-area pb-5 mt-50">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mt-50">
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
        <section class="contact-area pt-50 pb-10 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
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
                                        <input type="text" name="email" placeholder="Email Address" required>
                                        <span><i class="fa-light fa-envelope"></i></span>
                                    </div>
                                    @error('email')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col-lg-12">
                                    <div class="tp-contact-details-form-input mb-20">
                                        <input type="tel" name="phone" placeholder="Phone Number" maxlength="13">
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
