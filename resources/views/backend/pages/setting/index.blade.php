@extends('backend.layouts.layout')
{{-- Dynamic Title --}}
@section('admin-title', 'Setting')
@section('admin_content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Setting Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Setting</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<!-- Create Body Start  -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9 offset-md-1">
                <div class="card card-primary">
                    <div class="card-body">
                        <!-- form start -->
                        <form role="form" action="{{ route('admin.setting.update') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Company Name</label>
                                            <input type="text" name="company_name" class="form-control" id="company_name"
                                                placeholder="Enter Product Name" value="{{$setting->company_name}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputFile">Company Logo (W-147,H-46)px</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name="logo" class="custom-file-input"
                                                        id="pro_document" onchange="readURLserviceImg(this);">
                                                    <label class="custom-file-label" for="pro_document">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text" id="">Upload</span>
                                                </div>
                                            </div>
                                            <div class="input-group">
                                                <img height="80" width="100" src="{{ asset('uploads/setting/' .$setting->logo) }}" alt="Logo" class="img-thumbnail" id="servicepreviewImg">
                                            </div>
                                        </div>
                                        {{-- ----------- --}}
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="title">Facebook Link</label>
                                            <input type="text" name="facebook_link" class="form-control" id="facebook_link"
                                                placeholder="Enter Facebook Link" value="{{$setting->facebook_link}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Instagram Link</label>
                                            <input type="text" name="instagram_link" class="form-control" id="instagram_link"
                                                placeholder="Enter Instagram Link" value="{{$setting->instagram_link}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="title">Twitter Link</label>
                                            <input type="text" name="twitter_link" class="form-control" id="twitter_link"
                                                placeholder="Enter Twitter Link" value="{{$setting->twitter_link}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="title">LinkedIn Link</label>
                                            <input type="text" name="linkedin_link" class="form-control" id="linkedin_link"
                                                placeholder="Enter LinkedIn Link" value="{{$setting->linkedin_link}}">
                                        </div>
                                        {{-- ---------- --}}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="shortdrescreption">Short Drescreption</label>
                                    <textarea class="form-control" name="short_description" id="short_description" rows="3">{{ $setting->short_description }}</textarea>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form><!-- form end -->
                    </div><!-- /.card-body -->
                </div><!-- /.card card-primary -->
            </div><!-- /.col-md-9 offset-md-1 -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</section>

    <!-- Create Body End  -->
@endsection
