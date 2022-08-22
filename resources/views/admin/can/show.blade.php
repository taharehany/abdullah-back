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
                                <input class="form-control" type="text" name="title" placeholder="title" value="{{ old('title', $data->title) }}" readonly>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>description</label>
                                <textarea class="form-control" name="description" placeholder="description" required="" rows="5" readonly>{{ old('description', $data->description) }}</textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>main image</label>
                               <img src="{{ asset($data->image) }}" alt="">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
