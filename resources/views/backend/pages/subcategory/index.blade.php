@extends('backend.layouts.layout')
@push('custom-style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush

<!-- Dynamic Title -->
@section('admin-title', 'Sub-Category Manager')

@section('admin_content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Sub Category</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Sub Category</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <div id="mgs" class="m-4"></div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row d-flex justify-content-center">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total <b>{{ count($subCategories) }}</b> User</h3>
                        <a class="btn btn-sm btn-primary" href="#" style="float: right;" data-toggle="modal"
                            data-target="#AddUser"><i class="fas fa-plus"></i>
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
                                                    style="width: 217.078px;">#SL</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 278.547px;">Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending"
                                                    style="width: 247.531px;">Category ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending"
                                                    style="width: 185.562px;">Order By</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                    style="width: 132.281px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php($sl=1)
                                            @foreach ($subCategories as $row)

                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $sl }}</td>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->category_id }}</td>
                                                    <td>{{ $row->orderby }}</td>
                                                    <td>
                                                        <a href="#"
                                                            title="Edit" id="editsubcategory" data-id= {{ $row->id }} class="btn btn-sm btn-primary"><i
                                                            data-toggle="modal" data-target="#editModel" class="fas fa-user-edit"></i></a>

                                                        <a title="Delete" id="deletesubcat" data-id= {{ $row->id }} class="btn btn-sm btn-danger"
                                                            href="#"><i
                                                                class="fas fa-user-times"></i></a>
                                                    </td>
                                                </tr>
                                                @php($sl++)
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

    <!-- edit Modal Start  -->
    <div class="modal fade" id="editModel" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>Edit Sub-Category</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" id="submitEditSubCategory" method="POST">
                    @csrf
                    <input name="subcategory_id" type="hidden" id="subcategory_id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputRole">Select Category</label>
                            <select name="category_id" id="category_idd"
                                class="form-control  @error('category_id') is-invalid @enderror">
                                <option label="Select Category"></option>
                                @foreach ($categories as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input name="name" value="" type="text"
                                class="form-control @error('name') is-invalid @enderror" id="subcat_name"
                                placeholder="Enter Name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Order By</label>
                            <input name="orderby" id="subcat_orderby" value="" type="text"
                                class="form-control @error('orderby') is-invalid @enderror">
                            @error('orderby')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Update</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- edit Modal End  -->


    <!-- Create Modal Start  -->
    <div class="modal fade" id="AddUser" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>Create Sub-Category</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.subcategory.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="exampleInputRole">Select Category</label>
                            <select name="category_id" id="category_id"
                                class="form-control  @error('category_id') is-invalid @enderror">
                                <option label="Select Category"></option>
                                @foreach ($categories as $row)
                                    <option value="{{ $row->id }}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputName">Name</label>
                            <input name="name" value="{{ old('name') }}" type="text"
                                class="form-control @error('name') is-invalid @enderror" id="exampleInputName"
                                placeholder="Enter Name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail">Order By</label>
                            <input name="orderby" value="{{ old('orderby') }}" type="number"
                                class="form-control @error('orderby') is-invalid @enderror" id=""
                                placeholder="Enter Order Id">
                            @error('orderby')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Create</button>
                    </div>
                </form>
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

   {{---- Edit Part-1 SubCategory ----}}
    <script>
        jQuery(document).on('click','#editsubcategory',function(event)
        {
            event.preventDefault();
            var subcat_id = jQuery(this).data('id');
            $.ajax({
                    url     : "{{ route('admin.subcategory.edit') }}",
                    type    : 'GET',
                    dataType: 'json',
                    data    : {
                        id : subcat_id,
                    },
                    success : function(response){
                        console.log(response.subcategories);

                        jQuery('#subcat_name').val(response.subcategories.name);
                        jQuery('#subcat_orderby').val(response.subcategories.orderby);
                        jQuery('#subcategory_id').val(response.subcategories.id);
                        jQuery("#category_idd").val(response.subcategories.category_id).change();
                    },
                });
        });

    </script>

    {{---- Edit Part-2 SubCategory ----}}
    <script>
          $('#submitEditSubCategory').on('submit', function(event){
            event.preventDefault();
            // alert('ok');
            $.ajax({
                url     : '/admin/sub-category/update/',
                type    : 'post',
                dataType: 'json',
                data    : $('#submitEditSubCategory').serialize(),
                success : function(response){
                    location.reload();
                },
            });
        });
    </script>

    {{---- delete SubCategory ----}}
    <script>
        $(document).on('click','#deletesubcat', function(event){
          event.preventDefault();
          var subcat_id = jQuery(this).data('id');
        //   alert(subcat_id);

          $.ajax({
                url : '/admin/sub-category/delete/',
                type    : 'GET',
                dataType: 'json',
                data    : {
                    id : subcat_id,
                },
              success : function(response){
                $('#mgs').append('<span class="alert alert-danger">'+response.success+'</span>').fadeOut(5000);
                // location.reload();
              },
          });
      });
  </script>
@endpush
