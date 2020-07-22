@extends('layouts.frontend.master')
@section('title')
    Team Members
@endsection
@section('contents')
    <section id="Team" class="light-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-left">
                        <p>Meet Our</p>
                        <h3>Professional Team Members</h3>
                    </div>
                    <div class="description-welcome text-left">
                        <p>Insurance coverage around your needs is easier than you think. Sometimes on purpose injected
                            humour and the like simple dummy.</p>

                    </div>
                </div>
            </div>
            <div class="divcod55"></div>
            <div class="col-md-12">
                <div class="row">
                    @foreach($orders as $order)
                        @if(\App::getlocale() == "en")
                            <div class="team-item bod-head col-xs-12 col-sm-6 col-md-3">
                                <div class="team-item-block">
                                    <div class="team-thumb">
                                        <a href="{{url('/team-member-detail',$order->id)}}"><img
                                                src="{{asset('/images/team/large/'.$order->team_image)}}"
                                                alt="{{$order->team_name}}"></a>
                                        <div class="team-overlay">
                                            <p>{{\Illuminate\Support\Str::limit($order->team_description, 144)}}</p>
                                            <div class="team-icons">
                                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-team">
                                        <h5>
                                            <a href="{{url('/team-member-detail',$order->id)}}">{{$order->team_name}}</a>
                                        </h5>
                                        <p class="team-company">{{$order->team_position}}</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="team-item bod-head col-xs-12 col-sm-6 col-md-3">
                                <div class="team-item-block">
                                    <div class="team-thumb">
                                        <a href="{{url('/team-member-detail',$order->id)}}"><img
                                                src="{{asset('/images/team/default/'.$order->team_image)}}"
                                                alt="{{$order->team_name}}"></a>
                                        <div class="team-overlay">
                                            <p>{{\Illuminate\Support\Str::limit($order->team_description_nep, 144)}}</p>
                                            <div class="team-icons">
                                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-team">
                                        <h5>
                                            <a href="{{url('/team-member-detail',$order->id)}}">{{$order->team_name_nep}}</a>
                                        </h5>
                                        <p class="team-company">{{$order->team_position_nep}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            <div class="divcod30"></div>
            <div class="row">
                @forelse($teams as $team)
                    @if(\App::getlocale() == "en")
                        <div class="team-item col-xs-12 col-sm-6 col-md-3">
                            <div class="team-item-block">
                                <div class="team-thumb">
                                    <a href="{{url('/team-member-detail',$team->id)}}">
                                        <img src="{{asset('images/team/large/'. $team->team_image)}}"
                                             alt="Mahmoud ADel Baghagho"></a>
                                    <div class="team-overlay">
                                        <p>{{\Illuminate\Support\Str::limit($team->team_description, 144)}}</p>
                                        <div class="team-icons">
                                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                            <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-team">
                                    <h5><a href="{{url('team-member-detail', $team->id)}}">{{$team->team_name}}</a></h5>
                                    <p class="team-company">{{$team->team_position}}</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="team-item col-xs-12 col-sm-6 col-md-3">
                            <div class="team-item-block">
                                <div class="team-thumb">
                                    <a href="{{url('/team-member-detail',$team->id)}}">
                                        <img src="{{asset('images/team/large/'. $team->team_image)}}"
                                             alt="Mahmoud ADel Baghagho"></a>
                                    <div class="team-overlay">
                                        <p>{{\Illuminate\Support\Str::limit($team->team_description_nep, 144)}}</p>
                                        <div class="team-icons">
                                            <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                            <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                            <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                            <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-team">
                                    <h5><a href="{{url('team-member-detail', $team->id)}}">{{$team->team_name_nep}}</a>
                                    </h5>
                                    <p class="team-company">{{$team->team_position_nep}}</p>
                                </div>
                            </div>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <!-- End Our Team -->

    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
@endsection
