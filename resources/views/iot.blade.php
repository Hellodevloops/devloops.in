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
                                <img src="assets/img/iotnew1.jpg" alt="">
                            </div>
                            <h4 class="tp-services-details-title mb-20">Internet Of Things</h4>
                            <p class="text-black">
                                Leverage <span class="text-pink">Devloops's IoT development</span> services to unlock the
                                full potential of hyperconnectivity within your organization. Our expertise spans <span
                                    class="text-pink"> sensor programming, gateway integration, seamless connection
                                    establishment</span>, IoT application development, platform creation, and advanced
                                analytics. By embracing cutting-edge IoT technologies, we empower you to enhance operational
                                efficiency, deepen customer engagement, and refine strategic insights through expedited
                                access to critical business information. With Devloops as your IoT partner, you can harness
                                the transformative power of interconnected devices to drive innovation, agility, and
                                sustainable growth in your business ecosystem.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sercices-area-end -->
        <section class="offering-area tp-offer-bg pb-80 pt-120 mb-80" data-background="assets/img/bg/offer-bg-1.jpg"
            style="background-image: url(&quot;assets/img/bg/offer-bg-1.jpg&quot;);">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="tp-section tp-section-white-two mb-80">
                            <span class="tp-section-sub-title">What We’re Offering</span>
                            <h4 class="tp-section-title">We Provide Exclusive Service <br> For Your Business</h4>
                        </div>
                    </div>
                    <!-- <div class="col-lg-5">
                                <div class="tp-section-title-wrapper mb-80">
                                   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor incididunt ut
                                      labore et dolore magna aliqua. quis nostrud exercitation ullamco laboris</p>
                                </div>
                             </div> -->
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-3 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <i class="flaticon-ux-design"></i>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a>Iot analytics</a></h4>
                                <p>It involves collecting, processing, and analyzing data from sensors, devices, and other
                                    IoT components to derive valuable information.</p>
                            </div>
                            <!-- <div class="tp-offer-item-btn">
                                      <a href="services-details.html">Read More <i class="fa-regular fa-arrow-right"></i></a>
                                   </div> -->
                        </div>
                    </div>
                    <!-- <div class="col-xl-4 col-lg-3 col-md-6">
                                <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s" style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                                   <div class="tp-offer-item-icon">
                                      <i class="flaticon-ux-design"></i>
                                   </div>
                                   <div class="tp-offer-item-content">
                                      <h4 class="tp-offer-item-title under-line-white"><a href="services-details.html">Digital Marketing</a></h4>
                                      <p>Donec suscipit ante ipsum. Donec convallis quality torto</p>
                                   </div>
                                   <div class="tp-offer-item-btn">
                                      <a href="services-details.html">Read More <i class="fa-regular fa-arrow-right"></i></a>
                                   </div>
                                </div>
                             </div> -->
                    <div class="col-xl-4 col-lg-3 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s"
                            style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <i class="flaticon-ux-design"></i>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a>Iot Connectivity</a></h4>
                                <p>As IoT involve a diverse range of devices with varying communication protocols,
                                    standards, and requirements, effective connectivity solutions.</p>
                            </div>
                            <!-- <div class="tp-offer-item-btn">
                                      <a href="services-details.html">Read More <i class="fa-regular fa-arrow-right"></i></a>
                                   </div> -->
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3 col-md-6">
                        <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                            style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                            <div class="tp-offer-item-icon">
                                <i class="flaticon-ux-design"></i>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a>Iot Security</a></h4>
                                <p>As IoT devices collect and transmit sensitive data, ensuring the confidentiality,
                                    integrity, and availability of this information is paramount.</p>
                            </div>
                            <!-- <div class="tp-offer-item-btn">
                                      <a href="services-details.html">Read More <i class="fa-regular fa-arrow-right"></i></a>
                                   </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- contact -->

        <section class="contact-area ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="tp-contact-main mb-40">
                            <!-- <div class="tp-section tp-section-two mb-25">
                                      <span class="tp-section-sub-title"><i class="flaticon-edit"></i> Let’s Talk With Us</span>
                                      <h4 class="tp-section-title">Grow Your Business With Our Expertise</h4>
                                      <div class="tp-section-title-wrapper">
                                         <p>System is a term used to refer to an organized collection symbols and processes that may be used to operate on such symbols.</p>
                                      </div>
                                   </div> -->
                            <div class="tp-contact-main-thumb mb-40 w-img">
                                <img src="assets/img/thumbs/contact-main-bg-1.jpg" alt="">
                            </div>
                            <div class="tp-contact-location-wrap d-flex align-items-center">
                                <div class="tp-contact-location">
                                    <span class="tp-contact-location-title">New York</span>
                                    <a class="text-black" href="#"><i class="fa-light fa-location-dot"></i>GF-2
                                        Dhanlaxmi Complex,<br> Vadodara </a>
                                    <a class="text-black" href="tel:0123456"><i class="fa-light fa-phone"></i>
                                        +919106077817</a>
                                    <a class="text-black" href="mailto:hello@devloops.in"><i
                                            class="fa-light fa-envelope"></i>hello@devloops.in</a>
                                </div>
                                <div class="tp-contact-location ml-40">
                                    <span class="tp-contact-location-title">Canada</span>
                                    <a class="text-black" href="#"><i
                                            class="fa-light fa-location-dot"></i>Kitchener, Ontario,<br> Canada</a>
                                    <a class="text-black" href="tel:0123456"><i class="fa-light fa-phone"></i>
                                        +919106077817</a>
                                    <a class="text-black" href="mailto:hello@devloops.in"><i
                                            class="fa-light fa-envelope"></i>hello@devloops.in</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-xl-1 col-xl-6 col-lg-6 ">
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
