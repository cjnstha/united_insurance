@extends('layouts.admin.admin_layouts')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reserve Details Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Reserve Details Form</li>
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
                <h3 class="card-title"><i class="fas fa-plus"></i> Add Reserve Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('reserve.store') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Reserve Details**</label>
                      <textarea id="summary-ckeditor17" name="particulars" class="form-control"required></textarea>
                  </div>
                    <div class="form-group">
                        <h3>Nepali Format</h3>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Reserve Details Nepali**</label>
                      <textarea id="summary-ckeditor18" name="particulars_nep" class="form-control"required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status**</label>
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
@section('scripts')
    <script>
      CKEDITOR.replace( 'summary-ckeditor17' );
      CKEDITOR.replace( 'summary-ckeditor18' );
    </script>
@endsection
