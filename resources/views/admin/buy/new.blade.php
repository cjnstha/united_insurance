@extends('layouts.admin.admin_layouts')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Insurance Information</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Insurance Information</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content form-print ">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="letter-head">
                        <img src="http://united-insurance.hostingofprologic.com/asset/images/letterhead.png" alt="">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="title">
                        <img src="http://united-insurance.hostingofprologic.com/asset/images/team/ps-3.jpg" alt="images"
                             style="height: 100px;">
                        <h3 class="print-head-title">Personal Information</h3>
                    </div>
                    <ul class="personal-info">
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
                                    src="http://united-insurance.hostingofprologic.com/images/products/a10fadaf1c8042bf1d6b58b57baf66af.png"
                                    alt=""></span>
                        </li>
                        <li class="col-md-6">
                            <b>Citizenship Back : </b> <span> <img
                                    src="http://united-insurance.hostingofprologic.com/images/products/a10fadaf1c8042bf1d6b58b57baf66af.png"
                                    alt=""></span>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="title">
                        <h3 class="print-head-title"> Policy Information</h3>
                    </div>
                   @include('admin.buy.print')
                </div>
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
