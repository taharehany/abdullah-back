@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!--branding portfolio-->
<section class="branding-portfolio">
    <div class="container">
        <div class="main-title">
            <h2>branding portfolio</h2>
            <p>My branding portofolio has a lot of visual identities and brand strategies for several companies around the world.</p>
        </div>
        <div class="content">
            @foreach ($projects as $project)
            @if ($project->type == 'branding')
            <div class="box"><a href="{{ route('portfolio.show', $project->id) }}">
                    <div class="box-image"><img class="img-fluid" src="{{ asset($project->main_image) }}" alt="alt"></div>
                </a>
                <div class="box-title"><a href="single-portfolio.html">
                        <h3>{{ $project->title }}</h3>
                    </a></div>
                <div class="box-description">
                    <p>{{ $project->description }}</p>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!--branding portfolio-->
<!--social media portfolio-->
<section class="social-media-portfolio">
    <div class="container">
        <div class="main-title">
            <h2>social media portfolio</h2>
            <p>My Social media portofolio has a lot of social media designs for several companies around the world.</p>
        </div>
        <div class="content">
            @foreach ($projects as $project)
            @if ($project->type == 'social_media')
            <div class="box"><a href="single-portfolio.html">
                    <div class="box-image"><img class="img-fluid" src="{{ asset($project->main_image) }}" alt="alt"></div>
                </a>
                <div class="box-title"><a href="single-portfolio.html">
                        <h3>here is title</h3>
                    </a></div>
                <div class="box-description">
                    <p>The best designs related to the user interface with more than a year of experience and the number of designs for more than five sites.</p>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!--social media portfolio-->
<!--ui ux portfolio-->
<section class="web-portfolio">
    <div class="container">
        <div class="main-title">
            <h2>UI UX design portfolio</h2>
            <p>Here you will find some websites that I have designed and uploaded on the Internet that you can check out through their website</p>
        </div>
        <div class="content">
            @foreach ($projects as $project)
            @if ($project->type == 'ui_ux_design')
            <div class="box"><a href="single-portfolio.html">
                    <div class="box-image"><img class="img-fluid" src="{{ asset($project->main_image) }}" alt="alt"></div>
                </a>
                <div class="box-title"><a href="single-portfolio.html">
                        <h3>here is title</h3>
                    </a></div>
                <div class="box-description">
                    <p>The best designs related to the user interface with more than a year of experience and the number of designs for more than five sites.</p>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
<!--ui ux portfolio-->
@endsection
