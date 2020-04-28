@extends('layouts.frontend.master')
@section('title')
    Capital Structures
@endsection
@section('contents')

<!-- ============================ financial-statements ================================= -->
    <section class="financial-statements">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="financial__section documentUI">
                        <div class="contents">
                            <div class="no-structure">
                                    <table class="" style="width:100%; max-width: 100%;">
                                      @forelse($capitals as $capital)
                                          {!!$capital->capital_details!!}
                                @empty
                                          <h1>No Data Available</h1>
                                @endforelse
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End container -->
    </section>

    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
@endsection
