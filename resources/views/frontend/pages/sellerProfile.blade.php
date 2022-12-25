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
                    <h3>{{$seller->profile->full_name }}</h3>
                    <span>'@' {{$seller->user_name}}</span>
                </div>
                <div class="author-metainfo-wrap">
                    <div class="author-metainfo">
                        <a href="{{ route('web.logout') }}" class="btn style1">Logout<i class="flaticon-exit"></i>
                        </a>
                        <div class="share-profile">
                            <span><i class="ri-share-line"></i></span>
                            <ul class="social-profile style1 list-style">
                                <li>
                                    <a target="_blank" href="https://facebook.com/">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://twitter.com/">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li>
                                    <a target="_blank" href="https://instagram.com/">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="item-option">
                            <span><i class="ri-more-2-line"></i></span>
                            <ul class="more-option list-style">
                                <li><a href="author-profile.html">Author Profile</a></li>
                                <li><a href="place-bid.html">Place A Bid</a></li>
                            </ul>
                        </div>
                        <a class="edit-profile" href="login.html"><i class="ri-edit-box-line"></i></a>
                    </div>
                    <p>Present Address</p>
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
                                type="button" role="tab" aria-controls="tab-3" aria-selected="false">Complete Project</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <!--Bid Project-->
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row justify-content-center">
                                @foreach($bidservices as $bidservice)
                                    @if($bidservice->status==0)
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                                        <div class="auction-card style3">
                                            <div class="auction-img">
                                                <img src="{{ asset('uploads/services/' . $bidservice->service->document) }}" alt="Image">
                                            </div>
                                            <div class="auction-info-wrap">
                                                <h3><a href="item-details.html">{{Str::limit($bidservice->service->title,23)}}</a></h3>
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
                                                            <h6><a href="author-profile.html">{{$bidservice->service->user->user_name }}</a></h6>
                                                            <a href="author-profile.html">Expired on:-</a>
                                                        </div>
                                                    </div>
                                                    <div class="auction-bid">
                                                        <h6>{{$bidservice->service->price}}</h6>
                                                        @php
                                                             $todaty = \Carbon\Carbon::now();
                                                        @endphp
                                                        @if ($bidservice->service->EndDate < $todaty)
                                                              <span><del>{{Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</del><span>
                                                        @else
                                                            <span>{{Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</span>
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
                                @foreach($bidservices as $bidservice)
                                    @if($bidservice->status==1)
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                                        <div class="auction-card style3">
                                            <div class="auction-img">
                                                <img src="{{ asset('uploads/services/' . $bidservice->service->document) }}" alt="Image">
                                                <a href="{{Route('web.projectsubmite.view',$bidservice->service->slug)}}" class="btn style1">submite<i
                                                    class="flaticon-right-arrow-1"></i></a>
                                            </div>
                                            <div class="auction-info-wrap">
                                                <h3><a href="item-details.html">{{Str::limit($bidservice->service->title,23)}}</a></h3>
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
                                                            <h6><a href="author-profile.html">{{$bidservice->service->user->user_name }}</a></h6>
                                                            <a href="author-profile.html">Expired on:-</a>
                                                        </div>
                                                    </div>
                                                    <div class="auction-bid">
                                                        <h6>{{$bidservice->service->price}}</h6>
                                                        @php
                                                             $todaty = \Carbon\Carbon::now();
                                                        @endphp
                                                        @if ($bidservice->service->EndDate < $todaty)
                                                              <span><del>{{Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</del><span>
                                                        @else
                                                            <span>{{Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</span>
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
                         <!--end buyer accpet bid-->
                         <!--Complete Project-->
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                            <div class="row justify-content-center">
                                @foreach($bidservices as $bidservice)
                                    @if($bidservice->status==2)
                                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                                        <div class="auction-card style3">
                                            <div class="auction-img">
                                                <img src="{{ asset('uploads/services/' . $bidservice->service->document) }}" alt="Image">
                                            </div>
                                            <div class="auction-info-wrap">
                                                <h3><a href="item-details.html">{{Str::limit($bidservice->service->title,23)}}</a></h3>
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
                                                            <h6><a href="author-profile.html">{{$bidservice->service->user->user_name }}</a></h6>
                                                            <a href="author-profile.html">Expired on:-</a>
                                                        </div>
                                                    </div>
                                                    <div class="auction-bid">
                                                        <h6>{{$bidservice->service->price}}</h6>
                                                        @php
                                                             $todaty = \Carbon\Carbon::now();
                                                        @endphp
                                                        @if ($bidservice->service->EndDate > $todaty)
                                                              <span><del>{{Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</del><span>
                                                        @else
                                                            <span>{{Carbon\Carbon::parse($bidservice->service->EndDate)->format('d M, y') }}</span>
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
                    </div>
                </div>
        </div>
    </section>
    <!-- seller Profile section end -->
@endsection
