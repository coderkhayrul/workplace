<!-- Header Section Start -->
<header class="header-wrap style1">
    <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{ route('web.home') }}">
                <img src="{{ asset('frontend') }}/assets/img/logo-white.png" alt="logo">
            </a>
            <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                <div class="menu-close d-lg-none">
                    <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                </div>
                <ul class="navbar-nav ms-auto">
                    @foreach ($navbars as $navbar)
                        <li class="nav-item has-child">
                            <a href="#" class="nav-link">
                                {{ $navbar->name }}
                                <i class="ri-add-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">Website Design</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link ">Logo Design</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-3.html" class="nav-link">App Desigin</a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.html" class="nav-link active">Flyer Design</a>
                                </li>
                            </ul>
                        </li>
                    @endforeach

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
                <div class="others-options  md-none">
                    <button class="searchbtn"><i class="ri-search-line"></i></button>
                </div>
                @guest
                    <div class="others-options  md-none">
                        <div class="header-btn">
                            <a href="{{ route('login') }}" class="btn style1">Sign In<i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                    </div>
                @endguest
                @auth
                    <div class="others-options  md-none">
                        <div class="header-btn">
                            <a href="{{ route('web.profile', Auth::user()->user_slug) }}" class="btn style1">Profile<i
                                    class="flaticon-user-avatar"></i></a>
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
        <form action="#">
            <div class="form-group">
                <input type="search" placeholder="Search Here" autofocus>
            </div>
        </form>
        <button type="button" class="close-searchbox">
            <i class="ri-close-line"></i>
        </button>
    </div>
</div>
<!-- Header Section End -->
