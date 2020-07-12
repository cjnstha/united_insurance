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
                        <h1>News</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact List Page</li>
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
{{--                        <div class="card-header">--}}
{{--                            --}}{{--              <h3 class="card-title">DataTable with minimal features & hover style</h3>--}}
{{--                            <a class="btn btn-outline-primary" href="{{route('news.store')}}"><i--}}
{{--                                    class="fas fa-user-plus"></i> Add News </a>--}}
{{--                        </div>--}}
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Contact Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($contacts as $key=>$contact)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->subject}}</td>
                                        <td>{{$contact->message}}</td>
                                        <td>{{$contact->created_at}}</td>
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
