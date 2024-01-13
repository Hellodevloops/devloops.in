@extends('layout.app')
@section('content')

 <!-- ========== MAIN CONTENT ========== -->
 <main id="content" role="main">
    <!-- Hero -->
    <div class="position-relative overflow-hidden" style="background-image: url(assets/svg/components/card-11.svg); background-size: cover; background-position: center center;">
      <div class="overlay"></div>
      <div class="container position-relative zi-2 content-space-t-3 content-space-t-lg-4 content-space-b-2 content-space-b-md-3 text-center text-lg-left">
        <div class="row align-items-lg-center">
            <div class="col-lg-6 mb-4 mb-lg-0 text-light position-relative mt-n4">
                <!-- Content on the left column -->
                <h2 class="text-primary">Product For Customers</h2>
                <h1 class="display-7 text-dark mb-0 d-md-block d-none">Unlock Your Business with Tailor-Made Products</h1>
                <!-- smaller screen -->
                <h2 class="display-7 text-dark mb-0 d-block d-md-none content-space-b-1">Unlock Your Business with Tailor-Made Products</h2>
    
                <!-- Horizontal border below text -->
                <!-- <div class="border-bottom border-dark mb-2"></div> -->
            </div>
    
            <div class="col-lg-6">
                <!-- Content on the right column -->
                <div class="position-relative">
                    <figure class="device-browser"> 
                        <div class="device-browser-frame  p-3">
                            <img class="device-browser-img img-float img-fluid object-fit-cover mx-auto " style="width: 90%; height: 70% ;" src="./assets/img/productheronewchng.png" alt="Image Description">
                        </div>
                    </figure>
                </div>
    
              
            </div>
              <!-- Horizontal border below image -->
              <div class="border-bottom border-dark mt-3 " style="height: 2px; width: 100%; box-shadow: 0 2px 4px rgba(0, 0, 0, 0.9);"></div>

        </div>
    </div>
    
  
      <div class="shape shape-bottom zi-1">
          <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M0 500H3000V0L0 500Z" fill="#fff"></path>
          </svg>
      </div>
  </div>
  
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
                <a href="#" class="open-modal" data-target="#myModal1">
                    <div class="padding-15px-bottom">
                        <i class="fa fa-eercast"></i>
                    </div>
                    <h3 class="text-primary">Integrated ERP Solutions</h3>
                    <p class=" xs-line-height-22  text-dark">providing a centralized platform for seamless collaboration.</p>
                </a>
            </div>
        </div>
        <!-- Modal 1 -->
        <!-- <div class="modal" id="myModal1">
          <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
        
            
                  <div class="modal-header">
                      <h4 class="modal-title">Modal 1 Title</h4>
                
                  </div>
        
                  <div class="modal-body">
                      <p>Modal 1 content goes here.</p>
                  </div>
        
                  
        
              </div>
          </div>
        </div> -->
<div class="col-lg-4 col-md-6 margin-30px-bottom xs-margin-20px-bottom">
  <div class="services-block-three">
      <a href="#" class="open-modal" data-target="#myModal2">
          <div class="padding-15px-bottom">
              <i class="fa fa-snowflake-o"></i>
          </div>
          <h3 class="text-primary">Cross-Platform Compatibility</h3>
          <p class=" xs-line-height-22  text-dark">Storing and retrieving data login through social platforms.</p>
      </a>
  </div>
</div>

<div class="col-lg-4 col-md-6 margin-30px-bottom xs-margin-20px-bottom">
  <div class="services-block-three">
      <a href="#" class="open-modal" data-target="#myModal3">
          <div class="padding-15px-bottom">
              <i class="fa fa-code"></i>
          </div>
          <h3 class="text-primary">Custom Development</h3>
          <p class=" xs-line-height-22  text-dark">Tailored solutions to meet your specific business needs.</p>
      </a>
  </div>
