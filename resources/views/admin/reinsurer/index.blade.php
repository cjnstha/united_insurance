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
            <h1>Re-insurer's Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Re-insurer's Detail</li>
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
                <a class="btn btn-outline-primary" href="{{route('reinsurer.create')}}"><i class="fas fa-user-plus"></i> Add Reinsurer </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No.</th>
                  <th>Title</th>
                  <th>Tagline</th>
                  <th>Image</th>
{{--                  <th>Status</th>--}}
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($reinsurers as $key=>$reinsurer)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$reinsurer->title}}</td>
                  <td>{{$reinsurer->tagline}}</td>
                  <td>
                      <img src="../storage/{{$reinsurer->image}}" style="height: 50px;">
                  </td>
{{--                  <td>{{$reinsurer->status}}</td>--}}
                  <td class="inline-flex">
                      <a href="{{route('reinsurer.edit',$reinsurer->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit </a> &nbsp; &nbsp;
                      <a href="{{route('reinsurer.destroy',$reinsurer->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete </a>
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
