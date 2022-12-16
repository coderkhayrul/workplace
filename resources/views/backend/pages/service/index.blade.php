@extends('backend.layouts.layout')
@push('custom-style')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush

{{-- Dynamic Title --}}
@section('admin-title', 'User Role Management')

@section('admin_content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Roles</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li class="breadcrumb-item active">Roles</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row d-flex justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Total <b>25</b> Services</h3>
                   <a class="btn btn-sm btn-primary" href="#" style="float: right;" data-toggle="modal" data-target="#modal-xl"><i class="fas fa-plus"></i>
                        Create</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="datatableid" class="table table-bordered table-striped dataTable" role="grid"
                                    aria-describedby="example1_info">
                                    <thead>
                                        <tr role="row" class="bg-gray">
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending"
                                                style="width: 217.078px;">Image</th>
                                            <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Rendering engine: activate to sort column descending"
                                                style="width: 217.078px;">Title</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                style="width: 278.547px;">Category</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                style="width: 278.547px;">Price</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                style="width: 278.547px;">Start Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                style="width: 278.547px;">End Date</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                style="width: 132.281px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr role="row" class="odd">
                                            <td class="sorting_1">Image</td>
                                            <td>Service title</td>
                                            <td>Category</td>
                                            <td>Price</td>
                                            <td>Start Date</td>
                                            <td>End Date</td>
                                            <td>
                                                <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#roleEdit"><i class="fas fa-edit"></i></button>
                                                <a id="delete" class="btn btn-sm btn-danger" href=""><i class="fas fa-user-slash"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!--/. container-fluid -->
</section>
<!-- Create Modal Start  -->
<div class="modal fade" id="modal-xl" data-backdrop="static">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Create Service</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
           <!-- form start -->
           <form role="form" action="{{route('buyer.service.store')}}" method="post">
             @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                placeholder="Enter Service Title">
                        </div>
                        <div class="form-group">
                            <label for="title">Price</label>
                            <input type="number" name="price" class="form-control" id="price"
                                placeholder="Enter Service Price">
                        </div>
                        <div class="form-group">
                            <label for="date">Start Date:</label>
                            <div class="input-group date">
                                <input type="date" name="StartDate" class="form-control" id="date">
                            </div>
                        </div>
                        {{-- ----------- --}}
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select class="form-control select2" style="width: 100%;">
                                <option selected="selected">Category</option>
                                <option value="1" selected="selected">Category</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Service Document</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" name="document" class="custom-file-input" id="pro_document">
                                    <label class="custom-file-label" for="pro_document">Choose file</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text" id="">Upload</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date">End Date:</label>
                            <div class="input-group date">
                                <input type="date" name="EndDate" class="form-control" id="date">
                            </div>
                        </div>
                        {{-- ---------- --}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="shortdrescreption">Short Drescreption</label>
                    <textarea class="form-control" name="shortDes" id="shortdrescreption" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="longdrescreption">Long Drescreption</label>
                    <textarea class="textarea form-control" name="longdes" id="longdrescreption" rows="5" cols="7"></textarea>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
           </form><!-- form start -->
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- Create Modal End  -->
@endsection

@push('custom-script')
<!-- DataTables -->
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('backend/dist/js/datatable.js') }}"></script>
@endpush
