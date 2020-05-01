@extends('layouts.frontend.master')
@section('title')
    Home
@endsection
@section('contents')
    <!-- slider -->
    <section id="slider">
        <!-- revolution slider begin -->
        <div class="container" style="overflow: visible;">
            <div class="row header-main">
                <div class="products-info">
                    <div class="text-center">
                        <h1 class="heading">Select A Product To Get More Information</h1>
                    </div>
                    <div class="products-slider" id="products-content">
                        <div class="card-wrapper">
                            <div class="pro-insurance-data">
                                <img src="{{ asset('images/icons/car.svg') }}" alt="Car Insurance" title="Car"
                                     class="product-img" style="height: 60px">
                                <h5 class="product-name">Motor </h5>
                            </div>
                        </div>
                        <div class="card-wrapper">
                            <div class="pro-insurance-data">
                                <img src="{{ asset('images/icons/home.svg') }}" alt="Bharti AXA Travel Insurance"
                                     title="Travel" class="product-img" style="height: 60px">
                                <h5 class="product-name">Property</h5>
                            </div>
                        </div>
                         <div class="card-wrapper">
                            <div class="pro-insurance-data">
                                <img src="{{ asset('images/icons/micro.jpg') }}" alt="Bharti AXA Travel Insurance"
                                     title="Travel" class="product-img" style="height: 60px">
                                <h5 class="product-name">Micro</h5>
                            </div>
                        </div>
                        <div class="card-wrapper">
                            <div class="pro-insurance-data">
                                <img src="{{ asset('images/icons/fire.gif') }}" alt="Car Insurance" title="Car"
                                     class="product-img" style="height: 60px">
                                <h5 class="product-name">Fire</h5>
                            </div>
                        </div>
                        <div class="card-wrapper">
                            <div class="pro-insurance-data">
                                <img src="{{ asset('images/icons/tourism.svg') }}" alt="Bharti AXA Health Insurance"
                                     title="Health" class="product-img" style="height: 60px">
                                <h5 class="product-name">Home</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 text-center generated-quote">
                        <p class="pra-quote">Are You Already Enrolled?
                            <a href="http://hostingofprologic.com/retrieve-quote" title="Retrieve Code">Get A Quote </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-banner-img">
            <img src="{{ asset('images/home-page-background-image.png') }}" alt="General Insurance" style="width: 100%"
                 title="General Insurance" class="banner-img">
        </div>
        <!-- revolution slider close -->
    </section>
    <!-- slider close -->

    <main>
        <!-- Start Our Services -->
        <!-- ======= Welcome section ======= -->
        <section class="main-service-content">
            <div class="container inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section text-left">
                            <p>About Us</p>
                            <h3>Best insurances for everyone</h3>
                        </div>
                        <div class="col-lg-9 col-md-12">
                            <div class="description-welcome ml-01 text-left">
                                @if($abouts)
                                    <p>{!! $abouts[0]->introduction !!}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-12 bottom_row">
                            <div class="main-service-box main-service-box_bottom">
                                <div class="info-officer-title text-center">
                                    <h4>Information Officer</h4>
                                    <img src="{{ asset('images/team/ps-4.jpg') }}" alt="images">
                                </div>
                                <div class="info-officer">
                                    <h5>Mr. Bir Bikram Rana </h5>
                                    <p><a href="tel:+977-1-5111111"> <i class="fa fa-phone" aria-hidden="true"></i>
                                            +977-1-5111111</a></p>
                                    <p><a href="mailto:info@unitedinsurance.com.np"> <i class="fa fa-envelope"
                                                                                        aria-hidden="true"></i>
                                            info@unitedinsurance.com.np</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End main-service-content -->
        <!-- ======= /Welcome section ======= -->

        <!-- End Our Services -->

        <!-- Start Our Projects -->

        <section id="Projects" class="whitesmoke-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section text-left">
                            <p>WE'VE GOT YOU COVERED</p>
                            <h3>Insurance Coverage</h3>

                        </div>
                        <div class="description-welcome text-left">
                            <p>Insurance coverage around your needs is easier than you think. Sometimes on purpose
                                injected humour and the like simple dummy.</p>

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
                                        <span class="service-icons"><img
                                                src="{{ asset('images/icons/motorcycle.svg') }}"> </span>
                                        <h3><a href="insurance_single.html">Motor Insurance</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum
                                            ipsa, a voluptates libero possimus sapiente.</p>
                                        <div class="read-more">
                                            <a href="insurance_single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-insurance">
                                    <div class="single-insurance-content">
                                        <span class="service-icons"><img
                                                src="{{ asset('images/icons/home.svg') }}"> </span>
                                        <h3><a href="insurance_single.html">Home Insurance</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum
                                            ipsa, a voluptates libero possimus sapiente.</p>
                                        <div class="read-more">
                                            <a href="insurance_single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-insurance">
                                    <div class="single-insurance-content">
                                        <span class="service-icons"><img
                                                src="{{ asset('images/icons/fire.svg') }}"> </span>
                                        <h3><a href="insurance_single.html">Fire Insurance</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum
                                            ipsa, a voluptates libero possimus sapiente.</p>
                                        <div class="read-more">
                                            <a href="insurance_single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-insurance">
                                    <div class="single-insurance-content">
                                        <span class="service-icons"><img
                                                src="{{ asset('images/icons/home.svg') }}"> </span>
                                        <h3><a href="insurance_single.html">Property Insurance</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum
                                            ipsa, a voluptates libero possimus sapiente.</p>
                                        <div class="read-more">
                                            <a href="insurance_single.html">Read More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-insurance">
                                    <div class="single-insurance-content">
                                        <span class="service-icons"><img src="{{ asset('images/icons/tourism.svg') }}"> </span>
                                        <h3><a href="insurance_single.html">Micro Insurance</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati laborum
                                            ipsa, a voluptates libero possimus sapiente.</p>
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

        <!-- End Our Projects -->

        <!-- Start Latest News -->

        <section id="latestnews" class="light-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section text-left">
                            <p>Our Latest News</p>
                            <h3>United Insurance News</h3>
                        </div>
                        <div class="description-welcome text-left">
                            <p>Insurance coverage around your needs is easier than you think. Sometimes on purpose
                                injected humour and the like simple dummy.</p>

                        </div>
                    </div>
                </div>
                <div class="divcod55"></div>
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <div class="blog-standard latestnews">
                            <div class="item-post">
                                <div class="img-post">
                                    <div class="item">
                                        <a href="#"><img src="{{ asset('images/blog/blog-post-2.jpg') }}" alt=""></a>
                                    </div>
                                    <span class="icon-post-type"><i class="fa fa-image"></i></span>
                                </div>
                                <!-- /.img-post -->
                                <div class="info-post">

                                    <h5><a href="#">UIC Share Allotment And Refund Notice</a></h5>
                                    <ul class="meta-post">
                                        <li>On : <span class="date">Feb 06, 2020</span></li>
                                    </ul>
                                    <p>Pursue pleasure rationally encounter se consequencess that are extremely
                                        painful.....</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 sidebar-right">
                        <div class="SideBar-Blog">
                            <div class="Last-post-Blog widget">
                                <div class="Top-Title-SideBar">
                                    <h3>RECENT POSTS</h3>
                                </div>
                                <div class="Last-post">
                                    <ul class="news-footer">
                                        <li>
                                            <a href="#"><img src="{{ asset('images/blog/l1.jpg') }}" alt=""></a>
                                            <h6><a href="#">Home Insurance</a></h6>
                                            <span class="news-date">On : <a href="#">Jan 13, 2020</a></span>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('images/blog/2.jpg') }}" alt=""></a>
                                            <h6><a href="#">UIC Promoter Share Tender Notice</a></h6>
                                            <span class="news-date">On : <a href="#">Feb 13, 2020</a></span>
                                        </li>
                                        <li>
                                            <a href="#"><img src="{{ asset('images/blog/3.jpg') }}" alt=""></a>
                                            <h6><a href="#"> How to choose best life insurance</a></h6>
                                            <span class="news-date">On : <a href="#">May 13, 2020</a></span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- End Latest News -->

    </main>
@endsection
