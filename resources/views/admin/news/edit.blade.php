@extends('layouts.admin.admin_layouts')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>News Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">News Form</li>
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
                                <h3 class="card-title"><i class="fas fa-user-plus"></i> Edit News Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('news.update', $news->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">News Title</label>
                                        <input type="text" class="form-control" name="title"
                                               placeholder="Enter News Title"
                                               value="{{$news->title}}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                        <div id="uniform-undefined">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <input name="news_image" id="image" type="file">
                                                        @if(!empty($news->news_image))
                                                            <input type="hidden" name="current_image"
                                                                   value="{{ $news->news_image }}">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(!empty($news->news_image))
                                                            <img style="width:60px;"
                                                                 src="{{ asset('/images/news/small/'.$news->news_image) }}">
                                                        @endif
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Message</label>
                                        <textarea name="description" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <h3>Nepali Format</h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">News Title</label>
                                        <input type="text" class="form-control" name="title_nep"
                                               placeholder="Enter News Title"
                                               required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Message</label>
                                        <textarea name="description_nep" class="form-control" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select class="custom-select form-control" name="status">
                                            <option value="--Select Here--">--Select Here--</option>
                                            <option value="1"{{$news->status == 1 ? 'selected' : '' }} >Active</option>
                                            <option value="0" {{$news->status == 0 ? 'selected' : '' }} >Inactive</option>
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
