@extends('layouts.frontend.master')
@section('title')
    News
@endsection
@section('contents')
    <!-- Start Latest News -->

    <section id="latestnews" class="light-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="latestnews blog-list">
                    @forelse($news as $new)
                        @if(\App::getlocale() == "en")
                            <div class="col-md-4 col-sm-4">
                                <div class="blog-standard">
                                    <div class="item-post">
                                        <div class="img-post">
                                            <figure>
                                                <!-- <a class="fancybox-media video" href="#"><i class="fa fa-play"></i></a> -->
                                                <a href="{{url('/news-detail/'.$new->id)}}"><img
                                                        src="{{ asset('/images/news/medium/'.$new->news_image) }}"
                                                        alt=""></a>
                                            </figure>
                                            <ul class="post-date">
                                                <li class="date">
                                                    <span
                                                        class="day">{{ \Carbon\Carbon::parse($new->created_at)->format('d')}}</span>
                                                </li>
                                                <li class="month">
                                                    {{ \Carbon\Carbon::parse($new->created_at)->format('M')}}
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.img-post -->
                                        <div class="blog-info-post">
                                            <h5><a href="{{url('/news-detail/'. $new->id)}}">{{$new->title}}</a></h5>
                                            <p>{{\Illuminate\Support\Str::limit($new->description_nep, 150)}}</p>
                                            <a href="{{url('/news-detail/'. $new->id)}}" class="read_more transition3s">Read
                                                More</a>
                                        </div>
                                        <!-- /.info-post -->
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="col-md-4 col-sm-4">
                                <div class="blog-standard">
                                    <div class="item-post">
                                        <div class="img-post">
                                            <figure>
                                                <!-- <a class="fancybox-media video" href="#"><i class="fa fa-play"></i></a> -->
                                                <a href="{{url('/news-detail/'.$new->id)}}"><img
                                                        src="{{ asset('/images/news/medium/'.$new->news_image) }}"
                                                        alt=""></a>
                                            </figure>
                                            <ul class="post-date">
                                                <li class="date">
                                                    <span
                                                        class="day">{{ \Carbon\Carbon::parse($new->created_at)->format('d')}}</span>
                                                </li>
                                                <li class="month">
                                                    {{ \Carbon\Carbon::parse($new->created_at)->format('M')}}
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.img-post -->
                                        <div class="blog-info-post">
                                            <h5><a href="{{url('/news-detail/'. $new->id)}}">{{$new->title_nep}}</a>
                                            </h5>
                                            <p>{{\Illuminate\Support\Str::limit($new->description_nep, 150)}}</p>
                                            <a href="{{url('/news-detail/'. $new->id)}}" class="read_more transition3s">Read
                                                More</a>
                                        </div>
                                        <!-- /.info-post -->
                                    </div>
                                </div>
                            </div>
                        @endif
                    @empty
                    @endforelse
                    <div class="row">
                        <div class="pagination col-md-12">
                            <div class="pagination-style1 text-center">
                                {!! $news->render() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Latest News -->


    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
@endsection
@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            var e = $("#slider-blog");
            e.owlCarousel({
                slideSpeed: 500,
                paginationSpeed: 400,
                singleItem: !0,
                autoPlay: 3e3,
                items: 10,
                itemsDesktop: [1e3, 5],
                itemsDesktopSmall: [900, 3],
                itemsTablet: [600, 2],
                itemsMobile: !1
            }), $(".next").click(function () {
                e.trigger("owl.next")
            }), $(".prev").click(function () {
                e.trigger("owl.prev")
            })
        })
    </script>
@endsection
