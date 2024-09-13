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
                                <span> / Digital Marketing</span>
                            </div>
                            <h2 class="breadcrumb-title">Digital Marketing</h2>
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
                                <img src="assets/img/didgital.jpg" alt="Digital Marketing">
                            </div>
                            <h4 class="tp-services-details-title mb-20">Digital Marketing</h4>
                            <p class="text-black">
                                Maximize your brand’s online presence with <span class="text-pink">Devloops' Digital Marketing
                                    services</span>. Our team specializes in <span class="text-pink">social media marketing, pay-per-click (PPC) campaigns, email marketing, and content marketing</span> to engage your audience and drive conversions.
                                By leveraging targeted digital strategies, we help you reach new customers, build brand awareness,
                                and generate more leads for your business.
                                Partner with Devloops to create a strong online presence and achieve your marketing goals through
                                data-driven digital campaigns.
                            </p>
                            <div class="tp-about-3-item mb-35">
                                <div class="tp-about-3-item-content">
                                    <h4 class="tp-about-3-item-title">Our Vision</h4>
                                    <p class="text-black">To help businesses thrive in the digital world by reaching the right audience
                                        with the right message, enhancing customer engagement, and driving measurable results through
                                        tailored digital marketing strategies.</p>
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
        <section class="offering-area tp-offer-bg pb-80 pt-120 mb-80" data-background="assets/img/bg/offer-bg-1.jpg"
        style="background-image: url(&quot;assets/img/bg/offer-bg-1.jpg&quot;);">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7">
                    <div class="tp-section tp-section-white-two mb-80">
                        <span class="tp-section-sub-title">What We’re Offering</span>
                        <h4 class="tp-section-title">Comprehensive Digital Marketing Solutions <br> To Elevate Your Brand</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-6">
                    <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                        <div class="tp-offer-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M6.293 9.5H4v4H2v-4H1v-2h1V7.5c0-1.5 1-2.5 2.5-2.5h1.5V7h2V9.5z"/>
                            </svg>
                        </div>
                        <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white truncate"><a>Social Media Marketing</a></h4>
                            <p class="text-white truncate">Enhance your brand’s presence on platforms like Facebook, Instagram, and Twitter through targeted campaigns, engaging content, and audience interaction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6">
                    <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s"
                        style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                        <div class="tp-offer-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                class="bi bi-google" viewBox="0 0 16 16">
                                <path d="M8 4.615a3.5 3.5 0 0 1 3.473 3.596c0 .272-.038.541-.089.804H8v-1.9h1.67A2.057 2.057 0 0 0 10.4 6.25c-.262-1.46-1.378-2.58-2.762-2.58-1.596 0-2.886 1.248-2.886 2.773 0 1.528 1.285 2.773 2.886 2.773.598 0 1.178-.174 1.655-.486l1.057 1.06A4.6 4.6 0 0 1 8 8.492c-2.08 0-3.68-1.47-3.68-3.373 0-1.889 1.577-3.373 3.68-3.373z"/>
                            </svg>
                        </div>
                        <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white truncate"><a>PPC Advertising</a></h4>
                            <p class="text-white truncate">Drive targeted traffic to your website with pay-per-click campaigns on platforms like Google Ads and Bing Ads. Optimize your ad spend for maximum ROI.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6">
                    <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                        <div class="tp-offer-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                class="bi bi-envelope" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zM1 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H1zM0 4v11l8-5L16 15V4L8 9 0 4z"/>
                            </svg>
                        </div>
                        <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white truncate"><a>Email Marketing</a></h4>
                            <p class="text-white truncate">Engage with your audience and drive conversions through targeted email campaigns, newsletters, and personalized offers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .truncate {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .tp-offer-item-content {
            height: 100px; /* Adjust based on your design needs */
        }
    </style>



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
