@extends('layout.app')
@section('content')

  <!-- ========== MAIN CONTENT ========== -->
  <!-- hero -->
  <div id="home">

    <!-- Hero -->
    <div class="position-relative bg-primary overflow-hidden">
      <div class="container position-relative zi-2 content-space-3 content-space-md-5">
        <div class="w-md-75 w-xl-65 text-center mx-md-auto">
          <!-- Heading -->
          <div class="mb-7">
            <h1 class="display-4 text-white mb-4"> Revolutionize Your <br>Health Journey with</h1>
            <p class="lead text-white mb-4">Our Healthcare Software.</p>
          </div>
          <!-- End Title & Description -->

          <div class="d-grid d-sm-flex justify-content-center gap-2">
            <a href="#job" id="#job">
              <button class=" btn   btn-outline-primary  btn-transition">See job openings</button>
            </a>

          </div>
        </div>
      </div>

      <!-- Background Shape -->
      <figure class="position-absolute top-0 start-0 w-65">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1246 1078">
          <g opacity=".4">
            <linearGradient id="doubleEllipseTopLeftID1" gradientUnits="userSpaceOnUse" x1="2073.5078" y1="1.7251"
              x2="2273.4375" y2="1135.5818" gradientTransform="matrix(-1 0 0 1 2600 0)">
              <stop offset="0.4976" style="stop-color:#559bff" />
              <stop offset="1" style="stop-color:#377dff" />
            </linearGradient>
            <polygon fill="url(#doubleEllipseTopLeftID1)" points="519.8,0.6 0,0.6 0,1078 863.4,1078   " />
            <linearGradient id="doubleEllipseTopLeftID2" gradientUnits="userSpaceOnUse" x1="1717.1648" y1="3.779560e-05"
              x2="1717.1648" y2="644.0417" gradientTransform="matrix(-1 0 0 1 2600 0)">
              <stop offset="1.577052e-06" style="stop-color:#559bff" />
              <stop offset="1" style="stop-color:#377dff" />
            </linearGradient>
            <polygon fill="url(#doubleEllipseTopLeftID2)" points="519.7,0 1039.4,0.6 1246,639.1 725.2,644   " />
          </g>
        </svg>
      </figure>
      <!-- End Background Shape -->

      <!-- Shape -->
      <div class="shape shape-bottom zi-1" style="margin-bottom: -.125rem">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
          <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
        </svg>
      </div>
      <!-- End Shape -->
    </div>
    <!-- End Hero -->

    <!-- Clients Section -->

    <!-- End Clients -->

    <!-- section -->
    <!-- Browser Device -->
    <figure class="device-browser mt-n8">
      <div class="device-browser-header">
        <div class="device-browser-header-btn-list">
          <span class="device-browser-header-btn-list-btn"></span>
          <span class="device-browser-header-btn-list-btn"></span>
          <span class="device-browser-header-btn-list-btn"></span>
        </div>
        <div class="device-browser-header-browser-bar">www.htmlstream.com/space/</div>
      </div>

      <div class="device-browser-frame">
        <img class="device-browser-img mt-n12 " src="./assets/img/dashboard1.png" alt="Image Description">
      </div>
    </figure>
    <!-- End Browser Device -->
    <!-- End Hero -->



  </div>


  <!-- company -->
  <div class="container content-space-b-2 content-space-b-lg-3">
    <!-- Heading -->
    <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
      <!-- <h2>As seen on...</h2> -->
    </div>
    <!-- End Heading -->

    <div class="w-lg-75 mx-lg-auto">
      <div class="row">
        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/brands/capsule-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/brands/fitbit-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/brands/forbes-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/brands/mailchimp-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->

        <div class="col text-center py-3">
          <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/brands/layar-dark.svg" alt="Logo">
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
  </div>





  <div id="service">
    <!-- Card Grid -->
    <div class="bg-pinko rounded-2 mx-3 mx-xl-10 mt-5"
      style="background-image: url(./assets/svg/components/wave-pattern-light.svg);">
      <div class="container-xl container-fluid content-space-1 content-space-md-2 px-4 px-md-8 px-lg-10">
        <!-- Heading -->
        <div class="text-center mx-md-auto mb-5 mb-md-9">
          <p class="text-white lead">Freedom to build what you need</p>
          <h2 class="h1 " style="color: rgba(0, 31, 63, 0.7) !important;">Storefront Flexibility</h2>
        </div>
        <!-- End Heading -->

        <!-- Responsive Columns -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
          <!-- Column 1 -->
          <div class="col mb-4">
            <!-- Card 1 -->
            <div class="card text-center">
              <div class="card-body">
                <div class="mb-4">
                  <img class="img-fluid img-float" src="./assets/img/story1new.png" alt="Image Description"
                    style="height: 12rem;">
                </div>
                <h3 class="card-title"> Customizable Modules</h3>
                <p class="card-text">Our healthcare product software provides a modular approach, allowing users to
                  choose and configure specific modules based on their operational needs.</p>
              </div>
            </div>
            <!-- End Card 1 -->
          </div>
          <!-- End Column 1 -->

          <!-- Column 2 -->
          <div class="col mb-4">
            <!-- Card 2 -->
            <div class="card text-center">
              <div class="card-body">
                <div class="mb-4">
                  <img class="img-fluid img-float" src="./assets/img/story2new.png" alt="Image Description"
                    style="height: 12rem;">
                </div>
                <h3 class="card-title">Administration <br>Hub</h3>
                <p class="card-text"> Elevate your operational efficiency with our sophisticated Administration Hub.
                  Seamlessly manage your product catalog, engage with customers, and streamline order processing.</p>
              </div>
            </div>
            <!-- End Card 2 -->
          </div>
          <!-- End Column 2 -->

          <!-- Column 3 -->
          <div class="col mb-4 d-md-flex justify-content-md-center">
            <!-- Card 3 -->
            <div class="card text-center">
              <div class="card-body">
                <div class="mb-4">
                  <img class="img-fluid img-float" src="./assets/img/story3new.png" alt="Image Description"
                    style="height: 12rem;">
                </div>
                <h3 class="card-title">Integration Capabilities</h3>
                <p class="card-text">Integration capabilities refer to an organization's capacity to seamlessly
                  incorporate various systems, applications, and data sources into a unified and cohesive
                  infrastructure.</p>
              </div>
            </div>
            <!-- End Card 3 -->
          </div>
          <!-- End Column 3 -->
        </div>
        <!-- End Responsive Columns -->

        <!-- Add your additional content here -->
      </div>
    </div>




    <!-- End Card Grid -->

  </div>



  <!-- pricing plans start -->

  <div class="overflow-hidden">
    <!-- Hero -->
    <div class="position-relative bg-img-start">
      <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2 content-space-b-lg-3">
        <!-- Heading -->
        <div class="w-md-75 w-lg-50 text-center mx-auto mb-9">
          <p class="text-secondary lead">Pricing Plan</p>
          <h1 style="color: rgba(0, 31, 63, 0.7) !important;">Our Simple & Affordable Plan</h1>
        </div>
        <!-- End Heading -->

        <!-- Form Switch -->
        <!-- <div class="d-flex justify-content-center">
        <div class="form-check form-switch form-switch-between">
          <label class="form-check-label">Monthly</label>
          <input class="js-toggle-switch form-check-input" type="checkbox" checked="" data-hs-toggle-switch-options="{
                   &quot;targetSelector&quot;: &quot;#pricingCount1, #pricingCount2, #pricingCount3&quot;
                 }">
          <label class="form-check-label form-switch-promotion">
            Annually
            <span class="form-switch-promotion-container">
              <span class="form-switch-promotion-body">
                <svg class="form-switch-promotion-arrow" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 99.3 57" width="48">
                  <path fill="none" stroke="#bdc5d1" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M2,39.5l7.7,14.8c0.4,0.7,1.3,0.9,2,0.4L27.9,42"></path>
                  <path fill="none" stroke="#bdc5d1" stroke-width="4" stroke-linecap="round" stroke-miterlimit="10" d="M11,54.3c0,0,10.3-65.2,86.3-50"></path>
                </svg>
                <span class="form-switch-promotion-text">
                  <span class="badge bg-primary rounded-pill ms-1">Save up to 10%</span>
                </span>
              </span>
            </span>
          </label>
        </div>
      </div> -->
        <!-- End Form Switch -->
      </div>
    </div>
    <!-- End Hero -->

    <!-- Pricing -->
    <div class="container mt-n5 mt-lg-n10">
      <div class="position-relative zi-1 mb-10">
        <div class="row">
          <div class="col-md mb-3 mb-md-0">
            <!-- Card -->
            <div class="card h-100 zi-1">
              <div class="card-header text-center text-dark">
                <div class="mb-2">
                  <span class="fs-5 align-top text-dark fw-semibold">$</span>
                  <span id="pricingCount1" class="fs-1 text-dark fw-semibold" data-hs-toggle-switch-item-options="{
                         &quot;min&quot;: 29,
                         &quot;max&quot;: 19
                       }">79</span>
                  <span>/Month</span>
                </div>

                <h3 class="card-title ">Basic Plan</h3>
                <!-- <p class="card-text">All the basics for starting a new business</p> -->
              </div>

              <div class="card-body d-flex justify-content-center py-0  mt-3">
                <!-- List Checked -->
                <ul class="list-checked list-checked-soft-text-dark">
                  <li class="list-checked-item text-dark">Appointment Scheduling and Management</li>
                  <li class="list-checked-item text-dark">Telehealth and Remote Patient Monitoring</li>
                  <li class="list-checked-item text-dark">Billing and Revenue Cycle Management</li>
                  <li class="list-checked-item text-dark">Integration with Wearable Devices and IoT</li>
                  <li class="list-checked-item text-dark">Electronic Health Records (EHR)</li>
                  <li class="list-checked-item text-dark">Mobile Applications for Patients and Providers</li>
                </ul>
                <!-- End List Checked -->
              </div>

              <div class="card-footer text-center">
                <div class="d-grid mb-2">
                  <button type="button" class="btn btn-light">Try free for 30 days</button>
                </div>
                <p class="card-text text-muted small">No card required</p>
              </div>
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col-md mb-3 mb-md-0">
            <!-- Card -->
            <div class="card h-100 zi-1">
              <div class="card-header text-center">
                <div class="text-dark mb-2">
                  <span class="fs-5 align-top text-dark fw-semibold">$</span>
                  <span id="pricingCount2" class="fs-1  text-dark" data-hs-toggle-switch-item-options="{
                         &quot;min&quot;: 49,
                         &quot;max&quot;: 39
                       }">89</span>
                  <span>/Month</span>
                </div>

                <h3 class="card-title text-dark">Standard Plan</h3>
                <!-- <p class="card-text text-white-70">Everything you need for a growing business</p> -->
              </div>

              <div class="card-body d-flex justify-content-center py-0">
                <!-- List Checked -->
                <ul class="list-checked list-checked-soft-text-dark mt-3 ">
                  <li class="list-checked-item text-dark">Appointment Scheduling and Management</li>
                  <li class="list-checked-item text-dark">Telehealth and Remote Patient Monitoring</li>
                  <li class="list-checked-item text-dark">Billing and Revenue Cycle Management</li>
                  <li class="list-checked-item text-dark">Integration with Wearable Devices and IoT</li>
                  <li class="list-checked-item text-dark">Electronic Health Records (EHR)</li>
                  <li class="list-checked-item text-dark">Mobile Applications for Patients and Providers</li>
                </ul>
                <!-- End List Checked -->
              </div>

              <div class="card-footer text-center">
                <div class="d-grid mb-2">
                  <button type="button" class="btn btn-light">Try free for 30 days</button>
                </div>
                <p class="card-text text-dark small">No card required</p>
              </div>
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col-md mb-3 mb-md-0">
            <!-- Card -->
            <div class="card h-100 zi-1">
              <div class="card-header text-center text-dark">
                <div class="mb-2">
                  <span class="fs-5 align-top text-dark fw-semibold">$</span>
                  <span id="pricingCount3" class="fs-1 text-dark fw-semibold" data-hs-toggle-switch-item-options="{
                         &quot;min&quot;: 69,
                         &quot;max&quot;: 59
                       }">99</span>
                  <span>/Month</span>
                </div>

                <h3 class="card-title">Premium Plan</h3>
                <!-- <p class="card-text">Advanced features for scaling your business</p> -->
              </div>

              <div class="card-body d-flex justify-content-center py-0">
                <!-- List Checked -->
                <ul class="list-checked list-checked-soft-text-dark mt-3">
                  <li class="list-checked-item text-dark">Appointment Scheduling and Management</li>
                  <li class="list-checked-item text-dark">Telehealth and Remote Patient Monitoring</li>
                  <li class="list-checked-item text-dark">Billing and Revenue Cycle Management</li>
                  <li class="list-checked-item text-dark">Integration with Wearable Devices and IoT</li>
                  <li class="list-checked-item text-dark">Electronic Health Records (EHR)</li>
                  <li class="list-checked-item text-dark">Mobile Applications for Patients and Providers</li>
                </ul>
                <!-- End List Checked -->
              </div>

              <div class="card-footer text-center">
                <div class="d-grid mb-2">
                  <button type="button" class="btn btn-light">Try free for 30 days</button>
                </div>
                <p class="card-text text-muted small">No card required</p>
              </div>
            </div>
            <!-- End Card -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->

        <!-- SVG Elements -->
        <!-- <figure class="position-absolute bottom-0 start-0 mb-n7 ms-n7" style="width: 9rem;">
        <svg viewBox="0 0 522 504" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path opacity="0.5" d="M332 504H510.4C516.8 504 522 498.8 522 492.4V314C522 209.1 436.9 124 332 124C227.1 124 142 209.1 142 314C142 418.9 227.1 504 332 504Z" fill="#00C9A7"></path>
          <path d="M190 380H11.6C5.2 380 0 374.8 0 368.4V190C0 85.1 85.1 0 190 0C294.9 0 380 85.1 380 190C380 294.9 294.9 380 190 380Z" fill="pink"></path>
        </svg>
      </figure>

      <figure class="position-absolute top-0 end-0 mt-n8 me-n8" style="width: 10rem;">
        <img class="img-fluid" src="assets/svg/components/dots-lg.svg" alt="Image Description">
      </figure> -->
        <!-- End SVG Elements -->
      </div>

      <!-- Card Info -->
      <!-- <div class="text-center">
      <div class="card card-info-link card-sm">
        <div class="card-body">
          Prefer to start with the trial version? <a class="card-link ms-2" href="#">Go here <span class="bi-chevron-right small ms-1"></span></a>
        </div>
      </div>
    </div> -->
      <!-- End Card Info -->
    </div>
    <!-- End Pricing -->
  </div>

  <!-- pricing plans end -->

  <!-- why choose us -->
  <div id="about">
    <div class="container content-space-1">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <span class="text-secondary lead">Our Features</span>
        <h2 style="color: rgba(0, 31, 63, 0.7) !important;">Real-time Communication Tools.</h2>
      </div>
      <!-- End Heading -->

      <div class="row align-items-lg-center">
        <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0">
          <!-- Nav Scroller -->
          <div class="js-nav-scroller hs-nav-scroller-horizontal">
            <span class="hs-nav-scroller-arrow-prev" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-left"></i>
              </a>
            </span>

            <span class="hs-nav-scroller-arrow-next" style="display: none;">
              <a class="hs-nav-scroller-arrow-link" href="javascript:;">
                <i class="bi-chevron-right"></i>
              </a>
            </span>

            <!-- Nav Pills -->
            <ul class="nav nav-lg nav-pills nav-pills-shadow flex-lg-column gap-lg-1 p-3" id="featuresTab"
              role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" href="#featuresOne" id="featuresOne-tab" data-bs-toggle="tab"
                  data-bs-target="#featuresOne" role="tab" aria-controls="featuresOne" aria-selected="true"
                  style="min-width: 20rem;">
                  <!-- Media -->
                  <div class="d-flex align-items-center align-items-lg-start">
                    <span class="svg-icon svg-icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                          fill="#035A4B"></path>
                        <path opacity="0.3"
                          d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                          fill="#035A4B"></path>
                      </svg>

                    </span>

                    <div class="flex-grow-1 ms-3">
                      <h4 class="mb-1">Appointment</h4>
                      <p class="text-body text-wrap mb-0">With our user-friendly interface, patients can easily schedule
                        appointments.</p>
                    </div>
                  </div>
                  <!-- End Media -->
                </a>
              </li>

              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#featuresTwo" id="featuresTwo-tab" data-bs-toggle="tab"
                  data-bs-target="#featuresTwo" role="tab" aria-controls="featuresTwo" aria-selected="false"
                  style="min-width: 20rem;" tabindex="-1">
                  <!-- Media -->
                  <div class="d-flex align-items-center align-items-lg-start">
                    <span class="svg-icon svg-icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3"
                          d="M16.163 17.55C17.0515 16.6633 17.6785 15.5488 17.975 14.329C18.2389 13.1884 18.8119 12.1425 19.631 11.306V11.306L12.694 4.36902C11.8574 5.18796 10.8115 5.76088 9.67099 6.02502C8.15617 6.3947 6.81277 7.27001 5.86261 8.50635C4.91245 9.74268 4.41238 11.266 4.44501 12.825C4.46196 13.6211 4.31769 14.4125 4.0209 15.1515C3.72412 15.8905 3.28092 16.5617 2.71799 17.125L2.28699 17.556C2.10306 17.7402 1.99976 17.9897 1.99976 18.25C1.99976 18.5103 2.10306 18.7598 2.28699 18.944L5.06201 21.719C5.24614 21.9029 5.49575 22.0062 5.75601 22.0062C6.01627 22.0062 6.26588 21.9029 6.45001 21.719L6.88101 21.288C7.44427 20.725 8.11556 20.2819 8.85452 19.9851C9.59349 19.6883 10.3848 19.5441 11.181 19.561C12.1042 19.58 13.0217 19.4114 13.878 19.0658C14.7343 18.7202 15.5116 18.2046 16.163 17.55V17.55Z"
                          fill="#035A4B"></path>
                        <path
                          d="M19.631 11.306L12.694 4.36902L14.775 2.28699C14.9591 2.10306 15.2087 1.99976 15.469 1.99976C15.7293 1.99976 15.9789 2.10306 16.163 2.28699L21.713 7.83704C21.8969 8.02117 22.0002 8.27075 22.0002 8.53101C22.0002 8.79126 21.8969 9.04085 21.713 9.22498L19.631 11.306ZM13.041 10.959C12.6427 10.5604 12.1194 10.3112 11.5589 10.2532C10.9985 10.1952 10.4352 10.332 9.96375 10.6405C9.4923 10.949 9.14148 11.4105 8.97034 11.9473C8.79919 12.4841 8.81813 13.0635 9.02399 13.588L2.98099 19.631L4.36899 21.019L10.412 14.975C10.9364 15.1816 11.5161 15.2011 12.0533 15.0303C12.5904 14.8594 13.0523 14.5086 13.361 14.037C13.6697 13.5654 13.8065 13.0018 13.7482 12.4412C13.6899 11.8805 13.4401 11.357 13.041 10.959V10.959Z"
                          fill="#035A4B"></path>
                      </svg>

                    </span>

                    <div class="flex-grow-1 ms-3">
                      <h4 class="mb-1">Patients</h4>
                      <p class="text-body text-wrap mb-0">Our software provides a secure and convenient platform for
                        patients to communicate with healthcare providers.</p>
                    </div>
                  </div>
                  <!-- End Media -->
                </a>
              </li>

              <li class="nav-item" role="presentation">
                <a class="nav-link" href="#featuresThree" id="featuresThree-tab" data-bs-toggle="tab"
                  data-bs-target="#featuresThree" role="tab" aria-controls="featuresThree" aria-selected="false"
                  style="min-width: 20rem;" tabindex="-1">
                  <!-- Media -->
                  <div class="d-flex align-items-center align-items-lg-start">
                    <span class="svg-icon svg-icon-sm text-primary">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3"
                          d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                          fill="#035A4B"></path>
                        <path
                          d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                          fill="#035A4B"></path>
                      </svg>

                    </span>

                    <div class="flex-grow-1 ms-3">
                      <h4 class="mb-1">Billing</h4>
                      <p class="text-body text-wrap mb-0">Our advanced billing software is designed to simplify and
                        streamline your financial processes.</p>
                    </div>
                  </div>
                  <!-- End Media -->
                </a>
              </li>
            </ul>
            <!-- End Nav Pills -->
          </div>
          <!-- End Nav Scroller -->
        </div>
        <!-- End Col -->

        <div class="col-lg-7 order-lg-1">
          <!-- Tab Content -->
          <div class="tab-content" id="featuresTabContent">
            <div class="tab-pane fade show active" id="featuresOne" role="tabpanel" aria-labelledby="featuresOne-tab">
              <!-- Browser Device -->
              <figure class="device-browser">
                <div class="device-browser-header">
                  <div class="device-browser-header-btn-list">
                    <span class="device-browser-header-btn-list-btn"></span>
                    <span class="device-browser-header-btn-list-btn"></span>
                    <span class="device-browser-header-btn-list-btn"></span>
                  </div>

                </div>

                <div class="device-browser-frame">
                  <img class="device-browser-img" src="./assets/img/Appointment.png" alt="Image Description">
                </div>
              </figure>
              <!-- End Browser Device -->
            </div>

            <div class="tab-pane fade" id="featuresTwo" role="tabpanel" aria-labelledby="featuresTwo-tab">
              <!-- Browser Device -->
              <figure class="device-browser">
                <div class="device-browser-header">
                  <div class="device-browser-header-btn-list">
                    <span class="device-browser-header-btn-list-btn"></span>
                    <span class="device-browser-header-btn-list-btn"></span>
                    <span class="device-browser-header-btn-list-btn"></span>
                  </div>
                  <!-- <div class="device-browser-header-browser-bar">www.htmlstream.com/front/</div> -->
                </div>

                <div class="device-browser-frame">
                  <img class="device-browser-img" src="./assets/img/patientnew.png" alt="Image Description">
                </div>
              </figure>
              <!-- End Browser Device -->
            </div>

            <div class="tab-pane fade" id="featuresThree" role="tabpanel" aria-labelledby="featuresThree-tab">
              <!-- Browser Device -->
              <figure class="device-browser">
                <div class="device-browser-header">
                  <div class="device-browser-header-btn-list">
                    <span class="device-browser-header-btn-list-btn"></span>
                    <span class="device-browser-header-btn-list-btn"></span>
                    <span class="device-browser-header-btn-list-btn"></span>
                  </div>

                </div>

                <div class="device-browser-frame">
                  <img class="device-browser-img" src="./assets/img/Billingsnew.png" alt="Image Description">
                </div>
              </figure>
              <!-- End Browser Device -->
            </div>
          </div>
          <!-- End Tab Content -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
  </div>
  <!-- why choose us end -->

  <!-- contact small -->

  <!-- Team -->


