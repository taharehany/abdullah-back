<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Abdullah</title>
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="Taha">
   <meta property="og:title" content="">
   <meta property="og:type" content="">
   <meta property="og:url" content="">
   <meta property="og:image" content="">
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}">
   <!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.min.js"></script><![endif]-->
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">
   <link rel="stylesheet" href="{{ asset('front/css/plugins.css') }}">
   <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
   <style>
      section.single-portfolio .content .box-image {
         height: 300px;
         background-color: red;
      }
   </style>
</head>

<body>
   <div class="main-wrapper">
      <!--header-->
      <header>
         <!--navbar desktop-->
         <nav class="navbar main-nav navbar-expand-lg">
            <div class="container">
               <div class="content">
                  <a class="navbar-brand" href="/">
                     <div class="logo">
                        <img class="light img-fluid" src="{{ asset(settings()->small_logo) }}" alt="alt">
                        <img class="dark img-fluid" src="{{ asset(settings()->small_logo_dark) }}" alt="alt">
                     </div>
                  </a>
                  <div class="collapse navbar-collapse" id="navbarNav">
                     <ul class="navbar-nav">
                        <li class="nav-item {{ (request()->is('portfolio')) ? 'active' : '' }}">
                           <a class="nav-link" aria-current="page" href="{{ route('portfolio') }}">portfolio</a>
                        </li>
                        <li class="nav-item {{ (request()->is('about')) ? 'active' : '' }}">
                           <a class="nav-link" href="{{ route('about') }}">about me&contacts</a>
                        </li>
                     </ul>
                  </div>
                  <div class="group">
                     <div class="mobile-menu-icon" id="mobile-menu-icon">
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"><i class="fa-solid fa-bars"></i></button>
                     </div>
                     <div class="social-media">
                        <a href="{{ settings()->behance }}"><i class="fa-brands fa-behance"> </i></a>
                        <a href="mailto:{{ settings()->email1 }}" style="color: #FF0000"><i class="fa-solid fa-envelope"> </i></a>
                        <a href="https://wa.me/{{ settings()->whatsapp }}" style="color: #3DDE5A"><i class="fa-brands fa-whatsapp"> </i></a>
                     </div>
                  </div>
               </div>
            </div>
         </nav>
         <!--navbar desktop-->

         <!--menu in mobile only-->
         <div class="offcanvas offcanvas-top" id="offcanvasTop" tabindex="-1" aria-labelledby="offcanvasTopLabel">
            <div class="mobile-menu">
               <div class="content-mobile">
                  <div class="logo">
                     <a href="/">
                        <img class="img-fluid" src="{{ asset('front/images/header-logo.svg') }}" alt="alt">
                     </a>
                  </div>
                  <div class="links">
                     <a href="{{ route('portfolio') }}">portfolio </a><a href="{{ route('about') }}">about me<span class="separ">&</span>contacts</a>
                  </div>
                  <div class="social-media">
                     <a href="{{ settings()->behance }}"><i class="fa-brands fa-behance"> </i></a>
                     <a href="mailto:{{ settings()->email1 }}" style="color: #FF0000"><i class="fa-solid fa-envelope"> </i></a>
                     <a href="https://wa.me/{{ settings()->whatsapp }}" style="color: #3DDE5A"><i class="fa-brands fa-whatsapp"></i></a>
                  </div>
               </div>
               <div class="close" id="close-menu">
                  <button type="button" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
               </div>
            </div>
         </div>
      </header>
      <!--header-->
