@extends('layouts.frontend.master')
@section('title')
    FAQ's
@endsection
@section('contents')

    <!-- Start Faq Page -->

    <section id="page-not-found" class="light-wrapper">
        <div class="container inner">
            <div class="divcod55"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    @forelse($faqs as $key=>$faq)
                        @if(\App::getlocale() == "en")
                            <div class="panel-group faq-group" id="accordion">

                                <!--Start Collapse-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse"
                                                                   data-parent="#accordion"
                                                                   href="#collapse{{$faq->id}}"><span
                                                    class="num">{{++$key}}</span>{!! $faq->title !!} </a></h4>
                                    </div>
                                    <div id="collapse{{$faq->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">{!!$faq->details!!}</div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="panel-group faq-group" id="accordion">

                                <!--Start Collapse-->
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse"
                                                                   data-parent="#accordion"
                                                                   href="#collapse{{$faq->id}}"><span
                                                    class="num">{{++$key}}</span>{!! $faq->title_nep !!} </a></h4>
                                    </div>
                                    <div id="collapse{{$faq->id}}" class="panel-collapse collapse">
                                        <div class="panel-body">{!!$faq->details_nep!!}</div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                    @endforelse

                </div>
            </div>
        </div>
    </section>

    <!-- End Faq Page -->
    <div class="divcod55"></div>


    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

@endsection
