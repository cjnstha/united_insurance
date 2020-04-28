@extends('layouts.frontend.master')
@section('title')
    Reserve
@endsection
@section('contents')
    <!-- ============================ financial-statements ================================= -->
    <section class="financial-statements">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="financial__section documentUI">
                        <div class="contents barChartImplementation">
                            <div class="reporttable datatable">
                                @forelse($reserves as $reserve)
                                    {!! $reserve->particulars !!}
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End container -->
    </section>
    <!-- ============================ financial-statements ================================= -->
    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

@endsection
@section('scripts')
    <!-- custom js of graph -->
    <script type="text/javascript" src="{{asset('asset/js/Chart.bundle.min.js')}}" defer></script>
    <script type="text/javascript" src="{{asset('asset/js/hammer.min.js')}}" defer></script>
    <script type="text/javascript" src="{{asset('asset/js/chartjs-plugin-zoom.min.js')}}" defer></script>
    <script type="text/javascript" src="{{asset('asset/js/pdfmake.min.js')}}" defer></script>
    <script type="text/javascript" src="{{asset('asset/js/vfs_fonts.js')}}" defer></script>
    <script type="text/javascript" src="{{asset('asset/js/datatables.min.js')}}" defer></script>
    <script src="{{asset('asset/js/custom-graph.js')}}" defer></script>
@endsection
