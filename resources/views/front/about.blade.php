@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!--about me-->
<section class="about">
   <div class="container">
      <div class="content">
         <div class="row">
            <div class="col-md-6">
               <div class="text">
                  <h1>about me</h1>
                  <p>{{ $aboutme->description }}</p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="icon"><img src="{{ asset($aboutme->image) }}" alt="alt"></div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--about me -->
<!--download cv-->
<section class="cv">
   <div class="container">
      <div class="content">
         <div class="main-title">
            <h2>you can download my cv from here</h2>
         </div>
         <div class="icon"><img class="img-fluid" src="{{ asset('front/images/icons/pdf.svg') }}" alt="alt"></div>
         <div class="button"><a class="btn" href="{{ settings()-> cv }}">cv<img class="img-fluid" src="{{ asset('front/images/icons/download.svg') }}" alt="alt"></a></div>
      </div>
   </div>
</section>
<!--download cv-->
<!--reason behind-->
<section class="reason-behind">
   <div class="container">
      <div class="content">
         <div class="main-title">
            <h2>{{ $reason->title }}</h2>
         </div>
         <div class="image"><img class="img-fluid" src="{{ asset($reason->image) }}" alt="alt"></div>
         <div class="text">
            <p>{{ $reason->description }}</p>
         </div>
      </div>
   </div>
</section>
<!--reason behind-->
<!--links-->
<section class="links">
   <div class="container">
      <div class="content">
         <div class="main-title">
            <h2>links<img class="img-fluid" src="{{ asset('front/images/icons/link.svg') }}" alt=""></h2>
         </div>
         <div class="text">
            <p>Here are links to some of my social media platforms. You can find me on any of these platforms and contact me if you would like to work with me on your next project and inquire about prices for the services I provide</p>
         </div>
         <div class="social-media">
            <a href="{{ settings()->behance }}"><i class="fa-brands fa-behance"> </i></a>
            <a href="mailto:{{ settings()->email1 }}"><i class="fa-solid fa-envelope"> </i></a>
            <a href="{{ settings()->facebook }}"><i class="fa-brands fa-facebook"> </i></a>
            <a href="{{ settings()->instagram }}"><i class="fa-brands fa-instagram"> </i></a>
            <a href="https://wa.me/{{ settings()->whatsapp }}"><i class="fa-brands fa-whatsapp"> </i></a>
         </div>
      </div>
   </div>
</section>
<!--links-->

<!--contacts-->
<section class="contacts">
   <div class="container">
      <div class="content">
         <div class="main-title">
            <h2>contacts </h2>
            <p>My personal numbers and emails, if you want to contact me there, I am always there for you</p>
         </div>
         <div class="info">
            <div class="box">
               <a href="tel:{{ settings()->mobile1 }}"> <i class="fa-solid fa-phone-flip"> </i>
                  <span>{{ settings()->mobile1 }}</span></a>
            </div>
            <div class="box">
               <a href="mailto:{{ settings()->email1 }}"> <i class="fa-solid fa-envelope"> </i>
                  <span>{{ settings()->email1 }}</span></a>
            </div>
            <div class="box">
               <a href="tel:{{ settings()->mobile2 }}"> <i class="fa-solid fa-phone-flip"> </i>
                  <span>{{ settings()->mobile2 }}</span></a>
            </div>
            <div class="box">
               <a href="mailto:{{ settings()->email2 }}"> <i class="fa-solid fa-envelope"> </i>
                  <span>{{ settings()->email2 }}</span></a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--contacts-->
@endsection
