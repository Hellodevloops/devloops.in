<!DOCTYPE html>
<html lang="en" dir="">



<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>  Devloops</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('./assets/img/infinite.png')}}">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  {{-- {{asset('')}} --}}
  <link rel="stylesheet" href="{{asset('assets/css/vendor.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-icons/font/bootstrap-icons.css')}}">
  <link rel="stylesheet" href="{{asset('assets/vendor/aos/dist/aos.css')}}">
  <link rel="stylesheet" href="{{asset('../node_modules/swiper/swiper-bundle.min.css')}}">
  <!-- <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">

  <link rel="stylesheet" href="../node_modules/leaflet/dist/leaflet.css" /> -->


  <!-- CSS Front Template -->
  <link rel="stylesheet" href="{{asset('assets/css/theme.minc619.css?v=1.0')}}">
  <!-- <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css">
  <link rel="stylesheet" href="../node_modules/swiper/swiper-bundle.min.css"> -->


  <!-- JS Implementing Plugins -->
  <!-- <script src="../node_modules/fslightbox/index.js"></script> -->

  <!-- <script src="../node_modules/leaflet/dist/leaflet.js"></script> -->

  <!-- JS Implementing Plugins -->

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


  <style>
    /* our mission vision animation */
    .p1{
  font-size: 18px;
}

    .gradient-animation {
    background-size: 100% 200%;
    transition: background-position 0.5s;
    overflow: hidden; /* Ensure the overflow is hidden to prevent the gradient overflow */
}

