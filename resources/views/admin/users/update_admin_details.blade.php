@extends('layouts.admin.admin_layouts')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Settings</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active"> Admin Details</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-6">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Update Admin Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('update.details', $adminDetails->id)}}" method="post"
                                  name="updateAdminDetails" id="updateAdminDetails" enctype="multipart/form-data">
                                @csrf
                                @include('layouts.error')
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <div class="card-body">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email </label>
                                        <input class="form-control" value="{{$adminDetails->email}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin Type </label>
                                        <input class="form-control" value="{{$adminDetails->type}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Admin Name </label>
                                        <input type="text" class="form-control" value="{{$adminDetails->name}}"
                                               placeholder="Enter Admin / Sub Admin Name" id="admin_name"
                                               name="name">
                                    </div>
{{--                                    <div class="form-group">--}}
{{--                                        <label for="exampleInputPassword1">Image</label>--}}
{{--                                        <input type="file" class="form-control" id="image" name="image" accept="image/*">--}}
{{--                                        @if(!empty(Auth::guard('admin')->user()->image))--}}
{{--                                            <input type="hidden" name="current_image"--}}
{{--                                                   value="{{Auth::guard('admin')->user()->image}}"><img style="width:60px;"--}}
{{--                                                                 src="{{ asset('/images/admin_images/small/'.Auth::guard('admin')->user()->image) }}">--}}
{{--                                        @endif--}}
{{--                                    </div>--}}

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>

    </div>
    <!-- /.content-wrapper -->
@endsection
