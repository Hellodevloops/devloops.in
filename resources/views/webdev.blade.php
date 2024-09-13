@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="/assets/img/healthcarenew1.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                                <span> / web</span>
                            </div>
                            <h2 class="breadcrumb-title">Web Development</h2>
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
                                        <a href="#">L/414, 4th Floor, Park Paradise, beside Billabong School, Vadsar, Vadodara, Gujarat 390010</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tp-services-details-wrapper ml-30">
                            <div class="tp-services-details-main-thumb mb-30 w-img">
                                <img src="assets/img/webnew1.jpg" alt="">
                            </div>
                            <h4 class="tp-services-details-title mb-20">Web Development</h4>
                            <p class="text-black">
                                In addition to safeguarding user data, web development plays a pivotal role in establishing
                                vital interfaces for customers and pivotal control points for businesses. Our dedicated team
                                of web application developers is committed to crafting and delivering web solutions that not
                                only enhance operational efficiency but also expedite decision-making processes and confer a
                                competitive edge. By harnessing the power of web development,<span class="text-pink"> we
                                    empower businesses to seamlessly interact with their customers, optimize workflows
                                </span>, and stay ahead in today's dynamic market landscape.
                            </p>
                            <div class="tp-about-3-item mb-35">

                                <div class="tp-about-3-item-content">
                                    <h4 class="tp-about-3-item-title">Our Vision</h4>
                                    <p class="text-black">Crafting immersive digital experiences that captivate users, drive engagement, and elevate brand presence through intuitive design and robust functionality</p>
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
                                {{-- <img src="{{ asset('assets/img/webecomflaticon.png') }}" alt=""> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0m-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0z"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a>E-commerce website</a></h4>
                                <p class="text-white">In an e-commerce website, businesses create an online presence to showcase their products
                                    or services, enabling customers to <br> browse.</p>
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
                                {{-- <img src="{{ asset('assets/img/webmultipageflaticon.png') }}" alt=""> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-subtract" viewBox="0 0 16 16">
                                    <path d="M0 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v2h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2v-2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a>Multipage Website</a></h4>
                                <p class="text-white">A multipage website consists of multiple interconnected web pages, providing a structured
                                    and organized platform for content delivery.</p>
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
                                {{-- <img src="{{ asset('assets/img/dynamicflaticon.png') }}" alt=""> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-arrow-down-right-square-fill" viewBox="0 0 16 16">
                                    <path d="M14 16a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2zM5.904 5.197 10 9.293V6.525a.5.5 0 0 1 1 0V10.5a.5.5 0 0 1-.5.5H6.525a.5.5 0 0 1 0-1h2.768L5.197 5.904a.5.5 0 0 1 .707-.707"/>
                                  </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a>Dynamic Website</a></h4>
                                <p class="text-white">A dynamic website utilizes server-side technologies to generate content, dynamic sites
                                    can dynamically alter content based on user interactions.</p>
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
@endsection
