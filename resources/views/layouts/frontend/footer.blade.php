<footer id="footer" class="site-footer">
    <div id="template-footer" role="contentinfo">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 to-animate">
                    <h3 class="section-header section-title">About Us</h3>
                    <p>United Insurance Co. (Nepal) Limited is an ISO 9001:2000 certified insurance company.The company
                        has started its operation from December 1, 1993 (Mangsir 16, 2050) after its registration with
                        the Company Registrator's Office and approved byInsurance Board. </p>
                    <p class="copy-right">&copy; Copyright
                        <script>var d = new Date();
                            document.write(d.getFullYear());</script>
                        United Insurance Company (Nepal) Ltd.<br> All Rights Reserved. <br> Designed By : <a
                            href="http://www.prologicnepal.com/" target="_blank">Prologic Solutions</a></p>
                    <div class="copyright">
                        <label class="footer-link"><a href="#">Privacy Policy</a> - <a href="#">Terms of Use</a></label>
                    </div>
                </div>

                <div class="col-md-2 to-animate">
                    <h3 class="section-header section-title">Our Address</h3>
                    <ul class="contact-info">
                        <li><span><i class="fa fa-map-marker"></i> Thapathali, Kathmandu, Nepal</span></li>
                        <li><span><i class="fa fa-inbox"></i> P.O. Box:  9075, Kathmandu, Nepal<span></li>
                        <li><span><i class="fa fa-phone"></i> <a href="tel:+977-1-5111111" class="transition3s"> +977-1-5111111</a>/ <a
                                    href="tel:+977-1-5111112" class="transition3s">2</a><span></li>
                        <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@unitedinsurance.com.np"
                                                                class="transition3s"> info@unitedinsurance.com.np</a>
                        </li>
                    </ul>
                    <h3 class="section-header section-title">Connect with Us</h3>
                    <ul class="social-media">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>

                    </ul>
                </div>
                <div class="col-md-4 quick-contact">
                    <h3 class="section-header section-title">Quick Contact</h3>
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

            </div>
        </div>
    </div>
</footer>
