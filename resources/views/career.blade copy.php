@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- Gallery -->
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

                    <a href="#job" id="#job">
                        <button class=" btn   btn-outline-primary  btn-transition">See job openings</button>
                    </a>

                </div>


            </div>

            <!-- Shape -->
            <div class="shape shape-bottom zi-1">
                <svg width="3000" height="500" viewBox="0 0 3000 500" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 500H3000V0L0 500Z" fill="#fff" />
                </svg>
            </div>
            <!-- End Shape -->
        </div>
        <!-- End Gallery -->



        <!-- List Directory -->
        <div id="openRolesSection" class="container content-space-b-1 content-space-b-md-3">
            <!-- Heading -->
            <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                <p class="text-secondary ">Current opportunities</p>
                <h2 class="text-primary lead p2">We’re a truly global team with 17 offices around the world.</h2>
            </div>
            <!-- End Heading -->

            <!-- Form -->
            <form>
                <div class="row gx-2 gx-md-3 mb-7">
                    <div class="col-md-4 mb-2 mb-md-0">
                        <label class="form-label visually-hidden" for="searchJobCareers">Search job</label>

                        <!-- Form -->
                        <div class="input-group input-group-merge">
                            <span class="input-group-prepend input-group-text">
                                <i class="bi-search"></i>
                            </span>
                            <input type="text" class="form-control form-control-lg" id="searchJobCareers"
                                placeholder="Search job" aria-label="Search job">
                        </div>
                        <!-- End Form -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6 col-md-4 mb-2 mb-sm-0">
                        <label class="form-label visually-hidden" for="locationsJobCareers">Select location</label>

                        <!-- Select -->
                        <select class="form-select form-select-lg" id="locationsJobCareers" aria-label="Select location">
                            <option selected>All locations</option>
                            <option value="1">Canada</option>
                            <option value="2">Pune</option>
                            <option value="3">Vadodara</option>
                            <option value="3">Others</option>
                        </select>
                        <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-6 col-md-4">
                        <label class="form-label visually-hidden" for="departmentsJobCareers">Select department</label>

                        <!-- Select -->
                        <select class="form-select form-select-lg" id="departmentsJobCareers"
                            aria-label="Select department">
                            <option selected>All departments</option>
                            <option value="1">Software Development</option>
                            <option value="2">Front End Web Developer</option>
                            <option value="3">Web Developer</option>
                            <option value="4"> UI/UX Design</option>
                        </select>
                        <!-- End Select -->
                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </form>
            <!-- End Form -->

            <div class="mb-4">
                <button type="button" class="btn btn-ghost-secondary">
                    <i class="bi-bell me-1 text-dark"></i> Create alert
                </button>
            </div>

            <!-- List Group -->
            <section id="job">
                <ul class="list-group list-group-lg">
                    @foreach ($careers as $career)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-4 mb-2 mb-md-0">
                                    <span class="h6">{{ $career->title }}</span>
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-5 col-md-2 mb-2 mb-sm-0">
                                    <span>{{ $career->location }}</span>
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-5 col-md-4 mb-2 mb-sm-0">
                                    <span>{{ $career->department }}</span>
                                </div>
                                <!-- End Col -->

                                <div class="col-sm-2 text-sm-end">
                                    <a>{{ $career->status }} <i class="bi-chevron-right small ms-1 small ms-1"></i></a>
                                </div>
                                <!-- End Col -->
                            </div>
                            <!-- End Row -->
                        </li>
                    @endforeach

                </ul>
            </section>
            <!-- End List Group -->

            <div class="w-lg-65 text-center mx-lg-auto mt-7 mb-7">
                <p class="text-dark p2">Don't worry if you don't see any roles you want to apply for now. Register your
                    interest
                    to be notified of any roles that come along that meet your criteria.</p>
                <a href="./contact.html">
                    <button class=" btn   btn-outline-primary  btn-transition">Register your interest</button>
                </a>
            </div>
        </div>
        <!-- End List Directory -->
    </main>
@endsection
