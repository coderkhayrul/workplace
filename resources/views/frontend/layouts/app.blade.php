<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Link of CSS files -->
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/remixicon.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/fancybox.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/aos.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/dark-theme.css">
    <title>Workplace - Freelance Service Markatplace</title>
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/assets/img/favicon.png">
</head>

<body>

    <!--Preloader starts-->
    <div class="preloader js-preloader">
        <img src="{{ asset('frontend') }}/assets/img/preloader.gif" alt="Image">
    </div>
    <!--Preloader ends-->

    <!-- Theme Switcher Start -->
    <div class="switch-theme-mode">
        <label id="switch" class="switch">
            <input type="checkbox" onchange="toggleTheme()" id="slider">
            <span class="slider round"></span>
        </label>
    </div>
    <!-- Theme Switcher End -->

    <!-- Page Wrapper End -->
    <div class="page-wrapper">

        <!-- Header Section Start -->
        <header class="header-wrap style1">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('frontend') }}/assets/img/logo-white.png" alt="logo">
                    </a>
                    <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                        <div class="menu-close d-lg-none">
                            <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                        </div>
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item has-child">
                                <a href="#" class="nav-link">
                                    Graphice Design
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
                            <li class="nav-item has-child">
                                <a href="#" class="nav-link">
                                    Digital Marketing
                                    <i class="ri-add-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">SEO</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link ">Local Seo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Display Advertising</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-child">
                                <a href="#" class="nav-link">
                                    Programming Tech
                                    <i class="ri-add-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Website Development</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link ">Custom Website</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">Wordpress</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item has-child">
                                <a href="#" class="nav-link">
                                    Video Animation
                                    <i class="ri-add-line"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="activity.html" class="nav-link">Video Edition</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="collection.html" class="nav-link">Visual Effects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="create-collection.html" class="nav-link">Rigging</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="place-bid.html" class="nav-link">Character Animation</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item d-lg-none">
                                <a href="login.html" class="btn style1">Sign in</a>
                            </li>
                        </ul>
                        <div class="others-options  md-none">
                            <button class="searchbtn"><i class="ri-search-line"></i></button>
                        </div>
                        <div class="others-options  md-none">
                            <div class="header-btn">
                                <a href="Login-2.html" class="btn style1">Sign In<i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
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

        <!-- New Service Section Start -->
        <section class="auction-wrap ptb-100 bg-zodiac">
            <div class="container mt-3">
                <div class="row mb-40 align-items-end">
                    <div class="col-md-8">
                        <div class="section-title style2">
                            <span>Collection</span>
                            <h2>New Service</h2>
                        </div>
                    </div>
                </div>
                <div class="auction-slider-one style1 owl-carousel">
                    <div class="auction-card style1" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-16.jpg" alt="Image">
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Abstract Art On Wall</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-15.jpg"
                                            alt="Image">
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Viola Bush</a></h6>
                                        <a href="author-profile.html">@viola</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>1.56ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                            <div class="auction-stock">
                                <p>25+ Place Bid</p>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-card style1" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="300">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-17.jpg" alt="Image">
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Twilight City Art</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-3.jpg"
                                            alt="Image">
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Hugh Snee</a></h6>
                                        <a href="author-profile.html">@hugh</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>2.34ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                            <div class="auction-stock">
                                <p>19+ Place Bid</p>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-card style1" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="400">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-18.jpg" alt="Image">
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Walking On Air</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-10.jpg"
                                            alt="Image">
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Harold Tyler</a></h6>
                                        <a href="author-profile.html">@harold</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>1.23ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                            <div class="auction-stock">
                                <p>17+ Place Bid</p>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-card style1" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="500">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-19.jpg" alt="Image">
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Exe Dream Light</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-1.jpg"
                                            alt="Image">
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Lane Bourn</a></h6>
                                        <a href="author-profile.html">@bourn</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>0.56ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                            <div class="auction-stock">
                                <p>22+ Place Bid</p>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-card style1" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="600">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-20.jpg" alt="Image">
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Etharum On Diamond</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-7.jpg"
                                            alt="Image">
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Les Carter</a></h6>
                                        <a href="author-profile.html">@carter</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>1.45ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                            <div class="auction-stock">
                                <p>16+ Place Bid</p>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="auction-card style1" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="700">
                        <div class="auction-img">
                            <img src="{{ asset('frontend') }}/assets/img/nft/nft-21.jpg" alt="Image">
                        </div>
                        <div class="auction-info-wrap">
                            <h3><a href="item-details.html">Super Neumorphism</a></h3>
                            <div class="auction-author-info">
                                <div class="author-info">
                                    <div class="author-img">
                                        <img src="{{ asset('frontend') }}/assets/img/author/author-3.jpg"
                                            alt="Image">
                                    </div>
                                    <div class="author-name">
                                        <h6><a href="author-profile.html">Willium David</a></h6>
                                        <a href="author-profile.html">@david</a>
                                    </div>
                                </div>
                                <div class="auction-bid">
                                    <h6>2.43ETH</h6>
                                    <span>Current Bid</span>
                                </div>
                            </div>
                            <div class="auction-stock">
                                <p>21+ Place Bid</p>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- New Service Section End -->

        <!-- Category Wise Product Section Start -->
        <section class="nft-wrap ptb-10 bg-zodiac">
            <div class="container">
                <div class="row mb-40 align-items-end">
                    <div class="col-md-8">
                        <div class="section-title style2">
                            <span>Popular Service</span>
                            <h2>Web Programming</h2>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-end sm-none">
                        <a href="explore-products.html" class="btn style1">View All<i
                                class="flaticon-right-arrow-1"></i></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-1.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.3k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Fly Higher Space</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-13.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Tom Hanks</a></h6>
                                            <a href="author-profile.html">@hanks</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.668ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="300">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-2.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>2.3k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Dodge The Braink</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-6.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Angela Plasty</a></h6>
                                            <a href="author-profile.html">@angela</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.254ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="400">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-3.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Les Immoratals</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-4.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Amelia Rose</a></h6>
                                            <a href="author-profile.html">@amelia</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>1.068ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="500">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-4.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>2.2k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Modern Revolution</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-1.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Orson Carte</a></h6>
                                            <a href="author-profile.html">@orson</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>2.68ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="600">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-5.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">3D Triangle Art</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-3.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">James Parker</a></h6>
                                            <a href="author-profile.html">@parket</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>1.228ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="700">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-6.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.6k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Blue Angle</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-5.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Thomas Eddi</a></h6>
                                            <a href="author-profile.html">@thomas</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>2.068ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="800">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-7.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.1k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Diamond Art</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-12.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Jack Sparrow</a></h6>
                                            <a href="author-profile.html">@Sparrow</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.068ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="900">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-8.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.5k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Icecube Immoratals</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-8.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Olivia Jen</a></h6>
                                            <a href="author-profile.html">@olivia</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.468ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Wise Product Section End -->

        <!-- Category Wise Product Section Start -->
        <section class="nft-wrap ptb-100 bg-zodiac">
            <div class="container">
                <div class="row mb-40 align-items-end">
                    <div class="col-md-8">
                        <div class="section-title style2">
                            <span>Collection</span>
                            <h2>Video Animation</h2>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-end sm-none">
                        <a href="#" class="btn style1">View All<i class="flaticon-right-arrow-1"></i></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-1.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.3k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Fly Higher Space</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-13.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Tom Hanks</a></h6>
                                            <a href="author-profile.html">@hanks</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.668ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="300">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-2.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>2.3k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Dodge The Braink</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-6.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Angela Plasty</a></h6>
                                            <a href="author-profile.html">@angela</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.254ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="400">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-3.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Les Immoratals</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-4.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Amelia Rose</a></h6>
                                            <a href="author-profile.html">@amelia</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>1.068ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="500">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-4.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>2.2k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Modern Revolution</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-1.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Orson Carte</a></h6>
                                            <a href="author-profile.html">@orson</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>2.68ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="600">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-5.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">3D Triangle Art</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-3.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">James Parker</a></h6>
                                            <a href="author-profile.html">@parket</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>1.228ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="700">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-6.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.6k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Blue Angle</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-5.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Thomas Eddi</a></h6>
                                            <a href="author-profile.html">@thomas</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>2.068ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="800">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-7.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.1k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Diamond Art</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-12.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Jack Sparrow</a></h6>
                                            <a href="author-profile.html">@Sparrow</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.068ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="900">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-8.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.5k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Icecube Immoratals</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-8.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Olivia Jen</a></h6>
                                            <a href="author-profile.html">@olivia</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.468ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Wise Product Section End -->

        <!-- CTA Ads Section Start -->
        <section class="cta-wrap">
            <img src="{{ asset('frontend') }}/assets/img/cta-shape-1.png" alt="Image" class="cta-shape">
            <div class="container">
                <div class="row align-items-end" data-aos="fade-right" data-aos-duration="1200"
                    data-aos-delay="200">
                    <div class="col-lg-6">
                        <div class="cta-content ptb-100">
                            <div class="content-title style2">
                                <span>Earn Now</span>
                                <h2>Convart Web Visitor Into Customers</h2>
                            </div>
                            <a href="create-collection.html" class="btn style6">Make Service<i
                                    class="flaticon-right-arrow-1"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="300">
                        <div class="cta-img-wrap">
                            <img src="{{ asset('frontend') }}/assets/img/cta-1.png" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Ads Section End -->

        <!-- Category Wise Product Section Start -->
        <section class="nft-wrap ptb-100 bg-zodiac">
            <div class="container">
                <div class="row mb-40 align-items-end">
                    <div class="col-md-8">
                        <div class="section-title style2">
                            <span>Collection</span>
                            <h2>Digital Markation</h2>
                        </div>
                    </div>
                    <div class="col-md-4 text-md-end sm-none">
                        <a href="#" class="btn style1">View All<i class="flaticon-right-arrow-1"></i></a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-1.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.3k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Fly Higher Space</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-13.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Tom Hanks</a></h6>
                                            <a href="author-profile.html">@hanks</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.668ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="300">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-2.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>2.3k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Dodge The Braink</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-6.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Angela Plasty</a></h6>
                                            <a href="author-profile.html">@angela</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.254ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="400">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-3.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Les Immoratals</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-4.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Amelia Rose</a></h6>
                                            <a href="author-profile.html">@amelia</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>1.068ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="500">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-4.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>2.2k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Modern Revolution</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-1.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Orson Carte</a></h6>
                                            <a href="author-profile.html">@orson</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>2.68ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="600">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-5.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.4k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">3D Triangle Art</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-3.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">James Parker</a></h6>
                                            <a href="author-profile.html">@parket</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>1.228ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="700">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-6.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.6k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Blue Angle</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-5.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Thomas Eddi</a></h6>
                                            <a href="author-profile.html">@thomas</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>2.068ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="800">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-7.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.1k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Diamond Art</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-12.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Jack Sparrow</a></h6>
                                            <a href="author-profile.html">@Sparrow</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.068ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1200"
                        data-aos-delay="900">
                        <div class="auction-card style3">
                            <div class="auction-img">
                                <img src="{{ asset('frontend') }}/assets/img/nft/nft-8.jpg" alt="Image">
                                <span class="item-popularity"><i class="ri-heart-fill"></i>1.5k</span>
                                <a href="place-bid.html" class="btn style1">Place Bid <i
                                        class="flaticon-right-arrow-1"></i></a>
                            </div>
                            <div class="auction-info-wrap">
                                <h3><a href="item-details.html">Icecube Immoratals</a></h3>
                                <div class="auction-author-info">
                                    <div class="author-info">
                                        <div class="author-img">
                                            <img src="{{ asset('frontend') }}/assets/img/author/author-8.jpg"
                                                alt="Image">
                                            <span class="badge"><img
                                                    src="{{ asset('frontend') }}/assets/img/badge.png"
                                                    alt="Image"></span>
                                        </div>
                                        <div class="author-name">
                                            <h6><a href="author-profile.html">Olivia Jen</a></h6>
                                            <a href="author-profile.html">@olivia</a>
                                        </div>
                                    </div>
                                    <div class="auction-bid">
                                        <h6>0.468ETH</h6>
                                        <span>Current Bid</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Category Wise Product Section End -->

        <!-- Promo Section Start -->
        <section class="promo-wrap pt-100 pb-75 bg-pearl">
            <div class="container">
                <div class="section-title style2 text-center mb-40">
                    <span>Create &amp; Sell</span>
                    <h2>Create &amp; Sell Your NFT's</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200"
                        data-aos-delay="200">
                        <div class="promo-card style1">
                            <span class="count-num">01</span>
                            <div class="promo-icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon-1.png" alt="Image">
                            </div>
                            <div class="promo-info">
                                <h3>Set Up Your Wallet</h3>
                                <p>Eget nulla pha sellus odio sit portti ena tib aliquam blandit gravida ulcies eleifend
                                    varius tempo solo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-right" data-aos-duration="1200"
                        data-aos-delay="300">
                        <div class="promo-card style1">
                            <span class="count-num">02</span>
                            <div class="promo-icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon-2.png" alt="Image">
                            </div>
                            <div class="promo-info">
                                <h3>Create Collection</h3>
                                <p>Eget nulla pha sellus odio sit portti ena tib aliquam blandit gravida ulcies eleifend
                                    varius tempo solo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-right"
                        data-aos-duration="1200" data-aos-delay="400">
                        <div class="promo-card style1">
                            <span class="count-num">03</span>
                            <div class="promo-icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon-3.png" alt="Image">
                            </div>
                            <div class="promo-info">
                                <h3>Add Your NTFs</h3>
                                <p>Eget nulla pha sellus odio sit portti ena tib aliquam blandit gravida ulcies eleifend
                                    varius tempo solo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6" data-aos="fade-right"
                        data-aos-duration="1200" data-aos-delay="500">
                        <div class="promo-card style1">
                            <span class="count-num">04</span>
                            <div class="promo-icon">
                                <img src="{{ asset('frontend') }}/assets/img/icon-4.png" alt="Image">
                            </div>
                            <div class="promo-info">
                                <h3>List Item for Sale</h3>
                                <p>Eget nulla pha sellus odio sit portti ena tib aliquam blandit gravida ulcies eleifend
                                    varius tempo solo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Promo Section End -->

        <!-- Newsletter Section Start -->
        <section class="newsletter-wrap ptb-100">
            <img src="{{ asset('frontend') }}/assets/img/newsletter-bg.png" alt="Image"
                class="newsletter-shape-one">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                        <div class="content-title style2">
                            <span>Subscribe To Newsletter</span>
                            <h2>Want To Get Notify On Product Updates?</h2>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                        <form action="#" class="newsletter-form">
                            <input type="email" placeholder="Enter Your Email Address">
                            <button type="submit">Subscribe Now <i class="ri-send-plane-fill"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Newsletter Section End -->

        <!-- Footer Section Start -->
        <footer class="footer-wrap bg-f pt-100 ">
            <img src="{{ asset('frontend') }}/assets/img/footer-shape-1.png" alt="Image"
                class="footer-shape-one animationFramesTwo">
            <img src="{{ asset('frontend') }}/assets/img/footer-shape-2.png" alt="Image"
                class="footer-shape-two bounce">
            <div class="container">
                <div class="row pb-75">
                    <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 pe-lg-5">
                        <div class="footer-widget">
                            <a href="index.html" class="footer-logo">
                                <img src="{{ asset('frontend') }}/assets/img/logo-white.png" alt="Image">
                            </a>
                            <p class="comp-desc">
                                Duis cursus, mi quis viverra ornare, eros dolor nulla utimp erdiet commodo. Mollis
                                petesque pellen his tesque feu giat risus ut amet volutpat nam convallis urna
                                sollicitudin nunc opellen tesque pellen tesque feugiat risus.
                            </p>
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
                    <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-6 col-sm-6 ps-xxl-5">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Marketplace</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="explore-products.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Art
                                    </a>
                                </li>
                                <li>
                                    <a href="live-auction.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        All NFTs
                                    </a>
                                </li>
                                <li>
                                    <a href="explore-products.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Music
                                    </a>
                                </li>
                                <li>
                                    <a href="explore-products.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Trending Card
                                    </a>
                                </li>
                                <li>
                                    <a href="item-details.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Item Details
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6  ps-xxl-5 ps-lg-5">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">My Account</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="authors.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Authors
                                    </a>
                                </li>
                                <li>
                                    <a href="author-profile.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Author Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="collection.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Top Collection
                                    </a>
                                </li>
                                <li>
                                    <a href="create-collection.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Create Collection
                                    </a>
                                </li>
                                <li>
                                    <a href="activity.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Recent Activity
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-widget">
                            <h3 class="footer-widget-title">Resources</h3>
                            <ul class="footer-menu list-style">
                                <li>
                                    <a href="about.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        About Us
                                    </a>
                                </li>
                                <li>
                                    <a href="contact.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="blog-left-sidebar.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Latest News
                                    </a>
                                </li>
                                <li>
                                    <a href="privacy-policy.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="terms-of-service.html" target="_blank">
                                        <i class="flaticon-next-1"></i>
                                        Terms &amp; Conditions
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <p class="copyright-text"><i class="ri-copyright-line"></i> <span>Anfi</span>. All Rights Reserved By <a
                    href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
        </footer>
        <!-- Footer Section End -->

    </div>
    <!-- Page Wrapper End -->

    <!-- Back-to-top button Start -->
    <a href="javascript:void(0)" class="back-to-top bounce"><i class="ri-arrow-up-s-line"></i></a>
    <!-- Back-to-top button End -->

    <!-- Link of JS files -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/form-validator.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/contact-form-script.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/aos.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.countdown.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/fancybox.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/jquery.appear.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/tweenmax.min.js"></script>
    <script src="{{ asset('frontend') }}/assets/js/main.js"></script>
</body>


<!-- Mirrored from templates.envytheme.com/anfi/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 16 Dec 2022 20:44:32 GMT -->

</html>
