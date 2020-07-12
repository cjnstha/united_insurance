@extends('layouts.frontend.master')
@section('title')
    Home
@endsection
@section('contents')

    @php if(!empty($popups[0])) { @endphp
    <!-- Modal -->
    <div class="modal fade" id="myModal">
        @if(\App::getlocale() == 'en')
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{$popups[0]->popup_title}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Add content here.</h5>
                        <p>{{$popups[0]->description}}</p>
                        <img src="{{asset('images/popup/default/'.$popups[0]->image)}}">
                    </div>

                </div>
            </div>
        @else
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">{{$popups[0]->popup_title_nep}}</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>{{$popups[0]->description_nep}}</p>
                        <img src="{{asset('images/popup/default/'.$popups[0]->image)}}">
                    </div>

                </div>
            </div>
        @endif
    </div>
    @php } @endphp
    <!-- ======= slider section ======= -->
			<section id="slider">
				<div class="swiper-container main-slider loading">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(http://united-insurance.hostingofprologic.com/images/anime_united.gif);">
								<img src="http://united-insurance.hostingofprologic.com/images/anime_united.gif" class="entity-img" />
							</figure>
							<div class="content">
								<p class="slider-title">Third Party Insurance</p>
								<span class="caption">It covers loss and damage due to fire, accidental damage, natural
									disasters, third party liability, and personal accident to the driver, conductor and
									passengers. It can be extended to cover losses from riots, strikes, malicious acts
									and terrorism.</span>
								<ul class="pro-btn-links">
									<li class="btn-01"><a href="{{url('/buy-renew')}}">Buy Policy</a></li>
									<li class="btn-02"><a href="{{url('/buy-renew')}}">Renew Insurance</a></li>
								</ul>
							</div>
						</div>

						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(http://united-insurance.hostingofprologic.com/images/anime_united.gif)">
								<img src="http://united-insurance.hostingofprologic.com/images/anime_united.gif" class="entity-img" />
							</figure>
							<div class="content">
								<p class="slider-title">Property Insurance</p>
								<span class="caption">It covers loss and damage due to fire, lightning and earthquake.
									It can be extended to cover losses from natural calamities, impact damages to
									vandalism, terrorism.</span>
								<ul class="pro-btn-links">
									<li class="btn-01"><a href="{{url('/buy-renew')}}">Buy Policy</a></li>
									<li class="btn-02"><a href="{{url('/buy-renew')}}">Renew Insurance</a></li>
								</ul>
							</div>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(http://united-insurance.hostingofprologic.com/images/anime_united.gif)">
								<img src="http://united-insurance.hostingofprologic.com/images/anime_united.gif" class="entity-img" />
							</figure>
							<div class="content">
								<p class="slider-title">Travel Insurance</p>
								<span class="caption">It covers the insured in the event of a sudden and unexpected
									sickness or accident arising during travelling outside the country.</span>
								<ul class="pro-btn-links">
									<li class="btn-01"><a href="{{url('/buy-renew')}}">Buy Policy</a></li>
									<li class="btn-02"><a href="{{url('/buy-renew')}}">Renew Insurance</a></li>
								</ul>
							</div>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(http://united-insurance.hostingofprologic.com/images/anime_united.gif)">
								<img src="http://united-insurance.hostingofprologic.com/images/anime_united.gif" class="entity-img" />
							</figure>
							<div class="content">
								<p class="slider-title">Covid19 Insurance</p>
								<span class="caption">It covers to the insured in case of any sudden and unexpected
									illness and sickness (non-pre-existing).</span>
								<ul class="pro-btn-links">
									<li class="btn-01"><a href="{{url('/buy-renew')}}">Buy Policy</a></li>
									<li class="btn-02"><a href="{{url('/buy-renew')}}">Renew Insurance</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- If we need navigation buttons -->
					<div class="swiper-button-prev swiper-button-white"></div>
					<div class="swiper-button-next swiper-button-white"></div>
				</div>

				<!-- Thumbnail navigation -->
				<div class="swiper-container nav-slider loading">
					<div class="swiper-wrapper" role="navigation">
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(http://united-insurance.hostingofprologic.com/images/icons/thirdparty_icon.png)">
								<img src="http://united-insurance.hostingofprologic.com/images/icons/thirdparty_icon.png" class="entity-img" />
							</figure>
							<div class="content">
								<p class="slider-title">Third Party Insurance</p>
							</div>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(http://united-insurance.hostingofprologic.com/images/icons/property_icon.png)">
								<img src="http://united-insurance.hostingofprologic.com/images/icons/property_icon.png" class="entity-img" />
							</figure>
							<div class="content">
								<p class="slider-title">Property Insurance</p>
							</div>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(http://united-insurance.hostingofprologic.com/images/icons/travel_icon.png)">
								<img src="http://united-insurance.hostingofprologic.com/images/icons/travel_icon.png" class="entity-img" />
							</figure>
							<div class="content">
								<p class="slider-title">Travel Insurance</p>
							</div>
						</div>
						<div class="swiper-slide">
							<figure class="slide-bgimg" style="background-image:url(http://united-insurance.hostingofprologic.com/images/icons/covid_icon.png)">
								<img src="http://united-insurance.hostingofprologic.com/images/icons/covid_icon.png" class="entity-img" />
							</figure>
							<div class="content">
								<p class="slider-title">Covid19 Insurance</p>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- ======= slider section ======= -->

    <main>

        <!-- ======= Welcome section ======= -->
        <section class="main-service-content">
            <div class="container inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section text-left">
                            <p>@lang('home.about_menu')</p>
                            @if(\App::getLocale() == "en")
                                <h3>Best insurances for everyone</h3>
                            @else
                                <h3>सबैको लागि उत्तम बीमा</h3>
                            @endif
                        </div>
                        <div class="col-lg-9 col-md-12">
                            @if(\App::getLocale() == "en")
                                <div class="description-welcome ml-01 text-left">
                                                                           @if(!empty($abouts))
                                                                               {!! $abouts[0]->introduction !!}
                                                                         @endif
                                                                         <div class="read-more">
                                                    <a href="{{url('/about-us')}}">Read More</a>
                                                </div>
                                </div>
                            @else
                                <div class="description-welcome ml-01 text-left">
                                                                            @if(!empty($abouts))
                                                                                {!! $abouts[0]->introduction_nep !!}
                                                                           @endif
                                                                           <div class="read-more">
                                                    <a href="{{url('/about-us')}}">Read More</a>
                                                </div>
                                </div>
                            @endif
                        </div>
                        @if($chairman)
                            <div class="col-lg-3 col-md-12 bottom_row">
                                <div class="main-service-box main-service-box_bottom">
                                    <div class="info-officer-title text-center">
                                        <h4>{{$chairman->team_position}}</h4>
                                        <img src="{{ asset('images/team/default/'.$chairman->team_image) }}" alt="images">
                                    </div>
                                    <div class="info-officer">
                                        <h5>{{$chairman->team_name}}</h5>
                                        <p><a href="tel:{{$chairman->team_phone}}"> <i class="fa fa-phone"
                                                                                       aria-hidden="true"></i>
                                                {{$chairman->team_phone}}</a></p>
                                        <p><a href="mailto: {{$chairman->team_email}}"> <i class="fa fa-envelope"
                                                                                           aria-hidden="true"></i>
                                                {{$chairman->team_email}}</a></p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= /Welcome section ======= -->
<!-- ======= number range ======= -->
@isset($infos)
				<section id="happy-customers" class="light-wrapper">
					<div class="container inner">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12 text-center br-1">
								<div class="fact">
									<div class="fact-number timer" data-perc="{{$infos[0]->experience}}">
										<span class="factor text-white"></span>
									</div>
									<span class="fact-title">years of experience</span>
								</div>
							</div>

							<div class="col-md-3 col-sm-6 col-xs-12 text-center br-1">
								<div class="fact">
									<div class="fact-number timer" data-perc="{{$infos[0]->customers}}">
										<span class="factor  text-white"></span>
									</div>
									<span class="fact-title">Satisfied Customers</span>
								</div>
							</div>

							<div class="col-md-3 col-sm-6 col-xs-12 text-center br-1">
								<div class="fact">
									<div class="fact-number timer" data-perc="{{$infos[0]->support}}">

										<span class="factor  text-white"></span>
										<span class="small-sub-title"> Hrs</span>
									</div>
									<span class="fact-title">Customer Support</span>
								</div>
							</div>

							<div class="col-md-3 col-sm-6 col-xs-12 text-center br-1">
								<div class="fact">
									<div class="fact-number timer" data-perc="{{$infos[0]->stable}}">
										<span class="factor  text-white"></span>
										<span class="small-sub-title percentage">%</span>
									</div>
									<span class="fact-title">Secure & Stable</span>
								</div>
							</div>
						</div>
					</div>
				</section>
 @endisset
				<!-- ======= /number range ======= -->


        <!-- ======= Start Our Products ======= -->

        <section id="Projects" class="whitesmoke-wrapper">
            <div class="container inner">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-section text-left">
                            <p>@lang('home.we have got you covered')</p>
                            <h3>@lang('home.insurance_coverage')</h3>

                        </div>
                        @if(\App::getLocale() == "en")
                            <div class="description-welcome text-left">
                                <p>Insurance coverage around your needs is easier than you think. Sometimes on purpose
                                    injected humour and the like simple dummy.</p>

                            </div>
                        @else
                            <div class="description-welcome text-left">
                                <p>तपाईंको आवश्यकताको वरिपरि बीमा कभरेज तपाईंको सोच्नेभन्दा सजिलो छ। कहिलेकाँही
                                    उद्देश्यको साथ इंजेक्टेड हास्य र यस्तै साधारण डमी।.</p>

                            </div>
                        @endif
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
                                            <span class="service-icons">
                                                <img
                                                    src="{{ asset($product->product_icon) }}">
                                                    </span>
                                                <h3>
                                                    <a href="{{ url('/products'.$product->path()) }}">{{$product->product_name}}</a>
                                                </h3>
                                                <p>{!! \Illuminate\Support\Str::limit($product->details, 98)!!}</p>
                                                <div class="read-more">
                                                    <a href="{{url('/products'.$product->path()) }}">Read More</a>
                                                </div>
                                            </div>
                                        @else
                                            <div class="single-insurance-content">
                                            <span class="service-icons">
                                                <img
                                                    src="{{ asset($product->product_icon) }}"> </span>
                                                <h3>
                                                    <a href="{{url('/products'.$product->path())}}">{{$product->product_name_nep}}</a>
                                                </h3>
                                                <p>{!! \Illuminate\Support\Str::limit($product->details_nep, 98)!!}</p>
                                                <div class="read-more">
                                                    <a href="{{url('/products'.$product->path())}}">Read More</a>
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
        <!-- ======= End Our Products ======= -->

				<!-- ======= Quote Section ======= -->
				<section class="tagline light-wrapper">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="home-call-to-action">
									<a class="btn btn-grey" href="{{url('/get-a-quote')}}" title="Get A Quote">Get A Quote</a>
									<p>United Insurance Co. (Nepal) Limited is an ISO 9001:2000 certified insurance
										company.The company has started its operation from December 1, 1993 (Mangsir 16,
										2050) after its registration with the Company.</p>

								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- ======= /Quote Section ======= -->
        <!-- ======= Start Latest News ======= -->
        <section id="latestnews" class="light-wrapper">
            <div class="container inner">
                <div class="row">
                    @if(\App::getLocale() == "en")
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
                    @else
                        <div class="col-md-12">
                            <div class="title-section text-left">
                                <p>हाम्रो पछिल्लो समाचार</p>
                                <h3>युनाइटेड बीमा समाचार</h3>
                            </div>
                            <div class="description-welcome text-left">
                                <p>तपाईंको आवश्यकताको वरिपरि बीमा कभरेज तपाईंको सोच्नेभन्दा सजिलो छ। कहिलेकाँही
                                    उद्देश्यको साथ इंजेक्टेड हास्य र यस्तै साधारण डमी।.</p>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="divcod55"></div>
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        @foreach($news as $new)
                            @if(\App::getlocale() == "en")
                                <div class="blog-standard latestnews">
                                    <div class="item-post">
                                        <div class="img-post">
                                            <div class="item">
                                                <a href="#"><img
                                                        src="{{ asset('/images/news/large/'. $new->news_image)}}"
                                                        alt=""></a>
                                            </div>
                                            <span class="icon-post-type"><i class="fa fa-image"></i></span>
                                        </div>
                                        <!-- /.img-post -->
                                        <div class="info-post">

                                            <h5><a href="#">{{$new->title}}</a></h5>
                                            <ul class="meta-post">
                                                <li>On : <span
                                                        class="date">{{ \Carbon\Carbon::parse($new->created_at)->format('M d, Y')}}</span>
                                                </li>
                                            </ul>
                                            <p>{{\Illuminate\Support\Str::limit($new->description, 100)}}</p>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="blog-standard latestnews">
                                    <div class="item-post">
                                        <div class="img-post">
                                            <div class="item">
                                                <a href="#"><img
                                                        src="{{ asset('/images/news/large/'. $new->news_image)}}"
                                                        alt=""></a>
                                            </div>
                                            <span class="icon-post-type"><i class="fa fa-image"></i></span>
                                        </div>
                                        <!-- /.img-post -->
                                        <div class="info-post">

                                            <h5><a href="#">{{$new->title_nep}}</a></h5>
                                            <ul class="meta-post">
                                                <li>On : <span
                                                        class="date">{{ \Carbon\Carbon::parse($new->created_at)->format('M d, Y')}}</span>
                                                </li>
                                            </ul>
                                            <p>{{\Illuminate\Support\Str::limit($new->description_nep, 150)}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="col-md-3 col-sm-4 sidebar-right">
                        <div class="SideBar-Blog">
                            <div class="Last-post-Blog widget">
                                <div class="Top-Title-SideBar">
                                    <h3>RECENT POSTS</h3>
                                </div>
                                <div class="Last-post">
                                    <ul class="news-footer">
                                        @foreach($recents as $recent)
                                            @if(\App::getlocale() == "en")
                                                <li>
                                                    <a href="#"><img
                                                            src="{{ asset('/images/news/small/'. $recent->news_image) }}"
                                                            alt=""></a>
                                                    <h6><a href="#">{{$recent->title}}</a></h6>
                                                    <span class="news-date">On : <a
                                                            href="#">{{ \Carbon\Carbon::parse($new->created_at)->format('M d, Y')}}</a></span>
                                                </li>
                                            @else
                                                <li>
                                                    <a href="#"><img
                                                            src="{{ asset('/images/news/small/'. $recent->news_image) }}"
                                                            alt=""></a>
                                                    <h6><a href="#">{{$recent->title_nep}}</a></h6>
                                                    <span class="news-date">On : <a
                                                            href="#">{{ \Carbon\Carbon::parse($new->created_at)->format('M d, Y')}}</a></span>
                                                </li>
                                            @endif
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= End Latest News ======= -->
    </main>
@endsection

@section('scripts')


    <script>
        // Params
        let mainSliderSelector = '.main-slider',
            navSliderSelector = '.nav-slider',
            interleaveOffset = 0.5;

        // Main Slider
        let mainSliderOptions = {
            loop: true,
            speed: 1500,
            autoplay: {
                delay: 3000
            },
            loopAdditionalSlides: 10,
            grabCursor: true,
            watchSlidesProgress: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                init: function () {
                    this.autoplay.stop();
                },
                imagesReady: function () {
                    this.el.classList.remove('loading');
                    this.autoplay.start();
                },
                slideChangeTransitionEnd: function () {
                    let swiper = this,
                        captions = swiper.el.querySelectorAll('.caption');
                    for (let i = 0; i < captions.length; ++i) {
                        captions[i].classList.remove('show');
                    }
                    swiper.slides[swiper.activeIndex].querySelector('.caption').classList.add('show');
                },
                progress: function () {
                    let swiper = this;
                    for (let i = 0; i < swiper.slides.length; i++) {
                        let slideProgress = swiper.slides[i].progress,
                            innerOffset = swiper.width * interleaveOffset,
                            innerTranslate = slideProgress * innerOffset;

                        swiper.slides[i].querySelector(".slide-bgimg").style.transform =
                            "translateX(" + innerTranslate + "px)";
                    }
                },
                touchStart: function () {
                    let swiper = this;
                    for (let i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = "";
                    }
                },
                setTransition: function (speed) {
                    let swiper = this;
                    for (let i = 0; i < swiper.slides.length; i++) {
                        swiper.slides[i].style.transition = speed + "ms";
                        swiper.slides[i].querySelector(".slide-bgimg").style.transition =
                            speed + "ms";
                    }
                }
            }
        };
        let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);

        // Navigation Slider
        let navSliderOptions = {
            loop: true,
            loopAdditionalSlides: 10,
            speed: 1500,
            spaceBetween: 4,
            slidesPerView: 4,
            centeredSlides: true,
            touchRatio: 0.2,
            slideToClickedSlide: true,
            direction: 'vertical',
            on: {
                imagesReady: function () {
                    this.el.classList.remove('loading');
                },
                click: function () {
                    mainSlider.autoplay.stop();
                }
            }
        };
        let navSlider = new Swiper(navSliderSelector, navSliderOptions);

        // Matching sliders
        mainSlider.controller.control = navSlider;
        navSlider.controller.control = mainSlider;
    </script>

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
        })
    </script>

    <script>
        $(window).on('load', function () {
            var delayMs = 200; // delay in milliseconds

            setTimeout(function () {
                $('#myModal').modal('show');
            }, delayMs);
        });
    </script>



@endsection
