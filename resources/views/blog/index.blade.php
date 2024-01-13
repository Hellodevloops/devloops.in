@extends('layout.app')
@section('content')
<!-- ========== MAIN CONTENT ========== -->
<div class="container content-space-b-2 content-space-b-lg-3 mt-11 content-space-t-2">
    <!-- Heading -->
    <div class="w-md-75 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
      <h2>Related stories</h2>
    </div>
    <!-- End Heading -->

    <div class="row">
        @foreach($posts as $post)
      <div class="col-sm-6 col-md-4 mb-5 mb-md-0">
        <!-- Card -->
        <div class="card ">
          <img class=" img-blog" src="{{$post->hero}}" alt="Image Description">

          <div class="card-body">
           
             <!-- Card title -->
             <h2> <a class="text-dark" href="{{route('blog.show', $post->slug)}}">{{$post->title}}</a> </h2>    
            <p class="card-text pt-3 para-line ">{{$post->description}} </p>
                
          </div>

          <div class="card-footer pt-0">
            {{-- <a class="text-dark">Read story <i class="bi-chevron-right small ms-1"></i></a> --}}
            <div class="d-flex">
            
                <div class="flex-grow-1 ms-3">
                  {{-- @php
                    dd($post->author_id->name)
                  @endphp --}}
                  <a class="card-link link-dark" href="./blog-author-profile.html">{{ $post->author_id->name }}</a>
                  <p class="card-text small">{{ $post->created_at->format('M d, Y') }}</p>

                </div>
              </div>
          </div>
        </div>
        <!-- End Card -->
      </div>
      <!-- End Col -->
      @endforeach
    </div>
    <!-- End Row -->
  </div>
@endsection
