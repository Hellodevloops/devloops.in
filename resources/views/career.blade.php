@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="{{ asset('assets/img/deviothero.jpg')}}"></div>
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-12">
                     <div class="tpbreadcrumb">
                        {{-- <div class="breadcrumb-link mb-15">
                           <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                           <span> / Terms And Condition</span>
                        </div> --}}
                        <h2 class="breadcrumb-title"> Career</h2>
                     </div>
                  </div>
               </div>
            </div>

         </section>
        <!-- breadcrumb-area-end -->

        <!-- team-details-area-start -->
        <section class="team-detals-area pt-50 pb-5">
           <div class="container">
              <div class="tp-team-details-head">
                 <div class="row">
                    <div class="col-lg-12">

                       <div class="tp-team-details-info mb-45">
                          <h2 class="tp-team-details-info-title mb-25" style="color: #ff4081;">Career at Devloops International</h2>
                          <p class="text-black">Join our dynamic team at Devloops International and embark on a rewarding career journey. We are committed to excellence and innovation, providing opportunities for growth and development in the tech industry.
                          </p>
                        </div>
                       <div class="tp-team-details-info mb-45">
                        <h2 class="tp-team-details-info-title mb-25"  style="color: #ff4081;">Why Devloops International?</h2>
                        <p class="text-black">At Devloops International, we're all about innovation and teamwork. We believe in creating a workplace where everyone can thrive and grow together. Our focus is on developing cutting-edge software solutions that empower businesses and drive success. Join us in shaping the future of technology!
                        </p>

                        </div>

                    </div>
                 </div>
              </div>
           </div>
        </section>
        <!-- team-details-area-end -->

        <section class="team-detals-area pb-5">
            <div class="container">
               <div class="tp-team-details-head">
                  <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <div class="tp-team-details-avatar-wrap d-flex align-items-center mb-75">
                                    <div class="tp-team-details-avatar">
                                        <h6 class="tp-team-details-avatar-title1">Frontend Developer Intern </h6>
                                        <span>Location: Vadodara</span>
                                        <p class="text-black">Developing responsive and user-friendly web interfaces. Collaborating with designers. Writing clean and efficient code using HTML, CSS, and JavaScript.</p>
                                        {{-- <div class="tp-team-details-avatar-list mb-35">
                                            <ul>
                                                <li><span>Responsibility:</span>Development</li>
                                                <li><span>Email Address:</span><a href="mailto:teczonfo@gmail.com">teczonfo@gmail.com</a></li>
                                                <li><span>Phone Number:</span><a href="tel:01234567">+1 888 098-90987</a></li>
                                                <li><span>Web Address: </span><a href="#">www.yourdomain.com</a></li>
                                            </ul>
                                        </div> --}}
                                        <div class="tp-cta-two-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.7s; animation-name: fadeInUp;">
                                            <a class="tp-btn" href="{{ route('contact') }}">Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="tp-team-details-avatar-wrap d-flex align-items-center mb-75">
                                    <div class="tp-team-details-avatar">
                                        <h6 class="tp-team-details-avatar-title1">Backend Developer Intern </h6>
                                        <span>Location: Vadodara</span>
                                        <p class="text-black">Designing and developing server-side logic and APIs. Integrating data storage solutions and databases. Implementing security and data protection measures.</p>
                                        {{-- <div class="tp-team-details-avatar-list mb-35">
                                            <ul>
                                                <li><span>Responsibility:</span>Development</li>
                                                <li><span>Email Address:</span><a href="mailto:teczonfo@gmail.com">teczonfo@gmail.com</a></li>
                                                <li><span>Phone Number:</span><a href="tel:01234567">+1 888 098-90987</a></li>
                                                <li><span>Web Address: </span><a href="#">www.yourdomain.com</a></li>
                                            </ul>
                                        </div> --}}
                                        <div class="tp-cta-two-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.7s; animation-name: fadeInUp;">
                                            <a class="tp-btn" href="{{ route('contact') }}">Apply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
               </div>

               <div class="tp-team-details-head">
                <div class="row">
                  <div class="col-lg-12">
                      <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="tp-team-details-avatar-wrap d-flex align-items-center mb-75">
                                <div class="tp-team-details-avatar">
                                    <h6 class="tp-team-details-avatar-title1">Software Development Intern</h6>
                                    <span>Location: Vadodara</span>
                                    <p class="text-black">Assisting in the development and testing of software solutions. Collaborating with team members on projects. Learning and applying coding best practices. Supporting the team with research and documentation tasks.</p>
                                    {{-- <div class="tp-team-details-avatar-list mb-35">
                                        <ul>
                                            <li><span>Responsibility:</span>Development</li>
                                            <li><span>Email Address:</span><a href="mailto:teczonfo@gmail.com">teczonfo@gmail.com</a></li>
                                            <li><span>Phone Number:</span><a href="tel:01234567">+1 888 098-90987</a></li>
                                            <li><span>Web Address: </span><a href="#">www.yourdomain.com</a></li>
                                        </ul>
                                    </div> --}}
                                    <div class="tp-cta-two-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.7s; animation-name: fadeInUp;">
                                        <a class="tp-btn" href="{{ route('contact') }}">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="tp-team-details-avatar-wrap d-flex align-items-center mb-75">
                                <div class="tp-team-details-avatar">
                                    <h6 class="tp-team-details-avatar-title1">Digital Marketing Intern</h6>
                                    <span>Location: Vadodara</span>
                                    <p class="text-black">Assisting in the implementation of digital marketing strategies. Creating and optimizing content for various online channels. Analyzing data and performance metrics to identify opportunities for improvement.</p>
                                    {{-- <div class="tp-team-details-avatar-list mb-35">
                                        <ul>
                                            <li><span>Responsibility:</span>Development</li>
                                            <li><span>Email Address:</span><a href="mailto:teczonfo@gmail.com">teczonfo@gmail.com</a></li>
                                            <li><span>Phone Number:</span><a href="tel:01234567">+1 888 098-90987</a></li>
                                            <li><span>Web Address: </span><a href="#">www.yourdomain.com</a></li>
                                        </ul>
                                    </div> --}}
                                    <div class="tp-cta-two-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay=".7s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.7s; animation-name: fadeInUp;">
                                        <a class="tp-btn" href="{{ route('contact') }}">Apply</a>
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

     </main>
@endsection
