@extends('backend.layouts.layout')
{{-- Dynamic Title --}}
@section('admin-title', 'From Design')
@section('admin_content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Slider Update</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                    <li class="breadcrumb-item active">Slider Update</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Slider Update</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{route('slider.update',$slider->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slider Title</label>
                                <input type="text" class="form-control" value="{{ old('slider_title',$slider->slider_title)}}" name="slider_title" id="exampleInputEmail1"
                                    placeholder="Enter Slider Title">
                                    @error('slider_title')
                                     <span class="text-danger">{{$message}}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Slider Description</label>
                                <textarea name="slider_shortdescription"  cols="2" rows="2" placeholder="Enter Slider Short Description" class="form-control">{{old('slider_shortdescription',$slider->slider_shortdescription)}}</textarea>
                                @error('slider_shortdescription')
                                     <span class="text-danger">{{$message}}</span>
                                    @enderror
                            </div>
                            <div class="form-group">
                                    <label for="exampleInputFile">Slider Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="slider_image" class="custom-file-input"
                                                id="pro_document" onchange="readURLserviceImg(this);">
                                            <label class="custom-file-label" for="pro_document">Choose file</label>
                                        </div>
                                    </div>
                                    @error('slider_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <img src="{{asset('backend/sliderimage/'.$slider->slider_image)}}" alt="" class="img-thumbnail" id="servicepreviewImg" height="100" width="300">
                                    </div>
                                </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Slider Status</label>
                                <select name="slider_status" id="" class="form-control">
                                    <option value="">Select Status</option>
                                    <option value="active" @if(old('slider_status',$slider->slider_status == 'active')) selected @endif>Active</option>
                                    <option value="inactive" @if(old('slider_status',$slider->slider_status == 'inactive')) selected @endif>Inactive</option>
                                </select>
                                @error('slider_status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
