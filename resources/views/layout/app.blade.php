<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from template.wphix.com/tecz-prv/tecz/index-3-one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 07:56:47 GMT -->
<head>
      <meta charset="utf-8">
      <meta http-equiv="x-ua-compatible" content="ie=edge">
      <title>Devloops</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Place favicon.ico in the root directory -->
      <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo/favicon.png') }}">

      <!-- CSS here -->
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/font-awesome-pro.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/flaticon_tecz.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/spacing.css') }}">
      <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
      <!-- our clients codepen -->
      <style>
        img {
 max-width: 100%;
}
.container {
 max-width: 1140px;
 width: 100%;
}

.client .swiper-container {
 padding: 40px 50px;
}
.client__image {
 width: 200px; /* Set the desired width */
 height: 100px; /* Set the desired height */
}

.client__box img {
 display: block;
 margin: 0 auto;
}

@media only screen and (max-width: 767px) {
 .client .swiper-container {
   padding: 0 0 40px;
 }
 .client__box {
   padding: 0;
   text-align: center;
 }
 .client .swiper-button-prev,
 .client .swiper-button-next {
   display: none;
 }
}
     </style>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-MG51PDS4RE"></script>
{{-- nelow script is use for analysing traffic of visiting count --}}
<script defer src="https://cloud-umami.y4nyjj.easypanel.host/script.js" data-website-id="2536e4d4-a477-4f32-b168-07eab3aa3b12"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-MG51PDS4RE');
</script>

   </head>
   <body>

      <!-- pre loader area start -->
      <div id="loading">
         <div id="loading-center">
            <div id="loading-center-absolute">
               <!-- loading content here -->
               <div class="tp-preloader-content">
                  <div class="tp-preloader-logo">
                     <!-- <div class="tp-preloader-circle">
                        <svg width="190" height="190" viewBox="0 0 380 380" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <circle stroke="#D9D9D9" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round">
                           </circle>
                           <circle stroke="red" cx="190" cy="190" r="180" stroke-width="6" stroke-linecap="round"></circle>
                        </svg>
                     </div> -->
                     <img src="assets/img/logo/preloader/preloader-icon.png" alt="">
                  </div>
                <!-- <p class="tp-preloader-subtitle">Loading...</p> -->
               </div>
            </div>
         </div>
      </div>
      <!-- pre loader area end -->

      <!-- back to top start -->
      <div class="back-to-top-wrapper">
         <button id="back_to_top" type="button" class="back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="http://www.w3.org/2000/svg">
               <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
         </button>
      </div>
      <!-- back to top end -->

      <!-- header area start -->
      <header>
         <div class="tp-header-area tp-header-3 tp-header-height">
            <div class="tp-header-3-top theme-bg d-none d-lg-block">
               <div class="tp-header-3-top-wrap d-flex align-items-center justify-content-between">
                  <div class="tp-header-3-top-left d-flex align-items-center">
                     <div class="tp-header-3-top-left-item">
                        <span><i class="fa-solid fa-location-dot"></i></span>
                        <a href="{{ route('contact') }}">L/414, 4th Floor, Park Paradise, beside Billabong School, Vadsar, Vadodara, Gujarat 390010</a>
                     </div>
                     <div class="tp-header-3-top-left-item">
                        <span><i class="fa-solid fa-envelope"></i></span>
                        <a href="mailto:hello@devloops.in"><span>hello@devloops.in</span></a>
                    </div>

                  </div>
                  <div class="tp-header-3-top-right d-flex align-items-center">
                     <!-- <div class="tp-header-3-top-info">
                        <a href="#">Help</a>
                        <a href="#">Support</a>
                        <a href="#">Contact</a>
                     </div> -->
                     <div class="tp-header-3-top-social">

                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                                         </div>
                  </div>
               </div>
            </div>
            <div id="header-sticky" class="tp-header-3-wrap  white-bg d-flex justify-content-between">
               <div class="tp-header-3-main d-flex">
                  <div class="logo"  data-background="{{ asset('assets/img/shape/logo-shape-1.png')}}">
                     <a href="{{ route('/') }}">
                        <img data-width="155" src="{{ asset('assets/img/logo/logo-black.png')}}" alt="">
                     </a>
                  </div>
                  <div class="main-menu tp-header-3-menu d-none d-xl-block">
                     <nav id="mobile-menu" class="tp-main-menu-content">
                        <ul class="tp-onepage-menu">

                           <li><a href="{{ route('/') }}">Home</a></li>
                           <li><a href="{{ route('about') }}">About</a></li>
                           <li class="has-dropdown">
                              <a href="#">Service</a>
                              <div class="tp-submenu ">
                                 <div class="row gx-6 row-cols-1 ml-4">

                                       <div class="demo-name">
                                          <span><a href="{{ route('product') }}">Product Development</a></span>
                                       </div>
                                       <div class="demo-name">
                                          <span><a href="{{ route('webdev') }}">Web Development</a></span>
                                       </div>
                                       <div class="demo-name">
                                          <span><a href="{{ route('iot') }}">Internet Of Things</a></span>
                                       </div>
                                       <div class="demo-name">
                                          <span><a href="{{ route('healthcare') }}">Healthcare</a></span>
                                       </div>
                                       <div class="demo-name">
                                        <span><a href="{{ route('seo') }}">SEO</a></span>
                                     </div>
                                     <div class="demo-name">
                                        <span><a href="{{ route('digital') }}">Digital Marketing</a></span>
                                     </div>
                                     <div class="demo-name">
                                        <span><a href="{{ route('socialmedia') }}">Social Media Marketing</a></span>
                                     </div>
                                     <div class="demo-name">
                                        <span><a href="{{ route('socialmanagement') }}">Social Media Management</a></span>
                                     </div>

                                    <!-- <div class="col homemenu">
                                       <div class="homemenu-thumb">
                                          <img src="assets/img/menu/home-5.jpg" alt="">
                                       </div>
                                       <div class="homemenu-btn">
                                          <a class="tp-btn menu-btn mb-5" href="index-6.html">Multi Page</a>
                                          <a class="tp-btn menu-btn" href="index-5-one-page.html">One Page</a>
                                       </div>
                                       <div class="demo-name">
                                          <span>Home 05</span>
                                       </div>
                                    </div> -->
                                 </div>
                              </div>
                           </li>
                           <li><a href="{{ route('post') }}">Blog</a></li>
                           {{-- <li><a href="{{ route('post.show', ['slug' => 'funding-your-dream-scholarships-and-financial-aid-for-studying-abroad']) }}">Blog1</a></li> --}}
                           <li><a href="{{ route('career') }}">Career</a></li>
                           <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                     </nav>
                  </div>
               </div>
               <div class="tp-header-right d-flex align-items-center">
                  <!-- <div class="tp-header-search">
                     <button class="tp-header-search-btn tp-search-open-btn" type="submit">
                        <i class="fa-light fa-magnifying-glass"></i>
                     </button>
                  </div>
                  <div class="tp-header-cart ml-30">
                  <button class="tp-header-cart-btn cartmini-open-btn p-relative" type="button">
                     <i class="flaticon-shopping-cart"></i>
                     <span>3</span>
                  </button>
                  </div> -->
                  <!-- <div class="tp-header-btn ml-35 mr-30 d-none d-lg-block">
                     <a class="tp-btn" href="#">Get Solution</a>
                  </div> -->
                  <div class="d-none d-xxl-block">
                     <div class="tp-header-cta d-flex align-items-center">
                        <div class="tp-header-cta-icon d-none d-lg-block">
                           <!-- <img src="assets/img/icon/header-cta-icon.svg" alt=""> -->
                           <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="#ff0080" class="bi bi-whatsapp" viewBox="0 0 16 16">
                              <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
                            </svg>
                        </div>
                        <div class="tp-header-cta-content d-none d-lg-block">
                           <p class="text-black">Need help? Talk to an expert </p>
                           <a href="tel:+919106077817">Free +919106077817</a>
                        </div>
                     </div>
                  </div>
                  <div class="offcanvas-btn d-xl-none ml-30">
                     <button class="offcanvas-open-btn"><i class="fa-solid fa-bars"></i></button>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- header area end -->

      <!-- offcanvas area start -->
      <div class="offcanvas__area">
         <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
               <button class="offcanvas__close-btn offcanvas-close-btn">
                  <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                     <path d="M11 1L1 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                     <path d="M1 1L11 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                  </svg>
               </button>
            </div>
            <div class="offcanvas__content">
               <div class="offcanvas__top mb-70 d-flex justify-content-between align-items-center">
                  <div class="offcanvas__logo logo">
                     <a href="{{ route('/') }}">
                        <img src="{{ asset('assets/img/logo/logo-black.png')}}" alt="logo">
                     </a>
                  </div>
               </div>
               <div class="tp-main-menu-mobile"></div>
               <!-- <div class="offcanvas__btn">
                  <a href="contact.html" class="tp-btn">Getting Started <i
                        class="fa-regular fa-chevron-right"></i></a>
               </div> -->
               {{-- <div class="side-info-contact">
                  <span>we are here</span>
                  <p>1489 Langley Ave <br> Grand Forks Afb, North.</p>
               </div> --}}
               <div class="side-info-social">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                  <a href="#"><i class="fa-solid fa-paper-plane"></i></a>
               </div>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- offcanvas area end -->

      <!-- header-search -->
      <div class="tpsearchbar tp-sidebar-area tp-search-area">
         <button class="tpsearchbar__close"><i class="fa-sharp fa-regular fa-xmark"></i></button>
         <div class="search-wrap text-center">
               <div class="container">
                  <div class="row justify-content-center">
                     <div class="col-lg-6 col-md-10 pt-100 pb-100">
                           <h2 class="tpsearchbar__title">What Are You Looking For?</h2>
                           <div class="tpsearchbar__form">
                              <form action="#">
                                 <input type="text" name="search" placeholder="Search Product...">
                                 <button class="tpsearchbar__search-btn"><i class="fa-regular fa-magnifying-glass"></i></button>
                              </form>
                           </div>
                     </div>
                  </div>
               </div>
         </div>
      </div>
      <div class="search-body-overlay"></div>
      <!-- header-search-end -->

      <!-- header-cart-start -->
      <div class="tpcartinfo cartmini__area p-relative">
         <button class="cartmini-close-btn"><i class="fa-sharp fa-light fa-xmark"></i></button>
         <div class="tpcart">
            <h4 class="tpcart__title">Your Cart</h4>
            <div class="tpcart__product">
               <div class="tpcart__product-list">
                  <ul>
                     <li>
                        <div class="tpcart__item">
                           <div class="tpcart__img">
                              <a href="shop-details.html"><img src="{{ asset('assets/img/shop/product-1.jpg')}}" alt=""></a>
                              <div class="tpcart__del">
                                 <a href="#"><i class="fa-sharp fa-light fa-circle-xmark"></i></a>
                              </div>
                           </div>
                           <div class="tpcart__content">
                              <span class="tpcart__content-title"><a href="shop-details.html">Running Trainers</a>
                              </span>
                              <div class="tpcart__cart-price">
                                 <span class="quantity">1 x</span>
                                 <span class="new-price">$162.80</span>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="tpcart__item">
                           <div class="tpcart__img">
                              <a href="shop-details.html"><img src="{{ asset('assets/img/shop/product-2.jpg')}}" alt=""></a>
                              <div class="tpcart__del">
                                 <a href="#"><i class="fa-sharp fa-light fa-circle-xmark"></i></a>
                              </div>
                           </div>
                           <div class="tpcart__content">
                              <span class="tpcart__content-title"><a href="shop-details.html">Classic Chair</a>
                              </span>
                              <div class="tpcart__cart-price">
                                 <span class="quantity">1 x</span>
                                 <span class="new-price">$138.00</span>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li>
                        <div class="tpcart__item">
                           <div class="tpcart__img">
                              <a href="shop-details.html"><img src="{{ asset('assets/img/shop/product-3.jpg')}}" alt=""></a>
                              <div class="tpcart__del">
                                 <a href="#"><i class="fa-sharp fa-light fa-circle-xmark"></i></a>
                              </div>
                           </div>
                           <div class="tpcart__content">
                              <span class="tpcart__content-title"><a href="shop-details.html">Skull Print T-Shirt</a>
                              </span>
                              <div class="tpcart__cart-price">
                                 <span class="quantity">1 x</span>
                                 <span class="new-price">$162.8</span>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </div>
               <div class="tpcart__checkout">
                  <div class="tpcart__total-price d-flex justify-content-between align-items-center">
                     <span> Subtotal:</span>
                     <span class="heilight-price"> $300.00</span>
                  </div>
                  <div class="tpcart__checkout-btn">
                     <a class="tp-btn mb-10" href="cart.html">View Cart</a>
                     <a class="tp-btn tp-btn-2" href="checkout.html">Checkout</a>
                  </div>
               </div>
            </div>
            <div class="tpcart__free-shipping text-center">
               <span>Free shipping for orders <b>under 10km</b></span>
            </div>
         </div>
      </div>
      <div class="body-overlay"></div>
      <!-- header-cart-end -->

    @yield('content')


     <!-- footer-area-start -->
     <footer>
        <div class="footer-area">
           <div class="tp-footer-top pt-25 theme-bg" data-background="{{ asset('assets/img/footer/one/footer-bg-1.jpg') }}">
              <div class="container">
                 <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-12">
                       <div class="tp-footer-widget footer-col-1 mb-40">
                          <div class="tp-footer-widget-logo mb-15">
                             <a href="{{ route('/') }}">
                                <img src="{{ asset('assets/img/logo/logo.png') }}" alt="fw-logo" style="width: 200px; height: 50px;">
                             </a>
                          </div>
                          <div class="tp-footer-widget-content">
                             {{-- <p>Innovating Tomorrow's Technology Today.</p> --}}
                             <div class="tp-footer-widget-content-list">
                                <div class="tp-footer-widget-content-list-item">
                                   <i class="fa-solid fa-square-phone "></i><a href="tel:+919106077817"> +919106077817</a>
                                </div>
                                <div class="tp-footer-widget-content-list-item">
                                   <a href="mailto:hello@devloops.in"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ff0080" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414zM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586zm3.436-.586L16 11.801V4.697z"/>
                                  </svg> hello@devloops.in</a>
                                </div>
                                <div class="tp-footer-widget-content-list-item">
                                    <a href="#"><i class="fa-solid fa-location-dot"></i>GF-2 Dhanlaxmi Complex, Vadodara, Gujarat, India</a>
                                </div>
                                <div class="tp-footer-widget-content-list-item">
                                    <a href="#"><i class="fa-solid fa-location-dot"></i>Kitchener, Ontario, Canada</a>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="tp-footer-widget tp-footer-col-2 mb-40">
                          <h4 class="tp-footer-widget-title mb-30">Company</h4>
                          <div class="tp-footer-widget-link">
                             <ul>
                                <li><a href="{{ route('/') }}"><i class="fa-sharp fa-solid fa-plus"></i> Home</a></li>
                                <li><a href="{{ route('about') }}"><i class="fa-sharp fa-solid fa-plus"></i>About</a></li>
                                <li><a href="{{ route('post') }}"><i class="fa-sharp fa-solid fa-plus"></i>Blog</a></li>
                                <li><a href="{{ route('career') }}"><i class="fa-sharp fa-solid fa-plus"></i>Career</a></li>
                                <li><a href="{{ route('contact') }}"><i class="fa-sharp fa-solid fa-plus"></i> Contact</a></li>
                                <li><a href="{{ route('termsncondition') }}"><i class="fa-sharp fa-solid fa-plus"></i> Terms and Condition</a></li>
                                <li><a href="{{ route('privacy') }}"><i class="fa-sharp fa-solid fa-plus"></i> Privacy Policy</a></li>
                                <li><a href="{{ route('refund') }}"><i class="fa-sharp fa-solid fa-plus"></i> Refund Policy</a></li>

                            </ul>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                       <div class="tp-footer-widget tp-footer-col-3 mb-40">
                          <h4 class="tp-footer-widget-title mb-40">Our Navigation</h4>
                          <div class="tp-footer-widget-gallery">
                             <div class="tp-footer-widget-gallery-all">
                                @php
                                use App\Models\Post;
                                $blog_postss = Post::orderBy('created_at', 'desc')->take(2)->get();
                            @endphp
                                @foreach ($blog_postss as $post)
                                <div class="tp-footer-widget-gallery-single-item">
                                   <a href="{{ route('post.show', ['slug' => $post->slug]) }}" class="tp-footer-widget-gallery-item">

                                         <img src="{{asset($post->hero) }}" alt="">
                                         <!-- <div class="tp-footer-widget-gallery-social">
                                            <i class="fa-brands fa-linkedin-in"></i>
                                         </div> -->

                                   </a>
                                </div>
                                @endforeach
                                {{-- <div class="tp-footer-widget-gallery-single-item">
                                   <a href="#" class="tp-footer-widget-gallery-item">

                                         <img src="{{ asset('assets/img/footer/one/gallery/fw-g-2.jpg') }}" alt="">

                                   </a>
                                </div> --}}

                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12">
                       <div class="tp-footer-widget tp-footer-col-4 mb-40">
                          <h4 class="tp-footer-widget-title mb-20">Social Media Links</h4>
                          <div class="tp-footer-widget-newsletter-wrap">
                             {{-- <form action="#">
                                <div class="tp-footer-widget-newsletter-wrapper">
                                   <div class="tp-footer-widget-newsletter-input">
                                      <input type="email" placeholder="Get News & Updates">
                                   </div>
                                   <div class="tp-footer-widget-newsletter-submit">
                                      <button>
                                         <i class="fa-regular fa-arrow-right"></i>
                                      </button>
                                   </div>
                                </div>
                             </form> --}}
                             <div class="tp-footer-widget-newsletter-content">
                                <p>Our expertise, as well as our passion for web design, sets us agenciese</p>
                                <div class="tp-footer-widget-newsletter-social">

                                   <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                   <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>

                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <div class="tp-footer-bottom">
              <div class="container">
                 <div class="row">
                    <div class="col-lg-6 col-md-7">
                       <div class="tp-footer-copyright">
                          <span>Copyright © 2024 .All Rights Reserved <a target="_blank" href="">Devloops</a> </span>
                       </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                       <div class="tp-footer-terms">
                          <a href="{{ route('termsncondition') }}">Terms of Use</a>
                          <a href="{{ route('privacy') }}">Privacy Policy</a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </footer>
     <!-- footer-area-end -->


     <!-- JS here -->
     <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('assets/js/vendor/jquery.js')}}"></script>
     <script src="{{ asset('assets/js/vendor/waypoints.js') }}"></script>
     <script src="{{ asset('assets/js/bootstrap-bundle.js') }}"></script>
     <script src="{{ asset('assets/js/meanmenu.js') }}"></script>
     <script src="{{ asset('assets/js/swiper-bundle.js') }}"></script>
     <script src="{{ asset('assets/js/slick.js') }}"></script>
     <script src="{{ asset('assets/js/range-slider.js') }}"></script>
     <script src="{{ asset('assets/js/magnific-popup.js') }}"></script>
     <script src="{{ asset('assets/js/nice-select.js') }}"></script>
     <script src="{{ asset('assets/js/purecounter.js') }}"></script>
     <script src="{{ asset('assets/js/countdown.js') }}"></script>
     <script src="{{ asset('assets/js/wow.js') }}"></script>
     <script src="{{ asset('assets/js/isotope-pkgd.js') }}"></script>
     <script src="{{ asset('assets/js/imagesloaded-pkgd.js') }}"></script>
     <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
     <script src="{{ asset('assets/js/main.js') }}"></script>
     {{-- new --}}

     <script>
        (function(d,t) {
          var BASE_URL="https://boondock-support-chatwoot.y4nyjj.easypanel.host/";
          var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
          g.src=BASE_URL+"/packs/js/sdk.js";
          g.defer = true;
          g.async = true;
          s.parentNode.insertBefore(g,s);
          g.onload=function(){
            window.chatwootSDK.run({
              websiteToken: 'vVtvW1tf2tM7AR3aQuuEXCe2',
              baseUrl: BASE_URL
            })
          }
        })(document,"script");
      </script>


     <!-- our clients codepen js -->
     <script>
        var mySwiper = new Swiper('.client .swiper-container', {
 loop: false,
 speed: 1000,
 autoplay: {
   delay: 2500,
   disableOnInteraction: false,
 },

 // If we need pagination
 pagination: {
   el: '.swiper-pagination',
   clickable: true,
 },

 // Navigation arrows
 navigation: {
   nextEl: '.swiper-button-next',
   prevEl: '.swiper-button-prev',
 },
 breakpoints: {
   0: {
     slidesPerView: 1,
     spaceBetween: 10,
   },
   414: {
     slidesPerView: 2,
     spaceBetween: 10,
   },
   768: {
     slidesPerView: 3,
     spaceBetween: 50,
   },
   991: {
     slidesPerView: 4,
     spaceBetween: 50,
   },
 }
})
      </script>

     <!-- modal team -->
     <!-- <script>
        $(document).ready(function() {
          $('.team-member').click(function() {
            var name = $(this).data('name');
            var role = $(this).data('role');
            var modalBody = $('.modal-body');
            modalBody.empty();
            modalBody.append('<h5>Name: ' + name + '</h5>');
            modalBody.append('<p>Role: ' + role + '</p>');
          });
        });
      </script> -->

  </body>

<!-- Mirrored from template.wphix.com/tecz-prv/tecz/index-3-one-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Feb 2024 07:56:50 GMT -->
</html>
