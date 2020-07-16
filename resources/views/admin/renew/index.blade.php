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
                        <h1>Renew Insurance List</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Renew Insurance List</li>
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
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th> Name</th>
                                    <th>Contact No.</th>
                                    <th>Email</th>
                                    <th>Policy Number</th>
                                    <th>Insurance Type</th>
                                    {{--                  <th>Action</th>--}}
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($renews as $key=>$renew)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$renew->name}}</td>
                                        <td>{{$renew->phone_number}}</td>
                                        <td>{{$renew->email}}</td>
                                        <td>{{$renew->policy_number}}</td>
                                        <td>{{ucwords($renew->insurance_type)}}</td>
                                        {{--                  <td class="d-inline-flex">--}}
                                        {{--                      <a href="{{route('buy.view', $buy->id)}}" class="btn btn-warning"><i class="fas fa-eye">View</i> </a> &nbsp;--}}
                                        {{--                      <a href="{{route('branches.destroy', $buy->id)}}" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>--}}
                                        {{--                  </td>--}}
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
