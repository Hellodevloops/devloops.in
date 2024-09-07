@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main>

        <!-- breadcrumb-area-start -->
        <section class="breadcrumb-area breadcrumb-wrap">
           <div class="breadcrumb-bg" data-background="{{ asset('assets/img/termsandconditionnew1.jpg')}}"></div>
           <div class="container">
              <div class="row align-items-center">
                 <div class="col-12">
                    <div class="tpbreadcrumb">
                       <div class="breadcrumb-link mb-15">
                          <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                          <span> / Terms And Condition</span>
                       </div>
                       <h2 class="breadcrumb-title">Terms And Condition</h2>
                    </div>
                 </div>
              </div>
           </div>

        </section>
        <!-- breadcrumb-area-end -->

        <!-- postbox area start -->
        <section class="postbox__area pt-40 pb-105">
           <div class="container">

              <div class="postbox-content">

                 <h4 class="postbox-title"> Welcome to DevLoops Solutions!</h4>
                 <div class="postbox-text">
                    <p class="text-black">Welcome to DevLoops International! These Terms and Conditions ("Terms") govern your use of our website, products, and services. By accessing or using any part of our website or engaging with our products and services, you agree to comply with these Terms. Please read them carefully before proceeding.</p>
                    <p class="text-black">1. <span class="text-pink">	Acceptance of Terms </span> By accessing or using our website, products, or services, you agree to be bound by these Terms and our Privacy Policy. If you do not agree with any part of these Terms, you may not access or use our website or services.</p>
                    <p class="text-black">2. <span class="text-pink"> Use of Website and Services </span>	: You may use our website and services for lawful purposes only and in accordance with these Terms. You agree not to use our website or services for any unlawful or prohibited activities, including but not limited to:</p>

                 </div>
                 <!-- <h4 class="postbox-title"> We may consider and approve other link requests from the following types of organizations</h4> -->
                 <div class="postbox-text">

                    <ul>
                    <li class="text-black">
                        Violating any applicable laws, regulations, or third-party rights.</li>
                     <li class="text-black"> Engaging in fraudulent or deceptive activities.</li>
                     <li class="text-black">Interfering with the operation of our website or services or attempting to gain unauthorized access to our systems.</li>

                  </ul>
                 </div>

                 <p class="text-black">3.	 <span class="text-pink"> Intellectual Property Rights</span>: All content, trademarks, logos, and other intellectual property displayed on our website or included in our products and services are the property of DevLoops International or its licensors and are protected by copyright, trademark, and other laws. You may not use, reproduce, modify, or distribute any such content without our prior written consent.</p>
                 <p class="text-black">4.  <span class="text-pink"> Disclaimer of Warranties </span>: Our website, products, and services are provided on an "as is" and "as available" basis, without any warranties of any kind, either express or implied. We do not warrant that our website or services will be uninterrupted, error-free, or free from viruses or other harmful components.</p>

                 <p class="text-black"> 5.		 <span class="text-pink">Limitation of Liability</span>: To the fullest extent permitted by law, DevLoops International shall not be liable for any direct, indirect, incidental, special, consequential, or punitive damages arising out of or in connection with your use of our website, products, or services, even if we have been advised of the possibility of such damages.</p>
                 <p class="text-black">6.  <span class="text-pink">	Governing Law and Jurisdiction</span>: These Terms shall be governed by and construed in accordance with the laws of the State of Gujarat and the Indian legal system. Any dispute arising out of or in connection with these Terms shall be subject to the exclusive jurisdiction of the courts of the State of Gujarat and the Indian legal system.</p>

                 <p class="text-black">7.  <span class="text-pink">	Modification of Terms</span>: We reserve the right to modify or update these Terms at any time without prior notice. Any changes will be effective immediately upon posting on our website. Your continued use of our website or services after any such changes indicates your acceptance of the updated Terms.</p>

              </div>

              <p class="text-black">Thank you for choosing DevLoops International. We appreciate the opportunity to serve you and look forward to providing you with exceptional products and services.</p>

           </div>
        </section>
        <!-- postbox area end -->

     </main>
 @endsection
