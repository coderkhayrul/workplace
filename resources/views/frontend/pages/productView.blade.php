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
                        <img src="{{ asset('frontend') }}/assets/img/auction/single-auction-1.jpg" alt="Image">

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
                                    <h6><a href="author-profile.html">Willium David</a></h6>
                                    <a href="author-profile.html">@david</a>
                                </div>
                            </div>
                            <div class="single-item-bid">
                                <p>Highest Bid</p>
                                <h6>0.568ETH</h6>
                            </div>
                        </div>
                        <div class="item-title">
                            <div class="item-title-left">
                                <h2>Human Head Vector</h2>
                                <ul class="list-style">
                                    <li class="item-popularity"><i class="ri-heart-fill"></i>1.3k</li>
                                    <li class="item-popularity"><i class="ri-eye-line"></i>4.3k</li>
                                </ul>
                            </div>
                            <div class="item-title-right">
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
                            </div>
                        </div>
                        <p class="item-description">Mollis pellentesque pellentesque feugiat risus ut amet nunc. Volutpat
                            nam convallis urna sollicitudin nuncMollis pellentesque pellentesque feugiat risus ut amet nunc.
                            Volutpat nam convallis urna sollicitudin nunc.</p>
                        <div class="item-deadline-wrap">
                            <div class="single-item-bid">
                                <p>Current Bid</p>
                                <h6>0.568ETH</h6>
                            </div>
                            <div class="item-deadline">
                                <div class="countdown text-center" data-countdown="2022/12/11"></div>
                            </div>
                        </div>
                        <div class="single-item-tab">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="history-tab" data-bs-toggle="tab"
                                        data-bs-target="#history" type="button" role="tab" aria-controls="history"
                                        aria-selected="true">History</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="bids-tab" data-bs-toggle="tab" data-bs-target="#bids"
                                        type="button" role="tab" aria-controls="bids"
                                        aria-selected="false">Bids</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="details-tab" data-bs-toggle="tab" data-bs-target="#details"
                                        type="button" role="tab" aria-controls="details"
                                        aria-selected="false">Details</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="history" role="tabpanel"
                                    aria-labelledby="history-tab">
                                    <div class="item-history-wrap">
                                        <div class="history-item">
                                            <div class="author-info">
                                                <div class="author-img">
                                                    <img src="{{ asset('frontend') }}/assets/img/author/author-15.jpg"
                                                        alt="Image">
                                                    <span class="badge"><img
                                                            src="{{ asset('frontend') }}/assets/img/badge.png"
                                                            alt="Image"></span>
                                                </div>
                                                <div class="author-name">
                                                    <h6><a href="author-profile.html">Alex Farguson</a></h6>
                                                    <span>6 Hours Ago</span>
                                                </div>
                                            </div>
                                            <div class="item-bid">
                                                <h6>9.83 ETH</h6>
                                                <span>=$125.76</span>
                                            </div>
                                        </div>
                                        <div class="history-item">
                                            <div class="author-info">
                                                <div class="author-img">
                                                    <img src="{{ asset('frontend') }}/assets/img/author/author-7.jpg"
                                                        alt="Image">
                                                    <span class="badge"><img
                                                            src="{{ asset('frontend') }}/assets/img/badge.png"
                                                            alt="Image"></span>
                                                </div>
                                                <div class="author-name">
                                                    <h6><a href="author-profile.html">Louis Fredrick</a></h6>
                                                    <span>5 Hours Ago</span>
                                                </div>
                                            </div>
                                            <div class="item-bid">
                                                <h6>9.77 ETH</h6>
                                                <span>=$123.78</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="bids" role="tabpanel" aria-labelledby="bids-tab">
                                    <div class="item-history-wrap style2">
                                        <div class="history-item">
                                            <div class="author-info">
                                                <div class="author-img">
                                                    <img src="{{ asset('frontend') }}/assets/img/author/author-1.jpg"
                                                        alt="Image">
                                                    <span class="badge"><img
                                                            src="{{ asset('frontend') }}/assets/img/badge.png"
                                                            alt="Image"></span>
                                                </div>
                                                <div class="author-name">
                                                    <h6>By <b>Wodee Neil</b></h6>
                                                    <span>Bid at <b>192 ETH</b></span>
                                                </div>
                                            </div>
                                            <div class="item-bid">
                                                <h6>9.83 ETH</h6>
                                                <span>09.00 AM</span>
                                            </div>
                                        </div>
                                        <div class="history-item">
                                            <div class="author-info">
                                                <div class="author-img">
                                                    <img src="{{ asset('frontend') }}/assets/img/author/author-2.jpg"
                                                        alt="Image">
                                                    <span class="badge"><img
                                                            src="{{ asset('frontend') }}/assets/img/badge.png"
                                                            alt="Image"></span>
                                                </div>
                                                <div class="author-name">
                                                    <h6>By <b>Louis Fredrick</b></h6>
                                                    <span>Bid at <b>222 ETH</b></span>
                                                </div>
                                            </div>
                                            <div class="item-bid">
                                                <h6>9.77 ETH</h6>
                                                <span>11.00 AM</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="details" role="tabpanel" aria-labelledby="details-tab">
                                    <div class="item-desc">
                                        <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
                                            as necessary, All the Lorem Ipsum generators on the Internet tend to repeat
                                            predefined chunks.</p>
                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab accusamus molestiae
                                            modi sint possimus beatae.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="place-bid.html" class="btn style6 w-100 d-block mt-20">Place Bid<i
                                class="flaticon-right-arrow-1"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Item Details Section End -->
@endsection
