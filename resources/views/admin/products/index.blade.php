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
                        <h1>Product Details</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Product Details</li>
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
                            <a class="btn btn-outline-primary" href="{{route('products.create')}}"><i
                                    class="fas fa-user-plus"></i> Add Product Detail </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>S.No.</th>
                                    <th>Product Name</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($products as $key=>$product)
                                    <tr>
                                        <td>{{++$key}}</td>
                                        <td>{{$product->product_name }}/{{$product->product_name_nep}}</td>
                                        {{--                                        <td>{{ $product->created_at->toFormattedDateString()}}</td>--}}
                                        <td>{{ \Carbon\Carbon::parse($product->created_at)->format('Y-m-d')}}</td>
                                        <td class="inline-flex">
                                            <a href="{{route('products.edit', $product->id)}}"
                                               class="btn btn-warning"><i
                                                    class="fas fa-edit"></i> Edit </a> &nbsp;

                                                <a href="{{route('products.destroy', $product->id)}}"
                                               class="btn btn-danger"><i
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
