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
                        <h3 class="card-title">Total <b>{{ count($roles) }}</b> Role</h3>
                        {{-- <a class="btn btn-sm btn-primary" href="#" style="float: right;" data-toggle="modal" data-target="#modal-lg"><i class="fas fa-plus"></i>
                        Create</a> --}}
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
                                                    style="width: 217.078px;">Role Name</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 278.547px;">Comments</th>
                                                {{-- <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                    style="width: 132.281px;">Action</th> --}}
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $role)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $role->role_name }}</td>
                                                    <td>
                                                        @if ($role->role_comments)
                                                            {{ $role->role_comments }}
                                                        @else
                                                            <span class="badge badge-warning">Comment Not Availabe</span>
                                                        @endif
                                                    </td>
                                                    {{-- <td>
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal"
                                                            data-target="#roleEdit{{ $role->role_slug }}"><i
                                                                class="fas fa-edit"></i> Edit</button>
                                                        <a id="delete" class="btn btn-sm btn-danger"
                                                            href="{{ route('admin.role.destroy', $role->role_slug) }}"><i
                                                                class="fas fa-user-slash"></i> Delete</a>
                                                    </td> --}}
                                                </tr>

                                                <!-- Edit Modal -->
                                                <div class="modal fade" id="roleEdit{{ $role->role_slug }}"
                                                    data-backdrop="static">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"><b>Update Role</b></h4>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form
                                                                action="{{ route('admin.role.update', $role->role_slug) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="exampleInputName">Role Name</label>
                                                                        <input name="role_name"
                                                                            value="{{ $role->role_name }}" type="text"
                                                                            class="form-control @error('role_name') is-invalid @enderror"
                                                                            id="exampleInputName"
                                                                            placeholder="Enter Role Name">
                                                                        @error('role_name')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputComment">Role
                                                                            Comment</label>
                                                                        <input name="role_comments"
                                                                            value="{{ $role->role_comments }}"
                                                                            type="text"
                                                                            class="form-control @error('role_comments') is-invalid @enderror"
                                                                            id="exampleInputComment"
                                                                            placeholder="Enter Role Comment">
                                                                        @error('role_comments')
                                                                            <div class="invalid-feedback">
                                                                                {{ $message }}
                                                                            </div>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer justify-content-between">
                                                                    <button type="button" class="btn btn-default"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit" class="btn btn-primary"><i
                                                                            class="fas fa-save"></i> Update</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- /.modal-content -->
                                                    </div>
                                                    <!-- /.modal-dialog -->
                                                </div>
                                                <!-- /.modal -->
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
@endsection

@push('custom-script')
    <!-- DataTables -->
    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('backend/dist/js/datatable.js') }}"></script>
@endpush
