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
                        <h1>Agents</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Agents</li>
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
                                <h3 class="card-title"><i class="fas fa-user-plus"></i> Add Agent Profile</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('agents.store') }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="Agent Name">Agent Name*</label>
                                        <input type="text" class="form-control" name="agent_name"
                                               placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Agent Name">Agent Email*</label>
                                        <input type="text" class="form-control" name="email"
                                               placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Agent Name">Agent Contact*</label>
                                        <input type="text" class="form-control" name="contact_no"
                                               placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Agent Name">Agent License No.*</label>
                                        <input type="text" class="form-control" name="license_no"
                                               placeholder="Enter Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Agent Code">Agent Code*</label>
                                        <input class="form-control" name="agent_code" type="text" id="agent_code"
                                               placeholder="Enter Agent Code" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Address">Address</label>
                                        <input class="form-control" name="agent_address" type="text" id="agent_address"
                                               placeholder="Enter Agent Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="Status">Statu*s</label>
                                        <select class="custom-select form-control" name="agent_status">
                                            <option value="--Select Here--">--Select Here--</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="" class="btn btn-outline-danger">Cancel</a>
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
