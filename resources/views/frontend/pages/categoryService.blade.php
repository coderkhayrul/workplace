@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>{{ $category->name }}</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="{{ route('web.home') }}">Home </a></li>
                            <li>{{ $category->name }}</li>
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

    <!-- Explore Auction Start -->
    <section class="explore-auction ptb-100 bg-zodiac">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xxl-12 col-xl-12">
                    <div class="row justify-content-center">
                        @forelse ($category->service as $service)
                            <div class="col-xxl-4 col-xl-6 col-lg-4 col-md-6">
                                <div class="auction-card style3">
                                    <div class="auction-img">
                                        <img src="{{ asset('uploads/services/' . $service->document) }}" alt="Image">
                                        <span class="item-popularity"><i class="ri-heart-fill"></i>1.3k</span>
                                        <a href="{{ Route('web.placebid', $service->slug) }}" class="btn style1">Place Bid
                                            <i class="flaticon-right-arrow-1"></i></a>
                                    </div>
                                    <div class="auction-info-wrap">
                                        <h3><a href="{{ route('web.single.service', $service->slug) }}"
                                                title="{{ $service->title }}">{{ Str::limit($service->title, 35) }}</a></h3>
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
                                                            href="{{ route('web.buyer.profile', $service->user->user_slug) }}">{{ $service->user->user_name }}</a>
                                                    </h6>
                                                </div>
                                            </div>
                                            <div class="auction-bid">
                                                <h6>{{ $service->price }}৳</h6>
                                                <span>Current Bid</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-xxl-12 col-xl-6 col-lg-12 col-md-12">
                                <h2 class="text-center text-white">Service Not Found!</h2>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Explore Auction End -->
@endsection
