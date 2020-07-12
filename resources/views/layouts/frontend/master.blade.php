<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="{{ asset('asset/images/favicon.png') }}">

    <title> @yield('title')|| United Insurance Company (Nepal) Ltd</title>

    <link rel="stylesheet" href="{{ asset('asset/css/icon/et-line-font.css') }}">

    <!-- reset CSS -->
    <script src="{{ asset('asset/js/all.js') }}"></script>
    <script src="{{ asset('asset/js/v4-shims.js') }}"></script>

    <link href="{{ asset('asset/css/reset.css') }}" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('asset/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- icon CSS -->
    <link href="{{ asset('asset/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/Stroke-Gap-Icons.css') }}" rel="stylesheet">

    <!-- Themify icons -->
    <link href="{{ asset('asset/css/themify-icons/themify-icons.css') }}" rel="stylesheet">

    <!-- Revelation Slider -->
    <link href="{{ asset('asset/rs-plugin/css/rev-settings.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/rs-plugin/css/settings.css') }}" rel="stylesheet">

    <!-- owl carousel CSS -->
    <link href="{{ asset('asset/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('asset/css/owl.theme.css') }}" rel="stylesheet">


    <link href="{{ asset('asset/css/swiper.min.css') }}" rel="stylesheet">

    <link href="{{ asset('asset/css/form.css') }}" rel="stylesheet">

    @yield('extra_css')


    <!-- Main style CSS -->
    <link href="{{ asset('asset/css/style.css') }}" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="{{ asset('asset/css/responsive.css') }}" rel="stylesheet">

    <link href="{{ asset('asset/css/slider.css') }}" rel="stylesheet">
</head>

<body>


<div class="content-wrapper">
    <div id="home" class="body-wrapper">
    @include('layouts.frontend.header')
    @yield('contents')
    <!-- Start Footer -->
    @include('layouts.frontend.footer')
    <!-- End Footer  -->
    </div>
</div>

<div class="right-corder-container">
    <div class="right-corder-container-button">
        <span class="short-text"><img src="{{ asset('asset/images/icons/calculator-1.png') }}" alt="Image"></span>
        <span class="long-text">
                        <a href="{{url('/make-claim')}}"> Make Claim</a><br>
                        <a href="{{url('/calculator-motorcycle')}}" target="_blank"> Calculation</a>
                    </span>
    </div>
</div>
<!--go to top-->
<!-- UI # -->

<!-- Back to top Link -->
<div id="to-top" class="main-bg">
    <span class="fa fa-chevron-up"></span>
</div>




<!-- Placed at the end of the document so the pages load faster -->
<script type="text/javascript" src="{{ asset('asset/js/jquery-2.2.4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/bootstrap.min.js') }}"></script>

<!-- gllery js -->
<script src="{{asset('asset/gallery/js/picturefill.min.js')}}"></script>
<script src="{{asset('asset/gallery/js/lightgallery.js')}}"></script>
<script src="{{asset('asset/gallery/js/lg-pager.js')}}"></script>
<script src="{{asset('asset/gallery/js/lg-autoplay.js')}}"></script>
<script src="{{asset('asset/gallery/js/lg-fullscreen.js')}}"></script>
<script src="{{asset('asset/gallery/js/lg-zoom.js')}}"></script>
<script src="{{asset('asset/gallery/js/lg-hash.js')}}"></script>
<script src="{{asset('asset/gallery/js/lg-share.js')}}"></script>
<!--End gllery js -->
@yield('script')

{{--<!-- SLIDER REVOLUTION SCRIPTS  -->--}}
<script type="text/javascript" src="{{ asset('asset/rs-plugin/js/jquery.themepunch.plugins.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
<script type="text/javascript" src="{{asset('asset/rs-plugin/js/revslider-custom.js')}}"></script>

<script type="text/javascript" src="{{ asset('asset/js/plugins.js') }}"></script>
<!--  Form validate -->
<script src="{{ asset('asset/js/jqueryvalidate/jquery.validate.min.js') }}"></script>
{{--<!--  Form submit  -->--}}
<script src="{{ asset('asset/js/jqueryform/jquery.form.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('asset/js/swiper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/form.js') }}"></script>



<script type="text/javascript" src="{{ asset('asset/js/custom.js') }}"></script>

@yield('scripts')



</body>
</html>
