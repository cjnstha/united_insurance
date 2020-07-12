@extends('layouts.frontend.master')
@section('title')
    Products
@endsection
@section('contents')
    <!-- Start welcome -->

    <section id="product" class="light-wrapper">
        <div class="container">
            <div class="row  product-bg">
                <div class="col-xs-12 col-sm-7 col-md-5 col-lg-12">
                    <!-- authfy-login start -->
                    <div class="authfy-login">
                        <!-- panel-login start -->
                        <div class="authfy-panel panel-login active">
                            <div class="title-section text-left">
                                <h4>SmartDecision! Now fill these details & get best quote</h4>
                            </div>
                            <div class="row">
                                <div class="main-form-of-product">
                                    <div class="col-xs-6 col-sm-6">
                                        <div class="Contact-Form">
                                            <form class="leave-comment contact-form" autocomplete="on" id="contact-form"
                                                  name="contact-form" method="post" action="php/send.php"
                                                  novalidate="novalidate">
                                                <fieldset>
                                                    <div id="formstatus"></div>
                                                    <div class="Contact-us">
                                                        <div class="form-input col-md-12">
                                                            <input type="text" id="number" name="number"
                                                                   placeholder="Car Registration Number" required="">
                                                        </div>
                                                        <div class="form-input col-md-6">
                                                            <input type="text" id="number" name="number"
                                                                   placeholder="Your 10-digit mobile number"
                                                                   required="">
                                                        </div>
                                                        <div class="form-input col-md-6">
                                                            <input type="email" id="email" name="email"
                                                                   placeholder="Your email address" required="">
                                                        </div>
                                                        <div class="form-input col-md-12">
                                                            <label class="checkbox-wrapper">This will be our primary
                                                                mode of contact. We promise not to spam you.</label>
                                                        </div>
                                                        <label class="checkbox-wrapper"><input type="checkbox"
                                                                                               class="ant-checkbox-input"
                                                                                               value=""
                                                                                               checked=""><span>I wish to get policy details on my whatsapp number</span></label>
                                                        <div class="form-submit col-md-12">
                                                            <input type="submit" id="submit"
                                                                   class="btn btn-large main-bg" value="Renew Now">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                            <div class="links-form">
                                                <a class="lnk-toggler" data-panel=".panel-forgot" href="#">Click here to
                                                    renew bike insurance?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6">
                                        <p class="policy-text">Having a United Policy? <br><a
                                                class="already-have lnk-toggler" data-panel=".panel-signup" href="#">Click
                                                here to renew your policy</a></p>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- ./panel-login -->
                        <!-- panel-signup start -->
                        <div class="authfy-panel panel-signup">
                            <div class="title-section text-left">
                                <h4>SmartDecision! Now fill these details & get best quote</h4>
                                <p class="policy-text">Having a United Policy? <a class="already-have lnk-toggler"
                                                                                  data-panel=".panel-login" href="#">Click
                                        here to switch to United Insurance from another insurer</a></p>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="Contact-Form product-form">
                                        <form class="leave-comment contact-form" autocomplete="on" id="contact-form"
                                              name="contact-form" method="post" action="php/send.php"
                                              novalidate="novalidate">
                                            <fieldset>
                                                <div id="formstatus"></div>
                                                <div class="Contact-us">
                                                    <div class="form-input col-md-6">
                                                        <input type="text" id="number" name="number"
                                                               placeholder="Policy Number" required="">
                                                    </div>
                                                    <div class="form-input col-md-6">
                                                        <input type="text" id="number" name="number"
                                                               placeholder="Car Registration Number" required="">
                                                    </div>
                                                    <div class="form-input col-md-6">
                                                        <input type="text" id="number" name="number"
                                                               placeholder="Your 10-digit mobile number" required="">
                                                    </div>
                                                    <div class="form-input col-md-6">
                                                        <input type="email" id="email" name="email"
                                                               placeholder="Your email address" required="">
                                                    </div>
                                                    <div class="form-input col-md-12">
                                                        <label class="checkbox-wrapper">This will be our primary mode of
                                                            contact. We promise not to spam you.</label>
                                                    </div>
                                                    <label class="checkbox-wrapper"><input type="checkbox"
                                                                                           class="ant-checkbox-input"
                                                                                           value="" checked=""><span>I wish to get policy details on my whatsapp number</span></label>
                                                    <div class="form-submit col-md-12">
                                                        <input type="submit" id="submit" class="btn btn-large main-bg"
                                                               value="Renew Now">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                        <div class="links-form">
                                            <a class="lnk-toggler" data-panel=".panel-login" href="#">Click here to
                                                renew car insurance?</a><br>
                                            <a class="lnk-toggler" data-panel=".panel-forgot" href="#">Click here to
                                                renew bike insurance?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- ./panel-signup -->
                        <!-- panel-forget start -->
                        <div class="authfy-panel panel-forgot">
                            <div class="title-section text-left">
                                <h4>SmartDecision! Now fill these details & get best quote</h4>
                                <p class="policy-text">Having a United Policy? <a class="already-have lnk-toggler"
                                                                                  data-panel=".panel-signup" href="#">Click
                                        here to renew your policy</a></p>
                            </div>
                            <div class="row">
                                <div class="col-xs-12 col-sm-12">
                                    <div class="Contact-Form product-form">
                                        <form class="leave-comment contact-form" autocomplete="on" id="contact-form"
                                              name="contact-form" method="post" action="php/send.php"
                                              novalidate="novalidate">
                                            <fieldset>
                                                <div id="formstatus"></div>
                                                <div class="Contact-us">
                                                    <div class="form-input col-md-12">
                                                        <input type="text" id="number" name="number"
                                                               placeholder="Bike Registration Number" required="">
                                                    </div>
                                                    <div class="form-input col-md-6">
                                                        <input type="text" id="number" name="number"
                                                               placeholder="Your 10-digit mobile number" required="">
                                                    </div>
                                                    <div class="form-input col-md-6">
                                                        <input type="email" id="email" name="email"
                                                               placeholder="Your email address" required="">
                                                    </div>
                                                    <div class="form-input col-md-12">
                                                        <label class="checkbox-wrapper">This will be our primary mode of
                                                            contact. We promise not to spam you.</label>
                                                    </div>
                                                    <label class="checkbox-wrapper"><input type="checkbox"
                                                                                           class="ant-checkbox-input"
                                                                                           value="" checked=""><span>I wish to get policy details on my whatsapp number</span></label>
                                                    <div class="form-submit col-md-12">
                                                        <input type="submit" id="submit" class="btn btn-large main-bg"
                                                               value="Renew Now">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </form>
                                        <div class="links-form">
                                            <a class="lnk-toggler" data-panel=".panel-login" href="#">Click here to
                                                renew car insurance?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- ./panel-forgot -->
                    </div> <!-- ./authfy-login -->
                </div> <!-- ./authfy-panel-left -->
            </div>

        </div>
    </section>

    <!-- End Our Welcome -->
    <!-- Start Our Projects -->

    <section id="Projects" class="light-wrapper">
        <!-- =================== services single content ================== -->
        <section class="insurance-single-item-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="insurance-single-item-nav-holder">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->
                                @forelse($products as $key=>$product)
                                    @if(\App::getlocale() == "en")
                                        <li @if('products'.$product->path() == Request::path())
                                            class="active in"
                                            @endif
                                            @if(Request::path() == 'products')
                                                @if($loop->first)
                                                    class="active "
                                                @endif
                                            @endif
                                            id="product-{{ $product->id }}">
                                            <a href="#{{$product->id}}" @if($loop->first) class="active"
                                               @endif data-toggle="tab">{{ $product->product_name}}
                                                <i class="fa fa-angle-right"></i></a></li>
                                    @else
                                        <li @if('products'.$product->path() == Request::path())
                                            active in
                                            @endif
                                            @if($loop->first ) class="active" @endif id="product-{{ $product->id }}">
                                            <a href="#{{$product->id}}" @if($loop->first) class="active"
                                               @endif data-toggle="tab">{{ $product->product_name_nep}}
                                                <i class="fa fa-angle-right"></i></a></li>
                                    @endif
                                @empty
                                @endforelse
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="insurance-service-details">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                @foreach($products as $key=>$product)
                                    @if(\App::getlocale() == "en")
                                        <div class="tab-pane fade
                                            @if('products'.$product->path() == Request::path())
                                            active in
                                            @endif
                                            @if(Request::path() == 'products')
                                                @if($loop->first)
                                                    active in
                                                @endif
                                            @endif
                                            row" id="{{$product->id}}">
                                            <img class="img-responsive col-lg-8 col-md-7 col-sm-12 col-xs-12"
                                                 src="{{asset($product->product_image)}}" alt="image"
                                                 style="max-height:420px;">
                                            <div class="slider_container col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                                <div id="services-single-slider" class="carousel slide"
                                                     data-ride="carousel">
                                                    <!-- Indicators -->
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#services-single-slider" data-slide-to="0"
                                                            class="active"></li>
                                                        <li data-target="#services-single-slider"
                                                            data-slide-to="1"></li>
                                                        <li data-target="#services-single-slider"
                                                            data-slide-to="2"></li>
                                                    </ol>
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner inner_slider_container" role="listbox">
                                                        <div class="item active">
                                                            <span>We Have Essential Plans For Your Auto Insurance.</span>
                                                            {{--                                                            <a href="#">1. Auto Insurance</a>--}}
                                                            <p>{!! $product->slider1 !!}</p>
                                                        </div>
                                                        <div class="item">
                                                            <span>We Have Essential Plans For Your Auto Insurance.</span>
                                                            {{--                                                            <a href="#">1. Auto Insurance</a>--}}
                                                            <p>{!! $product->slider2 !!}</p>
                                                        </div>
                                                        <div class="item">
                                                            <span>We Have Essential Plans For Your Auto Insurance.</span>
                                                            {{--                                                            <a href="#">1. Auto Insurance</a>--}}
                                                            <p>{!! $product->slider3 !!}</p>
                                                        </div>
                                                    </div> <!-- end inner_slider_container -->
                                                </div> <!-- end #services-single-slider -->
                                            </div> <!-- end slider_container -->

                                            <div
                                                class="insurance-service-title clear_fix col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h4>{{$product->product_name}}</h4>
                                                <span class="decor_default"></span>
                                            </div>
                                            <div class="text col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                {!! $product->details !!}
                                            </div>
                                            <div class="clearfix"></div>
                                            <!-- start single insurance short info -->
                                            <div class="insurance-filter-info">
                                                <div class="col-md-4">
                                                    <div class="brochures">
                                                        <div class="insurance-service-title">
                                                            <h4>Proposal Form</h4>
                                                            <span class="decor_default"></span>
                                                        </div>
                                                        <a href="{{asset($product->file_pdf)}}" download
                                                           class="pdf_download transition3s">
                                                            Download.PDF
                                                            <span class="transition3s"><i
                                                                    class="fa fa-file-pdf-o"></i></span>
                                                        </a>
                                                        <a href="{{asset($product->file_doc)}}" download
                                                           class="doc_download transition3s">
                                                            Download.DOC
                                                            <span class="transition3s"><i
                                                                    class="fa fa-file-text-o"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="content-single-page">
                                                        <div class="Top-Title-Page">
                                                            <h3>Share Product Information :</h3>
                                                        </div>
                                                        <div class="social-content">
                                                            <a class="post-facebook" href="#"><i
                                                                    class="fa fa-facebook"></i></a>
                                                            <a class="post-google-plus" href="#"><i
                                                                    class="fa fa-google-plus"></i></a>
                                                            <a class="post-twitter" href="#"><i
                                                                    class="fa fa-twitter"></i></a>
                                                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                                        </div>
                                                        <div class="share-text">
                                                            <p>Expound the actual teachings of the great explorer of the
                                                                truth,
                                                                the labour master-builder of human happiness. No one
                                                                rejects,
                                                                dislikes, or avoids pleasure itself.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <!-- end single insurance short info -->
                                        </div>
                                    @else
                                        <div class="tab-pane fade
                                            @if('products'.$product->path() == Request::path())
                                            active in
                                        @endif
                                        @if(Request::path() == 'products')
                                        @if($loop->first)
                                            active in
                                        @endif
                                        @endif
                                            row" id="{{$product->id}}">
                                            <img class="img-responsive col-lg-8 col-md-7 col-sm-12 col-xs-12"
                                                 src="{{asset($product->product_image)}}" alt="image"
                                                 style="max-height:420px;">
                                            <div class="slider_container col-lg-4 col-md-5 col-sm-12 col-xs-12">
                                                <div id="services-single-slider" class="carousel slide"
                                                     data-ride="carousel">
                                                    <!-- Indicators -->
                                                    <ol class="carousel-indicators">
                                                        <li data-target="#services-single-slider" data-slide-to="0"
                                                            class="active"></li>
                                                        <li data-target="#services-single-slider"
                                                            data-slide-to="1"></li>
                                                        <li data-target="#services-single-slider"
                                                            data-slide-to="2"></li>
                                                    </ol>
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner inner_slider_container" role="listbox">
                                                        <div class="item active">
                                                            <span>हामीसँग तपाईंको {{$product->product_name_nep}}को लागि आवश्यक योजनाहरू छन्।</span>
                                                            {{--                                                            <a href="#">1. Auto Insurance</a>--}}
                                                            <p>{!! $product->slider1_nep !!}</p>
                                                        </div>
                                                        <div class="item">
                                                            <span>हामीसँग तपाईंको {{$product->product_name_nep}}को लागि आवश्यक योजनाहरू छन्।</span>
                                                            {{--                                                            <a href="#">1. Auto Insurance</a>--}}
                                                            <p>{!! $product->slider2_nep !!}</p>
                                                        </div>
                                                        <div class="item">
                                                            <span>हामीसँग तपाईंको {{$product->product_name_nep}}को लागि आवश्यक योजनाहरू छन्।</span>
                                                            {{--                                                            <a href="#">1. Auto Insurance</a>--}}
                                                            <p>{!! $product->slider3_nep !!}</p>
                                                        </div>
                                                    </div> <!-- end inner_slider_container -->
                                                </div> <!-- end #services-single-slider -->
                                            </div> <!-- end slider_container -->

                                            <div
                                                class="insurance-service-title clear_fix col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                <h4>{{$product->product_name_nep}}</h4>
                                                <span class="decor_default"></span>
                                            </div>
                                            <div class="text col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                {!! $product->details_nep !!}
                                            </div>
                                            <div class="clearfix"></div>
                                            <!-- start single insurance short info -->
                                            <div class="insurance-filter-info">
                                                <div class="col-md-4">
                                                    <div class="brochures">
                                                        <div class="insurance-service-title">
                                                            <h4>Proposal Form</h4>
                                                            <span class="decor_default"></span>
                                                        </div>
                                                        <a href="{{asset($product->file_pdf)}}" download
                                                           class="pdf_download transition3s">
                                                            Download.PDF
                                                            <span class="transition3s"><i
                                                                    class="fa fa-file-pdf-o"></i></span>
                                                        </a>
                                                        <a href="{{asset($product->file_doc)}}" download
                                                           class="doc_download transition3s">
                                                            Download.DOC
                                                            <span class="transition3s"><i
                                                                    class="fa fa-file-text-o"></i></span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="content-single-page">
                                                        <div class="Top-Title-Page">
                                                            <h3>Share Product Information :</h3>
                                                        </div>
                                                        <div class="social-content">
                                                            <a class="post-facebook" href="#"><i
                                                                    class="fa fa-facebook"></i></a>
                                                            <a class="post-google-plus" href="#"><i
                                                                    class="fa fa-google-plus"></i></a>
                                                            <a class="post-twitter" href="#"><i
                                                                    class="fa fa-twitter"></i></a>
                                                            <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                                        </div>
                                                        <div class="share-text">
                                                            <p>Expound the actual teachings of the great explorer of the
                                                                truth,
                                                                the labour master-builder of human happiness. No one
                                                                rejects,
                                                                dislikes, or avoids pleasure itself.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <!-- end single insurance short info -->
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                        </div> <!-- End insurance-service-details -->
                    </div>

                </div> <!-- End row -->

            </div> <!-- End container -->
        </section> <!-- /insurance-single-item-content -->
        <!-- =================== /services single content ================== -->
    </section>

    <!-- End Our Projects -->

    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

@endsection
@section('scripts')

    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="{{url('asset/js/jquery-2.2.4.min.js')}}"></script>
    <script type="text/javascript" src="{{url('asset/js/bootstrap.min.js')}}"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="{{url('asset/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{url('asset/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
    <script type="text/javascript" src="{{url('asset/rs-plugin/js/revslider-custom.js')}}"></script>

    <script type="text/javascript" src="{{url('asset/js/plugins.js')}}"></script>
    <!--  Form validate -->
    <script src="{{url('asset/js/jqueryvalidate/jquery.validate.min.js')}}"></script>
    <!--  Form submit  -->
    <script src="{{url('asset/js/jqueryform/jquery.form.min.js')}}"></script>
    <script type="text/javascript" src="{{url('asset/js/custom.js')}}"></script>
    <!-- Custom js-->
    <script src="{{url('asset/js/form.js')}}"></script>
@endsection
