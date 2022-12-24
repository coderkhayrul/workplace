@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>Item Details</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="index.html">Home </a></li>
                            <li><a href="explore-products.html">Item </a></li>
                            <li>Item Details</li>
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
                        <img src="{{ asset('uploads/products/' . $product->product_image) }}" alt="Image">

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
                                        <a href="#">Official
                                            Product</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="single-item-bid">
                                <p>Price</p>
                                <h6>{{ $product->product_price }}৳</h6>
                            </div>
                        </div>
                        <div class="item-title">
                            <div class="item-title-left">
                                <h2>{{ Str::limit($product->product_name, 55) }}</h2>
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
                                        {!! $product->product_details !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('web.digital.product.place-bid', $product->product_slug) }}"
                            class="btn style6 w-100 d-block mt-20">Buy Now<i class="flaticon-right-arrow-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Item Details Section End -->
@endsection
