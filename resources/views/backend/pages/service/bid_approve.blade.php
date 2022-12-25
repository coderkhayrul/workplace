@extends('backend.layouts.layout')
{{-- Dynamic Title --}}
@section('admin-title', 'Blank')
@section('admin_content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">All Bid</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">All Bid</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row d-flex justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Total <b>{{count($allbids)}}</b> Bid's</h3>
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
                                                style="width: 278.078px;">Seller Name</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                style="width: 278.547px;">Price</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                style="width: 278.547px;">Date Line</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                style="width: 150.547px;">File</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                style="width: 190.547px;">Drescreption</th>
                                            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                style="width: 278.547px;">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($allbids as $bid)
                                            <tr role="row" class="odd">
                                                <td class="sorting_1"><a href="{{route('web.seller.profile',$bid->user->user_slug)}}">{{ $bid->user->user_name }}</a></td>
                                                <td>{{$bid->price}}</td>
                                                <td>{{Carbon\Carbon::parse($bid->dateline)->format('d M Y')
                                                }}</td>
                                                <td>
                                                    @if($bid->file){
                                                        <a href="{{route('buyer.bid.download',$bid->file)}}">download</a>
                                                    }
                                                    @else{
                                                        <a>Not Available</a>
                                                    }
                                                    @endif
                                                </td>
                                                <td>
                                                    <button id="view" class="btn btn-sm btn-warning" data-toggle="modal"
                                                    data-target="#bidDes{{ $bid->id }}">
                                                    <i class="fas fa-eye"></i></button>
                                                </td>
                                                <td>
                                                    @if($bid->status==0)
                                                        <a href="{{Route('buyer.bid.hire',$bid->id)}}" class="btn btn-sm btn-success">Hire</a>
                                                    @elseif($bid->status==1)
                                                        <a href="{{route('buyer.bid.completejob',$bid->id)}}" class=" disable btn btn-sm btn-outline-primary">Complete job</a>
                                                        <a href="{{Route('buyer.projectSubmition.view',$bid->id)}}" class=" disable btn btn-sm btn-outline-info">view</a>
                                                    @elseif ($bid->status==2)
                                                        <span class="badge bg-success">Successfully Complete Job</span>
                                                    @endif
                                                </td>

                                                   <!-- Bid Drescreption Modal Start  -->
                                              <div class="modal fade" id="bidDes{{ $bid->id }}"
                                                data-backdrop="static">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title"><b>Bid Drescreption</b></h4>
                                                            <button type="button" class="close"
                                                                data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="contant text-center">
                                                            <p>{{$bid->bidDes}}</p>
                                                        </div>
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
@endsection
