@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
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
                    <p class="text-black">These terms and conditions outline the rules and regulations for the use of DevLoops Solutions's Website, located at devloops.in.</p>
                    <p class="text-black">Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website. DevLoops Solutions does not filter, edit, publish, or review Comments prior to their presence on the website.</p>


                 </div>

                 <h4 class="postbox-title"> We may consider and approve other link requests from the following types of organizations</h4>
                 <div class="postbox-text">

                    <ul>
                    <li class="text-black">
                       commonly-known consumer and/or business information sources</li>
                     <li class="text-black">  dot.com community sites;</li>
                     <li class="text-black">  Associations or other groups representing charities;</li>
                       <li class="text-black">  Online directory distributors;</li>
                          <li class="text-black">  Internet portals;</li>
                             <li class="text-black">  Accounting, law, and consulting firms</li>
                                <li class="text-black"> Educational institutions and trade associations.</li>
                    </li>
                  </ul>
                 </div>
              </div>
              <h4 class="postbox-title">Our Personal Approach</h4>
              <p class="text-black">At DevLoops Solutions, we pride ourselves on our personal approach to serving our clients. Our commitment to providing exceptional service goes beyond just offering software solutions. We strive to build meaningful relationships with each of our clients, understanding their unique needs, challenges, and goals.

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
              <h4 class="postbox-title">Changes to the Terms and Conditions</h4>
              <p class="text-black">DevLoops Solutions reserves the right to modify these terms and conditions at any time. It is your responsibility to review these terms and conditions periodically for changes. Your continued use of this website following the posting of changes constitutes acceptance of those changes.

              </p>
           </div>
        </section>
        <!-- postbox area end -->

     </main>

@endsection
