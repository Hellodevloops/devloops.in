@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="./assets/img/devproducthero.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                                <span> / Product </span>
                            </div>
                            <h2 class="breadcrumb-title">Product Development</h2>
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

        <section class="project-details-area pt-40 pb-50 mb-00">
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
                                    <a href="{{ route('iot') }}">IOT <i class="fa-light fa-arrow-right"></i></a>
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
                                        <a href="#">L/414, 4th Floor, Park Paradise, beside Billabong School, Vadsar,
                                            Vadodara, Gujarat 390010</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="tp-services-details-wrapper ml-30">
                            <div class="tp-services-details-main-thumb mb-30 w-img">
                                <img src="assets/img/prodnew1.jpg" alt="">
                            </div>
                            <h4 class="tp-services-details-title mb-20">Product Development</h4>
                            <p class="text-black">
                                At <span class="text-pink">Devloops</span>, we understand the paramount importance of
                                protecting user data and upholding the trust our customers place in our products. This
                                fundamental principle drives our development practices, where security takes center stage.
                                We implement a comprehensive approach to security, integrating cutting-edge encryption
                                techniques,<span class="text-pink"> rigorous authentication protocols, and meticulous
                                    security audits into our processes</span>. By prioritizing these measures, we ensure
                                that our users' data remains safeguarded against potential threats and vulnerabilities,
                                bolstering confidence in the reliability and integrity of our solutions.
                            </p>
                            <div class="tp-about-3-item mb-35">

                                <div class="tp-about-3-item-content">
                                    <h4 class="tp-about-3-item-title">Our Vision</h4>
                                    <p class="text-black">Creating groundbreaking products that enhance everyday life
                                        through meticulous design, advanced technologies, and user-focused innovation </p>
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
        <section class="offering-area tp-offer-bg pb-80 pt-120 " data-background="assets/img/bg/offer-bg-1.jpg"
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
                                {{-- <img src="{{ asset('assets/img/proderpflaticon.png') }}" alt=""> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-database-fill-gear" viewBox="0 0 16 16">
                                    <path
                                        d="M8 1c-1.573 0-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4s.875 1.755 1.904 2.223C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777C13.125 5.755 14 5.007 14 4s-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1" />
                                    <path
                                        d="M2 7v-.839c.457.432 1.004.751 1.49.972C4.722 7.693 6.318 8 8 8s3.278-.307 4.51-.867c.486-.22 1.033-.54 1.49-.972V7c0 .424-.155.802-.411 1.133a4.51 4.51 0 0 0-4.815 1.843A12 12 0 0 1 8 10c-1.573 0-3.022-.289-4.096-.777C2.875 8.755 2 8.007 2 7m6.257 3.998L8 11c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V10c0 1.007.875 1.755 1.904 2.223C4.978 12.711 6.427 13 8 13h.027a4.55 4.55 0 0 1 .23-2.002m-.002 3L8 14c-1.682 0-3.278-.307-4.51-.867-.486-.22-1.033-.54-1.49-.972V13c0 1.007.875 1.755 1.904 2.223C4.978 15.711 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.5 4.5 0 0 1-1.3-1.905m3.631-4.538c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a>ERP</a></h4>
                                <p class="text-white">Enterprise Resource Planning (ERP) streamlines business processes by
                                    integrating and
                                    managing core functions such as finance and human resources.</p>
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
                                {{-- <img src="{{ asset('assets/img/prodcrmflaticon.png') }}" alt=""> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-bar-chart-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M1 11a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1zm5-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1zm5-5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1z" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a>CRM</a></h4>
                                <p class="text-white">Customer Relationship Management (CRM) <br>focuses on enhancing
                                    customer interactions,
                                    providing tools to manage leads & automate sales processes.</p>
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
                                {{-- <img src="{{ asset('assets/img/prodcmsflaticon.png') }}" alt=""> --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="white"
                                    class="bi bi-file-text-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2M5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5M5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1m0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1" />
                                </svg>
                            </div>
                            <div class="tp-offer-item-content">
                                <h4 class="tp-offer-item-title under-line-white"><a>CMS</a></h4>
                                <p class="text-white">Content Management System is a software application or platform that
                                    facilitates the
                                    creation, modification, and management of digital content for websites.</p>
                            </div>
                            <!-- <div class="tp-offer-item-btn">
                                              <a href="services-details.html">Read More <i class="fa-regular fa-arrow-right"></i></a>
                                           </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </section>

          {{-- features start --}}
          <section class="tp-services-details-contact ">

            <div class="container   pt-50">
                <div class="row align-items-end">
                    <div class="col-lg-7">
                        <div class="tp-section tp-section-white-two ">
                            <h4 class="tp-section-title">Features Of Our Product Devlopment</h4>
                        </div>
                    </div>
                </div>
                <div class="row p-5 gx-5">
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-solid fa-brackets-curly"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">End-to-End Development</h4>
                                <p class="text-white">From concept to launch, we manage every stage of the product lifecycle, ensuring a smooth transition from idea to market-ready solution.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-sharp fa-solid fa-users"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Customer-Centric Approach</h4>
                                <p class="text-white">We focus on understanding customer needs and pain points, designing products that provide real value and solve specific problems.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-regular fa-arrows-rotate"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Agile Methodology
                                </h4>
                                <p class="text-white">Our agile development process allows for flexibility and continuous feedback, ensuring the product evolves to meet dynamic business needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-sharp fa-solid fa-browser"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Prototyping and Testing</h4>
                                <p class="text-white">We create prototypes early in the process to test functionality and gather user feedback, ensuring product viability before full-scale production.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-solid fa-users-gear"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Cross-Functional Collaboration</h4>
                                <p class="text-white">Our team of designers, engineers, and marketers work together to align the product vision with technical feasibility and market demands.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-sharp fa-solid fa-expand"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Scalability and Flexibility
                                </h4>
                                <p class="text-white">We develop products with future growth in mind, ensuring that they can scale seamlessly as your business expands. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-solid fa-square-caret-up"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Iterative Improvement</h4>
                                <p class="text-white">Through continuous iteration and user feedback, we refine and improve the product, ensuring it stays relevant and competitive.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex my-3 ">
                            <div class="tp-offer-item-icon">
                                <i class="fa-solid fa-shield-check"></i>
                            </div>
                            <div class="text-white ms-4">
                                <h4 class="tp-offer-item-title text-white">Quality Assurance
                                </h4>
                                <p class="text-white">Rigorous testing and quality checks are integrated into every phase of development, guaranteeing a reliable and high-performance product. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- features end --}}

        {{-- why-us start --}}
        <section class="py-5">
            <div class="container">
                <div class="row align-items-center mb-20 mt-4">
                    <div class="col-lg-12">
                        <div class="tp-project-details-list">
                            <h4 class="Text-black pb-5"> Why Choose Our Product Devlopment Services</h4>
                            <p class="Text-black pb-10">
                                At Devloops International, we offer a comprehensive product development process that turns innovative ideas into market-ready solutions. Our experienced team works closely with you from the initial concept to the final launch, ensuring that your product is designed to meet the needs of your customers while aligning with your business goals. We use an agile methodology that allows for flexibility and continuous improvement throughout the development cycle, ensuring that the product adapts to changes in the market and delivers long-term value.

                                What sets us apart is our commitment to quality and innovation. We don’t just build products—we build scalable, future-proof solutions that grow with your business. Through rigorous testing, iterative design, and cross-functional collaboration, we ensure that every product we develop meets the highest standards of functionality, reliability, and user experience. With our customer-centric approach, we focus on understanding your unique challenges and delivering solutions that drive growth and success.
                            </p>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">End-to-end product development from concept to launch</a>
                                        </div>

                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Agile methodology for flexibility and adaptability</a>
                                        </div>
                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Prototyping and testing to ensure product viability</a>
                                        </div>

                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Customer-centric design to meet specific needs</a>
                                        </div>

                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Scalable solutions built for future growth</a>
                                        </div>

                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Rigorous quality assurance for high-performance products</a>
                                        </div>

                                    </div>
                                    <div class="tp-project-details-list-item d-flex">
                                        <div class="tp-project-details-list-icon">
                                            <i class="fa-thin fa-check"></i>
                                        </div>
                                        <div class="tagcloud1">
                                            <a href="">Affordable and transparent pricing</a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="tp-project-details-list-thumb w-img">
                                        <img src="assets/img/product.jpg" alt=""
                                            style="width:540px; height:400px;">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        {{-- why-us end --}}


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
                                            <input type="text" name="firstname" placeholder="First Name"
                                                value="{{ old('firstname') }}">
                                            <span><i class="fa-light fa-user"></i></span>
                                        </div>
                                        @error('firstname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="lastname" placeholder="Last Name"
                                                value="{{ old('lastname') }}">
                                            <span><i class="fa-light fa-user"></i></span>
                                        </div>
                                        @error('lastname')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="email" placeholder="Email Address"
                                                value="{{ old('email') }}">
                                            <span><i class="fa-light fa-envelope"></i></span>
                                        </div>
                                        @error('email')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="phone" placeholder="Phone Number"
                                                value="{{ old('phone') }}">
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
