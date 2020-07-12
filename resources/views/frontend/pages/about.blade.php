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
                        @isset($abouts)
                            {!! $about->introduction !!}
                        @endisset
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- End Our Welcome -->
    <!-- Start Our Vision -->


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
                                 @isset($abouts)
                            {!! $about->vision !!}
                        @endisset
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
                                 @isset($abouts)
                            {!! $about->mission !!}
                        @endisset
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
                                 @isset($abouts)
                            {!! $about->values !!}
                        @endisset
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
                            @forelse($products as $product)
                                <div class="single-insurance">
                                    @if(\App::getLocale() == "en")
                                        <div class="single-insurance-content">
                                            <span class="service-icons"><img
                                                    src="{{ asset("storage/$product->product_image")}}"> </span>
                                            <h3>
                                                <a href="{{url('/products')}}">{{$product->product_name}}</a>
                                            </h3>
                                            <p>{!! \Illuminate\Support\Str::limit($product->details, 144)!!}</p>
                                            <div class="read-more">
                                                <a href="{{url('/products')}}">Read More</a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="single-insurance-content">
                                            <span class="service-icons">
                                                <img
                                                    src="{{ asset('images/icons/motorcycle.svg') }}"> </span>
                                            <h3>
                                                <a href="{{url('/products')}}">{{$product->product_name_nep}}</a>
                                            </h3>
                                            <p>{!! \Illuminate\Support\Str::limit($product->details_nep, 144)!!}</p>
                                            <div class="read-more">
                                                <a href="{{url('/products')}}">Read More</a>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @empty
                            @endforelse

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
                        <a class="btn btn-grey" href="{{route('quotes.index')}}" title="Get A Quote">Get A Quote</a>
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
