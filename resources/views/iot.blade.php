@extends('layout.app')
@section('content')

<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- Hero -->
   <!-- Swiper Slider -->
   <div class="position-relative overflow-hidden" style="background-image: url(assets/svg/components/card-11.svg); background-size: cover; background-position: center center;">
    <div class="overlay"></div>
    <div class="container position-relative zi-2 content-space-t-3 content-space-t-lg-4 content-space-b-2 content-space-b-md-3 text-center text-lg-left">
      <div class="row align-items-lg-center mt-n4">
          <div class="col-lg-5 mb-4 mb-lg-0 text-light position-relative">
              <!-- Content on the left column -->
              <h2 class="text-primary">IOT Solutions</h2>
              <h1 class="display-7 text-dark mb-0 d-md-block d-none">Devloops International pioneers the future of connectivity</h1>
              <!-- smaller screen -->
              <h2 class="display-7 text-dark mb-0 d-block d-md-none content-space-b-1">Devloops International pioneers the future of connectivity</h2>
  
              <!-- Horizontal border below text -->
              <!-- <div class="border-bottom border-dark mb-2"></div> -->
          </div>
          <div class="col-lg-7">
            <!-- Content on the right column -->
            <div class="position-relative">
                <figure class="device-browser">
                    <div class="device-browser-frame p-3  ">
                        <img class="device-browser-img img-float img-fluid mx-auto " style="width: 80%; height: 40% ;" src="./assets/img/iotnewherochng.png" alt="Image Description">
                    </div>
                </figure>
            </div>
        </div>
        
            <!-- Horizontal border below image -->
            <div class="border-bottom border-dark mt-9 " style="height: 2px; width: 100%; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);"></div>

      </div>
  </div>
  

    <div class="shape shape-bottom zi-1">
        <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 500H3000V0L0 500Z" fill="#fff"></path>
        </svg>
    </div>
