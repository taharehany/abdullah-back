@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!--single portfolio-->
<section class="single-portfolio">
    <div class="container">
        <div class="main-title">
            <h2>Lince tech branding</h2>
            <p>ABOUT : When it comes to the quality of the fence system, you are in the right place with Lince UG. We are a company that specializes in individual solutions in the field of slat and industrial fences Our most requested products are high-quality design fences made of lamellar aluminium.</p>
            <p>Mission : Our mission was to rebuild the brand to suit the modern time and also to suit the company's modern trends and its new distinguished services.</p>
        </div>
        <div class="content">
            <div class="row">

            @if(count($project->Details))
                @foreach ($project->Details as $img)
                <div class="{{(is_mobile()) ? 'col-'.$img->mobile_col:'col-md-'.$img->desktop_col }} box">
                    <a class="box-image" data-src="{{ asset($img->image) }}" href="" data-fancybox="demo">
                        <img class="img-fluid" src="{{ asset($img->image) }}" alt="alt">
                    </a>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
<!--single portfolio-->
@endsection
