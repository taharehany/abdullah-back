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
            <div class="box">
                <div class="box-icon"><img class="img-fluid" src="{{ asset('front/images/can/01.svg') }}" alt="alt"></div>
                <div class="box-title">
                    <h3>ui design</h3>
                </div>
                <div class="box-description">
                    <p>The best designs related to the user interface with more than a year of experience and the number of designs for more than five sites.</p>
                </div>
            </div>
            <div class="box">
                <div class="box-icon"><img class="img-fluid" src="{{ asset('front/images/can/02.svg') }}" alt="alt"></div>
                <div class="box-title">
                    <h3>branding</h3>
                </div>
                <div class="box-description">
                    <p>The best solutions for companies with more than three years of experience in designing visual identities and branding.</p>
                </div>
            </div>
            <div class="box">
                <div class="box-icon"><img class="img-fluid" src="{{ asset('front/images/can/03.svg') }}" alt="alt"></div>
                <div class="box-title">
                    <h3>social media design</h3>
                </div>
                <div class="box-description">
                    <p>The best solutions for companies with more than three years of experience in social media designs.</p>
                </div>
            </div>
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
                @foreach ($projects as $project)
                <div class="col-lg-3 col-md-4">
                    <div class="box">
                        <div class="box-image"><img class="img-fluid" src="{{ asset($project->main_image) }}" alt="alt"></div>
                        <div class="box-title"><a href="{{ route('portfolio.show', $project->id) }}">
                                <h3>{{ $project->title }}<img src="{{ asset('front/images/icons/arrow.svg') }}" alt=""></h3>
                            </a></div>
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
            <p>I have spent three years of my life learning and developing my graphic design career Graphic design helped me a lot in finding myself renewing my passion for art and everything related to it since my childhood I love drawing, colors and nature, besides my special love for engineering graphics And abstract graphics . Since then, I have dreamed of doing anything related to art and I found that in my work as a graphic designer and user interface designer.</p>
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
