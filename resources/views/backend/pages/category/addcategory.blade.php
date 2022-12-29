@extends('backend.layouts.layout')
{{-- Dynamic Title --}}
@section('admin-title', 'Blank')
@section('admin_content')
<div class="content-header" <div class="container-fluid">
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
<!-- /.content-header -->
<div class="p-3" id="mgs"></div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card card-primary">
                    <!-- /.card-header -->
                    <div class="card-body">
                        <h4>Category Manage <a class="btn btn-info btn-sm" href="" style="float: right;"
                                data-toggle="modal" data-target="#addcategory">Add Category</a></h4>
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
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 278.547px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 200.547px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $key => $category)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $category->name }}</td>
                                                <td>
                                                    @if ($category->status == 1)
                                                    <span class="badge badge-info">Active</span>
                                                    @else
                                                    <span class="badge badge-warning">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <button class="btn-sm btn-info btn" id="editCategory"
                                                        data-id={{ $category->id }} data-target="#EditCategory"
                                                        data-toggle="modal"><i class="fa fa-edit"></i></button>
                                                    <button class="btn-sm btn-danger btn" id="deleteCategory" data-id="{{ encrypt($category->id) }}" data-target="#deletCategory"
                                                        data-toggle="modal"><i class="fa fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                    {{-- iughuyguyguy --}}
                </div>
            </div>
        </div>
    </div>
</section>
<!-- category add Modal -->
<div class="modal fade" id="addcategory" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
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
                <form method="post" action="{{ route('admin.category.store') }}" id="categoryData">
                    @csrf
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" class="form-control" name="category_name"
                            placeholder=" Enter your Category Name">
                        @error('category_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" name="status">
                            <option value="">=====Status======</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('status')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
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
<!-- edit Modal Start  -->
<div class="modal fade" id="EditCategory" data-backdrop="static">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><b>Create Sub-Category</b></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!--  category edit form -->
                <form method="post" id="editcategoryData">
                    @csrf
                    <input type="hidden" name="cat_id" id="cat_id">
                    <div class="form-group">
                        <label for="category_name">Category Name</label>
                        <input type="text" class="form-control" name="category_name" id="category_name"
                            placeholder=" Enter your Category Name">
                        @error('category_name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select class="form-control" id="status" name="status">
                            <option value="">=====Status======</option>
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        @error('status')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i>Update</button>
            </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- edit Modal End  -->
{{---- Edit Part-1 SubCategory ----}}
<script>
    jQuery(document).on('click', '#editCategory', function (event) {
        event.preventDefault();
        var cat_id = jQuery(this).data('id');
        // alert(cat_id);
        $.ajax({
            url: "{{ route('admin.category.edit') }}",
            type: 'GET',
            dataType: 'json',
            data: {
                id: cat_id,
            },
            success: function (response) {
                console.log(response.data);

                jQuery('#cat_id').val(response.data.id);
                jQuery('#category_name').val(response.data.name);
                // jQuery('#subcategory_id').val(response.subcategories.id);
                jQuery("#status").val(response.data.status).change();
            },
        });
    });

</script>
{{---- Edit Part-2 SubCategory ----}}
<script>
    $('#editcategoryData').on('submit', function (event) {
        event.preventDefault();
        // alert('ok');
        $.ajax({
            url: '{{ route("admin.category.update") }}',
            type: 'post',
            dataType: 'json',
            data: $('#editcategoryData').serialize(),
            success: function (response) {
                location.reload();
            },
        });
    });
</script>
{{---- delete SubCategory ----}}
<script>
    $(document).on('click','#deleteCategory', function(event){
        event.preventDefault();
        var cat_id = jQuery(this).data('id');

        $.ajax({
                url     : '/admin/category/delete',
                type    : 'GET',
                dataType: 'json',
                data    : {
                id      : cat_id,
                },
            success : function(response){
                location.reload();
                $('#mgs').append('<span class="alert alert-danger">'+response.status+'</span>').fadeOut(7000);
            },
        });
  });
</script>
@endsection
