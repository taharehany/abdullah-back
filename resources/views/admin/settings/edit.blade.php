@extends('admin.layouts.master')

@section('content')
<div class="main-content">
    <div class="global-area mtb">
        <div class="container-fluid">
            <div class="form">
                <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>behance</label>
                                <input class="form-control" type="url" name="behance" placeholder="behance" value="{{ old('behance', $data->behance) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>facebook</label>
                                <input class="form-control" type="url" name="facebook" placeholder="facebook" value="{{ old('facebook', $data->facebook) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>instagram</label>
                                <input class="form-control" type="url" name="instagram" placeholder="instagram" value="{{ old('instagram', $data->instagram) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>whatsapp</label>
                                <input class="form-control" type="text" name="whatsapp" placeholder="whatsapp" value="{{ old('whatsapp', $data->whatsapp) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>mobile1</label>
                                <input class="form-control" type="text" name="mobile1" placeholder="mobile1" value="{{ old('mobile1', $data->mobile1) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>mobile2</label>
                                <input class="form-control" type="text" name="mobile2" placeholder="mobile2" value="{{ old('mobile2', $data->mobile2) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>email1</label>
                                <input class="form-control" type="email" name="email1" placeholder="email1" value="{{ old('email1', $data->email1) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>email2</label>
                                <input class="form-control" type="email" name="email2" placeholder="email2" value="{{ old('email2', $data->email2) }}">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>cv</label>
                                <input class="form-control" type="file" name="cv" placeholder="cv" value="{{ old('cv', $data->cv) }}" accept=".pdf, .docx, .doc">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>small logo</label>
                                <img width="100" height="100" src="{{ asset($data->small_logo) }}">
                                <input class="form-control" type="file" name="small_logo" accept=".png, .jpg, .jpeg, .svg" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>small_logo dark</label>
                                <img width="100" height="100" src="{{ asset($data->small_logo_dark) }}">
                                <input class="form-control" type="file" name="small_logo_dark" accept=".png, .jpg, .jpeg, .svg" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>inline logo</label>
                                <img width="100" height="100" src="{{ asset($data->inline_logo) }}">
                                <input class="form-control" type="file" name="inline_logo" accept=".png, .jpg, .jpeg, .svg" >
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>inline_logo dark</label>
                                <img width="100" height="100" src="{{ asset($data->inline_logo_dark) }}">
                                <input class="form-control" type="file" name="inline_logo_dark" accept=".png, .jpg, .jpeg, .svg" >
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
