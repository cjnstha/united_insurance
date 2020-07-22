@extends('layouts.frontend.master')
@section('title')
    AGM Minute
@endsection
@section('contents')

    <!-- ============================ financial-statements ================================= -->
    <section class="financial-statements">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="tab_nav_side">
                        <!-- Nav tabs -->
                        <ul class="nav-side nav-tabs tabs-left"><!-- 'tabs-right' for right tabs -->

                            <li class="active"><a href="{{url('/agm-minute')}}"> @lang('home.agm_minute') <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/kyc-form')}}">@lang('home.kyc-form')<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/policy-proposal-form')}}">@lang('home.proposal-form') <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/right-share')}}">@lang('home.right-share')<i class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/claim-form')}}">@lang('home.claim-form') <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/surveyor-listing-application-form')}}">@lang('home.surveyors-form')<i
                                        class="fa fa-angle-right"></i></a></li>
                            {{--                         <li><a href="branch-download.html">Branch Download <i class="fa fa-angle-right"></i></a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="download__container col-lg-8 col-md-8 col-sm-6 col-xs-12 pull-right key_benefits">
                    <div class="download__container__table" data-url="agent-form-details">
                        <table class="table table-sm">
                            <thead class="thead-light">
                            <tr>
                                <th>Name</th>
                                <th>Date Added</th>
                                <th>View File</th>
                                <th>Download File</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($agms as $agm)
                                <tr>
                                    <td data-label="Name" title="F.Y. 2076/2077 1st Quarter">{{$agm->agm_name}}</td>
                                    <td data-label="Date Added">{{$agm->updated_at->toFormattedDateString()}}</td>
                                    <td data-label="View File">
                                        <a target="_blank" href="{{asset($agm->agm_files)}}" class="pdf_download transition3s">
                                            View
                                        </a>
                                    </td>
                                    <td data-label="Download File">
                                        <a href="{{asset($agm->agm_files)}}" title="Download Attachment"
                                           class='btn btnViewFile' download
                                           target='_blank'><span><i class="fa fa-file-pdf-o"
                                                                    aria-hidden="true"></i></span>
                                            Download <i class="fa fa-download" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <p>No Records Found</p>
                            @endforelse
                            </tbody>
                        </table>
                        <div class="more-download">
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End container -->
    </section>
    <!-- ============================ /financial-statements ================================= -->

    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
    <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="downloadModal"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="downloadModalTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js" defer></script>
@endsection
