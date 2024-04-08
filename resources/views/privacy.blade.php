@extends('layout.app')
@section('content')

<main>

    <!-- breadcrumb-area-start -->
    <section class="breadcrumb-area breadcrumb-wrap">
       <div class="breadcrumb-bg" data-background="assets/img/breadcrumb/breadcrumb-bg-1.jpg"></div>
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
       <div class="container">

          <div class="postbox-content">

             <h4 class="postbox-title"> Welcome to DevLoops Solutions!</h4>
             <div class="postbox-text">
                <p class="text-black">This Privacy Policy outlines how DevLoops Solutions collects, uses, maintains, and discloses information collected from users of the DevLoops Solutions website, located at devloops.in.</p>

             </div>

             <h4 class="postbox-title">How We Use Collected Information</h4>
             <div class="postbox-text">

                <ul>
                <li class="text-black">
                  <span style="color: #ff0080;"> To improvice</span>: ve customer serInformation you provide helps us respond to your customer service requests and  more efficiently.</li>
                  <li class="text-black">
                   <span style="color: #ff0080;">To personalize user experience </span>:  We may use information in the aggregate to understand how our users as a group use the services .</li>

                      <li class="text-black">
                       <span style="color: #ff0080;"> To improve our site</span>: We may use feedback you provide to improve our products and services.</li>

              </ul>
             </div>
          </div>
          <h4 class="postbox-title">How We Protect Your Information</h4>
          <p class="text-black">We adopt appropriate data collection, storage, and processing practices and security measures to protect against unauthorized access, alteration, disclosure, or destruction of your personal information, username, password, transaction information, and data stored on our site.

          </p>
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
          <h4 class="postbox-title">Sharing Your Personal Information</h4>
          <p class="text-black">We do not sell, trade, or rent users' personal identification information to others. We may share generic aggregated demographic information not linked to any personal identification information regarding visitors and users with our business partners, trusted affiliates, and advertisers for the purposes outlined above.

          </p>
          <h4 class="postbox-title">Changes to this Privacy Policy</h4>
          <p class="text-black">DevLoops Solutions has the discretion to update this privacy policy at any time. When we do, we will revise the updated date at the bottom of this page. We encourage users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect.

          </p>
       </div>
    </section>
    <!-- postbox area end -->

 </main>

@endsection
