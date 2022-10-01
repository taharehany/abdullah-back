@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!--hero-->
<section class="hero">
   <div class="container">
      <div class="content">
         <div class="logo"><img class="img-fluid" src="{{ asset('front/images/logo.svg') }}" alt="alt"></div>
         <div class="button"><a class="btn" href="{{ route('about') }}">about me</a></div>
      </div>
   </div>
</section>
<!--hero-->

<!--what can-->
<section class="what-can">
   <div class="container">
      <div class="main-title">
         <h2>what <img src="{{ asset('front/images/abdullah.svg') }}" alt="alt">can do</h2>
      </div>
      <div class="content">
         @foreach ($cando as $can)
         <div class="box">
            <div class="box-icon"><img class="img-fluid" src="{{ asset($can->image) }}" alt="alt"></div>
            <div class="box-title">
               <h3>{{ $can->title }}</h3>
            </div>
            <div class="box-description">
               <p>{{ $can->description }}</p>
            </div>
         </div>
         @endforeach
      </div>
      <div class="works-title">
         <h2>some of my works:</h2>
      </div>
   </div>
</section>
<!--what can-->

<!--works-->
<section class="works">
   <div class="container">
      <div class="content">
         <div class="row">
            @foreach ($branding as $project)
            <div class="col-lg-3 col-md-4" style="order: {{ $project->project_order }}">
               <div class="box">
                  <div class="box-image">
                     <img class="img-fluid" src="{{ asset($project->main_image) }}" alt="alt">
                  </div>
                  <a href="{{ route('portfolio.show', $project->id) }}">
                     <div class="box-title">
                        <h3>{{ $project->title }}<img src="{{ asset('front/images/icons/arrow.svg') }}" alt=""></h3>
                     </div>
                  </a>
               </div>
            </div>
            @endforeach

            @foreach ($social as $project)
            <div class="col-lg-3 col-md-4" style="order: {{ $project->project_order }}">
               <div class="box">
                  <div class="box-image">
                     <img class="img-fluid" src="{{ asset($project->main_image) }}" alt="alt">
                  </div>
                  <a href="{{ route('portfolio.show', $project->id) }}">
                     <div class="box-title">
                        <h3>{{ $project->title }}<img src="{{ asset('front/images/icons/arrow.svg') }}" alt=""></h3>
                     </div>
                  </a>
               </div>
            </div>
            @endforeach
         </div>
         <div class="button"><a class="btn" href="{{ route('portfolio') }}">see all</a></div>
      </div>
   </div>
</section>
<!--works-->

<!--about me-->
<section class="about-me">
   <div class="container">
      <div class="main-title">
         <h2>about me</h2>
         <p>{{ $aboutme->description }}</p>
      </div>
      <div class="content">
         <div class="row">
            <div class="col-lg-4">
               <div class="box">
                  <div class="box-icon"><img class="img-fluid" src="{{ asset('front/images/about/01.png') }}" alt="alt"></div>
                  <div class="box-title">
                     <h3> <span>+3 </span>years ofexperience</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="box">
                  <div class="box-icon"><img class="img-fluid" src="{{ asset('front/images/about/02.png') }}" alt="alt"></div>
                  <div class="box-title">
                     <h3>more than <span>+30 </span>client</h3>
                  </div>
               </div>
            </div>
            <div class="col-lg-4">
               <div class="box">
                  <div class="box-icon"><img class="img-fluid" src="{{ asset('front/images/about/03.png') }}" alt="alt"></div>
                  <div class="box-title">
                     <h3>about <span>+20 </span>completed project</h3>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--about me-->

<!--call to action-->
<section class="cta">
   <div class="container">
      <div class="content">
         <div class="main-title"><img class="img-fluid" src="{{ asset('front/images/icons/ok.png') }}" alt="alt">
            <h2>what about working with you on your project?</h2>
            <p>together we will reach the best solutions and results</p>
         </div>
         <div class="button"><a class="btn" href="{{ route('about') }}">contacts</a></div>
      </div>
   </div>
</section>
<!--call to action-->
@endsection
