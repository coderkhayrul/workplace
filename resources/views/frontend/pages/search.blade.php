@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>Seaarch</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="{{ route('web.home') }}">Home </a></li>
                            <li>Search</li>
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

     <!-- Search Item Section Start -->
     <section class="nft-wrap ptb-100 bg-zodiac">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ( $searches as $search)
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('uploads/services/' . $search->document) }}" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.3k</span>
                                <a href="{{ Route('web.placebid', $search->slug) }}" class="btn style1">Place Bid <i class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">{{ Str::limit($search->title, 35) }}</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{asset('frontend')}}/assets/img/author/author-13.jpg" alt="Image">
                                            <span class="badge"><img src="{{asset('frontend')}}/assets/img/badge.png" alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="{{ route('web.buyer.profile', $search->user->user_slug)}}">{{$search->user->user_name}}</a></h6>
                                            <a href="author-profile.html">Expaired On:-</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>{{ $search->price }}৳</h6>
                                        <span>{{Carbon\Carbon::parse($search->EndDate)->format('d M, y')}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="text-center mt-20">
                <a href="index.html" class="btn style4">Load More<i class="ri-refresh-line"></i></a>
            </div>
        </div>
    </section>
    <!-- NFT Item Section End -->
@endsection
