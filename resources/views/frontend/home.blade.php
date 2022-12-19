@extends('frontend.layouts.app')
@section('home-content')
    <!-- New Service Section Start -->
    <section class="auction-wrap ptb-100 bg-zodiac">
        <div class="container mt-3">
            <div class="row mb-40 align-items-end">
                <div class="col-md-8">
                    <div class="section-title style2">
                        <span>Collection</span>
                        <h2>New Service</h2>
                    </div>
                </div>
            </div>
            <div class="auction-slider-one style1 owl-carousel">
                @foreach($services as $service)
                <div class="auction-card style1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                    <div class="auction-img">
                        <img src="{{asset('uploads/services/'.$service->document)}}" alt="Image">
                    </div>
                    <div class="auction-info-wrap">
                        <h3><a href="item-details.html">{{Str::limit($service->title,23)}}</a></h3>
                        <div class="auction-author-info">
                            <div class="author-info">
                                <div class="author-img">
                                    <img src="{{ asset('frontend') }}/assets/img/author/author-15.jpg" alt="Image">
                                </div>
                                <div class="author-name">
                                    <h6><a href="author-profile.html">{{$service->user->user_name}}</a></h6>
                                    <a>Expaired On:-</a>
                                </div>
                            </div>
                            <div class="auction-bid">
                                <h6>{{$service->price}}৳</h6>
                                <span>&nbsp;{{Carbon\Carbon::parse($service->EndDate)->format('d M, y')}}</span>
                            </div>
                        </div>
                        <div class="auction-stock">
                            <p>25+ Place Bid</p>
                            <a href="place-bid.html" class="btn style1">Place Bid <i class="flaticon-right-arrow-1"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- New Service Section End -->

    <!-- Category Wise Product Section Start -->
    <section class="nft-wrap ptb-10 bg-zodiac">
        <div class="container">
            <div class="row mb-40 align-items-end">
                <div class="col-md-8">
                    <div class="section-title style2">
                        <span>Popular Service</span>
                        <h2>Web Programming</h2>
                    </div>
                </div>
                <div class="col-md-4 text-md-end sm-none">
                    <a href="explore-products.html" class="btn style1">View All<i class="flaticon-right-arrow-1"></i></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-1.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.3k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Fly Higher Space</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-13.jpg"
                                            alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Tom Hanks</a></h6>
                                        <a href="author-profile.html">@hanks</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.668ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="300">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-2.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>2.3k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Dodge The Braink</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-6.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Angela Plasty</a></h6>
                                        <a href="author-profile.html">@angela</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.254ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="400">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-3.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Les Immoratals</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-4.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Amelia Rose</a></h6>
                                        <a href="author-profile.html">@amelia</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>1.068ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="500">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-4.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>2.2k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Modern Revolution</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-1.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Orson Carte</a></h6>
                                        <a href="author-profile.html">@orson</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>2.68ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="600">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-5.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">3D Triangle Art</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-3.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">James Parker</a></h6>
                                        <a href="author-profile.html">@parket</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>1.228ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="700">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-6.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.6k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Blue Angle</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-5.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Thomas Eddi</a></h6>
                                        <a href="author-profile.html">@thomas</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>2.068ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="800">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-7.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.1k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Diamond Art</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-12.jpg"
                                            alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Jack Sparrow</a></h6>
                                        <a href="author-profile.html">@Sparrow</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.068ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="900">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-8.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.5k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Icecube Immoratals</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-8.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Olivia Jen</a></h6>
                                        <a href="author-profile.html">@olivia</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.468ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Wise Product Section End -->

    <!-- Category Wise Product Section Start -->
    <section class="nft-wrap ptb-100 bg-zodiac">
        <div class="container">
            <div class="row mb-40 align-items-end">
                <div class="col-md-8">
                    <div class="section-title style2">
                        <span>Collection</span>
                        <h2>Video Animation</h2>
                    </div>
                </div>
                <div class="col-md-4 text-md-end sm-none">
                    <a href="#" class="btn style1">View All<i class="flaticon-right-arrow-1"></i></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-1.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.3k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Fly Higher Space</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-13.jpg"
                                            alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Tom Hanks</a></h6>
                                        <a href="author-profile.html">@hanks</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.668ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="300">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-2.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>2.3k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Dodge The Braink</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-6.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Angela Plasty</a></h6>
                                        <a href="author-profile.html">@angela</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.254ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="400">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-3.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Les Immoratals</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-4.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Amelia Rose</a></h6>
                                        <a href="author-profile.html">@amelia</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>1.068ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="500">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-4.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>2.2k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Modern Revolution</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-1.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Orson Carte</a></h6>
                                        <a href="author-profile.html">@orson</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>2.68ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="600">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-5.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">3D Triangle Art</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-3.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">James Parker</a></h6>
                                        <a href="author-profile.html">@parket</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>1.228ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="700">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-6.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.6k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Blue Angle</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-5.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Thomas Eddi</a></h6>
                                        <a href="author-profile.html">@thomas</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>2.068ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="800">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-7.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.1k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Diamond Art</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-12.jpg"
                                            alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Jack Sparrow</a></h6>
                                        <a href="author-profile.html">@Sparrow</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.068ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="900">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-8.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.5k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Icecube Immoratals</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-8.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Olivia Jen</a></h6>
                                        <a href="author-profile.html">@olivia</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.468ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Wise Product Section End -->

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

    <!-- Category Wise Product Section Start -->
    <section class="nft-wrap ptb-100 bg-zodiac">
        <div class="container">
            <div class="row mb-40 align-items-end">
                <div class="col-md-8">
                    <div class="section-title style2">
                        <span>Collection</span>
                        <h2>Digital Markation</h2>
                    </div>
                </div>
                <div class="col-md-4 text-md-end sm-none">
                    <a href="#" class="btn style1">View All<i class="flaticon-right-arrow-1"></i></a>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-1.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.3k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Fly Higher Space</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-13.jpg"
                                            alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Tom Hanks</a></h6>
                                        <a href="author-profile.html">@hanks</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.668ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="300">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-2.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>2.3k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Dodge The Braink</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-6.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Angela Plasty</a></h6>
                                        <a href="author-profile.html">@angela</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.254ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="400">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-3.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Les Immoratals</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-4.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Amelia Rose</a></h6>
                                        <a href="author-profile.html">@amelia</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>1.068ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="500">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-4.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>2.2k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Modern Revolution</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-1.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Orson Carte</a></h6>
                                        <a href="author-profile.html">@orson</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>2.68ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="600">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-5.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">3D Triangle Art</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-3.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">James Parker</a></h6>
                                        <a href="author-profile.html">@parket</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>1.228ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="700">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-6.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.6k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Blue Angle</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-5.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Thomas Eddi</a></h6>
                                        <a href="author-profile.html">@thomas</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>2.068ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="800">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-7.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.1k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Diamond Art</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-12.jpg"
                                            alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Jack Sparrow</a></h6>
                                        <a href="author-profile.html">@Sparrow</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.068ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                    data-aos-delay="900">
                    <div class="auction-card style3">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-8.jpg" alt="Image">
                            <span class="item-popularity"><i class="ri-heart-fill"></i>1.5k</span>
                            <a href="place-bid.html" class="btn style1">Place Bid <i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Icecube Immoratals</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-8.jpg" alt="Image">
                                        <span class="badge"><img src="{{ asset('frontend') }}/assets/img/badge.png"
                                                alt="Image"></span>
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Olivia Jen</a></h6>
                                        <a href="author-profile.html">@olivia</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.468ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category Wise Product Section End -->

    <!-- Promo Section Start -->
    <section class="promo-wrap pt-100 pb-75 bg-pearl">
        <div class="container">
            <div class="section-title style2 text-center mb-40">
                <span>Create &amp; Sell</span>
                <h2>Create &amp; Sell Your NFT's</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="promo-card style1">
                        <span class="count-num">01</span>
                        <div class="promo-icon">
                            <img src="{{ asset('frontend') }}/assets/img/icon-1.png" alt="Image">
                        </div>
                        <div class="promo-info">
                            <h3>Set Up Your Wallet</h3>
                            <p>Eget nulla pha sellus odio sit portti ena tib aliquam blandit gravida ulcies eleifend
                                varius tempo solo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="300">
                    <div class="promo-card style1">
                        <span class="count-num">02</span>
                        <div class="promo-icon">
                            <img src="{{ asset('frontend') }}/assets/img/icon-2.png" alt="Image">
                        </div>
                        <div class="promo-info">
                            <h3>Create Collection</h3>
                            <p>Eget nulla pha sellus odio sit portti ena tib aliquam blandit gravida ulcies eleifend
                                varius tempo solo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="400">
                    <div class="promo-card style1">
                        <span class="count-num">03</span>
                        <div class="promo-icon">
                            <img src="{{ asset('frontend') }}/assets/img/icon-3.png" alt="Image">
                        </div>
                        <div class="promo-info">
                            <h3>Add Your NTFs</h3>
                            <p>Eget nulla pha sellus odio sit portti ena tib aliquam blandit gravida ulcies eleifend
                                varius tempo solo.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="500">
                    <div class="promo-card style1">
                        <span class="count-num">04</span>
                        <div class="promo-icon">
                            <img src="{{ asset('frontend') }}/assets/img/icon-4.png" alt="Image">
                        </div>
                        <div class="promo-info">
                            <h3>List Item for Sale</h3>
                            <p>Eget nulla pha sellus odio sit portti ena tib aliquam blandit gravida ulcies eleifend
                                varius tempo solo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Promo Section End -->

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
                    <form action="#" class="newsletter-form">
                        <input type="email" placeholder="Enter Your Email Address">
                        <button type="submit">Subscribe Now <i class="ri-send-plane-fill"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Newsletter Section End -->
@endsection
