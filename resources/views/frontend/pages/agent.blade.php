@extends('layouts.frontend.master')
@section('title')
    Agent List
@endsection
@section('contents')
<!-- Start Loading -->

<section class="loading-overlay">
    <div class="Loading-Page">
        <h1 class="loader">Loading...</h1>
    </div>
</section>

<!-- End Loading  -->

<div class="content-wrap">


<!-- ============================ financial-statements ================================= -->
    <section class="financial-statements">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped agenttable">
                                <thead class="thead-light">
                                    <tr>
                                        <th>S.N</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Mobile No.</th>
                                        <th>License No.</th>
                                        <th>Agent Code</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($agents as $key=>$agent)
                                    <tr>
                                        <td data-label="S.N.">{{++$key}}</td>
                                        <td data-label="Name">{{$agent->agent_name}}</td>
                                        <td data-label="Email"><a href="mailto:info@unitedinsurance.com">{{$agent->email}}</a> </td>
                                        <td data-label="Mobile No."><a href="tel:+9779812345678">{{$agent->contact_no}}</a></td>
                                        <td data-label="License No.">{{$agent->license_no}}</td>
                                        <td data-label="Agent Code">{{$agent->agent_code}}</td>
                                        <td data-label="Address">{{$agent->agent_address}}</td>
                                    </tr>
                                @empty
                                @endforelse
                                </tbody>
                            </table>
                </div>
            </div>
        </div> <!-- End container -->
    </section>
<!-- ============================ /financial-statements ================================= -->
    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

@endsection
