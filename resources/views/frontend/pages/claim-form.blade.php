@extends('layouts.frontend.master')
@section('title')
   Claim Form
@endsection
@section('contents')
    <!-- ============================ financial-statements ================================= -->
    <section class="financial-statements">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="tab_nav_side">
                        <!-- Nav tabs -->
                        <ul class="nav-side nav-tabs  tabs-left"><!-- 'tabs-right' for right tabs -->

                            <li><a href="{{url('/agm-minute')}}"> AGM Minute <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/kyc-form')}}">KYC Forms <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/policy-proposal-form')}}">Policy Proposal Form <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/right-share')}}">Right Share <i class="fa fa-angle-right"></i></a></li>
                            <li class="active"><a href="{{url('/claim-form')}}">Claim Form <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/surveyor-listing-application-form')}}">Surveyor Listing
                                    Application Form <i
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
                            @forelse($claims as $claim)
                                <tr>
                                    <td data-label="Name"
                                        title="Surveyor Application Form">{{$claim->claim_name}}</td>
                                    <td data-label="Date Added">{{$claim->updated_at->toFormattedDateString()}}</td>
                                    <td data-label="View File">
                                        <a class='btn btnViewFile'
                                           data-target="{{asset("storage/$claim->claim_files")}}"
                                           data-title="{{$claim->surveyor_name}}"
                                           data-modal="downloadModal" title="View File"><i class='fa fa-eye'></i>
                                            View</a>
                                    </td>
                                    <td data-label="Download File">
                                        <a href="../public/storage/{{$claim->claim_files}}"
                                           title="Download Attachment" class='btn btnViewFile' download
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
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js" defer></script>
@endsection
