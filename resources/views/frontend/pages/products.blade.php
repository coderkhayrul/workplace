@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>Our Digital Product</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="{{ route('web.home') }}">Home </a></li>
                            <li>Digital Product</li>
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

    <!-- Blog Details Section Start -->
    <div class="blog-details-wrap ptb-100 bg-zodiac">
        <div class="container">
            <div class="row justify-content-center">
                @forelse ($products as $product)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card style1">
                            <div class="blog-img">
                                <img src="{{ asset('uploads/products/' . $product->product_image) }}" alt="Image">
                            </div>
                            <div class="blog-info">
                                <h3><a
                                        href="{{ route('web.digital.product.view', $product->product_slug) }}">{{ $product->product_name }}</a>
                                </h3>
                                <p>Mollis pellen tesque pellen tesque feugiat risus ut amet nunc. Volutpat nam convais.</p>
                                <div class="blog-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-1.jpg"
                                                alt="Image">
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="#">{{ $product->author->user_name }}</a></h6>
                                        </div>
                                    </div>
                                    <a href="{{ route('web.digital.product.view', $product->product_slug) }}"
                                        class="btn style1">Download Now</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </div>
    <!-- Blog Details Section End -->
@endsection
