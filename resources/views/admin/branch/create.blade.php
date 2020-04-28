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
            <h1>Branches</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Branches</li>
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
                <h3 class="card-title"><i class="fas fa-user-plus"></i> Add Branch</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('branches.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="Branch Title">Branch Title*</label>
                    <input type="text" class="form-control"  name="branch_title" placeholder="Enter Branch Name" required>
                  </div>
                    <div class="form-group">
                    <label for="Branch Title">Branch Image*</label>
                    <input type="file" class="form-control"  name="branch_image" placeholder="" required>
                  </div>
                  <div class="form-group">
                    <label for="Address">Branch Address*</label>
                      <input class="form-control" name="address" type="text" id="address" placeholder="Enter Branch Address" required>
                  </div>
                     <div class="form-group">
                    <label for="Branch Title">Branch Contact*</label>
                    <input type="text" class="form-control"  name="branch_contact" placeholder="Enter Branch Name" required>
                  </div>
                   <div class="form-group">
                    <label for="Branch Title">Branch Fax No.*</label>
                    <input type="text" class="form-control"  name="branch_fax" placeholder="Enter Branch Name" required>
                  </div>
                  <div class="form-group">
                    <label for="Branch Title">Branch Email*</label>
                    <input type="email" class="form-control"  name="branch_email" placeholder="Enter Branch Name" required>
                  </div>
                  <div class="form-group">
                    <label for="Branch Title">Branch Incharge Name*</label>
                    <input type="text" class="form-control"  name="branch_incharge" placeholder="Enter Branch Name" required>
                  </div>
                  <div class="form-group">
                    <label for="Branch Title">Branch Incharge Position*</label>
                    <input type="text" class="form-control"  name="position" placeholder="Enter Branch Name" required>
                  </div>
                   <div class="form-group">
                        <h3>Nepali Format</h3>
                   </div>
                   <div class="form-group">
                    <div class="form-group">
                    <label for="Branch Title">Branch Title in Nepali*</label>
                    <input type="text" class="form-control"  name="branch_title_nep" placeholder="Enter Branch Name" required>
                  </div>
                  <div class="form-group">
                    <label for="Address">Branch Address in Nepali*</label>
                      <input class="form-control" name="address_nep" type="text" id="address_nep" placeholder="Enter Branch Address" required>
                  </div>
                  <div class="form-group">
                    <label for="Branch Title">Branch Incharge Name in Nepali*</label>
                    <input type="text" class="form-control"  name="branch_incharge_nep" placeholder="Enter Branch Name" required>
                  </div>
                  <div class="form-group">
                    <label for="Branch Title">Branch Incharge Position in Nepali*</label>
                    <input type="text" class="form-control"  name="position_nep" placeholder="Enter Branch Name" required>
                  </div>
                  <div class="form-group">
                    <label for="Status">Statu*s</label>
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
