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
                                <span> / Iot</span>
                            </div>
                            <h2 class="breadcrumb-title">Internet Of Things</h2>
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

        <section class="project-details-area pt-120 pb-120 mb-20">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                    <div class="tp-project-details-catagory-content mb-40">
                        <h4 class="tp-project-details-catagory-title mb-20">IoT Solutions Overview</h4>
                        <p class="text-black">Leverage Devloops's IoT development services to unlock the full potential of hyperconnectivity within your organization. Our expertise spans sensor programming, gateway integration, seamless connection establishment, IoT application development, platform creation, and advanced analytics. By embracing cutting-edge IoT technologies, we empower you to enhance operational efficiency, deepen customer engagement, and refine strategic insights through expedited access to critical business information. With Devloops as your IoT partner, you can harness the transformative power of interconnected devices to drive innovation, agility, and sustainable growth in your business ecosystem.</p>
                     </div>

                  </div>
               </div>

               <div class="row">
                  <div class="col-lg-12">
                    <div class="tp-project-details-thumb w-img mb-30">
                        <img src="assets/img/iotnew1.jpg" alt="">
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
                  <div class="col-lg-7 order-lg-1 order-sm -1 mb-20">
                     <div class="tp-project-details-list">
                        <h4 class="Text-black pb-10"> Iot Analytics</h4>
                        <div class="tp-project-details-list-item d-flex">
                           <div class="tp-project-details-list-icon">
                              <i class="fa-thin fa-check"></i>
                           </div>
                           <div class="tagcloud1">
                            <a href="">Use data analytics to gain insights from IoT data, enabling informed decisions and predictive analysis.</a>
                              </div>

                        </div>
                        <div class="tp-project-details-list-item d-flex">
                           <div class="tp-project-details-list-icon">
                              <i class="fa-thin fa-check"></i>
                           </div>
                           <div class="tagcloud1">
                            <a href="">Monitor IoT devices in real time to detect anomalies, optimize performance, and ensure efficiency.</a>
                              </div>
                        </div>
                        <div class="tp-project-details-list-item d-flex">
                           <div class="tp-project-details-list-icon">
                              <i class="fa-thin fa-check"></i>
                           </div>
                           <div class="tagcloud1">
                            <a href="">
                                Use machine learning to predict trends, detect patterns, and optimize processes using IoT data.</a>

                        </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 order-lg-2 order-sm-2 mt-4 mb-20">
                     <div class="tp-project-details-list-thumb w-img">
                        <img src="assets/img/service/iotanalytics.jpg" alt="" class="service-img1">
                     </div>
                  </div>
                </div>
            <div class="row align-items-cente mt-4 mb-20">
                  <div class="col-lg-5 order-lg-1 order-sm-2 mb-20">
                    <div class="tp-project-details-list-thumb w-img">
                       <img src="assets/img/service/iotconnectivity.jpg" alt=""  class="service-img1">
                    </div>
                 </div>
                 <div class="col-lg-7 order-lg-2 order-sm-1 mb-20">
                    <div class="tp-project-details-list">
                       <h4 class="Text-black pb-10"> IoT Connectivity</h4>
                       <div class="tp-project-details-list-item d-flex">
                          <div class="tp-project-details-list-icon">
                             <i class="fa-thin fa-check"></i>
                          </div>
                          <div class="tagcloud1">
                            <a href="">Ensure seamless IoT integration into existing infrastructure for smooth communication and data exchange.</a>
                              </div>

                       </div>
                       <div class="tp-project-details-list-item d-flex">
                          <div class="tp-project-details-list-icon">
                             <i class="fa-thin fa-check"></i>
                          </div>
                          <div class="tagcloud1">
                            <a href="">Design scalable and resilient network architectures to manage the increasing volume of IoT devices effectively.</a>
                              </div>
                       </div>
                       <div class="tp-project-details-list-item d-flex">
                          <div class="tp-project-details-list-icon">
                             <i class="fa-thin fa-check"></i>
                          </div>
                          <div class="tagcloud1">
                            <a href="">IoT solutions compatible with diverse platforms and protocols to enable interoperability and maximize connectivity options.</a>
                              </div>
                       </div>
                    </div>
                 </div>
             </div>
                  <div class="row align-items-center mb-20">
                    <div class="col-lg-7">
                       <div class="tp-project-details-list">
                          <h4 class="Text-black pb-10"> IoT Security</h4>
                          <div class="tp-project-details-list-item d-flex">
                             <div class="tp-project-details-list-icon">
                                <i class="fa-thin fa-check"></i>
                             </div>
                             <div class="tagcloud1">
                                <a href="">Implement robust encryption to secure data transmission and protecting IoT devices from unauthorized access .</a>
                                  </div>
                          </div>
                          <div class="tp-project-details-list-item d-flex">
                             <div class="tp-project-details-list-icon">
                                <i class="fa-thin fa-check"></i>
                             </div>
                             <div class="tagcloud1">
                                <a href="">Use biometrics or multi-factor authentication to verify device identities, ensuring secure access.</a>
                                  </div>
                          </div>
                          <div class="tp-project-details-list-item d-flex">
                             <div class="tp-project-details-list-icon">
                                <i class="fa-thin fa-check"></i>
                             </div>
                             <div class="tagcloud1">
                                <a href="">Adhere to stringent data privacy regulations and standards, implement secure data storage.</a>
                                  </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-5 mt-4">
                       <div class="tp-project-details-list-thumb w-img">
                          <img src="assets/img/service/iotsecurity.jpg" alt=""class="service-img1">
                       </div>
                    </div>
                  </div>

            </div>
         </section>

         <section class="contact-area">
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
@endsection
