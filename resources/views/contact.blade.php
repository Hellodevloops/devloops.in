@extends('layout.app')
@section('content')
<main id="content" role="main" class=" mt-10" style="background-color:  rgba(0, 31, 63, 0.4) !important;">
    <!-- Hero -->
    <div class="position-relative  " style="background-image: url(assets/svg/components/card-11.svg);">
      <div class="container  content-space-b-lg-1 position-relative zi-2">
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9 bg-dark">
          <h1></h1>

        </div>

        <!-- End Row -->
      </div>

    </div>
    <!-- End Hero -->

    <!-- Contact Form -->
    <div class="container  content-space-t-1 content-space-b-4 mb-3 mt-11">
      <div class="text-center mb-10 mt-n4">
        <h2 class="text-white">Contact Us</h2>
        <h1 class="text-dark lead">Reach out to us and let's start a conversation. We're here to assist you every step
          of the way.</h1>

      </div>
      <div class="row">
        <div class="col-lg-6 mb-9 mb-lg-0">
          <!-- Heading -->
          <div class="mb-5">
            <p class="text-white ">Get in touch</p>
            <h3 class="text-dark">
              <!-- <img src="./assets/img/infinite.png" alt="Image Description" class="avatar avatar-sm px-1 bg-dark feature" style="width: 62px; height: 62px;"> -->
              Get a project in mind let's contact us!!

            </h3>
          </div>

          <!-- End Heading -->

          <!-- Leaflet -->
          <div class="row">
            <!-- First Column -->
            <div class="col-md-6 mb-3 mb-md-0">
              <div class="card card-transition text-center h-100">
                <a class="card card-transition text-center h-100" href="mailto:hr@devloops.in">
                  <div class="card-body">
                    <div class="svg-icon text-primary mb-3 feature">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                        class="bi bi-envelope-fill" viewBox="0 0 16 16">
                        <path
                          d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                      </svg>

                    </div>

                    <h4 class="card-title">Email Us</h4>
                    <p class="card-text text-body text-dark">Simple drop us an email at hr@devloops.in and we will reach
                      u soon.</p>
                  </div>

                  <div class="card-footer pt-0">
                    <span class="card-link">Email Us<i class="bi-chevron-right small ms-1"></i></span>
                  </div>
                </a>
              </div>
            </div>

            <!-- Second Column -->
            <div class="col-md-6">
              <div class="card card-transition text-center h-100">
                <a class="card card-transition text-center h-100" href="tel:+919106077817">
                  <div class="card-body">
                    <div class="svg-icon text-primary mb-3 feature">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-telephone-outbound-fill" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                          d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511zM11 .5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V1.707l-4.146 4.147a.5.5 0 0 1-.708-.708L14.293 1H11.5a.5.5 0 0 1-.5-.5" />
                      </svg>

                    </div>

                    <h4 class="card-title">Give us a call</h4>
                    <p class="card-text text-body text-dark">Give us a ring.Our Experts are standing by monday to friday
                      from 9am to 6pm.</p>
                  </div>

                  <div class="card-footer pt-0">
                    <span class="card-link">Contact us <i class="bi-chevron-right small ms-1"></i></span>

                  </div>

                </a>
              </div>
            </div>
          </div>


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


    <!-- End Contact Form -->

    <!-- addresses -->

    <div class="container  mt-n12 content-space-b-2 ">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-7">
        <p class="text-white  lead ">Our Offices</p>
        <h3 style="color: rgba(0, 31, 63, 0.7) !important;">Schedule your visit with us</h3>
      </div>
      <!-- End Heading -->

      <div class="row row-cols-1 row-cols-sm-2 1 row-cols-md-3 row-cols-lg-4 mb-5">
        <div class="col mb-3 mb-sm-4">
          <!-- Card -->
          <a class="card card-sm card-bordered card-transition h-100">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="text-dark lead text-center">Vadodara</h5>
                  <!-- Add the address below the Vadodara text using Bootstrap classes -->
                  <address class="text-center text-dark">
                    GF-2 Dhanlaxmi Complex, Subhanpura, Vadodara, Gujarat, India – 390023 <br><br> Call us:
                    +919106077817
                  </address>
                  <!-- <p class="card-text text-body small">4 job positions</p> -->
                </div>
                <!-- End Col -->

                <!-- <div class="col-auto">
                  <span class="text-muted">
                    <i class="bi-chevron-right small"></i>
                  </span>
                </div> -->
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
          <a class="card card-sm card-bordered card-transition h-100">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="text-dark lead text-center">Pune</h5>
                  <address class="text-center text-dark">
                    Devloops, Near shani mandir road, Ambegaon Budruk, Katraj, Pune, India- 411046 <br><br>Call us:
                    +91 9909066557
                  </address>

                </div>
                <!-- End Col -->
                <!--     
                <div class="col-auto">
                  <span class="text-muted">
                    <i class="bi-chevron-right small"></i>
                  </span>
                </div> -->
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
          <a class="card card-sm card-bordered card-transition h-100">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class="text-dark lead text-center">Mumbai</h5>
                  <address class="text-center text-dark">
                    402, Kesrnandan Niwas 2 , Near Mahesh Park, Tulinj Road, Nallasopara (East), Mumbai, India – 401209
                    <br> Call us: +918208853699
                  </address>

                </div>
                <!-- End Col -->

                <!-- <div class="col-auto">
                  <span class="text-muted">
                    <i class="bi-chevron-right small"></i>
                  </span>
                </div> -->
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
          <a class="card card-sm card-bordered card-transition h-100">
            <div class="card-body">
              <div class="row align-items-center">
                <div class="col">
                  <h5 class=" text-dark lead text-center">Canada</h5>
                  <address class="text-center text-dark">
                    Kitchener, Ontario, Canada <br><br><br><br>Call us:
                    +1 (226) 600-9628
                  </address>

                </div>
                <!-- End Col -->

                <!-- <div class="col-auto">
                  <span class="text-muted">
                    <i class="bi-chevron-right small"></i>
                  </span>
                </div> -->
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

    <!-- addresses end -->
  </main>

  <section class="container-fluid my-1 mt-n12 mb-14">
    <div class="row">
      <div class="col-lg-12 p-0">
        <!-- Google Map Embed -->
        <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3690.7245431381434!2d73.14561787344553!3d22.32625507966792!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395fc8ee3e155555%3A0x1386022b1d132240!2sDevloops%20International!5e0!3m2!1sen!2sus!4v1701242127098!5m2!1sen!2sus"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade">
        </iframe>

        <!-- End Google Map Embed -->
      </div>
    </div>
  </section>
@endsection