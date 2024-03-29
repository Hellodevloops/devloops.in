@extends('layout.app')
@section('content')
<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">

    <!-- about -->
    <div class="position-relative mt-10">
      <div class="container content-space-lg-3">
        <div class="row align-items-center">
          <div class="col-12 col-lg-9 mb-7 mb-md-0">
            <!-- Heading -->
            <div class="w-md-75 mb-7">
              <p class="text-secondary lead mt-10">About Us</p>
              <h1 style="color: rgba(0, 31, 63, 0.7) !important;">Unleashing Creativity and Innovation</h1>
              <p class="text-dark ">As a creative design agency, our passion ignites at the prospect of bringing your
                visions to life. We thrive on <span class="text-primary">crafting captivating visuals, innovative
                  solutions, and unforgettable brand experiences</span>. With a dedicated team driven by artistic
                enthusiasm, we don't just create designs; we breathe life into them, infusing each project with
                creativity and a touch of magic. At<span class="text-primary"> DevLoops International </span> Services,
                your aspirations become our inspiration, and we're thrilled to embark on this artistic journey with you.
              </p>
            </div>
            <!-- End Heading -->

            <div class="row">
              <div class="col-md-4 mb-3 mb-md-0">
                <!-- Card -->
                <div class="card ">
                  <div class="card-body">
                    <span class="svg-icon text-primary mb-3">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M6.5 3C5.67157 3 5 3.67157 5 4.5V6H3.5C2.67157 6 2 6.67157 2 7.5C2 8.32843 2.67157 9 3.5 9H5V19.5C5 20.3284 5.67157 21 6.5 21C7.32843 21 8 20.3284 8 19.5V9H20.5C21.3284 9 22 8.32843 22 7.5C22 6.67157 21.3284 6 20.5 6H8V4.5C8 3.67157 7.32843 3 6.5 3Z"
                          fill="#035A4B" />
                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd"
                          d="M20.5 11H10V17.5C10 18.3284 10.6716 19 11.5 19H15.5C17.3546 19 19.0277 18.2233 20.2119 16.9775C20.1436 16.9922 20.0727 17 20 17C19.4477 17 19 16.5523 19 16V13C19 12.4477 19.4477 12 20 12C20.5523 12 21 12.4477 21 13V15.9657C21.6334 14.9626 22 13.7741 22 12.5C22 11.6716 21.3284 11 20.5 11Z"
                          fill="#035A4B" />
                      </svg>

                    </span>
                    <h4 class="card-title">Custom Software Solution</h4>
                    <!-- <p class="card-text">Over 1 million+ homes for sale available on the website.</p>
                    <a class="card-link" href="#">Properties for sale <i class="bi-chevron-right small ms-1"></i></a> -->
                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Col -->

              <div class="col-md-4 mb-3 mb-md-0">
                <!-- Card -->
                <div class="card ">
                  <div class="card-body">
                    <span class="svg-icon text-primary mb-3">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                          d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z"
                          fill="#035A4B" />
                        <path opacity="0.3"
                          d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z"
                          fill="#035A4B" />
                      </svg>

                    </span>
                    <h4 class="card-title">Business Technology Solution</h4>

                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Col -->

              <div class="col-md-4">
                <!-- Card -->
                <div class="card ">
                  <div class="card-body">
                    <span class="svg-icon text-primary mb-3">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="bi bi-fingerprint" viewBox="0 0 16 16">
                        <path
                          d="M8.06 6.5a.5.5 0 0 1 .5.5v.776a11.5 11.5 0 0 1-.552 3.519l-1.331 4.14a.5.5 0 0 1-.952-.305l1.33-4.141a10.5 10.5 0 0 0 .504-3.213V7a.5.5 0 0 1 .5-.5Z" />
                        <path
                          d="M6.06 7a2 2 0 1 1 4 0 .5.5 0 1 1-1 0 1 1 0 1 0-2 0v.332c0 .409-.022.816-.066 1.221A.5.5 0 0 1 6 8.447c.04-.37.06-.742.06-1.115zm3.509 1a.5.5 0 0 1 .487.513 11.5 11.5 0 0 1-.587 3.339l-1.266 3.8a.5.5 0 0 1-.949-.317l1.267-3.8a10.5 10.5 0 0 0 .535-3.048A.5.5 0 0 1 9.569 8Zm-3.356 2.115a.5.5 0 0 1 .33.626L5.24 14.939a.5.5 0 1 1-.955-.296l1.303-4.199a.5.5 0 0 1 .625-.329Z" />
                        <path
                          d="M4.759 5.833A3.501 3.501 0 0 1 11.559 7a.5.5 0 0 1-1 0 2.5 2.5 0 0 0-4.857-.833.5.5 0 1 1-.943-.334Zm.3 1.67a.5.5 0 0 1 .449.546 10.72 10.72 0 0 1-.4 2.031l-1.222 4.072a.5.5 0 1 1-.958-.287L4.15 9.793a9.72 9.72 0 0 0 .363-1.842.5.5 0 0 1 .546-.449Zm6 .647a.5.5 0 0 1 .5.5c0 1.28-.213 2.552-.632 3.762l-1.09 3.145a.5.5 0 0 1-.944-.327l1.089-3.145c.382-1.105.578-2.266.578-3.435a.5.5 0 0 1 .5-.5Z" />
                        <path
                          d="M3.902 4.222a4.996 4.996 0 0 1 5.202-2.113.5.5 0 0 1-.208.979 3.996 3.996 0 0 0-4.163 1.69.5.5 0 0 1-.831-.556Zm6.72-.955a.5.5 0 0 1 .705-.052A4.99 4.99 0 0 1 13.059 7v1.5a.5.5 0 1 1-1 0V7a3.99 3.99 0 0 0-1.386-3.028.5.5 0 0 1-.051-.705ZM3.68 5.842a.5.5 0 0 1 .422.568c-.029.192-.044.39-.044.59 0 .71-.1 1.417-.298 2.1l-1.14 3.923a.5.5 0 1 1-.96-.279L2.8 8.821A6.531 6.531 0 0 0 3.058 7c0-.25.019-.496.054-.736a.5.5 0 0 1 .568-.422Zm8.882 3.66a.5.5 0 0 1 .456.54c-.084 1-.298 1.986-.64 2.934l-.744 2.068a.5.5 0 0 1-.941-.338l.745-2.07a10.51 10.51 0 0 0 .584-2.678.5.5 0 0 1 .54-.456Z" />
                        <path
                          d="M4.81 1.37A6.5 6.5 0 0 1 14.56 7a.5.5 0 1 1-1 0 5.5 5.5 0 0 0-8.25-4.765.5.5 0 0 1-.5-.865Zm-.89 1.257a.5.5 0 0 1 .04.706A5.478 5.478 0 0 0 2.56 7a.5.5 0 0 1-1 0c0-1.664.626-3.184 1.655-4.333a.5.5 0 0 1 .706-.04ZM1.915 8.02a.5.5 0 0 1 .346.616l-.779 2.767a.5.5 0 1 1-.962-.27l.778-2.767a.5.5 0 0 1 .617-.346Zm12.15.481a.5.5 0 0 1 .49.51c-.03 1.499-.161 3.025-.727 4.533l-.07.187a.5.5 0 0 1-.936-.351l.07-.187c.506-1.35.634-2.74.663-4.202a.5.5 0 0 1 .51-.49" />
                      </svg>

                    </span>
                    <h4 class="card-title">Recovery and IT Security</h4>

                  </div>
                </div>
                <!-- End Card -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>

      <div class="container mt-8">
        <!-- Banner for Desktop -->
        <div class="banner-half-middle-x bg-img-start d-none d-md-block"
          style="background-image: url(./assets/img/atheropinknew.png); height: 100vh;"></div>

        <!-- Banner for Mobile -->
        <div class="d-md-none">
          <img src="./assets/img/atheropinknew.png" alt="Responsive Image" class="img-fluid object-fit-cover">
        </div>
      </div>

    </div>
    <!-- End about -->

    <!-- our mission -->
    <div class="position-relative bg-img-start mt-n8 ">
      <div class="container content-space-t-3 content-space-t-lg-2 content-space-b-2 position-relative zi-2">
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9 ">

          <h1 style="color: rgba(0, 31, 63, 0.7) !important;">Who We Are!!?</h1>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3 mb-md-0">
            <!-- Card -->
            <a class="card card-transition text-center h-100" href="#">
              <div class="card-body">
                <div class="svg-icon text-primary mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-clock-history" viewBox="0 0 16 16">
                    <path
                      d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483m.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535m-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z" />
                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0z" />
                    <path
                      d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5" />
                  </svg>

                </div>

                <h2 class="card-title">Our History</h2>
                <p class=" text-body text-dark">We create <span class="text-primary"> pixel perfect web & mobile app
                    designs </span>that are visually appealing and foster your identity.</p>
              </div>


            </a>
            <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col-md-4 mb-3 mb-md-0">
            <!-- Card -->
            <a class="card card-transition text-center h-100 " href="#">
              <div class="card-body">
                <div class="svg-icon text-primary mb-3">
                  <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.3"
                      d="M17 6H3C2.4 6 2 6.4 2 7V21C2 21.6 2.4 22 3 22H17C17.6 22 18 21.6 18 21V7C18 6.4 17.6 6 17 6Z"
                      fill="#035A4B"></path>
                    <path
                      d="M17.8 4.79999L9.3 13.3C8.9 13.7 8.9 14.3 9.3 14.7C9.5 14.9 9.80001 15 10 15C10.2 15 10.5 14.9 10.7 14.7L19.2 6.20001L17.8 4.79999Z"
                      fill="#035A4B"></path>
                    <path opacity="0.3" d="M22 9.09998V3C22 2.4 21.6 2 21 2H14.9L22 9.09998Z" fill="#035A4B"></path>
                  </svg>

                </div>

                <h2 class="card-title">Our Mission</h2>
                <p class=" text-body text-dark">We provide <span class="text-primary">Digital solutions </span>that
                  create competitive shopping & B2B trade experiences. </p>
              </div>
              <!--
              <div class="card-footer pt-0">
                <span class="card-link">Visit FAQ <i class="bi-chevron-right small ms-1"></i></span>
              </div> -->
            </a>
            <!-- End Card -->
          </div>
          <!-- End Col -->

          <div class="col-md-4">
            <!-- Card -->
            <a class="card card-transition text-center h-100" href="#">
              <div class="card-body">
                <div class="svg-icon text-primary mb-3">
                  <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                    class="bi bi-check2-circle" viewBox="0 0 16 16">
                    <path
                      d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z">
                    </path>
                    <path
                      d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z">
                    </path>
                  </svg>

                </div>

                <h2 class="card-title">Who we are</h2>
                <p class=" text-body text-dark">We offer<span class="text-primary"> robust & scalable</span> web
                  development services across all verticals an Agile way .</p>
              </div>

              <!-- <div class="card-footer pt-0">
                <span class="card-link">Contact sales <i class="bi-chevron-right small ms-1"></i></span>
              </div> -->
            </a>
            <!-- End Card -->
          </div>
          <!-- End Col -->
        </div>
        <!-- End Row -->
      </div>

      <!-- Shape -->
      <div class="shape shape-bottom zi-1">
        <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 500H3000V0L0 500Z" fill="#fff"></path>
        </svg>
      </div>
      <!-- End Shape -->
    </div>



    <!-- Card Grid -->
    <section class=" content mb-9" style="background-color:  rgba(114, 143, 206, 0.3) !important;">
      <div class="container content-space-1  ">
        <!-- Title -->
        <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-7">
          <p class="text-dark lead">What We offer</p>
          <h2 style="color: rgba(0, 31, 63, 0.7) !important;"> Explore the distinctive features that drive the
            functionality</h2>

        </div>
        <!-- End Title -->

        <!-- Icon Blocks -->
        <div class="border-bottom ">
          <div class="container content-space-2">
            <div class="row">
              <div class="col-md-4 mb-7 mb-md-0">
                <!-- Icon Block -->
                <div class="d-flex text-primary">
                  <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" fill="currentColor"
                      class="bi bi-terminal-split" viewBox="0 0 16 16">
                      <path
                        d="M2.146 3.146a.5.5 0 0 1 .708 0l.823.824a.75.75 0 0 1 0 1.06l-.823.824a.5.5 0 1 1-.708-.708l.647-.646-.647-.646a.5.5 0 0 1 0-.708ZM4 6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1A.5.5 0 0 1 4 6m6.354-2.854a.5.5 0 0 0-.708.708l.647.646-.647.646a.5.5 0 1 0 .708.708l.823-.824a.75.75 0 0 0 0-1.06l-.823-.824ZM12 5.5a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                      <path
                        d="M0 3a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h5.5V2zm6.5 0v12H14a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1z" />
                    </svg>
                  </div>
                  <div class="flex-grow-1 ms-4">
                    <h3 class="mb-1">Product development</h3>
                    <p class=" mb-0  text-dark">Crafting innovative solutions that seamlessly blend user experience with
                      cutting-edge technology, bringing your ideas to life.</p>
                  </div>
                </div>
                <!-- End Icon Block -->
              </div>
              <!-- End Col -->

              <div class="col-md-4 mb-7 mb-md-0">

                <div class="d-flex text-primary">
                  <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54" height="54" fill="currentColor"
                      class="bi bi-code-slash" viewBox="0 0 16 16">
                      <path
                        d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
                    </svg>
                  </div>
                  <div class="flex-grow-1 ms-4">
                    <h3 class="mb-1">Web Development</h3>
                    <p class="text-dark  mb-0 ">Building dynamic and responsive web experiences that not only meet but
                      exceed modern standards.</p>
                  </div>
                </div>

              </div>
              <!-- End Col -->

              <div class="col-md-4">
                <!-- Icon Block -->
                <div class="d-flex text-primary">
                  <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="54 " height="54 " fill="currentColor"
                      class="bi bi-cpu-fill" viewBox="0 0 16 16">
                      <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5z" />
                      <path
                        d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5" />
                    </svg>
                  </div>
                  <div class="flex-grow-1 ms-4">
                    <h3 class="mb-1">Internet Of Things</h3>
                    <p class="text-dark  mb-0 ">Empowering the future with interconnected devices and smart solutions,
                      driving efficiency &amp; automation.</p>
                  </div>
                </div>
                <!-- End Icon Block -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Icon Blocks -->
      </div>
    </section>
    <!-- End Card Grid -->

    <!-- Features Stats -->
    <div class="container content-space-2 content-space-lg-3 mt-n4 ">
      <div class="row">
        <div class="col-sm-4 mb-3 mb-sm-0">
          <div class="text-center">
            <small class="text-cap text-primary">&mdash; Delivered Goods </small>
            <h4 class="display-4">420+</h4>
            <p class="text-dark ">Efficient and timely delivery of software solutions to meet client needs.</p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-4 mb-3 mb-sm-0">
          <div class="text-center">
            <small class="text-cap text-primary">&mdash; IT Consulting</small>
            <h4 class="display-4">245+</h4>
            <p class="text-dark ">Delivering strategic IT consulting services to optimize business processes. </p>
          </div>
        </div>
        <!-- End Col -->

        <div class="col-sm-4">
          <div class="text-center">
            <small class="text-cap text-primary">&mdash; Fully Launched </small>
            <h4 class="display-4">400+</h4>
            <p class="text-dark ">Ensuring a seamless and successful software or IT consulting project launch.</p>
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Features Stats -->

    <!-- features new -->
    <section class="mt-n10">
      <div class="position-relative" style="background-image: url(assets/svg/components/wave-pattern-light.svg);">
        <div class="container content-space-2 content-space-lg-3 position-relative zi-2">
          <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <!-- Card -->
              <div class="card-body card card-transition text-center gradient-animation">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <span class="svg-icon svg-icon-lg text-primary feature icon-to-change"
                      onmouseover="changeIconColor(this)" onmouseout="resetIconColor(this)">

                      <svg width="64" height="64" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3"
                          d="M17 6H3C2.4 6 2 6.4 2 7V21C2 21.6 2.4 22 3 22H17C17.6 22 18 21.6 18 21V7C18 6.4 17.6 6 17 6Z"
                          fill="#035A4B"></path>
                        <path
                          d="M17.8 4.79999L9.3 13.3C8.9 13.7 8.9 14.3 9.3 14.7C9.5 14.9 9.80001 15 10 15C10.2 15 10.5 14.9 10.7 14.7L19.2 6.20001L17.8 4.79999Z"
                          fill="#035A4B"></path>
                        <path opacity="0.3" d="M22 9.09998V3C22 2.4 21.6 2 21 2H14.9L22 9.09998Z" fill="#035A4B"></path>
                      </svg>
                    </span>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="display-6 ">

                      <span class=" mb-3 text-to-change " onmouseover="changeTextColor(this)"
                        onmouseout="resetTextColor(this)"> Our Mission</span>
                    </h6>
                    <div class="border-top border-10 my-3" style="max-width: 25rem;"></div>
                    <!-- <span class="blockquote-footer-source">Happy customer</span> -->
                  </div>

                </div>
                <!-- Blockquote -->
                <figure>
                  <p class="text-dark text-to-change" onmouseover="changeTextColor(this)"
                    onmouseout="resetTextColor(this)">
                    At DevLoops International, our mission is to be at the forefront of
                    transformative software development, pioneering innovative solutions that empower
                    businesses to thrive in the digital era. We are committed to delivering excellence in
                    every line of code we write, ensuring that our clients receive cutting-edge products
                    tailored to their unique needs.</p>
                </figure>
                <!-- End Blockquote -->
                <div class="border-top border-10 my-3" style="max-width: 30rem;"></div>
              </div>
              <!-- End Card -->
            </div>

            <div class="col-sm-6 mb-3 mb-sm-0">
              <!-- Card -->
              <div class="card-body card card-transition text-center gradient-animation">
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <span class="svg-icon svg-icon-lg text-primary feature icon-to-change"
                      onmouseover="changeIconColor(this)" onmouseout="resetIconColor(this)">
                      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.3" fill-rule="evenodd" clip-rule="evenodd" d="M5 15L3 21.5L9.5 19.5L5 15Z"
                          fill="#035A4B"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M13.5 21C18.7467 21 23 16.7467 23 11.5C23 6.2533 18.7467 2 13.5 2C8.2533 2 4 6.2533 4 11.5C4 16.7467 8.2533 21 13.5 21ZM13.5 14.0061L11.5463 15.0332C11.3124 15.1562 11.0232 15.0663 10.9003 14.8324C10.8513 14.7393 10.8344 14.6326 10.8522 14.5289L11.2254 12.3533L9.6447 10.8126C9.4555 10.6282 9.45165 10.3254 9.63605 10.1362C9.7095 10.0609 9.8057 10.0118 9.9098 9.9967L12.0942 9.67925L13.0711 7.69985C13.1881 7.46295 13.4749 7.3657 13.7118 7.4826C13.8061 7.52915 13.8825 7.60555 13.9291 7.69985L14.9059 9.67925L17.0903 9.9967C17.3517 10.0347 17.5329 10.2774 17.4949 10.5388C17.4798 10.6429 17.4307 10.7392 17.3554 10.8126L15.7748 12.3533L16.1479 14.5289C16.1926 14.7893 16.0177 15.0366 15.7573 15.0813C15.6537 15.0991 15.5469 15.0822 15.4538 15.0332L13.5 14.0061Z"
                          fill="#035A4B"></path>
                      </svg>
                    </span>
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h6 class="display-6 text-navy-blue "><span class=" mb-3 text-to-change"
                        onmouseover="changeTextColor(this)" onmouseout="resetTextColor(this)"> Our Vision</span></h6>
                    <div class="border-top border-10 my-3" style="max-width: 25rem;"></div>
                    <!-- <span class="blockquote-footer-source">Happy customer</span> -->
                  </div>
                </div>
                <!-- Blockquote -->
                <figure>
                  <p class="text-dark text-to-change" onmouseover="changeTextColor(this)"
                    onmouseout="resetTextColor(this)">Our vision is to be a global p1er in software development,
                    recognized for
                    our unwavering commitment to quality, innovation, and client satisfaction. We aim to
                    push the boundaries of what is possible in the digital landscape, creating solutions
                    that not only meet current needs but also anticipate future challenges.</p>
                </figure>
                <!-- End Blockquote -->
                <div class="border-top border-10 my-3" style="max-width: 30rem;"></div>
              </div>
              <!-- End Card -->
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- End features new -->
    <!-- Team -->
    <div class="container  ">
      <!-- Heading -->
      <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
        <p class="text-secondary lead"> Our Team</p>
        <h2><span style="color: rgba(0, 31, 63, 0.7) !important;">Creative minds</span></h2>

      </div>
      <!-- End Heading -->

      <div class="row gx-3 mb-5">
        <div class="col-sm-6 col-lg-3 mb-3">
          <!-- Card -->
          <div class="card card-transition h-100" data-bs-toggle="modal" data-bs-target="#exampleModalScrollable">
            <div class="card-body">
              <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="./assets/img/riya1n.jpeg" alt="Riya Vaidya Image">
              </div>

              <span class="card-subtitle text-navy-blue">Backend Developer</span>
              <h4 class="card-title text-primary">Riya Vaidya</h4>
              <p class="text-dark p2">Responsible for server-side web application logic and integration of the work
                <span class="text-muted">Read More..</span></p>
            </div>

            <div class="card-footer pt-0">
              <!-- Socials -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-twitter"></i>
                  </a>
                </li>
              </ul>
              <!-- End Socials -->
            </div>
          </div>

          <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <!-- <h5 class="modal-title" id="exampleModalScrollableTitle">Riya Vaidya</h5> -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <!-- Avatar Image with Title -->
                  <div class="row justify-content-center mb-4">
                    <div class="col-auto">
                      <div class="avatar avatar-lg avatar-circle text-center">
                        <img class="avatar-img" src="./assets/img/riya1n.jpeg" alt="Riya Vaidya Image">
                        <!-- Title/Name -->
                        <!-- <h5 class="text-dark mt-3 mb-0">Riya Vaidya</h5> -->
                      </div>
                    </div>
                    <div class="col">
                      <!-- Designation or Additional Text -->
                      <h3 class="text-left  mb-0 mt-1  text-primary">Riya Vaidya</h3>
                      <h5 class="text-left text-dark mb-0 mt-2 p2">BackendEnd Developer</h5>
                      <!-- End Designation -->
                    </div>
                  </div>
                  <!-- End Avatar Image with Title -->

                  <!-- Content specific to Riya Vaidya -->
                  <p class="p2 text-dark">
                    Maintain the mechanisms that process data and perform actions on websites. Unlike front-end
                    developers, who control everything you can see on a website, back-end developers are involved in
                    data storage, security, and other server-side functions that you cannot see.
                  </p>
                  <!-- End Content -->
                </div>

              </div>
            </div>
          </div>


        </div>

        <!-- End Col -->

        <div id="Richa" class="col-sm-6 col-lg-3 mb-3">
          <!-- Card -->
          <div class="card card-transition h-100" data-bs-toggle="modal" data-bs-target="#RichaModal">
            <div class="card-body">
              <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="./assets/img/richa.JPG" alt="Richa Kharwa Image">
              </div>

              <span class="card-subtitle p2">FrontEnd Developer</span>
              <h4 class="card-title  text-primary">Richa Kharwa</h4>
              <p class="text-dark p2">I've worked on a variety of projects for clients in the retail, travel, and
                healthcare <span class="text-muted">Read More..</span></p>
            </div>

            <div class="card-footer pt-0">
              <!-- Socials -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-twitter"></i>
                  </a>
                </li>
              </ul>
              <!-- End Socials -->
            </div>
          </div>

          <div class="modal fade" id="RichaModal" tabindex="-1" role="dialog" aria-labelledby="RichaModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header text-center">
                  <!-- <h5 class="modal-title" id="RichaModalTitle">Richa Kharwa</h5> -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                  <!-- Avatar Image with Title -->
                  <div class="row justify-content-center mb-4">
                    <div class="col-auto">
                      <div class="avatar avatar-lg avatar-circle text-center">
                        <img class="avatar-img" src="./assets/img/richa.JPG" alt="Richa Kharwa Image">
                        <!-- Title/Name -->
                        <!-- <h5 class="text-dark mt-3 mb-0">Richa Kharwa</h5> -->
                      </div>
                    </div>
                    <div class="col">
                      <!-- Designation or Additional Text -->
                      <h3 class="text-left  text-primary mb-0 mt-1">Richa Vaidya</h3>
                      <h5 class="text-left text-dark mb-0 mt-2 p2">FrontEnd Developer</h5>
                      <!-- End Designation -->
                    </div>
                  </div>
                  <!-- End Avatar Image with Title -->

                  <!-- Content specific to Richa Kharwa -->
                  <p class="p2 text-dark">
                    I'm passionate about creating great user experiences and have a strong understanding of usability
                    and accessibility standards.
                    I believe that design is not just about how things look but also about how they work. By combining
                    creativity with technical expertise, I strive to create web interfaces that not only captivate users
                    visually but also provide an intuitive and enjoyable journey.
                  </p>
                  <!-- End Content -->
                </div>


              </div>
            </div>
          </div>

          <!-- End Modal -->
        </div>


        <!-- End Col -->
        <div id="Emily" class="col-sm-6 col-lg-3 mb-3">
          <!-- Card -->
          <div class="card card-transition h-100" data-bs-toggle="modal" data-bs-target="#emilyModal">
            <div class="card-body">
              <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Emily Johnson Image">
              </div>

              <span class="card-subtitle p1">Lead Designer</span>
              <h4 class="card-title  text-primary">Emily Johnson</h4>
              <p class="p2 text-dark"> Meticulously crafting user-centric experiences that seamlessly blend aesthetics
                <span class="text-muted">Read More..</span></p>
            </div>

            <div class="card-footer pt-0">
              <!-- Socials -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-twitter"></i>
                  </a>
                </li>
              </ul>
              <!-- End Socials -->
            </div>
          </div>

          <div class="modal fade" id="emilyModal" tabindex="-1" role="dialog" aria-labelledby="emilyModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <h5 class="modal-title" id="emilyModalTitle">Emily Johnson's Modal</h5> -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Avatar Image with Title -->
                  <div class="row justify-content-center mb-4">
                    <div class="col-auto">
                      <div class="avatar avatar-lg avatar-circle text-center">
                        <img class="avatar-img" src="./assets/img//160x160/img9.jpg" alt="Emily Johnson Image">
                        <!-- Title/Name -->

                      </div>
                    </div>
                    <div class="col">
                      <!-- Designation or Additional Text -->
                      <h3 class="text-left  text-primary mb-0 mt-1">Emily Johnson</h3>
                      <h5 class="text-left text-dark mb-0 mt-2 p2">Lead Designer</h5>
                      <!-- End Designation -->
                    </div>
                  </div>
                  <!-- End Avatar Image with Title -->

                  <!-- Content specific to Emily Johnson -->
                  <p class="p2 text-dark">
                    Designer p1s the design team in translating complex ideas into visually compelling interfaces. I
                    play a pivotal role in shaping the overall product aesthetic, ensuring a harmonious and intuitive
                    user journey. Through collaboration with cross-functional teams, the p1 Designer brings forth
                    innovative design solutions, transforming concepts into captivating and user-friendly software
                    interfaces.
                  </p>
                  <!-- End Content -->
                </div>


              </div>
            </div>
          </div>

          <!-- End Modal -->
        </div>

        <!-- End Col -->

        <div id="Michael" class="col-sm-6 col-lg-3 mb-3">
          <!-- Card -->
          <div class="card card-transition h-100" data-bs-toggle="modal" data-bs-target="#michaelModal">
            <div class="card-body">
              <div class="avatar avatar-lg avatar-circle mb-4">
                <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Michael Smith Image">
              </div>

              <span class="card-subtitle p1">Lead Developer</span>
              <h4 class="card-title  text-primary">Michael Smith</h4>
              <p class="p2 text-dark"> With a wealth of experience and a deep understanding of technologies <span
                  class="text-muted">Read More..</span></p>
            </div>

            <div class="card-footer pt-0">
              <!-- Socials -->
              <ul class="list-inline mb-0">
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-facebook"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-google"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a class="btn btn-xs btn-icon rounded text-dark" href="#">
                    <i class="bi-twitter"></i>
                  </a>
                </li>
              </ul>
              <!-- End Socials -->
            </div>
          </div>
          <!-- End Card -->

          <!-- Modal -->
          <div class="modal fade" id="michaelModal" tabindex="-1" role="dialog" aria-labelledby="michaelModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <!-- <h5 class="modal-title" id="michaelModalTitle">Michael Smith's Modal</h5> -->
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <!-- Avatar Image with Title -->
                  <div class="row justify-content-center mb-4">
                    <div class="col-auto">
                      <div class="avatar avatar-lg avatar-circle text-center">
                        <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Michael Smith Image">
                        <!-- Title/Name -->

                      </div>
                    </div>
                    <div class="col">
                      <!-- Designation or Additional Text -->
                      <h3 class="text-left  text-primary mb-0 mt-1">Michael Smith</h3>
                      <h5 class="text-left text-dark mb-0 mt-2 p2">Lead Developer</h5>
                      <!-- End Designation -->
                    </div>
                  </div>
                  <!-- End Avatar Image with Title -->

                  <!-- Content specific to Michael Smith -->
                  <p class="p2 text-dark">
                    Our expertise extends beyond coding, encompassing strategic thinking and a commitment to delivering
                    high-quality, maintainable code. p1ing by example, the p1 Developer fosters a culture of continuous
                    learning and innovation within the development team, ensuring that our software products not only
                    meet but exceed industry standards.
                  </p>
                  <!-- End Content -->
                </div>


              </div>
            </div>
          </div>
          <!-- End Modal -->
        </div>
        <!-- End Col -->

      </div>
      <!-- End Row -->


    </div>
    <!--
   team end -->


    <!-- Testimonials -->
    <div class="mt-n4" style="background-color:  rgba(114, 143, 206, 0.3) !important;">
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
                  <p class=" p2 text-white">DevLoops' transparency and integrity are truly commendable. They've helped
                    us navigate complex digital transformations with unwavering support and expertise.</p>
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
                    Their team's creativity and commitment turned our ideas into a reality that exceeded our
                    expectations.</p>
                </div>
              </div>

              <div class="card-footer pt-0">
                <!-- Media -->
                <div class="d-flex align-items-center">
                  <div class="flex-shrink-0">
                    <img class="avatar avatar-circle" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                  </div>
                  <div class="flex-grow-1 ms-3">
                    <h5 class="card-title mb-0">
Jay patel</h5>
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
    <!-- End Testimonials -->

    <!-- contact -->
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
    <!-- contact end -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->
@endsection
