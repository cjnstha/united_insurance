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
