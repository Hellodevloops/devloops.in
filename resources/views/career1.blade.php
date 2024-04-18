@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->

    <div class="position-relative bg-img-start" style="background-image: url(assets/svg/components/card-11.svg);">
        <div class="container content-space-t-3 content-space-t-lg-5 content-space-b-md-2 position-relative zi-2">
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-9">
                <!-- Heading -->
                <div class="mb-5">
                    <p class="text-secondary ">Work with us</p>

                    <h2 class="display-7 text-center " style="color: rgba(0, 31, 63, 0.7) !important;">Work hard with a
                        motivated team to launch perfectly crafted products you'll love.</h2>

                </div>
                <!-- End Heading -->

                {{-- <a href="#job" id="#job">
                    <button class=" btn   btn-outline-primary  btn-transition">See job openings</button>
                </a> --}}

            </div>


        </div>

        <!-- Shape -->
        <div class="shape shape-bottom zi-1">
            <svg width="100%" height="100" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 500H3000V0L0 500Z" fill="#fff" />
            </svg>
        </div>
        <!-- End Shape -->
          <!-- Heading -->
          <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
            <p class="text-secondary ">Current opportunities</p>
            <h2 class="text-primary lead p2">We’re a truly global team with 17 offices around the world.</h2>
        </div>
        <!-- End Heading -->
    </div>
<section class="project-details-section pb-20">
    <div class="container">
        <div class="project-details">
            <div class="row">
                <div class="col-12">
                    <div class="project-title">
                        <h2 style="color: #ff4081;">Career at<span> Devloops International</span></h2>
                    </div>
                    <p class="mb-25 text-black">Join our dynamic team at Devloops International and embark on a rewarding career journey. We are committed to excellence and innovation, providing opportunities for growth and development in the tech industry.</p>
                </div>
                <div class="col-12">
                    <div class="project-title">
                        <h2 style="color: #ff4081;">Why<span> Devloops International?</span></h2>
                    </div>
                    <p class="mb-25 text-black">At Devloops International, we're all about innovation and teamwork. We believe in creating a workplace where everyone can thrive and grow together. Our focus is on developing cutting-edge software solutions that empower businesses and drive success. Join us in shaping the future of technology!</p>
                </div>
            </div>
            <div class="row mb-50">
                @foreach ($careers as $careers)
                <div class="col-6">
                    <div class="position-box">
                        <div class="project-title">
                            <h3 style="color: #ff4081;">{{ $careers->title }}</h3>
                        </div>
                        <p class="mb-10 text-black">Location: <span class="location">{{ $careers->location }}</span></p>
                        <p class="mb-25 text-black">{{ $careers->content }}</p>
                        <a href="{{ route('contact') }}" class="apply-button btn btn-theme mt-4" style="background-color: #d9d5d6; border-color: #ff4081;">Apply</a>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-6">
                    <div class="position-box">
                        <div class="project-title">
                            <h3 style="color: #ff4081;">Job Title 2</h3>
                        </div>
                        <p class="mb-10 text-black">Location: <span class="location">Pune</span></p>
                        <p class="mb-25 text-black">Job description goes here.</p>
                        <a href="{{ route('contact') }}" class="apply-button btn btn-theme mt-4" style="background-color: #d9d5d6; border-color: #ff4081;">Apply</a>
                    </div>
                </div> --}}
                <!-- Add more job listings as needed -->
            </div>
        </div>
    </div>
</section>
@endsection
