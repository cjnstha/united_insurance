<?php
$abouts = \App\Models\AboutUs::all();
?>

<!-- Start Footer -->
<footer id="footer" class="site-footer">
    <div id="template-footer" role="contentinfo">
        <div class="container-fluid">
            <div class="row">
                @php if(!empty($abouts[0])) { @endphp
                @if(\App::getlocale() == "en")
                    <div class="col-md-3 to-animate">
                        <h3 class="section-header section-title">About Us</h3>
                        {!! $abouts[0]->introduction !!}
                        <h3 class="section-header social-media-title section-title">Connect with Us</h3>
                        <ul class="social-media">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                @else
                    <div class="col-md-3 to-animate">
                        <h3 class="section-header section-title">हाम्रो बारेमा</h3>
                        {!! $abouts[0]->introduction_nep !!}
                        <h3 class="section-header social-media-title section-title">हामीसँग कनेक्ट गर्नुहोस्</h3>
                        <ul class="social-media">
                            <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                @endif
                @php } @endphp
                <div class="col-md-5 to-animate">
                    @if(\App::getlocale() == "en")
                        <div class="col-md-7 to-animate">
                            <h3 class="section-header section-title">Our Address</h3>
                            <ul class="contact-info">
                                <li><span><i class="fa fa-map-marker"></i> Thapathali, Kathmandu, Nepal</span></li>
                                <li><span><i class="fa fa-inbox"></i> P.O. Box:  9075, Kathmandu, Nepal<span></li>
                                <li><span><i class="fa fa-phone"></i> <a href="tel:+977-1-5111111" class="transition3s"> +977-1-5111111</a>/ <a
                                            href="tel:+977-1-5111112" class="transition3s">2</a><span></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@unitedinsurance.com.np"
                                                                        class="transition3s">
                                        info@unitedinsurance.com.np</a></li>
                            </ul>
                        </div>
                    @else
                        <div class="col-md-7 to-animate">
                            <h3 class="section-header section-title">हाम्रो ठेगाना</h3>
                            <ul class="contact-info">
                                <li><span><i class="fa fa-map-marker"></i>थापाथली, काठमाडौं, नेपाल</span></li>
                                <li><span><i class="fa fa-inbox"></i> पी.ओ. बक्स: ९०७५ , काठमाडौं, नेपाल<span></li>
                                <li><span><i class="fa fa-phone"></i> <a href="tel:+९७७-१-५११११११ "
                                                                         class="transition3s"> +९७७-१-५११११११ </a>/ <a
                                            href="tel:+977-1-5111112" class="transition3s">2</a><span></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@unitedinsurance.com.np"
                                                                        class="transition3s">
                                        info@unitedinsurance.com.np</a></li>
                            </ul>
                        </div>
                    @endif
                    <div class="col-md-5 to-animate">
                        @if(\App::getlocale() == "en")
                            <h3 class="section-header section-title">Quick Contact</h3>
                        @else
                            <h3 class="section-header section-title">द्रुत लिंकहरू</h3>
                        @endif
                        <ul class="contact-info">
                            <li><i class="fa fa-chevron-right"></i> <a href="{{url('/')}}">@lang('home.home_menu')</a>
                            </li>
                            <li><i class="fa fa-chevron-right"></i> <a
                                    href="{{url('/about-us')}}">@lang('home.info_company')</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a
                                    href="{{url('/products')}}">@lang('home.policy_product')</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a
                                    href="{{url('/gallery')}}">@lang('home.gallery')</a></li>
                            <li><i class="fa fa-chevron-right"></i> <a
                                    href="{{url('/contact')}}">@lang('home.contact_menu')</a></li>
                        </ul>
                    </div>
                    <div class="col-md-12 to-animate">
                        @if(\App::getlocale() == "en")
                            <h3 class="section-header section-title">Pay With</h3>
                        @else
                            <h3 class="section-header section-title">भुक्तानी गर्नुहोस्</h3>
                        @endif
                        <ul class="payment-methods">
                            <li><a href="#"><img src="{{asset('images/esewa.png')}}" alt=""></i></a></li>
                            <!--<li><a href="#"><img src="images/khalti.png" alt=""></i></a></li>-->
                            <!--<li><a href="#"><img src="images/ime_pay.png" alt=""></i></a></li>-->
                            <li><a href="#"><img src="{{asset('images/prabhu_pay.png')}}" alt=""></i></a></li>
                            <li><a href="#"><img src="{{asset('images/nic_asia.png')}}" alt=""></i></a></li>
                            <li><a href="#"><img src="{{asset('images/connect_ips.png')}}" alt=""></i></a></li>
                        </ul>
                    </div>
                </div>


                <div class="col-md-4 quick-contact">
                    @if(\App::getlocale() == "en")
                        <h3 class="section-header section-title">Quick Contact</h3>
                    @else
                        <h3 class="section-header section-title">द्रुत सम्पर्क </h3>
                    @endif
                    <div class="Contact-Form">
                        <form class="leave-comment contact-form" autocomplete="on" name="contact-form" method="post"
                              action="{{url('/contact')}}">
                            @csrf
                            <fieldset>
                                <div id="formstatus"></div>
                                <div class="Contact-us">
                                    <div class="form-input col-md-6">
                                        <input type="text" id="name" name="name" placeholder="Your Name" required>
                                    </div>
                                    <div class="form-input col-md-6">
                                        <input type="email" id="email" name="email" placeholder="Email" required>
                                    </div>
                                    <div class="form-input col-md-12">
                                        <input type="text" id="subject" name="subject" placeholder="Subject">
                                    </div>
                                    <div class="form-input col-md-12">
                                        <textarea class="txt-box textArea" id="message" name="message" cols="40"
                                                  rows="7" placeholder="Message" spellcheck="true" required></textarea>
                                    </div>
                                    <div class="form-submit col-md-12">
                                        <input type="submit" id="submit" class="btn btn-large main-bg"
                                               value="Send Message">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="footer-bottom">
                        <p class="copy-right">&copy; Copyright
                            <script>var d = new Date();
                                document.write(d.getFullYear());</script>
                            United Insurance Company (Nepal) Ltd. All Rights Reserved. Designed By : <a
                                href="http://www.prologicnepal.com/" target="_blank">Prologic Solutions</a> <span
                                class="copyright text-right">Site Updated : 2020-05-25</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer  -->