</div>

                        <div class="services-block-three col-lg-4 col-md-6 sm-margin-30px-bottom xs-margin-20px-bottom">
                            <div class="services-block-three">
                              <a href="#" class="open-modal" data-target="#myModal4">
                                    <div class="padding-15px-bottom">
                                        <i class="fa fa-diamond"></i>
                                    </div>
                                    <h3 class="text-primary">SEO Tools</h3>
                                    <p class=" xs-line-height-22 text-dark">Meta tags, sitemaps, and on-page optimization.</p>
                                </a>
                            </div>
                        </div>
                       
                        <div class="services-block-three col-lg-4 col-md-6 xs-margin-20px-bottom">
                            <div class="services-block-three">
                              <a href="#" class="open-modal" data-target="#myModal5">
                                    <div class="padding-15px-bottom">
                                        <i class="fa fa-object-ungroup"></i>
                                    </div>
                                    <h3 class="text-primary">Scalability and Performance</h3>
                                    <p class=" xs-line-height-22 text-dark"> Optimize performance to ensure the product runs efficiently.</p>
                                </a>
                            </div>
                        </div>
                       
                        <div class="services-block-three col-lg-4 col-md-6">
                            <div class="services-block-three">
                              <a href="#" class="open-modal" data-target="#myModal6">
                                    <div class="padding-15px-bottom">
                                        <i class="fa fa-paper-plane-o"></i>
                                    </div>
                                    <h3 class="text-primary">Security Measures</h3>
                                    <p class=" xs-line-height-22 text-dark"> Incorporate features such as encryption &amp; authentication.</p>
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
    <section class="about-section mb-5 ">
      <div class="container">
          <div class="row">                
              <div class="content-column col-lg-7 col-md-12 col-sm-12 order-1 mt-10  ">
                  <div class="inner-column">
                      <div class="sec-title">
                          <!-- <span class=" text-secondary">About us</span> -->
                          <h2 class=" w-lg-30 lead  py-3" style="color: rgba(0, 31, 63, 0.7) !important;">
                      Product Development </h2>
                      </div>
                      <!-- <div class="xs-font-size13 xs-line-height-22 text-dark">Our development philosophy centers around user-centricity, where we immerse ourselves in understanding the unique challenges and aspirations of our users.</div><br> -->
                    <div class="  xs-line-height-22 text-dark">
                      We recognize the critical importance of safeguarding user data and maintaining the trust placed in our products. Our development practices prioritize <span class="text-primary"> robust security measures</span>, incorporating the latest encryption techniques, stringent authentication protocols, and thorough security audits. 
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
                        <img src="./assets/img/homelooping.gif" alt="" class="img-fluid"></a>
                      </figure>

                      <!-- smaller screen -->
                      <figure class="image-1  d-block d-md-none">
                        <a href="#" class="lightbox-image" data-fancybox="images">
                        <img src="./assets/img/homelooping.gif" alt="" class="img-fluid img-thumbnail d-sm-none"></a>
                      </figure>
                   
                  </div>
              </div>
            
          </div>
             <!-- <div class="sec-title mt-3">
                          <span class="">Our Future Goal</span>
                          <h2 class="bg-navy ">Devloops Product Development Services We Offer</h2>
                      </div>
                      <ul class="list-unstyled">
                       <li class="text text-dark "><h3> 
                        Seamless Integration of UI/UX Styles for Full-Stack Internet Solutions</h3>
                        </li>
                        <li class="lead text-dark">
                          We meticulously integrate UI/UX styles that enhance the functionality and user-friendliness of our products. 
                        </li><br>
                        <li class="text text-dark"><h3> 
                          We consider all facts of product Development:</h3>
                        </li>
                        <li class="lead text-dark ">
                          <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-counterclockwise" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 1-4.546 2.914.5.5 0 0 0-.908-.417A6 6 0 1 0 8 2z"/>
                            <path d="M8 4.466V.534a.25.25 0 0 0-.41-.192L5.23 2.308a.25.25 0 0 0 0 .384l2.36 1.966A.25.25 0 0 0 8 4.466"/>
                          </svg></span>
                          Iterative Process
                        </li><br>
                        <li class="lead text-dark">
                          <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-menu-app-fill" viewBox="0 0 16 16">
                            <path d="M0 1.5A1.5 1.5 0 0 1 1.5 0h2A1.5 1.5 0 0 1 5 1.5v2A1.5 1.5 0 0 1 3.5 5h-2A1.5 1.5 0 0 1 0 3.5zM0 8a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm1 3v2a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2zm14-1V8a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v2zM2 8.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5m0 4a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5"/>
                          </svg></span>
                          User-Centric Focus
                        </li><br>
                        <li class="lead text-dark">
                          <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cast" viewBox="0 0 16 16">
                            <path d="m7.646 9.354-3.792 3.792a.5.5 0 0 0 .353.854h7.586a.5.5 0 0 0 .354-.854L8.354 9.354a.5.5 0 0 0-.708 0z"/>
                            <path d="M11.414 11H14.5a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.5-.5h-13a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .5.5h3.086l-1 1H1.5A1.5 1.5 0 0 1 0 10.5v-7A1.5 1.5 0 0 1 1.5 2h13A1.5 1.5 0 0 1 16 3.5v7a1.5 1.5 0 0 1-1.5 1.5h-2.086z"/>
                          </svg></span>
                          Prototyping and Testing
                        </li>
                      </ul>
                       -->
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
                <img class="avatar" src="./assets/img/erpflaticon.png" alt="Logo">
              </div>
              <h3 class="card-title">ERP</h3>
              <p class="card-text text-dark">Enterprise Resource Planning (ERP) streamlines business processes by integrating and managing core functions such as finance and human resources.</p>
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
                <img class="avatar" src="./assets/img/crmflaticon.png" alt="Logo">
              </div>
              <h3 class="card-title">CRM</h3>
              <p class="card-text text-dark">Customer Relationship Management (CRM) focuses on enhancing customer interactions, providing tools to manage leads & automate sales processes.</p>
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
                <img class="avatar" src="./assets/img/cmsflaticon.png" alt="Logo">
              </div>
              <h3 class="card-title">CMS</h3>
              <p class="card-text text-dark">Content Management System is a software application or platform that facilitates the creation, modification, and management of digital content for websites.</p>
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