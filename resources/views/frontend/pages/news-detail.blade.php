@extends('layouts.frontend.master')
@section('title')
    News Details
@endsection
@section('contents')
    <!-- Start Latest News -->
    <section id="latestnews" class="light-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-md-9 col-sm-8">
                    <div class="latestnews">
                        <div class="blog-standard">
                            <div class="item-post">
                                <div class="img-post">
                                    <figure>
                                        <div class="item">
                                            <a href="{{url()->current()}}"><img
                                                    src="{{asset('/images/news/large/'. $news->news_image)}}"
                                                    alt=""></a>
                                        </div>
                                    </figure>
                                    <span class="icon-post-type"><i class="fa fa-image"></i></span>
                                </div>
                                <!-- /.img-post -->
                                @if(\App::getlocale() == "en")
                                    <div class="info-blog">
                                        <h5><a href="{{url()->current()}}">{{$news->title}}</a></h5>
                                        <ul class="blog-meta-post">
                                            <li>On : <span
                                                    class="date">{{ \Carbon\Carbon::parse($news->created_at)->format('Y-m-d')}}</span>

                                            </li>
                                        </ul>
                                        <p>{{$news->description}}</p>
                                    </div>
                                @else
                                    <div class="info-blog">
                                        <h5><a href="{{url()->current()}}">{{$news->title_nep}}</a></h5>
                                        <ul class="blog-meta-post">
                                            <li>On : <span
                                                    class="date">{{ \Carbon\Carbon::parse($news->created_at)->format('Y-m-d')}}</span>
                                            </li>
                                        </ul>
                                        <p>{{$news->description_nep}}</p>
                                    </div>
                            @endif
                            <!-- /.info-post -->
                                <div class="Under-Post">
                                    <div class="share-post">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h5>Share This Post :</h5>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="social-content">
                                                    <a class="post-facebook" href="#"><i class="fa fa-facebook"></i></a>
                                                    <a class="post-google-plus" href="#"><i
                                                            class="fa fa-google-plus"></i></a>
                                                    <a class="post-twitter" href="#"><i class="fa fa-twitter"></i></a>
                                                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="Add-Comment">
                                <div class="Title-Comment">
                                    <h3>Leave Your Review</h3>
                                </div>
                                <div class="Comment-Form">
                                    <form action="#" class="leave-comment contact-form">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-input">
                                                    <input type="text" placeholder="Your Name" required="">
                                                </div>
                                                <div class="form-input">
                                                    <input type="email" placeholder="Email" required="">
                                                </div>
                                                <div class="form-input">
                                                    <input type="submit" class="btn btn-large main-bg"
                                                           value="Add Review">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-input">
                                                    <textarea class="txt-box textArea" name="message" cols="40" rows="7"
                                                              id="messageTxt" placeholder="Message" spellcheck="true"
                                                              required=""></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
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
                                    @foreach($recents as $recent)
                                        @if(\App::getlocale() == "en")
                                        <li>
                                            <a href="{{url('/news-detail/'.$recent->id)}}"><img
                                                    src="{{asset('/images/news/small/'.$recent->news_image)}}"
                                                    alt=""></a>
                                            <h6><a href="{{url('/news-detail/'.$recent->id)}}">{{$recent->title}}</a>
                                            </h6>
                                            <span class="news-date">On : <a
                                                    href="#">{{ \Carbon\Carbon::parse($recent->created_at)->format('Y-m-d')}}</a></span>
                                        </li>
                                        @else
                                            <li>
                                            <a href="{{url('/news-detail/'.$recent->id)}}"><img
                                                    src="{{asset('/images/news/small/'.$recent->news_image)}}"
                                                    alt=""></a>
                                            <h6><a href="{{url('/news-detail/'.$recent->id)}}">{{$recent->title_nep}}</a>
                                            </h6>
                                            <span class="news-date">On : <a
                                                    href="#">{{ \Carbon\Carbon::parse($recent->created_at)->format('Y-m-d')}}</a></span>
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

    <!-- End Latest News -->

    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
@endsection
