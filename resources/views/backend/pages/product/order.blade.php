@extends('backend.layouts.layout')
@push('custom-style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush

{{-- Dynamic Title --}}
@section('admin-title', 'User Manager')

@section('admin_content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Order</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Order</li>
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
            <div class="row">
                <div class="col-md-4 col-sm-6 col-12">
                    <a href="{{ route('admin.product.order.pending') }}">
                        <div class="info-box">
                            <span class="info-box-icon bg-warning"><i class="far fa-hourglass"></i></span>

                            <div class="info-box-content m-auto">
                                <span class="info-box-text">Pending Order</span>
                                {{-- <span class="info-box-number">1,410</span> --}}
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-12">
                    <a href="{{ route('admin.product.order.approve') }}">
                        <div class="info-box">
                            <span class="info-box-icon bg-success"><i class="far fa-calendar-check"></i></span>

                            <div class="info-box-content m-auto">
                                <span class="info-box-text">Approve Order</span>
                                {{-- <span class="info-box-number">54</span> --}}
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-12">
                    <a href="{{ route('admin.product.order.rejected') }}">
                        <div class="info-box">
                            <span class="info-box-icon bg-danger"><i class="far fa-calendar-times"></i></span>

                            <div class="info-box-content m-auto">
                                <span class="info-box-text">Rejected Order</span>
                                {{-- <span class="info-box-number">13,648</span> --}}
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </a>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <div class="row d-flex justify-content-center">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Total <b>{{ count($orders) }}</b> Order</h3>
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
                                                    style="width: 217.078px;">Order Id</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 278.547px;">Item</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending"
                                                    style="width: 247.531px;">Bank</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending"
                                                    style="width: 247.531px;">Status</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending"
                                                    style="width: 185.562px;">Total</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                    style="width: 200px;">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">{{ $order->order_code }}</td>
                                                    <td>{{ $order->product->product_name }}</td>
                                                    <td>{{ $order->bank_name }}</td>
                                                    <td>
                                                        @if ($order->status == 1)
                                                            <span class="badge badge-warning">Pending</span>
                                                        @elseif($order->status == 2)
                                                            <span class="badge badge-success">Approve</span>
                                                        @else
                                                            <span class="badge badge-danger">Rejected</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $order->total_amount }}TK</td>
                                                    <td>
                                                        <a href="#" class="btn btn-primary">
                                                            <i class="fas fa-eye"></i>
                                                        </a>
                                                        @if ($order->status != 2)
                                                            <a href="{{ route('admin.product.order.approve.status', $order->id) }}"
                                                                class="btn btn-success">
                                                                <i class="fas fa-check-double"></i>
                                                            </a>
                                                            @if ($order->status != 3)
                                                                <a href="{{ route('admin.product.order.rejected.status', $order->id) }}"
                                                                    class="btn btn-danger">
                                                                    <i class="fas fa-times"></i>
                                                                </a>
                                                            @endif
                                                        @endif
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
