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
                            <form role="form" action="{{route('users.store')}}" method="POST">
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
                                        <label for="exampleInputEmail1">Status</label>
                                        <select class="custom-select form-control" name="type" id="type">
                                            <option value="Admin">Admin</option>
                                            <option value="Editor">Editor</option>
                                            <option value="Underwriter">Underwriter</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputEmail1" name="name"
                                               placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1" name="email"
                                               placeholder="Enter email" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                               name="password" placeholder="Password" required>
                                    </div>
                                    <div class="form-group" id="access">
                                        <label class="control-label">Access</label>
                                        <input type="checkbox" name="product_access"
                                               id="product_access" value="1">&nbsp;Products&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="news_access" id="news_access" value="1"
                                               style="margin-top: -3px;">&nbsp;News&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="buy_access" id="buy_access" value="1"
                                               style="margin-top: -3px;">&nbsp;Buy Insurance&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="quotes_access" id="quotes_access" value="1"
                                               style="margin-top: -3px;">&nbsp;Quotes&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="claim_access" id="claim_access" value="1">&nbsp;Claims

                                    </div>
                                    <div class="form-group">
                                        <label class="form-check-label" for="exampleCheck1">Enable</label>
                                        <div class="custom-control custom-checkbox ">
                                            <input class="form-check-input" type="checkbox" id="exampleCheck1"
                                                   name="status" value="1">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('users.index')}}" class="btn btn-outline-danger">Cancel</a>
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
