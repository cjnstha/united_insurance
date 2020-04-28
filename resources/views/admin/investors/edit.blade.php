@extends('layouts.admin.admin_layouts')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Investment Details Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item active">Investment Details Form</li>
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
                <h3 class="card-title"><i class="fas fa-plus"></i> Add Investment Details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('investment.update', $investments->id) }}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Investment Details**</label>
                      <textarea id="summary-ckeditor15" name="particulars" class="form-control"required>{{$investments->particulars}} </textarea>
                  </div>
                    <div class="form-group">
                        <h3>Nepali Format</h3>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Investment Details Nepali**</label>
                      <textarea id="summary-ckeditor16" name="particulars_nep" class="form-control" required>{{$investments->particulars_nep}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status**</label>
                    <select class="custom-select form-control" name="status">
                        <option value="--Select Here--">--Select Here--</option>
                          <option value="1"{{$investments->status == 1 ? 'selected':''}}>Active</option>
                          <option value="0" {{$investments->status == 0 ? 'selected':''}}>Inactive</option>
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
      CKEDITOR.replace( 'summary-ckeditor15' );
      CKEDITOR.replace( 'summary-ckeditor16' );
    </script>
@endsection


