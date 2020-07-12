@extends('layouts.frontend.master')
@section('title')
    Branch List
@endsection
@section('contents')
    <!-- Start Our Team -->

    <section id="Team" class="light-wrapper">
        <div class="container inner">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-section text-left">
                        <p>Visit Our</p>
                        <h3>Branches All Over The World</h3>
                    </div>
                    <div class="description-welcome text-left">
                        <p>Insurance coverage around your needs is easier than you think. Sometimes on purpose injected
                            humour and the like simple dummy.</p>

                    </div>
                </div>
            </div>
            <div class="divcod55"></div>
            <div class="row">
                @forelse($branches as $branch)
                    @if(\App::getLocale() == "en")
                        <div class="team-item col-xs-12 col-sm-6 col-md-3">
                            <div class="team-item-block">
                                <div class="team-thumb">
                                    <a><img src="{{asset('/images/branch/medium/'.$branch->branch_image)}}" alt="branch"></a>
                                    <div class="team-overlay">
                                        <h5>Biratnagar Branch Office</h5>
                                        <div class="inner-location">
                                            <p><a href="#"><i class="fa fa-map-marker"
                                                              aria-hidden="true"></i> {{$branch->address}}</a></p>
                                            <p><a href="{$branch->branch_contact}}"> <i class="fa fa-phone"
                                                                                        aria-hidden="true"></i>
                                                    {{$branch->branch_contact}}</a></p>
                                            <p><a href="{{$branch->branch_fax}}"> <i class="fa fa-fax"
                                                                                     aria-hidden="true"></i>
                                                    {{$branch->branch_fax}}</a></p>
                                            <p><a href="mailto:info@unitedinsurance.com.np" class="transition3s">
                                                    {{$branch->branch_email}}</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-team">
                                    <h5><a href="#">{{$branch->branch_title}}</a></h5>
                                    <p class="team-company"><i class="fa fa-user"
                                                               aria-hidden="true"></i> {{$branch->branch_incharge}} </br>
                                        ({{$branch->position}})</p>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="team-item col-xs-12 col-sm-6 col-md-3">
                            <div class="team-item-block">
                                <div class="team-thumb">
                                    <a><img src="{{asset('/images/branch/medium/'.$branch->branch_image)}}" alt="branch"></a>
                                    <div class="team-overlay">
                                        <h5>Biratnagar Branch Office</h5>
                                        <div class="inner-location">
                                            <p><a href="#"><i class="fa fa-map-marker"
                                                              aria-hidden="true"></i> {{$branch->address_nep}}</a></p>
                                            <p><a href="{$branch->branch_contact}}"> <i class="fa fa-phone"
                                                                                        aria-hidden="true"></i>
                                                    {{$branch->branch_contact}}</a></p>
                                            <p><a href="{{$branch->branch_fax}}"> <i class="fa fa-fax"
                                                                                     aria-hidden="true"></i>
                                                    {{$branch->branch_fax}}</a></p>
                                            <p><a href="mailto:info@unitedinsurance.com.np" class="transition3s">
                                                    {{$branch->branch_email}}</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-team">
                                    <h5><a href="#">{{$branch->branch_title_nep}}</a></h5>
                                    <p class="team-company"><i class="fa fa-user"
                                                               aria-hidden="true"></i> {{$branch->branch_incharge_nep}} </br>
                                        ({{$branch->position_nep}})</p>
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
