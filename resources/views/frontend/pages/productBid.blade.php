@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>{{ $product->product_name }}</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="{{ route('web.home') }}">Home </a></li>
                            <li>Product Details</li>
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
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-md-10 offset-md-1">
                    <div class="bidding-popup">
                        <h2>Payment Information</h2>
                        <h6 class="text-danger">Fill out the form after making the <b>Total Payment</b>. thank you</h6>
                        <h6>Payment Sent : <b class="text-primary">01834576854</b></h6>
                        <form action="{{ route('web.digital.product.order') }}" class="bidding-form" method="POST">
                            @csrf
                            <input name="user_id" type="hidden" value="{{ Auth::id() }}">
                            <input name="product_id" type="hidden" value="{{ $product->id }}">
                            <input name="price" type="hidden" value="{{ $product->product_price }}">
                            <input name="service_fee" type="hidden" value="150">
                            <div class="form-group">
                                <input name="name" type="text" placeholder="Name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="email" type="email" placeholder="Email" value="{{ old('email') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="bank_name" type="text" placeholder="Bank Name"
                                    value="{{ old('bank_name') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="phone" type="number" placeholder="Phone Number"
                                    value="{{ old('phone') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="tns_number" type="text" placeholder="Payment Transaction ID"
                                    value="{{ old('tns_number') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input name="total_amount" type="number" placeholder="Amount"
                                    value="{{ old('total_amount') }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <ul class="bidding-tablelist list-style">
                                <li>
                                    <p>Price</p>
                                    <span>{{ $product->product_price }} TK</span>
                                </li>
                                <li>
                                    <p>Service Fee</p>
                                    <span>150 Tk</span>
                                </li>
                                <li>
                                    <p>Total Amount</p>
                                    <span>{{ $product->product_price + 150 }} TK</span>
                                </li>
                            </ul>
                            <button class="btn style1" type="submit"> Payment Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Place A Bid End -->
@endsection
