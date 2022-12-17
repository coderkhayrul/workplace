@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>Login</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="{{ route('web.home') }}">Home </a></li>
                            <li>Login</li>
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

    <!-- Account Section start -->
    <section class="Login-wrap ptb-100 bg-zodiac">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="login-bg style2 bg-f">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-form-wrap">
                        <div class="login-header">
                            <h3>Sign In</h3>
                        </div>
                        <div class="login-form">
                            <div class="login-body">
                                <form class="form-wrap" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input class="@error('password') is-invalid @enderror" id="email"
                                                    name="email" type="email" required placeholder="Email">
                                                @error('email')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input id="pwd" name="password" type="password" required
                                                    placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="test_1" name="remember">
                                                <label for="test_1">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-6 text-end mb-20">
                                            <a href="{{ route('password.request') }}" class="link style1">Forgot
                                                Password?</a>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <button class="btn style1 w-100 d-block">
                                                    Sign In
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="or-text">
                                                <p>Or Login With</p>
                                                <ul class="social-profile style1 list-style">
                                                    <li>
                                                        <a class="fb" target="_blank" href="https://facebook.com/">
                                                            <i class="ri-facebook-fill"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="tt" target="_blank" href="https://twitter.com/">
                                                            <i class="ri-twitter-fill"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="gplus" target="_blank" href="https://instagram.com/">
                                                            <i class="ri-instagram-line"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="linkedin" target="_blank" href="https://linkedin.com/">
                                                            <i class="ri-linkedin-fill"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center mt-25">
                                            <p class="mb-0">Don't Have an Account? <a class="link style1"
                                                    href="{{ route('register') }}">Create One</a></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Account Section end -->
@endsection
