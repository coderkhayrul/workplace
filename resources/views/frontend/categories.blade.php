@extends('frontend.layouts.app')
@section('home-content')
@php
$setting = App\Models\Backend\Setting::first();
@endphp

 <!-- Content Wrapper Start -->
 <div class="content-wrapper">

<!-- Breadcrumb Start -->
<div class="breadcrumb-wrap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumb-title">
                    <h2>Collection</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="index.html">Home </a></li>
                        <li>Categories</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6">
    <div class="breadcrumb-img">
        <img class="br-img" src="{{asset('frontend/assets/img/breadcrumb/breadcrumb-1.png')}}" alt="Image">
        <img class="br-shape" src="assets/img/breadcrumb/br-shape.png" alt="Image">
    </div>
</div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->
@php
$categories = App\Models\Backend\Category::where('status', 1)->get(); 
@endphp

<!-- Author Section Start -->
<section class="author-wrap pb-75 bg-zodiac">
    <div class="container">
        <div class="section-title style2 mb-40">
            <h2>Top Categories</h2>
        </div>
        <div class="row justify-content-center">
        @foreach($categories as $catego)
            <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                <div class="seller-card">
                    <div class="seller-info-wrap">
                        <div class="seller-info">
                            <h3><a href="{{ route('web.category.service', $catego->slug) }}">{{$catego->name}}</a></h3>
                            
                        </div>
                    </div>
                </div>
            </div>
@endforeach
        </div>
    </div>
</section>
<!-- Author Section End -->

</div>
<!-- Content Wrapper End -->

@endsection

