@extends('backend.layouts.layout')
@push('custom-style')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endpush

{{-- Dynamic Title --}}
@section('admin-title', 'Balance Request')

@section('admin_content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Balance</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Balance</li>
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
                        <h3 class="card-title">Total Balance Request</h3>
                        <a class="btn btn-sm btn-primary" href="#" style="float: right;" data-toggle="modal"
                            data-target="#AddBalance"><i class="fas fa-plus"></i>
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
                                                <th class="sorting_asc" tabindex="0" aria-controls="example1"
                                                    rowspan="1" colspan="1" aria-sort="ascending"
                                                    aria-label="Rendering engine: activate to sort column descending"
                                                    style="width: 217.078px;">Amount</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="Browser: activate to sort column ascending"
                                                    style="width: 278.547px;">Method</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Platform(s): activate to sort column ascending"
                                                    style="width: 247.531px;">Number</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending"
                                                    style="width: 185.562px;">Transaction ID</th>
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1"
                                                    aria-label="Engine version: activate to sort column ascending"
                                                    style="width: 185.562px;">Status</th>
                                                @if(Auth::user()->role_id==1)
                                                <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                    colspan="1" aria-label="CSS grade: activate to sort column ascending"
                                                    style="width: 132.281px;">Action</th>
                                                @endif
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($balances as $key=>$balance)
                                                <tr>
                                                    <td>{{ $key+1 }}</td>
                                                    <td>{{ $balance->amount }}</td>
                                                    <td>{{ $balance->method }}</td>
                                                    <td>{{ $balance->number }}</td>
                                                    <td>{{ $balance->traID }}</td>
                                                    <td>
                                                        @if($balance->status==2)
                                                            <span class="badge badge-warning">Pending</span>
                                                            @elseif($balance->status==1)
                                                            <span class="badge badge-success">Success</span>
                                                        @endif
                                                    </td>
                                                    @if(Auth::user()->role_id==1)
                                                    <td>
                                                        <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#EditBalance{{ $balance->balance_id }}"><i class="fas fa-edit"></i></button>
                                                        <a id="delete" class="btn btn-sm btn-danger" href="{{ route('admin.balance.destroy',$balance->balance_id) }}"><i class="fas fa-trash"></i></a>
                                                    </td>
                                                    @endif
                                                </tr>
                                                <!-- Edit Modal -->
                                                <div class="modal fade" id="EditBalance{{ $balance->balance_id }}" data-backdrop="static">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"><b>Edit Balance Request</b></h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <form action="{{ route('admin.balance.update', $balance->balance_id) }}" method="POST">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="form-group">
                                                                        <label for="amount">Amount</label>
                                                                        <input type="number" class="form-control" name="amount" id="amount"
                                                                            placeholder="Enter Request Amount" value="{{ $balance->amount }}">
                                                                        @error('amount')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="method">Payment Method</label>
                                                                        <select class="form-control method" name="method">
                                                                            <option value="Bkash" @if($balance->method=='Bkash') selected @endif>Bkash</option>
                                                                            <option value="Rocket" @if($balance->method=='Rocket') selected @endif>Rocket</option>
                                                                            <option value="SureCash" @if($balance->method=='SureCash') selected @endif>SureCash</option>
                                                                            <option value="Nagad" @if($balance->method=='Nagad') selected @endif>Nagad</option>
                                                                        </select>
                                                                        @error('method')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="number">Number</label>
                                                                        <input type="number" name="number" value="{{ $balance->number }}" class="form-control" id="number">
                                                                        @error('number')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="traID">Transaction Id</label>
                                                                        <input type="text" name="traID" value="{{ $balance->traID }}" class="form-control" id="traID">
                                                                        @error('traID')
                                                                            <span class="text-danger">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="status">Payment Status</label>
                                                                        <select class="form-control status" name="status">
                                                                            <option value="2" @if($balance->status=='2') selected @endif>Pending</option>
                                                                            <option value="1" @if($balance->status=='1') selected @endif>Accept</option>
                                                                        </select>
                                                                        @error('status')
                                                                            <span class="text-danger">{{ $message }}</span>
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
                                                <!-- Edit Modal-->
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

    <!-- Create Modal -->
    <div class="modal fade" id="AddBalance" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title"><b>Create New Balance Request</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.balance.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="amount">Amount</label>
                            <input type="number" class="form-control" name="amount" id="amount"
                                placeholder="Enter Request Amount" value="{{ old('amount') }}">
                            @error('amount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="method">Payment Method</label>
                            <select class="form-control method" name="method">
                                <option value="None">Select Your Payment Method</option>
                                <option value="Bkash">Bkash</option>
                                <option value="Rocket">Rocket</option>
                                <option value="SureCash">SureCash</option>
                                <option value="Nagad">Nagad</option>
                            </select>
                            @error('method')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group phonenumber">

                        </div>
                        <div class="form-group transactionId">

                        </div>

                        {{-- <div class="form-group">
                            <label for="exampleInputPassword">User Password</label>
                            <input name="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword"
                                placeholder="Enter User Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> Submit</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- Create Modal-->


@endsection

@push('custom-script')
    <script>
        jQuery(document).ready(function() {
            jQuery('.method').change(function() {
                var method = $(this).val();
                jQuery('.phonenumber').html('<label for="number">' + method +' Number</label>\
                     <input type="number" name="number" value="{{ old('number') }}" class="form-control" id="number" placeholder="Enter Your ' + method +' Number">\
                    @error('number')\
                        <span class="text-danger">{{ $message }}</span>\
                    @enderror');
                jQuery('.transactionId').html('<label for="traID">' + method +
                    ' Transaction Id</label>\
                        <input type="text" name="traID" value="{{ old('traID') }}" class="form-control" id="traID" placeholder="Enter Your ' + method +' Transaction Id">\
                        @error('traID')\
                            <span class="text-danger">{{ $message }}</span>\
                        @enderror');
            });
        });
    </script>
    <!-- DataTables -->
    <script src="{{ asset('backend/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('backend/dist/js/datatable.js') }}"></script>
@endpush
