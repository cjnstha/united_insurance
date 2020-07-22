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

                            <li><a href="{{url('/agm-minute')}}"> @lang('home.agm_minute') <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/kyc-form')}}">@lang('home.kyc-form') <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/policy-proposal-form')}}">@lang('home.proposal-form') <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/right-share')}}">@lang('home.right-share') <i class="fa fa-angle-right"></i></a></li>
                            <li class="active"><a href="{{url('/claim-form')}}">@lang('home.claim-form') <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/surveyor-listing-application-form')}}">@lang('home.surveyors-form')<i
                                        class="fa fa-angle-right"></i></a></li>
                            {{--                         <li><a href="branch-download.html">Branch Download <i class="fa fa-angle-right"></i></a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="download__container col-lg-8 col-md-8 col-sm-6 col-xs-12 pull-right key_benefits">
                    <!-- FAQ -->
                    <div class="parent-container">
                        <ul class="form-plus-sub">
                            @foreach($products as $product)
                                <li>
                                    <h3 class="closed-form">{{$product->product_name}}
                                        <div class="plus-minus-toggle collapsed"></div>
                                    </h3>
                                    <div class="open-form">
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
                                                <tr>
                                                    <td data-label="Name" title="Surveyor Application Form">
                                                        {{$product->claim_form}}
                                                    </td>
                                                    <td data-label="Date Added">{{$product->updated_at->toFormattedDateString()}}</td>
                                                    <td data-label="View File">
                                                        <a href="{{asset($product->file_pdf)}}" target='_blank'
                                                           class="pdf_download transition3s">
                                                            View
                                                        </a>
                                                    </td>
                                                    <td data-label="Download File">
                                                        <a href="{{asset($product->file_pdf)}}"
                                                           title="Download Attachment" class='btn btnViewFile' download
                                                           target='_blank'><span><i class="fa fa-file-pdf-o"
                                                                                    aria-hidden="true"></i></span>
                                                            Download <i class="fa fa-download"
                                                                        aria-hidden="true"></i></a>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <div class="more-download">
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
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

    <script>
        // Toggle Collapse
        $('.form-plus-sub li .closed-form').click(function () {
            $(this).find('.plus-minus-toggle').toggleClass('collapsed');
            $(this).parent().toggleClass('active');
        });
    </script>

@endsection
