@extends('layouts.frontend.master')
@section('title')
    Quarterly Report
@endsection
@section('contents')

    <!-- ============================ financial-statements ================================= -->
    <section class="financial-statements">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
                            @forelse($quarters as $quarter)
                                <tr>
                                    <td data-label="Name" title="F.Y. 2076/2077 1st Quarter">{{$quarter->name}}</td>
                                    <td data-label="Date Added">{{$quarter->updated_at->toFormattedDateString()}}</td>
                                    <td data-label="View File">
                                        <a class='btn btnViewFile'
                                           data-target="{{asset($quarter->file_name)}}"
                                           data-title="{{$quarter->name}}" data-modal="downloadModal" title="View File"><i
                                                class='fa fa-eye'></i> View</a>
                                    </td>
                                    <td data-label="Download File">
                                        <a href="{{asset($quarter->file_name)}}" title="Download Attachment"
                                           class='btn btnViewFile' download target='_blank'><span><i
                                                    class="fa fa-file-pdf-o" aria-hidden="true"></i></span> Download <i
                                                class="fa fa-download" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                            @empty
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
