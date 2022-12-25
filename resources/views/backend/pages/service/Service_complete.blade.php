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
                    <li class="breadcrumb-item active">Service Submition</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">

    @if(!empty($resive_submition))
        <div class="card">
            <div class="card-header">
                <h3 class="card-title"><b>Service Title:</b>&nbsp;{{$resive_submition->service->title}}</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                <!--submition descreption-->
                <div class="submition_des">
                    <div class="row">
                        <div class="colmd-6">
                             <b><h5>Submition Descreption: &nbsp;</h5></b>
                        </div>
                        <div class="colmd-6">
                           <p class="text-justify">{{$resive_submition->submition_drescreption}}</p>
                        </div>
                    </div>
                </div><!--end submition descreption-->
                <!--submition file-->
                <hr>
                <div class="submition_file">
                    <div class="row">
                        <div class="col-md-6">
                            <b><h5>Submition Document:&nbsp;</h5></b>
                        </div>
                        <div class="col-md-6">
                            @if($resive_submition->submition_document)
                                <a href="{{route('buyer.servicecomplete.download',$resive_submition->submition_document)}}" class="text-justify">Download</a>
                            @else
                                <span class="text-justify">Not available</span>
                            @endif
                        </div>
                    </div>
                </div>
                <hr>
                <div class="external-link">
                    <div class="row">
                        <div class="col-md-6">
                            <b><h5>External link:&nbsp;</h5></b>
                        </div>
                        <div class="col-md-6">
                            @if($resive_submition->submition_externalLink)
                                <a href="{{$resive_submition->submition_externalLink}}" target="_blank" class="text-justify">{{$resive_submition->submition_externalLink}}</a>
                            @else
                                <span class="text-justify">Not available</span>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
            <div class="card-footer">
                @if($resive_submition->PlaceBit->status==1)
                    <a href="{{route('buyer.bid.completejob',$resive_submition->PlaceBit->id)}}" class="btn btn-outline-primary">Job Complete</a>
                @elseif($resive_submition->PlaceBit->status==2)
                    <span class="badge bg-success">Successfully Complete Job</span>
                @endif
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
                Seller Not submited...
            </div>
            <div class="card-footer">
            Thank you
            </div>
        </div>

    @endif

    </section>
@endsection
