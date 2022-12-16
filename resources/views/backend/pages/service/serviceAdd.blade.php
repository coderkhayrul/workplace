@extends('backend.layouts.layout')
{{-- Dynamic Title --}}
@section('admin-title', 'Blank')
@section('admin_content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Service Add</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Service</li>
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
                        <h3 class="card-title">Add Your Services</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title"
                                    placeholder="Enter Service Title">
                            </div>
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control select2" style="width: 100%;">
                                    <option selected="selected">Category</option>
                                    <option>Category</option>
                                    <option>Category</option>
                                    <option>Category</option>
                                    <option>Category</option>
                                    <option>Category</option>
                                    <option>Category</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="shortdrescreption">Short Drescreption</label>
                                <textarea class="form-control" id="shortdrescreption" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="longdrescreption">Long Drescreption</label>
                                <textarea class="textarea form-control" id="longdrescreption" rows="5" cols="7"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">Product Document</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="pro_document">
                                        <label class="custom-file-label" for="pro_document">Choose file</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="">Upload</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="title">Price</label>
                                <input type="number" class="form-control" id="price"
                                    placeholder="Enter Service Price">
                            </div>
                            <div class="form-group">
                                <label for="date">Start Date:</label>
                                <div class="input-group date">
                                    <input type="date" class="form-control" id="date">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="date">End Date:</label>
                                <div class="input-group date">
                                    <input type="date" class="form-control" id="date">
                                </div>
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


