<!-- Start Header  -->

<!-- Start Loading -->
<section class="loading-overlay">
    <div class="Loading-Page">
        <h1 class="loader">Loading...</h1>
    </div>
</section>

<!-- End Loading  -->
        <!-- Start Header  -->
        <header class="full-header">
            <div id="top-bar" class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 hidden-xs">
                            <ul class="list-inline top-contact">
                                <li><a href="#"><i class="fa fa-map-marker"></i> Thapathali,Kathmandu,Nepal</a></li>
                                <li>
                                    <a href="mailto:info@unitedinsurance.com.np"> <i class="fa fa-envelope"
                                                                                     aria-hidden="true"></i>
                                        info@unitedinsurance.com.np</a>
                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-6 end -->
                        <div class="col-xs-12 col-sm-6 col-md-6 text-right">
                            <ul class="list-inline top-widget">
                                <li>
                                    <a href="tel:+977-1-5111111"> <i class="fa fa-phone" aria-hidden="true"></i>
                                        +977-1-5111111</a>
                                </li>
                                <li class="top-header__lang">
                                    <div class="lang__selection">
                                        <a href="{{url('locale/en')}}"
                                           class="{{ session("locale") === null || session("locale") === "en" ? "active" : "" }}">Eng</a>
                                        <a href="{{url('locale/nep')}}"
                                           class="{{ session("locale") === "nep"? "active" : "" }}">Nep</a>
                                    </div>

                                </li>
                            </ul>
                        </div>
                        <!-- .col-md-6 end -->
                    </div>
                </div>
            </div>
            <nav id="primary-menu" class="navbar style-1">
                <div class="row">
                    <div class="container mobile-heading">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="logo" href="{{url('/')}}">
                                <img src="{{ asset('asset/images/logo/logo.png') }}" alt="Yellow Hats">
                            </a>
                        </div>

                        <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-left">
                                <li class="{{ Route::currentRouteNamed('homes') ? 'active' : '' }}">
                                    <a class="{{ Route::currentRouteNamed('homes') ? 'active' : '' }}" href="{{url('/')}}">@lang('home.home_menu')</a>
                                </li>

                                <!-- li end -->
                                <li class="has-dropdown {{ Route::currentRouteNamed('abouts') ? 'active' : '' }}">
                                    <a href="#" data-toggle="dropdown"
                                       class="dropdown-toggle">@lang('home.about_menu')</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('/about-us')}}">@lang('home.info_company')</a></li>
                                        <li><a href="{{url('/board-of-directors')}}">@lang('home.bod')</a></li>
                                        <li><a href="{{url('/team-member')}}">@lang('home.team')</a></li>
                                        <li><a href="{{url('/branch-list')}}">@lang('home.branch_list')</a></li>
                                        <li><a href="{{url('/agents')}}">@lang('home.agent')</a></li>
                                        <li><a href="{{url('/surveyors')}}">@lang('home.surveyors')</a></li>
                                        <li><a href="{{url('/citizens-charter')}}">@lang('home.citizen_charter')</a>
                                        </li>
                                        <li><a href="{{url('/faq')}}">@lang('home.faq')</a></li>
                                    </ul>
                                </li>

{{--                                <!-- li end -->--}}
{{--                                <li class="has-dropdown">--}}
{{--                                    <a href="{{url('/products')}}" data-toggle="dropdown"--}}
{{--                                       class="dropdown-toggle">@lang('home.policy_product')</a>--}}
{{--                                    <ul class="dropdown-menu">--}}
{{--                                        <li><a href="property-insurance.html">Property Insurance</a></li>--}}
{{--                                        <li><a href="motor-insurance.html">Motor Insurance</a></li>--}}
{{--                                        <li><a href="home-insurance.html">Home Insurance</a></li>--}}
{{--                                        <li><a href="micro-insurance.html">Micro Insurance</a></li>--}}
{{--                                        <li><a href="fire-insurance.html">Fire Insurance</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <!-- li end -->--}}

                                 <!-- li end -->
                                <li class="{{ Route::currentRouteNamed('products') ? 'active' : '' }}">
                                    <a class="{{ Route::currentRouteNamed('products') ? 'active' : '' }}" href="{{url('/products')}}">@lang('home.policy_product')</a>
                                    <ul class="dropdown-menu">
											<li><a href="property-insurance.html">Property Insurance</a></li>
											<li><a href="motor-insurance.html">Motor Insurance</a></li>
											<li><a href="home-insurance.html">Home Insurance</a></li>
											<li><a href="micro-insurance.html">Micro Insurance</a></li>
											<li><a href="fire-insurance.html">Fire Insurance</a></li>
										</ul>
                                </li>
                                <!-- li end -->

                                <!-- li end -->
                                <li class="has-dropdown">
                                    <a href="#" data-toggle="dropdown"
                                       class="dropdown-toggle">@lang('home.financial')</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('/capital-structures')}}">@lang('home.cap_struct')</a></li>
                                        <li><a href="{{url('/premium-structure')}}">@lang('home.prem_cal')</a></li>
                                        <li><a href="{{url('/investment')}}">@lang('home.invest')</a></li>
                                        <li><a href="{{url('/reserves')}}">@lang('home.reserve')</a></li>
                                        <li><a href="{{url('/quarter-reports')}}">@lang('home.quater')</a></li>
                                        <li><a href="{{url('/financial-reports')}}">@lang('home.finance')</a></li>
                                    </ul>
                                </li>
                                <!-- li end -->

                                <li class="{{ Route::currentRouteNamed('news') ? 'active' : '' }}">
                                    <a class="{{ Route::currentRouteNamed('news') ? 'active' : '' }}" href="{{url('/news')}}">@lang('home.news')</a>
                                </li>
                                <!-- li end -->

                                <li class="has-dropdown">
                                    <a href="#" data-toggle="dropdown"
                                       class="dropdown-toggle">@lang('home.download')</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{url('/agm-minute')}}">@lang('home.agm_minute')</a></li>
                                        <li><a href="{{url('/kyc-form')}}">@lang('home.kyc-form')</a></li>
                                        <li><a href="{{url('/policy-proposal-form')}}">@lang('home.proposal-form')</a>
                                        </li>
                                        <li><a href="{{url('/right-share')}}">@lang('home.right-share')</a></li>
                                        <li><a href="{{url('/claim-form')}}">@lang('home.claim-form')</a></li>
                                        <li>
                                            <a href="{{url('/surveyor-listing-application-form')}}">@lang('home.surveyors-form')</a>
                                        </li>
                                        {{--										<li><a href="branch-download.html">Branch Download</a></li>--}}
                                    </ul>
                                </li>
                                <!-- li end -->

                                <li class="{{ Route::currentRouteNamed('gallery.index') ? 'active' : '' }}">
                                    <a class="{{ Route::currentRouteNamed('gallery.index') ? 'active' : '' }}" href="{{url('/gallery')}}">@lang('home.gallery')</a>
                                </li>
                                <!-- li end -->

                                <!-- li end -->
                                <li class="has-dropdown pull-left margin-right-zero {{ Route::currentRouteNamed('contacts') ? 'active' : '' }}">
                                    <a class="{{ Route::currentRouteNamed('contacts') ? 'active' : '' }}" href="{{url('/contact')}}">@lang('home.contact_menu')</a>
                                </li>
                                <!-- li end -->
                            </ul>
                        </div>
                        <!-- /.container-fluid -->
                    </div>
                </div>
            </nav>
        </header>
        <!-- End  Header -->
