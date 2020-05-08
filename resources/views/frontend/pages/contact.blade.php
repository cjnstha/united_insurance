@extends('layouts.frontend.master')
@section('title')
    Contact Us
@endsection
@section('contents')

    <!-- Start Contact Us -->

    <div id="Contact" class="light-wrapper">
        <div class="container inner">
            <div class="divcod70"></div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="Contact-Form">
                            <form class="leave-comment contact-form" autocomplete="off" id="contact-form" name="contact-form" method="post" action="{{url('/page/contact')}}">
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
                <div class="col-md-4">
                    <div class="Contact-Info">
                        <h4>Contact Details</h4>
                        <div class="tex-contact">
                            <p>Do you have anything in your mind to tell us? Please don't hesitate to get in touch with
                                us.</p>
                        </div>
                        <div class="Block-Contact col-md-12">

                            <ul>
                                <li><span><i class="fa fa-map-marker"></i> Thapathali, Kathmandu, Nepal</span></li>
                                <li><span><i class="fa fa-inbox"></i> P.O. Box:  9075, Kathmandu, Nepal<span></li>
                                <li><span><i class="fa fa-phone"></i> <a href="tel:+977-1-5111111" class="transition3s"> +977-1-5111111</a>/ <a
                                            href="tel:+977-1-5111112" class="transition3s">2</a><span></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:info@unitedinsurance.com.np"
                                                                        class="transition3s">
                                        info@unitedinsurance.com.np</a></li>
                            </ul>
{{--                            <h5 class="cont-social-media-title">Connect with Us</h5>--}}
{{--                            <ul class="social-media">--}}
{{--                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>--}}
{{--                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>--}}
{{--                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>--}}

{{--                            </ul>--}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14132.12650602809!2d85.31591858165011!3d27.685417374814275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b18d9659bb%3A0xc4ee17afa7474653!2sUnited%20Insurance%20Company%20(Nepal)%20Ltd.!5e0!3m2!1sen!2snp!4v1584418284405!5m2!1sen!2snp"
            width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0"></iframe>
    </div>

    <!-- End Contact Us -->

    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

@endsection
