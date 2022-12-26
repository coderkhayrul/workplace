@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>Service Details</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="{{ route('web.home') }}">Home </a></li>
                            <li><a href="{{ route('web.category.service', $service->category->slug) }}">Service </a></li>
                            <li>Service Details</li>
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

    <!-- Item Details Section Start -->
    <section class="item-details-wrap bg-zodiac ptb-100">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="single-item-img">
                        <img src="{{ asset('uploads/services/' . $service->document) }}" alt="Image">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="item-desc">
                        <div class="single-item-author">
                            <div class="author-info">
                                <div class="author-img">
                                    <img src="{{ asset('frontend') }}/assets/img/author/author-13.jpg" alt="Image">
                                    <span class="author-badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                            alt="Image"></span>
                                </div>
                                <div class="author-name">
                                    <h6>
                                        <a
                                            href="{{ route('web.buyer.profile', $service->user->user_slug) }}">{{ $service->user->user_name }}</a>
                                    </h6>
                                </div>
                            </div>

                            <div class="single-item-bid">
                                <p>Bid Rate</p>
                                <h6>{{ $service->price }}৳</h6>

                        </div>
                        <div class="item-title">
                            <div class="item-title-left">
                                <h2>{{ Str::limit($service->title, 55) }}</h2>
                                <ul class="list-style">
                                    <li class="item-popularity"><i class="ri-heart-fill"></i>1.3k</li>
                                    <li class="item-popularity"><i class="ri-eye-line"></i>4.3k</li>
                                </ul>
                            </div>
                        </div>
                        <p class="item-description">{{ $service->shortDes }}</p>
                        <div class="item-deadline-wrap">
                            <div class="single-item-bid">
                                <p>Payment</p>
                                <h6>Verified</h6>
                            </div>
                            <div class="item-deadline">

                                <div class="countdown text-center"
                                    data-countdown="{{ Carbon\Carbon::parse($service->EndDate)->format('Y/m/d') }}"></div>
                            </div>
                        </div>
                        <div class="single-item-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="details-tab" data-bs-toggle="tab"
                                        data-bs-target="#details" type="button" role="tab" aria-controls="details"
                                        aria-selected="false">Details</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">

                                <div class="tab-pane fade show active" id="details" role="tabpanel"
                                    aria-labelledby="details-tab">
                                    <div class="item-desc">
                                        {!! $service->longdes !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ Route('web.placebid', $service->slug) }}" class="btn style6 w-100 d-block mt-20">Place
                            Bid<i class="flaticon-right-arrow-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Item Details Section End -->
@endsection
