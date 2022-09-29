@extends('front.layouts.master')
@section('title')

@endsection
@section('content')
<!--single portfolio-->
<section class="single-portfolio">
   <div class="container">
      <!-- <div class="main-image">
         <a class="box-image" data-src="{{ asset($project->main_image) }}" href="" data-fancybox="demo">
            <img class="img-fluid" src="{{ asset($project->main_image) }}" alt="alt">
         </a>
      </div> -->
      <div class="main-title">
         <h2>{{ $project->title }}</h2>
         <p>ABOUT: {{ $project->description }}</p>
         <p>Mission: {{ $project->mission }}</p>
      </div>
      <div class="content">
         <div class="row">
            @if(count($project->Details))
            @foreach ($project->Details as $img)
            <!-- <div class="{{(is_mobile()) ? 'col-'.$img->mobile_col:'col-md-'.$img->desktop_col }} box"> -->
            <div class="col-{{$img->mobile_col}} col-md-{{$img->desktop_col}} box" style="order: {{ $img->order }}">
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
