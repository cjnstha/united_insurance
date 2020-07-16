@extends('layouts.admin.admin_layouts')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Insurance Buy Information</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Insurance Buy Information</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content view-info ">
            <div class="row">
                <div class="col-md-10">
                    <div class="col-md-12 padding-out ">

                        <ul class="insurance-list">
                            <h4>Personal Information</h4>
                            <li class="col-md-6">
                                <b>Name : </b> <span>{{$buys->name}}</span>
                            </li>
                            <li class="col-md-6">
                                <b>Age : </b> <span>{{$buys->age}}Years</span>
                            </li>
                            <li class="col-md-6">
                                <b> Address :</b> <span> {{$buys->address}}</span>
                            </li>
                            <li class="col-md-6">
                                <b> District : </b> <span> {{$buys->district}}</span>
                            </li>
                            <li class="col-md-6">
                                <b> VDC/Municipality :</b> <span> {{$buys->lgus}}</span>
                            </li>
                            <li class="col-md-6">
                                <b> Tole : </b> <span> {{$buys->tole}}</span>
                            </li>
                            <li class="col-md-6">
                                <b>Ward No. : </b> <span> {{$buys->ward_no}} </span>
                            </li>

                            <li class="col-md-6">
                                <b>Phone Number : </b> <span><a href="tel:{{$buys->phone_no}}" class="transition3s">
                                        {{$buys->phone_no}}</a></span>
                            </li>
                            <li class="col-md-6">
                                <b>E-mail :</b> <span> <a href="mailto:info@unitedinsurance.com.np"
                                                          class="transition3s">{{$buys->email}}</a></span>
                            </li>
                            <li class="col-md-6">
                                <b>Date of Birth(AD) : </b> <span> {{$buys->dob}}</span>
                            </li>
                            <li class="col-md-6">
                                <b>Father's Name : </b> <span> {{$buys->father_name}}</span>
                            </li>
                            <li class="col-md-6">
                                <b> Grand Father's Name :</b> <span>  {{$buys->grand_father_name}} </span>
                            </li>
                            <li class="col-md-6">
                                <b>PAN/VAT No. : </b> <span> {{$buys->vat_pan_no}}</span>
                            </li>
                            <li class="col-md-6">
                                <b>Citizenship No. : </b> <span> {{$buys->citizenship_no}}</span>
                            </li>
                            <li class="col-md-6">
                                <b>Citizenship Issued Date : </b> <span> {{$buys->citizenship_issued_date}}</span>
                            </li>
                            <li class="col-md-6">
                                <b>Citizenship Issued Place : </b> <span> {{$buys->citizenship_issued_place}}</span>
                            </li>
                            <li class="col-md-6">
                                <b>Citizenship Front : </b> <span> <img
                                        src="{{asset($buys->citizen_doc)}}"
                                        alt=""></span>
                            </li>
                            <li class="col-md-6">
                                <b>Citizenship Back : </b> <span> <img
                                        src="{{asset($buys->citizen_back)}}"
                                        alt=""></span>
                            </li>
                            <li class="col-md-12">  <!-- do not remove this li (it is used for the spacing) --></li>
                        </ul>
                    </div>
                    <br/>
                    <div class="col-md-12 padding-out">
                        @include('admin.buy.include')
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <div class="single-person-icons">
                        <img src="{{asset($buys->pp_image)}}" alt="">
                    </div>
                    <br/>
                    <div class="button1">
                        <button onclick="window.print()" class="print-button btn" >Print this page</button>
{{--                        <a class="print-button btn" href="{{route('buy.print', $buys->id)}}">Print this Info</a>--}}
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
