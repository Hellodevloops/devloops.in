@extends('layout.app')
@section('content')
<main>

    <!-- breadcrumb-area-start -->
    <section class="breadcrumb-area breadcrumb-wrap">
       <div class="breadcrumb-bg" data-background="{{ asset('assets/img/privacypolicy1.jpg')}}"></div>
       <div class="container">
          <div class="row align-items-center">
             <div class="col-12">
                <div class="tpbreadcrumb">
                   <div class="breadcrumb-link mb-15">
                      <span class="breadcrumb-item-active"><a href="{{ route('/') }}">Home</a></span>
                      <span> / Privacy Policy</span>
                   </div>
                   <h2 class="breadcrumb-title"> Privacy Policy</h2>
                </div>
             </div>
          </div>
       </div>

    </section>
    <!-- breadcrumb-area-end -->

    <!-- postbox area start -->
    <section class="postbox__area pt-40 pb-105">
       <div class="container" style="border:  2px solid rgb(226, 224, 224);border-radius: 20px; padding: 50px;">

          <div class="postbox-content">

             <h4 class="postbox-title"> Privacy & Policy</h4>
             <div class="postbox-text">
                <p class="text-black">Thank you for using our products and services. The Services are provided by Devloops International.</p>

                <p class="text-black">By using our Services, you are agreeing to these terms. Please read them carefully.</p>

                <p class="text-black">Our Services are very diverse, so sometimes additional terms or product requirements may apply. Additional terms will be available with the relevant Services, and those additional terms become part of your agreement with us if you use those Services.</p>


             <h5 class="postbox-title">Using Our Services</h5>
             <p class="text-black">By accessing and utilizing Devloops International services, you are bound by the following policies.</p>
             <p class="text-black">Users must comply with all policies made available within our services.</p>
             <p class="text-black">Do not misuse our services. Do not interfere with the services or attempt to access them using methods other than our provided interface and instructions. Usage must adhere to applicable laws, including export and re-export control laws. We reserve the right to suspend or terminate services if terms, policies, or suspected misconduct are violated.</p>
             <p class="text-black">Use of our services does not grant ownership of any intellectual property rights. Users may not use content from our services without permission or unless permitted by law. Branding or logos used in our services may not be used without authorization. Legal notices displayed must not be removed, obscured, or altered.</p>
             {{-- <div class="postbox-text">

                <ul>
                <li class="text-black">
                  <span style="color: #ff0080;"> Personal Information</span>: Such as your name, email address, phone number, and other contact details that you voluntarily provide to us.</li>

              </ul>
             </div> --}}


          <h5 class="postbox-title">Privacy and Copyright Protection</h5>
          <p class="text-black">Devloops International values your privacy and ensures copyright protection.</p>
          <p class="text-black">Our privacy policies dictate how personal data is treated and privacy is protected. By using our services, users agree to the utilization of data in accordance with our privacy policies.</p>
          <p class="text-black">We respond to notices of alleged copyright infringement and terminate accounts of repeat infringers as per the U.S. Digital Millennium Copyright Act.</p>
          <p class="text-black">We provide information to assist copyright holders in managing their intellectual property online. If you believe someone is violating your copyrights, refer to our Help Center for information on submitting notices and our response policies.</p>


          <h5 class="postbox-title">Your Content in Our Services</h5>
          <p class="text-black">Devloops International respects your ownership of content.</p>
          <p class="text-black">Users retain ownership of intellectual property rights in the content they upload, submit, store, send, or receive through our services.</p>
          <p class="text-black">By using our services, users grant Devloops International a worldwide license to use, host, store, reproduce, modify, create derivative works, communicate, publish, publicly perform, publicly display, and distribute such content. This license is for the limited purpose of operating, promoting, improving our services, and developing new ones. It persists even if users stop using our services. Some services may offer ways to access and remove content. Users must ensure they have necessary rights to grant this license for any content submitted.</p>
        </div>
          <!-- <div class="postbox-blockquote">
             <blockquote>
                <div class="postbox-blockquote-thumb">
                  <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="#ff0080" class="bi bi-quote" viewBox="0 0 16 16">
                      <path d="M12 12a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1h-1.388q0-.527.062-1.054.093-.558.31-.992t.559-.683q.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 9 7.558V11a1 1 0 0 0 1 1zm-6 0a1 1 0 0 0 1-1V8.558a1 1 0 0 0-1-1H4.612q0-.527.062-1.054.094-.558.31-.992.217-.434.559-.683.34-.279.868-.279V3q-.868 0-1.52.372a3.3 3.3 0 0 0-1.085.992 4.9 4.9 0 0 0-.62 1.458A7.7 7.7 0 0 0 3 7.558V11a1 1 0 0 0 1 1z"/>
                    </svg>
                </div>
                <div class="postbox-blockquote-content">
                   <h4>And the day came when the risk to remain tight in a bud was more painful than the risk.</h4>

                </div>
             </blockquote>
          </div> -->



       </div>
       </div>
    </section>
    <!-- postbox area end -->

 </main>
@endsection
