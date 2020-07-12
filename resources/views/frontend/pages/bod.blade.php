@extends('layouts.frontend.master')
@section('title')
    BOD List
@endsection
@section('contents')
    <section id="Team" class="light-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-left">
                        <p>Meet Our</p>
                        <h3>Professional Board Of Directors</h3>
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
                    @foreach($chairman as $order)
                        @isset($order)
                            <div class="team-item bod-head col-xs-12 col-sm-6 col-md-3">
                                <div class="team-item-block">
                                    <div class="team-thumb">
                                        <a href="{{url('/bod-detail',$order->id)}}"><img
                                                src="{{asset('/images/bod/default/'. $order->bod_imag)}}"
                                                alt="Mahmoud ADel Baghagho"></a>
                                        <div class="team-overlay">
                                            <p>{{\Illuminate\Support\Str::limit($order->bod_message, 144)}}</p>
                                            <div class="team-icons">
                                                <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info-team">
                                        <h5><a href="{{url('/bod-detail', $order->id)}}"> {{$order->bod_name}}</a></h5>
                                        <p class="team-company">{{$order->bod_position}}</p>
                                    </div>
                                </div>
                            </div>
                        @endisset
                    @endforeach
                </div>
            </div>
            <div class="divcod30"></div>
            <div class="row">
                @forelse($bods as $bod)
                    <div class="team-item col-xs-12 col-sm-6 col-md-3">
                        <div class="team-item-block">
                            <div class="team-thumb">
                                <a href="team-detail.blade.php"><img
                                        src="{{asset('/images/bod/large/'. $bod->bod_imag)}}"
                                        alt="Mahmoud ADel Baghagho"></a>
                                <div class="team-overlay">
                                    <p>{{\Illuminate\Support\Str::limit($bod->bod_message, 144)}}</p>
                                    <div class="team-icons">
                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="info-team">
                                <h5><a href="{{url('/bod-detail',$bod->id)}}">{{$bod->bod_name}}</a></h5>
                                <p class="team-company">{{$bod->bod_position}}</p>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </section>

    <!-- End Our Team -->


    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

@endsection
