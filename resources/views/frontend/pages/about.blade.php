@extends('layouts.frontend.master')
@section('title')
    About Us
@endsection
@section('contents')
    <!-- Start Loading -->

    <section class="loading-overlay">
        <div class="Loading-Page">
            <h1 class="loader">Loading...</h1>
        </div>
    </section>

    <!-- End Loading  -->

    <!-- Start welcome -->

    <section id="Welcome" class="about-page light-wrapper">
        <div class="container">
            <div class="row  about-bg">
                <div class="col-md-12">
                    <div class="title-section text-left">
                        <p>Namaste & Welcome To</p>
                        <h3>United Insurance Company (Nepal) Ltd.</h3>
                    </div>
                    <div class="description-welcome inner-about-us text-left">
                        {!! $abouts[0]->introduction !!}
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- End Our Welcome -->
    <!-- Start Our Vision -->

    <section id="happy-customers" class="light-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 text-center br-1">
                    <div class="fact">
                        <div class="fact-number timer" data-perc="35">
                            <span class="factor text-white"></span>
                        </div>
                        <span class="fact-title">years of experience</span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center br-1">
                    <div class="fact">
                        <div class="fact-number timer" data-perc="1500000">
                            <span class="factor  text-white"></span>
                        </div>
                        <span class="fact-title">Satisfied Customers</span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center br-1">
                    <div class="fact">
                        <div class="fact-number timer" data-perc="24">

                            <span class="factor  text-white"></span>
                            <span class="small-sub-title"> Hrs</span>
                        </div>
                        <span class="fact-title">Customer Support</span>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12 text-center br-1">
                    <div class="fact">
                        <div class="fact-number timer" data-perc="100">
                            <span class="factor  text-white"></span>
                            <span class="small-sub-title percentage">%</span>
                        </div>
                        <span class="fact-title">Secure & Stable</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Our Vision  -->
    <section id="Welcome" class="light-wrapper">
        <div class="container inner">
            <div class="divcod40"></div>
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
                    <div class="welcome_wrapper text-left">
                        <div class="number">01.</div>
                        <h5>Our Vision</h5>
                        <div class="scrollbar" id="style-3">
                            <div class="force-overflow">
                                {!! $abouts[0]->vision !!}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-xs-12 col-sm-6 col-lg-3 col-md-3">
                    <div class="welcome_wrapper text-left">
                        <div class="number">02.</div>
                        <h5>Our History</h5>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        <a href="#">Read More</a>
                    </div>
                </div> -->
                <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
                    <div class="welcome_wrapper text-left">
                        <div class="number">02.</div>
                        <h5>Our Mission</h5>
                        <div class="scrollbar" id="style-3">
                            <div class="force-overflow">
                                {!! $abouts[0]->mission !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4 col-md-4">
                    <div class="welcome_wrapper text-left">
                        <div class="number">03.</div>
                        <h5>Our Values</h5>
                        <div class="scrollbar" id="style-3">
                            <div class="force-overflow">
                                {!! $abouts[0]->value !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Our Projects -->

    <!-- Start Our Projects -->

    <section id="home-products" class="whitesmoke-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-left">
                        <p>WE'VE GOT YOU COVERED</p>
                        <h3>Insurance Coverage</h3>

                    </div>
                    <div class="description-welcome text-left">
                        <p>Insurance coverage around your needs is easier than you think. Sometimes on purpose injected
                            humour and the like simple dummy.</p>

                    </div>
                </div>
            </div>
            <div class="divcod55"></div>
            <div class="row insurance-service-all">

                <div class="col-md-12">
                    <div class="insurance-coverage">
                        <div id="insurance-service-content" class="insurance-service-content">
                            <div class="single-insurance">
                                <div class="single-insurance-content">
                                    <span class="service-icons"><img src="images/icons/motorcycle.svg"> </span>
                                    <h3><a href="insurance_single.html">Motor Insurance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa,
                                        a
                                        voluptates libero possimus sapiente.</p>
                                    <div class="read-more">
                                        <a href="insurance_single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-insurance">
                                <div class="single-insurance-content">
                                    <span class="service-icons"><img src="images/icons/car.svg"> </span>
                                    <h3><a href="insurance_single.html">Car Insurance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa,
                                        a
                                        voluptates libero possimus sapiente.</p>
                                    <div class="read-more">
                                        <a href="insurance_single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-insurance">
                                <div class="single-insurance-content">
                                    <span class="service-icons"><img src="images/icons/home.svg"> </span>
                                    <h3><a href="insurance_single.html">Home Insurance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa,
                                        a
                                        voluptates libero possimus sapiente.</p>
                                    <div class="read-more">
                                        <a href="insurance_single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-insurance">
                                <div class="single-insurance-content">
                                    <span class="service-icons"><img src="images/icons/tourism.svg"> </span>
                                    <h3><a href="insurance_single.html">Travel Insurance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa,
                                        a
                                        voluptates libero possimus sapiente.</p>
                                    <div class="read-more">
                                        <a href="insurance_single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-insurance">
                                <div class="single-insurance-content">
                                    <span class="service-icons"><img src="images/icons/heart.svg"> </span>
                                    <h3><a href="insurance_single.html">Health Insurance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa,
                                        a
                                        voluptates libero possimus sapiente.</p>
                                    <div class="read-more">
                                        <a href="insurance_single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-insurance">
                                <div class="single-insurance-content">
                                    <span class="service-icons"><img src="images/icons/fire.svg"> </span>
                                    <h3><a href="insurance_single.html">Fire Insurance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa,
                                        a
                                        voluptates libero possimus sapiente.</p>
                                    <div class="read-more">
                                        <a href="insurance_single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-insurance">
                                <div class="single-insurance-content">
                                    <span class="service-icons"><img src="images/icons/home.svg"> </span>
                                    <h3><a href="insurance_single.html">Home Insurance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa,
                                        a
                                        voluptates libero possimus sapiente.</p>
                                    <div class="read-more">
                                        <a href="insurance_single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-insurance">
                                <div class="single-insurance-content">
                                    <span class="service-icons"><img src="images/icons/tourism.svg"> </span>
                                    <h3><a href="insurance_single.html">Travel Insurance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa,
                                        a
                                        voluptates libero possimus sapiente.</p>
                                    <div class="read-more">
                                        <a href="insurance_single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-insurance">
                                <div class="single-insurance-content">
                                    <span class="service-icons"><img src="images/icons/heart.svg"> </span>
                                    <h3><a href="insurance_single.html">Health Insurance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa,
                                        a
                                        voluptates libero possimus sapiente.</p>
                                    <div class="read-more">
                                        <a href="insurance_single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="single-insurance">
                                <div class="single-insurance-content">
                                    <span class="service-icons"><img src="images/icons/fire.svg"> </span>
                                    <h3><a href="insurance_single.html">Fire Insurance</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum ipsa,
                                        a
                                        voluptates libero possimus sapiente.</p>
                                    <div class="read-more">
                                        <a href="insurance_single.html">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Insurance coverage End Here -->
            </div>
        </div>
    </section>
    <section id="Services" class="tagline light-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="home-call-to-action">
                        <a class="btn btn-grey" href="#" title="Get A Quote">Get A Quote</a>
                        <p>United Insurance Co. (Nepal) Limited is an ISO 9001:2000 certified insurance company.The
                            company
                            has started its operation from December 1, 1993 (Mangsir 16, 2050) after its registration
                            with
                            the Company Registrator's Office and approved byInsurance Board.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Our Projects -->


    <!-- End Our PRojects -->

    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
    </div>

@endsection
@section('scripts')
    <script type="text/javascript">
        $(function () {
            "use strict";
            $(".fact-number").appear(function () {
                var t = $(this).attr("data-perc");
                $(this).each(function () {
                    $(this).find(".factor").delay(6e3).countTo({
                        from: 10,
                        to: t,
                        speed: 3e3,
                        refreshInterval: 50
                    })
                })
            })

            // quick contact
            $(".index-three-quick-contact .ui-outer").hover(
                function () {
                    $(this).parent(".index-three-quick-contact").css("bottom", "-310px");
                },
                function () {
                    $(this).parent(".index-three-quick-contact").css("bottom", "-465px");
                }
            );


        })
    </script>
@endsection