</div>
<!-- Swiper Slider -->
    <!-- End Hero -->

    <!-- working process -->

    <section class="pt-5 pb-5 mt-n4">
      <div class="w-md-55 w-lg-40 text-center mx-auto mb-5 mb-md-9">
        <span class="lead">Features built for scale</span>
        <h2 style="color: rgba(0, 31, 63, 0.7) !important;">The quickest and easiest theme for every team</h2>
      </div>
      <div class="container">
        <div class="row">
                        <div class="col-lg-4 col-md-6 margin-30px-bottom xs-margin-20px-bottom">
                            <div class="services-block-three">
                                <a href="javascript:void(0)">
                                    <div class="padding-15px-bottom">
                                        <i class="fa fa-eercast"></i>
                                    </div>
                                    <h3 class="text-primary">Security Measures</h3>
                                    <p class=" xs-line-height-22 text-dark">Advanced security protocols to protect data .</p>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 margin-30px-bottom xs-margin-20px-bottom">
                            <div class="services-block-three">
                                <a href="javascript:void(0)">
                                    <div class="padding-15px-bottom">
                                        <i class="fa fa-snowflake-o"></i>
                                    </div>
                                    <h3 class="text-primary">Predictive Maintenance</h3>
                                    <p class=" xs-line-height-22  text-dark">Proactive upkeep for equipment and systems</p>
                                </a>
                            </div>
                        </div>
                        <div class="services-block-three col-lg-4 col-md-6 margin-30px-bottom xs-margin-20px-bottom">
                            <div class="services-block-three">
                                <a href="javascript:void(0)">
                                    <div class="padding-15px-bottom">
                                        <i class="fa fa-braille"></i>
                                    </div>
                                    <h3 class="text-primary">Integration Capabilities</h3>
                                    <p class=" xs-line-height-22 text-dark">Seamlessly connect with existing systems.</p>
                                </a>
                            </div>
                        </div>
                        <div class="services-block-three col-lg-4 col-md-6 sm-margin-30px-bottom xs-margin-20px-bottom">
                            <div class="services-block-three">
                                <a href="javascript:void(0)">
                                    <div class="padding-15px-bottom">
                                        <i class="fa fa-diamond"></i>
                                    </div>
                                    <h3 class="text-primary">Data Visualization</h3>
                                    <p class=" xs-line-height-22 text-dark">Clear data representation for understanding.</p>
                                </a>
                            </div>
                        </div>
                        <div class="services-block-three col-lg-4 col-md-6 xs-margin-20px-bottom">
                            <div class="services-block-three">
                                <a href="javascript:void(0)">
                                    <div class="padding-15px-bottom">
                                        <i class="fa fa-object-ungroup"></i>
                                    </div>
                                    <h3 class="text-primary">Data Analytics</h3>
                                    <p class=" xs-line-height-22 text-dark"> Real-time data insights for informed decision-making .</p>
                                </a>
                            </div>
                        </div>
                        <div class="services-block-three col-lg-4 col-md-6">
                            <div class="services-block-three">
                                <a href="javascript:void(0)">
                                    <div class="padding-15px-bottom">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </div>
                                    <h3 class="text-primary">Remote Monitoring</h3>
                                    <p class=" xs-line-height-22 text-dark">Allowing users to access and manage them from anywhere.</p>
                                </a>
                            </div>
                        </div>
                        <!-- end -->
                    </div>
      </div>
    </section>
   

    <!-- working process end -->

    <!-- Icon Blocks -->
   
    <!-- End Icon Blocks -->
    <section class="about-section">
      <div class="container">
          <div class="row">                
              <div class="content-column col-lg-7 col-md-12 col-sm-12 order-1 mt-10 ">
                  <div class="inner-column">
                      <div class="sec-title">
                          <!-- <span class="">About us</span> -->
                          <h2 class=" w-lg-40 py-3" style="color: rgba(0, 31, 63, 0.7) !important;">Internet Of Things</h2>
                      </div>
         
                    <div class=" xs-line-height-22 text-dark">
                      Utilize Devloops's IoT development services in <span class="text-primary">sensor programming, gateway integration, connection</span>, IoT applications, IoT platform development, and analytics to drive hyperconnectivity in your organization. Use cutting-edge IoT technologies to increase efficiency, engage customers, and improve the strategy by gaining business information more quickly.
                          </div><br>
                          <a href="./contact.html" id="#job">
                            <button class=" btn   btn-outline-primary  btn-transition">Contact Us</button>
                          </a>
                  </div>
              </div>

              <!-- Image Column -->
              <div class="image-column col-lg-5 col-md-12 col-sm-12">
                <div class="inner-column ">
                  <!-- <div class="author-desc">
                    <h2>Product Development</h2> 
                   
                  </div> -->
                    <figure class="image-1 d-md-block d-none">
                      <a href="#" class="lightbox-image" data-fancybox="images">
                      <img src="./assets/img/iotnewchangegif.gif" alt="" class="img-fluid"></a>
                    </figure>

                    <!-- smaller screen -->
                    <figure class="image-1  d-block d-md-none">
                      <a href="#" class="lightbox-image" data-fancybox="images">
                      <img src="./assets/img/iotnewchange.png" alt="" class="img-fluid img-thumbnail d-sm-none"></a>
                    </figure>
                 
                </div>
            </div>
              
            
          </div>
            
                      
      </div>
  </section>

     <!-- Features -->
     <div class="container content-space-2">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <!-- <span class="text-cap">Platforms</span> -->
        <h2 class="h1">What We Offer</h2>
      </div>
      <!-- End Heading -->

      <div class="row">
        <div class="col-md-6 col-lg-4 mb-4 mb-md-5 mb-lg-0">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 text-center" >
            <div class="card-body">
              <div class="mb-4">
                <img class="avatar" src="./assets/img/analyticsioticon.png" alt="Logo">
              </div>
              <h3 class="card-title">Iot analytics</h3>
              <p class="card-text text-dark">It involves collecting, processing, and analyzing data from sensors, devices, and other IoT components to derive valuable information.</p>
            </div>
            <!-- <div class="card-footer pt-0">
              <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
            </div> -->
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-6 col-lg-4 mb-4 mb-md-5 mb-lg-0">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 text-center" >
            <div class="card-body">
              <div class="mb-4">
                <img class="avatar" src="./assets/img/connectivityioticon.png" alt="Logo">
              </div>
              <h3 class="card-title">Iot Connectivity</h3>
              <p class="card-text text-dark">As IoT involve a diverse range of devices with varying communication protocols, standards, and requirements, effective connectivity solutions.</p>
            </div>
            <!-- <div class="card-footer pt-0">
              <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
            </div> -->
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-md-6 col-lg-4">
          <!-- Card -->
          <a class="card card-lg card-transition h-100 text-center" href="#">
            <div class="card-body">
              <div class="mb-4">
                <img class="avatar" src="./assets/img/securityioticon.png" alt="Logo">
              </div>
              <h3 class="card-title">Iot Security</h3>
              <p class="card-text text-dark">
                As IoT devices collect and transmit sensitive data, ensuring the confidentiality, integrity, and availability of this information is paramount.</p>
            </div>
            <!-- <div class="card-footer pt-0">
              <span class="card-link">Learn more <i class="bi-chevron-right small ms-1"></i></span>
            </div> -->
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Features -->
    <!-- Subscribe -->
    <div class="container content-space-2 ">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-7">
        <p class="text-secondary  lead ">Explore Startups</p>
        <h3 style="color: rgba(0, 31, 63, 0.7) !important;">Find a job you love. Set your career interests.</h3>
      </div>
      <!-- End Heading -->
    
      <div class="row row-cols-1 row-cols-sm-2 1 row-cols-md-3 row-cols-lg-4 mb-5">
        <div class="col mb-3 mb-sm-4">
          <!-- Card -->
          <a class="card card-sm card-bordered card-transition h-100" href="career.html">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="text-dark lead">IT<br> Coordinator</h5>
                  <!-- <p class="card-text text-body small">4 job positions</p> -->
                </div>
                <!-- End Col -->
    
                <div class="col-auto">
                  <span class="text-muted">
                    <i class="bi-chevron-right small"></i>
                  </span>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
    
        <div class="col mb-3 mb-sm-4">
          <!-- Card -->
          <a class="card card-sm card-bordered card-transition h-100" href="career.html">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="text-dark lead">Software Development</h5>
                  
                </div>
                <!-- End Col -->
    
                <div class="col-auto">
                  <span class="text-muted">
                    <i class="bi-chevron-right small"></i>
                  </span>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
    
        <div class="col mb-3 mb-sm-4">
          <!-- Card -->
          <a class="card card-sm card-bordered card-transition h-100" href="career.html">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="text-dark lead">UI/UX <br> Designer</h5>
                  
                </div>
                <!-- End Col -->
    
                <div class="col-auto">
                  <span class="text-muted">
                    <i class="bi-chevron-right small"></i>
                  </span>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        <!-- End Col -->
    
        <div class="col mb-3 mb-sm-4">
          <!-- Card -->
          <a class="card card-sm card-bordered card-transition h-100" href="career.html">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class=" text-dark lead">Product <br>Designer</h5>
              
                </div>
                <!-- End Col -->
    
                <div class="col-auto">
                  <span class="text-muted">
                    <i class="bi-chevron-right small"></i>
                  </span>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </a>
          <!-- End Card -->
        </div>
        
      </div>
      <!-- End Row -->
    
     
    </div>
    <!-- End Subscribe -->
  </main>
@endsection