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
                            <li>Your Profile</li>
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
                    <h3>{{ Auth::user()->profile->full_name }}</h3>
                    <span>{{ '@' . Auth::user()->user_name }}</span>
                    <ul class="author-social list-style">
                        <li><b>886k</b> Followers</li>
                        <li><b>69k</b> Following</li>
                    </ul>
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
                    <p>{{ Auth::user()->profile->present_address }}</p>
                </div>
            </div>
            <!--section for buyer profile-->
            @if(Auth::user()->role_id==2)
                <div class="author-item-tab">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="history-tab" data-bs-toggle="tab" data-bs-target="#tab-1"
                                type="button" role="tab" aria-controls="tab-1" aria-selected="true">Item On Sale</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="bids-tab" data-bs-toggle="tab" data-bs-target="#tab-2" type="button"
                                role="tab" aria-controls="tab-2" aria-selected="false">Top Reviewed</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#tab-3"
                                type="button" role="tab" aria-controls="tab-3" aria-selected="false">Recent
                                Uploads</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
                            <div class="row justify-content-center">
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-6.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-4.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-1.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-3.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-5.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-8.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
                            <div class="row justify-content-center">
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-3.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-5.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-8.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
                            <div class="row justify-content-center">
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-6.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-1.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <img src="{{ asset('frontend') }}/assets/img/author/author-3.jpg"
                                                            alt="Image">
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
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
                                                        <span class="badge"><img
                                                                src="{{ asset('frontend') }}/assets/img/badge.png"
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
                            </div>
                        </div>
                    </div>
                </div>
            @endif
             <!--section for seller profile-->
             @if(Auth::user()->role_id==3)
                <h1 class="text-light">Hellow i Am</h1>
             @endif

        </div>
    </section>
    <!-- Author Profile section end -->
@endsection
