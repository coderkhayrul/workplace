@extends('backend.layouts.layout')
{{-- Dynamic Title --}}
@section('admin-title', 'Blank')
@section('admin_content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Blank Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v2</li>
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
                        <h4>All Category <a class="btn btn-info btn-sm" href="" style="float: right;"
                                data-toggle="modal" data-target="#addcategory">Add Category</a></h4>
                    </div>

                    <!-- category add Modal -->
                    <div class="modal fade" id="addcategory" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Category</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--end Modal Header -->
                                <!--  Modal Body -->
                                <div class="modal-body">
                                    <!--  category added form -->
                                    <form method="post" action="" id="categoryData" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="category_name">Category Name</label>
                                            <input type="text" class="form-control" name="category_name"
                                                id="category_name" placeholder=" Enter your Category Name">
                                            @error('category_name')
                                                <span class="text-danger">{{$message}}</span>
                                            @enderror

                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status">
                                                <option value="1">=====Status======</option>
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                </div><!-- end Modal Body -->
                                <!--  Modal Footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary addcategory">Add</button>
                                </div><!-- End Modal Footer -->
                                </form><!-- end category added form -->
                            </div>
                        </div>
                    </div>

                    <!-- /.card-body -->
                    <!-- form start -->
                    <form role="form">
                        <div class="card-body">
                            <table class="table table-bordered table-colored table-teal">
                                <thead>
                                    <tr>
                                        <th class="wd-5p">#SL</th>
                                        <th class="wd-6p">Name</th>
                                        <th class="wd-15p">Status</th>
                                    </tr>
                                    @php
                                        $sl=1;
                                    @endphp
                                    @foreach ($categories as $category)
                                    <tr>
                                        <td>{{ $sl++ }}</td>
                                        <td>{{ $category->name}}</td>
                                        <td>{{ $category->status}}</td>
                                    </tr>
                                    @endforeach
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection
