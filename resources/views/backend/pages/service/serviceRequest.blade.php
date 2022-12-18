@extends('backend.layouts.layout')
{{-- Dynamic Title --}}
@section('admin-title', 'service request')
@section('admin_content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Service Request</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Service Request</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-11 offset-md-1">
                {{-- card --}}
                @foreach ( $requestedService as $service )
                    <div class="card p-2">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="card-header">
                                    <h4 class="">{{$service->title}}</h4>
                                </div>
                                <!-- card Body -->
                                <div class="card-body">
                                    <p>{{$service->shortDes}}</p>
                                </div><!-- /end card body-->
                                <div class="card-footer">
                                    <span><b>Created by:</b>&nbsp;{{$service->user->user_name}}</span>
                                    &nbsp;&nbsp;<b>At:</b><span>&nbsp;{{$service->created_at->format('M d, y')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2" style="margin-top: 8%">
                                <a href="{{Route('buyer.service.ApproveRequest',$service->id)}}" class="btn btn-lg btn-primary">Approve</a>
                            </div><!-- /end card -->
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
