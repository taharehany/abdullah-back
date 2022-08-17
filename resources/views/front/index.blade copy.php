@extends('front.layouts.master')
@section('title')
    {{ setting()->name }}
@endsection
@section('content')
    <!--main slider-->
    <section class="main-slider">
        <div class="main-slider-carousel owl-carousel owl-theme">
            @foreach ($sliders as $slider)
                <div class="slider-item">
                    <div class="container h-100">
                        <div class="item-content">
                            <div class="item-text">
                                <p>{!! $slider->description !!}</p>
                                <h1 class="title">{{ $slider->name }} </h1>
                            </div>
                            <div class="item-images">
                                @php
                                    $images = json_decode($slider->image);
                                @endphp
                                @foreach ($images as $image)
                                    <img data-src="{{ asset($image) }}" alt="{{$slider->name.' iamge '.$loop->index}}">
                                @endforeach
                            </div>
                            <div class="item-btn"><a class="btn" href="{{ route('about') }}" aria-label="more">معرفة
                                    المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!--main slider-->
    <!--search-->
    @include('front.components.home_search')
    <!--search-->
    <!--welcome-->
    @include('front.components.welcome')
    <!--welcome-->
    <!--cta-->
    <section class="cta">
        <div class="content">
            <div class="image"><img data-src="{{ asset('front/images/welcome/car1.jpg') }}" alt="Car 1"></div>
            <div class="call">
                <div class="icon"><img data-src="{{ asset($question->image) }}" alt=" Question Image"></div>
                <div class="text">
                    <p>{{ $question->name }}</p>
                    <a href="tel:{{ $question->description }}" dir="ltr">{{ $question->description }}</a>
                </div>
            </div>
            <div class="image"><img data-src="{{ asset('front/images/welcome/car2.jpg') }}" alt=" Car 2"></div>
        </div>
    </section>
    <!--cta-->
    <!--feature-->
    <section class="feature">
        <div class="container">
            <div class="main-title"><span class="top-title">تحقق من سياراتنا المميزة</span>
                <h2>سيارات مميزة</h2>
                <div class="separator"></div>
            </div>
            <div class="content">
                <div class="feature-carousel owl-carousel owl-theme">
                    @foreach ($featured_cars as $car)
                        <div class="feature-box">
                            <div class="image"><img class="img-fluid" data-src="{{ asset($car->image) }}" alt="{{'Featured Car '.$loop->index.' Image'}}">
                                <div class="overlay">
                                    <div class="icons"><a href="{{ asset($car->image) }}"
                                            data-fancybox="gallery" data-toggle="tooltip" data-placement="top" title="عرض" aria-label="عرض">
                                            <i class="bi bi-arrows-fullscreen"></i></a><a
                                            href="{{ route('single-car', $car->id) }}" data-toggle="tooltip"
                                            data-placement="top" title="تفاصيل السيارة"> <i
                                                class="bi bi-link-45deg" aria-label="{{'Featured Car '.$loop->index}}" role="list"></i></a></div>
                                </div>
                                <ul class="details">
                                    <li> <i class="bi bi-calendar"></i>{{ $car->year }}</li>
                                    <li> <i class="bi bi-speedometer"></i>{{ $car->speed }}</li>
                                </ul>
                            </div>
                            <div class="text"><a href="{{route('single-car',$car->id)}}" aria-label="{{ $car->name }}">
                                    <h3 class="title">{{ $car->name }}</h3>
                                </a>
                                <div class="separator"></div>
                                <p class="price">{{ $car->price }}<sup>ر.س</sup></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--feature-->
    <!--offer-->
    <section class="offer">
        <div class="container-fluid">
            <div class="content">
                <div class="row">
                    <div class="col-lg-6 p-0">
                        <div class="offer-text">
                            <h3 class="heading">{{ $offer->name }}</h3>
                            <p class="sub-heading">{{ $offer->description }}</p><strong
                                class="price">{{ $offer->price }}</strong><span
                                class="per">شهريا</span>
                            <p>العرض لفترة محدودة!</p><a href="{{ route('offers') }}" aria-label="more">معرفة المزيد </a>
                        </div>
                    </div>
                    <div class="col-lg-6 p-0">
                        <div class="offer-image"><img class="img-fluid" data-src="{{ asset($offer->image) }}"
                                alt="{{ $offer->name }}"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--offer-->

    <!--recent vehicle-->
    @include('front.components.recent-vehicle')
    <!--recent vehicle-->
    <!--video-->
    @include('front.components.video')
    <!--video-->
    @include('front.components.statistics')
    <!--testimonial-->
    @include('front.components.testimonial')
    <!--testimonial-->
    <!--clients-->
    @include('front.components.clients')
@endsection
