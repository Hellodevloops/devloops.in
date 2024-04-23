@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
            <div class="breadcrumb-bg" data-background="/assets/img/healthcarenew1.jpg"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="tpbreadcrumb">
                            <div class="breadcrumb-link mb-15">
                                <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                                <span> / web</span>
                            </div>
                            <h2 class="breadcrumb-title">Web Development</h2>
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

        <section class="project-details-area pt-120 pb-120">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                    <div class="tp-project-details-catagory-content mb-40">
                        <h4 class="tp-project-details-catagory-title mb-20">Mastering Web Development</h4>
                        <p class="text-black">In addition to safeguarding user data, web development plays a pivotal role in establishing vital interfaces for customers and pivotal control points for businesses. Our dedicated team of web application developers is committed to crafting and delivering web solutions that not only enhance operational efficiency but also expedite decision-making processes and confer a competitive edge. By harnessing the power of web development, we empower businesses to seamlessly interact with their customers, optimize workflows , and stay ahead in today's dynamic market landscape.</p>
                     </div>

                  </div>
               </div>

               <div class="row">
                  <div class="col-lg-12">
                    <div class="tp-project-details-thumb w-img mb-30">
                        <img src="assets/img/webnew1.jpg" alt="">
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="tp-project-details-catagory">
                        <span class="tp-section-sub-title">What We’re Offering</span>
                        {{-- <h5 class="tp-project-details-catagory-title pb-10">We Provide Exclusive Service
                            For Your Business</h5> --}}
                      </div>
                  </div>
               </div>
               <div class="row align-items-center mb-20">
                  <div class="col-lg-7 order-lg-1 order-sm -1">
                     <div class="tp-project-details-list">
                        <h4 class="Text-black pb-10"> E-Commerce Website</h4>
                        <div class="tp-project-details-list-item d-flex">
                           <div class="tp-project-details-list-icon">
                              <i class="fa-thin fa-check"></i>
                           </div>

                           <div class="tp-project-details-list-content">
                              <p class="text-black">E-commerce websites include features for creating and managing product catalogs.  </p>
                           </div>
                        </div>
                        <div class="tp-project-details-list-item d-flex">
                           <div class="tp-project-details-list-icon">
                              <i class="fa-thin fa-check"></i>
                           </div>
                           <div class="tp-project-details-list-content">
                              <p class="text-black">They have a shopping cart system that allows users to add products to their cart, review their cart, and proceed to checkout. </p>
                           </div>
                        </div>
                        <div class="tp-project-details-list-item d-flex">
                           <div class="tp-project-details-list-icon">
                              <i class="fa-thin fa-check"></i>
                           </div>
                           <div class="tp-project-details-list-content">
                              <p class="text-black">E-commerce sites have order management systems to track orders, process payments, generate invoices, and handle refunds or returns. </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 order-lg-2 order-sm-2">
                     <div class="tp-project-details-list-thumb w-img">
                        <img src="assets/img/service/webecom.jpg" alt="" class="service-img1">
                     </div>
                  </div>
                </div>
            <div class="row align-items-cente mb-20">
                  <div class="col-lg-5 order-lg-1 order-sm-2">
                    <div class="tp-project-details-list-thumb w-img">
                       <img src="assets/img/service/webmultipage.jpg" alt=""  class="service-img1">
                    </div>
                 </div>
                 <div class="col-lg-7 order-lg-2 order-sm-1">
                    <div class="tp-project-details-list">
                       <h4 class="Text-black pb-10"> Multi-page Website</h4>
                       <div class="tp-project-details-list-item d-flex">
                          <div class="tp-project-details-list-icon">
                             <i class="fa-thin fa-check"></i>
                          </div>

                          <div class="tp-project-details-list-content">
                             <p class="text-black">They use navigation menus, breadcrumbs, and internal links for easy navigation between pages. </p>
                          </div>
                       </div>
                       <div class="tp-project-details-list-item d-flex">
                          <div class="tp-project-details-list-icon">
                             <i class="fa-thin fa-check"></i>
                          </div>
                          <div class="tp-project-details-list-content">
                             <p class="text-black">Each page on a multi-page website serves a specific purpose or topic.</p>
                          </div>
                       </div>
                       <div class="tp-project-details-list-item d-flex">
                          <div class="tp-project-details-list-icon">
                             <i class="fa-thin fa-check"></i>
                          </div>
                          <div class="tp-project-details-list-content">
                             <p class="text-black"> Multi-page sites are optimized for search engines (SEO) by structuring content hierarchically, using relevant keywords, meta tags, and optimizing page load speed. </p>
                          </div>
                       </div>
                    </div>
                 </div>
             </div>
                  <div class="row align-items-center mb-20">
                    <div class="col-lg-7">
                       <div class="tp-project-details-list">
                          <h4 class="Text-black pb-10"> Dynamic Website</h4>
                          <div class="tp-project-details-list-item d-flex">
                             <div class="tp-project-details-list-icon">
                                <i class="fa-thin fa-check"></i>
                             </div>

                             <div class="tp-project-details-list-content">
                                <p class="text-black">Dynamic websites fetch content from databases in real-time, allowing for dynamic generation of web pages based on user input or system data. </p>
                             </div>
                          </div>
                          <div class="tp-project-details-list-item d-flex">
                             <div class="tp-project-details-list-icon">
                                <i class="fa-thin fa-check"></i>
                             </div>
                             <div class="tp-project-details-list-content">
                                <p class="text-black">They support user input forms, comments, user registration, and login systems. </p>
                             </div>
                          </div>
                          <div class="tp-project-details-list-item d-flex">
                             <div class="tp-project-details-list-icon">
                                <i class="fa-thin fa-check"></i>
                             </div>
                             <div class="tp-project-details-list-content">
                                <p class="text-black">This integration enables content updates, database management, user management, and content caching for improved performance. </p>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="col-lg-5">
                       <div class="tp-project-details-list-thumb w-img">
                          <img src="assets/img/service/webdynamic.jpg" alt="" style="width:350px; height:400px;">
                       </div>
                    </div>
                  </div>

            </div>
         </section>

         <section class="contact-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <img src="https://devloops.in/assets/img/devcontact.jpg" alt="Description of the image" width="100%" height="auto">
                    </div>

                    <div class="offset-xl-1 col-xl-6 col-lg-6 ">
                        <div class="tp-section tp-section-two mb-25">
                            <span class="tp-section-sub-title"><i class="flaticon-edit"></i> Let’s Talk With Us</span>

                            <div class="tp-section-title-wrapper">
                                <!-- <p>System is a term used to refer to an organized collection symbols and processes that may be used to operate on such symbols.</p>
                                  -->
                            </div>
                        </div>
                        <div class="tp-contact-details-form mb-40">
                             <form method="POST" action="https://devloops.in/contact">
                                <input type="hidden" name="_token" value="0onRNtJVOv9D8cw598ssBk5G2frnHpxrro5NgzYr" autocomplete="off">                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="firstname" placeholder="First Name" fdprocessedid="sipzh">
                                            <span><i class="fa-light fa-user"></i></span>

                                        </div>
                                          </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="lastname" placeholder="Last Name" fdprocessedid="taxdmr">
                                            <span><i class="fa-light fa-user"></i></span>
                                        </div>
                                      </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="email" placeholder="Email Address" fdprocessedid="9qgctj">
                                            <span><i class="fa-light fa-envelope"></i></span>
                                        </div>
                                         </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <input type="text" name="phone" placeholder="Phone Number" fdprocessedid="4gfa1">
                                            <span><i class="fa-light fa-phone"></i></span>
                                        </div>
                                   </div>

                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-input mb-20">
                                            <textarea class="form-control" name="description" placeholder="Description" maxlength="100"></textarea>
                                        </div>
                                          </div>
                                    <!-- <div class="col-lg-12">
                                          <div class="tp-contact-details-form-input mb-20">
                                             <input type="text" placeholder="Company Name">
                                             <span><i class="fa-light fa-user"></i></span>
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="tp-contact-details-form-input mb-20">

                                             <span><i class="fa-sharp fa-light fa-circle-info"></i></span>
                                             <input type="text" placeholder="Your Subject">
                                          </div>
                                       </div>
                                       <div class="col-lg-12">
                                          <div class="tp-contact-details-form-input mb-20">
                                             <textarea name="Message" placeholder="Write Your Message"></textarea>
                                             <span><i class="fa-light fa-pen"></i></span>
                                          </div>
                                       </div> -->
                                    <div class="col-lg-12">
                                        <div class="tp-contact-details-form-btn">
                                            <button class="tp-btn" fdprocessedid="ydpv3j">Send a Message</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </main>
@endsection
