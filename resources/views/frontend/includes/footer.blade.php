<!-- Footer Section Start -->
<footer class="footer-wrap bg-f pt-100 ">
    <img src="{{ asset('frontend') }}/assets/img/footer-shape-1.png" alt="Image"
        class="footer-shape-one animationFramesTwo">
    <img src="{{ asset('frontend') }}/assets/img/footer-shape-2.png" alt="Image" class="footer-shape-two bounce">
    <div class="container">
        <div class="row pb-75">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-6 col-sm-6 pe-lg-5">
                <div class="footer-widget">
                    <a href="" class="footer-logo">
                        <img src="{{ asset('uploads/setting/' . $setting->logo) }}" alt="Image">
                    </a>
                    <p class="comp-desc">{{ $setting->short_description }}</p>

                    <ul class="social-profile style1 list-style">
                        <li>
                            <a target="_blank" href="{{ $setting->facebook_link }}">
                                <i class="ri-facebook-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $setting->instagram_link }}">
                                <i class="ri-twitter-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $setting->twitter_link }}">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ $setting->linkedin_link }}">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xxl-3 col-xl-2 col-lg-2 col-md-6 col-sm-6 ps-xxl-5">
                {{-- <div class="footer-widget">
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
                </div> --}}
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6 ps-xxl-5 ps-lg-5">
                {{-- <div class="footer-widget">
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

                </div> --}}
            </div>
            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Resources</h3>
                    <ul class="footer-menu list-style">
                        <li>
                            <a href="{{ route('web.aboutpage') }}" target="_blank">
                                <i class="flaticon-next-1"></i>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('web.contactpage') }}">
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
                            <a href="{{ route('web.privacypolicy') }}">
                                <i class="flaticon-next-1"></i>
                                privacy Policy
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('web.termsandconditons') }}">
                                <i class="flaticon-next-1"></i>
                                Terms &amp; Conditions
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <p class="copyright-text"><i class="ri-copyright-line"></i> <span>{{ $setting->company_name }}</span>. All Rights
        Reserved
        By <a href="" target="_blank">{{ $setting->company_name }}</a></p>
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
 <!--Start of Tawk.to Script-->
 <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6392d30bb0d6371309d36af2/1gm1dlnj5';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->
<!-- Toastr -->
<script src="{{ asset('frontend/assets/plagins/toastr/toastr.min.js') }}"></script>

<script>
    @if (Session::has('message'))

        // // Custom SweetAlert
        // const Toast = Swal.mixin({
        //     toast: true,
        //     position: 'top-end',
        //     showConfirmButton: false,
        //     timer: 3000
        // });

        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('message') }}")
                break;
            case 'success':
                toastr.success("{{ Session::get('message') }}")
                break;
            case 'warning':
                toastr.warning("{{ Session::get('message') }}")
                break;
            case 'error':
                toastr.error("{{ Session::get('message') }}")
                break;
        }
    @endif
</script>


</body>

</html>
