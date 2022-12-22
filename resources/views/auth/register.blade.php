@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>Register</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="{{ route('web.home') }}">Home </a></li>
                            <li>Register</li>
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
                    <div class="login-bg style1 bg-f">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="login-form-wrap">
                        <div class="login-header">
                            <h3>Sign Up</h3>
                        </div>
                        <div class="login-form">
                            <div class="login-body">
                                <form class="form-wrap" action="{{ route('register') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input id="text" name="user_name" type="text"
                                                    placeholder="User Name" required>
                                                @error('user_name')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input id="email" name="email" type="email" placeholder="Email"
                                                    required>
                                                @error('email')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <select name="role_id">
                                                    <option label="User Type"></option>
                                                    <option value="3">Seller</option>
                                                    <option value="4">Buyer</option>
                                                </select>
                                                @error('role_id')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input id="pwd" name="password" type="password" placeholder="Password"
                                                    required>
                                                @error('password')
                                                    <span class="text-danger">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <input id="pwd_2" name="password_confirmation"
                                                    placeholder="Confirm Password" type="password" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-12 mb-20">
                                            <div class="checkbox style3">
                                                <input type="checkbox" id="test_1" name="remember">
                                                <label for="test_1">
                                                    I Agree with the <a class="link style1" href="#">Terms &amp;
                                                        conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <button class="btn style1">
                                                    Sign Up
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center">
                                            <p class="mb-0">Have an Account? <a class="link style1"
                                                    href="{{ route('login') }}">Sign
                                                    In</a></p>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="or-text">
                                                <p>Or Sign Up With</p>
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
