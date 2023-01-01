@extends('frontend.layouts.app')
@section('home-content')
@php
$setting = App\Models\Backend\Setting::first();
@endphp
    <!-- Hero Section Start -->
    <section class="hero-wrap style1">
        <div class="container">
            <div class="row align-items-center gx-5">
                <div class="col-lg-6 order-lg-1 order-md-2 order-2">
                    <div class="hero-content">
                        {{-- <span data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">NFT Marketplace</span> --}}
                        <h1 data-aos="fade-right" data-aos-duration="1200" data-aos-delay="300">{{optional($slider)->slider_title}}</h1>
                        <p data-aos="fade-right" data-aos-duration="1200" data-aos-delay="400">{{optional($slider)->slider_shortdescription}}</p>
                        <div class="hero-btn" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="500">
                            <a href="{{Route('web.digital.product.all') }}" class="btn style1">Digital Product <i
                                    class="flaticon-right-arrow-1"></i></a>
                            <a href="{{Route('allcategories') }}" class="btn style2">All Categories <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-2 order-md-1 order-1">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('frontend') }}/assets/img/hero/hero-shape-5.png" alt="Image"
                            class="hero-shape-one">
                        <img class="bounce" src="{{ !empty($slider->slider_image)? asset('backend/sliderimage/'.$slider->slider_image) : asset('nft-slider-3.jpg') }}" alt="Image">
                        <div class="hero-nft-info">
                            <div class="auction-info-wrap">
                                <h3><a>{{Str::limit($servicescurrent->shortDes,20)}}</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ empty($servicescurrent->document)? asset('uploads/services/'.$servicescurrent->document) : asset('author-14.jpg') }}"
                                                alt="Image">
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">{{ optional($servicescurrent->user)->user_name }}</a></h6>
                                            <a href="author-profile.html">@ {{ optional($servicescurrent->user)->user_name }}</a>
                                        </div>
                                    </div>
                                    <div class="auction-item-stat">
                                        <h6>{{$servicescurrent->price}} ৳</h6>
                                        <span>Created Bid Now</span>
                                    </div>
                                </div>
                                {{-- <div class="nft-deadline">
                                    <span>Auction Ending In</span>
                                    <div class="countdown text-center" data-countdown="2022/12/30"></div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    @forelse ($categories as $category)
        <!-- New Service Section Start -->
        <section class="auction-wrap ptb-100 bg-zodiac">
            <div class="container mt-3">
                <div class="row mb-40 align-items-end">
                    <div class="col-md-8">
                        <div class="section-title style2">
                            <span>Collection</span>
                            <h2>{{ $category->name }}</h2>
                        </div>
                    </div>
                </div>
                <div class="auction-slider-one style1 owl-carousel">
                    @php
                        $todaty = \Carbon\Carbon::now();
                        $services = App\Models\Service::where('cat_id', $category->id)
                            ->where('status', 1)
                            ->where('EndDate', '>=', $todaty)
                            ->OrderBy('created_at', 'DESC')
                            ->limit(10)
                            ->get();
                    @endphp
                    @foreach ($services as $service)
                        <div class="auction-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <div class="auction-img">
                                @if (File::exists('uploads/services/' . $service->document))
                                    <img src="{{ asset('uploads/services/' . $service->document) }}" alt="Image">
                                @else
                                    <img src="{{ $service->document }}" alt="Image">
                                @endif
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="{{ route('web.single.service', $service->slug) }}"
                                        title="{{ $service->title }}">{{ Str::limit($service->title, 23) }}</a>
                                </h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-15.jpg"
                                                alt="Image">
                                        </div>
                                        <div class="author-name">
                                            <h6><a
                                                    href="{{ route('web.buyer.profile', $service->user->user_slug) }}">{{ $service->user->user_name }}</a>
                                            </h6>
                                            <a>Expaired On:-</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>{{ $service->price }}৳</h6>
                                        <span>&nbsp;{{ Carbon\Carbon::parse($service->EndDate)->format('d M, y') }}</span>
                                    </div>
                                </div>
                                <div class="auction-stock">
                                    <p>25+ Place Bid</p>
                                    <a href="{{ Route('web.placebid', $service->slug) }}" class="btn style1">Place Bid <i
                                            class="flaticon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- New Service Section End -->
    @empty
    @endforelse

    <!-- CTA Ads Section Start -->
    <section class="cta-wrap">
        <img src="{{ asset('frontend') }}/assets/img/cta-shape-1.png" alt="Image" class="cta-shape">
        <div class="container">
            <div class="row align-items-end" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="col-lg-6">
                    <div class="cta-content ptb-100">
                        <div class="content-title style2">
                            <span>Earn Now</span>
                            <h2>Convart Web Visitor Into Customers</h2>
                        </div>
                        <a href="create-collection.html" class="btn style6">Make Service<i
                                class="flaticon-right-arrow-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                    <div class="cta-img-wrap">
                        <img src="{{ asset('frontend') }}/assets/img/cta-1.png" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Ads Section End -->

    <!-- Newsletter Section Start -->
    <section class="newsletter-wrap ptb-100">
        <img src="{{ asset('frontend') }}/assets/img/newsletter-bg.png" alt="Image" class="newsletter-shape-one">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                    <div class="content-title style2">
                        <span>Subscribe To Newsletter</span>
                        <h2>Want To Get Notify On Product Updates?</h2>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                    <form action="{{ route('web.subscribe') }}" method="POST" class="newsletter-form">
                        @csrf
                        <input name="email" type="email" placeholder="Enter Your Email Address">
                        <button type="submit">Subscribe Now <i class="ri-send-plane-fill"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->
@endsection