<!-- end team -->
  <!--
   Testimonials  -->

  <div style="background-color:  rgba(114, 143, 206, 0.3) !important;">
    <div class="container content-space-2 content-space-t-lg-3 mt-11">
      <!-- Heading -->
      <div class="w-lg-40 mb-5 mb-md-9 text-center">
        <p class="text-dark lead">Testimonials</p>
        <h2 style="color: rgba(0, 31, 63, 0.7) !important;">Loved by business and individuals across the globe.</h2>
      </div>

      <!-- End Heading -->

      <div class="row">
        <div class="col-sm-6 col-lg-4 feature">
          <!-- Card -->
          <div class="card shadow-none">
            <div class="card-body ">
              <!-- Rating -->
              <!-- <div class="d-flex gap-1 mb-2">
                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
              </div> -->
              <!-- End Rating -->

              <div class="mb-auto">
                <p class="p2 text-dark"> We've been with DevLoops from the beginning. Their consistent delivery of
                  top-notch technology solutions has been instrumental in our growth and competitiveness.</p>
              </div>
            </div>

            <div class="card-footer pt-0 ">
              <!-- Media -->
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-circle" src="./assets/img/160x160/img8.jpg" alt="Image Description">
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="card-title mb-0">Chandni Rai</h5>
                  <p class="card-text small">Business Manager</p>
                </div>
              </div>
              <!-- End Media -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 feature">
          <!-- Card -->
          <div class="card bg-pink1">
            <div class="card-body">
              <!-- Rating -->
              <!-- <div class="d-flex gap-1 mb-2">
                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="./assets/svg/illustrations/star.svg" alt="Review rating" width="16">
                <img src="./assets/svg/illustrations/star-half.svg" alt="Review rating" width="16">
              </div> -->
              <!-- End Rating -->

              <div class="mb-auto">
                <p class=" p2 text-white">DevLoops' transparency and integrity are truly commendable. They've helped us
                  navigate complex digital transformations with unwavering support and expertise.</p>
              </div>
            </div>

            <div class="card-footer pt-0">
              <!-- Media -->
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-circle" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="card-title text-white mb-0">Jaimini Thevar</h5>
                  <p class="card-text small text-white-70">CEO </p>
                </div>
              </div>
              <!-- End Media -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->

        <div class="col-sm-6 col-lg-4 feature">
          <!-- Card -->
          <div class="card shadow-none">
            <div class="card-body">

              <!-- End Rating -->

              <div class="mb-auto">
                <p class="p2 text-dark">We partnered with DevLoops for product development, and it was a game-changer.
                  Their team's creativity and commitment turned our ideas into a reality that exceeded our expectations.
                </p>
              </div>
            </div>

            <div class="card-footer pt-0">
              <!-- Media -->
              <div class="d-flex align-items-center">
                <div class="flex-shrink-0">
                  <img class="avatar avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                </div>
                <div class="flex-grow-1 ms-3">
                  <h5 class="card-title mb-0">Jay patel</h5>
                  <p class="card-text small">Front Pay user</p>
                </div>
              </div>
              <!-- End Media -->
            </div>
          </div>
          <!-- End Card -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
  </div>
  <!-- testimonial end -->
  <!-- contact form start  -->

  <!-- Contact Form -->
  <div id="contact">
    <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-2 mb-9 mt-md-n10">
      <div class="row">
        <div class="col-lg-6 mb-9 mb-lg-0">
          <!-- Heading -->
          <div class="mb-5">
            <p class="text-secondary lead">Get in touch</p>
            <h1 style="color: rgba(0, 31, 63, 0.7) !important;">Get a project in mind let's contact us!!</h1>
          </div>
          <!-- End Heading -->

          <!-- Leaflet -->
          <div class="overflow-hidden">
            <div class="col-sm-9 mb-3 mb-sm-4">
              <img class="img-fluid img-float" src="./assets/img/contactloop.gif" alt="Image Description">
            </div>
          </div>
          <!-- End Leaflet -->


          <!-- End Row -->
        </div>
        <!-- End Col -->

        <div class="col-lg-6">
          <div class="ps-lg-5">
            <!-- Card -->
            <div class="card">
              <div class="card-header border-bottom text-center">
                <h3 class="card-header-title">Contact form </h3>
              </div>

              <div class="card-body">
                <div class="alert alert-success d-none" role="alert" id="successAlert">
                  Your form has been successfully submitted!
                </div>

                <!-- Form -->
                <!-- Form -->
                <form action="https://formsubmit.co/24richavaidya@gmail.com" method="POST">
                  <div class="row gx-3">
                    <div class="col-sm-6">
                      <!-- Form -->
                      <div class="mb-3">
                        <label for="name">First Name:</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="name"
                          placeholder="Your Name" required>
                      </div>
                      <!-- End Form -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6">
                      <!-- Form -->
                      <div class="mb-3">
                        <label for="surname">Last Name:</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="surname"
                          placeholder="Your LastName" required>
                      </div>
                      <!-- End Form -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                  <div class="row gx-3">
                    <div class="col-sm-6">
                      <!-- Email Form -->
                      <div class="mb-3">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email"
                          placeholder="xyz@gmail.com" required>
                      </div>
                      <!-- End Email Form -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6">
                      <!-- Phone Form -->
                      <div class="mb-3">
                        <label for="Phone">Phone <span class="form-label-secondary">(Optional)</span></label>
                        <input type="tel" class="form-control form-control-lg" name="Phone" id="Phone"
                          placeholder="+x(xxx)xxx-xx-xx" required>
                      </div>
                      <!-- End Phone Form -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <!-- Details Form -->
                  <div class="mb-3 d-grid">
                    <label for="message">Details</label>
                    <textarea class="form-control form-control-lg" name="message" id="message"
                      placeholder="Tell us about your ..." rows="4" required></textarea>
                  </div>
                  <!-- End Details Form -->

                  <div class="d-grid">
                    <button type="submit" class="btn btn-outline-primary btn-transition">Send</button>
                  </div>

                </form>
                <!-- End Form -->
              </div>
            </div>
            <!-- End Card -->
          </div>
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Row -->
  </div>
  <!-- End Contact Form -->
  <!-- blog new -->
  <div id="blog">
    <!-- <div class="container content-space-2 content-space-lg-3">

      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <span class="text-cap">Success stories</span>
        <h2>Our Latest & Most Popular Tips & Tricks For You</h2>
      </div>


      <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 mb-5">
        <div class="col mb-5">

          <div class="card h-100">
            <img class="card-img-top" src="assets/img/480x320/img13.jpg" alt="Image Description">

            <div class="card-body">

              <a href="#">
                <h2 class="card-text text-dark">How To Recover Health Faster With Online Session.</h2>
              </a>
            </div>

            <div class="card-footer pt-0">
              <a class="card-link text-dark" href="page-customer-story.html">Read story <i
                  class="bi-chevron-right small ms-1"></i></a>
            </div>
          </div>

        </div>


        <div class="col mb-5">

          <div class="card h-100">
            <img class="card-img-top" src="assets/img/480x320/img17.jpg" alt="Image Description">

            <div class="card-body">

              <a href="#">
                <h2 class="card-text text-dark">Telehealth Services Are Ready To Help Your Family.</h2>
              </a>
            </div>

            <div class="card-footer pt-0">
              <a class="card-link text-dark" href="page-customer-story.html">Read story <i
                  class="bi-chevron-right small ms-1"></i></a>
            </div>
          </div>

        </div>


        <div class="col mb-5">

          <div class="card h-100">
            <img class="card-img-top" src="assets/img/480x320/img16.jpg" alt="Image Description">

            <div class="card-body">

              <a href="#">
                <h2 class="card-text text-dark">10 Tips To Lead A Healthy And Happy Life.</h2>
              </a>
            </div>

            <div class="card-footer pt-0">
              <a class="card-link text-dark" href="page-customer-story.html">Read story <i
                  class="bi-chevron-right small ms-1"></i></a>
            </div>
          </div>

        </div>





      </div>

    </div> -->
  </div>
  <!--  blog new -->


  <!-- contact form ends  -->


  <!-- ==service end -->


@endsection
