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
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-header">
{{--              <h3 class="card-title">DataTable with minimal features & hover style</h3>--}}
                <a class="btn btn-outline-primary" href="{{route('surveyors.create')}}"><i class="fas fa-user-plus"></i> Add Surveyors </a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>S.No.</th>
                  <th> Name</th>
                  <th> Address </th>
                  <th> Post </th>
                  <th>Contact Number</th>
                  <th>License Number</th>
                  <th>Class</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @forelse($surveyors as $key=>$surveyor)
                <tr>
                  <td>{{++$key}}</td>
                  <td>{{$surveyor->name}}</td>
                  <td>{{$surveyor->address}}</td>
                  <td>{{$surveyor->post}}</td>
                  <td>{{$surveyor->contact_no}}</td>
                  <td>
                      @if ($surveyor->license_no)
                          {{$surveyor->license_no}}
                  @else
                        NA
                  @endif
                  </td>
                  <td>{{$surveyor->class}}</td>
                  <td>{{$surveyor->status}}</td>
                  <td class="d-inline-flex">
                      <a href="{{route('about.edit', $surveyor->id)}}" class="btn btn-warning"><i class="fas fa-edit"></i> </a> &nbsp;
                      <a href="{{route('about.delete', $surveyor->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
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
