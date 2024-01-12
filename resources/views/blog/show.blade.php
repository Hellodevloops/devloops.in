@extends('layout.app')
@section('content')
    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">


        <!-- Content -->
        <div class="container content-space-t-3  content-space-t-lg-4 content-space-b-2 ">
            <div class="bg-soft-primary content-space-1 content-space-lg-1  rounded-3"
                style="background-image: url(assets/svg/components/wave-pattern-light.svg);">
                <div class="w-lg-100 mx-lg-auto">


                    <div class="row align-items-sm-center ms-5">
                        <div class="col-lg-8 col-sm-7 mb-4 mb-sm-0">

                            <h1 class="h2 text-navy-blue">{{$post->title}}</h1>

                        </div>
                        <div class="col-lg-4 col-sm-7 mb-4 mb-sm-0">
                            <!-- Media -->
                            <div class="d-flex align-items-center">
                                
                                <div class="flex-grow-1 mt-1 ms-3">
                                    <a class="text-primary">{{$post->author_id->name}}</a>
                                    <p class="card-text small text-navy-blue    ">{{$post->created_at->format('M,d Y')}}</p>
                                </div>
                            </div>
                            <!-- End Media -->
                        </div>
                        <!-- End Col -->

                        <!-- End Col -->
                    </div>
                    <!-- End Row -->

                </div>
            </div>

            <div class="w-md-85 w-lg-100 text-center mx-md-auto mb-5 mb-md-9 content-space-t-2">
                <img class="img-fluid rounded"
                    src="{{$post->hero}}"
                    alt="Image" style="">
            </div>

            <div class="w-lg-100 mx-lg-auto text-dark ">
              {!!$post->body!!}
            </div>

        </div>
        <!-- End Content -->

        <!-- Testimonials -->

        <!-- End Testimonials -->


    </main>
    <!-- ========== END MAIN CONTENT ========== -->
@endsection
