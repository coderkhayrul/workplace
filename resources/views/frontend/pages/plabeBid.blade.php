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
                        <form action="#" class="bidding-form">
                            <div class="form-group">
                                <label for="bidtitle">Bid Title</label>
                                <input type="text" name="bid-title" placeholder="Enter Bid Title" id="bidtitle" style="background-color:#203048; outline-style: none; border:none">
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <input type="number" name="price" placeholder="Enter Bid Price" id="price" style="background-color:#203048; outline-style: none; border:none">
                            </div>
                            <div class="form-group">
                                <label for="bidtitle">Date Line</label>
                                <input type="date" name="bid-title" placeholder="Enter Bid Title" id="bidtitle">
                            </div>
                            <div class="form-group">
                                <label for="bidtitle">File</label>
                                <input name="file" type="file" class="form-control" id="inputGroupFile02">
                            </div>
                            <div class="form-group">
                                <label for="bidtitle">Drescreption</label>
                                <textarea name="bidDes" style="background-color:#203048; outline-style: none; border:none" class="form-control text-light" rows="5"></textarea>
                            </div>

                            <button type="submit" class="btn style1" type="submit"> Place A Bid</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Place A Bid End -->
@endsection
