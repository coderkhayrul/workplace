@extends('backend.layouts.layout')
@push('custom-style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush

{{-- Dynamic Title --}}
@section('admin-title', 'Digital Product')

@section('admin_content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="mb-2 row">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Digital Product</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Product</li>
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
                        <h3 class="card-title"></h3>
                        <a class="btn btn-sm btn-primary" href="#" style="float: right;" data-toggle="modal"
                            data-target="#modal-xl"><i class="fas fa-plus"></i>
                            Create</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="datatableid" class="table table-bordered table-striped dataTable"
                                        role="grid" aria-describedby="example1_info">
                                        <thead>
                                            <tr role="row" class="bg-gray">

                                                <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending"
                                                    style="width: 217.078px;">Product Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 200.547px;">Price</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 278.547px;">Author</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 278.547px;">Image</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 278.547px;">OrderBy</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                    style="width: 132.275px;">status</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                    style="width: 140px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($product as $products)
                                                <tr role="row" class="odd">
                                                    <td>{{ $products->product_name }}</td>
                                                    <td>{{ $products->product_price }}</td>
                                                    <td>{{ $products->author->user_name }}</td>
                                                    <td><img height="60" width="80" id="showImage"
                                                            src="{{ asset('uploads/products/' . $products->product_image) }}"
                                                            class="img-fluid" alt="PRODUCT IMAGE"></td>

                                                    <td>{{ $products->orderby }}</td>
                                                    <td>
                                                        @if ($products->status == 0)
                                                            <a href="{{ route('admin.product.active', $products->product_slug) }}"
                                                                class='btn btn-danger btn-sm'>Inactive</a>
                                                        @else
                                                            <a href="{{ route('admin.product.deactive', $products->product_slug) }}"
                                                                class='btn btn-success btn-sm'>Active</a>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                            data-target="#editProduct{{ $products->id }}"><i
                                                                class="fas fa-edit"></i></button>
                                                        <a id="delete" class="btn btn-sm btn-danger"
                                                            href="{{ route('admin.product.delete', $products->id) }}"><i
                                                                class="fas fa-trash"></i></a>
                                                        <a id="view" class="btn btn-sm btn-warning"
                                                            href=""><i class="fas fa-eye"></i></a>
                                                    </td>
                                                    <!-- Edit Modal Start  -->
                                                    <div class="modal fade" id="editProduct{{ $products->id }}"
                                                        data-backdrop="static">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title"><b>Edit Product</b></h4>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <!-- form start -->
                                                                <form role="form"
                                                                    action="{{ route('admin.product.update', $products->id) }}"
                                                                    method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <div class="card-body">
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group" hidden>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        name="author_id" id="author_id"
                                                                                        value="{{ Auth::user()->id }}">
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="title">Product
                                                                                        Name</label>
                                                                                    <input type="text"
                                                                                        name="product_name"
                                                                                        class="form-control"
                                                                                        id="product_name"
                                                                                        placeholder="Enter Product Name"
                                                                                        value="{{ $products->product_name }}">
                                                                                    @error('product_name')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="title">Product
                                                                                        Price</label>
                                                                                    <input type="number"
                                                                                        name="product_price"
                                                                                        class="form-control"
                                                                                        id="product_price"
                                                                                        placeholder="Enter Product Price"
                                                                                        value="{{ $products->product_price }}">
                                                                                    @error('product_price')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="title">Download
                                                                                        Link</label>
                                                                                    <input type="text"
                                                                                        name="download_link"
                                                                                        class="form-control"
                                                                                        id="download_link"
                                                                                        placeholder="Enter Download Link"
                                                                                        value="{{ $products->download_link }}">
                                                                                    @error('download_link')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label for="exampleInputFile">Product
                                                                                        Image</label>
                                                                                    <div class="input-group">
                                                                                        <div class="custom-file">
                                                                                            <input type="file"
                                                                                                name="product_image"
                                                                                                class="custom-file-input"
                                                                                                id="pro_document"
                                                                                                onchange="readURLserviceImg(this);">
                                                                                            <label
                                                                                                class="custom-file-label"
                                                                                                for="pro_document">Choose
                                                                                                file</label>
                                                                                        </div>
                                                                                        <div class="input-group-append">
                                                                                            <span class="input-group-text"
                                                                                                id="">Upload</span>
                                                                                        </div>
                                                                                    </div>
                                                                                    @error('product_image')
                                                                                        <span
                                                                                            class="text-danger">{{ $message }}</span>
                                                                                    @enderror
                                                                                    <div class="input-group">
                                                                                        <img height="80" width="100"
                                                                                            src="{{ asset('uploads/products/' . $products->product_image) }}"
                                                                                            alt=""
                                                                                            class="img-thumbnail"
                                                                                            id="servicepreviewImg">
                                                                                    </div>
                                                                                </div>
                                                                                {{-- ---------- --}}
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="longdrescreption">Product
                                                                                Details</label>
                                                                            <textarea class="textarea form-control" name="product_details" id="product_details" rows="5" cols="7">{{ $products->product_details }}</textarea>
                                                                            @error('product_details')
                                                                                <span
                                                                                    class="text-danger">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>
                                                                    </div>
                                                                    <!-- /.card-body -->

                                                                    <div class="card-footer">
                                                                        <button type="submit"
                                                                            class="btn btn-primary">Update</button>
                                                                    </div>
                                                                </form><!-- form start -->
                                                            </div>
                                                            <!-- /.modal-content -->
                                                        </div>
                                                        <!-- /.modal-dialog -->
                                                    </div>
                                                    <!-- Edit Modal End  -->
                                                </tr>
                                            @endforeach

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
                    <h4 class="modal-title"><b>Create product</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- form start -->
                <form role="form" action="{{ route('admin.product.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group" hidden>
                                    <input type="text" class="form-control" name="author_id" id="author_id"
                                        value="{{ Auth::user()->id }}">
                                </div>
                                <div class="form-group">
                                    <label for="title">Product Name</label>
                                    <input type="text" name="product_name" class="form-control" id="product_name"
                                        placeholder="Enter Product Name" value={{ old('product_name') }}>
                                    @error('product_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Product Price</label>
                                    <input type="number" name="product_price" class="form-control" id="product_price"
                                        placeholder="Enter Product Price" value={{ old('product_price') }}>
                                    @error('product_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title">Download Link</label>
                                    <input type="text" name="download_link" class="form-control" id="download_link"
                                        placeholder="Enter Download Link" value={{ old('download_link') }}>
                                    @error('download_link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">Product Image</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" name="product_image" class="custom-file-input"
                                                id="pro_document" onchange="readURLserviceImg(this);"
                                                value={{ old('product_image') }}>
                                            <label class="custom-file-label" for="pro_document">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text" id="">Upload</span>
                                        </div>
                                    </div>
                                    @error('product_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    <div class="input-group">
                                        <img src="" alt="" class="img-thumbnail" id="servicepreviewImg">
                                    </div>
                                </div>
                                {{-- ---------- --}}
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="longdrescreption">Product Details</label>
                            <textarea class="textarea form-control" name="product_details" id="product_details" rows="5" cols="7">{{ old('product_details') }}</textarea>
                            @error('product_details')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
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
