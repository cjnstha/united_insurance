	<!-- Start Header  -->

<!-- Start Loading -->
<section class="loading-overlay">
	<div class="Loading-Page">
		<h1 class="loader">Loading...</h1>
	</div>
</section>

<!-- End Loading  -->

<div class="content-wrap">
	<div id="home" class="body-wrapper">

		<!-- Start Header  -->
		<header class="full-header">
			<div id="top-bar" class="top-bar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-6 col-md-6 hidden-xs">
							<ul class="list-inline top-contact">
								<li><a href="#"><i class="fa fa-map-marker"></i> Thapathali,Kathmandu,Nepal</a></li>
								<li>
									<a href="mailto:info@unitedinsurance.com.np"> <i class="fa fa-envelope" aria-hidden="true"></i>  info@unitedinsurance.com.np</a>
								</li>
							</ul>
						</div>
						<!-- .col-md-6 end -->
						<div class="col-xs-12 col-sm-6 col-md-6 text-right">
							<ul class="list-inline top-widget">
								<li>
									<a href="tel:+977-1-5111111"> <i class="fa fa-phone" aria-hidden="true"></i>  +977-1-5111111</a>
								</li>
								<li class="top-header__lang">
					                <div class="lang__selection">
					                    <a href="{{url('locale/en')}}" class="{{ session("locale") === null || session("locale") === "en" ? "active" : "" }}">Eng</a>
					                    <a href="{{url('locale/nep')}}" class="{{ session("locale") === "nep"? "active" : "" }}">Nep</a>
					                </div>

								</li>
							</ul>
						</div>
						<!-- .col-md-6 end -->
					</div>
				</div>
			</div>
			<nav id="primary-menu" class="navbar style-1">
				<div class="row">
					<div class="container mobile-heading">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="logo" href="index-2.html">
								<img src="{{ asset('asset/images/logo/logo.png') }}" alt="Yellow Hats">
							</a>
						</div>

						<div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">
								<li class="active">
									<a class="active" href="index-2.html">Home</a>
								</li>

								<!-- li end -->
								<li class="has-dropdown">
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us</a>
										<ul class="dropdown-menu">
											<li><a href="{{url('/about-us')}}">Information About Company</a></li>
											<li><a href="{{url('/board-of-directors')}}">Board of Directors</a></li>
											<li><a href="{{url('team-member')}}">Team Members</a></li>
											<li><a href="{{url('/branch-list')}}">Branch List</a></li>
											<li><a href="{{url('/agents')}}">Agent</a></li>
											<li><a href="{{url('/surveyors')}}">Surveyors</a></li>
											<li><a href="{{url('/citizens-charter')}}">Citizen Charters</a></li>
											<li><a href="{{url('/faq')}}">FAQS</a></li>
										</ul>
								</li>

								<!-- li end -->
								<li class="has-dropdown">
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">Policy Products</a>
									<ul class="dropdown-menu">
										<li><a href="property-insurance.html">Property Insurance</a></li>
										<li><a href="motor-insurance.html">Motor Insurance</a></li>
										<li><a href="home-insurance.html">Home Insurance</a></li>
										<li><a href="micro-insurance.html">Micro Insurance</a></li>
										<li><a href="fire-insurance.html">Fire Insurance</a></li>
									</ul>
								</li>
								<!-- li end -->
								<!-- li end -->
								<li class="has-dropdown">
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">Financial Statements </a>
									<ul class="dropdown-menu">
										<li><a href="{{url('/capital-structures')}}">Capital Structure</a></li>
										<li><a href="{{url('/premium-structure')}}">Premium Structure</a></li>
										<li><a href="{{url('/investment')}}">Investment</a></li>
										<li><a href="{{url('/reserves')}}">Reserve</a></li>
										<li><a href="quaterly-report.html">Quaterly Report</a></li>
										<li><a href="financial-report.html">Financial Report</a></li>
									</ul>
								</li>
								<!-- li end -->
								<li class="has-dropdown">
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">News</a>
									<ul class="dropdown-menu">

										<li><a href="blog.html">News</a></li>
										<li><a href="blog-detail.html">News Single Post</a></li>

									</ul>
								</li>
								<!-- li end -->

								<li class="has-dropdown">
									<a href="#" data-toggle="dropdown" class="dropdown-toggle">Downloads</a>
									<ul class="dropdown-menu">
										<li><a href="AGM-minute.html">AGM Minute</a></li>
										<li><a href="KYC-forms.html">KYC Forms</a></li>
										<li><a href="policy-proposal-form.html">Policy Proposal Form</a></li>
										<li><a href="right-share.html">Right Share</a></li>
										<li><a href="claim-form.html">Claim Form</a></li>
										<li><a href="surveyor-listing-application-form.html">Surveyor Listing Application Form</a></li>
										<li><a href="branch-download.html">Branch Download</a></li>
									</ul>
								</li>
								<!-- li end -->

								<!-- li end -->
								<li class="has-dropdown pull-left margin-right-zero">
									<a href="contact.html">Contact Us</a>
								</li>
								<!-- li end -->
							</ul>
							<!-- <div class="nav-right-phone pull-right">
								<p><img src="images/icons/phone-call.svg" alt="phone"> <a href="tel:+977-1-5111111"> +977-1-5111111</a> </p>
							</div> -->
						<!-- /.navbar-collapse -->
					</div>
					<!-- /.container-fluid -->
				</div>
			</nav>
		</header>
		<!-- End  Header -->
