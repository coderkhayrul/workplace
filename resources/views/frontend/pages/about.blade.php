@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>About Us</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="index.html">Home </a></li>
                            <li>About Us</li>
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

    <!-- About Section Start -->
    <section class="about-wrap pt-100 pb-75 bg-zodiac">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-wrap">
                        <img src="{{ asset('frontend') }}/assets/img/about/about-img-1.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="content-title style2">
                            <span>About Us</span>
                            <h2>About Our Company</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Elementum lacus tempus aliquam turpis
                                diam amet leo enim. Nisi enim condimentum tincidunt ornare nam adipisc ingvolu lacus, est
                                hendrerit elit sed interdum. amet leo enim. Nisi enim lorem hepotis ipsum nam adipiscing.
                                Volutpat lacus, est hendrerit. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Elem entum lacus, tempus aliquam
                                turpis diam amet leo enim. Nisi enim condim entum tincidunt ornare nam adip iscing. Volut
                                lacus, est hendrerit elit sed inte rdum. amet leo enim.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center pt-50">
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <div class="promo-card style4">
                        <div class="promo-icon">
                            <i class="flaticon-shield"></i>
                        </div>
                        <div class="promo-info">
                            <h3>High Security Assets Transfer</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <div class="promo-card style4">
                        <div class="promo-icon">
                            <i class="flaticon-support"></i>
                        </div>
                        <div class="promo-info">
                            <h3>24/7 live Support with skype & Email</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <div class="promo-card style4">
                        <div class="promo-icon">
                            <i class="flaticon-quality-control"></i>
                        </div>
                        <div class="promo-info">
                            <h3>Top Class And NFT Products</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                    <div class="promo-card style4">
                        <div class="promo-icon">
                            <i class="flaticon-planet-earth"></i>
                        </div>
                        <div class="promo-info">
                            <h3>Regular Training & Seller Courses</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Testimonial Section Start -->
    <section class="testimonial-wrap bg-pearl ptb-100">
        <div class="container">
            <div class="section-title style2 text-center mb-40">
                <span>Testimonial</span>
                <h2>What Our Client Says</h2>
            </div>
            <div class="testimonial-slider-one owl-carousel">
                <div class="testimonial-card">
                    <p class="client-quote">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique maxime excepturi, dolorem
                        perferendis voluptates ad! Repellendus fuga doloribus, tempore fugit autem optio placeat corporis
                        deleniti architecto debitis, esse, vero dolor!
                    </p>
                    <div class="client-info">
                        <h5>Charlotte Sophia</h5>
                        <span>CEO &amp; Founder, IBAT</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="client-quote">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique maxime excepturi, dolorem
                        perferendis voluptates ad! Repellendus fuga doloribus, tempore fugit autem optio placeat corporis
                        deleniti architecto debitis, esse, vero dolor!
                    </p>
                    <div class="client-info">
                        <h5>Tony Stark</h5>
                        <span>Enterprenaur</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <p class="client-quote">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique maxime excepturi, dolorem
                        perferendis voluptates ad! Repellendus fuga doloribus, tempore fugit autem optio placeat corporis
                        deleniti architecto debitis, esse, vero dolor!
                    </p>
                    <div class="client-info">
                        <h5>Nicolas Cage</h5>
                        <span>Director, MATT</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Team Section Start -->
    <section class="team-wrap pt-100 pb-75 bg-zodiac">
        <div class="container">
            <div class="section-title style2 text-center mb-40">
                <span>Our Team</span>
                <h2>Meet Our Members</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card">
                        <img src="{{ asset('frontend') }}/assets/img/team/team-1.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Olivia Jenor</h3>
                            <span>Head Of Operations</span>
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
                                <li>
                                    <a target="_blank" href="https://linkedin.com/">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card">
                        <img src="{{ asset('frontend') }}/assets/img/team/team-2.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Gali Forcewind</h3>
                            <span>Senior Manager</span>
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
                                <li>
                                    <a target="_blank" href="https://linkedin.com/">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card">
                        <img src="{{ asset('frontend') }}/assets/img/team/team-3.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Poppa Cherry</h3>
                            <span>Directory</span>
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
                                <li>
                                    <a target="_blank" href="https://linkedin.com/">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card">
                        <img src="{{ asset('frontend') }}/assets/img/team/team-4.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Mandy Morton</h3>
                            <span>Business Analyst</span>
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
                                <li>
                                    <a target="_blank" href="https://linkedin.com/">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card">
                        <img src="{{ asset('frontend') }}/assets/img/team/team-5.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Cassandra Burrows</h3>
                            <span>Senior Executive</span>
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
                                <li>
                                    <a target="_blank" href="https://linkedin.com/">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card">
                        <img src="{{ asset('frontend') }}/assets/img/team/team-6.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Bruno Skinner</h3>
                            <span>HR Manager</span>
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
                                <li>
                                    <a target="_blank" href="https://linkedin.com/">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card">
                        <img src="{{ asset('frontend') }}/assets/img/team/team-7.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Baxter Woolery</h3>
                            <span>Account Manager</span>
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
                                <li>
                                    <a target="_blank" href="https://linkedin.com/">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                    <div class="team-card">
                        <img src="{{ asset('frontend') }}/assets/img/team/team-8.jpg" alt="Image">
                        <div class="team-info">
                            <h3>Elsie Daves</h3>
                            <span>Executive</span>
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
                                <li>
                                    <a target="_blank" href="https://linkedin.com/">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->
@endsection
