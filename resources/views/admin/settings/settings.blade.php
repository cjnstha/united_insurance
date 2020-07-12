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
                            <li class="breadcrumb-item active">Admin Settings</li>
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
                                <h3 class="card-title">Update Password</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{url('/admin/update-pwd')}}" method="post"
                                  name="updatePasswordForm" id="updatePasswordForm">
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
                                        <label for="exampleInputEmail1">Admin Type </label>
                                        <input class="form-control" value="{{$adminDetails->type}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email </label>
                                        <input class="form-control" value="{{$adminDetails->email}}" readonly>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Current Password</label>
                                        <input type="password" class="form-control" id="current_pwd" name="current_pwd"
                                               placeholder="Enter Password" required>
                                        <span id="chkCurrentPassword"></span>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Password</label>
                                        <input type="password" class="form-control" id="new_pwd" name="new_pwd"
                                               placeholder="Enter New Password" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Confirm Password</label>
                                        <input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd"
                                               placeholder="Enter Confirm Password" required>
                                    </div>

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
