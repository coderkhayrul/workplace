<!-- Header Section Start -->
<header class="header-wrap style1">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{ route('web.home') }}">
                <img src="{{ asset('uploads/setting/' . $setting->logo) }}" alt="logo">
            </a>
            <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                <div class="menu-close d-lg-none">
                    <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                </div>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item has-child">
                        <a href="{{route('web.home')}}" class="nav-link">
                            Home
                        </a>
                    </li>
                    <li class="nav-item has-child">
                        <a href="#" class="nav-link">
                            Categories
                            <i class="ri-add-line"></i>
                        </a>
                        <ul class="dropdown-menu">
                            @foreach ($navbars as $navbar)
                                <li class="nav-item has-child">
                                    <a href="{{ route('web.category.service', $navbar->slug) }}" class="nav-link">
                                        {{ $navbar->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="nav-item has-child">
                        <a href="{{ route('web.digital.product.all') }}" class="nav-link">
                            Our Products
                        </a>
                    </li>

                    <li class="nav-item has-child">
                        <a href="#" class="nav-link">
                            About us
                        </a>
                    </li>
                    <li class="nav-item has-child">
                        <a href="#" class="nav-link">
                            Contact Us
                        </a>
                    </li>


                    @guest
                        <li class="nav-item d-lg-none">
                            <a href="{{ route('login') }}" class="btn style1">Sign in</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item d-lg-none">
                            <a href="{{ route('web.profile', Auth::user()->user_slug) }}" class="btn style1">Profile</a>
                        </li>
                    @endauth
                </ul>
                <div class="others-options md-none">
                    <button class="searchbtn"><i class="ri-search-line"></i></button>
                </div>
                @guest
                    <div class="others-options md-none">
                        <div class="header-btn">
                            <a href="{{ route('login') }}" class="btn style1">Sign In<i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                    </div>
                @endguest
                @auth
                    <div class="others-options md-none">
                        <div class="header-btn">
                            @if (Auth::user()->role->role_slug == 'seller')
                                <a href="{{ route('web.seller.profile', Auth::user()->user_slug) }}"
                                    class="btn style1">Dashboard<i class="flaticon-user-avatar"></i></a>
                            @elseif(Auth::user()->role->role_slug == 'buyer')
                                <a href="{{ route('web.buyer.profile', Auth::user()->user_slug) }}"
                                    class="btn style1">Dashboard<i class="flaticon-user-avatar"></i></a>
                            @endif
                        </div>
                    </div>
                @endauth
            </div>
        </nav>
        <div class="mobile-bar-wrap">
            <button class="searchbtn d-lg-none"><i class="ri-search-line"></i></button>
            <div class="mobile-menu d-lg-none">
                <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
            </div>
        </div>
    </div>
</header>

<div class="search-area">
    <div class="container">
        <form action="{{ Route('web.search') }}" method="get">
            @csrf
            <div class="form-group">
                <input name="search" type="search" placeholder="Search Here" autofocus>
            </div>
        </form>
        <button type="button" class="close-searchbox">
            <i class="ri-close-line"></i>
        </button>
    </div>
</div>
<!-- Header Section End -->
