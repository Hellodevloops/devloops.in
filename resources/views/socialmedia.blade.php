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
                                <span> / Social Media Marketing</span>
                            </div>
                            <h2 class="breadcrumb-title">Social Media Marketing</h2>
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
                                        <a href="#">L/414, 4th Floor, Park Paradise, beside Billabong School, Vadsar, Vadodara, Gujarat 390010</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tp-services-details-wrapper ml-30">
                            <div class="tp-services-details-main-thumb mb-30 w-img">
                                <img src="assets/img/socialmarketing.jpg" alt="Social Media Marketing">
                            </div>
                            <h4 class="tp-services-details-title mb-20">Social Media Marketing</h4>
                            <p class="text-black">
                                Elevate your brand's visibility and engagement with <span class="text-pink">Devloops' Social
                                    Media Marketing services</span>. We create and execute tailored strategies to boost your
                                presence on platforms like Facebook, Instagram, LinkedIn, and Twitter. Our approach includes
                                content creation, audience engagement, and targeted advertising to connect with your ideal
                                customers.
                                Through data-driven insights and creative campaigns, we help you build a loyal following,
                                increase brand awareness, and drive meaningful interactions with your audience.
                                Partner with Devloops to harness the power of social media and achieve your marketing goals
                                with impactful and measurable results.
                            </p>
                            <div class="tp-about-3-item mb-35">
                                <div class="tp-about-3-item-content">
                                    <h4 class="tp-about-3-item-title">Our Vision</h4>
                                    <p class="text-black">To empower businesses with innovative social media strategies that
                                        foster brand growth, enhance customer relationships, and deliver outstanding
                                        marketing results.</p>
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
                   <h4 class="tp-section-title">Tailored Social Media Marketing Solutions <br> To Amplify Your Brand</h4>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                    style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                   <div class="tp-offer-item-icon">
                       <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                            class="bi bi-facebook" viewBox="0 0 16 16">
                           <path d="M6.293 9.5H4v4H2v-4H1v-2h1V7.5c0-1.5 1-2.5 2.5-2.5h1.5V7h2V9.5z" />
                       </svg>
                   </div>
                   <div class="tp-offer-item-content">
                       <h4 class="tp-offer-item-title under-line-white truncate"><a>Facebook Marketing</a></h4>
                       <p class="text-white truncate">Boost your brand's visibility and engagement on Facebook with
                           targeted advertising, strategic content, and audience interaction.</p>
                   </div>
               </div>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s"
                    style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                   <div class="tp-offer-item-icon">
                       <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                            class="bi bi-twitter" viewBox="0 0 16 16">
                           <path d="M5.026 15c6.039 0 9.33-5 9.33-9.33 0-.14-.004-.283-.01-.423A6.672 6.672 0 0 0 16 3.577a6.574 6.574 0 0 1-1.889.518A3.303 3.303 0 0 0 15.558 2a6.528 6.528 0 0 1-2.075.788A3.286 3.286 0 0 0 7.88 6.046 9.29 9.29 0 0 1 1.114 2.7a3.292 3.292 0 0 0 1.016 4.386A3.271 3.271 0 0 1 .64 6.64v.041a3.284 3.284 0 0 0 2.64 3.22 3.273 3.273 0 0 1-.865.116c-.212 0-.418-.02-.62-.058a3.282 3.282 0 0 0 3.064 2.283A6.585 6.585 0 0 1 .62 14.351a6.446 6.446 0 0 1-.77-.045A9.326 9.326 0 0 0 5.026 15z" />
                       </svg>
                   </div>
                   <div class="tp-offer-item-content">
                       <h4 class="tp-offer-item-title under-line-white truncate"><a>Twitter Marketing</a></h4>
                       <p class="text-white truncate">Enhance your brand’s presence on Twitter with effective strategies
                           for content creation, audience engagement, and trend participation.</p>
                   </div>
               </div>
           </div>
           <div class="col-xl-4 col-lg-4 col-md-6">
               <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                    style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                   <div class="tp-offer-item-icon">
                       <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                            class="bi bi-instagram" viewBox="0 0 16 16">
                           <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zm0 1.5a6.5 6.5 0 1 0 0 13A6.5 6.5 0 0 0 8 1.5zM6.5 8a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0zm5.5-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zM6.5 7a2.5 2.5 0 1 1 5 0 2.5 2.5 0 0 1-5 0z" />
                       </svg>
                   </div>
                   <div class="tp-offer-item-content">
                       <h4 class="tp-offer-item-title under-line-white truncate"><a>Instagram Marketing</a></h4>
                       <p class="text-white truncate">Grow your brand’s reach and engagement on Instagram through creative
                           posts, stories, and targeted ad campaigns.</p>
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
                height: 100px;
                /* Adjust based on your design needs */
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
