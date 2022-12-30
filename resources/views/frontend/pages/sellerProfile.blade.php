@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>Your Profile</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="{{ route('web.home') }}">Home </a></li>
                            <li>Seller Profile</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb-img">
                        <img class="br-img" src="{{ asset('frontend') }}/assets/img/breadcrumb/breadcrumb-1.png"
                            alt="Image">
                        <img class="br-shape" src="{{ asset('frontend') }}/assets/img/breadcrumb/br-shape.png"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Author Profile section start -->
    <section class="author-profile-wrap pt-100 pb-75 bg-zodiac">
        <div class="container">
            <div class="author-details-box">
                <div class="author-img">
                    <img src="{{ asset('frontend') }}/assets/img/author/author-7.jpg" alt="Image">
                    <span class="author-badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                            alt="Image"></span>
                </div>
                <div class="single-author-info">
                    <h3>{{ $seller->profile->full_name }}</h3>
                </div>
                <div class="author-metainfo-wrap">
                    <div class="author-metainfo">
                        <a href="{{ route('web.logout') }}" class="btn style1">Logout<i class="flaticon-exit"></i>
                        </a>
                        {{-- <a class="edit-profile" href="#"><i class="ri-edit-box-line"></i></a> --}}
                    </div>
                </div>
            </div>
            <!--section for seller profile-->
            <div class="author-item-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="history-tab" data-bs-toggle="tab" data-bs-target="#tab-1"
                            type="button" role="tab" aria-controls="tab-1" aria-selected="true">Bid Project</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="bids-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button"
                            role="tab" aria-controls="tab-2" aria-selected="false">Buyer Accpet Bid</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#tab-3"
                            type="button" role="tab" aria-controls="tab-3" aria-selected="false">Complete
                            Project</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#tab-4"
                            type="button" role="tab" aria-controls="tab-3" aria-selected="false">Purchase
                            Product</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!--Bid Project-->
                    <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                        <div class="row justify-content-center">
                            @foreach ($bidservices as $bidservice)
                                @if ($bidservice->status == 0)
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                                        <div class="auction-card style3">
                                            <div class="auction-img">
                                                <img src="{{ asset('uploads/services/' . $bidservice->service->document) }}"
                                                    alt="Image">
                                            </div>
                                            <div class="auction-info-wrap">
                                                <h3><a
                                                        href="{{ route('web.single.service', $bidservice->service->slug) }}">{{ Str::limit($bidservice->service->title, 23) }}</a>
                                                </h3>
                                                <div class="auction-author-info">
                                                    <div class="author-info">
                                                        <div class="author-img">
                                                            <img src="{{ asset('frontend') }}/assets/img/author/author-13.jpg"
                                                                alt="Image">
                                                            <span class="badge"><img
                                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                                    alt="Image"></span>
                                                        </div>
                                                        <div class="author-name">
                                                            <h6><a
                                                                    href="author-profile.html">{{ $bidservice->service->user->user_name }}</a>
                                                            </h6>
                                                            <a href="author-profile.html">Expired on:-</a>
                                                        </div>
                                                    </div>
                                                    <div class="auction-bid">
                                                        <h6>{{ $bidservice->service->price }}</h6>
                                                        @php
                                                            $todaty = \Carbon\Carbon::now();
                                                        @endphp
                                                        @if ($bidservice->service->EndDate < $todaty)
                                                            <span><del>{{ Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</del><span>
                                                                @else
                                                                    <span>{{ Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!--End Bid Project-->
                    <!--buyer accpet bid-->
                    <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                        <div class="row justify-content-center">
                            @foreach ($bidservices as $bidservice)
                                @if ($bidservice->status == 1)
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                                        <div class="auction-card style3">
                                            <div class="auction-img">
                                                <img src="{{ asset('uploads/services/' . $bidservice->service->document) }}"
                                                    alt="Image">
                                                <a href="{{ Route('web.projectsubmite.view', $bidservice->id) }}"
                                                    class="btn style1">submite<i class="flaticon-right-arrow-1"></i></a>
                                            </div>
                                            <div class="auction-info-wrap">
                                                <h3><a
                                                        href="item-details.html">{{ Str::limit($bidservice->service->title, 23) }}</a>
                                                </h3>
                                                <div class="auction-author-info">
                                                    <div class="author-info">
                                                        <div class="author-img">
                                                            <img src="{{ asset('frontend') }}/assets/img/author/author-13.jpg"
                                                                alt="Image">
                                                            <span class="badge"><img
                                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                                    alt="Image"></span>
                                                        </div>
                                                        <div class="author-name">
                                                            <h6><a
                                                                    href="author-profile.html">{{ $bidservice->service->user->user_name }}</a>
                                                            </h6>
                                                            <a href="author-profile.html">Expired on:-</a>
                                                        </div>
                                                    </div>
                                                    <div class="auction-bid">
                                                        <h6>{{ $bidservice->service->price }}</h6>
                                                        @php
                                                            $todaty = \Carbon\Carbon::now();
                                                        @endphp
                                                        @if ($bidservice->service->EndDate < $todaty)
                                                            <span><del>{{ Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</del><span>
                                                                @else
                                                                    <span>{{ Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!--end buyer accpeted bid-->
                    <!--Complete Project-->
                    <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                        <div class="row justify-content-center">
                            @foreach ($bidservices as $bidservice)
                                @if ($bidservice->status == 2)
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                                        <div class="auction-card style3">
                                            <div class="auction-img">
                                                <img src="{{ asset('uploads/services/' . $bidservice->service->document) }}"
                                                    alt="Image">
                                            </div>
                                            <div class="auction-info-wrap">
                                                <h3><a
                                                        href="item-details.html">{{ Str::limit($bidservice->service->title, 23) }}</a>
                                                </h3>
                                                <div class="auction-author-info">
                                                    <div class="author-info">
                                                        <div class="author-img">
                                                            <img src="{{ asset('frontend') }}/assets/img/author/author-13.jpg"
                                                                alt="Image">
                                                            <span class="badge"><img
                                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                                    alt="Image"></span>
                                                        </div>
                                                        <div class="author-name">
                                                            <h6><a
                                                                    href="author-profile.html">{{ $bidservice->service->user->user_name }}</a>
                                                            </h6>
                                                            <a href="author-profile.html">Expired on:-</a>
                                                        </div>
                                                    </div>
                                                    <div class="auction-bid">
                                                        <h6>{{ $bidservice->service->price }}</h6>
                                                        @php
                                                            $todaty = \Carbon\Carbon::now();
                                                        @endphp
                                                        @if ($bidservice->service->EndDate > $todaty)
                                                            <span><del>{{ Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</del><span>
                                                                @else
                                                                    <span>{{ Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                    <!-- End Complete Project-->
                    <!--Digital Product-->
                    <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab-4">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                @forelse ($productOrder as $order)
                                    <div class="activity-card">
                                        <div class="activity-card-img">
                                            <img src="{{ asset('uploads/products/' . $order->product->product_image) }}"
                                                alt="Image">
                                        </div>
                                        <ul class="activity-card-metainfo list-style">
                                            <li>
                                                <i class="ri-calendar-todo-line"></i>
                                                @if ($order->status == 1)
                                                    <span class="badge badge-success">Pending</span>
                                                @elseif ($order->status == 2)
                                                    <span class="badge badge-success">Approve</span>
                                                @else
                                                    <span class="badge badge-danger">Rejected</span>
                                                @endif
                                            </li>
                                            <li><i class="ri-time-line"></i>{{ $order->created_at->diffForHumans() }}
                                            </li>
                                        </ul>
                                        <div class="activity-card-info">
                                            <h3>
                                                <a
                                                    href="{{ route('web.digital.product.view', $order->product->product_slug) }}">{{ Str::limit($order->product->product_name, 20, '...') }}</a>
                                            </h3>
                                            <p>Total Amount:
                                                <span>{{ $order->total_amount }}Tk</span>
                                            </p>
                                        </div>
                                        @if ($order->status == 1)
                                            <a title="Pending" href="#" class="activity-card-action">
                                                <i class="ri-history-fill"></i>
                                            </a>
                                        @elseif ($order->status == 2)
                                            <a target="_blank" title="Download"
                                                href="{{ $order->product->download_link }}" class="activity-card-action">
                                                <i class="ri-download-cloud-2-line"></i>
                                            </a>
                                        @else
                                            <a title="Rejected" href="#" class="activity-card-action">
                                                <i class="ri-delete-back-2-fill"></i>
                                            </a>
                                        @endif
                                    </div>
                                @empty
                                @endforelse

                            </div>
                        </div>
                    </div>
                    <!-- End Digital Product-->
                </div>
            </div>
        </div>
    </section>
    <!-- seller Profile section end -->
@endsection
