@extends('layouts/frontLayout/front_design')
@section('content')

    <!-- about section ending here -->
    <section class="section-padding bg-dark inner-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="mt-0 mb-3 text-white">{{ $cmsPageDetails->title }}</h1>
                    <div class="breadcrumbs">
                        <p class="mb-0 text-white"><a class="text-white" href="{{ url("/") }}">Home</a>  /  <span class="text-success">{{ $cmsPageDetails->title }}</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- End Inner Header -->

      <!-- About -->
      <section class="section-padding bg-white">
         <div class="container">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 pl-5 pr-5 list-style">
                  {!! $cmsPageDetails->description !!}
               </div>
            </div>
         </div>
      </section>
    <!-- End About -->

@endsection