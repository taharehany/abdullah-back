@extends('admin.layouts.master')

@section('content')
<div class="main-content">
   <div class="global-area mtb">
      <div class="container-fluid">
         <div class="form">
            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
               @csrf
               @method('POST')
               <div class="row">
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>title</label>
                        <input class="form-control" type="text" name="title" placeholder="title" required="">
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>description</label>
                        <textarea class="form-control" name="description" placeholder="description" required="" rows="5"></textarea>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>about</label>
                        <textarea class="form-control" name="about" placeholder="about" required="" rows="5"></textarea>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label>mission</label>
                        <textarea class="form-control" name="mission" placeholder="mission" required="" rows="5"></textarea>
                     </div>
                  </div>
                  <div class="col-lg-12 mb-5">
                     <div class="form-group">
                        <label>main image</label>
                        <input class="form-control" type="file" name="main_image" accept=".png, .jpg, .jpeg, .svg">
                     </div>
                  </div>
                  <div class="col-lg-12" id="repeate_container">
                     <div class="row repeated">
                        <div class="col-lg-8">
                           <div class="form-group">
                              <label>image</label>
                              <input class="form-control" type="file" name="image[]" multiple accept=".png, .jpg, .jpeg, .svg">
                           </div>
                        </div>
                        <div class="col-lg-2">
                           <div class="form-group">
                              <label>in desktop (max 12)</label>
                              <input class="form-control" type="number" min="1" max="12" name="desktop_col[]" placeholder="in desktop" required="">
                           </div>
                        </div>
                        <div class="col-lg-2">
                           <div class="form-group">
                              <label>in mobile (max 12)</label>
                              <input class="form-control" type="number" min="1" max="12" name="mobile_col[]" placeholder="in mobile" required="">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-12 mb-5">
                     <div class="form-group">
                        <button id="add_field">+</button>
                     </div>
                  </div>
                  <div class="col-lg-12">
                     <div class="form-group">
                        <label for="">Select type</label>
                        <select class="form-select" name="type" required="">
                           <option value="branding">branding</option>
                           <option value="social_media">social media</option>
                           <option value="ui_ux_design">ui ux design</option>
                        </select>
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
@endsection
