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
                                <span> / SEO </span>
                            </div>
                            <h2 class="breadcrumb-title">SEO</h2>
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
                        <img src="assets/img/seo.jpg" alt="">
                    </div>
                    <h4 class="tp-services-details-title mb-20">Search Engine Optimization (SEO)</h4>
                    <p class="text-black">
                        Unlock the potential of organic search traffic with <span class="text-pink">Devloops' SEO services</span>. Our
                        specialized team works on optimizing your website through <span class="text-pink">on-page SEO, off-page strategies,
                        keyword research, content optimization</span>, and link-building to help your business rank higher in search results.
                        By leveraging cutting-edge SEO techniques, we enable you to improve visibility, attract qualified traffic, and
                        enhance brand credibility. Partner with Devloops to boost your search rankings and achieve long-term sustainable growth
                        through optimized digital strategies.
                    </p>
                    <div class="tp-about-3-item mb-35">
                        <div class="tp-about-3-item-content">
                            <h4 class="tp-about-3-item-title">Our Vision</h4>
                            <p class="text-black">To empower businesses by helping them reach the top of search engine results, increasing visibility,
                            driving organic traffic, and enhancing customer trust through tailored SEO solutions.</p>
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
                        <h4 class="tp-section-title">Exclusive SEO Services <br> For Your Business Growth</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-md-6">
                    <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;">
                        <div class="tp-offer-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-bar-chart"
                                viewBox="0 0 16 16">
                                <path d="M0 0h1v16H0V0zm2.5 5h1v11h-1V5zm5 3h1v8h-1V8zm5-6h1v14h-1V2z" />
                            </svg>
                        </div>
                        <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white"><a>On-Page SEO</a></h4>
                            <p class="text-white">Optimize your website’s content and structure to improve its ranking on search engines
                                through targeted keywords and meta tags.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6">
                    <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".5s" data-wow-delay=".5s"
                        style="visibility: visible; animation-duration: 0.5s; animation-delay: 0.5s; animation-name: bounceIn;">
                        <div class="tp-offer-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-share"
                                viewBox="0 0 16 16">
                                <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm-11 6a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM13.5 14a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM5.178 9.148a3.487 3.487 0 0 0 0-2.296l5.155-3.093a1.5 1.5 0 1 0-.632-1.175L4.546 5.677a3.5 3.5 0 1 0 0 4.646l5.155 3.093a1.5 1.5 0 1 0 .632-1.175L5.178 9.148z" />
                            </svg>
                        </div>
                        <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white"><a>Off-Page SEO</a></h4>
                            <p class="text-white">Improve your website’s authority and ranking through backlinks, social media
                                engagement, and external optimization.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-3 col-md-6">
                    <div class="tp-offer-item mb-40 wow bounceIn" data-wow-duration=".6s" data-wow-delay=".6s"
                        style="visibility: visible; animation-duration: 0.6s; animation-delay: 0.6s; animation-name: bounceIn;height:263.78px;">
                        <div class="tp-offer-item-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white" class="bi bi-shield-lock"
                                viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8 0c-.69 0-1.843.265-2.928.56-1.11.3-2.229.655-2.887.87a1.54 1.54 0 0 0-1.044 1.262c-.596 4.477.787 7.795 2.465 9.99a11.8 11.8 0 0 0 2.517 2.453c.386.273.744.482 1.048.625.28.132.581.24.829.24s.548-.108.829-.24a7 7 0 0 0 1.048-.625 11.8 11.8 0 0 0 2.517-2.453c1.678-2.195 3.061-5.513 2.465-9.99a1.54 1.54 0 0 0-1.044-1.263 63 63 0 0 0-2.887-.87C9.843.266 8.69 0 8 0m3.5 7.5a.5.5 0 0 1-.5.5H10v2.5h1.5a.5.5 0 0 1 0 1H9v2.5a.5.5 0 0 1-1 0V11H6.5a.5.5 0 0 1 0-1H8V7.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v1z" />
                            </svg>
                        </div>
                        <div class="tp-offer-item-content">
                            <h4 class="tp-offer-item-title under-line-white"><a>Technical SEO</a></h4>
                            <p class="text-white">Ensure your website’s technical setup is optimized for search engines, including faster loading, mobile compatibility, and structured data.</p>
                        </div>
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
