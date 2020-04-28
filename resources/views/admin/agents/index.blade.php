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
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            {{--              <h3 class="card-title">DataTable with minimal features & hover style</h3>--}}
                            <a class="btn btn-outline-primary" href="{{route('agents.create')}}"><i
                                    class="fas fa-user-plus"></i> Add Agent Profile </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Agent Name</th>
                                    <th>Agent Email</th>
                                    <th>Agent Contact</th>
                                    <th>Agent License No.</th>
                                    <th>Agent Code</th>
                                    <th>Address</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($agents as $key=>$agent)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$agent->agent_name}}</td>
                                        <td>{{$agent->email}}</td>
                                        <td>{{$agent->contact_no}}</td>
                                        <td>{{$agent->license_no}}</td>
                                        <td>{{$agent->agent_code}}</td>
                                        <td>{{$agent->agent_address}}</td>
                                        <td>{{$agent->created_at->format('d/m/y')}}</td>
                                        <td class="inline-flex">
                                            <a href="{{route('agents.edit', $agent->id)}}" class="btn btn-warning"><i
                                                    class="fas fa-edit"></i> Edit </a> &nbsp; &nbsp;
                                            <a href="{{route('agents.destroy', $agent->id)}}" class="btn btn-danger"><i
                                                    class="fas fa-trash-alt"></i> Delete </a>
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