.gradient-animation:hover {
    background-position: 0 100%;
    background: linear-gradient(to top, #82a5c9, #f46a9f);
}

.gradient-animation:hover .text-to-change,
.gradient-animation:hover .icon-to-change,
.gradient-animation:hover p
 {
    color: white !important;

}

.checkmark {
      fill: #ad3c62; /* Set the initial color, in this case, dark pink */
      transition: fill 0.3s; /* Add a smooth transition effect */
    }

    .checkmark:hover {
      fill: #d0c9c9; /* Change the color on hover to white */
    }
    .warning{
      fill: #ad3c62; /* Set the initial color, in this case, dark green */
      transition: fill 0.3s; /* Add a smooth transition effect */
    }

    .warning:hover {
      fill: #ffffff; /* Change the color on hover to white */
    }


       /* Add your existing styles here */
    .container-animation {
      opacity: 0;
      transform: translateX(-50px);
      animation: slideIn 1s ease-in-out forwards infinite;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
    .client-card:hover {
        transform: scale(1.05);
    }

    .card-header {
        padding: 15px;
        background: rgba(156, 152, 152, 0.5);
        border-radius: 10px 10px 0 0;
    }

    @keyframes floatAnimation {
    0%,
    100% {
        transform: translateY(0);
    }
    50% {
        transform: translateY(-10px);
    }
}

    .card-title {
        margin: 0;
        font-size: 1.5rem;
    }

    .card-text {
        font-size: 1rem;
    }

    .device-browser-frame1 {
  position: relative;
  overflow: hidden;
}

.device-browser-img1 {
  width: 100%;
  height: auto;
  clip-path: ellipse(70% 50% at 50% 50%);
}


   </style>

</head>

<body>
  <!-- ========== HEADER ========== -->

  <!-- ========== HEADER ========== -->
  <header id="header" class="navbar navbar-expand-lg navbar-end navbar-absolute-top navbar-light navbar-show-hide"
    data-hs-header-options='{
    "fixMoment": 1000,
    "fixEffect": "slide"
  }'>
    <!-- Topbar -->

    <!-- End Topbar -->

    <div class="container  content-space-t-1">
      <nav class="js-mega-menu navbar-nav-wrap ">
        <!-- Default Logo -->
        <a class="navbar-brand" aria-label="Front" href="./index.html">
          <img class="navbar-brand-logo"  src="{{asset('./assets/img/newlogobg.png')}}" alt="Logo" style="width: 250px; height:40px;">
        </a>

        <!-- End Default Logo -->

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-default">
            <i class="bi-list"></i>
          </span>
          <span class="navbar-toggler-toggled">
            <i class="bi-x"></i>
          </span>
        </button>
        <!-- End Toggler -->

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <div class="navbar-absolute-top-scroller">
            <ul class="navbar-nav">
              <!-- Landings -->

              <!-- End Landings -->

              <!-- Company -->
              <li class="hs-has-sub-menu nav-item">
                <a id="pagesMegaMenu" class="hs-mega-menu-invoker   text-dark  nav-link" href="{{ url('/') }}" role="button" aria-expanded="false">Home</a>

                <!-- Mega Menu -->
                <div class="hs-sub-menu " aria-labelledby="accountMegaMenu" style="min-width: 14rem;">
                  <!-- Authentication -->

                  <!-- End Authentication -->


                </div>
                <!-- End Mega Menu -->
              </li>
              <!-- End Company -->


              <!-- Account -->
              <li class="hs-has-sub-menu nav-item">
                <a id="pagesMegaMenu" class="hs-mega-menu-invoker   text-dark  nav-link" href="{{ url('/about') }}" role="button" aria-expanded="false">About</a>

                <!-- Mega Menu -->
                <div class="hs-sub-menu " aria-labelledby="accountMegaMenu" style="min-width: 14rem;">
                  <!-- Authentication -->

                  <!-- End Authentication -->


                </div>
                <!-- End Mega Menu -->
              </li>
              <!-- End Account -->

              <!-- Pages -->
              <li class="hs-has-sub-menu nav-item">
                <a id="pagesMegaMenu" class="hs-mega-menu-invoker  dropdown-toggle text-dark  nav-link" href="#" role="button" aria-expanded="false">Service</a>

                <!-- Mega Menu -->
                <div class="hs-sub-menu dropdown-menu" aria-labelledby="pagesMegaMenu" style="min-width: 14rem;">
                  <a class="dropdown-item text-dark " href="{{url('product')}}">Product Development</a>
                  <a class="dropdown-item text-dark" href="{{url('webdev')}}">Web Development </a>
                  <a class="dropdown-item text-dark" href="{{url('iot')}}">IOT</a>
                  <a class="dropdown-item text-dark" href="{{url('healthcare')}}">Healthcare</a>


                <!-- End Mega Menu -->
              </li>
             <!-- blog -->
             <li class="hs-has-sub-menu nav-item">
              <a id="pagesMegaMenu" class="hs-mega-menu-invoker   text-dark  nav-link" href="{{ route('blog') }}" role="button" aria-expanded="false">Blog</a>

              <!-- Mega Menu -->
              <div class="hs-sub-menu " aria-labelledby="accountMegaMenu" style="min-width: 14rem;">
                <!-- Authentication -->

                <!-- End Authentication -->


              </div>
              <!-- End Mega Menu -->
            </li>
            <!-- End blog -->
              <li class="hs-has-sub-menu nav-item">
                <a id="pagesMegaMenu" class="hs-mega-menu-invoker   text-dark  nav-link" href="{{ url('/career') }}" role="button" aria-expanded="false">Career</a>

                <!-- Mega Menu -->
                <div class="hs-sub-menu " aria-labelledby="accountMegaMenu" style="min-width: 14rem;">
                  <!-- Authentication -->

                  <!-- End Authentication -->


                </div>
                <!-- End Mega Menu -->
              </li>

              <!-- Blog -->
              <li class="hs-has-sub-menu nav-item">
                <a id="pagesMegaMenu" class="hs-mega-menu-invoker   text-dark  nav-link" href="{{url('contact')}}" role="button" aria-expanded="false">Contact</a>


              </li>
              <!-- End Blog -->


            </ul>
          </div>
        </div>

      </nav>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

    @yield('content')


  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark" style="background-image: url(assets/svg/components/wave-pattern-light.svg);" >
    <div class="container content-space-t-2 content-space-b-1 mt-n8 ">
      <div class="row mb-9 " >
        <div class="col-lg-3 mb-5 mb-lg-0 mt-n8">
          <!-- Logo -->
          <a  aria-label="Front "href="./index.html" >
            <img class="brand mt-8"  src="{{asset('./assets/img/newlogobg.png')}}" alt="Logo" style="width: 240px; height: 50px;">
          </a>
          <!-- End Logo -->
          <!-- List -->
        <ul class="list-unstyled list-py-1 py-3">
          <li><a class="link-sm text-white" href="#"><i class="bi-geo-alt-fill me-1"></i> GF-2 Dhanlaxmi Complex,
            390023 Vadodara Gujarat
            India</a></li>
          <li><a class="link-sm text-white" href="tel:+919106077817"><i class="bi-telephone-inbound-fill me-1"></i>+919106077817</a></li>
        </ul>
        <!-- End List -->
        </div>
        <!-- End Col -->

        <div class="col-7 col-md-3 col-lg-2 mb-5 mb-md-0 text-white-70">
          <h5 class="text-white">Company</h5>

          <!-- Links -->
          <ul class="list-unstyled list-py-1 mb-0 text-white-70">
            <li><a class="link-sm text-white" href="./index.html">Home</a></li>
            <li><a class="link-sm text-white" href="./about.html">About Us</a></li>
            <!-- <li><a class="link-sm text-white" href="#service">Our Service</a></li>
            <li><a class="link-sm text-white" href="#blog">Our Blog</a></li> -->
            <li><a class="link-sm text-white" href="./contact.html">Contact us</a></li>
          </ul>
          <!-- End Links -->
        </div>
        <!-- End Col -->

        <div class="col-6 col-md-3 col-lg-2 mb-5 mb-md-0">
          <h5 class="text-white">Services</h5>

          <!-- Nav Links -->
          <ul class="list-unstyled list-py-1 mb-0">
          <li><a class="link-sm text-white" href="{{url('product')}}">Product Development</a></li>
            <li><a class="link-sm text-white" href="./web.html">Web App Development</a></li>

            <li><a class="link-sm text-white" href="./iot.html">IOT</a></li>
<!--
            <li><a class="link-sm text-white" href="#">Login</a></li>

            <li><a class="link-sm text-white" href="#">Subscribe</a></li> -->
          </ul>
          <!-- End Nav Links -->
        </div>
        <!-- End Col -->

        <div class="col-md-5 col-lg-4">
          <!-- Form -->
         <!-- Form -->
         <form>
          <h5 class="text-white-70">Stay up to date</h5>

          <!-- Input Card -->
          <div class="input-card mt-3">
            <div class="input-card-form">
              <input type="text" class="form-control" placeholder="Enter email" aria-label="Enter email">
            </div>
            <button type="button" class="btn btn-secondary  ">Submit</button>
          </div>
          <!-- End Input Card -->
        </form>
          <!-- End Form -->

        <p class="form-text text-white">Stay upto date with our news later.</p>
          <!-- <p class="form-text text-white-70">New UI kits or big discounts. Never spam.</p> -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->

      <div class="row align-items-center mt-n4">
        <div class="col">
          <p class="text-white small mb-0">© Devloops. All rights reserved.</p>
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <!-- Socials -->
          <ul class="list-inline mb-0">
            <li class="list-inline-item">
              <a class="btn btn-secondary  btn-sm btn-icon" href="#">
                <i class="bi-facebook"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a class="btn btn-secondary  btn-sm btn-icon" href="#">
                <i class="bi-google"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a class="btn btn-secondary  btn-sm btn-icon" href="#">
                <i class="bi-twitter"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a class="btn btn-secondary  btn-sm btn-icon" href="#">
                <i class="bi-github"></i>
              </a>
            </li>

            <li class="list-inline-item">
              <a class="btn btn-secondary  btn-sm btn-icon" href="#">
                <i class="bi-linkedin"></i>
              </a>
            </li>
          </ul>
          <!-- End Socials -->
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
  </footer>

  <!-- ========== END FOOTER ========== -->

  <!-- Go To -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;" data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": "2rem"
         },
         "show": {
           "bottom": "2rem"
         },
         "hide": {
           "bottom": "-2rem"
         }
       }
     }'>
    <i class="bi-chevron-up"></i>
  </a>
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>
  <script src="assets/vendor/aos/dist/aos.js"></script>


  <script src="assets/js/theme.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>






  <!-- JS Plugins Init. -->
  <script>
      (function () {
        // INITIALIZATION OF LEAFLET
        // =======================================================
        const leaflet = HSCore.components.HSLeaflet.init(document.getElementById('mapEg3'))

        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
          id: 'mapbox/light-v9'
        })
      })()
  </script>


  <!-- JS Plugins Init. -->
  <script>
      (function () {
        // INITIALIZATION OF HEADER
        // =======================================================
        new HSHeader('#header').init()


        // INITIALIZATION OF MEGA MENU
        // =======================================================
        new HSMegaMenu('.js-mega-menu', {
          desktop: {
            position: 'left'
          }
        })


        // INITIALIZATION OF SHOW ANIMATIONS
        // =======================================================
        new HSShowAnimation('.js-animation-link')


        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
          onSubmit: data => {
            data.event.preventDefault()
            alert('Submited')
          }
        })


        // INITIALIZATION OF BOOTSTRAP DROPDOWN
        // =======================================================
        HSBsDropdown.init()


        // INITIALIZATION OF GO TO
        // =======================================================
        new HSGoTo('.js-go-to')


        // INITIALIZATION OF AOS
        // =======================================================
        AOS.init({
          duration: 650,
          once: true
        });
      })()


  </script>

