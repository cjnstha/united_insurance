@extends('layouts.admin.admin_layouts')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>User Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">User Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-sm-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-user-plus"></i> Add User</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('infos.create')}}" method="POST">
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
                                        <label for="exampleInputEmail1">Years of Experience</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" name="experience"
                                               placeholder="Enter Experience" required value="{{$infos[0]->experience}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Satisfied Customer</label>
                                        <input type="number" class="form-control" id="exampleInputEmail1" name="customers"
                                               placeholder="Enter Satisfied Customer" required value="{{$infos[0]->customers}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Support(in hours)</label>
                                        <input type="number" class="form-control" id="exampleInputPassword1"
                                               name="support" placeholder="Enter Support (in hours)" required value="{{$infos[0]->support}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Secure and Stable(in %)</label>
                                        <input type="number" class="form-control" id="exampleInputPassword1"
                                               name="stable" placeholder="Enter Secure and Stable (in %)" required value="{{$infos[0]->stable}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select class="custom-select form-control" name="status" id="type">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>

                                        </select>
                                    </div>

                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('infos.create')}}" class="btn btn-outline-danger">Cancel</a>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {
            $("#access").hide();
            $("#type").change(function () {
                var type = $("#type").val();
                if (type == "Admin") {
                    $("#access").hide();
                } else {
                    $("#access").show();
                }
            })
        });
    </script>
@endsection
