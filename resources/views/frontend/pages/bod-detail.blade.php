@extends('layouts.frontend.master')
@section('contents')
		<!-- Start Our Team -->

		<section id="Team" class="light-wrapper">
			<div class="container inner">
				<div class="row">
					<div class="col-md-12">
						<div class="title-section text-left">
							<p>Professional Team</p>
							<h3>Biography</h3>
						</div>
					</div>
				</div>
				<div class="divcod55"></div>
				<div class="row">
					<div class="col-md-8">

						<p>
							{{$details->bod_message}}
						</p>
						<div class="padding-out">
							<ul class="insurance-list">
								<li>
									<b>Post:</b> <span>{{$details->bod_position}}</span>
								</li>
								<li>
									<b>Years of experience:</b> <span>{{$details->experience}}</span>
								</li>

								<li>
									<b>Email Address:</b> <span> <a href="mailto:{{$details->email}}" class="transition3s">{{$details->email}}</a></span>
								</li>
								<li>
									<b>Contact Number:</b> <span><a href="tel:{{$details->contact}}" class="transition3s">{{$details->contact}}</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 text-center">
						<div class="single-team-icons">
							<img src="{{asset($details->bod_imag)}}" alt="">
							<br> <br>
							<a href="#"><i class="teamicon fa fa-facebook"></i></a>
							<a href="#"><i class="teamicon fa fa-twitter"></i></a>
							<a href="#"><i class="teamicon fa fa-linkedin"></i></a>
							<br> <br>
						</div>

						<!-- <div class="button1">
							<a class="hel-button btn" href="#">Send message</a>
						</div> -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 none-padding">
						<div class="home-call-to-action">
							<a class="btn btn-grey" href="#" title="Get A Quote">Get A Quote</a>
							<p>United Insurance Co. (Nepal) Limited is an ISO 9001:2000 certified insurance company.The company has started its operation from December 1, 1993 (Mangsir 16, 2050) after its registration with the Company Registrator's Office and approved byInsurance Board.</p>
						</div>
					</div>
				</div>
			</div>
		</section>

		<!-- End Our Team -->


	<!-- Back to top Link -->
	<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
@endsection