<!-- JS Plugins Init. -->
<script>
  (function() {
    // INITIALIZATION OF TEXT ANIMATION (TYPING)
    // =======================================================
    HSCore.components.HSTyped.init('.js-typedjs')
  })()
</script>



<!-- JS Implementing Plugins -->
<script src="../node_modules/swiper/swiper-bundle.min.js"></script>

<!-- JS Plugins Init. -->
<script>
  (function() {
    // INITIALIZATION OF SWIPER
    // =======================================================
    var swiper = new Swiper('.js-swiper-blog-metro-hero',{
      effect: 'fade',
      autoplay: true,
      loop: true,
      pagination: {
        el: '.js-swiper-blog-metro-hero-pagination',
        clickable: true,
      }
    });
  })()
</script>


<script>
  // Add the animation class using JavaScript when the content is ready
  document.addEventListener('DOMContentLoaded', function () {
    var container = document.querySelector('.container-animation');
    container.classList.add('animate');
  });
</script>


<!-- JS Implementing Plugins -->
<script src="../node_modules/swiper/swiper-bundle.min.js"></script>
<!-- for modal -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // Open the modal when a column is clicked
  $(".open-modal").click(function () {
      var targetModal = $(this).data("target");
      var modalTop = $(window).scrollTop() + ($(window).height() - $(targetModal).height()) / 2;

      // Set the top position of the modal
      $(targetModal).css("top", modalTop + "px");

      // Show the modal
      $(targetModal).modal("show");
  });
</script>

<!-- our mission -->
<script>
function changeTextColor(element) {
    element.classList.add('text-white'); // Change to your desired text color class
}

function resetTextColor(element) {
    element.classList.remove('text-white'); // Reset to the original text color class
}

function changeIconColor(element) {
    element.classList.add('text-white'); // Change to your desired icon color class
}

function resetIconColor(element) {
    element.classList.remove('text-white'); // Reset to the original icon color class
}

</script>

</body>
</html>
