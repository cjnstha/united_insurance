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
							<p>Insurance coverage around your needs is easier than you think. Sometimes on purpose injected humour and the like simple dummy.</p>

						</div>
					</div>
				</div>
{{--				<div class="divcod55"></div>--}}
{{--				<div class="col-md-12">--}}
{{--					<div class="row">--}}
{{--                        @isset($teams)--}}
{{--						<div class="team-item bod-head col-xs-12 col-sm-6 col-md-3">--}}
{{--							<div class="team-item-block">--}}
{{--								<div class="team-thumb">--}}
{{--									<a href="../public/storage/{{$teams[0]->team_image}}" alt="Mahmoud ADel Baghagho"></a>--}}
{{--									<div class="team-overlay">--}}
{{--										<p>{{$teams[0]->team_description}}</p>--}}
{{--										<div class="team-icons">--}}
{{--											<a target="_blank" href="#"><i class="fa fa-facebook"></i></a>--}}
{{--											<a target="_blank" href="#"><i class="fa fa-twitter"></i></a>--}}
{{--											<a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>--}}
{{--											<a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>--}}
{{--										</div>--}}
{{--									</div>--}}
{{--								</div>--}}
{{--								<div class="info-team">--}}
{{--									<h5><a href="{{url('/team-member-detail',$teams[0]->id)}}">{{$teams[0]->team_name}}</a></h5>--}}
{{--									<p class="team-company">{{$teams[0]->team_position}}</p>--}}
{{--								</div>--}}
{{--							</div>--}}
{{--						</div>--}}
{{--                        @endisset--}}
{{--					</div>--}}
{{--				</div>--}}
				<div class="divcod30"></div>
				<div class="row">
                    @forelse($teams as $team)
					<div class="team-item col-xs-12 col-sm-6 col-md-3">
						<div class="team-item-block">
							<div class="team-thumb">
								<a href="{{url('/team-memeber-detail',$team->id)}}"><img src="{{asset("storage/$team->team_image")}}" alt="Mahmoud ADel Baghagho"></a>
								<div class="team-overlay">
									<p>{{\Illuminate\Support\Str::limit($team->team_description, 150)}}</p>
									<div class="team-icons">
										<a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
										<a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
										<a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
										<a target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
							<div class="info-team">
								<h5><a href="{{url('team-member-detail', $team->id)}}">Mahmoud ADel Baghagho</a></h5>
								<p class="team-company">{{$team->team_position}}</p>
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
