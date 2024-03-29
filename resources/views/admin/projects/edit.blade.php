@extends('admin.layouts.master')

@section('content')
<div class="main-content">
   <div class="global-area mtb">
      <div class="container-fluid">
         <div class="form">
            <form action="{{ route('projects.update',$data->id) }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('put')
               <div class="row">
                  <div class="col-lg-7">
                     <div class="form-group">
                        <label>title</label>
                        <input class="form-control" type="text" name="title" placeholder="title" value="{{ old('title', $data->title) }}" required="">
                     </div>
                  </div>
                  <div class="col-lg-5">
                     <div class="form-group">
                        <label>project order</label>
                        <input class="form-control" type="number" name="project_order" placeholder="project order" value="{{ old('project_order', $data->project_order) }}" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>description</label>
                        <textarea class="form-control" name="description" placeholder="description" required="" rows="5">{{ old('description', $data->description) }}</textarea>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>about</label>
                        <textarea class="form-control" name="about" placeholder="about" required="" rows="5">{{ old('about', $data->about) }}</textarea>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>mission</label>
                        <textarea class="form-control" name="mission" placeholder="mission" required="" rows="5">{{ old('mission', $data->mission) }}</textarea>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>main image</label>
                        <img class="preview" src="{{ asset($data->main_image) }}">
                        <input class="form-control" type="file" name="main_image" accept=".png, .jpg, .jpeg, .svg, .gif">
                     </div>
                  </div>
                  <div class="col-lg-12 mb-5">
                     <div class="form-group">
                        <button id="add_field">+</button>
                     </div>
                  </div>
                  <div class="col-lg-12" id="repeate_container">
                     @if(count($data->Details))
                     @foreach($data->Details as $value)
                     <div class="row repeated">
                        <div class="col-lg-5">
                           <div class="form-group">
                              <label>image</label>
                              <img class="preview" class="preview" src="{{ asset($value->image) }}">
                              <input class="form-control" type="file" value="{{$value->image}}" name="image[{{$value->id}}]" multiple accept=".png, .jpg, .jpeg, .svg, .gif">
                           </div>
                        </div>
                        <div class="col-lg-2">
                           <div class="form-group">
                              <label>image order</label>
                              <input class="form-control" type="number" value="{{ old('order', $value->order) }}" name="order[{{$value->id}}]" placeholder="order" required="">
                           </div>
                        </div>
                        <div class="col-lg-2">
                           <div class="form-group">
                              <label>in desktop (max 12)</label>
                              <input class="form-control" type="number" value="{{ old('desktop_col', $value->desktop_col) }}" min="1" max="12" name="desktop_col[{{$value->id}}]" placeholder="in desktop" required="">
                           </div>
                        </div>
                        <div class="col-lg-2">
                           <div class="form-group">
                              <label>in mobile (max 12)</label>
                              <input class="form-control" type="number" value="{{ old('mobile_col', $value->mobile_col) }}" min="1" max="12" name="mobile_col[{{$value->id}}]" placeholder="in mobile" required="">
                           </div>
                        </div>
                        <div class="col-lg-1">
                           <div class="form-group remove-div">
                              <button type="button" data-item-id="{{$value->id}}" class="remove_field">-</button>
                           </div>
                        </div>
                     </div>
                     @endforeach
                     @endif
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label for="">Select type</label>
                        <select class="form-select" name="type" required="">
                           @if($data->type == 'branding')
                           <option value="branding" selected>branding</option>
                           <option value="social_media">social media</option>
                           <option value="ui_ux_design">ui ux design</option>
                           @elseif($data->type == 'social_media')
                           <option value="branding">branding</option>
                           <option value="social_media" selected>social media</option>
                           <option value="ui_ux_design">ui ux design</option>
                           @else
                           <option value="branding">branding</option>
                           <option value="social_media">social media</option>
                           <option value="ui_ux_design" selected>ui ux design</option>
                           @endif
                        </select>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>url</label>
                        <input class="form-control" type="url" name="url" placeholder="url" value="{{ old('url', $data->url) }}">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-btn">
                        <button class="btn btn-primary hvr-sweep-to-top" type="submit">Save changes</button>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script>
   var delete_route = "{{route('project.project_data_remove')}}"
</script>
@endsection
