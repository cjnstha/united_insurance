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
            <h1>Surveyors</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Surveyors</li>
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
                <h3 class="card-title"><i class="fas fa-user-plus"></i> Add Surveyors Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('surveyors.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="Surveyors Name">Surveyors Name*</label>
                    <input type="text" class="form-control"  name="name" placeholder="Enter Name" required>
                  </div>
                    <div class="form-group">
                        <label for="Address">Address*</label>
                        <input class="form-control" name="address" type="text" id="address" placeholder="Enter Surveyors Address" required>
                    </div>
                  <div class="form-group">
                    <label for="Post">Post*</label>
                      <input class="form-control" name="post" type="text" id="post" placeholder="Enter Post" required>
                  </div>
                  <div class="form-group">
                    <label for="Post">Contact Number*</label>
                      <input class="form-control" name="contact_no" type="text" id="contact_no" placeholder="Enter Contact Number" required>
                  </div>
                  <div class="form-group">
                    <label for="License Number">License Number*</label>
                      <input class="form-control" name="license_no" type="text" id="license_no" placeholder="Enter License Number" required>
                  </div>
                  <div class="form-group">
                    <label for="Class">Class*</label>
                      <input class="form-control" name="class" type="text" id="classClass" placeholder="Enter Class" required>
                  </div>
                  <div class="form-group">
                    <label for="Status">Status*</label>
                    <select class="custom-select form-control" name="status">
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
