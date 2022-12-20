@include('frontend.includes.header')

<!-- Preloader starts -->
@include('frontend.includes.pleloader')
<!--Preloader ends-->

<!-- Theme Switcher Start -->
@include('frontend.includes.switcher')
<!-- Theme Switcher End -->

<!-- Page Wrapper End -->
<div class="page-wrapper">

    @include('frontend.includes.navbar')

    @yield('home-content')

    @include('frontend.includes.footer')
