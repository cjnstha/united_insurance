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
            <h1>Claim Form Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Claim Form Detail</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
{{--              <h3 class="card-title">DataTable with minimal features & hover style</h3>--}}
                <a class="btn btn-outline-primary" href="{{route('claim.create')}}"><i class="fas fa-user-plus"></i> Add Claim Form </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Name</th>
                  <th>File</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($claims as $key=>$claim)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$claim->claim_name}}</td>
                  <td>{{$claim->claim_files}}</td>
                  <td>{{$claim->status}}</td>
                  <td class="inline-flex">
                      <a href="{{route('claim.edit',$claim->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit </a> &nbsp; &nbsp;
                      <a href="{{route('claim.destroy',$claim->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete </a>
                  </td>
                </tr>
                    @empty
                    <h3>No Data Available</h3>
                @endforelse
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
