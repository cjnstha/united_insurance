@extends('layouts.admin.admin_layouts')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>BOD Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">BOD Form</li>
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
                <h3 class="card-title"><i class="fas fa-user-plus"></i> Add BOD Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('bod.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">BOD Name</label>
                    <input type="text" class="form-control"  name="bod_name" placeholder="Enter Name" required>
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Photo</label>
                        <input class="form-control" name="bod_imag" type="file" id="image" style="padding-top: 3px;">
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Position</label>
                    <input type="text" class="form-control"  name="bod_position" placeholder="Enter Position" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Message</label>
                      <textarea name="bod_message" class="form-control"required></textarea>
                  </div>
                    <div class="form-group">
                        <h3>Nepali Format</h3>
                    </div>
                   <div class="form-group">
                    <label for="exampleInputEmail1">BOD Name Nepali</label>
                    <input type="text" class="form-control"  name="bod_name_np" placeholder="Enter BOD Name in Nepali" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Position Nepali</label>
                    <input type="text" class="form-control"  name="bod_position_np" placeholder="Enter Position" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Message Nepali</label>
                      <textarea name="bod_message_np" class="form-control"required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
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
