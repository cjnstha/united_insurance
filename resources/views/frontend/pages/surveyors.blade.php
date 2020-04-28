@extends('layouts.frontend.master')
@section('title')
    Surveyors
@endsection
@section('contents')
    <!-- Start Loading -->

    <section class="loading-overlay">
        <div class="Loading-Page">
            <h1 class="loader">Loading...</h1>
        </div>
    </section>

    <!-- End Loading  -->
    <!-- ============================ financial-statements ================================= -->
    <section class="financial-statements">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped surveyortable">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">S.N.</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">Status</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">License Number</th>
                            <th scope="col">Class</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($surveyors as $key=>$surveyor)
                            <tr>
                                <td scope="row" data-label="S.N.">{{++$key}}</td>
                                <td data-label="Name">{{$surveyor->name}}</td>
                                <td data-label="Address">{{$surveyor->address}}</td>
                                <td data-label="Status">{{$surveyor->post}}</td>
                                <td data-label="Contact No.">{{$surveyor->contact_no}}</td>
                                <td data-label="License No.">{{$surveyor->license_no}}</td>
                                <td data-label="Class">{{$surveyor->class}}</td>
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

