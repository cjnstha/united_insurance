@extends('layouts.admin.admin_layouts')
@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Contact</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Contact Add</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <form method="post" action="{{route('contact.store'), $contacts->id}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Contact</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="email"
                                           placeholder="Enter Email" value="{{$contacts->email}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="contact"
                                           placeholder="Enter Contact No." value="{{$contacts->contact}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fax Number</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="fax"
                                           placeholder="Enter Fax No." value="{{$contacts->fax}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">P.O. Box No and Building Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="building_name"
                                           placeholder="Enter P.O Box No., Building Name" value="{{$contacts->building_name}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="address"
                                           placeholder="Enter address" value="{{$contacts->address}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Office Hours</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                           name="office_hour" placeholder="Office HOur" value="{{$contacts->office_hour}}">
                                </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{url('/admin/view-users')}}" class="btn btn-outline-danger">Cancel</a>
                            </div>
                            <!-- /.card -->
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
