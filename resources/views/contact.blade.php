@extends('layout.app')
@section('content')
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                                <span> / Contact Us</span>
                            </div>
                            <h2 class="breadcrumb-title">Contact Us</h2>
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


        <!-- contact-area-start -->

        <section id="contact-section"  class="contact-area pt-115 pb-80 ">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6 mt-10">
                        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0"
                            marginwidth="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59065.059526554476!2d73.11919162993578!3d22.294415850603173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc7c9770b9e31%3A0x3fd524df7fb6063!2sDevloops%20Technology!5e0!3m2!1sen!2sin!4v1731152613636!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                        {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59065.059526554476!2d73.11919162993578!3d22.294415850603173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc7c9770b9e31%3A0x3fd524df7fb6063!2sDevloops%20Technology!5e0!3m2!1sen!2sin!4v1731152613636!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
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
                                            <textarea class="form-control" name="message" placeholder="Description" maxlength="550">{{ old('message') }}</textarea>
                                        </div>
                                        @error('message')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <div class="g-recaptcha" data-sitekey="6LcwJlMqAAAAAOvV1ztnMCmrPWogfPyXRE-HMYEV"></div>
                                            <!-- Optional hidden label for form-floating requirement -->
                                        </div>
                                        @error('g-recaptcha-response')
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
        <!-- contact-area-end -->

    </main>
@endsection
