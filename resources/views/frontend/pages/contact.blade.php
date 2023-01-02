@extends('frontend.layouts.app')
@section('home-content')
    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <div class="breadcrumb-title">
                        <h2>Contact Us</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="index.html">Home </a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="breadcrumb-img">
                        <img class="br-img" src="{{ asset('frontend/assets') }}/img/breadcrumb/breadcrumb-1.png"
                            alt="Image">
                        <img class="br-shape" src="{{ asset('frontend/assets') }}/img/breadcrumb/br-shape.png"
                            alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Contact Us section Start -->
    <section class="contact-us-wrap ptb-100 bg-zodiac">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="ri-map-pin-line"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Visit Us Anytime</h3>
                            <p>342/A Brooklyn St, Milson Aveneue, New York, USA
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="ri-mail-send-line"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Send A Email</h3>
                            <a
                                href="https://templates.envytheme.com/cdn-cgi/l/email-protection#731b161f1f1c33121d151a5d101c1e"><span
                                    class="__cf_email__"
                                    data-cfemail="7b131e1717143b1a151d1255181416">[email&#160;protected]</span></a>
                            <a
                                href="https://templates.envytheme.com/cdn-cgi/l/email-protection#7b080e0b0b14090f3b1a151d1255181416"><span
                                    class="__cf_email__"
                                    data-cfemail="e1929491918e9395a1808f8788cf828e8c">[email&#160;protected]</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="contact-item">
                        <span class="contact-icon">
                            <i class="ri-phone-line"></i>
                        </span>
                        <div class="contact-info">
                            <h3>Call Center</h3>
                            <a href="tel:88098787868">+44 587 154765</a>
                            <a href="tel:88098787869">+55 576 234532</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-5 pt-75">
                <div class="col-lg-6 col-12">
                    <div class="contact-content">
                        <div class="content-title style2">
                            <span>Contact Us</span>
                            <h2>How We Can Help You</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusm tempor incidi dunt ut
                                labore et dolore magna aliqua. Ut enim ad minim veniam ostrud exerc itation ullamco laboris
                                nisi ut aliquip ex ea commodo quis nostrud exercitatio.</p>
                        </div>
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
                <div class="col-lg-6 col-12">
                    <div class="contact-form">
                        <form class="form-wrap" id="contactForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" placeholder="Name*" id="name" required
                                            data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" required placeholder="Email*"
                                            data-error="Please enter your email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" placeholder="Subject*" id="msg_subject"
                                            required data-error="Please enter your subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group v1">
                                        <textarea name="message" id="message" placeholder="Your Messages.." cols="30" rows="10" required
                                            data-error="Please enter your message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="form-check checkbox">
                                            <input name="gridCheck" value="I agree to the terms and privacy policy."
                                                class="form-check-input" type="checkbox" id="gridCheck" required>
                                            <label class="form-check-label" for="gridCheck">
                                                I agree to the <a class="link style1"
                                                    href="{{ route('web.termsandconditons') }}" target="_blank">terms
                                                    &amp; conditions</a> and <a class="link style1"
                                                    href="{{ route('web.privacypolicy') }}" target="_blank">privacy
                                                    policy</a>
                                            </label>
                                            <div class="help-block with-errors gridCheck-error"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn style8">Send Message</button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us section End -->
@endsection
