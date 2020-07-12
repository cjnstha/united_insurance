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
                        <h1>Quotes</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Quotes</li>
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
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Insured Name</th>
                                    <th>Insurance Type</th>
                                    <th>Email</th>
                                    <th>Contact</th>
                                    <th>Created Date</th>
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($quotes as $key=>$quote)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$quote->name_insured}}</td>
                                        <td>{{$quote->insurance_type}}</td>
                                        <td>{{$quote->email}}</td>
                                        <td>{{$quote->phone_number}}</td>
                                        <td>{{$quote->created_at->format('d-M,Y')}}</td>
                                        <td data-label="View File">
                                        <a target="_blank" href="{{asset($quote->documents)}}" class="pdf_download transition3s">
                                            View
                                        </a>
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
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.1.1/pdfobject.min.js" defer></script>
@endsection
