@extends('layouts.frontend.master')
@section('title')
    Gallery
@endsection
@section('contents')

    <!-- Start Faq Page -->
    <section id="page-not-found" class="light-wrapper">
        <div class="container inner">
            <div class="divcod55"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-left">
                        <p>Let's See</p>
                        <h3>Our Gallery</h3>
                    </div>
                    <div class="description-welcome text-left">
                        <p>Insurance coverage around your needs is easier than you think. Sometimes on purpose
                            injected humour and the like simple dummy.</p>

                    </div>
                </div>
            </div>
            <div class="divcod55"></div>
            <div class="row">
                @foreach($galleries as $gallery)
                    <div class="demo-gallery" >
                        <div id="lightgallery" class="list-unstyled">
                            <div class="item col-sm-4 col-xs-12" style="margin-bottom: 15px;"
                                 data-responsive="{{asset('images/gallery/medium/'.$gallery->image)}}"
                                 data-src="{{asset('images/gallery/medium/'.$gallery->image)}}"
                                 data-sub-html="<h4>{{$gallery->title}}</h4>">
                                <a href="">
                                    <img src="{{asset('images/gallery/medium/'.$gallery->image)}}"/>
                                </a>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- End Faq Page -->
    <div class="divcod55"></div>
@endsection
@section('script')
    <script>
        lightGallery(document.getElementById('lightgallery'));
        $(function () {
            var selectedClass = "";
            $(".filter").click(function () {
                selectedClass = $(this).attr("data-rel");
                $("#lightgallery").fadeTo(100, 0.1);
                $("#lightgallery div").not("." + selectedClass).fadeOut().removeClass('animation');
                setTimeout(function () {
                    $("." + selectedClass).fadeIn().addClass('animation');
                    $("#lightgallery").fadeTo(300, 1);
                }, 300);
            });
        });
    </script>
@endsection
