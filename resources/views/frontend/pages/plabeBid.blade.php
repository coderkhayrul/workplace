@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>Place Bid</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="{{ route('web.home') }}">Home </a></li>
                            <li>Place Bid</li>
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

   <!-- Place A Bid Start -->
    <section class="place-bid-wrap ptb-100 bg-zodiac">
        <div class="container">
            <div class="row">
                <div class="bid-title mb-3">
                    <h2 class="text-light text-capitalize text-center">{{$service->title}}</h2>
                </div>
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="bidding-popup mt-5">
                        <h2>Place A Bid</h2>
                        <h6>You must bid at least <span>5.88 ETH</span></h6>
                        <form action="#" class="bidding-form">
                            <div class="form-group">
                                <input type="number" placeholder="00.00 ETH">
                            </div>
                            <div class="form-group">
                                <p>Enter Quantity: <span>5 Available</span></p>
                                <input type="number" placeholder="00.00 ETH">
                            </div>
                        </form>
                        <ul class="bidding-tablelist list-style">
                            <li>
                                <p>You must bid at least</p>
                                <span>5.88 ETH</span>
                            </li>
                            <li>
                                <p>Service Fee</p>
                                <span>0.88 ETH</span>
                            </li>
                            <li>
                                <p>Total Bid Amount</p>
                                <span>5 ETH</span>
                            </li>
                        </ul>
                        <button class="btn style1" type="submit"> Place A Bid</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Place A Bid End -->
@endsection
