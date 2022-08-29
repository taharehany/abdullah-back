@extends('admin.layouts.master')

@section('content')
<div class="main-content">
   <div class="global-area mtb">
      <div class="container-fluid">
         <div class="form show-page">
            <form>
               <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>title</label>
                        <input class="form-control" type="text" name="title" placeholder="" value="{{ old('title', $data->title) }}" readonly>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>description</label>
                        <textarea class="form-control" name="description" placeholder="" required="" rows="5" readonly>{{ old('description', $data->description) }}</textarea>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>about</label>
                        <textarea class="form-control" name="about" placeholder="" required="" rows="5" readonly>{{ old('about', $data->about) }}</textarea>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>mission</label>
                        <textarea class="form-control" name="mission" placeholder="" required="" rows="5" readonly>{{ old('mission', $data->mission) }}</textarea>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>type</label>
                        <input class="form-control" type="text" name="type" placeholder="" value="{{ old('type', $data->type) }}" readonly>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label>main image</label>
                  <div class="row">
                     <div class="col-3 box">
                        <img class="img-fluid box-image" src="{{ asset($data->main_image) }}" alt="alt">
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label>all images</label>
                  <div class="row">
                     @if(count($data->Details))
                     @foreach ($data->Details as $img)
                     <div class="col-3 box">
                        <img class="img-fluid box-image" src="{{ asset($img->image) }}" alt="alt">
                     </div>
                     @endforeach
                     @endif
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
@endsection
